<?php
ini_set('display_errors','On');

require_once(__DIR__.'/vendor/autoload.php');

use Carbon\Carbon;

    $carbon = new Carbon();
    $yesterday = $carbon->yesterday();
    echo ($yesterday);

    $faker = Faker\Factory::create();
    echo "<br>";
    echo $faker->address;
