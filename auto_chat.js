$(document).ready(function(){
	var interval=setInterval(fnction(){
	$.ajax({
	url:'chat.php',
	success:function(data){
		$('#messages').html(data);
	}
	})
	},1000);

});