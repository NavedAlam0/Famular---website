<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$budgetoverview = $_POST['budgetoverview'];
$companyname = $_POST['companyname'];
$message = $_POST['message'];

// Validate phone number
if (!preg_match('/^[0-9]{10}$/', $phonenumber)) {
    echo "Invalid phone number";
    exit;
}

// Database connection
$con = new mysqli('localhost', 'root', '', 'famular');
if ($con->connect_error) {
    die('Connection Failed : ' . $con->connect_error);
} else {
    $stmt = $con->prepare("insert into form(firstname, lastname, phonenumber, email, budgetoverview, companyname, message) values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisiss", $firstname, $lastname, $phonenumber, $email, $budgetoverview, $companyname, $message);
    $stmt->execute();
    echo "Our Team will contact you as soon as posible....";
    $stmt->close();
    $con->close();
}

// Add image after submitting data
echo "<img src='image.jpg' alt='Thank you'>";
echo "<p>Thank you for submitting your information!</p>";
echo "<button><a href='index.php'>Go back home</a></button>";

// Close the connection
$con->close();
?>

?>