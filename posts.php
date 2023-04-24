#!/usr/local/bin/php
<?php

    $file=fopen('posts.txt','a') or die ('error');
	$string='<p><b>'.$_POST['author'].' </b> says: '. nl2br($_POST['content']).'</p>'.'<br>';
	fwrite($file, $string);
	fclose($file);
 


?>

