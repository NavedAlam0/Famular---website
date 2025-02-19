<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$budgetoverview = $_POST['budgetoverview'];
$companyname = $_POST['companyname'];
$message = $_POST['message'];

// Validate phone number
if (!preg_match('/^(\d{3}[-.]?)?(\d{3})[-.]?(\d{4})$/', $phonenumber)) {
    echo "Invalid phone number";
    exit;
}

//Database connection
$con = new mysqli('localhost', 'root', '', 'famular');
if($con->connect_error){
    die('Connection Failed : '.$con->connect_error);
}else{
    $stmt = $con->prepare("insert into form(firstname, lastname, phonenumber, email, budgetoverview, companyname, message)
    values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisiss", $firstname, $lastname, $phonenumber, $email, $budgetoverview, $companyname, $message);
    $stmt->execute();
    echo"";
    $stmt->close();
    $con->close();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>
    <style>
        body {
            background-image: url('pngtree-modern-double-color-futuristic-neon-background-image_351866.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }
        h1 {
            font-size: 36px;
            color: #fff;
            padding-top: 20%;
            padding-bottom: 0%;
        }
        h2{
            font-size: 36px;
            color: #fff;
            padding-top: 0%;
            padding-bottom: 2%;
        }
        button {
            background-color: #FFA07A;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="hw">
    <h1>Thank you for submitting your information !</h1>
    <h2>Our Team will contact you as soon as posible....</h2>
    <button><a href='index.php'>Go back home</a></button>
    </div>
</body>
</html>