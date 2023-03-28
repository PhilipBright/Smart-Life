<?php
   
    // $connection = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
    // $db_select = mysqli_select_db($connection, DB_NAME) or die(mysqli_error($connection));
    //
     try{
        $db = new PDO("mysql:host=localhost;dbname=Ecommerce","root","");
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    }catch (PDOException $e){
        echo $e->getMessage();
    }

?>