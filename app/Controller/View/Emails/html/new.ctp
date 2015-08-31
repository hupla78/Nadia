<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Email de news</title>
    <body style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px; font-family: Trebuchet MS, Arial, Verdana, sans-serif;">

        <!-- Start Main Table -->
        <table width="100%" height="100%" cellpadding="0" style="padding: 20px 0px 20px 0px" background="http://webdesignweb.fr/sources/email-html/img/img_home3.jpg" >
            <tr align="center">
                <td>

                    <!-- Start Header -->
                    <table style="width:580px; height:108px;" background="http://webdesignweb.fr/sources/email-html/img/haut.jpg" border="0">
                        <tr>
                            <td valign="top" style="width:456px;">
                                <h1 style="font-size:22px; color:#22baba;margin-left:40px; margin-top:26px;">Email des nouveautés</h1>
                            </td>
                            <td valign="top">
                                <p style="color:#aeaeae; font-size:11px; margin-top:34px;">publié le
                                    <?php echo strftime("%d/%m/%Y")?>
                                </p>
                            </td>
                        </tr>
                    </table>
                    <!-- fin header -->


                    <!-- start image -->
                    <table cellpadding="0" cellspacing="0" width="580" background="http://webdesignweb.fr/sources/email-html/img/1px.png" style="padding:0px 0px 0px 0px;">
                        <tr>
                            <td>
                                <a href="https://fildeboheme.com" target="_blank"><img src="https://fildeboheme.com/img/logo.jpg" width="500" height="220" style="border:none;margin-left:60px;" /></a>
                            </td>
                        </tr>
                    </table>
                    <!-- end image -->

                    <!-- start texte -->
                    <table cellpadding="0" cellspacing="0" width="580" background="http://webdesignweb.fr/sources/email-html/img/1px.png" style="padding:0px 0px 0px 0px;">
                        <tr>
                            <td  style="text-align:center;">
                                <h3>
                                    <?php echo($sujet); ?>

                                </h3>
                            </td>
                        </tr>
                        <tr>
                            <td  style="color:#808080; font-size:11px; padding:0px 39px 0px 47px; text-align:justify; line-height:25px;">
                                <p>
                                    <?php echo($text); ?>
                                </p>
                            </td>
                        </tr>
                        <tr>

                            <td>
                                <a href="https://fildeboheme.com" target="_blank"><img src="http://galerie.alittlemarket.com/galerie/product/88680/trousses-pochette-pm-black-chic-suedine-noi-13288293-black-chic-ed7cd7cb-5c9a7_570x0.jpg" width="230" height="162" style="border:none;margin-left:60px;" /></a>
                            </td>

                        </tr>
                    </table>
                    <!-- end texte -->



                    <!-- début footer -->
                    <table style="width:580px; height:148px;" width="580" cellpadding="0" cellspacing="0" background="http://webdesignweb.fr/sources/email-html/img/bas.jpg" style="padding:0px 0px 0px 0px;">
                        <tr>
                            <td>
                                <a href="https://fildeboheme.com/Users/inscription" target="_blank" style="margin-left: 107px;border:none;"><img src="http://webdesignweb.fr/sources/email-html/img/rond.jpg" style="border:none" width="132" height="131" /></a>
                            </td>
                            <td>
                                <a href="https://twitter.com/fildeboheme" style="border:none" target="_blank"><img src="http://webdesignweb.fr/sources/email-html/img/twitter.jpg" width="52" height="41"  style="border:none" /></a>
                                <a href="https://www.facebook.com/fildeboheme?fref=ts" target="_blank" style="margin-left: 17px; border:none;"><img src="http://webdesignweb.fr/sources/email-html/img/fb.jpg" style="border:none" width="52" height="44" /></a>
                            </td>
                        </tr>
                    </table>
                    <!-- fin du footer -->
                </td>
            </tr>
        </table>

    </body>
</html>

