<?php
include "connection.php";

$sql = "SELECT Appointments.AppointmentDate, Appointments.Specialist, Clients.FirstName, Clients.LastName, Clients.EMAIL 
        FROM Appointments 
        INNER JOIN Clients ON Appointments.ClientID = Clients.ID 
        WHERE Appointments.ClientID IS NOT NULL";

$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $appointmentDate = $row["AppointmentDate"];
        $specialist = $row["Specialist"];
        $firstName = $row["FirstName"];
        $lastName = $row["LastName"];
        $email = $row["EMAIL"];
        
        echo "<p>Запазен час - $specialist - $appointmentDate - Запазен от: $firstName $lastName с ел. поща: $email</p>";
    }
} else {
    echo "<p>Няма запазени часове</p>";
}

mysqli_close($connection);
?>
