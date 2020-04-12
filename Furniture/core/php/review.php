<!DOCTYPE html>
<?php require_once "connect.php"; ?>
<?php require_once "functions.php"; ?>
<html lang="cs-CZ">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, maximum-scale=1.0" />
        <meta name="description" content="" />
        <meta name="keywords" content="">
        <meta name="robots" content="noindex,nofollow" />
        <meta name="googlebot" content="noindex,nofollow,noarchive" />
        <meta name="og:type" content="" />
        <meta name="og:url" content="" />
        <meta name="og:title" content="" />
        <meta name="og:description" content="" />

        <script src="../../core/js/functions.js"></script>
        <link rel="stylesheet" type="text/css" href="../../core/css/style.css" />
        <title></title>
    </head>

    <body>
        <nav id="BasicMenu">
            <div id="Menu">
                <div id="Logo">
                    <p>
                        <span>TRUHLÁŘSTVÍ</span><br/>
                        <span>VLATISLAV ZUMR</span>
                    </p>
                </div>
                <?php GenerateMenu(); ?>
            </div>
        </nav>

        <div id="Review">
            <h3 class="Header">Reference</h3>

            <p id="ReviewInfo">
                Zde můžete vyjádřit svůj názor, jak jste byli s naší firmou spokojeni, příp. nespokojeni. I vaše připomínky nám pomohou zlepšit naši práci.
                <br/>Pokud jste služeb naší firmy v minulosti využili, můžete nám svůj názor sdělit zde i zpětně.
            </p>

            <div id="Reviews">
                <?php ShowReferences() ?>
            </div>

            <div id="Paging">
                <?php Paging(); ?>
            </div>

            <div id="Form">
                <p>Napište nám váš názor</p>

                <form method="post">
                    <input type="text" name="N" placeholder="Jméno: " />
                    <input type="text" name="V" placeholder="Příjmení: " />
                    <textarea type="text" name="T" placeholder="Zpráva - Hodnocení: "></textarea>
                    <input type="text" name="Y" placeholder="Napište aktuální rok: " />
                    <input type="submit" name="S" value="ODESLAT" />
                </form>
            </div>
        </div>

        <?php GenerateFooter(); ?>
    </body>
</html>
