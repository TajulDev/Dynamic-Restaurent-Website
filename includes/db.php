<?php
// database connected start

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE_NAME", "restoran");
 $db_connect = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE_NAME);//connected to the database(lion)
    if(mysqli_connect_errno()){
        echo "<h1> There is Something Wrong!</h1>";
    }
    // database connected END

?>