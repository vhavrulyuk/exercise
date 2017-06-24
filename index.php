<?php
get_header();
?>

<?php
require 'controller.php';

for ($i = 0; $i < count($myFiles); $i++) {
    echo '<div class="fileInfoBox">';
    echo '<div class="fileNameBox"><div class="fileData">';
    echo'.'.$myExtensions[$i]. "<span class='fileSize'>&nbsp;(".$myFiles[$i]['size'].")";
    echo '</span></div>'.$myFileNames[$i].'</div>';
    echo '</div>';
}
?>

<?php
get_footer();
?>
