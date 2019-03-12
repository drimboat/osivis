<?php 
	if(!empty($_POST["name"]) && !empty($_POST["email"]) && $_POST["email"] !empty($_POST["message"]))
		$name = $_POST["name"];
		$email = $_POST["email"];
		$message = $_POST["message"];
		$stuffs = "$name\n$message\nFrom: $email";
		$headers = "";
		mail("contact@osivis.com","contact@osivis.com",$stuffs, $headers);
		echo "Your message was sent successfully";
	}else{
		echo "Some fields weren't filled in correctly.";
	}
//E-mail verification..
?>