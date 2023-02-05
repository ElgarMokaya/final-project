<!DOCTYPE html>
<html lang="en">
    <head>
   <?php include('../includes/links.php');?>

</head>

<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

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
                <a class="navbar-brand" href="index.php" style="color: white; font-size: 15px;" >Nakuru County Projects Management System</a>
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

<div class="navbar-default sidebar" role="navigation" id="nav" style="height: 100%">
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
            <li style="margin-bottom: -10px">
                <a href="#"  type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope fa-fw"></i> Give Feedback</a>

            <li></ul>>
<div class="container">                                       
  <div class="dropdown">
     <a class="dropdown-toggle" href="#" id="navbarDropdown" role="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bar-chart-o fa-fw"></i>Report</a>
    <ul class="dropdown-menu">
      <li><a tabindex="-1" href="projects_per_subcounty.php">Projects by Sub-county</a></li>
      <li><a tabindex="-1" href="projects_per_ward.php">Projects by Ward</a></li>
      <li><a tabindex="-1" href="projects_per_subward.php">Projects by Sub-ward</a></li>
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Projects by status <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="work_ongoing.php">Works ongoing</a></li>
          <li><a tabindex="-1" href="delayed.php">Delayed</a></li>
          <li><a tabindex="-1" href="complete.php">Complete</a></li>
          
        </ul>
      </li>
    </ul>
  </div>
</div>
            </ul>      
    </div>
    <!-- /.sidebar-collapse -->
</div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper" class="page_wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Projects Statistics</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">2250</div>
                                    <div>All Projects</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><a href="projects.php">View Details</a></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">1689</div>
                                    <div>Complete Projects</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><a href="complete.php">View Details</a></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">340</div>
                                    <div>Ongoing Projects</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><a href="work_ongoing.php">View Details</a></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">78</div>
                                    <div>New Projects</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><a href="new.php">View Details</a></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                                <div class="col-lg-3 col-md-6">
                                        <div class="panel panel-danger">
                                                <div class="panel-heading">
                                                        <div class="row">
                                                                <div class="col-xs-3">
                                                                        <i class="fa fa-tasks fa-5x"></i>
                                                                </div>
                                                                <div class="col-xs-9 text-right">
                                                                        <div class="huge">31</div>
                                                                        <div>Delayed Projects</div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <a href="#">
                                                        <div class="panel-footer">
                                                                <span class="pull-left"><a href="stalled.php">View Details</a></span>
                                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                                <div class="clearfix"></div>
                                                        </div>
                                                </a>
                                        </div>
                                </div>
                                        <div class="col-lg-3 col-md-6">
                                                <div class="panel panel-yellow">
                                                        <div class="panel-heading">
                                                                <div class="row">
                                                                        <div class="col-xs-3">
                                                                                <i class="fa fa-tasks fa-5x"></i>
                                                                        </div>
                                                                        <div class="col-xs-9 text-right">
                                                                                <div class="huge">112</div>
                                                                                <div>In Procurement Cycle</div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <a href="#">
                                                                <div class="panel-footer">
                                                                        <span class="pull-left" id="pull_left"><a href="procurement.php">View Details</a></span>
                                                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                                        <div class="clearfix"></div>
                                                                </div>
                                                        </a>
                                                </div>
                                            </div>

                                             <div class="col-lg-3 col-md-6">
                                        <div class="panel panel-danger">
                                                <div class="panel-heading">
                                                        <div class="row">
                                                                <div class="col-xs-3">
                                                                        <i class="fa fa-tasks fa-5x"></i>
                                                                </div>
                                                                <div class="col-xs-9 text-right">
                                                                        <div class="huge">1</div>
                                                                        <div>Suspended</div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <a href="#">
                                                        <div class="panel-footer">
                                                                <span class="pull-left"><a href="stalled.php">View Details</a></span>
                                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                                <div class="clearfix"></div>
                                                        </div>
                                                </a>
                                        </div>
                                </div>
                        </div>
                        </div>

            <!-- /.row -->
            <!--  -->
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
	
    </div>
    <!-- /#wrapper -->
    

<footer class="footer">
  <div class="">
    Copyright &copy; 2020 <a href="">Government of Nakuru County </a>
  </div>
</footer>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>


</body>

</html>
