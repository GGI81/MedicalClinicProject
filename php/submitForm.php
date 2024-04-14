<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $appointment_date = $_POST['dropdown'];

    $query = "INSERT INTO Clients (FirstName, LastName, Email) VALUES ('$name', '$last_name', '$email')";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Error inserting client information: " . mysqli_error($connection));
    }

    $client_id = mysqli_insert_id($connection);

    $query = "UPDATE Appointments SET ClientID='$client_id' WHERE AppointmentDate='$appointment_date'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Error updating appointment information: " . mysqli_error($connection));
    }

    mysqli_close($connection);

    header("Location: ../index.html");
    exit();
}
?>
