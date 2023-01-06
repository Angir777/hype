<?php

  /**
  * @author   Błażej Skrzypniak <blazej@skrzypniak.pl>
  */

  // global varables
  global $lang;                   // Global language varable
  global $l;                      // Global language array
  // initiating the model
  $getPanel = new Panel();
  // urls
  $requestURI = explode('/', strtolower(substr($_SERVER['REQUEST_URI'], 1)));
  $pageName = (string) $requestURI[0];
  $pagination = '';
  if ($requestURI[1]==$l['pagination_page']){ $pagination = (int) $requestURI[2]; }
  
?>
<div class="space-medium bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="section-title">
          <h1><?= $l['c_1'] ?></h1>
          <div class="divider"></div>
          <p></p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  if (isset($_SESSION['user']['logged']) && $_SESSION['user']['logged'] == true) {
?>
<div class="single_services text-left mt30 mb20">
  <div class="container">
    <div class="row">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th><?= $l['c_2'] ?></th>
            <th><?= $l['c_3'] ?></th>
          </tr>
        </thead>
        <tbody>
          <?= $getPanel->getUsers($pagination, $pageName, $l) ?>
        </tbody>
      </table>
      <a href="<?= URL ?>" class="btn btn-sm btn-default" title="<?= $l['back_link'] ?>"><?= $l['back_link'] ?></a>
    </div>
  </div>
</div>
<?php 
  } else {
    header('Location: '.URL.'login');
  }
?>