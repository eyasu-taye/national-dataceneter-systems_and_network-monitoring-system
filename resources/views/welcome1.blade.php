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

#customers td, #customers th {
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
            <ul id="tabs" class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">All <label id="liveall" class='live' style='float:right; background: red;'></label></a></li>
              <!-- <li><a data-toggle="tab" href="#menu1">Virtual Machines</a></li> -->
              <!-- <li><a data-toggle="tab" href="#menu2">Network</a></li> -->
            </ul>
</div>
<!-- <img src="https://eservices.gov.et"  onload="pageOnline()" onerror="pageOffline()"> -->
<div id="tabscontent" class="tab-content col-sm-12" style="padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">
             <div id="home" class="tab-pane fade in active col-sm-12" style="background-color: white; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><!-- ///// --> <br>
             <button class="btn-info" onclick="$('#uploadModal').modal({show: true})">Register New Domain</button> <button  class="btn-info" id="btnExport">EXPORT REPORT</button>  <button  class="btn-info" id="btn_register" onclick="register_user()">Register</button> 
             <button  class="btn-info" id="btn_register" onclick="login()">Login</button>   <input id="searchInput" onkeyup="searchHighlighter('el', this)" placeholder="Type here" /><br><br>
            <table id="customers">
              <tr>
                <th onclick="sortTable(0)" class="tooltipx">Id<span class="tooltiptext">Click here to sort</span></th>
                <th onclick="sortTable(1)" class="tooltipx">domain_name<span class="tooltiptext">Click here to sort</span></th>
                <th onclick="sortTable(2)" class="tooltipx">woredanet_ip_address<span class="tooltiptext">Click here to sort</span></th>
                <th onclick="sortTable(3)" class="tooltipx">public_ip_address<span class="tooltiptext">Click here to sort</span></th>
                <th onclick="sortTable(4)" class="tooltipx">up_down_status<span class="tooltiptext">Click here to sort</span></th>
                <th onclick="sortTable(5)" class="tooltipx">local_ip_ping_status<span class="tooltiptext">Click here to sort</span></th>
                <th onclick="sortTable(6)" class="tooltipx">domain_ns_lookup_status<span class="tooltiptext">Click here to sort</span></th>
                <th class="excludeExport">system_owner</th>
                <th class="excludeExport">owner_contact_email</th>
                <th class="excludeExport">owner_contact_phone</th>
                <th class="excludeExport">remark</th>
              </tr>
              <!-- <tr id="systemdata">
              </tr> -->
            </table>
            <center><h1>ብሔራዊ ዳታ ማዕከል የ24/7 አገልግሎት!</h1></center>
            <div id="loader">></div>
              
            </div> 
<!--             <div id="menu1" class="tab-pane fade" style="background-color: white">                 
                <iframe src="http://www.ppa.gov.et/" name="iframe_a" height="1100px" width="100%" title="Iframe Example"></iframe>
            </div> -->
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
        <input type='button' onclick="register_new_domain()" class='btn btn-info' value='ላክ' id='btn_upload' data-dismiss="modal">
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
       <h4 class="modal-title" id="conutselectedfiles" style="float: left;">Register New Domain</h4>
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
        <input type='button' onclick="update_domain()" class='btn btn-info' value='ላክ' id='btn_update' data-dismiss="modal">
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
          <input id="repeat_password" type="text" class="col-xs-12 btn btn-default" autofocus="true" style="border-radius: 5px red; text-align: right; display: block; float: left; row:1; left; margin-right: 5px;" placeholder="repeat_password">
        </form>
      <div class="modal-body">
      </div>
      <div id="previewfile" class="col-sm-12"></div>
      <div id="previewmultipleimg" class="col-sm-12"></div>
      <div class="modal-footer">
        <input type='button' onclick="register_new_user()" class='btn btn-info' value='ላክ' id='btn_register_user' onclick="register_new_user()" data-dismiss="modal">
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
        <input type='button' onclick="login_user()" class='btn btn-info' value='ላክ' id='btn_loginsssss_user' data-dismiss="modal">
      </div>
    </div>
  </div>
</div>

<!-- //scripts -->
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
         $('#register_userModal').modal({show: true});
      }

      function login(){
          // document.getElementById("mainbd").style.display = "none";
         $('#loginModal').modal({show: true});
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
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {
                          alert("New system registed successfully");
                     
                    },
                    error: function (xhr, status, error) {
                        alert(xhr.responseText);
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
                        alert(xhr.responseText);
                    },
                   
                   });
                    
  }      var update_id = null;
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
                        alert(xhr.responseText);
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
                        alert(xhr.responseText);
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
                          $('#'+ i +"systemdatatr").append("<td>"+data.remark+"</td>");
                          $("#tabscontent").append("<div id='menus' class='tab-pane fade' style='background-color: white'><div id='iframeid' src='' name='iframe_a' height='1100px' width='100%' title='Iframe Example'></div></div>");
                          document.getElementById("iframeid").id = i +"iframeid"; 
                          $('#' + i + "iframeid").append("<h3>የሲስተም ባለቤት: "+data.system_owner[i]+"<br><u>የዶሜን ሥም: "+data.domain_name[i]+"<u/><br><u>የሲስተም ባለቤት ስልክ ቁጥር: " + data.owner_contact_phone[i]+"</u><br><u>የሲስተም ባለቤት ኢሜል: "+data.owner_contact_email[i]+ "</u><br></h3><div class='grid-container'><div class='item1'>የዶሜን ሥም:</div><div class='item2'>የወረዳኔት አይፒ:</div><div class='item3'>የፐብሊክ አይፒ:</div><div class='item4'>የሲስተም ባለቤት:</div><div class='item5' id='item5'>"+data.domain_name[i]+"<br></div><div class='item6'>" + data.woredanet_ip_address[i]+"</div><div class='item7'>"+data.public_ip_address[i]+ "</div><div class='item8'>"+data.system_owner[i]+"</div></div>");
                          document.getElementById("menus").id = i +"menus"; 
                          $("#tabs").append("<li><a id = 'tabslist' data-toggle='tab' href='#menu2'>"+i+". "+data.domain_name[i]+"</a></li>");
                          document.getElementById("tabslist").id = i +"tabslist";
                          document.getElementById(i +"tabslist").href = '#' + i +"menus"; 
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
                          sortTable(4);
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

  function NewTab(id) {
    alert(id);
            // window.open(id, "_blank");
        }

  
//export to excel


$(document).ready(function(){
    $("#btnExport").click(function() {
        let table = document.getElementsByTagName("table");
        const currentDate = new Date().toDateString();
        $("#testExportId .excludeExport").remove();
        // Outputs "Mon Aug 31 2020"
        TableToExcel.convert(table[0], { // html code may contain multiple tables so here we are refering to 1st table tag
           name: `ndc_app_portal `+currentDate+`.xlsx`, // fileName you could use any name
           sheet: {
              name: 'Sheet 1' // sheetName
           }
        });
    });
});


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

  function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("customers");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc";
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
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
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

</script>
</div>
    </body>
</html>
