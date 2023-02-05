<!DOCTYPE html>
<html lang="en">
  <head>
 <?php include('../includes/links.php');?>

 <script>
$(document).ready(function(){
    $('#memListTable').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "getData.php"
    });
});
</script>

<script>
$(document).ready(function(){
  $('.dropdown a.dropdown-toggle').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

    <style type="text/css">
        .panel {
    /*border: 1px solid rgb(127, 0, 0);*/
    /*border: 1px solid rgba(204, 204, 204,*/ /*0.5);
    -webkit-background-clip: padding-box;*/ /* for Safari */
    /*background-clip: padding-box;*/ /* for IE9+, Firefox 4+, Opera, Chrome */
}
    </style>

  

</head>

<body>

    <div id="wrapper" class="wrapper">
        <!-- Navigation -->
      <div class="navbar-header" style="background-color: #C71585">
                <button type="button" class="navbar-toggle navbartoggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php" style="color: white">Nakuru County Projects Management System</a>
            </div>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0" id="navsidebar">
            
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                   
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

<div class="navbar-default sidebar" role="navigation" id="nav" style="">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu" style="display:flex; flex-direction: column;">
            <li class="text-center">
                <img src="../assets/img/nakuruCountyLogo.jpg" class="img-responsive"/>
            </li>
            <li>
                <a href="indexProjects.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
           
            <li>
                <a href="../pages/projects.php"><i class="fa fa-bar-chart-o fa-fw"></i> Projects</a>
            </li>
            <li>
                <a href="#"  type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope fa-fw"></i> Give Feedback</a>

            </li>
 <li class="dropdown">
                    <a class="dropdown-toggle" href="#" id="navbarDropdown reports" role="" data-toggle="dropdown" aria-haspopup="true" aria-expanded=""> <i class="fa fa-bar-chart-o fa-fw"></i>Report</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="border:none; margin-left: 20px;">
                            <li><a href="projects_per_subcounty.php">Projects by Sub-county</a></li>
                            <li><a href="projects_per_ward.php">Projects by Ward</a></li>
                            <li><a href="projects_per_subward.php">Projects by Sub-ward</a></li>
                            <li class="dropdown">
                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects by status</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="work_ongoing.php">Works ongoing</a></li>
                                <li><a href="delayed.php">Delayed</a></li>
                                <li><a href="complete.php">Complete</a></li>
                        </ul>
                    </li>
    </div>
    <!-- /.sidebar-collapse -->
</div>
            <!-- /.navbar-static-side -->
        </nav>

<?php  
 $connect = mysqli_connect("localhost", "root", "", "cpms_project");  
 $query ="SELECT * FROM projects WHERE status='new' ORDER BY project_id DESC";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" id="page-wrapper">  
                <h3 align="center">New Projects</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="county_data" class="table table-striped table-bordered" style="width: 100%">  
                          <thead>
                                    <tr>
                                        <th>Projects</th>
                                        <th>Department</th>
                                        <th>Ward/Sub-ward</th>
                                        <th>Location/Sub-location</th>
                                        <th>Status</th>
                                        <th>FY</th>
                                        <th>Budget</th>
                                    </tr>
                                </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["project"].'</td>  
                                    <td>'.$row["department"].'</td>  
                                    <td>'.$row["ward"].'</td>  
                                    <td>'.$row["location"].'</td>  
                                    <td>'.$row["status"].'</td>  
                                    <td>'.$row["FY"].'</td>  
                                    <td>'.$row["budget"].'</td>  
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#county_data').DataTable(); 
        //       "processing": true,
        // "serverSide": true,
        // "ajax": "getData.php" 
 });  
 </script>  
        <!-- /#page-wrapper -->
     <!-- /#page-wrapper -->
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 id="myModalLabel">Please Give Us Your Feedback</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal col-sm-12" action="feedback.php" method="post">
                    <div class="form-group"><label>Name</label><input name="name" value="" class="form-control required" placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text" required></div>
                    <div class="form-group"><label>Message</label><textarea  name="message" id="message" value="" class="form-control" placeholder="Your message here.." data-placement="top" data-trigger="manual" required></textarea>Remaining: <b><span class="remaining">150</span></b></div>
                    <div class="form-group"><label>E-Mail</label><input name="email"  value="" class="form-control email" placeholder="email@you.com (Optional)" data-placement="top" data-trigger="manual" data-content="Must be a valid e-mail address (user@gmail.com)" type="text"></div>
                    <div class="form-group"><label>Phone</label><input name="phone"  value="" class="form-control phone" placeholder="+254...(So that we can contact you)" data-placement="top" data-trigger="manual" data-content="Must be a valid phone number" type="text" required></div>
                    <input type="hidden" value="" name="project_id" class="project_id"/>
                    <div class="form-group"><button type="submit" name="save" class="btn btn-success pull-right">Send</button></div>
                </form>
            </div>              
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
            </div>
        </div>
    </div>
</div>
 <!--  -->
  
    </div>
    <!-- /#wrapper -->
<footer class="footer">
  <div class="">
    Copyright &copy; 2020 <a href="">Government of Nakuru County </a>
  </div>
</footer>

<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

   <!--  <script type="text/javascript">
      $(document).ready(function() {
    $('#county_data').DataTable( {
        // dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
    </script> -->
    <script type="text/javascript">
      

    </script>

</body>

</html>
