
<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    // Get info 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    // Display the submitted information 
    echo "<h2>Form Submitted Successfully</h2>";
    echo "<p>Name: " . htmlspecialchars($name) . "</p>";
    echo "<p>Email: " . htmlspecialchars($email) . "</p>";
    echo "<p>Password: " . htmlspecialchars($password) . "</p>";
}