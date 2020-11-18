<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="fr">
  <head>
    <meta http-equiv="Content-Security-Policy" content="default-src chrome:; object-src 'none'" />
    <title>Adresse introuvable</title>
    <link rel="stylesheet" href="chrome://browser/skin/aboutNetError.css" type="text/css" media="all" />
    <!-- If the location of the favicon is changed here, the FAVICON_ERRORPAGE_URL symbol in
         toolkit/components/places/src/nsFaviconService.h should be updated. -->
    <link rel="icon" id="favicon" href="chrome://global/skin/icons/warning.svg" />
    <link rel="localization" href="browser/aboutCertError.ftl" />
    <link rel="localization" href="browser/nsserrors.ftl" />
    <link rel="localization" href="branding/brand.ftl" />
  </head>

  <body dir="ltr" class="illustrated dnsNotFound neterror">
    <!-- ERROR ITEM CONTAINER (removed during loading to avoid bug 39098) -->
    

    <!-- PAGE CONTAINER (for styling purposes only) -->
    <div id="errorPageContainer" class="container">
      <div id="text-container">
        <!-- Error Title -->
        <div class="title">
          <h1 class="title-text" data-l10n-id="dnsNotFound-title">Hum, nous ne parvenons pas à trouver ce site.</h1>
          
        </div>
        <button id="returnButton" class="primary" data-telemetry-id="return_button_top">Retour (recommandé)</button>
        <!-- LONG CONTENT (the section most likely to require scrolling) -->
        <div id="errorLongContent">

          <!-- Short Description -->
          <div id="errorShortDesc">
            <p id="errorShortDescText">Impossible de se connecter au serveur à l’adresse accounts.firefox.com.</p>
          </div>

          <div id="errorShortDesc2">
              <p id="errorShortDescText2"></p>
          </div>

          <div id="errorWhatToDoTitle">
              <p id="errorWhatToDoTitleText"></p>
          </div>

          <div id="errorWhatToDo">
              <p id="badStsCertExplanation" hidden="true"><span class="hostname"></span> a recours à une stratégie de sécurité HTTP Strict Transport Security (HSTS), une connexion sécurisée est obligatoire pour y accéder. Vous ne pouvez pas ajouter d’exception pour visiter ce site.</p>
              <p id="errorWhatToDoText"></p>
          </div>

          <div id="errorWhatToDo2">
              <p id="errorWhatToDoText2"></p>
              <p id="badStsCertExplanation" hidden="true"><span class="hostname"></span> a recours à une stratégie de sécurité HTTP Strict Transport Security (HSTS), une connexion sécurisée est obligatoire pour y accéder. Vous ne pouvez pas ajouter d’exception pour visiter ce site.</p>
          </div>

          <!-- Long Description (Note: See netError.dtd for used XHTML tags) -->
          <div id="errorLongDesc"><strong xmlns="http://www.w3.org/1999/xhtml">Si l’adresse est correcte, voici trois autres choses que vous pouvez essayer de faire :</strong>
<ul xmlns="http://www.w3.org/1999/xhtml">
  <li>Réessayer ultérieurement.</li>
  <li>Vérifier votre connexion au réseau.</li>
  <li>Si vous êtes connecté au travers d’un pare-feu, vérifier que Firefox a la permission d’accéder au Web.</li>
</ul></div>

          <div>
            <p><a id="learnMoreLink" target="new" data-telemetry-id="learn_more_link" href="https://support.mozilla.org/1/firefox/79.0/WINNT/fr/connection-not-secure">En savoir plus…</a></p>
          </div>

          <div id="openInNewWindowContainer" class="button-container">
            <p><a id="openInNewWindowButton" target="_blank" rel="noopener noreferrer">
            <button class="primary" data-l10n-id="open-in-new-window-for-csp-or-xfo-error">Ouvrir le site dans une nouvelle fenêtre</button></a></p>
          </div>
        </div>

        <!-- UI to temporarily re-enable TLS 1.0 and 1.1.
             This should be removed after March 2020, see bug 1579285.  -->
        <div id="enableTls10Container" class="button-container">
          <p>Ce site web pourrait ne pas prendre en charge le protocole TLS 1.2, qui est la version minimale prise en charge par Firefox. L’activation de TLS 1.0 et TLS 1.1 pourrait permettre d’achever la connexion.</p>
          <p>TLS 1.0 et TLS 1.1 seront définitivement désactivés dans une prochaine version.</p>
          <button id="enableTls10Button" class="primary">Activer TLS 1.0 et 1.1</button>
        </div>

        <!-- UI for option to report certificate errors to Mozilla. Removed on
             init for other error types .-->
        <div id="prefChangeContainer" class="button-container">
          <p>Ce problème semble être provoqué par vos paramètres de sécurité réseau. Voulez-vous restaurer les paramètres par défaut ?</p>
          <button id="prefResetButton" class="primary">Restaurer les paramètres par défaut</button>
        </div>

        <div id="certErrorAndCaptivePortalButtonContainer" class="button-container">
      
          <button id="openPortalLoginPageButton" class="primary">Ouvrir la page de connexion du réseau</button>
          <button class="primary try-again">Réessayer</button>
          <button id="advancedButton" data-telemetry-id="advanced_button">Avancé…</button>
        </div>
      </div>

      <div id="netErrorButtonContainer" class="button-container"><button class="primary try-again" autofocus="true">Réessayer</button>
        
      </div>

      <div id="advancedPanelContainer">
        <div id="badCertAdvancedPanel" class="advanced-panel">
          <p id="badCertTechnicalInfo"></p>
          <a id="viewCertificate" href="javascript:void(0)">Afficher le certificat</a>
          <div id="advancedPanelButtonContainer" class="button-container">
            <button id="advancedPanelReturnButton" class="primary" data-telemetry-id="return_button_adv">Retour (recommandé)</button>
            <button class="primary try-again">Réessayer</button>
            <div class="exceptionDialogButtonContainer">
              <button id="exceptionDialogButton" data-telemetry-id="exception_button">Accepter le risque et poursuivre</button>
            </div>
          </div>
        </div>

        <div id="certificateErrorReporting">
            <p class="toggle-container-with-text">
                <input type="checkbox" id="automaticallyReportInFuture" role="checkbox" />
                <label for="automaticallyReportInFuture" data-telemetry-id="auto_report_cb">Signaler les erreurs similaires pour aider Mozilla à identifier et bloquer les sites malveillants</label>
            </p>
        </div>

        <div id="certificateErrorDebugInformation">
          <button id="copyToClipboardTop" data-telemetry-id="clipboard_button_top">Copier le texte dans le presse-papiers</button>
          <div id="certificateErrorText"></div>
          <button id="copyToClipboardBottom" data-telemetry-id="clipboard_button_bot">Copier le texte dans le presse-papiers</button>
        </div>
      </div>
    </div>
  </body>
  <script src="chrome://browser/content/aboutNetError.js"></script>
</html>                   