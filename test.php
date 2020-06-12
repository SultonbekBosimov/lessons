<?php
require 'vendor/autoload.php';

use Carbon\Carbon;
$d =  Carbon::now();
$d->timezone('Asia/Tashkent');
echo $d->format("d.m.y H:i:s");