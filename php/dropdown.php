<?php
include 'connection.php';

$query = "SELECT AppointmentDate FROM Appointments WHERE ClientID IS NULL";
$result = mysqli_query($connection, $query);

if ($result) {
    echo '<select id="dropdown" name="dropdown">';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row['AppointmentDate'] . '">' . $row['AppointmentDate'] . '</option>';
    }
    echo '</select>';
} else {
    echo "Error retrieving data from database: " . mysqli_error($connection);
}
mysqli_close($connection);
?>
