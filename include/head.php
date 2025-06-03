<?php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$folder = '/thedevcristian/'; // Leave blank if you're in root domain

// If your site is in a subfolder (e.g. https://domain.com/thedevcristian), set $folder = '/thedevcristian';
$base_url = $protocol . '://' . $host . $folder . '/';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $url = $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
        $config = [ 'thedevcristian.com/index.php' => ['ga_code' => 'G-8VF13D6VR2' ],
  ];
  ?>
  
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $config[$url]['ga_code']; ?>"></script>
        <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
          dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', '<?php echo $config[$url]['ga_code']; ?>');
      </script>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=7">
  <meta name="description"
    content="thedevcristian - Portfolio website of Cristian, a web developer specializing in front-end development.">
  <meta name="keywords" content="thedevcristian, portfolio, webdevelopment, frontend, developer">

  <link rel="shortcut icon" href="<?=$base_url ?>assets/images/ico/tdc.png" type="image/x-icon">

  <title>Cristian Paul Castañeda</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="<?=$base_url ?>assets/css/normalize.css">
  <link rel="stylesheet" href="<?=$base_url ?>assets/css/misc.css">
  <link rel="stylesheet" href="<?=$base_url ?>assets/css/blog-style.css">
  <link rel="stylesheet" href="<?=$base_url ?>assets/css/style.css">
</head>