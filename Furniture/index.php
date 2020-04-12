<!DOCTYPE html>
<?php require_once "core/php/functions.php"; ?>
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
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <script src="core/js/functions.js"></script>
        <link rel="stylesheet" type="text/css" href="core/css/style.css" />
        <title></title>
    </head>

    <body>
        <div id="Background">
            <p id="Information"><span>VÍCE INFO</span>RMACÍ</p>
            <nav id="IndexMenu">
                <div id="Menu">
                    <div id="Fixer">
                        <div id="MobileMenu">
                            <span></span>
                        </div>

                        <?php GenerateMenu(); ?>
                    </div>
                </div>
            </nav>

            <header>
                <div id="MainBackground">
                    <div id="TitleDarkener"></div>
                </div>

                <h1>
                    <span class="Letters">TRUHLÁŘSTVÍ</span>
                </h1>

                <h2>
                    <span class="Clip">
                        <span class="Letters">VLASTISLAV</span>
                    </span>
                    <span class="Clip">
                        <span class="Letters">ZUMR</span>
                    </span>
                </h2>
            </header>

            <div id="CustomerWord">
                <p id="Target">NAŠÍM HLAVNÍM CÍLEM JE SPOKOJENÝ ZÁKAZNÍK</p>
                <div id="ContactButton">
                    <a href="#">KONTAKT</a>
                    <svg width="20%" height="4.2vw" xmlns="http://www.w3.org/2000/svg" >
                        <rect width="100%" height="100%" fill="none" />
                    </svg>
                </div>
            </div>
        </div>

        <main>
            <div id="AboutFirm">
                <p>
                    Firma existuje <?php echo DateTimer(1) ?>. rokem, výrobě nábytku se věnuji již <?php echo DateTimer(2) ?> let.<br/>
                    Zabývám se výrobou veškerého <span class="bold">interiérového</span> nábytku z <span class="bold">lamina</span>, <span class="bold">dýhovaného</span> a <span class="bold">lakovaného</span> nábytku.<br/>
                    Nabízím výrobu z <span class="bold">kvalitních</span> českých a zahraničních materiálů a individuální přístup ke každému zákazníkovi.
                </p>
            </div>

            <div id="Showcase">
                <div class="FurnitureRow">
                    <h3>KUCHYNĚ</h3>
                    <div id="Kitchen" class="FurnitureCell"></div>
                    <p>
                        Nabízíme výrobu kuchyní dle nejnovějších
                        trendů i kuchyní klasických,
                        včetně kuchyní do atypických prostor.
                    </p>
                </div>

                <div class="FurnitureRow">
                    <h3>INTERIÉRY</h3>
                    <div id="Interior" class="FurnitureCell"></div>
                    <p>
                        Naše firma vyrábí nejen kuchyně
                        a vestavěné skříně, ale jakýkoliv jiný
                        nábytek na míru.
                    </p>
                </div>
            </div>

            <div id="ReviewThumbnail">
                <h3>SPOKOJENÍ ZÁKAZNÍCI</h3>

                <div id="ReviewContainer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ReloadRef" fill="gray" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>

                    <div id="ReviewHiddenContainer">
                        <p class="Review">
                            <?php GetReference(); ?>
                        </p>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" class="ReloadRef" fill="gray" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>
                </div>

                <div id="ReviewButton">
                    <a href="#">VÍCE RECENZÍ</a>

                    <svg width="18vw" height="4vw" xmlns="http://www.w3.org/2000/svg">
                        <rect width="100%" height="100%" fill="none" />
                    </svg>
                </div>
            </div>

            <div id="GallerySection">
                <div class="Gallery">
                    <h3>FOTOGALERIE</h3>
                    <div class="GalleryTable">
                        <div class="SideButton">
                            <p>PROHLÉDNOUT SI</p>

                            <svg width="4vw" height="24vw" xmlns="http://www.w3.org/2000/svg">
                                <rect width="100%" height="100%" fill="none" />
                            </svg>
                        </div>

                        <div class="GalleryBlock">
                            <div class="GalleryCell">
                                <div class="GalleryImgBlock">
                                    <div id="FWardrobeImg" class="GalleryImg">
                                        <svg width="92%" height="92%" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <rect width="100%" height="100%" fill="none" />
                                                <text class="InteriorLabel">INTERIÉROVÝ NÁBYTEK</text>
                                            </g>
                                        </svg>
                                    </div>
                                    <p class="GalleryLabel">
                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                                    </p>
                                </div>
                            </div>

                            <div class="GalleryCell">
                                <div class="GalleryImgBlock">
                                    <p id="InteriorText" class="GalleryTitle">INTERIÉRY</p>
                                    <div id="SWardrobeImg" class="GalleryImg">
                                        <svg width="92%" height="92%" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <rect width="100%" height="100%" fill="none" />
                                                <text class="InteriorLabel">KOUPELNOVÝ NÁBYTEK</text>
                                            </g>
                                        </svg>
                                    </div>
                                    <p class="GalleryLabel">
                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="Gallery">
                    <h3>FOTOGALERIE</h3>
                    <div class="GalleryTable">
                        <div class="SideButton">
                            <p>PROHLÉDNOUT SI</p>

                            <svg width="4vw" height="24vw" xmlns="http://www.w3.org/2000/svg">
                                <rect width="100%" height="100%" fill="none" />
                            </svg>
                        </div>

                        <div class="GalleryBlock">
                            <div class="GalleryCell">
                                <div class="GalleryImgBlock">
                                    <div id="SKitchenImg" class="GalleryImg">
                                        <svg width="92%" height="92%" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <rect width="100%" height="100%" fill="none" />
                                                <text class="KitchenLabel">KUCHYNĚ LAMINO</text>
                                            </g>
                                        </svg>
                                    </div>
                                    <p class="GalleryLabel">
                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                                    </p>
                                </div>
                            </div>

                            <div class="GalleryCell">
                                <div class="GalleryImgBlock">
                                    <p id="KitchenText" class="GalleryTitle">KUCHYNĚ</p>
                                    <div id="FKitchenImg" class="GalleryImg">
                                        <svg width="92%" height="92%" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <rect width="100%" height="100%" fill="none" />
                                                <text class="KitchenLabel">KUCHYNĚ FOLIE</text>
                                            </g>
                                        </svg>
                                    </div>
                                    <p class="GalleryLabel">
                                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="Suppliers">
                <h3>NAŠI DODAVATELÉ MATERIÁLŮ</h3>
            </div>

            <div id="Logo">
                <ul>
                    <li>
                        <a href="#" target"_self">
                            <div class="LogoImg"></div>
                            <p class="LogoLabel">
                                This is Photoshop's version  of Lorem Ipsum.
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="#" target"_self">
                            <div class="LogoImg"></div>
                            <p class="LogoLabel">
                                This is Photoshop's version  of Lorem Ipsum.
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="#" target"_self">
                            <div class="LogoImg"></div>
                            <p class="LogoLabel">
                                This is Photoshop's version  of Lorem Ipsum.
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="#" target"_self">
                            <div class="LogoImg"></div>
                            <p class="LogoLabel">
                                This is Photoshop's version  of Lorem Ipsum.
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="#" target"_self">
                            <div class="LogoImg"></div>
                            <p class="LogoLabel">
                                This is Photoshop's version  of Lorem Ipsum.
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
        </main>
        <?php GenerateFooter(); ?>
    </body>
</html>
