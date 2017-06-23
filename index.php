<?php
get_header();
?>

<?php
require 'controller.php';

for ($i = 0; $i < count($myFiles); $i++) {

    echo '<div class="fileInfoBox"><div class="fileNameBox">';
    echo $myFileNameExcerpts[$i].'.'.$myExtensions[$i];
    echo '</div><div class="fileSize">';
    echo "&nbsp;(".$myFiles[$i]['size'].")" ;
    echo'</div><div class="clear-both"></div></div>';
}
?>

<?php
get_footer();
?>
