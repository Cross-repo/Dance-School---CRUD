<?php
session_start();

//include("authentication.php");
include("config.php");

                //to check if user has clicked on submit/post button
        //if($_SERVER['REQUEST_METHOD'] == "POST")
        if(isset($_POST['submit']))
        {
                //something was posted
                //collect data from post variable
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $gender = $_POST['gender'];


                //check if values are empty
                if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password))
                {

                        //save to db
                        $user_id = random_num(20);
                        $sql = "insert into 'users' ('user_id', 'firstname', 'lastname', 'email', 'password', 'gender') values ('$user_id', '$firstname', '$lastname', '$email', '$password', '$gender')";

                        // mysqli_query($auth, $sql);

                        // header("Location: login.php");
                        // die;
                        // }

                        // else {
                        //         echo "Please enter valid details.";
                        // }

                        
                        $result = $auth->query($sql);

                        if($result == TRUE) 
                        {
                                echo "New record created successfully.";
                        }
                                else {
                                        echo "Error:" . $sql . "<br>". $auth->error;
                                        
                                }

                                $auth->close();
                }


?>





<?php
include_once('lib/header.php');
?>

        <h1>REGISTER HERE</h1>
        <p>ALL FIELDS REQUIRED</p> <hr/>

        
        <form method="POST" action="functions.php">

                <p>
                        <?php
                                if(isset($_GET['message']) && !empty($_GET['message'])) {

                                        echo "<span style='color:red'>" . $_GET['message'] . "</span>";
                                }
                        ?>
                </p>
                
                <p>
                <label>First Name</label> <br/>
                <input type="text" name="firstname" placeholder="Please input your first name" required/>
                </p>

                <p>
                <label>Last Name</label> <br/>
                <input type="text" name="lastname" placeholder="Please input your last name" required/>
                </p>

                <p>
                <label>Email</label> <br/>
                <input type="text" name="email" placeholder="Please input your email" required/>
                </p>

                <p>
                <label>Password</label> <br/>
                <input type="text" name="password" placeholder="Please input password" required/>
                </p>

                <p>
                <label>Confirm Password</label> <br/>
                <input type="text" name="confirmpassword" placeholder="Please confirm password" required/>
                </p>


                <p>
                <label>Gender</label> <br/>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                </p>

                <p>
                <label>Genre</label> <br/>
                <select name="genre" required>
                        <option value="">SELECT</option>
                        <option>Nigerian</option>
                        <option>African</option>
                        <option>American</option>
                        <option>World</option>
                </select>
                </p>

                <br/>

        <p>
         <button type="submit" > <span style='color:red'> REGISTER </span> </button> 
        </p>

    </form>

    <hr/>

<?php
include_once('lib/footer.php');
?>