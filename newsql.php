<?php

$conn = new mysqli('localhost', 'root', 'Weakpass$12', 'aspire');

if ($conn->connect_error) {
    echo "Database connection failed: ";
}

echo "Database connection was successful";
