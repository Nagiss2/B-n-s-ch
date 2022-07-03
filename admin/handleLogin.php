<?php
    session_start();
    include '..\DBConnect.php';	

    // if(isset($_SESSION['username'])){
    //     header('location:index.php');
    // }

    if(isset($_POST['loginAdmin']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!$username || !$password) {
            header('Location: ../admin/login.php?error=txbRong');
        }

        $password=md5($password);

        $sql="SELECT * FROM user WHERE Email='$username'";
        $result = LoadData($sql);

        if(count($result) > 0){          
                if($result[0]['Password'] == $password){
                    $_SESSION["username"]= $username;
                    $_SESSION["display_name"] = $result[0]['Last_Name'];
                    $_SESSION["email"] = $result[0]['Email'];
                    $_SESSION["role"] = $result[0]['User_Role'];
                    if($_SESSION["role"] == 1){
                        header('Location:index.php');                
                    }
                    else if($_SESSION["role"] == 0){
                        header('Location:../admin/login.php?error=ChuaTonTai');
                    }
                }
                else{
                    header('Location:../admin/login.php?error=SaiMatKhau');        
                }                 
        }
        else{         
            header('Location:login.php?error=ChuaTonTai');
        }
    }
?>