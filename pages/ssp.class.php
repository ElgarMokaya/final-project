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
           <div class="container">  
                <h3 align="center">Datatables Jquery Plugin with Php MySql and Bootstrap</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="county_data" class="table table-striped table-bordered">  
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
 });  
 </script>  