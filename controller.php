<?php
require 'model.php';
$myFileNames = fileNamesOnlyArray($myFiles);
$myExtensions = fileExtensionsArray($myFiles);
$mySizes = fileSizesArray($myFiles);
$myFileNameExcerpts = fileNameExcerpts($myFileNames);

