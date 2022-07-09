<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Packages</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Prata&display=swap');
    *{
      font-family: 'Prata', serif;
      padding: 10px;
    }
    body{
        background-image:url("images/gymbg.jpg");
    }
    .backbutton{
        background: white;
        color: black;
        border-radius: 2rem;
        font-weight: bold;
        position: relative;
        top: 15px;
    }
    .backbutton:hover{
        text-decoration: none;
        background: black;
        color: white;
        transition: 0.4s ease-in out;
    }
</style>
<body>
<!-- <div class="jumbotron" style="background: url('images/2.jpg') no-repeat;background-size: cover;height: 300px;"></div>	 -->

 <div class="container">
<!-- <div class="card"> -->
     <div class="card-body" style="background-color:#c2511987;color:white;border-radius: 2rem;">
         <div class="row">
             <div class="col-md-1">
    <a href="admin-panel.php" class="backbutton">&larr;</a>
             </div>
             <h1>Currently Available Packages</h1>
             <div class="col-md-8">
         <form class="form-group" action="patient_search.php" method="post">
          <div class="row">
              
                 </form></div></div></div>
     <div class="card-body" style="background-color:#c2511900;color:white; position: relative;
    top: -91px;">
         <div class="card-body">
    <table class="table table-hover" style="font-size: 24px;">
        <thead>
     <tr>
            <th style="color:black;">Package ID </th>
            <th style="color:black;">Package Name</th>
         <th style="color:black;">Cost</th>
         
        </tr>   
        </thead>
        <tbody>
          <?php get_package(); ?>
        </tbody>
    </table>
    
     </div>
    <!-- </div> -->
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>