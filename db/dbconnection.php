<?php


$DB = new mysqli('localhost', 'root', '', 'lab-projekti');


if($DB -> connect_error){
die("Lidhja nuk u realizua.." . $DB -> connect_error);
}


?>



