<?php
try{$connect=new pdo('mysql:host=localhost;dbname=projet_r&d','root','');}
catch(Exception $e){die('Erreur:'.$e->getMessage());}
?>