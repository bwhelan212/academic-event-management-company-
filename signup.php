<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //data from form post
    $email= $_POST['email'] ?? '';
    $password= $_POST['password'] ?? '';

    //validation

    $isvalid = true;
    if(!isset($email) || trim($email) === '') {
        echo "Email is required.";
        $isvalid = false;
    }

    if(!isset($password) || trim($password) === '') {
        echo "Password is required.";
        $isvalid = false;
    }

    //add password confirmation if we want

    //if valid insert the email and password into db
    if($isvalid) {
        define("DB_SERVER", "localhost");
        define("DB_USERNAME","root");
        define("DB_PASSWORD", "");
        define("DB_NAME", "company");

        $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        if (mysqli_connect_errno()) {
            $error_msg = "Database connection unsuccessful: ";
            $error_msg .= mysqli_connect_error();
            $error_msg .= " (" . mysqli_connect_errno() . ")";
            exit($error_msg);
        }

    }

    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    <form action="" method ='post'>
        <div>
            <label for="first-name">First name:</label>
            <input type="text" id="first-name" name="first-name">
        </div>
        
        <div>
            <label for="last-name">Last Name: </label>
            <input type="text" id="last-name" name="last-name">
        </div>
        
        <div>
            <label for="email"><span>*</span>Email:</label>
            <input type="text" name = "email" id = "email" placeholder='bob@gmail.com' required >
        </div>

     
        <div>
            <label for="password"><span>*</span>Password:</label>
            <input type="text" name = "password" id = "password" placeholder='Enter password' required>
        </div>
         <button type="submit">Submit</button>
    </form>
    
</body>
</html>


