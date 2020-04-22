<?php
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    if (strpos($userAgent, 'Instagram')) {
        
	$file = 'testing.txt';

	header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename= blablabla');
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');
        @readfile($file);
    }
    else{
        header('Location: https://test-in-app-browser.herokuapp.com/');
    }
?>
