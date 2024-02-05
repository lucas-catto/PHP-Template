<?php

$data = ['name'=>'lucas', 'age'=>'16'];

ob_start();

extract($data);

require ('home.php');

echo 'Home';

$content = ob_get_contents();

ob_end_clean();

var_dump($content);
