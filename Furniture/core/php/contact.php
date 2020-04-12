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

        <link rel="stylesheet" type="text/css" href="../css/style.css" />
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

        <main>
            <div id="Contact">
                <h3>Kontaktujte nás</h3>

                <div id="FormBlock">
                    <div id="ContactInformation">
                        <div id="Tel" class="Info">
                            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M18 24h-12c-1.104 0-2-.896-2-2v-20c0-1.104.896-2 2-2h12c1.104 0 2 .896 2 2v20c0 1.104-.896 2-2 2zm1-5.083h-14v3.083c0 .552.449 1 1 1h12c.552 0 1-.448 1-1v-3.083zm-7 3c-.553 0-1-.448-1-1s.447-1 1-1c.552 0 .999.448.999 1s-.447 1-.999 1zm7-17h-14v13h14v-13zm-1-3.917h-12c-.551 0-1 .449-1 1v1.917h14v-1.917c0-.551-.448-1-1-1zm-4.5 1.917h-3c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h3c.276 0 .5.224.5.5s-.224.5-.5.5z"/></svg>
                            <p><span class="Hightlight">TEL:</span> +420 775 255 737</p>
                        </div>
                        <div id="Email" class="Info">
                            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 21h-24v-18h24v18zm-23-16.477v15.477h22v-15.477l-10.999 10-11.001-10zm21.089-.523h-20.176l10.088 9.171 10.088-9.171z"/></svg>
                            <p><span class="Hightlight">EMAIL:</span> hoblik123@seznam.cz</p>
                        </div>
                        <div id="Ico" class="Info">
                            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 0c-5.083 0-8.465 4.949-3.733 13.678 1.596 2.945-1.725 3.641-5.09 4.418-3.073.709-3.187 2.235-3.177 4.904l.004 1h23.99l.004-.969c.012-2.688-.093-4.223-3.177-4.935-3.438-.794-6.639-1.49-5.09-4.418 4.719-8.912 1.251-13.678-3.731-13.678m0 1c1.89 0 3.39.764 4.225 2.15 1.354 2.251.866 5.824-1.377 10.06-.577 1.092-.673 2.078-.283 2.932.937 2.049 4.758 2.632 6.032 2.928 2.303.534 2.412 1.313 2.401 3.93h-21.998c-.01-2.615.09-3.396 2.401-3.93 1.157-.266 5.138-.919 6.049-2.94.387-.858.284-1.843-.304-2.929-2.231-4.115-2.744-7.764-1.405-10.012.84-1.412 2.353-2.189 4.259-2.189"/></svg>
                            <p><span class="Hightlight">IČO:</span> 74144260</p>
                        </div>
                    </div>

                    <div id="Inputs">
                        <form method="post">
                            <div id="NameBlock" class="ContactBlock">
                                <input type="text" name="N" required />
                                <label for="N">JMÉNO</label>
                            </div>

                            <div id="EmailBlock" class="ContactBlock">
                                <input type="email" name="E" required />
                                <label for="E">EMAIL</label>
                            </div>

                            <div id="TelBlock" class="ContactBlock">
                                <input type="tel" name="T" maxlength="9" pattern="[0-9]{9}" required />
                                <label for="T">TEL</label>
                            </div>

                            <textarea name="M" placeholder="VAŠE ZPRÁVA" required></textarea>

                            <div id="SubmitBlock">
                                <span>ODESLAT</span>
                                <svg width="100%" height="4vw" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="100%" fill="none" />
                                </svg>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="MapLocation">
                    <div id="LocationInfo">
                        <div id="Address" class="Info">
                            <div class="AddressIcon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 3c2.131 0 4 1.73 4 3.702 0 2.05-1.714 4.941-4 8.561-2.286-3.62-4-6.511-4-8.561 0-1.972 1.869-3.702 4-3.702zm0-2c-3.148 0-6 2.553-6 5.702 0 3.148 2.602 6.907 6 12.298 3.398-5.391 6-9.15 6-12.298 0-3.149-2.851-5.702-6-5.702zm0 8c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm8 6h-3.135c-.385.641-.798 1.309-1.232 2h3.131l.5 1h-4.264l-.344.544-.289.456h.558l.858 2h-7.488l.858-2h.479l-.289-.456-.343-.544h-2.042l-1.011-1h2.42c-.435-.691-.848-1.359-1.232-2h-3.135l-4 8h24l-4-8zm-12.794 6h-3.97l1.764-3.528 1.516 1.528h1.549l-.859 2zm8.808-2h3.75l1 2h-3.892l-.858-2z"/></svg>
                            </div>

                            <div class="AddressIcon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M11 11v-3h1.247c.882 0 1.235.297 1.828.909.452.465 1.925 2.091 1.925 2.091h-5zm-1-3h-2.243c-.688 0-1.051.222-1.377.581-.316.348-.895.948-1.506 1.671 1.719.644 4.055.748 5.126.748v-3zm14 5.161c0-2.823-2.03-3.41-2.794-3.631-1.142-.331-1.654-.475-3.031-.794-.55-.545-2.052-2.036-2.389-2.376l-.089-.091c-.666-.679-1.421-1.269-3.172-1.269h-7.64c-.547 0-.791.456-.254.944-.534.462-1.944 1.706-2.34 2.108-1.384 1.402-2.291 2.48-2.291 4.603 0 2.461 1.361 4.258 3.179 4.332.41 1.169 1.512 2.013 2.821 2.013 1.304 0 2.403-.838 2.816-2h6.367c.413 1.162 1.512 2 2.816 2 1.308 0 2.409-.843 2.82-2.01 1.934-.056 3.181-1.505 3.181-3.829zm-18 4.039c-.662 0-1.2-.538-1.2-1.2s.538-1.2 1.2-1.2 1.2.538 1.2 1.2-.538 1.2-1.2 1.2zm12 0c-.662 0-1.2-.538-1.2-1.2s.538-1.2 1.2-1.2 1.2.538 1.2 1.2-.538 1.2-1.2 1.2zm2.832-2.15c-.399-1.188-1.509-2.05-2.832-2.05-1.327 0-2.44.868-2.836 2.062h-6.328c-.396-1.194-1.509-2.062-2.836-2.062-1.319 0-2.426.857-2.829 2.04-.586-.114-1.171-1.037-1.171-2.385 0-1.335.47-1.938 1.714-3.199.725-.735 1.31-1.209 2.263-2.026.34-.291.774-.432 1.222-.43h5.173c1.22 0 1.577.385 2.116.892.419.393 2.682 2.665 2.682 2.665s2.303.554 3.48.895c.84.243 1.35.479 1.35 1.71 0 1.196-.396 1.826-1.168 1.888z"/></svg>
                            </div>

                            <div class="AddressIcon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15 0c-3.313 0-6 2.687-6 6s2.687 6 6 6 6-2.687 6-6-2.687-6-6-6zm.254 9.5l-.754-3-3-.75 6-2.25-2.246 6zm-.254 4.5v4h-10v-14h2.262c.406-1.574 1.275-2.958 2.459-4h-4.721c-1.105 0-2 .896-2 2v18.678c-.002 2.213 3.503 3.322 7.006 3.322 3.498 0 6.994-1.106 6.994-3.322v-6.94c-.641.165-1.309.262-2 .262zm-5 8c-.553 0-1-.448-1-1s.447-1 1-1 1 .448 1 1-.447 1-1 1zm-2.468-13.482c0 .423-.343.766-.766.766-.423-.001-.766-.344-.766-.766s.343-.766.767-.766c.422-.001.765.343.765.766zm3.702 6.95c-.423 0-.766.343-.766.766s.344.766.766.766c.424 0 .767-.343.767-.766s-.343-.766-.767-.766zm-.371-.653c-.296-.439-.738-.727-1.239-.89l-.269.825c.319.104.604.275.789.549l.719-.484zm-1.962-1.074c-.386-.095-.633-.196-.837-.46l-.686.531c.376.485.854.657 1.316.771l.207-.842zm-1.089-.955c-.109-.35-.082-.689-.018-1.052l-.854-.149c-.089.506-.11.968.044 1.459l.828-.258zm-.099-3.272l-.756.424c.17.303.166.604.112.955l.856.131c.085-.545.06-1.024-.212-1.51z"/></svg>
                            </div>
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5107.94212709985!2d14.528764459516315!3d50.19907181208313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470beeb6d356f7ed%3A0xfdbd8591bbf84d49!2zVSByeWJuw61rYSAyNTYvNywgMjUwIDY0IE3Em8WhaWNl!5e0!3m2!1scs!2scz!4v1436001316024"></iframe>
                </div>
            </div>
        </main>

        <footer id="ContactFooter">
            <?php GenerateFooter(); ?>
        </footer>
    </body>
</html>
