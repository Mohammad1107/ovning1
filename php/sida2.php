<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min andra sida</title>
    <style>
        .container2 {
            width: 60%;
            margin: 15vh;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container2">
        <form action="" method="post">
            <label for="animals1">Djur 1:</label>
            <input type="text" id="animals1" name="animals[]">
            <label for="animals2">Djur 2:</label>
            <input type="text" id="animals2" name="animals[]">
            <label for="animals3">Djur 3:</label>
            <input type="text" id="animals3" name="animals[]">
            <button type="submit" name="submitBtn">Skicka</button>
        </form>
    
        <?php
        // PHP-kod för att hantera formulärsdata och visa svaren
        if (isset($_POST['animals'])) {
            $farmAnimals = $_POST['animals'];
            echo "<pre>";
            print_r($farmAnimals);
            echo "</pre>";

            // Ersätt och lägg till djur
            $farmAnimals[2] = "apa";
            $farmAnimals[] = "Alpacka";

            // Ta bort första elementet
            array_shift($farmAnimals);

            echo "<pre>";
            print_r($farmAnimals);
            echo "</pre>";

            if(isset($farmAnimals[1])) {
                echo "<p>Andra djuret: " . $farmAnimals[1] . "</p>";
            }
        }
        ?>
    </div>
</body>
</html>
