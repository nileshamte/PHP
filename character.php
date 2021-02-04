<?php
$a = 'orange?';
$search = 'e';
if (preg_match("/{$search}/i", $a)) {
    echo 'true';
}
