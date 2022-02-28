<?php
session_start();
if(!array_key_exists('ultimo_login', $_SESSION)){
	$_SESSION['ultimo_login'] = date('H:i:s d/m/Y');
}
if(!array_key_exists('reqs', $_SESSION)){
	$_SESSION['reqs'] = 1;
} else {
	$_SESSION['reqs']++;
}

if($_SESSION['reqs'] == 20){
	echo '<h1>Você ganhou um prêmio!</h1>';
} 


//echo '<p><strong><u>Sessoes</u></strong></p>';
//echo '</br>' .'</br>' ;

?>

<p><strong><u>Sessoes</u></strong></p>
</br></br>

<p>
A sua sessão foi iniciada em 
<?php echo $_SESSION['ultimo_login']?> 
e você já fez 
<?php echo $_SESSION['reqs']?> requisições
</p>