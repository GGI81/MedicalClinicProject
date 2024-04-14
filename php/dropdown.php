<?php
include 'connection.php';

$query = "SELECT AppointmentDate, Specialist FROM Appointments WHERE ClientID IS NULL";
$result = mysqli_query($connection, $query);

if ($result) {
    echo '<select id="dropdown" name="dropdown">';
    while ($row = mysqli_fetch_assoc($result)) {
        $option_text = $row['AppointmentDate'] . ' - ' . $row['Specialist'];
        echo '<option value="' . $row['AppointmentDate'] . '">' . $option_text . '</option>';
    }
    echo '</select>';
} else {
    echo "Error retrieving data from database: " . mysqli_error($connection);
}
mysqli_close($connection);
?>
