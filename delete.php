<?php

$DBHOST = 'localhost';
$DBUSER = 'root';
$DBPASSWORD = '';
$DBNAME = 'pemweb-db';

$id = $_GET['id'];

$db_connect = mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

global $db_connect;

// Perform the deletion
mysqli_query($db_connect, "DELETE FROM products WHERE id = $id");

// Check if the deletion was successful
if (mysqli_affected_rows($db_connect) > 0) {
    // Success message
    echo "Product Berhasil dihapus. Redirecting to the main page...";
    
    // Redirect to the main page after 2 seconds (you can adjust the delay)
    header("refresh:1;url=show.php"); // replace 'index.php' with the actual main page URL
} else {
    // Error message if the deletion failed
    echo "Error deleting product.";
}

?>

