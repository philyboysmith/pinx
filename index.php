<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pinx | a better way to explore your pins</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- google fonts -->
    <!-- site style -->
    <link href="css/outline.min.css" media="all" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div class="container">
      <img src="img/logo.svg" alt="Pinx" style="width: 66%; max-width: 300px"/>
      <h1>a better way to explore your pins.</h1>
      <?php if(isset($_GET['code'])){ ?>
      <a href="pinx://authorize?code=<?php echo $_GET['code']; ?>">
        <img src="img/return.svg" alt="return to pinx">
      </a>
      <?php } else { ?>
      <a href="https://itunes.apple.com/us/app/pinx/id1243677684?ls=1&mt=8">
        <img src="img/download.svg" alt="">
      </a>
      <a href="https://play.google.com/store/apps/details?id=uk.co.amillionmonkeys.pinx">
        <img style="height: 40px; width: auto; margin-left: 8px;" src="https://lh3.googleusercontent.com/q1k2l5CwMV31JdDXcpN4Ey7O43PxnjAuZBTmcHEwQxVuv_2wCE2gAAQMWxwNUC2FYEOnYgFPOpw6kmHJWuEGeIBLTj9CuxcOEeU8UXyzWJq4NJM3lg=s0" alt="">
      </a>
      <?php } ?>
      <p><a id="privacy" href="/privacy-policy">Privacy Policy</a></p>
    </div>
  </body>
  <style>
    #privacy {
      color: white;
      text-decoration: underline;
      display: block;
      padding: 12px 0;
    }
  </style>
</html>