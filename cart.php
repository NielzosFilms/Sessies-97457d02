<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <!-- maak hier de opdracht -->
        <form action="/cart.php" method="POST">
            <input type='text' name="nummer" placeholder="Voer een nummer in" />
            <input type='submit' name="submit" />
        </form>
        <?php
            session_start();
            if (isset($_POST['submit'])) {
                if (!empty($_POST["nummer"])) {
                    $num = $_POST["nummer"];
                    if (filter_var($num, FILTER_VALIDATE_INT, array("options" => array("min_range"=>1, "max_range"=>3)))) {
                        $_SESSION["product"] = $num;
                        echo("<h1>Gekozen item ".$_SESSION["product"]."</h1>");
                    }
                }
            }
        ?>
    </body>
</html>