<?php
include 'connect.php'


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard_styles.css">
</head>
<body>
<?php


$data=$_GET['data'];

?>

    <div class="dashboard">
        <div class="sidebar">
            <div class="profile">
                <div class="profile-img-box">
                    <img src="images/mogged.webp" alt="profilepic">
                </div>
                <?php
                $sql = "SELECT * FROM tbluseraccount WHERE acctid='$data'"; 
                $result = mysqli_query($connection,$sql);  
                if($result){
                    $row=mysqli_fetch_assoc( $result );
                    echo "<h3  class=name>" . $row['username'] . "</h3>
                    <h3  class=desc>". $row['usertype'] . "</h3>";
                }
                ?>
              
               
            </div>

            <div class="sidebar-items">
                <a href="#" class="sidebar-item">
                    <div class="si-img-box">
                        <img src="images/puzzle.png" alt="">
                    </div>
                    <h4 class="si-name active">Matches</h4>
                </a>

                <a href="#" class="sidebar-item">
                    <div class="si-img-box">
                        <img src="images/feedback.png" alt="">
                    </div>
                    <h4 class="si-name">Preferences</h4>
                </a>

                <a href="#" class="sidebar-item">
                    <div class="si-img-box">
                        <img src="images/chat_req.png" alt="">
                    </div>
                    <h4 class="si-name">Chat Request</h4>
                </a>

                <a href="#" class="sidebar-item">
                    <div class="si-img-box">
                    
                       
                    <a href="settings.php?data=<?php echo $data; ?>"><img src="images/setting.png" alt=""></a>

                        
                    </div>
                    <h4 class="si-name">Settings</h4>
                </a>

                <a href="#" class="sidebar-item">
                    <div class="si-img-box">
                        <img src="images/logout.png" alt="">
                    </div>
                    <h4 class="si-name">Logout</h4>
                </a>
            </div>


            <div class="pro">
                <div class="pro-img-box">
                    <img src="images/edit.png" alt="">
                </div>
                <h4 class="pro-text">Edit <br> Preference</h4>
            </div>
        </div>


        <div class="main">
            <div class="header">
                <h1>Date</h1>
                <div class="searchdiv">
                <form class="search-bar" method="post">
                    <input type="text" placeholder="Search..." name="txtSearch">
                    
                    <button name="btnSearch">Search</button>
                </form>
                
               
                    <table class="table">
                        <?php
                        if(isset($_POST['btnSearch'])){
                            $search=$_POST['txtSearch'];
                            // $sql="Select * from 'useraccount' where acctid= '$search' or username= '$search'";
                            $sql="SELECT * FROM tbluseraccount WHERE acctid = '$search' OR username = '$search'";

                            $result=mysqli_query($connection,$sql);
                            if($result){
                            if(mysqli_num_rows($result) >0){
                                while(   $row=mysqli_fetch_assoc($result)){

                            
                                echo '<tbody>
                                <tr>
                                <td><a href="profile.php?data='.$row['acctid'].'">'.$row['username'].'</a></td>
                                <td>'.$row['acctid'].'</td>
                                </tr>
                                </tbody>';
                                }
                            
                               

                        }
                    }else{
                            echo  "No Record Found!";
                        }
                        
                    }
                        

                        ?>
                
              
                    </table>
                </div>

                <div class="profile">
                    <!-- TODO: BUTNGI PROFILE -->
                </div>
            </div>
            <!-- <div class="skill">
                <div class="skill-content">
                    <div class="skill-img-box">
                        <img src="assets/images/read.png" alt="">
                    </div>
                    <div class="skill-detail">
                        <h2 class="skill-title">Reading</h2>
                        <p>211 Days</p>
                        <div class="skill-progress">
                            <div class="progress progress-1"></div>
                        </div>
                    </div>
                </div>
                <h2 class="percent">60%</h2>
            </div>
            <div class="skill">
                <div class="skill-content">
                    <div class="skill-img-box">
                        <img src="assets/images/writing.png" alt="">
                    </div>
                    <div class="skill-detail">
                        <h2 class="skill-title">Writing</h2>
                        <p>114 Days</p>
                        <div class="skill-progress">
                            <div class="progress progress-2"></div>
                        </div>
                    </div>
                </div>
                <h2 class="percent">40%</h2>
            </div>
            <div class="skill">
                <div class="skill-content">
                    <div class="skill-img-box">
                        <img src="assets/images/speaking.png" alt="">
                    </div>
                    <div class="skill-detail">
                        <h2 class="skill-title">Speaking</h2>
                        <p>371 Days</p>
                        <div class="skill-progress">
                            <div class="progress progress-3"></div>
                        </div>
                    </div>
                </div>
                <h2 class="percent">80%</h2>
            </div> -->
        </div>
    </div>

    <div class="circle-1"></div>
    <div class="circle-2"></div>
    <div class="circle-3"></div>
</body>
</html>