<?php

namespace WP_Compensation;


if (!class_exists('WP_Compensation\\Benchmark')) {

    class Benchmark{

        public $_db;

        protected $_id;
        protected $_wp_compensation_position_title_id;
        protected $_wp_compensation_revenue_range_id;
        protected $_wp_compensation_company_industry_id;
        protected $_wp_compensation_ownership_type_id;
        protected $_wp_compensation_last_year_salary;
        protected $_wp_compensation_last_year_bonus;
        protected $_wp_compensation_email;
        protected $_created_date;

        protected $_benchmark_result_revenue_range_mean;
        protected $_benchmark_result_revenue_range_first_quartile;
        protected $_benchmark_result_revenue_range_median;
        protected $_benchmark_result_revenue_range_third_quartile;

        protected $_benchmark_result_industry_mean;
        protected $_benchmark_result_industry_first_quartile;
        protected $_benchmark_result_industry_median;
        protected $_benchmark_result_industry_third_quartile;

        protected $_benchmark_result_ownership_mean;
        protected $_benchmark_result_ownership_first_quartile;
        protected $_benchmark_result_ownership_median;
        protected $_benchmark_result_ownership_third_quartile;

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->_id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->_id = $id;
        }

        /**
         * @return mixed
         */
        public function getWpCompensationCompanyIndustryId()
        {
            return $this->_wp_compensation_company_industry_id;
        }

        /**
         * @param mixed $wp_compensation_company_industry_id
         */
        public function setWpCompensationCompanyIndustryId($wp_compensation_company_industry_id)
        {
            $this->_wp_compensation_company_industry_id = $wp_compensation_company_industry_id;
        }

        /**
         * @return mixed
         */
        public function getWpCompensationEmail()
        {
            return $this->_wp_compensation_email;
        }

        /**
         * @param mixed $wp_compensation_email
         */
        public function setWpCompensationEmail($wp_compensation_email)
        {
            $this->_wp_compensation_email = $wp_compensation_email;
        }

        /**
         * @return mixed
         */
        public function getWpCompensationLastYearBonus()
        {
            return $this->_wp_compensation_last_year_bonus;
        }

        /**
         * @param mixed $wp_compensation_last_year_bonus
         */
        public function setWpCompensationLastYearBonus($wp_compensation_last_year_bonus)
        {
            $this->_wp_compensation_last_year_bonus = (float)$wp_compensation_last_year_bonus;
        }

        /**
         * @return mixed
         */
        public function getWpCompensationLastYearSalary()
        {
            return $this->_wp_compensation_last_year_salary;
        }

        /**
         * @param mixed $wp_compensation_last_year_salary
         */
        public function setWpCompensationLastYearSalary($wp_compensation_last_year_salary)
        {
            $this->_wp_compensation_last_year_salary = (float)$wp_compensation_last_year_salary;
        }

        /**
         * @return mixed
         */
        public function getWpCompensationOwnershipTypeId()
        {
            return $this->_wp_compensation_ownership_type_id;
        }

        /**
         * @param mixed $wp_compensation_ownership_type_id
         */
        public function setWpCompensationOwnershipTypeId($wp_compensation_ownership_type_id)
        {
            $this->_wp_compensation_ownership_type_id = $wp_compensation_ownership_type_id;
        }

        /**
         * @return mixed
         */
        public function getWpCompensationPositionTitleId()
        {
            return $this->_wp_compensation_position_title_id;
        }

        /**
         * @param mixed $wp_compensation_position_title_id
         */
        public function setWpCompensationPositionTitleId($wp_compensation_position_title_id)
        {
            $this->_wp_compensation_position_title_id = $wp_compensation_position_title_id;
        }

        /**
         * @return mixed
         */
        public function getWpCompensationRevenueRangeId()
        {
            return $this->_wp_compensation_revenue_range_id;
        }

        /**
         * @param mixed $wp_compensation_revenue_range_id
         */
        public function setWpCompensationRevenueRangeId($wp_compensation_revenue_range_id)
        {
            $this->_wp_compensation_revenue_range_id = $wp_compensation_revenue_range_id;
        }

        /**
         * @return mixed
         */
        public function getCreatedDate()
        {
            return $this->_created_date;
        }

        /**
         * @param mixed $created_date
         */
        public function setCreatedDate($created_date)
        {
            $this->_created_date = $created_date;
        }

        /**
         * @return mixed
         */
        public function getBenchmarkResultIndustryFirstQuartile()
        {
            return $this->_benchmark_result_industry_first_quartile;
        }

        /**
         * @param mixed $benchmark_result_industry_first_quartile
         */
        public function setBenchmarkResultIndustryFirstQuartile($benchmark_result_industry_first_quartile)
        {
            $this->_benchmark_result_industry_first_quartile = (float)$benchmark_result_industry_first_quartile;
        }

        /**
         * @return mixed
         */
        public function getBenchmarkResultIndustryMean()
        {
            return $this->_benchmark_result_industry_mean;
        }

        /**
         * @param mixed $benchmark_result_industry_mean
         */
        public function setBenchmarkResultIndustryMean($benchmark_result_industry_mean)
        {
            $this->_benchmark_result_industry_mean = (float)$benchmark_result_industry_mean;
        }

        /**
         * @return mixed
         */
        public function getBenchmarkResultIndustryMedian()
        {
            return $this->_benchmark_result_industry_median;
        }

        /**
         * @param mixed $benchmark_result_industry_median
         */
        public function setBenchmarkResultIndustryMedian($benchmark_result_industry_median)
        {
            $this->_benchmark_result_industry_median = (float)$benchmark_result_industry_median;
        }

        /**
         * @return mixed
         */
        public function getBenchmarkResultIndustryThirdQuartile()
        {
            return $this->_benchmark_result_industry_third_quartile;
        }

        /**
         * @param mixed $benchmark_result_industry_third_quartile
         */
        public function setBenchmarkResultIndustryThirdQuartile($benchmark_result_industry_third_quartile)
        {
            $this->_benchmark_result_industry_third_quartile = (float)$benchmark_result_industry_third_quartile;
        }

        /**
         * @return mixed
         */
        public function getBenchmarkResultOwnershipFirstQuartile()
        {
            return $this->_benchmark_result_ownership_first_quartile;
        }

        /**
         * @param mixed $benchmark_result_ownership_first_quartile
         */
        public function setBenchmarkResultOwnershipFirstQuartile($benchmark_result_ownership_first_quartile)
        {
            $this->_benchmark_result_ownership_first_quartile = (float)$benchmark_result_ownership_first_quartile;
        }

        /**
         * @return mixed
         */
        public function getBenchmarkResultOwnershipMean()
        {
            return $this->_benchmark_result_ownership_mean;
        }

        /**
         * @param mixed $benchmark_result_ownership_mean
         */
        public function setBenchmarkResultOwnershipMean($benchmark_result_ownership_mean)
        {
            $this->_benchmark_result_ownership_mean = (float)$benchmark_result_ownership_mean;
        }

        /**
         * @return mixed
         */
        public function getBenchmarkResultOwnershipMedian()
        {
            return $this->_benchmark_result_ownership_median;
        }

        /**
         * @param mixed $benchmark_result_ownership_median
         */
        public function setBenchmarkResultOwnershipMedian($benchmark_result_ownership_median)
        {
            $this->_benchmark_result_ownership_median = (float)$benchmark_result_ownership_median;
        }

        /**
         * @return mixed
         */
        public function getBenchmarkResultOwnershipThirdQuartile()
        {
            return $this->_benchmark_result_ownership_third_quartile;
        }

        /**
         * @param mixed $benchmark_result_ownership_third_quartile
         */
        public function setBenchmarkResultOwnershipThirdQuartile($benchmark_result_ownership_third_quartile)
        {
            $this->_benchmark_result_ownership_third_quartile = (float)$benchmark_result_ownership_third_quartile;
        }

        /**
         * @return mixed
         */
        public function getBenchmarkResultRevenueRangeFirstQuartile()
        {
            return $this->_benchmark_result_revenue_range_first_quartile;
        }

        /**
         * @param mixed $benchmark_result_revenue_range_first_quartile
         */
        public function setBenchmarkResultRevenueRangeFirstQuartile($benchmark_result_revenue_range_first_quartile)
        {
            $this->_benchmark_result_revenue_range_first_quartile = (float)$benchmark_result_revenue_range_first_quartile;
        }

        /**
         * @return mixed
         */
        public function getBenchmarkResultRevenueRangeMean()
        {
            return $this->_benchmark_result_revenue_range_mean;
        }

        /**
         * @param mixed $benchmark_result_revenue_range_mean
         */
        public function setBenchmarkResultRevenueRangeMean($benchmark_result_revenue_range_mean)
        {
            $this->_benchmark_result_revenue_range_mean = (float)$benchmark_result_revenue_range_mean;
        }

        /**
         * @return mixed
         */
        public function getBenchmarkResultRevenueRangeMedian()
        {
            return $this->_benchmark_result_revenue_range_median;
        }

        /**
         * @param mixed $benchmark_result_revenue_range_median
         */
        public function setBenchmarkResultRevenueRangeMedian($benchmark_result_revenue_range_median)
        {
            $this->_benchmark_result_revenue_range_median = (float)$benchmark_result_revenue_range_median;
        }

        /**
         * @return mixed
         */
        public function getBenchmarkResultRevenueRangeThirdQuartile()
        {
            return $this->_benchmark_result_revenue_range_third_quartile;
        }

        /**
         * @param mixed $benchmark_result_revenue_range_third_quartile
         */
        public function setBenchmarkResultRevenueRangeThirdQuartile($benchmark_result_revenue_range_third_quartile)
        {
            $this->_benchmark_result_revenue_range_third_quartile = (float)$benchmark_result_revenue_range_third_quartile;
        }

        /**
         * @return \PDO
         */
        public function getDb()
        {
            return $this->_db;
        }

        /**
         * @param \PDO $db
         */
        public function setDb($db)
        {
            $this->_db = $db;
        }



        /**
         * @param null $data
         */
        public function __construct($data=null){

            try {

                $dns = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
                $this->_db = new \PDO($dns, DB_USER, DB_PASS);

                array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'");

                if ( !is_null($data)){

                    // save the request
                    $this->setWpCompensationPositionTitleId($data['wp-compensation-position-titles']);
                    $this->setWpCompensationRevenueRangeId($data['wp-compensation-revenue-ranges']);
                    $this->setWpCompensationCompanyIndustryId($data['wp-compensation-company-industries']);
                    $this->setWpCompensationOwnershipTypeId($data['wp-compensation-ownership-types']);
                    $this->setWpCompensationLastYearSalary($data['wp-compensation-last-year-salary']);
                    $this->setWpCompensationLastYearBonus($data['wp-compensation-last-year-bonus']);
                    $this->setWpCompensationEmail($data['wp-compensation-email']);
                    $this->save();

                    // benchmark
                    $this->getRevenueRangeBenchmark();
                    $this->getIndustryBenchmark();
                    $this->getOwnershipBenchmark();
                }

            } catch(\Exception $e){
                error_log($e->getMessage());
            }
        }

        /**
         * Create a record for benchmark request
         */
        public function save(){

            try{

                // create new benchmark request
                $sql = ' INSERT INTO `wp-compensation-benchmark` ';
                $sql.= ' ( `wp-compensation-position-title_id`, `wp-compensation-revenue-range_id`, `wp-compensation-company-industry_id`,';
                $sql.= ' `wp-compensation-ownership-type_id`, `wp-compensation-last-year-salary`, `wp-compensation-last-year-bonus`,';
                $sql.= ' `wp-compensation-email`, `created_date`) ';
                $sql.= ' VALUES ';
                $sql.= ' (:wp_compensation_position_title_id, :wp_compensation_revenue_range_id, :wp_compensation_company_industry_id,';
                $sql.= ' :wp_compensation_ownership_type_id, :wp_compensation_last_year_salary, :wp_compensation_last_year_bonus,';
                $sql.= ' :wp_compensation_email, NOW())';

                $stmt = $this->_db->prepare($sql);

                if ( $stmt === false) {
                    $error = $this->_db->errorInfo();
                    throw new \Exception($error[2]);
                }

                $params = array(
                    ':wp_compensation_position_title_id' => $this->getWpCompensationPositionTitleId(),
                    ':wp_compensation_revenue_range_id' => $this->getWpCompensationRevenueRangeId(),
                    ':wp_compensation_company_industry_id' => $this->getWpCompensationCompanyIndustryId(),
                    ':wp_compensation_ownership_type_id' => $this->getWpCompensationOwnershipTypeId(),
                    ':wp_compensation_last_year_salary' => $this->getWpCompensationLastYearSalary(),
                    ':wp_compensation_last_year_bonus' => $this->getWpCompensationLastYearBonus(),
                    ':wp_compensation_email' => $this->getWpCompensationEmail()
                );

                $status = $stmt->execute($params);

                if ( $status === false) {
                    $error = $this->_db->errorInfo();
                    throw new \Exception($error[2]);
                }

            } catch(\Exception $e){
                error_log($e->getMessage());
            }
        }

        /**
         * Enable the class as WordPress Plugin
         */
        public function enablePlugin(){

            add_shortcode('wp_compensation_questionnaire', array(&$this, 'showQuestionnaire'));

            add_action( 'wp_enqueue_scripts', array(&$this,'enqueueStyleScripts'));
        }

        /**
         * Enqueue styles and js scripts
         */
        public function enqueueStyleScripts(){
            wp_enqueue_style( 'docs', plugins_url('wp-compensation/views/resources/css/docs.css'));
            wp_enqueue_script( 'jquery', plugins_url('wp-compensation/views/resources/js/jquery.js'));
            wp_enqueue_script( 'async', plugins_url('wp-compensation/views/resources/js/async.js'));
            wp_enqueue_script( 'chart.min', plugins_url('wp-compensation/views/resources/js/chart-js/Chart.min.js'));
            wp_enqueue_script( 'compensation', plugins_url('wp-compensation/views/resources/js/compensation.js'));
            wp_enqueue_script( 'foundation.min', plugins_url('wp-compensation/views/resources/js/foundation.min.js'));
            wp_enqueue_script( 'foundation.tab', plugins_url('wp-compensation/views/resources/js/foundation.tab.js'));
            wp_enqueue_script( 'questionnaire', plugins_url('wp-compensation/views/resources/js/questionnaire.js'));
        }

        /**
         * Show compensation questionnaire
         */
        public static function showQuestionnaire(){
            echo file_get_contents(realpath(dirname(__FILE__) . '/../views/questionnaire.php'));
        }

        /**
         * Get industry positions
         */
        public function getPositions(){

            try {

                $sql = ' SELECT * FROM `wp-compensation-positions` WHERE `active` = 1 ORDER BY `name` ';

                return $this->_db->query($sql);

            } catch (\Exception $e){
                error_log($e->getMessage());
            }

            return false;
        }

        /**
         * Get industry names
         */
        public function getIndustries(){

            try {

                $sql = ' SELECT * FROM `wp-compensation-industries` WHERE `active` = 1 ORDER BY `name` ';

                return $this->_db->query($sql);

            } catch (\Exception $e){
                error_log($e->getMessage());
            }

            return false;
        }

        /**
         * Get user industry benchmark
         */
        public function getIndustryBenchmark(){

            try {

                $sql = ' SELECT * FROM `wp-compensation-salary-industries` ';
                $sql.= ' WHERE `industry_id` = :industry_id ';
                $sql.= ' AND `position_id` = :position_id ';

                $stmt = $this->_db->prepare($sql);

                if ( $stmt === false) {
                    $error = $this->_db->errorInfo();
                    throw new \Exception($error[2]);
                }

                $params = array(
                    ':industry_id' => $this->getWpCompensationCompanyIndustryId(),
                    ':position_id' => $this->getWpCompensationPositionTitleId()
                );

                $status = $stmt->execute($params);

                if ( $status === false) {
                    $error = $this->_db->errorInfo();
                    throw new \Exception($error[2]);
                }

                $row = $stmt->fetchObject();

                $this->setBenchmarkResultIndustryMean($row->mean);
                $this->setBenchmarkResultIndustryFirstQuartile($row->first_quartile);
                $this->setBenchmarkResultIndustryMedian($row->median);
                $this->setBenchmarkResultIndustryThirdQuartile($row->third_quartile);

            } catch (\Exception $e){
                error_log($e->getMessage());
            }

            return false;

        }

        /**
         * Get revenue ranges
         */
        public function getRevenueRanges(){

            try {

                $sql = ' SELECT * FROM `wp-compensation-revenue-ranges` WHERE `active` = 1 ORDER BY `name` ';

                return $this->_db->query($sql);

            } catch (\Exception $e){
                error_log($e->getMessage());
            }

            return false;
        }


        /**
         * Get user revenue range benchmar
         */
        public function getRevenueRangeBenchmark(){

            try {

                $sql = ' SELECT * FROM `wp-compensation-salary-revenue-ranges` ';
                $sql.= ' WHERE `revenue_range_id` = :revenue_range_id ';
                $sql.= ' AND `position_id` = :position_id ';

                $stmt = $this->_db->prepare($sql);

                if ( $stmt === false) {
                    $error = $this->_db->errorInfo();
                    throw new \Exception($error[2]);
                }

                $params = array(
                    ':revenue_range_id' => $this->getWpCompensationRevenueRangeId(),
                    ':position_id' => $this->getWpCompensationPositionTitleId()
                );

                $status = $stmt->execute($params);

                if ( $status === false) {
                    $error = $this->_db->errorInfo();
                    throw new \Exception($error[2]);
                }

                $row = $stmt->fetchObject();

                $this->setBenchmarkResultRevenueRangeMean($row->mean);
                $this->setBenchmarkResultRevenueRangeFirstQuartile($row->first_quartile);
                $this->setBenchmarkResultRevenueRangeMedian($row->median);
                $this->setBenchmarkResultRevenueRangeThirdQuartile($row->third_quartile);

            } catch (\Exception $e){
                error_log($e->getMessage());
            }

            return false;

        }

        /**
         * Get ownership types
         */
        public function getOwnershipTypes(){

            try {

                $sql = ' SELECT * FROM `wp-compensation-ownership-types` WHERE `active` = 1 ORDER BY `name` ';

                return $this->_db->query($sql);

            } catch (\Exception $e){
                error_log($e->getMessage());
            }

            return false;
        }

        /**
         * Get user industry benchmark
         */
        public function getOwnershipBenchmark(){

            try {

                $sql = ' SELECT * FROM `wp-compensation-salary-ownership-types` ';
                $sql.= ' WHERE `ownership_type_id` = :ownership_type_id ';
                $sql.= ' AND `position_id` = :position_id ';

                $stmt = $this->_db->prepare($sql);

                if ( $stmt === false) {
                    $error = $this->_db->errorInfo();
                    throw new \Exception($error[2]);
                }

                $params = array(
                    ':ownership_type_id' => $this->getWpCompensationOwnershipTypeId(),
                    ':position_id' => $this->getWpCompensationPositionTitleId()
                );

                $status = $stmt->execute($params);

                if ( $status === false) {
                    $error = $this->_db->errorInfo();
                    throw new \Exception($error[2]);
                }

                $row = $stmt->fetchObject();

                $this->setBenchmarkResultOwnershipMean($row->mean);
                $this->setBenchmarkResultOwnershipFirstQuartile($row->first_quartile);
                $this->setBenchmarkResultOwnershipMedian($row->median);
                $this->setBenchmarkResultOwnershipThirdQuartile($row->third_quartile);

            } catch (\Exception $e){
                error_log($e->getMessage());
            }

            return false;

        }


    }
} else {
    error_log('Unable to load Benchmark class. Namespace already defined.');
}