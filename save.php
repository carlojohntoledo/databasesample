<?php
// Path to data file
$dataFile = 'data.json';

// Read existing data
$data = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

// Get form data
$newEntry = [
    "username" => $_POST['username'],
    "age" => $_POST['age'],
    "dob" => $_POST['dob'],
    "timestamp" => date("Y-m-d H:i:s")
];

// Append new entry
$data[] = $newEntry;

// Save back to file
file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT));

echo "User saved successfully.";
?>
