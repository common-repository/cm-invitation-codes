<?php

use com\cminds\registration\App;

?>
<div class="cm-licensing-box"><?php echo do_shortcode(App::isPro() ? '[cminds_free_ads id="'. App::PREFIX .'"]' : ''); ?></div>