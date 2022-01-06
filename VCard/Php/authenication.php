<?php
    session_start();
  
    include('connection.php');    
    $username = $_POST['username'];  
    $password = $_POST['password']; 

    $error = "username or password is incorrect"; 
       
        // $username = stripcslashes($username);  
        // $password = stripcslashes($password);  
        // $username = mysqli_real_escape_string($con, $username);  
        // $password = mysqli_real_escape_string($con, $password); 
        
      
        $sql = "SELECT * from users where email = '$username' ";  
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);  
          
        
        
    if($count){    
        
    $row = mysqli_fetch_assoc($result);
    $match = password_verify($password,$row['password']);
    if($match){  
            echo "<h1><center> Login successful </center></h1>"; 
            $_SESSION['username'] = $username;
            $sql = "UPDATE users SET last_login_date = ".date('d-m-y h:i:s')." WHERE username = ".$row['user_id'];
            echo $sql;
            $result = mysqli_query($con, $sql);
            // header("location: ../success.html");
    }else{  
            echo "<h1> Login failed. Invalid username or password.</h1>"; 
            $_SESSION['error'] = $error;       
            header("location: ../auth_login_boxed.php");
        }
    }else
    {
        echo 'failed';
    }
?>  