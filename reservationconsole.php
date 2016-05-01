<link rel="stylesheet" type="text/css" href="resconsole.css" />
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
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

                          $numrows = mysql_num_rows($query);
                          // if ($numrows == 0){
                          //   echo "No entries";
                          // }

                          // else{
                          // get db entries and assign a variable to each field
                          while($result = mysql_fetch_array($query)){
                          $id=$result["id"];
                          $confirm=$result["confirmation_number"];
                          $dt=$result["date"];
                          $req_dept=$result["requesting_dept"];
                          $driverFN=$result["driverFirstName"];
                          $driverLN=$result["driverLastName"];
                          $numPass=$result["numPassengers"];
                          $veh=$result["vehicle"];
                          $dest=$result["destination"];
                          $purpose=$result["purpose"];
                          $approved= $resule["approved"];




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
                              <form action="approved2.php?id=<?php echo $result["id"]; ?>" method="post" >
                              <button class="btn btn-success" type="submit" name="approve" >
                               <span class="glyphicon glyphicon-ok-sign"></span></button>  <!-- &nbsp; -->
                             </form>&nbsp;

                              <!-- Deny Button -->
                              <form action="denied.php?id=<?php echo $result["id"]; ?>" method="post">
                              <button class="btn btn-danger" type="button" name="deny" class="deniedButton">
                               <span class="glyphicon glyphicon-remove-sign"></span></button>  
                              </form>
                            </td>
                          </tr>          
                          
                          <?
                          }

                        // } for the else statement

                        
                          ?>
                          
                          </tr>

                      </table>

                  </div>
               </div>
            </div>
         </div>
      </div>
    </div>

    <script type="text/javascript" >
        $(function() {

            $(".deniedButton").click(function() {
                
                    $(this).parents(".record").animate("fast").animate({
                        opacity : "hide"
                    }, "slow");
                }
                return false;
            }
        
 </script>

