<?php
header('Content-Type: application/json');

// Database credentials
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'blog_db';

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die(json_encode(['error' => 'Database connection failed']));
}

// Fetch blog posts
$sql = "SELECT title, description, image_url, date, author FROM blogs ORDER BY date DESC";
$result = $conn->query($sql);

$blogs = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $blogs[] = $row;
    }
}

echo json_encode($blogs);

$conn->close();
?>
