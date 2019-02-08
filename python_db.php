<?php
  	try
  	{
  	 $dsn = "mysql:host=localhost;dbname=python";
  	 $db = new PDO ($dsn, "python_user", "python_pass");
  	 //print ("Connected\n");
  	}
  	catch (PDOException $e)
  	{
  	 print ("Cannot connect to server\n");
  	 print ("Error code: " . $e->getCode () . "\n");
  	 print ("Error message: " . $e->getMessage () . "\n");
  	}
    ?>