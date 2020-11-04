<?php 
    require_once('config.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

    <div>
        <?php 
        if(isset($_POST['create'] )){
            $username = $_POST['username'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $job = $_POST['job'];
            $tel = $_POST['tel'];

            $sql = "INSERT INTO user(username , firstname , lastname , email , password , job ,tel) Values (?,?,?,?,?,?,?)";
            $stminsert = $db->prepare($sql);
            $result = $stminsert->execute([$username,$firstname,$lastname,$email,$password,$job,$tel]);
            if($result){
                echo ("Success fully");
            }else {
                echo ("Something was wrong!!");
            }
        }
        ?>
    </div>
    <div>
        <form action="regis.php" method="post">
            <div class="container">
                <h1>Registration</h1>
                <p>Fill up form with correct values.</p>
                <label for="username"><b>Username</b></label>
                <input type="text" name="username" require>

                <label for="email"><b>Email</b></label>
                <input type="text" name="email" require>

                <label for="firstname"><b>Firstname</b></label>
                <input type="text" name="firstname" require>

                <label for="lastname"><b>Lastname</b></label>
                <input type="text" name="lastname" require>

                <label for="email"><b>Email</b></label>
                <input type="text" name="email" require>

                <label for="password"><b>Password</b></label>
                <input type="text" name="password" require>

                <label for="job"><b>Job</b></label>
                <input type="text" name="job" require>

                <label for="tel"><b>Tel.</b></label>
                <input type="text" name="tel" require>

                <input type="submit" name="create" value="Sign Up">
            </div>
        </form>

    </div>    

</body>
</html>