<?php
$location = realpath(dirname(__FILE__));
require_once $location . '/ritchey_marked_text_to_html_i1_v21.php';
$return = ritchey_marked_text_to_html_i1_v21("{$location}/temporary/source.txt", "{$location}/temporary/destination.html", "{$location}/custom_dependencies/ritchey-general-theme-v2.css", TRUE, TRUE);
if ($return === TRUE){
	echo "TRUE" . PHP_EOL;
} else {
	echo "FALSE" . PHP_EOL;
}
?>