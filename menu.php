<?php
require_once 'config.php';
?>
<ul class="menu">
    <?php foreach($menu as $key => $value): ?>
        <li><a href="<?php echo BASEURL . $key ?>.php"><?php echo $value ?></a></li>
    <?php endforeach ?>
</ul>
