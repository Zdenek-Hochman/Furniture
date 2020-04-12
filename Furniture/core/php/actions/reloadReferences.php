<?php
    require_once("../connect.php");

    $Prepare = $db->prepare("SELECT Reference, IDReference FROM reference WHERE NOT IDReference = ?");
    $Prepare->execute(array($_POST["id"]));
    $Data = $Prepare->fetchAll(PDO::FETCH_ASSOC);

    $Rand = mt_rand(0, (count($Data)-1));

    echo json_encode($Data[$Rand]["Reference"], JSON_UNESCAPED_UNICODE);
    echo '<input id="ReferNumber" type="hidden" value="'.json_decode($Data[$Rand]["IDReference"]).'" />';
?>
