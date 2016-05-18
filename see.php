<?php

	function send_msg($sender,$message)
	{
		if(!empty($sender) && !empty($message))
		{
			
			$sender  =mysql_real_escape_string($sender);
			$message =mysql_real_escape_string($message);
			
			$query="insert into 'shivam'.'chat' values(null,'{$sender}','$message');
			if($run=mysql_query($query))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		    {
			    return false;
		    }
	}
	
?>