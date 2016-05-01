<!DOCTYPE html>
<html><head><style type="text/css">.pac-container{background-color:#fff;position:absolute!important;z-index:1000;border-radius:2px;border-top:1px solid #d9d9d9;font-family:Arial,sans-serif;box-shadow:0 2px 6px rgba(0,0,0,0.3);-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;overflow:hidden}.pac-logo:after{content:"";padding:1px 1px 1px 0;height:16px;text-align:right;display:block;background-image:url(https://maps.gstatic.com/mapfiles/api-3/images/powered-by-google-on-white3.png);background-position:right;background-repeat:no-repeat;background-size:120px 14px}.hdpi.pac-logo:after{background-image:url(https://maps.gstatic.com/mapfiles/api-3/images/powered-by-google-on-white3_hdpi.png)}.pac-item{cursor:default;padding:0 4px;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;line-height:30px;text-align:left;border-top:1px solid #e6e6e6;font-size:11px;color:#999}.pac-item:hover{background-color:#fafafa}.pac-item-selected,.pac-item-selected:hover{background-color:#ebf2fe}.pac-matched{font-weight:700}.pac-item-query{font-size:13px;padding-right:3px;color:#000}.pac-icon{width:15px;height:20px;margin-right:7px;margin-top:6px;display:inline-block;vertical-align:top;background-image:url(https://maps.gstatic.com/mapfiles/api-3/images/autocomplete-icons.png);background-size:34px}.hdpi .pac-icon{background-image:url(https://maps.gstatic.com/mapfiles/api-3/images/autocomplete-icons_hdpi.png)}.pac-icon-search{background-position:-1px -1px}.pac-item-selected .pac-icon-search{background-position:-18px -1px}.pac-icon-marker{background-position:-1px -161px}.pac-item-selected .pac-icon-marker{background-position:-18px -161px}.pac-placeholder{color:gray}</style>
    <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" rel="stylesheet">
    <link href="datepick.css" rel="stylesheet" type="text/css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="form2.css" > 


    <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet" type="text/css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/css/bootstrap2/bootstrap-switch.css" rel="stylesheet" type="text/css">
    <link href="http://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js" type="text/javascript">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js" type="text/javascript">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js" type="text/javascript">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js" type="text/javascript">
    </script>
    <script src="http://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js" type="text/javascript">
    </script>
    <script src="form.js" type="text/javascript">
    </script>
    <script src="//code.jquery.com/jquery-1.10.2.js">
    </script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js">
    </script>
    <script src="jquery-1.11.3.min.js" type="text/javascript">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places">
    </script>
    <script src="googleapi.js" type="text/javascript">
    </script>

    <title>
    </title>
<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/24/10/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/24/10/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/24/10/controls.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/24/10/places_impl.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/24/10/stats.js"></script></head>

<body>
    <div class="container">
        <div class="panel panel-primary dialog-panel">
            <div class="panel-heading">
                <h5>Vehicle Checkout - Reservation</h5>
            </div>


            <div class="panel-body">
                <form action="postres.php" class="form-horizontal" method="post" role="form" onsubmit="return valForm()">
                    <div class="form-group">
                        <label class="control-label col-md-2 col-md-offset-2" for="id_accomodation">Date of Request</label>

                        <div class="col-md-8">
                            <div class="col-md-4">
                                <div class="form-group internal input-group">
                                    <input class="form-control" id="id_checkin" name="date" readonly="">
                                </div>
                            </div>
                            <!-- <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Checkin</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                

            </div> -->
                        </div>
                        <!--department request dropdown (dropdown so there is no confusion)-->


                        <div class="form-group">
                            <label class="control-label col-md-2 col-md-offset-2" for="id_title">Requesting Department</label>

                            <div class="col-md-8">
                                <div class="col-md-6">
                                    <div class="form-group internal">
                                        <select class="form-control" id="dept_title" name="requesting_dept">
                                            <option value="Arts and Science">
                                                Arts & Science
                                            </option>

                                            <option value="Business and Econ">
                                                Business and Econ
                                            </option>

                                            <option value="Education">
                                                Education
                                            </option>

                                            <option value="Nursing">
                                                Nursing
                                            </option>

                                            <option value="Technology">
                                                Technology
                                            </option>

                                            <option value="Engingeering">
                                                Engineering
                                            </option>

                                            <option value="Campus Org (Other)">
                                                Campus Org (Other)
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--end-->


                            <div class="form-group">
                                <label class="control-label col-md-2 col-md-offset-2" for="id_title">Driver's Name</label>

                                <div class="col-md-8">
                                    <div class="col-md-5 indent-small">
                                        <div class="form-group internal">
                                            <input class="form-control" id="id_first_name" maxlength="50" name="driverFirstName" placeholder="First Name" type="text" onblur="validateFName()" required=""> 
                                            <span id="driverFirstNameerr" style="display: none; color: red;">You
                                            can only use letter, apostrophes,
                                            and hyphens</span>
                                        </div>
                                    </div>


                                    <div class="col-md-5 indent-small">
                                        <div class="form-group internal">
                                            <input class="form-control" id="id_last_name" maxlength="50" name="driverLastName" onblur="validateLName()" placeholder="Last Name" required="" type="text"> <span id="driverLastNameerr" style="display: none; color: red;">You
                                            can only use letter, apostrophes,
                                            and hyphens</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end of drive name-->
                            <!--Get the contact information of the driver just in case they are not the same person as the requestor-->


                            <div class="form-group">
                                <label class="control-label col-md-2 col-md-offset-2" for="id_email">Driver's Contact Info</label>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input class="form-control" id="id_email" maxlength="70" name="driverEmail" onblur="validateEmail()" placeholder="E-mail" required="" type="text">
                                            <span id="emerr" style="display: none; color: red;">Invalid
                                            E-Mail</span>
                                        </div>
                                    </div>


                                    <div class="form-group internal">
                                        <div class="col-md-12">
                                            <input class="form-control" id="id_phone" maxlength="20" name="driverPhone" onblur="validatePhone()" placeholder="Phone: xxx-xxx-xxxx" required="" type="text"> <span id="pherr" style="display: none; color: red;">Please
                                            format like:<br>
                                            XXX-XXX-XXXX<br>
                                            XXX.XXX.XXXX<br>
                                            XXX XXX XXXX<br></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end-->
                            <!--Passenger Number (in digits)-->


                            <div class="form-group">
                                <label class="control-label col-md-2 col-md-offset-2" for="id_title">Number of Passengers</label>

                                <div class="col-md-6">
                                    <div class="col-md-2">
                                        <div class="form-group internal">
                                            <select class="form-control" id="passengers" name="numPassengers">
                                                <option value="0">
                                                    0
                                                </option>

                                                <option value="1">
                                                    1
                                                </option>

                                                <option value="2">
                                                    2
                                                </option>

                                                <option value="3">
                                                    3
                                                </option>

                                                <option value="4">
                                                    4
                                                </option>

                                                <option value="5">
                                                    5
                                                </option>

                                                <option value="6">
                                                    6
                                                </option>

                                                <option value="7">
                                                    7
                                                </option>

                                                <option value="8">
                                                    8
                                                </option>

                                                <option value="9">
                                                    9
                                                </option>

                                                <option value="10">
                                                    10
                                                </option>

                                                <option value="11">
                                                    11
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <!--end-->
                                <!--need to properly format for leave and return date-->


                                <div class="form-group">
                                    <label class="control-label col-md-2 col-md-offset-2" for="id_checkin">Leave Date</label>

                                    <div class="col-md-8">
                                        <div class="col-md-3">
                                            <div class="form-group internal input-group">
                                                <input class="form-control datepicker hasDatepicker" id="leaved" name="leaveDate" placeholder="Click Here" readonly="" required="">
                                            </div>
                                        </div>
                                        <label class="control-label col-md-3" for="id_checkout">Return Date</label>

                                        <div class="col-md-3">
                                            <div class="form-group internal input-group">
                                                <input class="form-control datepicker hasDatepicker" id="id_returnd" name="returnDate" placeholder="Click Here" readonly="" required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end-->
                                <!--time to leave and time to come back-->


                                <div class="form-group">
                                    <label class="control-label col-md-2 col-md-offset-2" for="id_checkin">Leave Time</label>

                                    <div class="col-md-7">
                                        <div class="col-md-4">
                                            <div class="form-group internal input-group">
                                                <select class="form-control" id="id_leavet" name="leaveTime" required="">
                                                    <option value="12:00AM">
                                                        12:00AM
                                                    </option>

                                                    <option value="1:00AM">
                                                        1:00AM
                                                    </option>

                                                    <option value="2:00AM">
                                                        2:00AM
                                                    </option>

                                                    <option value="3:00AM">
                                                        3:00AM
                                                    </option>

                                                    <option value="4:00AM">
                                                        4:00AM
                                                    </option>

                                                    <option value="5:00AM">
                                                        5:00AM
                                                    </option>

                                                    <option value="6:00AM">
                                                        6:00AM
                                                    </option>

                                                    <option value="7:00AM">
                                                        7:00AM
                                                    </option>

                                                    <option value="8:00AM">
                                                        8:00AM
                                                    </option>

                                                    <option value="9:00AM">
                                                        9:00AM
                                                    </option>

                                                    <option value="10:00AM">
                                                        10:00AM
                                                    </option>

                                                    <option value="11:00AM">
                                                        11:00AM
                                                    </option>

                                                    <option value="12:00PM">
                                                        12:00PM
                                                    </option>

                                                    <option value="1:00PM">
                                                        1:00PM
                                                    </option>

                                                    <option value="2:00PM">
                                                        2:00PM
                                                    </option>

                                                    <option value="3:00PM">
                                                        3:00PM
                                                    </option>

                                                    <option value="4:00PM">
                                                        4:00PM
                                                    </option>

                                                    <option value="5:00PM">
                                                        5:00PM
                                                    </option>

                                                    <option value="6:00PM">
                                                        6:00PM
                                                    </option>

                                                    <option value="7:00PM">
                                                        7:00PM
                                                    </option>

                                                    <option value="8:00PM">
                                                        8:00PM
                                                    </option>

                                                    <option value="9:00PM">
                                                        9:00PM
                                                    </option>

                                                    <option value="10:00PM">
                                                        10:00PM
                                                    </option>

                                                    <option value="11:00PM">
                                                        11:00PM
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <label class="control-label col-md-3 " for="id_checkout">Return Time</label>

                                        <div class="col-md-4">
                                            <div class="form-group internal input-group">
                                                <select class="form-control" id="id_returnt" name="returnTime" required="">
                                                    <option value="12:00AM">
                                                        12:00AM
                                                    </option>

                                                    <option value="1:00AM">
                                                        1:00AM
                                                    </option>

                                                    <option value="2:00AM">
                                                        2:00AM
                                                    </option>

                                                    <option value="3:00AM">
                                                        3:00AM
                                                    </option>

                                                    <option value="4:00AM">
                                                        4:00AM
                                                    </option>

                                                    <option value="5:00AM">
                                                        5:00AM
                                                    </option>

                                                    <option value="6:00AM">
                                                        6:00AM
                                                    </option>

                                                    <option value="7:00AM">
                                                        7:00AM
                                                    </option>

                                                    <option value="8:00AM">
                                                        8:00AM
                                                    </option>

                                                    <option value="9:00AM">
                                                        9:00AM
                                                    </option>

                                                    <option value="10:00AM">
                                                        10:00AM
                                                    </option>

                                                    <option value="11:00AM">
                                                        11:00AM
                                                    </option>

                                                    <option value="12:00PM">
                                                        12:00PM
                                                    </option>

                                                    <option value="1:00PM">
                                                        1:00PM
                                                    </option>

                                                    <option value="2:00PM">
                                                        2:00PM
                                                    </option>

                                                    <option value="3:00PM">
                                                        3:00PM
                                                    </option>

                                                    <option value="4:00PM">
                                                        4:00PM
                                                    </option>

                                                    <option value="5:00PM">
                                                        5:00PM
                                                    </option>

                                                    <option value="6:00PM">
                                                        6:00PM
                                                    </option>

                                                    <option value="7:00PM">
                                                        7:00PM
                                                    </option>

                                                    <option value="8:00PM">
                                                        8:00PM
                                                    </option>

                                                    <option value="9:00PM">
                                                        9:00PM
                                                    </option>

                                                    <option value="10:00PM">
                                                        10:00PM
                                                    </option>

                                                    <option value="11:00PM">
                                                        11:00PM
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end-->
                                <!--destination (hopefully google maps api will auto finish it)-->


                                <div class="form-group">
                                    <label class="control-label col-md-2 col-md-offset-2" for="id_email">Ultimate Destination</label>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-11">
                                                <input class="form-control" id="id_dest" maxlength="95" name="destination" placeholder="Enter Address of Destination" type="text" onblur="validateAddress()" required="" autocomplete="off"> <span id="dests" style="display: none; color: red;">
                                                Please check for any unneeded characters
                                              </span>
                                              <span style="color: blue;">
                                                Powered by Google
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end-->
                                <!--dropdown for vehicle request-->


                                <div class="form-group">
                                    <label class="control-label col-md-2 col-md-offset-2" for="id_equipment">Vehicle</label>

                                    <div class="col-md-8">
                                        <div class="col-md-6">
                                            <div class="form-group internal">
                                                <select class="form-control" id="id_vehicle" name="vehicle">
                                                    <option value="Travel Trailer">
                                                        Travel Trailer
                                                    </option>

                                                    <option value="Fifth Wheel">
                                                        Fifth Wheel
                                                    </option>

                                                    <option value="RV/Motorhome">
                                                        RV/Motorhome
                                                    </option>

                                                    <option value="Tent Trailer">
                                                        Tent Trailer
                                                    </option>

                                                    <option value="Pickup Camper">
                                                        Pickup Camper
                                                    </option>

                                                    <option value="Camper Van">
                                                        Camper Van
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end of vehicle drop-->
                                <!--short reason why vehicle is needed-->


                                <div class="form-group">
                                    <label class="control-label col-md-2 col-md-offset-2" for="business_justification">Busines
                                    Justification</label>

                                    <div class="col-md-6">
                                        <textarea class="form-control" id="business_justification" maxlength="100" name="purpose" placeholder="Business Justification" required="" rows="3"></textarea>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-offset-4 col-md-3">
                                        <button class="btn-lg btn-primary" type="submit">Request
                                        Reservation</button>
                                    </div>
                                    <!-- <div class='col-md-3'>
              <button class='btn-lg btn-danger' style='float:right' type='submit'>Cancel</button>
            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<script type="text/javascript">
    //this applies the jquery datepicker to the places where the date is required (saves time as far as validation is concerned)
    $(function() {
    $( "#id_returnd" ).datepicker({
            inline: true,
            showOtherMonths: true,
            dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        });

    $("#leaved").datepicker({
            inline: true,
            showOtherMonths: true,
            dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        });
    });

    //the following functions will put regular expressions up against what people put into the forms
    //and determine if there is any need for correction 

    function validateFName(){
    var fn = document.getElementById('id_first_name');
    var name_reg = /^[A-Z]'?[-a-zA-Z]+$/;
    if(name_reg.test(fn.value)){
    fn.style.border ='2px solid green';
    document.getElementById("driverFirstNameerr").style.display = "none";
    return true;
    }else{
    fn.style.border ='2px solid red';
    document.getElementById("driverFirstNameerr").style.display = "block";
    return false; 
    }
    }

    function validateLName(){
    var ln = document.getElementById('id_last_name');
    var name_reg = /^[A-Z]'?[-a-zA-Z]+$/;
    if(name_reg.test(ln.value)){
    ln.style.border ='2px solid green';
    document.getElementById("driverLastNameerr").style.display = "none";
    return true;
    }else{
    ln.style.border ='2px solid red';
    document.getElementById("driverLastNameerr").style.display = "block";
    return false; 
    }
    }


    function validateEmail(){
    var y = document.getElementById('id_email');
    var em_reg = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
      if(em_reg.test(y.value)){
        y.style.border ='2px solid green';
        document.getElementById('emerr').style.display = "none";
        return true;
    }else{
    y.style.border ='2px solid red';
    document.getElementById('emerr').style.display = "block";
    return false; 
    }

    } 

    function validatePhone(){
    var z = document.getElementById('id_phone');
    var ph_reg =   /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
      if(ph_reg.test(z.value)){
        z.style.border ='2px solid green';
        document.getElementById('pherr').style.display = "none";
        return true;
    }else{
    z.style.border ='2px solid red';
    document.getElementById('pherr').style.display = "block";
    return false; 
    }

    } 

    function validateAddress(){
    var a = document.getElementById('id_dest');
    var dest_reg =  /^[a-zA-Z\s\d\/]*\d[a-zA-Z\s\d\/]*$/;
      if(dest_reg.test(a.value)){
        a.style.border ='2px solid green';
        document.getElementById('dests').style.display = "none";
        return true;
    }else{
    a.style.border ='2px solid red';
    document.getElementById('dests').style.display = "block";
    return false; 
    }

    }

//this function will validate the entire form before submission
    function valForm(){
      var err = 0;
      if(!validateFName()){
        document.getElementById("driverFirstNameerr").style.display = "block";
        err++;
      }
      if(!validateLName()){
        document.getElementById("driverLastNameerr").style.display = "block";
        err++;
      }
      if(!validateEmail()){
        document.getElementById('emerr').style.display = "block";
        err++;
      }
      if(!validatePhone()){
        document.getElementById('pherr').style.display = "block";
        err++;
      }
      if(!validateAddress()){
        document.getElementById('dests').style.display = "block";
        err++;
      }
      if(error > 0){
        return false;
      }

    }

    //set request date to current date
    var d = new Date();
    var month = d.getMonth() + 1; //month always comes up short by one
    var day = d.getDate();
    var year = d.getFullYear();
    if(month > 0 && month <10){
      month= "0" + month;
    } 
    if(day > 0 && day < 10){
      day = "0" + day;
    }
    var date = month + '/' + day + '/' + year;
    document.getElementById("id_checkin").value = date; 
</script>
<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div><div class="pac-container pac-logo" style="display: none;"></div></body></html>