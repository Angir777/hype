<?php

  /**
  * @author   Błażej Skrzypniak <blazej@skrzypniak.pl>
  */

  // global varables
  global $lang;                   // Global language varable
  global $l;                      // Global language array
  // initiating the model
  $getRegistration = new Registration();
  $showcPanelForm = $getRegistration->getForm($l);
  // work
  $l_error = '';
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["l_name"]) OR empty($_POST["l_password"])) {
      $l_error = '<div class="alert alert-danger">'.$l['c_5'].'</div>';
    } else {
      $registrationName = check_inputs($_POST["l_name"]);
      $registrationPassword = check_inputs($_POST["l_password"]);
      $registrationPasswordConfirmation = check_inputs($_POST["l_password_confirmation"]);
      $registrationEmail = check_inputs($_POST["l_email"]);
      $infoRegistration = $getRegistration->getRegistration($registrationName, $registrationPassword, $registrationPasswordConfirmation, $registrationEmail);
      if ($infoRegistration != null) {
        $l_error = '<div class="alert alert-danger">'.$l[$infoRegistration].'</div>';
      } else {
         header('Location: '.URL.'login');
      }
    }
  }

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
    header('Location: '.URL.'panel');
  } else {
?>
<div class="space-medium single_services text-left">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-xs-12">
        <h4><?= $l['c_1'] ?></h4>
        <div class="divider additional"></div>
        <div class="header-text mt-5">
          <?php if (!empty($l_error)) { echo $l_error; } ?>
          <?= $showcPanelForm ?>
        </div>
        <a href="<?= URL ?>" class="btn btn-sm btn-default" title="<?= $l['back_link'] ?>"><?= $l['back_link'] ?></a>
      </div>
      <div class="col-md-6 col-xs-12 mt20">
        <div class="header-circle">
          <div class="header-circle-icon">
            <i class="fas fa-user-plus"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php 
  }
?>