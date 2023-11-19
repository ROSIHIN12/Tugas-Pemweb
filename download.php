<?php
require './config/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the file path from the database based on the provided ID
    $result = mysqli_query($db_connect, "SELECT image FROM products WHERE id=$id");

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        // Ensure the file path exists
        if ($row && isset($row['image'])) {
            $filePath = $_SERVER['DOCUMENT_ROOT'] . $row['image'];

            // Check if the file exists before attempting to download
            if (file_exists($filePath)) {
                // Set the appropriate headers for file download
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
                header('Content-Length: ' . filesize($filePath));

                // Read the file and output it to the browser
                readfile($filePath);
                exit;
            } else {
                echo "File not found.";
            }
        } else {
            echo "Invalid product ID or file path.";
        }
    } else {
        echo "Error fetching file path.";
    }
} else {
    echo "Invalid request.";
}

mysqli_close($db_connect);
?>
