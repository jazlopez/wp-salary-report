<script type="text/javascript">
    var PLUGIN = '<?php echo plugins_url('wp-compensation/') ?>';
</script>
<?php
require_once(__DIR__ . '/config/config.php');
require_once(__DIR__ . '/library/Benchmark.php');

use WP_Compensation\Benchmark;

/**
 * Plugin Name: Benchmark your compensation
 * Description: Benchmark your annual revenue by industry type, employee role, industry size
 * Version: 1.0
 * Author: Jaziel Lopez, Arte Digital, MX
 * @version 1.0
 * @author Jaziel Lopez
 * @author Arte Digital,MX
 */

$benchmark = new Benchmark();
$benchmark->enablePlugin();