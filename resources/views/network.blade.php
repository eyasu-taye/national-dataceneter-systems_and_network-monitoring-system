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




<!-- Container (monitoring Section) -->
<div id="monitoring" class="container-fluid">
    <div class="text-center">
    <h2>Our Monitoring System </h2>
    <h4>Our monitoring system allows us to monitor the status of each system hosted in our data center in realtime</h4>
  </div>
  <div class="row">
              <table id="customers" class="col-xs-12">
              <tr>
                <th onclick="sortTable(0)" class="tooltipx">ID: <span class="tooltiptext">Click Here To Sort</span></th>
                <th onclick="sortTable(0)" class="tooltipx">PreCodition: <span class="tooltiptext">Click Here To Sort</span></th>
                <th onclick="sortTable(0)" class="tooltipx">Service Name: <span class="tooltiptext">Click Here To Sort</span></th>
                <th onclick="sortTable(1)" class="tooltipx">Check Point: <span class="tooltiptext">Click Here To Sort</span></th>
                <th onclick="sortTable(2)" class="tooltipx">Description: <span class="tooltiptext">Click Here To Sort</span></th>
                <th onclick="sortTable(3)" class="tooltipx">Replay Status: <span class="tooltiptext">Click Here To Sort</span></th>
                <th class="excludeExport">Remark: </th>
              </tr>
            </table>
            <div id="loader">></div>
  </div>
</div>
<!-- Container (About Section) -->

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
                        $("#customers").append("<tr id='systemdatatr'></tr>");
                        document.getElementById("systemdatatr").id = i +"systemdatatr"; 
                       
                          $('#'+ i +"systemdatatr").append("<td>"+i+"</td>");
                          $('#'+ i +"systemdatatr").append("<td id = 'Pre_Codition' onclick='NewTab(this.id)'>"+data.Pre_Codition[i]+"</td>");
                          $('#'+ i +"systemdatatr").append("<td id = 'Service_Name'>"+data.Service_Name[i]+"</td>");
                          $('#'+ i +"systemdatatr").append("<td id = 'Check_Point_IP'>"+data.Check_Point_IP[i]+"</td>");
                          $('#'+ i +"systemdatatr").append("<td id = 'Description'>"+data.Description[i]+"</td>");
                          $('#'+ i +"systemdatatr").append("<td id = 'Replay_Status'>"+data.Replay_Status[i]+"</td>");
                          $('#'+ i +"systemdatatr").append("<td>"+"remark"+"</td>");
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
</script>
</body>
</html>
