
jQuery(document).ready(function($){

    // make all responsive
    Chart.defaults.global.responsive = true;


    var COMPENSATION_DEFAULT_CHART_OPTIONS = {scaleStartValue: 0};

    var QUARTILE_LABELS = ["1st. Quartile", "Mean", "Median", '3rd. Quartile'];

    // overall chart declaration data
    overall = {
        labels: ["Your Revenue Range", "Your Industry", "Your Ownership Type"],
        datasets: [
            {
                label: "Expected",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [0,0,0]
            },
            {
                label: "Benchmark",
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [0,0,0]
            }
        ]
    };

    // revenue chart declaration data
    var revenue = {
        labels: QUARTILE_LABELS,
        datasets: [
            {
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [0,0,0,0,0]
            },
            {
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [0,0,0,0,0]
            }
        ]
    };

    // industry chart declaration data
    var industry = {
        labels: QUARTILE_LABELS,
        datasets: [
            {
                label: "Expected",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [0,0,0,0,0]
            },
            {
                label: "Benchmark",
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [0,0,0,0,0]
            }
        ]
    };

    // industry chart declaration data
    var ownershipType = {
        labels: QUARTILE_LABELS,
        datasets: [
            {
                label: "Expected",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [0,0,0,0,0]
            },
            {
                label: "Benchmark",
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [0,0,0,0,0]
            }
        ]
    };

    // Get contexts
    var overallContext = $("#wp-compensation-overall-chart").get(0).getContext("2d");
    var revenueContext = $("#wp-compensation-revenue-chart").get(0).getContext("2d");
    var industryContext = $("#wp-compensation-industry-chart").get(0).getContext("2d");
    var ownershipContext = $("#wp-compensation-ownership-chart").get(0).getContext("2d");

    // print initial charts
    overallChart   = new Chart(overallContext).Line(overall, COMPENSATION_DEFAULT_CHART_OPTIONS);
    revenueChart   = new Chart(revenueContext).Line(revenue, COMPENSATION_DEFAULT_CHART_OPTIONS);
    industryChart  = new Chart(industryContext).Line(industry, COMPENSATION_DEFAULT_CHART_OPTIONS);
    ownershipChart = new Chart(ownershipContext).Line(ownershipType, COMPENSATION_DEFAULT_CHART_OPTIONS);

    // captured context and charts are all init
    // hide them until they are needed
    $('#wp-compensation-bechnmark-results').addClass('hide');
});