
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Chart with VueJS</title>
        

    </head>
    <body>
        <div id="app">
            {!! $chart->container() !!}
        </div>
        <script src="https://unpkg.com/vue"></script>
        <script>
            var app = new Vue({
                el: '#app',
            });
        </script>
<!--        Chartjs (> 2.7.1)-->
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
<!--        Highcharts (> 6.0.6)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>
<!--        Fusioncharts (> 3.12.2)-->
       <script src="https://cdn.jsdelivr.net/npm/fusioncharts@3.12.2/fusioncharts.js" charset="utf-8"></script>
<!--       Echarts (> 4.0.2)-->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js" charset="utf-8"></script>
<!--       Frappe (> 1.1.0)-->
       <script src="https://cdn.jsdelivr.net/npm/frappe-charts@1.1.0/dist/frappe-charts.min.iife.js"></script>
<!--       C3 (> 0.6.7)
     includes:
            Line Chart
            Timeseries Chart
            Spline Chart
            Simple XY Line Chart
            Multiple XY Line Chart
            Line Chart with Regions
            Step Chart
            Area Chart
            Stacked Area Chart
            Bar Chart
            Stacked Bar Chart
            Scatter Plot
            Pie Chart
            Donut Chart
            Gauge Chart
            Combination Chart
     
     -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.7.0/d3.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.6.7/c3.min.js"></script>
        --}}
        {!! $chart->script() !!}
    </body>
</html>
