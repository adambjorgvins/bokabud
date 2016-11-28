<?php
require('Model.php');
require('View.php');
require('Controller.php');
try{
    $model = new Model;
    $controller = new Controller($model);
    $view = new View($controller, $model);
} catch(Exception $e){
    die('Caught exception: '.  $e->getMessage(). "\n");
}
if (isset($_GET)){
    if(isset($_GET['getBook'])){
        $controller->getBook($_GET['getBook']);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body>

<div id="box">
    <?php
    if(isset($model->bookInfo['title'])){
        $view->bookInfo();
    }
    else{
        $view->bookList();
    }
    ?>
</div>
</body>

</html>