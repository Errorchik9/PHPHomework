<?php
$month = intval(readline());

if ($month == 2) {
    echo 28;
} elseif (in_array($month, [4, 6, 9, 11])) {
    echo 30;
} else {
    echo 31;
}