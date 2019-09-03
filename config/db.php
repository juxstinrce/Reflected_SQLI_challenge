<?php

try

{

$db = new PDO('mysql:host=localhost;dbname=challenge', 'root', '');

}

catch (Exception $e)

{

        die('Erreur : ' . $e->getMessage());

}

?>