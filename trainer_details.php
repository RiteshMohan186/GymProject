<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Members</title>
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
     <div class="card-body" style="background-color:#c2511987;color:#ffffff;border-radius: 2rem;">
         <div class="row">
             <div class="col-md-1">
    <a href="admin-panel.php" class="backbutton">&larr;</a>
             </div>
             <h1 style="position: relative;top: 14px; font-weight:bold;">Members</h1>
             <div class="col-md-8">
         <form class="form-group" action="trainer_search.php" method="post">
          <div class="row">
   <!-- <div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="enter contact"></div> -->
              <!-- <div class="col-md-2"><input type="submit" name="patient_search_submit" class="btn btn-light" value="Search"> </div></div>            -->
                 </form></div></div></div>
     <div class="card-body" style="background-color:#c2511900;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover" style="font-size: 24px; position:relative;top: -33px;
">
        <thead>
     <tr>
            <th style="color:black;">First Name</th>
            <th style="color:black;">Last Name</th>
         <th style="color:black;">Email id</th>
         <th style="color:black;">Member ID</th>
         <th style="color:black;">Trainer ID</th>
        </tr>   
        </thead>
        <tbody>
          <?php get_patient_details(); ?>
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