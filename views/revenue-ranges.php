<?php
require_once(realpath(dirname(__FILE__) . '/../config/config.php'));
require_once(realpath(dirname(__FILE__) . '/../library/Benchmark.php'));

use WP_Compensation\Benchmark;

$benchmark = new Benchmark();
$positions = $benchmark->getRevenueRanges();

if ( $positions ){
    foreach($positions as $position) $data[] = $position;
}

echo json_encode($data);
die();