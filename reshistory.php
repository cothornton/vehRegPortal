<!DOCTYPE>
<html>
   <head>
      <link rel="stylesheet" type="text/css" href="reshistory.css"/>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css" >
      <title>Reservation History</title>
   </head>


   <body>

    <?php
    
    ?>

      <nav class="navbar navbar-default">
         
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
               <img alt="Brand" src="a&t.png">
            </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                 <li><a href="index.html">Home</a></li>
                  <li><a href="accountinfo.html">Account Info</a></li>
                  <li><a href="makereservation.html">Make Reservation</a></li> 
                  <li class="active"><a href="reshistory.php">Reservation Log</a></li> 
               </ul>

                  <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                  </form>
                  
                    
            </div><!-- /.navbar-collapse -->
         </div><!-- /.container-fluid -->
         </nav>


      <div id="top">
      <h1 style="text-align: center;">Current Reservation History</h1>
                    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <input type="search" id="search" value="" class="form-control" placeholder="Search Reservations">
        </div>
     </div>
  </div>

      <div class="container-fluid" id="cont">
         
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
                    <th><font face="Arial, Helvetica, sans-serif">Purpose</font></th>
                    </tr>
                  


 
                  <?php 
                    include("db.php");

                    // attempt search query execution
                    $query = "SELECT * FROM reservation";
                    $result= mysql_query($query, $connect);

                    $numRows= mysql_num_rows($result);
                    $i=0;
                    
                    while($i < $numRows){
                      
                    $confirm=mysql_result($result,$i,"confirmation_number");
                    $dt=mysql_result($result,$i,"date");
                    $req_dept=mysql_result($result,$i,"requesting_dept");
                    $building=mysql_result($result,$i,"building");
                    $driver=mysql_result($result,$i,"driver");
                    $pass_name=mysql_result($result,$i,"passenger_name");
                    $veh=mysql_result($result,$i,"vehicle");
                    $mi=mysql_result($re0sult,$i,"miles");
                    $purpose=mysql_result($result,$i,"purpose");
                    mysql_close();
                  ?> 

                     <tr> <td><font face="Arial, Helvetica, sans-serif"><?echo "$confirm"; ?></font></td> </tr>
                      <td><font face="Arial, Helvetica, sans-serif"><?echo "$dt"; ?></font></td></tr>
                      <td><font face="Arial, Helvetica, sans-serif"><?echo "$req_dept"; ?></font></td></tr>
                      <td><font face="Arial, Helvetica, sans-serif"><?echo "$building"; ?></font></td></tr>
                      <td><font face="Arial, Helvetica, sans-serif"><?echo "$driver"; ?></font></td></tr>
                      <td><font face="Arial, Helvetica, sans-serif"><?echo "$pass_name"; ?></font></td></tr>
                      <tr><td><font face="Arial, Helvetica, sans-serif"><?echo "$veh"; ?></font></td></tr>
                      <tr><td><font face="Arial, Helvetica, sans-serif"><?echo "$mi"; ?></font></td></tr>
                      <tr><td><font face="Arial, Helvetica, sans-serif"><?echo "$purpose"; ?></font></td></tr>          
                    <?
                    $i++; }
                    ?> 
                    </tr>

                </table>

            </div>
         
      </div>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
      
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
   </body>
</html>
