<?php
if (!defined('EMPIREONE_HTML_OPTIMIZER_STARTED')) {
    define('EMPIREONE_HTML_OPTIMIZER_STARTED', true);

    function empireone_optimize_html_output($html)
    {
        if (!is_string($html) || $html === '' || stripos($html, '<html') === false) {
            return $html;
        }

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
        $html = preg_replace('/>\s+</', '><', $html);
        $html = trim($html);

        if (!empty($protectedBlocks)) {
            $html = strtr($html, $protectedBlocks);
        }

        return $html;
    }

    ob_start('empireone_optimize_html_output');
}
