<?php
$ws =str_replace('uniqueS":{','window.screen":{'."\n", 
		json_encode( 
			array( 'uniqueS' => json_decode( $_POST["wscreen"] ), 'uniqueN' => json_decode( $_POST["wnavigator"] ) ) 
		) 
	);
$ws = str_replace( 'uniqueN', 'window.navigator', $ws );

$t = str_replace( '.', '', microtime().'' );
$t = str_replace( ' ', '', $t );

file_put_contents('fingerprints/javascript'.$t.'.txt', $ws);
file_put_contents('fingerprints/http-headers'.$t.'.txt', $_POST["http"]);

echo 'success';
?>