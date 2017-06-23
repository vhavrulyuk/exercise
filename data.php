<?php

class Data {
    private $files = array(
        array(
            'name' => 'Detailed Brief - www.mysite.com.pdf',
            'size' => '1.4MB',
        ),
        array(
            'name' => 'Pure WordPress theme.zip',
            'size' => '735.9KB',
        ),
        array(
            'name' => 'Logotype.jpg',
            'size' => '94.7KB',
        ),
    );

    /**
     * @return array
     */
    public function getFiles()
    {
        return $this->files;
    }
}