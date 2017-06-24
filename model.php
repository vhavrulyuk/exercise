<?php
require_once 'data.php';
$myDataSource = new Data();
$myFiles = $myDataSource->getFiles();

function fileNamesOnlyArray($filesMetaData){
    for ($i = 0; $i < count($filesMetaData); $i++)
        $fileNamesOnly[$i] = $filesMetaData[$i]['name'];
    $fileExtensionsOnly = preg_replace("#(.+)?\.(\w+)(\?.+)?#", "$1", $fileNamesOnly);
    return $fileExtensionsOnly;
}

function fileExtensionsArray($filesMetaData)
{
    for ($i = 0; $i < count($filesMetaData); $i++)
        $fileNamesOnly[$i] = $filesMetaData[$i]['name'];
    $fileExtensionsOnly = preg_replace("#(.+)?\.(\w+)(\?.+)?#", "$2", $fileNamesOnly);
    return $fileExtensionsOnly;
}
