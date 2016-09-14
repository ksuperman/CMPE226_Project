<?php
   define('DB_SERVER', 'localhost:3306');
   define('DB_USERNAME', 'datafreaks');
   define('DB_PASSWORD', 'sesame');
   define('DB_DATABASE', 'onlineshopping');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>