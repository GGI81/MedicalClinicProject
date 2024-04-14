<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Медицинска клиника Здраве</title>
    <link rel="icon" href="images/icon.ico">
    <link rel="stylesheet" href="style/common_style.css">
    <link rel="stylesheet" href="style/specific_style/visit.css">
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

    <div class="centered-form-container">
        <div class="form-image">
            <img src="images/visit.png" alt="Clinic Image">
        </div>
        <div class="centered-form">
            <h2>Запази Час</h2>
            <form action="php/submitForm.php" method="post">
                <label for="name">Имае:</label>
                <input type="text" id="name" name="name" required><br>

                <label for="last_name">Фамилия:</label>
                <input type="text" id="last_name" name="last_name" required><br>

                <label for="email">Ел. Поща:</label>
                <input type="email" id="email" name="email" required><br>

                <label for="dropdown">Изберете час:</label>

                <?php include "php/dropdown.php"?>

                <br>

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>

    <footer>
    <p>&copy; Георги Иванов 12k №7. Всички права са запазени.</p>
    </footer>

    
    <script src="js/navScript.js"></script>
</body>
</html>
