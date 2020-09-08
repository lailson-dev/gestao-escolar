<?php

require "../bootstrap.php";

use App\Classes\Layout;

$layout = new Layout;
$layout->add('site.login');
require $layout->master('layout');