<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Payment Log</title>
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
    .paybutton{
        background: red;
        color: white;
        border-radius: 2rem;
        border:none;
        cursor: pointer;
    }
    .paybutton:hover{
        background: #f5ce36;
        transition: 0.5s ease-in-out;
        box-shadow: 5px 5px 15px #93933c;
        color: black;
    }
    .form-control{
        background: #ffffff63;
color: white;
    }
    .form-control:focus{
        background:#ffffff63;
color: white;
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
              <h1 style="position: relative;bottom: -7px;">Payment Log</h1>
             <div class="col-md-8">
         <form class="form-group" action="patient_search.php" method="post" >
          <div class="row">
              
                 </form></div></div></div>
     <div class="card-body" style="background-color:#c2511900;color:white;">
         <div class="card-body" style="position: relative;bottom: 40px;">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>Payment ID </th>
            <th>Amount</th>
            <th>Payment Type</th>
            <th>Customer ID</th>
            <!-- <th>Customer Name</th> -->
         
        </tr>   
        </thead>
        
         <tbody>
          <?php get_payment(); ?>
        </tbody>
    </table> 
    <!-- <div class="card-body" style="position: relative;bottom: 139px;"> -->
               
                <!-- </div>  -->
                <!-- <div class="card-body"></div>
                <form class="form-group" action="func.php" method="post" style="position: relative;bottom: 154px;">
                <label>Payment ID</label>
<input type="text" name="Payment_id" class="form-control"><br>
 
                    <label>Amount</label>
                    <input type="text" name="Amount" class="form-control"><br>
                    <label>Customer ID</label>
                    <input type="text" name="customer_id" class="form-control"><br>
                    <label>Customer Name</label>
                    <input type="text" name="customer_name" class="form-control"><br>
                    <label>Payment Type</label>
                    
<input type="text" name="payment_type" class="form-control"><br> 
<input type="submit" class="paybutton" name="pay_submit" value="Go to Payment options &rarr;">
<a href="func.php"></a>
     </div>
     </div> -->
    <!-- </div> -->
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>