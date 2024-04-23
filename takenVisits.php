<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Медицинска клиника Здраве</title>
    <link rel="icon" href="images/icon.ico">
    <link rel="stylesheet" href="style/common_style.css">
    <style>
        .appointments-container {
            padding: 20px;
        }

        .appointments-container p {
            margin: 10px 0;
            font-size: 18px;
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .appointments-container p:nth-child(even) {
            background-color: #eaeaea;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.html">Начало</a></li>
            <li><a href="doctors.html">Доктори</a></li>
            <li><a href="visit.php">Запази Час</a></li>
            <li><a href="about.html">За Автора</a></li>
        </ul>
    </nav>

    <div class="appointments-container">
        <?php include "php/displayAppointments.php"; ?>
    </div>

    <footer>
        <p>&copy; Георги Иванов 12k №7. Всички права запазени.</p>
    </footer>
    
    <script src="js/navScript.js"></script>
</body>
</html>
