<?php
$user = array("aleon", "jgonzales", "ctorres", "gcubillos");
$pass = array("1234", "gonzales1", "1_2torres", "gcub1");

if(in_array($_POST['user'], $user) && in_array($_POST['password'], $pass)){
    echo "Bienvenido sus datos son correctos";
}else{
    echo "Datos incorrectos";
}

?>
