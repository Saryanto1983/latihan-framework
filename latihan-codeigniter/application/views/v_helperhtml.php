<?php
    echo heading('Hi!',3);
    echo ul(array('Ini List 1','Ini List 2'));

    $image_properties = array(
        'src' => 'https://eventkampus.com/data/sekolah/168-1.jpeg',
        'alt' => 'STMIK Jabar',
        'width' => '100',
        'height' => '100'
    );

    echo img($image_properties);