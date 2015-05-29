<?php
$val = 1;


if (empty($val)) {
    echo '$val is either 0, empty, or not set at all';
}

if (isset($val)) {
    echo '$val is set even though it is empty';
}
?>