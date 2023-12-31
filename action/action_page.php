<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect post data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Create array
    $formData = array(
        'name' => $name,
        'email' => $email,
        'message' => $message
    );

    // Convert array to JSON
    $json_data = json_encode($formData, JSON_PRETTY_PRINT);

    // Write JSON data to a file
    file_put_contents('formData.json', $json_data);
}
?>