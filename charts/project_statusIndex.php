<!DOCTYPE html>
<html>
<head>
<title>Charts</title>
<style type="text/css">
BODY {
    width: 550PX;
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
                $.post("projects_status.php",
                function (data)
                {
                    console.log(data);
                    data = JSON.parse(data)
                    var status = data['status'];
                    var projects = data['data'];

                    // for (var i in data) {
                    //     location.push(data[i].location);
                    //     projects.push(data[i].projects);
                    // }

                    var chartdata = {
                        labels: status,
                        datasets: [
                            {
                                label: 'status',
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