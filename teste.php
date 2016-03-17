<?php
include 'model/Usuario.php';

$user = new Usuario();
echo $user->testaConexao();