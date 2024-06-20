<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv='cache-control' content='no-cache'> 
        <meta http-equiv='expires' content='0'> 
        <meta http-equiv='pragma' content='no-cache'>
        <link rel="icon" href="/image/favicon.ico" type="image/vnd.microsoft.icon">


        <title>NDC Systems</title>

  <script type="text/javascript" src="/js/validateinput.js"></script>
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/jquery.min.js"></script>
  <link rel="stylesheet" href="/css/bootstrap.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>
  <!-- load jQuery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                /*font-weight: 50;*/
                font-size: 14px;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

/*#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  font-size: small;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}*/
.customerstable {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.customerstable td, th {
  border: 1px solid #ddd;
  padding: 8px;
  font-size: small;
}

.customerstable tr:nth-child(even){background-color: #f2f2f2;}

.customerstable tr:hover {background-color: #ddd;}

.customerstable th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
/*table report*/
#report td, #report th {
  border: 1px solid #ddd;
  padding: 8px;
  font-size: small;
}

#report tr:nth-child(even){background-color: #f2f2f2;}

#report tr:hover {background-color: #ddd;}

#report th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
/*net table report*/
#netreport td, #netreport th {
  border: 1px solid #ddd;
  padding: 8px;
  font-size: small;
}

#netreport tr:nth-child(even){background-color: #f2f2f2;}

#netreport tr:hover {background-color: #ddd;}

#netreport th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
/* HTML: <div class="loader"></div> */
.live {
  width: 10px;
  aspect-ratio: 1;
  border-radius: 50%;
  box-shadow: 0 0 0 0 #0004;
  animation: l1 1s infinite;
}
@keyframes l1 {
    100% {box-shadow: 0 0 0 30px #0000}
}

/*loader*/
/* HTML: <div class="loader"></div> */
#loader {
     margin: 300px 0 0 50%;
  width: 50px;
  --b: 50px; 
  aspect-ratio: 1;
  border-radius: 50%;
  padding: 1px;
  background: conic-gradient(#0000 10%,#f03355) content-box;
  -webkit-mask:
    repeating-conic-gradient(#0000 0deg,#000 1deg 20deg,#0000 21deg 36deg),
    radial-gradient(farthest-side,#0000 calc(100% - var(--b) - 1px),#000 calc(100% - var(--b)));
  -webkit-mask-composite: destination-in;
          mask-composite: intersect;
  animation:l4 1s infinite steps(10);
}
#netloader {
     margin: 300px 0 0 50%;
  width: 50px;
  --b: 50px; 
  aspect-ratio: 1;
  border-radius: 50%;
  padding: 1px;
  background: conic-gradient(#0000 10%,#f03355) content-box;
  -webkit-mask:
    repeating-conic-gradient(#0000 0deg,#000 1deg 20deg,#0000 21deg 36deg),
    radial-gradient(farthest-side,#0000 calc(100% - var(--b) - 1px),#000 calc(100% - var(--b)));
  -webkit-mask-composite: destination-in;
          mask-composite: intersect;
  animation:l4 1s infinite steps(10);
}
@keyframes l4 {to{transform: rotate(1turn)}}

.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-template-rows: 100px 300px;
  grid-gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}

/*.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}*/

.tooltiptext {
  visibility: hidden;
  width: 170px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 9999;
}
.tooltipx .tooltiptext::after {
  content: " ";
  position: absolute;
  top: 50%;
  right: 100%; /* To the left of the tooltip */
  margin-top: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: transparent black transparent transparent;
}

.tooltipx:hover .tooltiptext {
  visibility: visible;
}
        </style>
    </head>
    <body class="el" >
<div  class="col-sm-12" id="mainbd">
<div  class="col-sm-12" style="margin-top:8px; padding: 0px 0px 0px 0px;">
          <img src="/image/mint.png" alt="NDLE" class="img-responsive img-rounded" style="width: 200px; float: left; margin-top: 10px; margin-right: 5px;">
            <ul id="tabs" class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">All Sys<label id="liveall" class='live' style='float:right; background: red;'></label></a></li>
              <li class=""><a data-toggle="tab" href="#net">Net <label id="livenetall" class='live' style='float:right; background: red;'></label></a></li>
              
              <li id="tabs2" class="nav nav-tabs"><a data-toggle="tab" href="#seemore0">See More <label id="liveall" class='live' style='float:right; background: Skyblue;'></label></a></li>
             <div style="float: right; margin-top: 10px;">
                <label class="btn-warning">National Data Center 24/7 Service</label> <label id="user_profile" onclick="show_to_update_user()">{{$id1}} </label><button  class="btn-info" id="btn_register" onclick="login1()">Logout</button> 
             </div>
            </ul>

</div>
<!-- <img src="https://eservices.gov.et"  onload="pageOnline()" onerror="pageOffline()"> -->
<div id="tabscontent" class="tab-content col-sm-12" style="padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">
             <div id="home" class="tab-pane fade in active col-sm-12" style="background-color: white; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><!-- ///// --> <br>
             <button onclick="register_domain()" class="btn-info">Register New Domain</button>  <button  class="btn-info" id="btn_register" onclick="register_user()">Register New User</button>  <button  class="btn-info" id="btnExport">GENERATE REPORT</button> 
            <br><br>
            <table id="customers" class="customerstable">
              <tr>
                <th onclick="sortTable('customers', 0)" class="tooltipx">Id<span class="tooltiptext">Click here to sort</span></th>
                <th onclick="sortTable('customers', 1);"class="tooltipx">domain_name<span class="tooltiptext">Click here to sort</span></th>
                <th onclick="sortTable('customers', 2)" class="tooltipx">woredanet_ip_address<span class="tooltiptext">Click here to sort</span></th>
                <th onclick="sortTable('customers', 3)" class="tooltipx">public_ip_address<span class="tooltiptext">Click here to sort</span></th>
                <th onclick="sortTable('customers', 4);sortTable('report', 2)" class="tooltipx">up_down_status<span class="tooltiptext">Click here to sort</span></th>
                <th onclick="sortTable('customers', 5);sortTable('report', 3)" class="tooltipx">local_ip_ping_status<span class="tooltiptext">Click here to sort</span></th>
                <th onclick="sortTable('customers', 6);sortTable('report', 4)" class="tooltipx">domain_ns_lookup_status<span class="tooltiptext">Click here to sort</span></th>
                <th class="excludeExport">system_owner</th>
                <th class="excludeExport">owner_contact_email</th>
                <th class="excludeExport">owner_contact_phone</th>
                <th class="excludeExport">remark</th>
              </tr>
              <!-- <tr id="systemdata">
              </tr> -->
            </table>
            <center><h3>ብሔራዊ ዳታ ማዕከል የ24/7 አገልግሎት!</h3></center>
            <div id="loader">></div>
              
            </div>
            <!-- network tab -->
                         <div id="net" class="tab-pane fade in  col-sm-12" style="background-color: white; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><!-- ///// --> <br>
             <button onclick="register_net()" class="btn-info">Register New Network</button>  <button  class="btn-info" id="btnnetExport">GENERATE REPORT</button> 
            <br><br>
            <!-- Container (monitoring Section) -->
<div id="monitoring" class="container-fluid">
    <div class="text-center">
    <h2>Network Monitoring </h2>
    <!-- <h4>Please Check by channging the network to MINT or Guest</h4> -->
  </div>
  <div class="row">
              <table id="netcustomers" class="col-xs-12 customerstable">
              <tr>
                <th onclick="sortTable(0)" class="tooltipx">ID: <span class="tooltiptext">Click Here To Sort</span></th>
                <th onclick="sortTable(0)" class="tooltipx">PreCodition: <span class="tooltiptext">Click Here To Sort</span></th>
                <th onclick="sortTable(0)" class="tooltipx">Service Name: <span class="tooltiptext">Click Here To Sort</span></th>
                <th onclick="sortTable(2)" class="tooltipx">Description: <span class="tooltiptext">Click Here To Sort</span></th>
                <th onclick="sortTable(1)" class="tooltipx">Check Point: <span class="tooltiptext">Click Here To Sort</span></th>
                <th onclick="sortTable(3)" class="tooltipx">Replay Status: <span class="tooltiptext">Click Here To Sort</span></th>
                <th class="excludeExport">Remark: </th>
              </tr>
            </table>
  </div>
</div>
<!-- Container (About Section) -->

<script type="text/javascript">

</script>
            <div id="netloader">></div>
            <center><h3>ብሔራዊ ዳታ ማዕከል የ24/7 አገልግሎት!</h3></center>
            
              
            </div>

            <!-- end of networktab -->
          
            <div id="seemore0" class="tab-pane fade" style="background-color: white"> 
            <ul id="tabs3" class="nav nav-tabs">              
            </ul> 
            <div id="tabscontent3" class="tab-content col-sm-12" style="padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">
             
            </div>        
            </div>
          
  </div>
  <div id="uploadModal" class="modal fade" role="dialog" style = "top: 50px; z-index: 10040;">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title" id="conutselectedfiles" style="float: left;">Register New Domain</h4>
       <input type='button' class='btn btn-info' value='X' id='btn_cancle_upload' data-dismiss="modal" style="float: right;"> 
      </div>
      <!-- Form -->
        <form id="data" method='post' action="{{url('fileuploadtest')}}" enctype="multipart/form-data">
          {{csrf_field()}}  
          <label for="domain_name">domain_name</label><br>         
          <input id="domain_name" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="domain_name">
          <label for="woredanet_ip_address">woredanet_ip_address</label><br>         
          <input id="woredanet_ip_address" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="woredanet_ip_address">
           <label for="public_ip_address">public_ip_address</label><br>         
          <input id="public_ip_address" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="public_ip_address">
            <label for="up_down_status">logo_link</label><br>         
          <input id="up_down_status" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="logo_link">
           <label for="system_owner">system_owner</label><br>         
          <input id="system_owner" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="system_owner">
           <label for="owner_contact_email">owner_contact_email</label><br>         
          <input id="owner_contact_email" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="owner_contact_email">
           <label for="owner_contact_phone">owner_contact_Phone</label><br>         
          <input id="owner_contact_phone" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="owner_contact_phone">
        </form>
      <div class="modal-body">
      </div>
      <div id="previewfile" class="col-sm-12"></div>
      <div id="previewmultipleimg" class="col-sm-12"></div>
      <div class="modal-footer">
        <input type='button' onclick="register_new_domain()" class='btn btn-info' value='Send' id='btn_upload' data-dismiss="modal">
      </div>
    </div>
  </div>
</div>

<!-- //update modal -->
 <div id="updateModal" class="modal fade" role="dialog" style = "top: 50px; z-index: 10040;">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title" id="conutselectedfiles" style="float: left;">Update New Domain</h4>
       <input type='button' class='btn btn-info' value='X' id='btn_cancle_upload' data-dismiss="modal" style="float: right;"> 
      </div>
      <!-- Form -->
        <form id="data" method='post' action="{{url('fileuploadtest')}}" enctype="multipart/form-data">
          {{csrf_field()}}  
          <label for="domain_name_update">domain_name</label><br>         
          <input id="domain_name_update" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="domain_name">
          <label for="woredanet_ip_address_update">woredanet_ip_address</label><br>         
          <input id="woredanet_ip_address_update" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="woredanet_ip_address">
           <label for="public_ip_address_update">public_ip_address</label><br>         
          <input id="public_ip_address_update" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="public_ip_address">
           <label for="up_down_status_update">logo_link</label><br>         
          <input id="up_down_status_update" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="logo_link">
           <label for="system_owner_update">system_owner</label><br>         
          <input id="system_owner_update" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="system_owner">
           <label for="owner_contact_email_update">owner_contact_email</label><br>         
          <input id="owner_contact_email_update" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="owner_contact_email">
           <label for="owner_contact_phone_update">owner_contact_Phone</label><br>         
          <input id="owner_contact_phone_update" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="owner_contact_phone">
        </form>
      <div class="modal-body">
      </div>
      <div id="previewfile" class="col-sm-12"></div>
      <div id="previewmultipleimg" class="col-sm-12"></div>
      <div class="modal-footer">
        <input type='button' onclick="update_domain()" class='btn btn-info' value='Send' id='btn_update' data-dismiss="modal">
      </div>
    </div>
  </div>
</div>


<!-- //update modal -->
 <div id="register_userModal" class="modal fade" role="dialog" style = "top: 50px; z-index: 10040;">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title" id="register_user" style="float: left;">Register New User</h4>
       <input type='button' class='btn btn-info' value='X' id='btn_cancle_register_user' data-dismiss="modal" style="float: right;"> 
      </div>
      <!-- Form -->
        <form id="data" method='post' action="" enctype="multipart/form-data">
          {{csrf_field()}}  
          <label for="first_name">Fisrt name</label><br>         
          <input id="first_name" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="first_name">
          <label for="last_name">Last name</label><br>         
          <input id="last_name" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="last_name">
           <label for="">Email Address</label><br>         
          <input id="email_address" type="email" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="email_address">
            <!-- <label for="up_down_status">logo_link</label><br>         
          <input id="up_down_status" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="logo_link"> -->
           <label for="department">Department</label><br>         
          <input id="department" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="department">
           <label for="password">Password</label><br>         
          <input id="create_password" type="password" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="password">
           <label for="repeat_password">Repeat your password</label><br>         
          <input id="repeat_password" type="password" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="repeat_password">
        </form>
      <div class="modal-body">
      </div>
      <div id="previewfile" class="col-sm-12"></div>
      <div id="previewmultipleimg" class="col-sm-12"></div>
      <div class="modal-footer">
        <input type='button' onclick="register_new_user()" class='btn btn-info' value='Send' id='btn_register_user' data-dismiss="modal">
      </div>
    </div>
  </div>
</div>

<!-- update user data modal -->
<!-- //update modal -->
 <div id="update_userModal" class="modal fade" role="dialog" style = "top: 50px; z-index: 10040;">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title" id="update_user" style="float: left;">Update Your Profile</h4>
       <input type='button' class='btn btn-info' value='X' id='btn_cancle_update_user' data-dismiss="modal" style="float: right;"> 
      </div>
      <!-- Form -->
        <form id="update_user_data" method='post' action="" enctype="multipart/form-data">
          {{csrf_field()}}  
          <label for="first_name_update">Fisrt name</label><br>         
          <input id="first_name_update" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="first_name">
          <small id="first_name_update_check"></small>
          <label for="last_name_update">Last name</label><br>         
          <input id="last_name_update" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="last_name">
          <small id="last_name_update_check"></small>
           <label for="email_address_update">Email Address</label><br>         
          <input id="email_address_update" type="email" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="email_address">
          <small id="email_update_check"></small>
            <!-- <label for="up_down_status">logo_link</label><br>         
          <input id="up_down_status" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="logo_link"> -->
           <label for="department_update">Department</label><br>         
          <input id="department_update" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="department">
          <small id="departmet_update_check"></small>
           <label for="create_password_update">Password</label><br>         
          <input id="create_password_update" type="password" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="password">
          <small id="create_password_update_check"></small>
           <label for="repeat_password_update">Repeat your password</label><br>         
          <input id="repeat_password_update" type="password" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="repeat_password">
          <small id="repeat_password_update_check"></small>
          <input id="user_id" type="hidden" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="">
        </form>
      <div class="modal-body">
      </div>
      <div id="previewfile" class="col-sm-12"></div>
      <div id="previewmultipleimg" class="col-sm-12"></div>
      <div class="modal-footer">
        <input type='button' onclick="update_user_after_validation()" class='btn btn-info' value='send' id='btn_update_user'>
      </div>
    </div>
  </div>
</div>

<!-- //update modal -->
 <div id="loginModal" class="modal fade" role="dialog" style = "top: 50px; z-index: 10040;">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title" id="login_user" style="float: left;">Login</h4>
       <input type='button' class='btn btn-info' value='X' id='btn_cancle_login' data-dismiss="modal" style="float: right;"> 
      </div>
      <!-- Form -->
        <form id="data" method='post' action="" enctype="multipart/form-data">
          {{csrf_field()}}  
           <label for="">Email Address</label><br>         
          <input id="email_address" type="email" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="email_address">
           <label for="password">Password</label><br>         
          <input id="lgnpassword" type="password" value="" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="password">
        </form>
      <div class="modal-body">
      </div>
      <div id="previewfile" class="col-sm-12"></div>
      <div id="previewmultipleimg" class="col-sm-12"></div>
      <div class="modal-footer">
        <input type='button' onclick="login_user()" class='btn btn-info' value='Send' id='btn_login_user' data-dismiss="modal">
      </div>
    </div>
  </div>
</div>

<!-- reporting modal -->

  <div id="reportModal" class="modal fade" role="dialog" style = "top: 50px; z-index: 10040;
  margin: auto;">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title" id="reportmodaltitle" style="float: left;">Report</h4>
       <button class="btn-info" id="btn_download_report_onmodalheader_cancel" id='btn_cancle_report' data-dismiss="modal" style="float: right; margin-right: 5px;">X</button> 
       <button class="btn-info" id="btn_download_report_onmodalheader" style="float: right; margin-right: 10px;">Download Report</button> 
      <!--  <input type='button' class='btn btn-info btn_download_report' value='Download Report' id='btn_download_report_onmodalheader' data-dismiss="modal" style="float: right;"> --> 


      </div>
      <!-- Form -->
      <div class="modal-body" >
            <table id="report" class="col-xs-12">
              <tr>
                <th onclick="sortTable('report', 0)" >Id</th>
                <th onclick="sortTable('report', 1)" >domain_name</th>
                <th onclick="sortTable('report', 2)" >up_down_status</th>
                <th onclick="sortTable('report', 3)" >local_ip_ping_status</th>
                <th onclick="sortTable('report', 4)" >domain_ns_lookup_status</th>
                <th class="excludeExport">remark</th>
              </tr>
            </table>
      </div>
      <div id="previewfile" class="col-sm-12"></div>
      <div id="previewmultipleimg" class="col-sm-12"></div>
      <div class="modal-footer">
        <input type='button' class='btn btn-info btn_download_report' value='Download Report' id='btn_download_report_onmodalfooter' data-dismiss="modal" style="float: left;"> 
        <input type='button'  class='btn btn-info' value='Cancel' id='btn_upload' data-dismiss="modal">
      </div>
    </div>
  </div>
</div>
<!-- end of system report modal -->
<!-- network report modal -->
<!-- reporting modal -->

  <div id="netreportModal" class="modal fade" role="dialog" style = "top: 50px; z-index: 10040;
  margin: auto;">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title" id="netreportmodaltitle" style="float: left;">Report</h4>
       <button class="btn-info" id="net_btn_download_report_onmodalheader_cancel" id='netbtn_cancle_report' data-dismiss="modal" style="float: right; margin-right: 5px;">X</button> 
       <button class="btn-info" id="net_btn_download_report_onmodalheader" style="float: right; margin-right: 10px;">Download Report</button> 
      <!--  <input type='button' class='btn btn-info btn_download_report' value='Download Report' id='btn_download_report_onmodalheader' data-dismiss="modal" style="float: right;"> --> 


      </div>
      <!-- Form -->
      <div class="modal-body" >
            <table id="netreport" class="col-xs-12 customerstable">
              <tr>
                <th onclick="sortTable(0)" class="tooltipx">ID:</th>
                <th onclick="sortTable(0)" class="tooltipx">PreCodition:</th>
                <th onclick="sortTable(0)" class="tooltipx">Service Name:</th>
                <th onclick="sortTable(2)" class="tooltipx">Description:</th>
                <th onclick="sortTable(1)" class="tooltipx">Check Point:</th>
                <th onclick="sortTable(3)" class="tooltipx">Replay Status:</th>
                <th class="excludeExport">Remark: </th>
              </tr>
            </table>
      </div>
      <div id="previewfile" class="col-sm-12"></div>
      <div id="previewmultipleimg" class="col-sm-12"></div>
      <div class="modal-footer">
        <input type='button' class='btn btn-info btn_download_report' value='Net Download Report' id='net_btn_download_report_onmodalfooter' data-dismiss="modal" style="float: left;"> 
        <input type='button'  class='btn btn-info' value='Cancel' id='btn_upload' data-dismiss="modal">
      </div>
    </div>
  </div>
</div>
<!-- end of network report modal -->
<!-- etwork setti -->
<!-- //register network -->
    <div id="uploadModalnet" class="modal fade" role="dialog" style = "top: 50px; z-index: 10040;">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title" id="conutselectedfiles" style="float: left;">Register New Network</h4>
       <input type='button' class='btn btn-info' value='X' id='btn_cancle_upload' data-dismiss="modal" style="float: right;"> 
      </div>
      <!-- Form -->
        <form id="data" method='post' action="{{url('fileuploadtest')}}" enctype="multipart/form-data">
          {{csrf_field()}}  
          <label for="Precodition">PreCodition</label><br>         
          <input id="Precodition" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="Precodition">
          <label for="Service_Name">Service_Name</label><br>         
          <input id="Service_Name" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="Service_Name">
           <label for="Description">Description</label><br>         
          <input id="Description" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="Description">
          <label for="Check_Point_IP">Check_Point_IP</label><br>         
          <input id="Check_Point_IP" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="Check_Point_IP"><br><br>
        </form>
      <div class="modal-body">
      </div>
      <div id="previewfile" class="col-sm-12"></div>
      <div id="previewmultipleimg" class="col-sm-12"></div>
      <div class="modal-footer">
        <input type='button' onclick="register_new_net()" class='btn btn-info' value='Send' id='btn_upload' data-dismiss="modal">
      </div>
    </div>
  </div>
</div>
<!-- //scripts -->
<script type="text/javascript">
    $(document).ready(
    function checknetwork(){            
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                        /* the route pointing to the post function */
                        url:"{{url('checknetwork')}}",
                        type: 'POST',
                        data: {_token: CSRF_TOKEN,},
                        dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {
                       for(var i=1; i<=data.cow; i++){
                        $("#netcustomers").append("<tr id='netdatatr'></tr>");
                        $("#netreport").append("<tr id='netdatatr2'></tr>");
                        document.getElementById("netloader").style.display = "none";
                        document.getElementById("netdatatr").id = i +"netdatatr"; 
                        document.getElementById("netdatatr2").id = i +"netdatatr2"; 
                         document.getElementById("livenetall").style.background = "green";
                       
                          $('#'+ i +"netdatatr").append("<td>"+i+"</td>");
                          $('#'+ i +"netdatatr").append("<td id = 'Pre_Codition' onclick='NewTab(this.id)'>"+data.Pre_Codition[i]+"</td>");
                          $('#'+ i +"netdatatr").append("<td id = 'Service_Name'>"+data.Service_Name[i]+"</td>");
                          $('#'+ i +"netdatatr").append("<td id = 'Description'>"+data.Description[i]+"</td>");
                          $('#'+ i +"netdatatr").append("<td id = 'Check_Point_IP'>"+data.Check_Point_IP[i]+"</td>");
                          $('#'+ i +"netdatatr").append("<td id = 'Replay_Status'>"+data.Replay_Status[i]+"</td>");
                          $('#'+ i +"netdatatr").append("<td>"+data.remark[i]+"</td>");
                          
                          // for report

                          $('#'+ i +"netdatatr2").append("<td>"+i+"</td>");
                          $('#'+ i +"netdatatr2").append("<td id = 'Pre_Codition' onclick='NewTab(this.id)'>"+data.Pre_Codition[i]+"</td>");
                          $('#'+ i +"netdatatr2").append("<td id = 'Service_Name'>"+data.Service_Name[i]+"</td>");
                          $('#'+ i +"netdatatr2").append("<td id = 'Description'>"+data.Description[i]+"</td>");
                          $('#'+ i +"netdatatr2").append("<td id = 'Check_Point_IP'>"+data.Check_Point_IP[i]+"</td>");
                          $('#'+ i +"netdatatr2").append("<td id = 'Replay_Status'>"+data.Replay_Status[i]+"</td>");
                          $('#'+ i +"netdatatr2").append("<td>"+data.remark[i]+"</td>");
                        }
                    },
                    error: function (xhr, status, error) {
                        alert(xhr.responseText);
                    },
                         complete: function(){
                                        // Schedule the next request when the current one's complete
                                        // setTimeout(checksystems, 200000);
                                      },
                   
                   });
   });

        function register_new_net(){
                          var formData = new FormData();
                          var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                          formData.append('_token', CSRF_TOKEN);
                          formData.append('Precodition', $("#Precodition").val());
                          formData.append('Service_Name', $("#Service_Name").val());
                          formData.append('Description', $("#Description").val());
                          formData.append('Check_Point_IP', $("#Check_Point_IP").val());
                $.ajax({
                        /* the route pointing to the post function */
                        url:"{{url('registernewnet')}}",
                        type: 'POST',
                        data: formData,  
                        contentType: false,
                        processData: false,
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {

                      var i=0;
                       for(i=1; i<=data.cow; i++){
                         $("#customersnet").append("<tr id='netdatatrnewnet'></tr>");
                         j = data.id[i];
                         document.getElementById("netdatatrnewnet").id = j +"netdatatrnewnet"; 
                          $('#'+ j +"netdatatrnewnet").append("<td>"+data.id[i]+"</td>");
                          $('#'+ j +"netdatatrnewnet").append("<td>"+data.Pre_Codition[i]+"</td>");
                          $('#'+ j +"netdatatrnewnet").append("<td>"+data.Service_Name[i]+"</td>");
                          $('#'+ j +"netdatatrnewnet").append("<td>"+data.Description[i]+"</td>");
                          $('#'+ j +"netdatatrnewnet").append("<td>"+data.Check_Point_IP[i]+"</td>");
                          $('#'+ j +"netdatatrnewnet").append("<td"+data.Replay_Status[i]+"</td>");
                          }
                          alert("New Network registed successfully");
                     
                    },
                    error: function (xhr, status, error) {
                      
                      alert("Some Thing Went Wrong Try Again");
                      alert(xhr.responseText);
                    },
                   
                   });
                    
  }  
  function register_net(){
          // document.getElementById("mainbd").style.display = "none";
          if('{{$id1}}' == "admin@mint.gov.et"){
            $('#uploadModalnet').modal({show: true});
          }else{
            alert("You Must be an admin to register new user");
          }
         
      }
    </script>
<script type="text/javascript">

      const searchHighlighter = (elem, that) => {
         $("p:contains('" + elem + "')").css("background-color", "yellow");
        // let el = document.getElementsByClassName(elem);
        // for (let i = 0; i < el.length; i++) {
        //   el[i].innerHTML = el[i].innerText.replace(new RegExp(that.value + "(?!([^<]+)?<)", "gi"), "<mark>$&</mark>");
        // }
      };

      function register_user(){
          // document.getElementById("mainbd").style.display = "none";
          if('{{$id1}}' == "admin@mint.gov.et"){
            $('#register_userModal').modal({show: true});
          }else{
            alert("You Must be an admin to register new user");
          }
         
      }
      function register_domain(){
          // document.getElementById("mainbd").style.display = "none";
          if('{{$id1}}' == "admin@mint.gov.et"){
            $('#uploadModal').modal({show: true});
          }else{
            alert("You Must be an admin to register new user");
          }
         
      }

      function show_to_update_user(){
          // document.getElementById("mainbd").style.display = "none";
         
                       var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                       var id = '{{$id1}}';
                $.ajax({
                        /* the route pointing to the post function */
                        url:"{{url('show_to_update_user')}}",
                        type: 'POST',
                        type: 'POST',
                        data: {_token: CSRF_TOKEN, id},
                        dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {
                          $("#first_name_update").val(data.first_name);
                          $("#last_name_update").val(data.last_name);
                          $("#email_address_update").val(data.email);
                          $("#department_update").val(data.department);
                          $("#create_password_update").val(data.password);
                          $("#repeat_password_update").val(data.password);
                          $("#user_id").val(data.id);
                          $('#update_userModal').modal({show: true});
                    },
                    error: function (xhr, status, error) {
                        //alert(xhr.responseText);
                    },
                   
                   });
      }
              function update_user(){
                          var id = update_id;
                          var formData = new FormData();
                          var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                          formData.append('_token', '{{csrf_token()}}');
                          formData.append('id', $("#user_id").val());
                          formData.append('first_name_update', $("#first_name_update").val());
                          formData.append('last_name_update', $("#last_name_update").val());
                          formData.append('email_address_update', $("#email_address_update").val());
                          formData.append('department_update', $("#department_update").val());
                          formData.append('create_password_update', $("#create_password_update").val());
                $.ajax({
                        /* the route pointing to the post function */
                        url:"{{url('update_user')}}",
                        type: 'POST',
                        data: formData,  
                        contentType: false,
                        processData: false,
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {

                        $("#user_profile").html(data.user_name);
                        alert(data.status);
                     
                    },
                    error: function (xhr, status, error) {
                        //alert(xhr.responseText);
                    },
                   
                   });
                    
  }

          function login1(){
    
                          var formData = new FormData();
                          var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                          formData.append('_token', '{{csrf_token()}}');
                          formData.append('lgemail', '{{$id1}}');
                          formData.append('lgpassword', '{{$id2}}');
                          formData.append('option', '0');
                $.ajax({
                        /* the route pointing to the post function */
                        url:"{{url('monitoring')}}",
                        type: 'POST',
                        data: formData,  
                        contentType: false,
                        processData: false,
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {
                     if (data.status == 1) {
                      // document.getElementById("mainbd").style.display = "block";
                     // checksystemslg();
                     window.open(data.url, "_self");
                     // alert(data.url);
                   }else{
                    alert("no"); 
                   }
                    },
                    error: function (xhr, status, error) {
                        //alert(xhr.responseText);
                    },
                   
                   });
  }
    

   
         function register_new_user(){
                          var formData = new FormData();
                          var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                          formData.append('_token', '{{csrf_token()}}');
                          formData.append('first_name', $("#first_name").val());
                          formData.append('last_name', $("#last_name").val());
                          formData.append('public_ip_address', $("#public_ip_address").val());
                          formData.append('email', $("#email_address").val());
                          formData.append('department', $("#department").val());
                          formData.append('create_password', $("#create_password").val());
                $.ajax({
                        /* the route pointing to the post function */
                        url:"{{url('register_user')}}",
                        type: 'POST',
                        data: formData,  
                        contentType: false,
                        processData: false,
                    /* remind that 'data' is the response of the AjaxControlle */
                    success: function (data) {
                          alert("New system registed successfully");
                     
                    },
                    error: function (xhr, status, error) {
                       alert("Some Thing Went Wrong Try Again");
                    },
                   
                   });
                    
  }

      function register_new_domain(){
                          var formData = new FormData();
                          var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                          formData.append('_token', '{{csrf_token()}}');
                          formData.append('domain_name', $("#domain_name").val());
                          formData.append('woredanet_ip_address', $("#woredanet_ip_address").val());
                          formData.append('public_ip_address', $("#public_ip_address").val());
                          formData.append('up_down_status', $("#up_down_status").val());
                          formData.append('system_owner', $("#system_owner").val());

                          formData.append('owner_contact_email', $("#owner_contact_email").val());
                          formData.append('owner_contact_phone', $("#owner_contact_phone").val());
                $.ajax({
                        /* the route pointing to the post function */
                        url:"{{url('registernewdomain')}}",
                        type: 'POST',
                        data: formData,  
                        contentType: false,
                        processData: false,
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {
                      var i=0;
                       for(i=1; i<=data.cow; i++){
                         $("#customers").append("<tr id='systemdatatrnew'></tr>");
                         j = data.id[i];
                         document.getElementById("systemdatatrnew").id = j +"systemdatatrnew"; 
                          $('#'+ j +"systemdatatrnew").append("<td>"+data.id[i]+"</td>");
                          $('#'+ j +"systemdatatrnew").append("<td>"+data.domain_name[i]+"</td>");
                          $('#'+ j +"systemdatatrnew").append("<td>"+data.woredanet_ip_address[i]+"</td>");
                          $('#'+ j +"systemdatatrnew").append("<td>"+data.public_ip_address[i]+"</td>");
                          $('#'+ j +"systemdatatrnew").append("<td id = up_down_status_newrg></td>");
                          $('#'+ j +"systemdatatrnew").append("<td>"+data.local_ip_ping_status[i]+"</td>");
                          $('#'+ j +"systemdatatrnew").append("<td>"+data.domain_ns_lookup_status[i]+"</td>");
                          $('#'+ j +"systemdatatrnew").append("<td>"+data.system_owner[i]+"</td>");
                          $('#'+ j +"systemdatatrnew").append("<td>"+data.owner_contact_email[i]+"</td>");
                          $('#'+ j +"systemdatatrnew").append("<td>"+data.owner_contact_phone[i]+"</td>");
                          $('#'+ j +"systemdatatrnew").append("<td>"+data.remark[i]+"</td>");
                          live4(data.up_down_status[i], "up_down_status_newrg");
                          
                          }
                          alert("New system registed successfully");
                     
                    },
                    error: function (xhr, status, error) {
                      alert("Some Thing Went Wrong Try Again");
                    },
                   
                   });
                    
  }  
      function Check_update_domain(id) {
        // body...
        var uid = id;
         if('{{$id1}}' == "admin@mint.gov.et"){
            show_to_update_domain(uid);
          }else{
            alert("You Must be an admin to register new user");
          }
      }
      var update_id = null;
        function show_to_update_domain(id){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                        /* the route pointing to the post function */
                        url:"{{url('show_to_update_domain')}}",
                        type: 'POST',
                        type: 'POST',
                        data: {_token: CSRF_TOKEN, id},
                        dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {
                          $("#domain_name_update").val(data.domain_name);
                          $("#woredanet_ip_address_update").val(data.woredanet_ip_address);
                          $("#public_ip_address_update").val(data.public_ip_address);
                          $("#up_down_status_update").val(data.up_down_status);
                          $("#system_owner_update").val(data.system_owner);
                          $("#owner_contact_email_update").val(data.owner_contact_email);
                          $("#owner_contact_phone_update").val(data.owner_contact_phone);
                          $('#updateModal').modal({show: true});
                          update_id = id;
                    },
                    error: function (xhr, status, error) {
                      alert("Some Thing Went Wrong Try Again");
                    },
                   
                   });
                    
  }
        function update_domain(){
                          var id = update_id;
                          var formData = new FormData();
                          var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                          formData.append('_token', '{{csrf_token()}}');
                          formData.append('id', id);
                          formData.append('domain_name_update', $("#domain_name_update").val());
                          formData.append('woredanet_ip_address_update', $("#woredanet_ip_address_update").val());
                          formData.append('public_ip_address_update', $("#public_ip_address_update").val());
                          formData.append('up_down_status', $("#up_down_status").val());
                          formData.append('system_owner_update', $("#system_owner_update").val());
                          formData.append('up_down_status_update', $("#up_down_status_update").val());

                          formData.append('owner_contact_email_update', $("#owner_contact_email_update").val());
                          formData.append('owner_contact_phone_update', $("#owner_contact_phone_update").val());
                $.ajax({
                        /* the route pointing to the post function */
                        url:"{{url('update_domain')}}",
                        type: 'POST',
                        data: formData,  
                        contentType: false,
                        processData: false,
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {

                        $('#'+id + "td_domain_name").html(data.domain_name);
                        $('#'+id + "td_woredanet_ip_address").html(data.woredanet_ip_address);
                        $('#'+id + "td_system_owner").html(data.system_owner);

                        $('#'+id + "td_owner_contact_email").html(data.owner_contact_email);
                        $('#'+id + "td_owner_contact_phone").html(data.owner_contact_phone);

                        $('#'+id + "td_public_ip_address").html(data.public_ip_address);
                        // $('#'+id + "td_up_down_status").html(live4(data.up_down_status));
                         $('#'+id + "td_domain_ns_lookup_status").html(data.domain_ns_lookup_status);
                        $('#'+id + "td_local_ip_ping_status").html(data.local_ip_ping_status);
                        live4(data.up_down_status, id + "td_up_down_status");
                        alert(data.status);
                     
                    },
                    error: function (xhr, status, error) {
                        alert("Some Thing Went Wrong Try Again");
                    },
                   
                   });
                    
  }
   $(document).ready(
    function checksystems(){            
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                        /* the route pointing to the post function */
                        url:"{{url('checksystems')}}",
                        type: 'POST',
                        data: {_token: CSRF_TOKEN,},
                        dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {
                      // alert(checklive("http://google.com"));
                        $("#btnExport").append(" " + new Date().toDateString());
                      document.getElementById("loader").style.display = "none";
                      document.getElementById("liveall").style.background = "green";
                       for(var i=1; i<=data.cow; i++){
                        $("#customers").append("<tr id='systemdatatr'></tr>");
                        document.getElementById("systemdatatr").id = i +"systemdatatr"; 
                          // $('#'+ i +"systemdatatr").append("<td>"+data.id[i]+"</td>");
                          $('#'+ i +"systemdatatr").append("<td>"+i+"</td>");
                          $('#'+ i +"systemdatatr").append("<td id = 'td_domain_name' onclick='NewTab(this.id)'>"+data.domain_name[i]+"</td>");
                          $('#'+ i +"systemdatatr").append("<td id = 'td_woredanet_ip_address'>"+data.woredanet_ip_address[i]+"</td>");
                          $('#'+ i +"systemdatatr").append("<td id = 'td_public_ip_address'>"+data.public_ip_address[i]+"</td>");
                           $('#'+ i +"systemdatatr").append("<td id = 'td_up_down_status'></td>");
                          $('#'+ i +"systemdatatr").append("<td id = 'td_local_ip_ping_status'>"+data.local_ip_ping_status[i]+"</td>");
                          $('#'+ i +"systemdatatr").append("<td id = 'td_domain_ns_lookup_status'>"+data.domain_ns_lookup_status[i]+"</td>");
                          $('#'+ i +"systemdatatr").append("<td id = 'td_system_owner'>"+data.system_owner[i]+"</td>");
                          $('#'+ i +"systemdatatr").append("<td id = 'td_owner_contact_email'>"+data.owner_contact_email[i]+"</td>");
                          $('#'+ i +"systemdatatr").append("<td id = 'td_owner_contact_phone'>"+data.owner_contact_phone[i]+"</td>");
                          $('#'+ i +"systemdatatr").append("<td>"+"<label  onclick='Check_update_domain(this.id)' id='update_record' class='label-info'>Update</label>"+"</td>");
                          $("#tabscontent3").append("<div id='menus' class='tab-pane fade' style='background-color: white'><div id='iframeid' src='' name='iframe_a' height='1100px' width='100%' title=''></div></div>");
                          document.getElementById("iframeid").id = i +"iframeid"; 
                          $('#' + i + "iframeid").append("<h3>የሲስተም ባለቤት: "+data.system_owner[i]+"<br><u>የዶሜን ሥም: "+data.domain_name[i]+"<u/><br><u>የሲስተም ባለቤት ስልክ ቁጥር: " + data.owner_contact_phone[i]+"</u><br><u>የሲስተም ባለቤት ኢሜል: "+data.owner_contact_email[i]+ "</u><br></h3><div class='grid-container'><div class='item1'>የዶሜን ሥም:</div><div class='item2'>የወረዳኔት አይፒ:</div><div class='item3'>የፐብሊክ አይፒ:</div><div class='item4'>የሲስተም ባለቤት:</div><div class='item5' id='item5'>"+data.domain_name[i]+"<br></div><div class='item6'>" + data.woredanet_ip_address[i]+"</div><div class='item7'>"+data.public_ip_address[i]+ "</div><div class='item8'>"+data.system_owner[i]+"</div></div>");
                          document.getElementById("menus").id = i +"menus"; 
                          $("#tabs3").append("<li><a id = 'tabslist3' data-toggle='tab' href='#seemore'>"+i+". "+data.domain_name[i]+"</a></li>");
                          document.getElementById("tabslist3").id = i +"tabslist3";
                          document.getElementById(i +"tabslist3").href = '#' + i +"menus"; 
                          document.getElementById("update_record").id = data.id[i];

                          document.getElementById("td_domain_name").id = data.domain_name[i];
                          // document.getElementById("td_domain_name_a").id = data.domain_name[i];
                          document.getElementById("td_woredanet_ip_address").id = data.id[i] + "td_woredanet_ip_address";
                          document.getElementById("td_public_ip_address").id = data.id[i] + "td_public_ip_address";
                          document.getElementById("td_system_owner").id = data.id[i] + "td_system_owner";
                          document.getElementById("td_owner_contact_email").id = data.id[i] + "td_owner_contact_email";
                          document.getElementById("td_owner_contact_phone").id = data.id[i] + "td_owner_contact_phone";

                          document.getElementById("td_local_ip_ping_status").id = data.id[i] + "td_local_ip_ping_status";
                          document.getElementById("td_domain_ns_lookup_status").id = data.id[i] + "td_domain_ns_lookup_status";
                          document.getElementById("td_up_down_status").id = data.id[i] + "td_up_down_status";
                          document.getElementById(data.domain_name[i]).href = data.domain_name[i]; 
                          live4(data.up_down_status[i], data.id[i] + "td_up_down_status");
                          sortTable("customers", 4);
                          //for report
                          $("#report").append("<tr id='systemdatatr2'></tr>");
                          document.getElementById("systemdatatr2").id = i +"systemdatatr2"; 
                          $('#'+ i +"systemdatatr2").append("<td>"+i+"</td>");
                          $('#'+ i +"systemdatatr2").append("<td id = 'td_domain_name2' onclick='NewTab(this.id)'>"+data.domain_name[i]+"</td>");
                           $('#'+ i +"systemdatatr2").append("<td id = 'td_up_down_status2'></td>");
                          $('#'+ i +"systemdatatr2").append("<td id = 'td_local_ip_ping_status2'>"+data.local_ip_ping_status[i]+"</td>");
                          $('#'+ i +"systemdatatr2").append("<td id = 'td_domain_ns_lookup_status2'>"+data.domain_ns_lookup_status[i]+"</td>");
                          $('#'+ i +"systemdatatr2").append("<td>"+data.remark+"</td>");

                          document.getElementById("td_domain_name2").id = data.domain_name[i];

                          document.getElementById("td_local_ip_ping_status2").id = data.id[i] + "td_local_ip_ping_status";
                          document.getElementById("td_domain_ns_lookup_status2").id = data.id[i] + "td_domain_ns_lookup_status";
                          document.getElementById("td_up_down_status2").id = data.id[i] + "td_up_down_status2";
                          live4(data.up_down_status[i], data.id[i] + "td_up_down_status2");
                          


                          }
                     
                    },
                    error: function (xhr, status, error) {
                       alert("Checking... Please Wait");
                    },
                         complete: function(){
                                        // Schedule the next request when the current one's complete
                                        // setTimeout(checksystems, 200000);
                                      },
                   
                   });
   });

  function NewTab(id) {
            window.open(id, "_blank");
        }

  
