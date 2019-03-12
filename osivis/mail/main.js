var xhr = false;
function submitContact(){
	if(window.XMLHttpRequest){
		var xhr = new XMLHttpRequest();
		var name = window.encodeURIComponent(document.getElementById("contact_name").value);
		var email = window.encodeURIComponent(document.getElementById("contact_email").value);
		var message =  window.encodeURIComponent(document.getElementById("contact_message").value);
		xhr.onreadystatechange = function(){
			if(xhr.readyState == 4){
				if(xhr.status == 200){
					document.getElementById("myModalLabel").innerText = "Message Sent";
					document.getElementById("myModalBody").innerText = xhr.responseText;
					$('#launchModal').click();
				}else{
					document.getElementById("myModalLabel").innerText = "Error while sending message";
					document.getElementById("myModalBody").innerText = "Error while sending message";
					$('#launchModal').click();
				}
			}
		};
		xhr.open("POST","http://www.osivis.com/mail/index.php?name="+name+"&email="+email+"&message="+message);
		xhr.send(null);		
	}
}
