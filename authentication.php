<?php

        // $dbhost = "localhost";
        // $dbuser = "root";
        // $dbpass = "";
        // $dbname = "dancedb";


        // if(!$auth = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
    
        // {
        //         die("Failed to connect!");
        // }


        $errorCount = 0;


            $firstname= $_POST['firstname'] != "" ? $_POST['firstname'] : $errorCount++;
            $lastname= $_POST['lastname'] != "" ? $_POST['lastname'] : $errorCount++;
            $email= $_POST['email'] != "" ? $_POST['email'] : $errorCount++;
            $password= $_POST['password'] != "" ? $_POST['password'] : $errorCount++;
            $confirmpassword= $_POST['confirmpassword'] != "" ? $_POST['confirmpassword'] : $errorCount++;
            $gender= $_POST['gender'] != "" ? $_POST['gender'] : $errorCount++;
            $genre= $_POST['genre'] != "" ? $_POST['genre'] : $errorCount++;


            
                    if($errorCount > 0) {

                        header("Location: register.php?message=Error, please verify input.");
                    }
                    else {
                        echo "Success!";
                    }


                    

// function check_login($auth)

// {
//         //check if session value exists
//     if(isset($_SESSION['email']))
//     {

//         //if it exists, check if it's real
//         $id = $_SESSION['email'];
//         $query = "select * from users where email = '$id' limit 1";

//             $result = mysqli_query($auth, $query);
        
//                 if($result && mysqli_num_rows($result) > 0)
//                     {
//                         //if it's real, return user data
//                         $user_data = mysqli_fetch_assoc($result);
//                         return $user_data;
//                     }
//     }

//         //if not, redirect to login
//         header("location: login.php");

//         //end session
//         die;
// }




// function random_num($length) {

//     $text = "";
//     if($length <5)
//     {
//             $length = 5;
//     }

//     $len = rand(4,$length);

//     for ($i=0; $i < $len; $i++)
//     {
//         $text .= rand(0,9);
//     }

//     return $text;
// }

            
?>           