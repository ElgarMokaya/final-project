
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
	
	<?php include('../includes/links.php');?>
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

        <div id="page-wrapper">
            <div class="row"></div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
							<a href="projects.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i><span class="label-primary label-default"> Back </span></button></a>
						</div>
                        <!-- /.panel-heading -->
            			<div class="panel-body">
										<div class="row-fluid">
											<div class="container">
									    <div class="col-xs-6 col-sm-3"><a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"><img src="default.jpg" alt="Projects: No photos available" class="img-responsive" /></a></div>											</div>

											<div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									    <div class="modal-dialog">
									        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
									        <div class="modal-content">
									            <div class="modal-body">
									                <img src="" alt="" />
									            </div>
									        </div>
											    </div>
											</div>
										</div>
									</div>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
		<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 id="myModalLabel">We'd Love to Hear From You</h3>
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

		<script>
		$(document).ready(function() {
		    var $lightbox = $('#lightbox');

		    $('[data-target="#lightbox"]').on('click', function(event) {
		        var $img = $(this).find('img'),
		            src = $img.attr('src'),
		            alt = $img.attr('alt'),
		            css = {
		                'maxWidth': $(window).width() - 100,
		                'maxHeight': $(window).height() - 100
		            };

		        $lightbox.find('.close').addClass('hidden');
		        $lightbox.find('img').attr('src', src);
		        $lightbox.find('img').attr('alt', alt);
		        $lightbox.find('img').css(css);
		    });

		    $lightbox.on('shown.bs.modal', function (e) {
		        var $img = $lightbox.find('img');

		        $lightbox.find('.modal-dialog').css({'width': $img.width()});
		        $lightbox.find('.close').removeClass('hidden');
		    });

				$('#confirm-delete').on('show.bs.modal', function(e) {
						$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
					});
		});
		</script>
<footer class="footer">
  <div class="panel-footer">
    Copyright &copy; 2020 <a href="https://www.makueni.go.ke">Government of Nakuru County </a>
  </div>
</footer>

<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->

</body>

</html>
