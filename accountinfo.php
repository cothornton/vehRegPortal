<!DOCTYPE>
<html>
	<header>
		<link rel="stylesheet" type="text/css" href="accountinfo.css"/>
      	<!-- Latest compiled and minified CSS -->
      	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      	<link rel="stylesheet" href="C:\nodeprojects\seniorproject\node_modules\angular-date-picker.css">
         <link rel="stylesheet" href="style.css" >
      	<title>New</title>
	</header>
	<body>
		<?php
    include 'nav.php';
    
    ?>


		<div class="container" id="ct">
			<div id="top"> <!--there will be a div for the text so it can be aligned exactly in the middle of its containing div -->
				<div id="txt">
					<h1 style="font-size: 70;">John Doe</h1>
					<p>Engineering Faculty</p>
				</div>
			</div>
			<div id="bottom"><!--Will be given a table layout so the two inside divs can stay next to each other at all times -->
				<div id="bleft">
					<div class="table-responsive">
               <table class="table table-hover">
                  <thead>
                     <tr>
                        <th>Confirmation #</th>
                        <th>Vehicle Type</th>
                        <th>Date Booked</th>
                        <th>Miles Traveled</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>17-3452-2</td>
                        <td>Chevy</td>
                        <td>2/29/2016</td>
                        <td>50</td>
                     </tr>
                     <tr>
                        <td>17-3452-2</td>
                        <td>Chevy</td>
                        <td>2/29/2016</td>
                        <td>50</td>
                     </tr>
                     <tr>
                        <td>17-3452-2</td>
                        <td>Chevy</td>
                        <td>2/29/2016</td>
                        <td>50</td>
                     </tr>
                     <tr>
                        <td>17-3452-2</td>
                        <td>Chevy</td>
                        <td>2/29/2016</td>
                        <td>50</td>
                     </tr>
                  </tbody>
               </table>
            </div>
				</div>
				<div id="bright"> <!--Information will be shown here and will later be given the functionality of being able to change-->
					<form role="form">
               			<div class="form-group">
                  			<label for="usr" class="col-sm-2 control-label">Name</label>
                  			<input type="text" class="form-control" placeholder="John Doe" id="usr" disabled>
               			</div>
               			<div class="form-group">
                  			<label for="pwd" class="col-sm-2 control-label">Password</label>
                  			<input type="password" class="form-control" placeholder ="********" id="pwd" disabled>
               			</div>
               			<div class="form-group">
                  			<label for="usr" class="col-sm-2 control-label">E-Mail</label>
                  			<input type="text" class="form-control" placeholder="Johnd@ncat.edu" id="usr" disabled>
               			</div>
               			<div class="form-group">
                  			<label for="pwd" class="col-sm-2 control-label">Preferred E-Mail</label>
                  			<input type="password" class="form-control" placeholder ="johnd@thuggin.net" id="pwd" disabled>
               			</div>
               			<button type="submit" class="btn btn-default col-sm-offset-2">Update Information</button>
               			<button type="submit" class="btn btn-default col-sm-offset-2">Save Changes</button>
            		</form>
				</div>
			</div>
		</div>

		<footer class="footer">
      		<div class="container">
        		<ul class="nav navbar-nav">
      				<li><a href="#">FAQ</a></li>
      				<li><a href="#">Other Senior Projects</a></li>
      				<li><a href="#">Computer Science Dept.</a></li> 
      				<li><a href="#">About the Makers</a></li> 
    			</ul>
      		</div>
    	</footer>


	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
      <script src="C:\nodeprojects\seniorproject\node_modules\angular-date-picker.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>

