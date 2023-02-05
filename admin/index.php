<!DOCTYPE html>
<html lang="en">
    <head>
     <?php include('../includes/links.php');?>
<!-- <script>
$(document).ready(function(){
    $('#county_data').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "getData.php"
    });
});
</script> -->
<style type="text/css">
  div .last{
        display: inline-block;
        background-color: #C71585;
        border-radius: 30px;
        border: 4px double #cccccc;
        color: #eeeeee;
        text-align: center;
        font-size: 28px;
        padding: 20px;
        width: 100px;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
        height: 40px;
        line-height: 2px;
        position: relative;
        text-align: center;
  }
.last a{
  color:white;
}
div #add_button{
   background-color: #C71585;
   border-radius: 30px;
   width: 100px;
   font-size: 15px;
   height: 50px;
   text-align: center;
   position: relative;
   margin-right: 5px;
    border: 4px double #cccccc;
    border-color: white;
</style>

<script>
$(document).ready(function(){
  $('.dropdown a.dropdown-toggle').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
</head>

<body>


    <div id="wrapper" class="wrapper">

        <div class="navbar-header" style="background-color: #C71585">
                <button type="button" class="navbar-toggle navbartoggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="" style="color: white">Nakuru County Projects Management System</a>
            <li class="last" style="float: right; list-style: none; font-size: 15px; margin-right: 50px; margin-top: 2px; text-align:center; " ><a href="../index.php">Log out</a></li>

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
                <a href="../admin/index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
           
            <li>
                <a href="projects.php"><i class="fa fa-bar-chart-o fa-fw"></i> Projects</a>
            </li>
            <li>
                <a href="viewFeedback.php"  type="button" ><i class="fa fa-envelope fa-fw"></i> View Projects Feedback</a>

            </li>
            <li>
                <a href="view_general_feedback.php"  type="button" ><i class="fa fa-envelope fa-fw"></i> View General Feedback</a>

            </li>
            <li class="dropdown">
                    <a class="dropdown-toggle" href="#" id="navbarDropdown reports" role="" data-toggle="dropdown" aria-haspopup="true" aria-expanded=""> <i class="fa fa-bar-chart-o fa-fw"></i>Report</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="border:none; margin-left: 20px;">
                            <li><a href="projects_per_subcounty.php">Projects by Sub-county</a></li>
                           <!--  <li><a href="projects_per_ward.php">Projects by Ward</a></li> -->
                           <!--  <li><a href="projects_per_subward.php">Projects by Sub-ward</a></li> -->
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

            <!-- /.navbar-static-side -->
        </nav>
       <?php  
 $connect = mysqli_connect("localhost", "root", "", "cpms_project");  
 $query ="SELECT * FROM projects ORDER BY project_id DESC";  
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
                <h3 align="center">County Projects</h3>  
                <br /> 
                <div class="table-responsive"> 
                <div align="right">
          <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add Project</button><br><br> 
                <div class="table-responsive">  
                     <table id="county_data" class="table table-striped table-bordered col-12" style="width: 100%">  
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

                     <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js "></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js "></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js "></script>
    
 
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 //$(document).ready(function(){  
  //    $('#county_data').DataTable();  
//
 //$('#county_data').dataTable({
  //  destroy: true,
   // aaData: response.data
//});
 </script>  

   </div>


            <!-- /.row -->
            <!--  -->
   <?php include('../includes/modal.php');?>
    
    </div>
<footer class="footer">
  <div class="">
    Copyright &copy; 2020 <a href="">Government of Nakuru County </a>
  </div>
</footer>


</body>

</html>
<?php include('../includes/modal.php');?>
   <div id="userModal" class="modal fade">
  <div class="modal-dialog">
    <form method="post" id="user_orm" enctype="multipart/form-data" action="addProjects.php">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Project</h4>
        </div>
        <div class="modal-body">
          <label>Project Name</label>
          <input type="text" name="project" id="project_name" class="form-control" required />
          <br/>
          <label>Department </label>
          <select class="form-control" id="department" name="department">
            <option value="education_ict">Education & ICT</option>
            <option value="agric">Agriculture</option>
            <option value="infrastructure">Infrastructure</option>
            <option value="finance">Finance</option>
            <option value="water_environment">Water & Environment</option>
            <option value="health">Health</option>
            <option value="public_service">Public Service</option>
            <option value="lands">Lands</option>
            <option value="trade">Trade</option>
            <option value="youth">Youth</option>
          </select>
        
          <br/><br/> 
          <label>Ward </label>
           <select class="form-control" name="ward">
            <option value="elementaita">Elementaita</option>
            <option value="murindati">Murindati</option>
            <option value="bahati">Bahati</option>
            <option value="nakuru_West">Nakuru West</option>
            <option value="rongai">Rongai</option>
            <option value="keringet">Keringet</option>
            <option value="kamara">Kamara</option>
            <option value="maai_Mahiu">Maai Mahiu</option>
            <option value="olkaria">Olkaria</option>
            <option value="biashara">Biashara</option>
            <option value="hellsgate">Hellsgate</option>
          </select>
          
          <br /><br/>
          <label>Location</label>
           <select class="form-control" name="location">
            <option value="subukia">Subukua</option>
            <option value="molo">Molo</option>
            <option value="njoro">Njoro</option>
            <option value="gilgil">Gilgil</option>
            <option value="naivasha">Naivasha</option>
            <option value="kuresoi_north">Kuresoi North</option>
            <option value="bahati">Bahati</option>
            <option value="rongai">Rongai</option>
            <option value="kiamaina">Kiamaina</option>
            <option value="lanet">Lanet</option>

          </select>
         <!--  <input type="text" name="location" id="location" class="form-control" required / -->
          <br /><br/>
          <label>Status </label>
          <select class="form-control" name="status">
            <option value="compelet">Complete</option>
            <option value="ongoing">Ongoing</option>
            <option value="in_procurement">In Procurement</option>
            <option value="suspended">Suspended</option>
            <option value="delayed">Delayed</option>
          </select>
         <!--  <input type="text" name="status" id="status" class="form-control" required /> -->
          <br /><br/>
          <label>Financial Year</label>
          <input type="text" name="FY" id="financial_year" class="form-control" required />
          <br />
          <label>Budget</label>
          <input type="text" name="budget" id="budget" class="form-control" required />
          <br />
          <label>Source of Funds</label>
          <input type="text" name="source_of_funds" id="source_of_funds" class="form-control" required />
          <br /> 
          <label>Implementing Agency</label>
          <input type="text" name="implementing_agency" id="implementing_agency" class="form-control" required />
          <br /> 
          <label>Remarks</label>
          <input type="text" name="remarks" id="remarks" class="form-control" required />
          <br />
        </div>
        <div class="modal-footer">
          <input type="hidden" name="user_id" id="user_id" />
          <input type="hidden" name="operation" id="operation" />
          <input type="submit" name="action" id="action" class="btn btn-success" value="Add" name="save" />
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
<footer class="footer">
  <div class="">
    Copyright &copy; 2020 <a href="">Government of Nakuru County </a>
  </div>
</footer>
<script type="text/javascript">
  $(document).ready( function () {
    $('#county_data').DataTable({
       dom: 'Bfrtip',
       buttons: [ 'copy', 'excel', 'pdf']

    });
} );
</script> 
<script type="text/javascript">

  /*
  $(document).ready(function(){
   $('#county_data').DataTable({
      'processing': true,
      'serverSide': true,
      'serverMethod': 'post',
      'ajax': {
          'url':'fetch.php'
      },
      'columns': [
         { data: 'project' },
         { data: 'department' },
         { data: 'ward' },
         { data: 'location' },
         { data: 'status' },
         { data: 'FY' },
         { data: 'budget' },
      ]
   });
});
*/
 </script> 


</body>

</html>