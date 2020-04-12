<?php
    require_once("../connect.php");

    $Prepare = $db->prepare("SELECT Url, Category FROM pictures INNER JOIN category ON pictures.CategoryID = category.IDCategory WHERE Category = ?");
    $Prepare->execute(array($_GET["ImgCategory"]));
    $Data = $Prepare->fetchAll(PDO::FETCH_ASSOC);

    header("Content-Type: application/json");
    echo json_encode($Data);
?>
