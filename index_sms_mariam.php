<?php



	include ( "./src/NexmoMessage.php" );


	/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('c968355a', '0a7a39de0dfe5781');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( '+21693890588', 'Chikitos', ' Bienvenue chez Chikitos nous vous y répondrons aussi vite que possible Merci de nous avoir contactés' );

	// Step 3: Display an overview of the message
	echo $nexmo_sms->displayOverview($info);

	// Done!

?>