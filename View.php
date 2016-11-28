<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>BookShop</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="text-center">

    <?php

    include("Model.php");
    include("Controller.php");
    $model = new Model ();
    $controller = new Controller ($model);
    echo $controller -> output ();
    $books= $controller -> invoke ();
    if ($_SERVER['REQUEST_METHOD'] === "GET"){
        if (isset ($_GET['book'])){
            echo "Bókin : <b> " .$books -> name . " </b> er gefin út:<b> " . $books -> releaseYear . "</b>. eftir útgefanda <b>" . $books -> edition . "</b>" ;
            echo "<br><button type=\"button\" onclick=\"history.back();\">Back</button>";
            exit;
        }
    }
    ?>

    <form method="GET" action="" >

        <select class="" name="book" >

            <?php
            foreach ($books as $x => $x_value){
                echo '<option value="'.$x.'">'.$x.'</option>';
            }
            ?>

        </select>

        <input type="submit" value="Select">

    </form>
    <br>
</div>
</body>

</html>