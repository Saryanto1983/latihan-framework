<?php
    echo heading('Hi!',3);
    echo ul(array('Ini List 1','Ini List 2'));

    $image_properties = array(
        'src' => 'https://sman1bdg.sch.id/wp-content/uploads/2019/04/LOGO-SMANSA.png',
        'alt' => 'STMIK Jabar',
        'width' => '100',
        'height' => '100'
    );

    echo img($image_properties);