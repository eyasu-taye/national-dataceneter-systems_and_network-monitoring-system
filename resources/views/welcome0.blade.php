<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
      font-family: Arial, Helvetica, sans-serif;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: rgb(106, 90, 205);
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: rgb(106, 90, 205);
      font-size: 50px;
  }
  .logo {
      color: rgb(106, 90, 205);
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: rgb(106, 90, 205);
  }
  .carousel-indicators li {
      border-color: rgb(106, 90, 205);
  }
  .carousel-indicators li.active {
      background-color: rgb(106, 90, 205);
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid rgb(106, 90, 205); 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid rgb(106, 90, 205);
      background-color: #fff !important;
      color: rgb(106, 90, 205);
  }
  .panel-heading {
      color: #fff !important;
      background-color: rgb(106, 90, 205) !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: rgb(106, 90, 205);
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #04AA6D;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 2px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
      display: block;

  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: rgb(106, 90, 205) !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: rgb(106, 90, 205);
      
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }

  #myCarousel{
            /*display: flex;*/
            /*flex-direction: row;*/
            font-size: 30px;
            color: green;
            /*border: 4px dashed green;*/
            padding: 5px;
            width: auto;}
 
  #myCarousel div {
            border-radius: 5px red;
            margin: 10px 20px ;
            width: 200px;
            display: block;
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
  background: conic-gradient(#0000 10%,#04AA6D) content-box;
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
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <img src="/image/mint.png" alt="NDLE" class="img-responsive img-rounded" style="width: 200px; float: left; margin-top: 10px;">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#monitoring">Monitoring</a></li>
        <li><a href="#about">Web Hosting</a></li>
        <li><a href="#storage">Backup Storage</a></li>
        <li><a href="#hpc">HPC Resources</a></li>
        <li><a href="#network">Colocation</a></li>
        <li><a href="#email">Email Server</a></li>
        <!-- <li><a href="#myCarousel">Our</a></li> -->
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center"  style="background-image: url('/image/ndclogo.jpg'); color: #04AA6D;">
  <label id="liveall" class='live' style='float:left; background: red;'></label><label style="float: left;" id="liveallmessage">Checking Systems. Please Wait the status of the systems will be loaded on the table below</label><br>
   <h1><strong>National Data Center</strong></h1> 
    <p><strong>24/7 Service</strong></p> 
  <form id="loginform" action="">
    <div class="col-xs-4">
      <div>
        <input type="email" name="lgemail" id="lgemail" value="" class="form-control" onkeyup="validateinputthis()" placeholder="Email Address" required>
      </div>
    </div>
    <div class="col-xs-4">
      <div>
        <input type="password" name="lgpassword" value="" id="lgpassword" class="form-control" onkeyup="validateinputthis()" placeholder="Password" required>
      </div>
    </div>
      <div class="col-xs-2">
        <button type="button" id="loginbtn" class="btn  form-control" onclick="login1();" style="background-color: #04AA6D;" disabled="true">Login</button> 
      </div><br>      
  </form>
   <small id="showerror" style="color: red; float:left;"></small>
</div>
<!-- Container (monitoring Section) -->
<div id="monitoring" class="container-fluid">
    <div class="text-center">
    <h2>Our Monitoring System </h2>
    <h4>Our monitoring system allows us to monitor the status of each system hosted in our data center in realtime</h4>
  </div>
  <div class="row">
              <table id="customers" class="col-xs-12">
              <tr>
                <th onclick="sortTable(0)" class="tooltipx">Id<span class="tooltiptext">Click Here To Sort</span></th>
                <th onclick="sortTable(1)" class="tooltipx">domain_name<span class="tooltiptext">Click Here To Sort</span></th>
                <th onclick="sortTable(2)" class="tooltipx">up_down_status<span class="tooltiptext">Click Here To Sort</span></th>
                <th onclick="sortTable(3)" class="tooltipx">local_ip_ping_status<span class="tooltiptext">Click Here To Sort</span></th>
                <th onclick="sortTable(4)" class="tooltipx">domain_ns_lookup_status<span class="tooltiptext">Click Here To Sort</span></th>
                <th class="excludeExport">remark</th>
              </tr>
            </table>
            <div id="loader">></div>
  </div>
</div>
<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Web Hosting</h2><br>
      <h4>We provide hosting for web application and other systems</h4><br>
      <p></p>
      <br><button class="btn btn-default btn-lg"><a href="#contact">Contact</a></button>
    </div>
    <div class="col-sm-4">
       <img src="/image/hosting.png" alt="NDLE" style = "border-radius: 5%;">
    </div>
  </div>
</div>

<div id="storage" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-3">
      <img src="/image/backup.jpg" alt="NDLE" style = "border-radius: 5%;">
    </div>
    <div class="col-sm-3">
      <h2>Backup Servers</h2><br>
      <div class="col-sm-12">
      <span class="logo-small"></span>
      <p> We provide ulimited storage for backup and application servers</p>
    </div>
    </div>
    <div class="col-sm-3">
      <h2>Cloud Servers</h2><br>
      <div class="col-sm-12">
      <span class="logo-small"></span>
      <p> We provide cloud server</p>
    </div>
    </div>
    <div class="col-sm-3">
      <img src="/image/cloud.jpg" alt="NDLE" style = "border-radius: 5%;">
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="hpc" class="container-fluid text-center">
  <h2>High Performance Computing</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="logo-small"><img src="/image/storageserver.jpg" alt="NDLE" style="width: 100px;"></span>
      <h4>UNLIMITED Storage</h4>
      <p>Our HPC provides ulimited storage</p>
    </div>
    <div class="col-sm-4">
     <span class="logo-small"><img src="/image/connectivity.jpg" alt="NDLE" style="width: 100px;"></span>
      <h4>UNLIMITED Bandwidth</h4>
      <p>Our hpc has the maximuim networking connectivity which enabiles high data transfer.</p>
    </div>
    <div class="col-sm-4">
      <span class="logo-small"><img src="/image/memory.jpg" alt="NDLE" style="width: 100px;"></span>
      <h4>UNLIMITED Memory</h4>
      <p>Our HPC provides you the memory capacity you want to process your data with the maximuim speed</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
     <span class="logo-small"><img src="/image/cpu.jpg" alt="NDLE" style="width: 100px;"></span>
      <h4>Unlimited CPU</h4>
      <p>Our HPC enablies you to process data and perform complex calculations at high speeds</p>
    </div>
    <div class="col-sm-4">
     <span class="logo-small"><img src="/image/ha.jpg" alt="NDLE" style="width: 100px;"></span>
      <h4>24/7 High availability</h4>
      <p>We provide you high availibilit for each services you host in our HPC.</p>
    </div>
    <div class="col-sm-4">
     <span class="logo-small"><img src="/image/security.jpg" alt="NDLE" style="width: 100px;"></span>
      <h4 style="color:#303030;">Security</h4>
      <p>Our security team makes sure your system is secured.</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="network" class="container-fluid text-center bg-grey">
  <h2>Colocation</h2><br>
  <h4>We provide colocation for your physical servers</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="/image/generator.jpg" alt="NDLE" style = "border-radius: 5%;">
        <p><strong>We have three phase power generator which enables us continue our services</strong></p>
        <p>Yes, We keep our services 24/7</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
       <img src="/image/ups.jpg" alt="NDLE" style = "border-radius: 5%;">
        <p><strong>Our datacenter insures you that your system is up regardeless of power interuption from the main supply</strong></p>
        <p>Yes, assured you no power intruption </p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail"><br><br><br>
       <img src="/image/ac.jpg" alt="NDLE" style = "border-radius: 5%; margin-left: 5px; margin-right:-5px;"><br><br><br>
        <p><strong>Equipied with latest technology cooling system</strong></p>
        <p>Yes, We keept our datacenter reliable </p>
      </div>
    </div>
  </div><br>
</div>

<!-- Container (Pricing Section) -->
<div id="email" class="container-fluid">
  <div class="text-center">
    <h2>Create your organization email now</h2>
    <h4>We provide you unlimited email for your orgnization employes</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3>Ethiopian Govenment Email Service</h3>
        </div>
        <div class="panel-body">
          <p><strong>The Ethiopian Government Email Services (https://mail.gov.et) is the official email services for senior officers in the Government as a means of improving information flows and communication among Ministries and Departments, and with the Public.</strong></p>
          
        </div>
        <div class="panel-footer">
          <h6></h6>
          <button class="btn btn-lg">NDC</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3>What NDC provides for EGES</h3>
        </div>
        <div class="panel-body">
          <p><strong>
            NDC consisted in setting up an infrastructure for providing email services to Government employees, so as to improve communication between Ministries, Government Departments and the public. The email system is web-based and therefore can be accessed from any computer connected to the internet.

            </strong></p>
        </div>
        <div class="panel-footer">
          <h6></h6>
          <button class="btn btn-lg">NDC</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3>How to create Gov-Email</h3>
        </div>
        <div class="panel-body">
          <p><strong>Application form can be found by contacting mint dataceter staffs. <br>Emails are created within three working days after reception of duly filled in forms. <br>Password are reset within two working days after reception of duly filled in forms.<br><br></strong></p>
        <p><strong> <a href=""></a></strong></p>
        </div>
        <div class="panel-footer">
          <h6></h6>
          <button class="btn btn-lg">NDC</button>
        </div>
      </div>      
    </div>    
  </div>
</div>
<!-- upload -->
  
  <div id="myCarousel" class="container-fluid bg-grey" data-ride="carousel">
    <h2>Who are our customers</h2>
    <!-- Indicators -->

  </div>
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Addis Ababa, Ethiopia</p>
      <!-- <p><span class="glyphicon glyphicon-phone"></span> +251920763947</p> -->
      <p><span class="glyphicon glyphicon-envelope"></span> ndc.duty@mint.gov.et</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Add Google Maps -->
<!-- <div id="googleMap" style="height:400px;width:100%;"></div> -->
        <!-- <script>
        function myMap() {
                    var myCenter = new google.maps.LatLng(41.878114, -87.629798);
                    var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
                    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                    var marker = new google.maps.Marker({position:myCenter});
                    marker.setMap(map);
        }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script> -->
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Powerd By <a href="https://www.ndc.mint.gov.et" title="STICKB">NDC, Ministry of Innovation and Technology</a></p>
</footer>
</body>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})

