<?php

    /**
    * Module: cookies
    */

?>
<!-- cookies -->
<link rel="stylesheet" href="<?php echo URL; ?>template/<?= VIEW ?>/lib/cookies/css/cookieconsent.min.css">
<script async src="<?php echo URL; ?>template/<?= VIEW ?>/lib/cookies/js/cookieconsent.min.js"></script>
<script>
    window.addEventListener("load", function(){
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "#edeff5",
                    "text": "#404040"
                },
                "button": {
                    "background": "#99db4d",
                    "text": "#ffffff"
                }
            },
            "position": "bottom-left",
            "content": {
                "message": "<?= $l['cookies_text'] ?>",
                "dismiss": "<?= $l['cookies_button_ok'] ?>",
                "link": "",
                "href": ""
            }
        })
    });
</script>