<?php 
include("include/config.php");

if(isset($_POST['email']) && !empty($_POST['email']))
{
    if(isset($_POST['pass']) && !empty($_POST['pass']))
    {
        $emailname = $_POST['email'];  
        $password = $_POST['pass'];  

        // To prevent SQL injection
        $emailname = addslashes($emailname); 
        $password = addslashes($password);  

        // Hash the password provided by the user
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
         
        // Fetch the user record from the database
        $result = $qm->getRecord("login", "*", "email = '$emailname'");
      
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            
            // Verify hashed password
            if(password_verify($password, $row['password'])) {
                $_SESSION['admin_info'] = "true";
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username']; 
                $_SESSION['role'] = $row['role'];
                $_SESSION['email'] = $row['email'];
                header("location:dashbord.php"); 
                exit;
            } else {
                $_SESSION['alert_msg'] = "<div class='msg_error'>Please check Password .</div>";
                header("location:index.php");
                exit;
            }
        } else {
            $_SESSION['alert_msg'] = "<div class='msg_error'>Please check email or Password .</div>";
            header("location:index.php");
            exit;
        }  
    }  
}
?>
