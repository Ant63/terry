<!doctype html>
<html>

<head>
  <!-- Google Tag Manager -->
  <script type="text/plain" data-cookieconsent="statistics">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TL8TZLP');</script>
  <!-- End Google Tag Manager -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1" />
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="d66aa232-dc44-4115-bf7c-4e124f351346" type="text/javascript" async></script>
  <?php print $styles; ?>
  <link rel="stylesheet" type="text/css" media="only screen and (min-width:50px) and (max-width:479px)" href="/sites/all/themes/tfc/css/mobile.css">
  <link rel="stylesheet" type="text/css" media="only screen and (min-width:480px) and (max-width:767px)" href="/sites/all/themes/tfc/css/tablet.css">
  <link rel="stylesheet" type="text/css" media="only screen and (min-width:768px) and (max-width:959px)" href="/sites/all/themes/tfc/css/portrait.css">
  <?php print $scripts;  ?>
</head>

<body class="<?php print $classes; ?>" <?php print $attributes; ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe data-src="https://www.googletagmanager.com/ns.html?id=GTM-TL8TZLP" data-cookieconsent="preferences" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

  <script>
    /* <![CDATA[ */
    document.write('<img src="https://marketing.terryforsey.com/acton/bn/3517/visitor.gif?ts=' + new Date().getTime() + '&ref=' + escape(document.referrer) + '">');
    var aoAccountId = '3517';
    var aoCookieMode = 'STANDARD';
    var aoCookieDomain = 'terryforsey.com';
    var aoServerContext = 'https://marketing.terryforsey.com/acton';
    /* ]]> */
  </script>
  <!-- This is the load issue -->

  <script>
    window.addEventListener("load", pageFullyLoaded, false);

    function pageFullyLoaded() {
      const marketingScript = document.createElement("script");
      marketingScript.setAttribute("src", "https://marketing.terryforsey.com/acton/js/sfga.js");
      document.body.appendChild(marketingScript);
    }
  </script>
  <!-- End of load issue -->

  <script>
    if (document.cookie.indexOf("aoOref") == -1) {
      var aoDate = new Date;
      aoDate.setYear(aoDate.getFullYear() + 1);
      document.cookie = "aoOref=" + btoa(document.referrer ? document.referrer : "unavailable") + ";expires=" + aoDate.toGMTString() + ";domain=." + (location.host.match(/([^.]+)\.\w{2,3}(?:\.\w{2})?$/) || [])[0] + ";path=/";
    }
  </script>

  <script>
    /* <![CDATA[ */
    var google_conversion_id = 1072287139;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
  </script>

  <script src="//www.googleadservices.com/pagead/conversion.js"></script>

  <noscript>
    <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1072287139/?value=0&amp;guid=ON&amp;script=0" />
    </div>
  </noscript>

  <script type="text/plain" async="async" data-cookieconsent="statistics"> _linkedin_data_partner_id = "25216";</script>

  <script type="text/plain" async="async" data-cookieconsent="statistics">(function(){var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(); </script>

  <noscript>
    <img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=25216&fmt=gif" />
  </noscript>

  <!-- begin Moneypenny code -->
  <script type="text/plain" async="async" data-cookieconsent="preferences">(function() {var se = document.createElement("script"); se.type = "text/javascript"; se.async = true; se.src = "//storage.googleapis.com/moneypennychat/js/1942a96e-c5e1-4540-8613-a39da762ee28.js"; var done = false; se.onload = se.onreadystatechange = function() {if (!done&&(!this.readyState||this.readyState==="loaded"||this.readyState==="complete")) {done = true;var seAgent;Moneypenny.setCallback('StartChat', function(email, msg, type) { if (type == 'proactive') { ga('send','event','Moneypenny', 'proactiveEngaged', 'Proactive Start Chat');}});Moneypenny.setCallback('StartChat', function(msg) { ga('send','event','Moneypenny', 'proactiveEngaged', 'Manual Start Chat');});}};var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(se, s);})();</script><!-- end Moneypenny code -->

</html>