jQuery(document).ready(function($){

    PLUGIN = (typeof PLUGIN != 'undefined') ? PLUGIN : '';

    $('#wp-draw-charts').click(function(e){

        // validate all is required

        benchmarkValidationError = false;

        $('#wp-validation-error').remove();

        if ( parseInt($('#wp-compensation-position-titles').val()) === 0 ){
            $('#wp-compensation-position-titles').focus();
            customFieldMessage = 'Please fill out title';
            benchmarkValidationError = true;
        }

        if ( !benchmarkValidationError && parseInt($('#wp-compensation-revenue-ranges').val()) === 0 ){
            $('#wp-compensation-revenue-ranges').focus();
            customFieldMessage = 'Please fill out revenue information';
            benchmarkValidationError = true;
        }

        if ( !benchmarkValidationError && parseInt($('#wp-compensation-company-industries').val()) === 0 ){
            $('#wp-compensation-company-industries').focus();
            customFieldMessage = 'Please fill out company industry';
            benchmarkValidationError = true;
        }

        if ( !benchmarkValidationError && parseInt($('#wp-compensation-ownership-types').val()) === 0 ){
            $('#wp-compensation-ownership-types').focus();
            customFieldMessage = 'Please fill out ownership type';
            benchmarkValidationError = true;
        }

        if ( !benchmarkValidationError && $.trim($('#wp-compensation-last-year-salary').val()).length === 0 ){
            $('#wp-compensation-last-year-salary').focus();
            customFieldMessage = 'Please fill out last year salary';
            benchmarkValidationError = true;
        }

        if ( !benchmarkValidationError && $.trim($('#wp-compensation-last-year-bonus').val()).length === 0 ){
            $('#wp-compensation-last-year-bonus').focus();
            customFieldMessage = 'Please fill out last year bonus';
            benchmarkValidationError = true;
        }

        // TODO: validate email string
        if ( !benchmarkValidationError && $.trim($('#wp-compensation-email').val()).length === 0 ){
            $('#wp-compensation-email').focus();
            customFieldMessage = 'Please fill out email information';
            benchmarkValidationError = true;
        }

        if ( benchmarkValidationError){

            VALIDATION_ERROR_MESSAGE = ' <div id="wp-validation-error" data-alert class="alert-box alert round">';
            VALIDATION_ERROR_MESSAGE+=  customFieldMessage;
            VALIDATION_ERROR_MESSAGE+= ' <a href="#" class="close">&times;</a>';
            VALIDATION_ERROR_MESSAGE+= '</div>';

            $('#benchmark-client-data').before( VALIDATION_ERROR_MESSAGE);

            return false;
        }

        // so far so good



        $.get(PLUGIN +'views/benchmark.php', $('#benchmark-client-data').serialize(), function(data){

            $('#wp-compensation-bechnmark-results').removeClass('hide');
            $('.wp-compensation-tabs').not(':first').removeClass('active');


            var thisChart = null;
            var charts    = ['revenue','industry','ownership'];

            // overall key for labels
            overalLabel = [];
            overalLabel[0] = 'You rank is at first quartile salary range';
            overalLabel[1] = 'You rank is at mean salary range';
            overalLabel[2] = 'You rank is at median salary range';
            overalLabel[3] = 'You rank is at third quartile salary range';

            for(var i=0; i < charts.length; i++){

                switch(charts[i]){
                    case 'revenue':
                        thisChart = revenueChart;
                        break;
                    case 'industry':
                        thisChart = industryChart;
                        break;
                    case 'ownership':
                        thisChart = ownershipChart;
                        break;
                    default:
                        thisChart = null;
                        break;
                }

                if ( !thisChart) break;

                currentDataset = data[charts[i]];

                currentDiff = [];
                currentDiffSalaries = [];

                thisChart.datasets[0].points[0].value = currentDataset.first_quartile;
                thisChart.datasets[0].points[1].value = currentDataset.mean;
                thisChart.datasets[0].points[2].value = currentDataset.median;
                thisChart.datasets[0].points[3].value = currentDataset.third_quartile;

                thisChart.datasets[1].points[0].value = currentDataset.client_input;
                thisChart.datasets[1].points[1].value = currentDataset.client_input;
                thisChart.datasets[1].points[2].value = currentDataset.client_input;
                thisChart.datasets[1].points[3].value = currentDataset.client_input;

                // differences
                currentDiff.push(Math.abs(currentDataset.first_quartile - currentDataset.client_input));
                currentDiff.push(Math.abs(currentDataset.mean - currentDataset.client_input));
                currentDiff.push(Math.abs(currentDataset.median - currentDataset.client_input));
                currentDiff.push(Math.abs(currentDataset.third_quartile - currentDataset.client_input));

                currentDiffSalaries.push(currentDataset.first_quartile);
                currentDiffSalaries.push(currentDataset.mean);
                currentDiffSalaries.push(currentDataset.median);
                currentDiffSalaries.push(currentDataset.third_quartile);

                salaryKey = currentDiff.getKey(Math.min.apply(null, currentDiff));

                overallChart.datasets[0].points[i].label = overalLabel[salaryKey];
                overallChart.datasets[0].points[i].value = currentDiffSalaries[salaryKey];
                overallChart.datasets[1].points[i].value = currentDataset.client_input;

                // labels
                rank = ( currentDataset.client_input > currentDataset.first_quartile ) ? 'above' :
                    ( currentDataset.client_input == currentDataset.first_quartile ) ? 'exact' : 'under';

                thisChart.datasets[0].points[0].label = 'You rank ' + rank + ' the 1st. Quartile';

                rank = ( currentDataset.client_input > currentDataset.mean ) ? 'above' :
                    ( currentDataset.client_input == currentDataset.mean ) ? 'exact' : 'under';

                thisChart.datasets[0].points[1].label = 'You rank ' + rank + ' the Mean';

                rank = ( currentDataset.client_input > currentDataset.median ) ? 'above' :
                    ( currentDataset.client_input == currentDataset.median ) ? 'exact' : 'under';

                thisChart.datasets[0].points[2].label = 'You rank ' + rank + ' the Median';

                rank = ( currentDataset.client_input > currentDataset.third_quartile ) ? 'above' :
                    ( currentDataset.client_input == currentDataset.third_quartile ) ? 'exact' : 'under';

                thisChart.datasets[0].points[3].label = 'You rank ' + rank + ' the 3rd. Quartile';

                thisChart.update();
            }

            // update overall chart
            overallChart.update();

        },'json').error(function(){console.log('Failed to get benchmarks script')})


        e.preventDefault();
    });

    async.series([
        getPositions,
        getRevenueRange,
        getCompanyIndustry,
        getOwnershipType
    ]);

    function getPositions(callback){

        $.get(PLUGIN + 'views/positions.php', function(data){

            $.each(data, function(index,value){

                $('#wp-compensation-position-titles').append(
                    $('<option />').text(value.name).val(value.id)
                );

                return;
            });
        }, 'json').error(function(){console.log('Failed to get position script')});

        callback();
    }

    function getRevenueRange(callback){

        $.get(PLUGIN +'views/revenue-ranges.php', function(data){

            $.each(data, function(index,value){

                $('#wp-compensation-revenue-ranges').append(
                    $('<option />').text(value.name).val(value.id)
                );
            });
        }, 'json').error(function(){console.log('Failed to get revenue range script')});

        callback();
    }

    function getCompanyIndustry(callback){

        $.get(PLUGIN +'views/industry-types.php', function(data){

            $.each(data, function(index,value){

                $('#wp-compensation-company-industries').append(
                    $('<option />').text(value.name).val(value.id)
                );
            });
        }, 'json').error(function(){console.log('Failed to get company industry script')});

        callback();
    }

    function getOwnershipType(callback){

        $.get(PLUGIN +'views/ownership-types.php', function(data){

            $.each(data, function(index,value){

                $('#wp-compensation-ownership-types').append(
                    $('<option />').text(value.name).val(value.id)
                );
            });
        }, 'json').error(function(){console.log('Failed to get ownership type script')});

        callback();
    }

    $('.numeric').keydown(function(e){

        // only one . (dot) is allowed
        if (e.keyCode ===110 || e.keyCode ===190) {

            if ( $(this).val().indexOf('.') > -1 ) {
                e.preventDefault();
            }
        }

        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    // tabs foundation
    $(document).foundation();
});

// prototype
Array.prototype.max = function() {
    return Math.max.apply(null, this);
};

Array.prototype.min = function() {
    return Math.min.apply(null, this);
};

Array.prototype.getKey = function(value){

    for(var j=0;j<this.length;j++){
        if ( this[j] == value) return j;
    }

    return false;
};
