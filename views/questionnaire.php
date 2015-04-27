<div class="row">
    <div class="small-12 columns">

        <h3>Benchmark your compensation</h3>

        <form id="benchmark-client-data">
            <select id="wp-compensation-position-titles" name="wp-compensation-position-titles">
                <option value="0">Select your title</option>
            </select>

            <select id="wp-compensation-revenue-ranges" name="wp-compensation-revenue-ranges">
                <option value="0">Select your company's annual revenue range</option>
            </select>

            <select id="wp-compensation-company-industries" name="wp-compensation-company-industries">
                <option value="0">Select your company's industry</option>
            </select>

            <select id="wp-compensation-ownership-types" name="wp-compensation-ownership-types">
                <option value="0">Select your company's ownership type</option>
            </select>

            <input type="text" id="wp-compensation-last-year-salary" name="wp-compensation-last-year-salary" value="" class="numeric" placeholder="Enter your salary last year"/>

            <input type="text" id="wp-compensation-last-year-bonus" name="wp-compensation-last-year-bonus" value="" class="numeric" placeholder="Enter your bonus last year"/>

            <input type="text" id="wp-compensation-email" name="wp-compensation-email" value="" placeholder="Enter your email address"/>

            <input type="button" id="wp-draw-charts" value="Benchmark my comp now">
        </form>
    </div>
    <div style="clear:both;"></div>
</div>

<div class="row" style="clear:both"><br/></div>

<div class="row" style="clear:both"><br/></div>

<div id="wp-compensation-bechnmark-results" class="row">
    <div class="small-12 columns">
        <h3>Chart Results</h3>
        <ul id="wp-compensation-chart-results" class="tabs" data-tab role="tablist">
            <li class="tab-title active" role="presentational" >
                <a href="#panel2-1" role="tab" tabindex="0" aria-selected="true" controls="panel2-1">Overall</a>
            </li>
            <li class="tab-title" role="presentational" >
                <a href="#panel2-2" role="tab" tabindex="0" aria-selected="false" controls="panel2-2">Your Revenue Range</a>
            </li>
            <li class="tab-title" role="presentational">
                <a href="#panel2-3" role="tab" tabindex="0" aria-selected="false" controls="panel2-3">Your Industry</a>
            </li>
            <li class="tab-title" role="presentational" >
                <a href="#panel2-4" role="tab" tabindex="0" aria-selected="false" controls="panel2-4">Your Ownership Type</a>
            </li>
        </ul>
        <div class="tabs-content">
            <section role="tabpanel" aria-hidden="false" class="wp-compensation-tabs content active" id="panel2-1">
                <h4>Overall</h4>
                <canvas id="wp-compensation-overall-chart" style="width:90%; height:200px"></canvas>
            </section>
            <section role="tabpanel" aria-hidden="true" class="wp-compensation-tabs content active" id="panel2-2">
                <h4>Your Revenue Range</h4>
                <canvas id="wp-compensation-revenue-chart" style="width:90%; height:200px"></canvas>
            </section>
            <section role="tabpanel" aria-hidden="true" class="wp-compensation-tabs content active" id="panel2-3">
                <h4>Your Industry</h4>
                <canvas id="wp-compensation-industry-chart" style="width:90%; height:200px"></canvas>
            </section>
            <section role="tabpanel" aria-hidden="true" class="wp-compensation-tabs content active" id="panel2-4">
                <h4>Your Ownership Type</h4>
                <canvas id="wp-compensation-ownership-chart" style="width:90%; height:200px"></canvas>
            </section>
        </div>
    </div>
</div>