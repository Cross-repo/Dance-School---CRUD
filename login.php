<?php

session_start();

//include("authentication.php");
include("functions.php");

                //to check if user has clicked on submit/post button
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
                //something was posted
                //collect data from post variable
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                //check if values are empty
                if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password))
                {

                        //read from db
                        $query = "select * from users where email = '$email' limit 1";

                        $result = mysqli_query($auth, $query);

                        if($result)
                        {

                            if($result && mysqli_num_rows($result) > 0)
                            {
                                //if it's real, return user data
                                $user_data = mysqli_fetch_assoc($result);
                                
                                if($user_data['password'] === $password)
                                        {

                                            $_SESSION['email'] = $user_data['email'];
                                            header("Location: login.php");
                                            die;
                                        }
                            }
                        }
                        
                        echo "Please enter valid details.";
                        }
                        
                        else {
                                echo "Please enter valid details.";
                        }

        }
?>







<?php
    include_once('lib/header.php');
?>

        <h1> LOG IN HERE </h1>

        <p> ALL FIELDS REQUIRED </p> <hr/>

<form action="functions.php" method="POST">

                <p>
                <label>Email</label> <br/>
                <input type="text" name="email" placeholder="Please input your email" required/>
                </p>

                <p>
                <label>Password</label> <br/>
                <input type="text" name="password" placeholder="Please input your password" required/>
                </p>

            <p>
            <button type="submit"> LOG IN </button>
            </p>
</form> <hr/>

<?php   
    include_once('lib/footer.php');
?>