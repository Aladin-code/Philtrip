<?php 
// session_start();
// include 'connection.php';

// class User {
//     private $username;
//     private $password;
    
//     public function __construct($username, $password) {
//         $this->username = $username;
//         $this->password = $password;
//     }
    
//     public function getUsername() {
//         return $this->username;
//     }
    
//     public function getPassword() {
//         return $this->password;
//     }
// }

// class Login {
//     private $connection;
    
//     public function __construct($connection) {
//         $this->connection = $connection;
//     }
    
//     public function authenticate($user) {
//         $username = $user->getUsername();
//         $password = md5($user->getPassword()); // hash the user input password
        
//         $query = "SELECT * FROM login_tbl WHERE username = '$username' AND password = '$password'";
//         $result = $this->connection->query($query);
        
//         if ($result->num_rows == 1) {
//             // authentication successful, start session and redirect to index.php
//             $_SESSION['username'] = $username;
//             header("Location:index.php");
//             exit();
//         } else {
//             // authentication failed, display error message
//             echo "<script>alert('Incorrect username or password');</script>";
//             echo "<script type='text/javascript'>location.href='login.php' </script>";
//         }
//     }
// }



// if(isset($_POST['submit'])){
//     $user = new User($_POST['username'], $_POST['password']);
//     $login = new Login($connection);
//     $login->authenticate($user);
// }
?>

<?php
    session_start();
    include 'connection.php';
        if(isset($_POST['submit'])){
            
            $username = $_POST['username'];
            $password = $_POST['password'];

            $temp_pass = password_hash($password, PASSWORD_DEFAULT);
            echo $temp_pass;

            $query = "SELECT * from login_tbl";
            $result = $connection->query($query);

    
            while($row = $result->fetch_assoc()){
                // if($temp_pass == $row['password'] ){
                //     $_SESSION['username'] = $username;
                //     $_SESSION['password'] = $password;
                    
                //     if(isset($_SESSION['username'])){
                //         header("Location:index.php");
                //     }                
                // }
                // if($temp_pass != $row['password'] ){ 
                //     echo "<script>alert('Incorrect username or password');</script>";
                //     echo "<script type='text/javascript'>location.href='login.php' </script>";
                // }
        }   
    }
?>