
<!DOCTYPE html>
<html lang="en">
	<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>County Projects Management System</title>

    <!-- Bootstrap Core CSS -->
    <script src="js/jquery.backstretch.js"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	
    <!-- MetisMenu CSS -->
    <!-- <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet"> -->

    <!--Notify CSS -->
		<link href="css/plugins/notify/prettify.css" rel="stylesheet">
        <link href="css/plugins/notify/notify.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    <!-- <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/bootstrap/js/bootstrap.min.js" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--  [if lt IE 9]> -->
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

        <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
       <script type="text/javascript" src="assets\js\jquery.backstretch.js"></script>


<script type="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="assets/js/jquery/test/jquery.backstretch.min.js"></script>



    <!-- <![endif] -->

	<!-- Do not remove. Can't access the header.-->
	<style>
	.ficha{
		display: none;
	}
	.onyesha{
		display: block;
	}

	</style>
	
	
</head>



<body>

<?php 
	include('../includes/links.php');
	$pid = $_GET['pid'];


	$connect = mysqli_connect("localhost", "root", "", "cpms_project");  
    $query ="SELECT * FROM projects where project_id=$pid";  
    $result = mysqli_query($connect, $query); 

    $row = mysqli_fetch_array($result);

?>


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


	<div id="page-wrapper">
		<div class="row">
		<div class="col-md-12">

					
            <div class="well" data-original-title="">
                <i class="glyphicon glyphicon-th-list"></i>  Details of Nakuru<span class="label-primary label label-default"><?php echo $row['project'] ?></span>
            </div>
            <div class="hero-unit-table">
                <!-- Start content here -->
					<div class="alert alert-info">
						<a href="projects.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
					</div>
					<div class="row">
		                <div class="col-lg-4">
		                    <div class="panel panel-info">
		                        <div class="panel-heading">
		                            Basic Info
		                        </div>
		                        <div class="panel-body">
									<strong>Department: </strong><?php echo $row['department'] ?>								<hr/>
									<strong>Project Name: </strong><?php echo $row['project'] ?>								<hr/>									
									<strong>Remarks: </strong><?php echo $row['remarks'] ?>  			
								</div>
							</div>
						</div>
						 <div class="col-lg-4">
		                    <div class="panel panel-info">
		                        <div class="panel-heading">
		                            Location Info
		                        </div>
		                        <div class="panel-body">
								<strong>Sub-county: </strong><?php echo $row['ward'] ?>								<hr/>
								<strong>Ward: </strong><?php echo $row['ward']?>								<hr/>
								<strong>Location: </strong><?php echo $row['location'] ?><hr/>
							</div>
						</div>
					
				</div>
				<div class="panel panel-info">
		                        <div class="panel-heading">
		                            Funding/Implementation Info
		                        </div>
		                        <div class="panel-body">
								<strong>Budgeted Amount: </strong><?php echo $row['budget'] ?><hr/>
								<strong>Financial Year: </strong><?php echo $row['FY'] ?><hr/>
								<strong>Source of Funds: </strong><?php echo $row['source_of_funds'] ?><hr>
								<strong>Implementing Agency: </strong><?php echo $row['implementing_agency'] ?>	<hr/>
								<strong>Project Status: </strong><?php echo $row['status'] ?><hr/>
								     </div>
							</div>
				
					

       
        <!-- /#page-wrapper -->
		<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 id="myModalLabel">We'd Like to Hear From You</h3>
			</div>
			<div class="modal-body">
				<form class="form-horizontal col-sm-12" action="save_feedback.php" method="post">
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
  <div class="panel-footer">
    Copyright &copy; 2023 <a href='#'>Government of Nakuru County </a>
  </div>
</footer>

<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->

</body>

</html>
