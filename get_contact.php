<?php
// Include the database connection file
require_once 'connect_db.php';

// Get the database connection
$db = Database::getInstance();
$conn = $db->getConnection();

// Example SELECT query
$sql = "SELECT id, firstname, lastname, phone, birth_date FROM contact";
$result = $conn->query($sql);

$contacts = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $contacts[] = $row;
    }
} else {
    $contacts = ["message" => "No results found"];
}

// Close the connection
$conn->close();

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($contacts);
?>