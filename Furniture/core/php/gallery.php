<!DOCTYPE html>
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
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <title></title>
    </head>

    <body>
        <nav id="BasicMenu" class="Reverse">
            <div id="Menu">
                <div id="Logo">
                    <p>
                        <span>TRUHLÁŘSTVÍ</span>
                        <span>VLATISLAV ZUMR</span>
                    </p>
                </div>
                <?php GenerateMenu(); ?>
            </div>
        </nav>

        <main>
            <div id="Gallery">
                <h3>GALERIE</h3>
                <div id="GallerySelect">
                    <div id="GalleryContainer">
                        <div id="GalleryTitle">
                            <span>KUCHYNĚ</span>
                        </div>
                        <div id="GalleryImg">
                            <div class="SubCategory KitchenCategory" data-category="Lamine">
                                <div class="SubTitle">
                                    <p>LAMINO DVÍŘKA</p>
                                </div>
                            </div>
                            <div class="SubCategory KitchenCategory" data-category="Foil">
                                <div class="SubTitle">
                                    <p>FÓLIOVÁ DVÍŘKA</p>
                                </div>
                            </div>
                            <div class="SubCategory KitchenCategory" data-category="Other">
                                <div class="SubTitle">
                                    <p>OSTATNÍ</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul>
                        <li class="CategoryMenu">
                            <p>VESTAVĚNÉ SKŘÍNE</p>
                            <svg width="22%" height="3.2vw" xmlns="http://www.w3.org/2000/svg" >
                                <rect width="100%" height="100%" fill="none" />
                            </svg>
                        </li>

                        <li class="CategoryMenu">
                            <p>KUCHYNĚ</p>
                            <svg width="14%" height="3.2vw" xmlns="http://www.w3.org/2000/svg" >
                                <rect width="100%" height="100%" fill="none" />
                            </svg>
                        </li>

                        <li class="CategoryMenu">
                            <p>INTERIOVÝ NÁBYTEK</p>
                            <svg width="22%" height="3.2vw" xmlns="http://www.w3.org/2000/svg" >
                                <rect width="100%" height="100%" fill="none" />
                            </svg>
                        </li>
                    </ul>
                </div>
                <div id="GalleryGrid">
                    
                </div>
            </div>
        </main>

        <footer>
            <?php GenerateFooter(); ?>
        </footer>
    </body>
</html>
