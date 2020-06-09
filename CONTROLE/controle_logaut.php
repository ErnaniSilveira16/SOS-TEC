<?php
session_start();
//desconectano o vagabundo
unset($_SESSION['usuario']);
//tente outra vez 
header('Location:/Login/');