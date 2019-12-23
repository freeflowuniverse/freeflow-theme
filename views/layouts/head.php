<!-- start: Web App Data-->
<link rel="manifest" href="<?= $this->theme->getBaseUrl(); ?>/ico/manifest.json">
<meta name="application-name" content="<?= \yii\helpers\Html::encode(Yii::$app->name) ?>">
<!-- end: Web App Data-->

<!-- start: Favicon and Touch Icons -->
<link rel="apple-touch-icon" sizes="57x57" href="<?= $this->theme->getBaseUrl(); ?>/ico/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?= $this->theme->getBaseUrl(); ?>/ico/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?= $this->theme->getBaseUrl(); ?>/ico/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?= $this->theme->getBaseUrl(); ?>/ico/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?= $this->theme->getBaseUrl(); ?>/ico/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?= $this->theme->getBaseUrl(); ?>/ico/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?= $this->theme->getBaseUrl(); ?>/ico/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?= $this->theme->getBaseUrl(); ?>/ico/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?= $this->theme->getBaseUrl(); ?>/ico/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="<?= $this->theme->getBaseUrl(); ?>/ico/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?= $this->theme->getBaseUrl(); ?>/ico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?= $this->theme->getBaseUrl(); ?>/ico/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= $this->theme->getBaseUrl(); ?>/ico/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?= $this->theme->getBaseUrl(); ?>/ico/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!-- end: Favicon and Touch Icons -->

<!-- start: Apple Fullscreen and Webapp Title -->
<meta name="apple-mobile-web-app-title" content="<?= \yii\helpers\Html::encode(Yii::$app->name) ?>" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<!-- end: Apple Fullscreen and Webapp Title -->

<!-- start: Android Fullscreen -->
<meta name="mobile-web-app-capable" content="yes">
<!-- end: Android Fullscreen -->

<!-- OpenGraph Metadata & Metadata -->
<meta property="og:title" content="FreeFlowPages">
<meta property="og:description" content="FreeFlowPages is a decentralised, private, and open source social space where you own and control your privacy & personal data.">
<meta property="og:image" content="<?= $this->theme->getBaseUrl(); ?>/ico/android-icon-192x192.png">
<meta property="og:url" content="<?= $this->theme->getBaseUrl(); ?>">
<meta name="twitter:title" content="FreeFlowPages">
<meta name="twitter:description" content="FreeFlowPages is a decentralised, private, and open source social space where you own and control your privacy & personal data.">
<meta name="twitter:image" content="<?= $this->theme->getBaseUrl(); ?>/ico/android-icon-192x192.png">
<meta name="twitter:card" content="FreeFlowPages">
<meta name="twitter:url" content="<?= $this->theme->getBaseUrl(); ?>">
<meta name="keywords" content="ThreeFold, FreeFlowPages , ThreeFold Grid, ThreeFold Token, 3Bot, Autonomous Internet, Decentralized, Decentralization">
<meta name="description" content="FreeFlowPages is a decentralised, private, and open source social space where you own and control your privacy & personal data.">

<?php if ((Yii::$app->request->get('crisp') !== 'false') && ( !isset($_COOKIE["crisp"])|| $_COOKIE["crisp"] === 'true')) : ?>
<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="1a5a5241-91cb-4a41-8323-5ba5ec574da0";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
<?php endif; ?>