$(document).ready(
      function checksystems0(){     

          var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                        /* the route pointing to the post function */
                        url:"{{url('ourcustmers')}}",
                        type: 'POST',
                        data: {_token: CSRF_TOKEN},
                        dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {
                      for(var i=1; i<=data.cow; i++){
                        if (data.name[i] == '') {
                          continue;
                        }else{
                          $("#myCarousel").append("<center><div class='col-xs-2'><img src='/image/"+data.name[i]+".jpg'  alt='ndc' style = 'border-radius: 10%;' width='50' height='50' float:left;><br><h3>"+data.name[i]+"</h3></div></center>");
                        }
                        }
                     
                    },
                    error: function (xhr, status, error) {
                        alert(xhr.responseText);
                    },
                    complete: function(){
                                        
                                      },
                  });
              }
  );

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
                        // alert("123");
                      document.getElementById("liveall").style.background = "green";
                      document.getElementById("liveallmessage").innerHTML="";
                       for(var i=1; i<=data.cow; i++){
                        document.getElementById("loader").style.display = "none";
                          $("#customers").append("<tr id='systemdatatr'></tr>");
                          document.getElementById("systemdatatr").id = i +"systemdatatr"; 
                          $('#'+ i +"systemdatatr").append("<td>"+i+"</td>");
                          $('#'+ i +"systemdatatr").append("<td id = 'td_domain_name' onclick='NewTab(this.id)'>"+data.domain_name[i]+"</td>");
                           $('#'+ i +"systemdatatr").append("<td id = 'td_up_down_status'></td>");
                          $('#'+ i +"systemdatatr").append("<td id = 'td_local_ip_ping_status'>"+data.local_ip_ping_status[i]+"</td>");
                          $('#'+ i +"systemdatatr").append("<td id = 'td_domain_ns_lookup_status'>"+data.domain_ns_lookup_status[i]+"</td>");
                          $('#'+ i +"systemdatatr").append("<td>"+data.remark+"</td>");

                          document.getElementById("td_domain_name").id = data.domain_name[i];

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
           }

           );//end of document ready


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
  function login1(){
    
                          var formData = new FormData();
                          var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                          formData.append('_token', '{{csrf_token()}}');
                          formData.append('lgemail', $("#lgemail").val());
                          formData.append('lgpassword', $("#lgpassword").val());
                          formData.append('option', '1');
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
                     window.open(data.url, "_self");
                   }else{
                    // alert("no"); 
                    document.getElementById("showerror").innerHTML  =  "Your username or password is not correct";

                   }
                    },
                    error: function (xhr, status, error) {
                        alert(xhr.responseText);
                    },
                   
                   });
  }
     function validateinputthis() {
      // body...
      if(($("#lgemail").val() != "") && ($("#lgpassword").val() != "")){
        document.getElementById("loginbtn").disabled = false;
      }else{
        document.getElementById("loginbtn").disabled = true;
      }
    }

  function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("customers");
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
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>

//
</html>