//export to excel



$(document).ready(function(){
    $("#btn_download_report_onmodalheader").click(function() {
        let table = document.getElementById("report");
        const currentDate = new Date().toDateString();
        $("#testExportId .excludeExport").remove();
        // Outputs "Mon Aug 31 2020"
        TableToExcel.convert(table, { // html code may contain multiple tables so here we are refering to 1st table tag
           name: `ndc_app_portal `+currentDate+`.xlsx`, // fileName you could use any name
           sheet: {
              name: 'Sheet 1' // sheetName
           }
        });
    });
});

$(document).ready(function(){
    $("btn_download_report_onmodalfooter").click(function() {
        let table = document.getElementById("netreport");
        const currentDate = new Date().toDateString();
        $("#testExportId .excludeExport").remove();
        // Outputs "Mon Aug 31 2020"
        TableToExcel.convert(table, { // html code may contain multiple tables so here we are refering to 1st table tag
           name: `ndc_app_portal `+currentDate+`.xlsx`, // fileName you could use any name
           sheet: {
              name: 'Sheet 1' // sheetName
           }
        });
    });
});
// for network
$(document).ready(function(){
    $("#net_btn_download_report_onmodalheader").click(function() {
        let table = document.getElementById("report");
        const currentDate = new Date().toDateString();
        $("#testExportId .excludeExport").remove();
        // Outputs "Mon Aug 31 2020"
        TableToExcel.convert(table, { // html code may contain multiple tables so here we are refering to 1st table tag
           name: `ndc_network `+currentDate+`.xlsx`, // fileName you could use any name
           sheet: {
              name: 'Sheet 1' // sheetName
           }
        });
    });
});

