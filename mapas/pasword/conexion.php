<?php
function conectar()
{
	mysql_connect("192.168.1.205", "py_user", "py*_2012full.");
	mysql_select_db("proyectos");
}

function desconectar()
{
	mysql_close();
}
?>