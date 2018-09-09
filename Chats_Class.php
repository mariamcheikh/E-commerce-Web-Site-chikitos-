<?php  

class Chat 
{
	private $userID;
	private $message;



	function __construct()
	{
	 $userID=0;
	 $message="";
	}

	/****GET/SET Function****/
		function set_userID($userID)
	{
		$this->userID=$userID;
	}
		function set_message($message)
	{
		$this->message=$message;
	}

	/******Functions******/
	public function newmessage ($DB)
	{
	   $req=$DB->prepare("INSERT INTO `chats`( `user_id`, `message`) VALUES (?,?)");
	   $req->bindParam(1,$this->userID);
	   $req->bindParam(2,$this->message);
	   $req->execute();
	}
		public function chat_display($DB)
	{
		 //$req=$DB->prepare("SELECT `chat_id`, C.`user_id`, `message`, `chat_date`, `firstname` , `lastname` FROM chats C JOIN users A ON A.user_id=C.user_id ORDER BY `chat_id` LIMIT 10");
		$req=$DB->prepare("SELECT `chat_id`, C.`user_id`, `message`, `chat_date`, `firstname` , `lastname` FROM chats C JOIN users A ON A.user_id=C.user_id WHERE DATE(`chat_date`) = CURDATE()");
	     $req->execute();
	   	   while ($Row = $req->fetch())
	   	   {
	   	   	echo'                    <ul class="chat">
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/FA6F57/fff&text=CHIKTOS" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">' .$Row["lastname"].''." ".'' .$Row["firstname"].'</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>' .$Row["chat_date"].'</small>
                                </div>
                                <p>
                                   ' .$Row["message"].'
                                </p>
                            </div>
                        </li>
                    </ul>
	   	   	';
	   	   }
	   	}


}



?>