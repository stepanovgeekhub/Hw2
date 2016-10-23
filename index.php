<?php

require_once(__DIR__.'/vendor/autoload.php');

use Carbon\Carbon;

    $carbon = new Carbon();
    $yesterday = $carbon->yesterday();
    echo ($yesterday);
