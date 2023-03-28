<?php

if (isset($_POST['userSave'])){
    if (isset($_POST['userName']) && isset($_POST['userAge']) && isset($_POST['userEmail']) && isset($_POST['userPhone']) && isset($_POST['userGender']) && isset($_POST['userPosition'])){
        if (empty($_POST['userName'])){
            header("Location:../addUser.php?error=User name is empty!!!");
            exit();
        }elseif(empty($_POST['userAge'])){
            header("Location:../addUser.php?error=Age is empty!!!");
            exit();
        }elseif(empty($_POST['userEmail'])){
            header("Location:../addUser.php?error=Email is empty!!!");
            exit();
        }elseif(empty($_POST['userPhone'])){
            header("Location:../addUser.php?error=Phone is empty!!!");
            exit();
        }elseif(empty($_POST['userGender'])){
            header("Location:../addUser.php?error=Gender is empty!!!");
            exit();
        }elseif(empty($_POST['userPosition'])){
            header("Location:../addUser.php?error=Position is empty!!!");
            exit();
        }else{
            


            include '../inc/connection.php';


            $userName= mysqli_real_escape_string($con,$_POST['userName']);
            $userAge= mysqli_real_escape_string($con,$_POST['userAge']);
            $userEmail= mysqli_real_escape_string($con,$_POST['userEmail']);
            $userPhone= mysqli_real_escape_string($con,$_POST['userPhone']);
            $userGender= mysqli_real_escape_string($con,$_POST['userGender']);
            $userPosition= mysqli_real_escape_string($con,$_POST['userPosition']);
            

            $sql = "SELECT * FROM users WHERE name = '$userName'";
            $result = mysqli_query($con, $sql);

            if(mysqli_num_rows($result)>0){
                header("Location:../addUser.php?error=User already exists!!!");
                exit();
            }else{

                $sql1 = "INSERT INTO users(name, age, email, phone, gender, position) VALUES ('$userName','$userAge','$userEmail','$userPhone','$userGender','$userPosition')";
                $result1 = mysqli_query($con, $sql1);

                if($result1){
                    header("Location:../index.php?succ=User is created");
                    exit();
                }else{
                    echo 'Data is incorrect';
                }
    
            }



        }

    }else{
        header("Location:../addUser.php?aaaaa");
        exit();
    }


}else{
    header("Location:../addUser.php?blablabla");
    exit();
}