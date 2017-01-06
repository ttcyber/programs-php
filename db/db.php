<?php
   $host = "localhost";
   $database = "ttcompsci";
   $user = "ttcompsci";
   $pass = "he322sb5x";
	
  	function clean($input, $maxlength)
 	{
     $input = substr($input, 0, $maxlength);
    $input = EscapeShellCmd($input);
   return ($input);
  }
?>
