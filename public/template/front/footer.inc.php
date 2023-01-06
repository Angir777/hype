<?php

    /**
    * @author   Błażej Skrzypniak <blazej@skrzypniak.pl>
    */

?>
        <!-- footer start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12col-md-12 col-sm-12 col-xs-12 ">
                        <div class="footer-widget">
                            <h3 class="footer-title"><?= NAME_COMPANY ?></h3>
                            <div class="">
                                <ul>
                                    <li>
                                        <i class="fas fa-paper-plane"></i>
                                        <?= EMAIL_COMPANY ?>
                                    </li>
                                    <li>
                                        <i class="fas fa-language"></i>
                                        <?= $l['footer_4'] ?> 
                                        <select id="langSelect" onchange="changeLang();">
                                            <option value="pl" <?php if($_SESSION['lang']=='pl'){echo'selected="selected"';} else{} ?> ><?= $l['footer_2'] ?></option>
                                            <option value="en" <?php if($_SESSION['lang']=='en'){echo'selected="selected"';} else{} ?> ><?= $l['footer_3'] ?></option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="tiny-footer">
                            <?= $l['footer_1'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jquery -->
        <script src="<?= URL ?>template/<?= VIEW ?>/js/jquery.min.js"></script>
        <!-- navigation -->
        <script async src="<?= URL ?>template/<?= VIEW ?>/js/sticky-header.min.js"></script>
        <script async src="<?= URL ?>template/<?= VIEW ?>/js/navigation.min.js"></script>
        <script async src="<?= URL ?>template/<?= VIEW ?>/js/menumaker.min.js"></script>
        <!-- modules -->
        <?php
        // back-to-top
        include ('lib/back-to-top/loader.inc.php');
        // hover
        include ('lib/hover/loader.inc.php');
        // cookies
        include ('lib/cookies/loader.inc.php');
        // lang_switch
        include ('lib/lang_switch/loader.inc.php');
        ?>
        <!-- /modules -->
        <!-- bootstrap -->
        <script src="<?= URL ?>vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>