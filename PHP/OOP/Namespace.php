<?php

use Laravist\Person;
use Laravist\Staff;
use Laravist\Business;

$jelly = new Person('JellyBool');
$staff = new Staff();
$laravist = new Business($staff);
$laravist->hire($jelly);

var_dump($staff);