$(document).ready(
$("#btnExport").click(
 function generatereport(){
 sortTable("report", 2);       
 new Date().toDateString();
 document.getElementById("reportmodaltitle").innerHTML = "System Status Report on "+new Date().toDateString();
          $('#reportModal').modal({show: true});
           }

)
);

$(document).ready(
  $("#btnnetExport").click(
 function netgeneratereport(){
 sortTable("netreport", 1);       
 new Date().toDateString();
 document.getElementById("netreportmodaltitle").innerHTML = "Network Status Report on "+new Date().toDateString();
          $('#netreportModal').modal({show: true});
           }

)
  );


  function live4(url, id){

let img = document.createElement('img');
img.src=url;

img.onload = function() {
 document.getElementById(id).innerHTML  =  "<label class='label-info'>online</span></label><label class='live' style='float:right; background: green;'></label>";
};

img.onerror = function() {
  document.getElementById(id).innerHTML  =  "<label class='label-danger'>offline</span></label><label class='live' style='float:right; background: red;'></label>";
};
    
  }

  function sortTable(tb, n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;

  table = document.getElementById(tb);
  switching = true;
  // Set the sorting direction to ascending:
  dir = "desc";
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "desc") {
        dir = "asc";
        switching = true;
      }
    }
  }
}

function Launch_TSC(strServer) {
    var strServer
    var strTSCpath = "C:\\windows\\system32\\mstsc.exe /v:"
    var ws = new ActiveXObject("WScript.Shell");
     ws.Exec(strTSCpath + strServer);
}

function validateForm() {
  let x = document.getElementById("first_name_update").value;
    let y = document.getElementById("last_name_update").value;
      let z = document.getElementById("email_address_update").value;
       let a = document.getElementById("department_update").value;
        let b = document.getElementById("create_password_update").value;
          let c = document.getElementById("repeat_password_update").value;
  if (x == "" ) {
    alert("first_name must be filled out");
    return false;
  }
  if (y == "" ) {
    alert("last_name must be filled out");
    return false;
  }
  if (z == "" ) {
    alert("email_address must be filled out");
    return false;
  }
  if (a == "" ) {
    alert("department must be filled out");
    return false;
  }
  if (b == "" ) {
    alert("password must be filled out");
    return false;
  }
  if (c == "" ) {
    alert("repeat_password must be filled out");
    return false;
  }

if (b!=c) {
   alert("password do not much");
    return false;
}
 return true;
}

function update_user_after_validation(){
  var x = validateForm();
  if (x) {
    update_user();
    $('#update_userModal').modal('hide');
  }
}

</script>
</div>
    </body>
</html>
