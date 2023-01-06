<?php

  /**
  * @author   Błażej Skrzypniak <blazej@skrzypniak.pl>
  */

  global $l;
    
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
  <head>
    <meta charset="utf-8">
    <title><?= $l['page_title'] ?> - <?= NAME_COMPANY ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#8383ff">
    <!-- favicons -->
    <link rel="shortcut icon" href="<?= URL ?>template/<?= VIEW ?>/images/favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?= URL ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="<?= URL ?>vendor/fortawesome/font-awesome/css/all.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="<?= URL ?>template/<?= VIEW ?>/css/style.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="bg-light">
    <!-- header start -->
    <div class="header-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 text-left mt10">
            <a href="<?= URL ?>" class="logo">
              <?= NAME_COMPANY ?>
            </a>
          </div>
          <div class="col-lg-7 col-md-10 col-sm-12 col-xs-12">
            <div class="navigation">
              <div id="navigation">
                <ul>
                  <li <?php if($_SESSION['pageSite']==$l['url_start']){echo'class="active"';} else{} ?>>
                    <a href="<?= URL ?>" title="<?= $l['button_start'] ?>"><?= $l['button_start'] ?></a>
                  </li>
                  <li <?php if($_SESSION['pageSite']==$l['url_panel']){echo'class="active"';} else{} ?>>
                    <a href="<?= URL . friendly_url($l['url_panel']) ?>" title="<?= $l['button_panel'] ?>"><?= $l['button_panel'] ?></a>
                  </li>
                  <?php if (isset($_SESSION['user']['logged']) && $_SESSION['user']['logged'] == true) { ?>
                    <li class="hidden-lg hidden-md">
                      <a href="<?= URL . $l['url_panel'] . '/' . $l['url_logout'] ?>" title="<?= $l['button_logout'] ?>"><?= $l['button_logout'] ?></a>
                    </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
          <?php
            if (isset($_SESSION['user']['logged']) && $_SESSION['user']['logged'] == true) {
              echo '
                <div class="col-lg-3 text-right hidden-sm hidden-xs hello">
                  <span>' . $l['hello'] . ' <b>' . $_SESSION['user']['user_login'] . '</b>! <small>(<a href="' . URL . $l['url_panel'] . '/' . $l['url_logout'] . '" title="' . $l['button_logout'] . '">' . $l['button_logout'] . '</a>)</small></span>
                </div>
              ';
            }
          ?>
        </div>
      </div>
    </div>