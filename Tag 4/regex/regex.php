<?php

$email = 'hans.muster@gmail.com';
$pattern = '/^[a-z0-9_\-\.]+@[a-z0-9_\-\.]{2,}\.[a-z]{2,4}$/i/';

if (preg_match($email, $pattern)) {
	echo 'yes';
} else {
	echo 'no';
}

?>