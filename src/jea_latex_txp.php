<?php

function jea_latex($attrs, $thing='') {
    return "<img src='/latex2image.php?latex=".urlencode($thing)."' alt='".sha1($thing)."'/>";
}

?>
