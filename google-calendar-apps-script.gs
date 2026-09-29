/**
 * EmpireOneCX appointment scheduler.
 *
 * Deploy as a Web app:
 *   Execute as: Me (info@empireonecx.com)
 *   Who has access: Anyone
 *
 * Before deploying, replace APPS_SCRIPT_TOKEN with the same long random value
 * configured as google_apps_script_token in empireonecx-mail-config.php.
 * Also enable the Advanced Google service named "Google Calendar API" in the
 * Apps Script project (Services -> + -> Google Calendar API).
 */
const CALENDAR_ID = 'info@empireonecx.com';
const APPS_SCRIPT_TOKEN = 'REPLACE_WITH_A_LONG_RANDOM_SHARED_TOKEN';

function doPost(e) {
  try {
    const data = e && e.parameter ? e.parameter : {};

    if (data.token !== APPS_SCRIPT_TOKEN) {
      return jsonResponse({ success: false, message: 'Unauthorized request.' });
    }

    const required = ['name', 'email', 'appointment_date', 'appointment_time'];
    required.forEach(function (field) {
      if (!String(data[field] || '').trim()) {
        throw new Error('Missing required field: ' + field);
      }
    });

    const timeZone = data.time_zone || Session.getScriptTimeZone() || 'America/New_York';
    const durationMinutes = Number(data.duration_minutes || 30);
    const start = Utilities.parseDate(
      data.appointment_date + ' ' + data.appointment_time,
      timeZone,
      'yyyy-MM-dd hh:mm a'
    );
    const end = new Date(start.getTime() + durationMinutes * 60 * 1000);
    const name = String(data.name).trim();
    const email = String(data.email).trim();
    const company = String(data.company_name || '').trim();
    const inquiry = String(data.inquiry_type || '').trim();

    const description = [
      'EmpireOneCX strategy call',
      '',
      'Name: ' + name,
      'Email: ' + email,
      company ? 'Company: ' + company : '',
      inquiry ? 'Focus: ' + inquiry : '',
      '',
      'Booked through empireonecx.com.'
    ].filter(Boolean).join('\n');

    const event = {
      summary: 'EmpireOneCX Strategy Call - ' + name,
      description: description,
      start: {
        dateTime: start.toISOString(),
        timeZone: timeZone
      },
      end: {
        dateTime: end.toISOString(),
        timeZone: timeZone
      },
      attendees: [{ email: email }],
      conferenceData: {
        createRequest: {
          requestId: Utilities.getUuid(),
          conferenceSolutionKey: { type: 'hangoutsMeet' }
        }
      }
    };

    const created = Calendar.Events.insert(event, CALENDAR_ID, {
      conferenceDataVersion: 1,
      sendUpdates: 'all'
    });

    const entryPoints = (created.conferenceData && created.conferenceData.entryPoints) || [];
    const meetEntry = entryPoints.find(function (entry) {
      return entry.entryPointType === 'video';
    });

    return jsonResponse({
      success: true,
      event_id: created.id,
      calendar_url: created.htmlLink || '',
      meet_url: meetEntry ? meetEntry.uri : ''
    });
  } catch (error) {
    console.error(error);
    return jsonResponse({ success: false, message: String(error.message || error) });
  }
}

function jsonResponse(payload) {
  return ContentService
    .createTextOutput(JSON.stringify(payload))
    .setMimeType(ContentService.MimeType.JSON);
}
