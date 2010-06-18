<?php

function jea_latex($attrs, $thing='') {
    $content = '';
    if (array_key_exists('content', $attrs)) {
        $content .= $attrs['content'];
    }
    $content .= $thing;
    return "<img src='/latex2image.php?latex=".urlencode($content)."' alt='".sha1($content)."'/>";
}

?>
