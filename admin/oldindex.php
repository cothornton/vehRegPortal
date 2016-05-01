<!DOCTYPE>
<html>
   <header>
      <link rel="stylesheet" type="text/css" href="Admin.css"/>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
      
      <title>Administrative Portal</title>
   </header>
   <body>
     <?php
    include '../nav.php';
    
    ?>
      <div class="container-fluid">
         <div id ="page">
            <ul class="nav nav-pills">
               <li class="active"><a data-toggle="tab" href="#home">Approval Console</a></li>
               <li><a data-toggle="tab" href="#menu1">Approved</a></li>
               <li><a data-toggle="tab" href="#menu2">Waiting for Approval</a></li>
            </ul>
            <div class="tab-content">
               <div id="home" class="tab-pane fade in active">
                  <h3>Approval Console</h3>
                  <p>
                     

                  </p>
               </div>


               <div id="menu1" class="tab-pane fade">
                  <h3>Approved</h3>

                  <div class="table-responsive">
                  <table class="table table-hover">
                  
                   <tr>
                    <th><font face="Arial, Helvetica, sans-serif">Confirmation #</font></th>
                    <th><font face="Arial, Helvetica, sans-serif">Date of Request</font></th>
                    <th><font face="Arial, Helvetica, sans-serif">Requesting Dept.</font></th>
                    <th><font face="Arial, Helvetica, sans-serif">Building</font></th>
                    <th><font face="Arial, Helvetica, sans-serif">Driver</font></th>
                    <th><font face="Arial, Helvetica, sans-serif">Passenger Name</font></th>
                    <th><font face="Arial, Helvetica, sans-serif">Vehicle</font></th>
                    <th><font face="Arial, Helvetica, sans-serif">Miles</font></th>
                    <th><font face="Arial, Helvetica, sans-serif">Purpose</span></font></th>
                    
                    </tr>
                  

                  <?php 
                    include("../db.php");

                    // attempt search query execution
                    $query_sql = "SELECT * FROM reservation WHERE approved=1";
                    $query= mysql_query($query_sql, $connect);
                    $numRows= mysql_num_rows($query);
                    // close connection
                    mysql_close();

                    
                    while($result = mysql_fetch_array($query)){
                      
                    $confirm=$result["confirmation_number"];
                    $dt=$result["date"];
                    $req_dept=$result["requesting_dept"];
                    $building=$result["building"];
                    $driver=$result["driver"];
                    $pass_name=$result["passenger_name"];
                    $veh=$result["vehicle"];
                    $mi=$result["miles"];
                    $purpose=$result["purpose"];

                  ?> 

                     <tr> <td><font face="Arial, Helvetica, sans-serif"><?echo $confirm; ?></font></td> 
                      <td><font face="Arial, Helvetica, sans-serif"><?echo $dt; ?></font></td>
                      <td><font face="Arial, Helvetica, sans-serif"><?echo $req_dept; ?></font></td>
                      <td><font face="Arial, Helvetica, sans-serif"><?echo $building; ?></font></td>
                      <td><font face="Arial, Helvetica, sans-serif"><?echo $driver; ?></font></td>
                      <td><font face="Arial, Helvetica, sans-serif"><?echo $pass_name; ?></font></td>
                      <td><font face="Arial, Helvetica, sans-serif"><?echo $veh; ?></font></td>
                      <td><font face="Arial, Helvetica, sans-serif"><?echo $mi; ?></font></td>
                      <td><font face="Arial, Helvetica, sans-serif"><?echo $purpose; ?></font></td>
                      
                    <?
                    }
                    ?> 
                    </tr>
                </table>
            </div> 
      </div>
                 
               
               <div id="menu2" class="tab-pane fade">
                  <h3>Waiting for Approval</h3>
                  <div class="table-responsive">

                    <!-- Table -->
                     <table class="table table-hover">
                        
                         <tr>
                          <th><font face="Arial, Helvetica, sans-serif">Confirmation #</font></th>
                          <th><font face="Arial, Helvetica, sans-serif">Date of Request</font></th>
                          <th><font face="Arial, Helvetica, sans-serif">Requesting Dept.</font></th>
                          <th><font face="Arial, Helvetica, sans-serif">Driver's Name</font></th>
                          <th><font face="Arial, Helvetica, sans-serif">Passenger Name</font></th>
                          <th><font face="Arial, Helvetica, sans-serif">Vehicle</font></th>
                          <th><font face="Arial, Helvetica, sans-serif">Miles</font></th>
                          <th><font face="Arial, Helvetica, sans-serif">Purpose</font></th>
                          <th></th>
                          </tr>

                        <?php 
                          include("../db.php");
                          

                          // attempt search query execution
                          $query_sql = "SELECT * FROM reservation WHERE approved=0";
                          $query= mysql_query($query_sql, $connect);
                          // close connection
                          mysql_close();

                          // get db entries and assign a variable to each field
                          while($result = mysql_fetch_array($query)){
                          $_id=$result["id"];
                          $confirm=$result["confirmation_number"];
                          $dt=$result["date"];
                          $req_dept=$result["requesting_dept"];
                          $driverFN=$result["driverFirstName"];
                          $driverLN=$result["driverLastName"];
                          $numPass=$result["numPassengers"];
                          $veh=$result["vehicle"];
                          $dest=$result["destination"];
                          $purpose=$result["purpose"];

                        ?> 
                        <!-- Populate the table -->
                           <tr> 
                            <td><font face="Arial, Helvetica, sans-serif"><?echo $confirm; ?></font></td> 
                            <td><font face="Arial, Helvetica, sans-serif"><?echo $dt; ?></font></td>
                            <td><font face="Arial, Helvetica, sans-serif"><?echo $req_dept; ?></font></td>
                            <td><font face="Arial, Helvetica, sans-serif"><?echo $driverFN . " " . $driverLN; ?></font></td>
                            <td><font face="Arial, Helvetica, sans-serif"><?echo $numPass; ?></font></td>
                            <td><font face="Arial, Helvetica, sans-serif"><?echo $veh; ?></font></td>
                            <td><font face="Arial, Helvetica, sans-serif"><?echo $dest; ?></font></td>
                            <td><font face="Arial, Helvetica, sans-serif"><?echo $purpose; ?></font></td>
                            <td>
                              <!-- Approve Button -->
                              <form action="approved2.php" method="post" >
                              <button class="btn btn-success" type="submit" >
                               <!--  <href="/approved2.php"> --><span class="glyphicon glyphicon-ok-sign"></span></button> &nbsp; 
                              <!-- Deny Button -->
                              <!-- <button class="btn btn-danger" type="button" name="deny">
                                <href="/approved2.php"><span class="glyphicon glyphicon-remove-sign"></span></button> &nbsp;  -->
                            </form>
                            </td>
                          </tr>          
                          
                          <?
                          }
                          ?> 
                          </tr>

                      </table>

                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
      <script src="C:\nodeprojects\seniorproject\node_modules\angular-date-picker.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
   </body>
</html>
