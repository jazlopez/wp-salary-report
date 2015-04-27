<?php

// save the request
require_once(realpath(dirname(__FILE__) . '/../config/config.php'));
require_once(realpath(dirname(__FILE__) . '/../library/Benchmark.php'));

use WP_Compensation\Benchmark;

$benchmark = new Benchmark($_REQUEST);

echo json_encode(
    array(
        'revenue'=>
            array(
                'first_quartile' => $benchmark->getBenchmarkResultRevenueRangeFirstQuartile(),
                'median' => $benchmark->getBenchmarkResultRevenueRangeMedian(),
                'mean' => $benchmark->getBenchmarkResultRevenueRangeMean(),
                'third_quartile' => $benchmark->getBenchmarkResultRevenueRangeThirdQuartile(),
                'client_input' => $benchmark->getWpCompensationLastYearSalary() + $benchmark->getWpCompensationLastYearBonus()
            ),
        'industry'=>
            array(
                'first_quartile' => $benchmark->getBenchmarkResultIndustryFirstQuartile(),
                'median' => $benchmark->getBenchmarkResultIndustryMedian(),
                'mean' => $benchmark->getBenchmarkResultIndustryMean(),
                'third_quartile' => $benchmark->getBenchmarkResultIndustryThirdQuartile(),
                'client_input' => $benchmark->getWpCompensationLastYearSalary() + $benchmark->getWpCompensationLastYearBonus()
            ),
        'ownership'=>
            array(
                'first_quartile' => $benchmark->getBenchmarkResultOwnershipFirstQuartile(),
                'median' => $benchmark->getBenchmarkResultOwnershipMedian(),
                'mean' => $benchmark->getBenchmarkResultOwnershipMean(),
                'third_quartile' => $benchmark->getBenchmarkResultOwnershipThirdQuartile(),
                'client_input' => $benchmark->getWpCompensationLastYearSalary() + $benchmark->getWpCompensationLastYearBonus()
            ),
    )
);


