<?php
$page_title = 'Book a Strategy Call | EmpireOneCX';
$meta_description = 'Book a strategy call with EmpireOneCX to discuss customer experience, BPO, AI-assisted support, and scalable outsourcing solutions.';
$metaKeywords = 'book a strategy call, EmpireOneCX appointment, customer experience outsourcing, BPO consultation';
include __DIR__ . '/inc/header.php';
?>

<link rel="stylesheet" href="/assets/css/appointment-embed.css?v=20260922-1">

<main class="appointment-page appointment-page--embed">
    <section class="appointment-hero">
        <video class="appointment-hero__video" autoplay muted loop playsinline preload="metadata" aria-hidden="true">
            <source src="/assets/images/contactpgbg.mp4" type="video/mp4">
        </video>
        <div class="appointment-hero__veil"></div>
        <div class="container appointment-hero__content">
            <span>EmpireOneCX consultation</span>
            <h1>Book a strategy call</h1>
            <p><a href="/">Home</a><b>›</b><strong>Appointment</strong></p>
        </div>
    </section>

    <section class="appointment-shell appointment-shell--embed" aria-labelledby="appointment-heading">
        <div class="appointment-card appointment-card--embed">
            <div class="appointment-card__intro">
                <small>START A CONVERSATION</small>
                <h2 id="appointment-heading">Build a better<br><em>customer experience</em></h2>
                <p>Pick a date and time that works for you. Google Calendar will confirm your booking and add a Google Meet link automatically.</p>
                <div class="appointment-points">
                    <div><i class="fas fa-headset" aria-hidden="true"></i><span>Customer support and contact center operations</span></div>
                    <div><i class="fas fa-gears" aria-hidden="true"></i><span>Back-office, finance, QA, and workforce solutions</span></div>
                    <div><i class="fas fa-wand-magic-sparkles" aria-hidden="true"></i><span>Practical AI automation with human-led delivery</span></div>
                </div>
                <a href="mailto:info@empireonecx.com"><i class="fas fa-envelope" aria-hidden="true"></i> info@empireonecx.com</a>
            </div>

            <div class="appointment-embed-panel">
                <div class="appointment-embed-panel__heading">
                    <span>Schedule online</span>
                    <h2>Choose a time that works for you</h2>
                    <p>Appointments are managed securely through Google Calendar.</p>
                </div>
                <div class="google-calendar-embed">
                    <iframe
                        src="https://calendar.google.com/calendar/appointments/schedules/AcZssZ1OdwBd5MfItDzVpGztNEQJ-fR9408wDII22xkZKCGeQlfXTPvYkpS_z-4y-CcAKTfp81Cutwjy?gv=true"
                        title="Book an EmpireOneCX Strategy Call"
                        width="100%"
                        height="850"
                        frameborder="0"
                        allow="fullscreen">
                    </iframe>
                </div>
                <p class="appointment-embed-fallback">The scheduler does not appear? <a href="https://calendar.google.com/calendar/appointments/schedules/AcZssZ1OdwBd5MfItDzVpGztNEQJ-fR9408wDII22xkZKCGeQlfXTPvYkpS_z-4y-CcAKTfp81Cutwjy?gv=true" target="_blank" rel="noopener noreferrer">Open the booking page</a>.</p>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/inc/footer.php'; ?>
