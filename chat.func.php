   
<?php


	function get_msg()
	{
	
		$query="select * from hat order by msg_id desc";
		
		$messages=array();
		$run=mysql_query($query);
		while($message=mysql_fetch_array($run))
		{
			$messages[]=array('sender'=>$message['sender'],
			                  'message'=>$message['message']);
		}
		return $messages;
	}
    function send_msg($sender,$message)
    {
            /*$sender =mysql_real_escape_string($sender);
            $message =mysql_real_escape_string($message);*/
            	$create="create table hat(msg_id int,sender varchar(30),message varchar(50))";
    mysql_query($create);
    
           $query="insert into hat values(null,'$_POST[sender]','$_POST[message]')";
    mysql_query($query);
 
            
			
            /*if($run=mysql_query($query))
            {
             return true;
            }
            else{
             return false;
            }*/
        
        
    }
?>  