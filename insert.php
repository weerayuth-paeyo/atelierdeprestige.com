<?php
// Include the database connection file
require_once 'connect_db.php';

// Get the database connection
$db = Database::getInstance();
$conn = $db->getConnection();

// Retrieve form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$store = $_POST['store'];
$birth_date = $_POST['year'] . '-'. $_POST['month'] . '-'. $_POST['day'];

// print_r(date($birth_date));
// die;
// Get current date and time
$created_at = date('Y-m-d H:i:s');
$updated_at = $created_at;



// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO contact (firstname, lastname, phone, store, birth_date, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $firstname, $lastname, $phone, $store, $birth_date, $created_at, $updated_at);

// // Execute the statement
// if ($stmt->execute()) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $stmt->error;
// }

// Execute the statement
if ($stmt->execute()) {
    // Redirect to atelierdeprestige.com with a success message
    header("Location: http://atelierdeprestige.com?status=success");
    exit();
} else {
    // Redirect to atelierdeprestige.com with an error message
    header("Location: http://atelierdeprestige.com?status=error&message=" . urlencode($stmt->error));
    exit();
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
