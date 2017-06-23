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

function fileSizesArray($filesMetaData)
{
    for ($i = 0; $i < count($filesMetaData); $i++)
        $fileSizesOnly[$i] = $filesMetaData[$i]['size'];
    return $fileSizesOnly;
}

function fileNameExcerpts(Array $filesMetaData)
{
    $num_chars = 15;

    for ($i = 0; $i < count($filesMetaData); $i++) {
        $currentElement =$filesMetaData[$i];
        if (strlen( $currentElement) > $num_chars) {
            $excerpt[$i] =  $currentElement;
            $excerpt[$i] = substr($excerpt[$i], 0, $num_chars);
            $excerpt[$i] = $excerpt[$i] . '... ';
        }
        else $excerpt[$i] =  $currentElement;
    }
    return $excerpt;
}
