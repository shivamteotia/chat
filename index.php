  <?php
	require('core.inc.php');
	if(isset($_POST['send'])){
		if(send_msg($_POST['sender'],$_POST['message'])){
			echo"Message sent";
			
		}else
			echo"";
	}
?>
<!DOCTYPE HTML>
<html lang="en">
<head><title>chat appliation</title>

<link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
<div id="input">
<form action="index.php" method="post">
	<lable>Enter Name:<input type="text" name="sender"/></lable></br>
	<lable>Enter Message:<br><input type="text" name="message" size="20"/><lable><br/>
	<input type="submit" name="send" value="send message"/>
</form> 
</div>
<div id="messages">
<?php


$messages=get_msg();
	foreach($messages as $message){
		echo '<strong>'.$message['sender']." Sent</strong><br>";
		echo $message['message']."<br><br>";
	}
?>
</div>

<!-- javascript-->
<script type="text/javascript" scr="jquery-1.12.3.min"></script>
<script type="text/javascript" scr="auto_chat.js"></script>
</body>
</html>
