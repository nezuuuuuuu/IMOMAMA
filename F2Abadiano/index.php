

<?php 
  include 'connect.php';
?>
<?php	
	if(isset($_POST['btnLogin'])){
		$uname=$_POST['login-user'];
		$pwd=$_POST['login-txtpassword'];
		//check tbluseraccount if username is existing
		$sql ="Select * from tbluseraccount where username='".$uname."'";
		
		$result = mysqli_query($connection,$sql);	
		
		$count = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result);
		
		if($count== 0){
			echo "<script language='javascript'>
						alert('username not existing.');
				  </script>";
		}else if($row[3] != $pwd) {
			echo "<script language='javascript'>
						alert('Incorrect password');
				  </script>";
		}else{
			$_SESSION['username']=$row[0];
			// header('location: dashboard.php');
      $rows=mysqli_fetch_assoc($result);
      header("Location: dashboard.php?data=" . $row['acctid']);
    
      exit();
		}
			
		
	}
		

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css\styles.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost&family=Red+Hat+Display&family=Wix+Madefor+Display&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Jost&family=Red+Hat+Display&family=Wix+Madefor+Display:wght@600&display=swap" rel="stylesheet">


    <title>TEKNOPIDU</title>

    <script src="js/script.js"></script>
  </head>

  
  <body style="   background-image: url('images/backgroundfinal.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-color: white;
    max-width: 100%;
    min-width: 65%;
    overflow-x: hidden;">

    <!-- THIS IS FOR NAVIGATION BAR ONLY -->
    <div class="navigations">
      <nav>

        <a href="index.php" class="logo" id="logo">
          <img src="images/cit.png" alt="cit_logo">
          <h2>TEKNO<span>PIDU</span></h2>
        </a>

          <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="about_us.html">About Us</a></li>
            <li><a href="#contacts">Contact Us</a></li>
          </ul>
  
          <div class="all-btn">
            <div class="btn" id="reg_btn" onclick="Register()" >Register</div>
            <div class="btn" id="login_btn" onclick="Login()">Login</div>
          </div>
      </nav>
    </div>


    <div class="landing_page">
      <div class="header">
        <h1>CIT LOVES AGAIN!</h1>
        <p>Feeling Lonely? Spark a connection with someone special
          here in CIT-U!!
        </p>
      </div>
      <!-- <h1>CIT LOVES <br><span> AGAIN!</span></h1> -->
      <!-- <div class="header_details">
        <p>Feeling Lonely? Spark a connection with someone special
          here in CIT-U!!
        </p>
      </div> -->
    </div>




    <div class="login_pop" id="login_pop">

      <form action="index.php" method="post" class="center" id="login">
        <h1>Log In</h1>

        <div class="emailfield">
          <h3></h3>
          
          <p>Need an account? <a href="http://">Sign up</a></p>
        </div>
        <div class="toflex">
                <img src="images/user.png" id="logos"alt="">
                <input type="text" name="login-user" placeholder="username">

          </div>

      
          <div class="toflex">
                <img src="images/padlock.png" id="logos"alt="">
                <input type="password" name="login-txtpassword" placeholder="Email">

          </div>

       
        <input type="submit" name=btnLogin id="submit" value="Login" >
       
      </form>
    </div>



    <div class="register-pop" id="register-pop" >
      <div class="center">
     
        <form class="register-form" method="post" >
       
           
               <h1>Signup</h1>
           
           
    
              <!-- <label for="#email">Email</label><br> -->
           
            
              <!-- <label for="txtgender">Gender</label> -->
             
          
              <!-- <label for="#firstname">first name</label><br> -->
              <input type="text" id="firstname" placeholder="firstname" name="txtfirstname"><br>
              
              <!-- <label for="#lastname">last name</label><br> -->
              <input type="text" id="lastname"  placeholder="lastname" name="txtlastname"><br>
              <div class="toflex">
                <!-- <img src="images/mail.png" id="logos"alt=""> -->
                <input type="email" id="email" name="txtemail" placeholder="email"><br>

          </div>
          <div class="toflex">
                <img src="images/woman.png" id="gender"alt="">
                <select id="txtgender" name="txtgender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select><br>
          </div>
              <!-- <label for="#username">Username</label><br> -->
              <input type="text" id="username"  placeholder="username" name="txtusername"><br>
       
              <!-- <label for="#password">Password</label><br> -->
              <input type="password" id="password"  placeholder="password" name="txtpassword"><br>

              <!-- <label for="#checkPassword">Confirm password</label><br> -->
              <input type="password" id="checkPassword"  placeholder="confirm password" name="checkPassword"><br>
 
              <input type="submit" name=btnRegister id="submit" value="Register" >
 
           
     
</form>
       
      </div>
    </div>




    <footer>
      <!-- <div class="cit_logo_footer"> -->
        <img id="citlogo" src="images/logocit-1.png" alt="citfooter">
      <!-- </div> -->

      <div class="box1" id="contacts">
        <h1>Contact Us</h1>

        <p>Carreon, John Loi D.</p>
        <ul>
          <li>155-6 Sanciangko St., Cebu City</li>
          <li>0969-533-1788</li>
        </ul>

        <p>Abadiano, Jan Edward V.</p>
        <ul>
          <li>Banilad, Cebu City</li>
          <li>09numbersninico</li>
        </ul>
      </div>


      <div class="box2">
        <h1>Get in Touch</h1>
        <div class="icons">
          <a href="https://www.facebook.com/apollo.raval" target="_blank"><img src="images/fb.png" ></a>
          <a href="http://www.instagram.com" target="_blank"><img src="images/ig.png"></a>
          <a href="linkedin.com" target="_blank"><img src="images/linkedin.png"></a>
          <a href="http://"><img src="images/twitter.png"></a>
        </div>
        
        
        <div class="search">
          <input type="text" placeholder="Search">

          <div id="search_background">
            <img src="images/search.png" alt="">
          </div>
        </div>
        
      </div>




    </footer>

  </body>
</html>





<?php	
    if(isset($_POST['btnRegister'])){		
        //retrieve data from form and save the value to a variable
        //for tbluserprofile
        $fname = $_POST['txtfirstname'];		
        $lname = $_POST['txtlastname'];
        $gender = $_POST['txtgender'];
        
        //for tbluseraccount
        $email = $_POST['txtemail'];		
        $uname = $_POST['txtusername'];
        $pword = $_POST['txtpassword'];
        $sql2 = "SELECT * FROM tbluseraccount WHERE username='$uname'";
        $result = mysqli_query($connection, $sql2);
        $row = mysqli_num_rows($result);
        if($row == 0){
        
        //save data to tbluserprofile			
        $sql1 = "INSERT INTO tbluserprofile (firstname, lastname, gender) VALUES ('$fname', '$lname', '$gender')";
        mysqli_query($connection, $sql1);
        
        //Check tbluseraccount if username is already existing. Save info if false. Prompt msg if true.
       
            // $last_insert_id = mysqli_insert_id($connection);
            $sql = "INSERT INTO tbluseraccount (emailadd, username, password,usertype) VALUES ('$email', '$uname', '$pword','matcher')";
            mysqli_query($connection, $sql);
            
            // echo "<script language='javascript'>
            //             alert('New record saved.');
            //       </script>";
           
            // header("location: index.php?data='.$rows['acctid'].'");
        } else {
            echo "<script language='javascript'>
                        alert('Username already existing');
                  </script>";
        }    
    }
?>  



        


