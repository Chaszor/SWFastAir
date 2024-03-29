<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('session.php');

// Assuming you have a database connection

// Clear records from checkedbags table
$sql_clear_checkedbags = "DELETE FROM checkedbags";
$result_clear_checkedbags = mysqli_query($connection, $sql_clear_checkedbags);

if (!$result_clear_checkedbags) {
    die("Error clearing checkedbags table: " . mysqli_error($connection));
}

// Clear records from bookings table
$sql_clear_bookings = "DELETE FROM bookings";
$result_clear_bookings = mysqli_query($connection, $sql_clear_bookings);

if (!$result_clear_bookings) {
    die("Error clearing bookings table: " . mysqli_error($connection));
}

echo "All flight and baggage information cleared successfully.";
header("Location: profile.php");
// Close the database connection
mysqli_close($connection);
?>
