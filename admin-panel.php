<!DOCTYPE html>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "loginsystem";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `Trainer`";

// for method 1

$result1 = mysqli_query($connect, $query);



?>
<html>
  <head>
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
      margin: 0;
      padding: 0;
    }
    .list-group a:hover{
      background: grey;
    }
    .reg{
      /* background: #0ea5e9;
      border-radius: 3rem;
      color: white;
      border: none;
      padding: 10px;
      cursor: pointer; */
      position: relative;
    display: inline-block;
    padding: 14px 19px;
    margin: 40px 0;
    color: white;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.5s;
    letter-spacing: 4px;
    overflow: hidden;
    margin-right: 50px;
    background: #FF6A3D;
    border:none;
    border-radius: 3rem;
    cursor: pointer;
      
    }
    .reg:hover{
      /* box-shadow: 0px 0px 20px 20px #0ea5e9;
      /* background: yellow; */
      /* transition: 0.1s ease-in; */ */
      background: #FF6A3D;
    color: #050801;
    box-shadow: 0 0 5px #FF6A3D,
                0 0 20px #FF6A3D,
                0 0 40px #FF6A3D,
                0 0 180px #FF6A3D;
     -webkit-box-reflect:below 1px linear-gradient(transparent, #0005);
    }
    .logout{
      border-radius: 3rem;
      background-color:#FF6A3D;
      color:white;
      padding: 10px;
      margin: 10px 10px;
    }
    .logout:hover{
      text-decoration: none;
    }
    .form-control{
        background: #ffffff63;;
color: white;
    }
    .form-control:focus{
        background:#ffffff63;;
color: white;
    }
  </style>
  <body>
      
   
       
 <!-- <div class="jumbotron">
  <img src="images/lift.jpeg">
 </div> -->
   <div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="" class="list-group-item active" id="test" style="background: #ff6a3dcc; color:black;border:none; font-weight: bolder; font-size:20px;">Explore:</a>
                <a href="trainer_details.php" class="list-group-item" style="background: #ff6a3dcc; color:white;border:none;">Members</a>
                <a href="package.php" class="list-group-item" style="background: #ff6a3dcc; color:white;border:none;">Packages</a>
                <a href="payment.php" class="list-group-item" style="background: #ff6a3dcc; color:white;border:none;">Payments</a>
            </div>
            <hr>
            <div class="list-group">
              <a href="trainer.php" class="list-group-item active" style="background: #FF6A3D; color:white;border:none;">Trainer</a>
              <a href="paymentlog.php" class="list-group-item active" style="background: #FF6A3D; color:white;border:none;">Payment log</a>             
              <a href="trainer.php" class="list-group-item active" style="background: #FF6A3D; color:white; border:none;">Add new Trainer</a>
            </div>      
            
        </div>
            <div class="col-md-8">
            <div class="card" style="border: none; border-radius:2rem;background-color: #c2511987;">
                
     <div class="card-body" style="background: #ffffffdb;border-radius: 2rem;color: #FF6A3D;">
                <h3 style="font-weight:bolder;">Sign up to be a member today</h3>
                </div> 
                <div class="card-body" style="padding: 0px;"></div>
                <form class="form-group" action="func.php" method="post" style="padding:15px;">
                <label style="color:white;">First Name:</label>
<input type="text" name="fname" class="form-control"><br>
                    <label style="color:white;">Last Name:</label>
<input type="text" name="lname" class="form-control"><br> 
 <label style="color:white;">Email</label>
                    <input type="text" name="email" class="form-control"><br>
                    <label style="color:white;">Member ID</label>
<input type="text" name="contact" class="form-control"><br>        
 <label style="color:white;">Choose your Trainer </label> 
 <select class="form-control" name="docapp">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
        <br>
                                        
  <input type="submit" class="reg" name="pat_submit" value="Become a Member!">
  <a href="func.php"></a>

  <p style="color:white;">After your membership is activated, kindly head to packages page to choose a package of your choice and afterwards to the payment page to pay whenever you're ready!</p>
                    
                    
                </form>
                </div>
      </div>
       </div>
      <div class="col-md-1"></div>
      </div>
    <header>
 <nav>
     <div class="main-wrapper">
	      
		       <div class="nav-login">
			       <?php
				        if (isset($_SESSION['u_id'])) {
						  echo '<form action="includes/index.php" method="POST">
					            <button type="submit" name="submit">logout</button>
					              </form>';	
                                 } else{
							
							echo '<form action="includes/index.php" method="POST">
                              
                               						
				                </form>
				              <a href="index.php" class="logout">Logout</a>';
							
						}
				   
				    ?>
					
				
		       </div>
	 </div>
 </nav>

</header>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

     </body>
    
</html>
   