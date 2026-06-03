<?php
function getInsightPostFiles()
{
    $files = glob(__DIR__ . '/*.php') ?: [];

    return array_values(array_filter($files, function ($file) {
        $filename = basename($file);
        return !in_array($filename, ['index.php', 'posts.php'], true);
    }));
}

function getInsightPosts()
{
    static $posts = null;

    if ($posts !== null) {
        return $posts;
    }

    $posts = [];
    $previousMetadataOnly = $GLOBALS['INSIGHT_METADATA_ONLY'] ?? null;
    $GLOBALS['INSIGHT_METADATA_ONLY'] = true;

    foreach (getInsightPostFiles() as $file) {
        $post = include $file;

        if (!is_array($post) || empty($post['slug']) || empty($post['title'])) {
            continue;
        }

        $post['url'] = $post['url'] ?? '/insights/' . $post['slug'];
        $posts[$post['slug']] = $post;
    }

    if ($previousMetadataOnly === null) {
        unset($GLOBALS['INSIGHT_METADATA_ONLY']);
    } else {
        $GLOBALS['INSIGHT_METADATA_ONLY'] = $previousMetadataOnly;
    }

    uasort($posts, function ($first, $second) {
        $dateComparison = strcmp($second['datePublished'] ?? '', $first['datePublished'] ?? '');

        if ($dateComparison !== 0) {
            return $dateComparison;
        }

        return ($first['sortOrder'] ?? 999) <=> ($second['sortOrder'] ?? 999);
    });

    return $posts;
}

function getInsightPost($slug)
{
    $posts = getInsightPosts();
    return $posts[$slug] ?? null;
}

function normalizeInsightCategories($post)
{
    if (!empty($post['categories']) && is_array($post['categories'])) {
        return array_values(array_filter($post['categories']));
    }

    if (!empty($post['category'])) {
        return [$post['category']];
    }

    return ['Insights'];
}

function getInsightPrimaryCategory($post)
{
    $categories = normalizeInsightCategories($post);
    return $categories[0] ?? 'Insights';
}

function getInsightCategorySlug($category)
{
    $slug = strtolower(trim((string) $category));
    $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
    return trim($slug, '-');
}

function getInsightCategories($posts = null)
{
    $posts = $posts ?? getInsightPosts();
    $categories = [];

    foreach ($posts as $post) {
        foreach (normalizeInsightCategories($post) as $category) {
            $categories[getInsightCategorySlug($category)] = $category;
        }
    }

    return $categories;
}

function formatInsightDate($date)
{
    $timestamp = strtotime($date);
    return $timestamp ? date('M j, Y', $timestamp) : $date;
}
