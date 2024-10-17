<?php 
$link = mysql_connect('mysql://root:OIGuJtbmNklTWMjaJrqTCUJlOdpFmSid@junction.proxy.rlwy.net:55380/railway');
if (!$link){
	die('Não pode ser conectado: ' . mysql_error());

}
ECHO 'Conexão com sucessooo';
mysql_close($link);
?>