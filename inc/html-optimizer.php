<?php
if (!defined('EMPIREONE_HTML_OPTIMIZER_STARTED')) {
    define('EMPIREONE_HTML_OPTIMIZER_STARTED', true);

    function empireone_optimize_html_output($html)
    {
        if (!is_string($html) || $html === '' || stripos($html, '<html') === false) {
            return $html;
        }

        $html = preg_replace_callback(
            '#<script\b([^>]*)type=["\']application/ld\+json["\']([^>]*)>(.*?)</script>#is',
            function ($matches) {
                $json = trim($matches[3]);
                $decoded = json_decode($json, true);

                if (json_last_error() === JSON_ERROR_NONE) {
                    $json = json_encode($decoded, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
                } else {
                    $json = preg_replace('/\s+/', ' ', $json);
                }

                return '<script' . $matches[1] . 'type="application/ld+json"' . $matches[2] . '>' . $json . '</script>';
            },
            $html
        );

        $html = preg_replace_callback(
            '#<style\b([^>]*)>(.*?)</style>#is',
            function ($matches) {
                $css = $matches[2];
                $css = preg_replace('#/\*.*?\*/#s', '', $css);
                $css = preg_replace('/\s+/', ' ', $css);
                $css = preg_replace('/\s*([{}:;,>])\s*/', '$1', $css);
                $css = str_replace(';}', '}', $css);

                return '<style' . $matches[1] . '>' . trim($css) . '</style>';
            },
            $html
        );

        $protectedBlocks = [];
        $html = preg_replace_callback(
            '#<(script|style|pre|textarea)\b[^>]*>.*?</\1>#is',
            function ($matches) use (&$protectedBlocks) {
                $token = '###EMPIREONE_PROTECTED_BLOCK_' . count($protectedBlocks) . '###';
                $protectedBlocks[$token] = $matches[0];
                return $token;
            },
            $html
        );

        $html = preg_replace('/<!--(?!\[if|<!|\s*\/?noindex).*?-->/s', '', $html);
        $html = preg_replace_callback(
            '/<[^!\/][^<>]*>/',
            function ($matches) {
                $tag = preg_replace('/\s+/', ' ', $matches[0]);
                $tag = preg_replace('/\s*=\s*/', '=', $tag);
                $tag = preg_replace('/\s+>/', '>', $tag);
                $tag = preg_replace_callback(
                    '/\bclass=(["\'])(.*?)\1/i',
                    function ($classMatches) {
                        $classes = preg_replace('/\s+/', ' ', trim($classMatches[2]));
                        return 'class=' . $classMatches[1] . $classes . $classMatches[1];
                    },
                    $tag
                );

                return $tag;
            },
            $html
        );
        $html = preg_replace('/>\s+</', '><', $html);
        $html = trim($html);

        if (!empty($protectedBlocks)) {
            $html = strtr($html, $protectedBlocks);
        }

        return $html;
    }

    ob_start('empireone_optimize_html_output');
}
