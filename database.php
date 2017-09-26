<?php
   $dsn = 'localhost';
   $username = 'mgs_user';
   $password = "pa55word";
   $dbname = 'shopDB';

   $db = new mysqli($dsn, $username, $password, $dbname);
   
   if(mysqli_connect_error())
    {
        echo '<p>Error: could not connect to DB.<br/> Please try later.</p>';
        include('database_error.php');
        exit();
    }
?>