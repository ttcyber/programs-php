 <?php
 include 'db/db.php';
 // Cyber Security
 echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Cyber-Security";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
echo "<hr />";
try{ 
# MySQL with PDO_MYSQL  
  $DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Game-Design";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
?>

