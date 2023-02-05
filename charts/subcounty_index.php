<!DOCTYPE html>
<html>
<head>
<title>Charts</title>
<style type="text/css">
BODY {
    width: 900PX;
}

#chart-container {
    width: 100%;
    height: auto;
}
</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>


</head>
<body>
    <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>

    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("subcounty_data.php",
                function (data)
                {
                    console.log(data);
                    data = JSON.parse(data)
                    var location = data['locations'];
                    var projects = data['data'];

                    // for (var i in data) {
                    //     location.push(data[i].location);
                    //     projects.push(data[i].projects);
                    // }

                    var chartdata = {
                        labels: location,
                        datasets: [
                            {
                                label: 'location',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: projects
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>

</body>
</html>