<?php
    require_once "connect.php";

    function GenerateMenu() {
        $Url = explode("/", $_SERVER["PHP_SELF"]);
        $Url = end($Url);

        ($Url == "index.php") ? $Path = "core/php/" :  $Path = "";

        if($Url == "index.php") {
            echo
            '<ul>
            <li class="MainHeader"><a href="'.$Path.'news.php" target="_self" title="Novinky"> Novinky </a></li>
            <li class="MainHeader"><a href="'.$Path.'information.php" target="_self" title="Informace"> Informace </a></li>

            <li class="MainHeader">
                <a href="'.$Path.'gallery.php" target="_self" title="Fotogalerie"> Fotogalerie </a>
                <ul class="SubMenu">
                    <li><a href="'.$Path.'gallery.php" target="_self" title="Fotogalerie"> - Vestavěné skříně </a></li>

                    <li>
                        <a href="'.$Path.'gallery.php" target="_self" title="Fotogalerie"> - Kuchyně </a>
                        <ul class="SubMenu SubSubMenu">
                            <li><a href="'.$Path.'gallery.php" target="_self" title="Fotogalerie"> - Lamino Dvířka </a></li>
                            <li><a href="'.$Path.'gallery.php" target="_self" title="Fotogalerie"> - Foliová dvířka </a></li>
                        </ul>
                    </li>

                    <li><a href="'.$Path.'gallery.php" target="_self" title="Fotogalerie"> - Interiový nábytek </a></li>
                </ul>
            </li>


            <li class="MainHeader"><a href="'.$Path.'realization.php" target="_self" title="Realizace"> Realizace </a></li>
            <li class="MainHeader"><a href="'.$Path.'review.php" target="_self" title="Reference"> Reference </a></li>
            <li class="MainHeader"><a href="'.$Path.'contact.php" target="_self" title="Kontakt"> Kontakt </a></li>
            </ul>';
        }else {
            echo
            '<ul>
            <li><a href="'.$Path.'news.php" target="_self" title="Novinky"> Novinky </a></li>
            <li><a href="'.$Path.'review.php" target="_self" title="Reference"> Reference </a></li>
            <li><a href="'.$Path.'gallery.php" target="_self" title="Fotogalerie"> Fotogalerie </a></li>
            <li><a href="'.$Path.'kitchen.php" target="_self" title="Kitchen"> Kuchyně </a></li>
            <li><a href="'.$Path.'interior.php" target="_self" title="Interior"> Interiéry </a></li>
            <li><a href="'.$Path.'wardrobe.php" target="_self" title="Wardrobe"> Vestavěné skříně </a></li>
            <li><a href="'.$Path.'realization.php" target="_self" title="Realizace"> Realizace </a></li>
            <li><a href="'.$Path.'contact.php" target="_self" title="Kontakt"> Kontakt </a></li>
            </ul>';
        }
    }

    function GenerateFooter() {
        echo
        '<footer>'
            .'<div id="FooterLogo">'
                .'<p>Truhlářství</p>'
                .'<p>VLASTISLAV ZUMR</p>'
            .'</div>'

            .'<div id="FooterContact">'
                .'<div id="LeftSide"class="FooterSide">'
                    .'<div id="FooterTel">'
                        .'<p>Telefoní číslo</p>'
                        .'<p>775 255 737</p>'
                    .'</div>'

                    .'<div id="FooterEmail">'
                        .'<p>Email</p>'
                        .'<p>hoblik123@seznam.cz</p>'
                    .'</div>'
                .'</div>'
                .'<div id="RightSide" class="FooterSide">'
                    .'<div id="FooterCreated">'
                        .'<p>Vytvořil</p>'
                        .'<p>ZDENĚK HOCHMAN</p>'
                    .'</div>'

                    .'<div id="FooterCreatedEmail">'
                        .'<p>Email</p>'
                        .'<p>zdenek.hochman@seznam.cz</p>'
                    .'</div>'
                .'</div>'
            .'</div>'
        .'</footer>';
    }

    function DateTimer($Date) {
        ($Date == 1) ? $NewDate = (date("Y") - 2009) : $NewDate = (date("Y") - 1998);
        return $NewDate;
    }

    function GetReference() {
        global $db;

        $Prepare = $db->prepare("SELECT reference, idreference FROM reference");
        $Prepare->execute();
        $Data = $Prepare->fetchAll();

        $Rand = mt_rand(0,11);

        echo json_encode($Data[$Rand]["reference"], JSON_UNESCAPED_UNICODE);
        echo '<input id="ReferNumber" type="hidden" value="'.json_decode($Data[$Rand]["idreference"]).'" />';
    }

    function GetPage() {
        if(isset($_GET['Page']) && !empty($_GET['Page'])) {
            $CurrentPage = $_GET['Page'];
        } else {
            $CurrentPage = 1;
        }

        return $CurrentPage;
    }

    function ShowReferences() {
        global $db;

        $Limit = 4;
        $CurrentPage = GetPage();

        $StartFrom = ($CurrentPage * $Limit) - $Limit;

        $Prepare = $db->prepare('SELECT * FROM reference');
        $Prepare->execute();
        $FileCount = $Prepare->rowCount();

        $LastPage = ceil($FileCount / $Limit);
        $Prepare = $db->prepare("SELECT * FROM reference LIMIT $StartFrom, $Limit");
        $Prepare->execute();

        while($Data = $Prepare->fetch(PDO::FETCH_ASSOC)):
            echo "<div class='MessageBlock'>"
                    ."<p class='Customer'>".$Data["Name"]."</p>"
                    ."<p class='Message'>".$Data["Reference"]."</p>"
                ."</div>";
        endwhile;
    }

    function Paging() {
        $CurrentPage = GetPage();
        (($CurrentPage - 1) >= 2) ? $i = ($CurrentPage - 1)  : $i = 1;

        for($i; $i <= ($CurrentPage + 2); $i++) {
            ($i == $CurrentPage) ? $Select = "Current" : $Select = "";
            echo "<a href='?Page=".$i."' class='PageMenu ".$Select."' rel='no-refresh'><span>".$i."</span></a>";
        }
    }
?>
