<?php
$mihost = $_SERVER['HTTP_HOST'];
echo "<br> EL host al que va la peticion es :" . $mihost;

$miserver = $_SERVER['SERVER_NAME'];
echo "<br> EL host al que va la peticion es :" . $miserver;

$milenguaje = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
echo "<br> EL host al que va la peticion es :" . $milenguaje;

$misript = $_SERVER['SCRIPT_NAME'];
echo "<br> EL host al que va la peticion es :" . $misript;

$minavegador = $_SERVER['HTTP_USER_AGENT'];
echo "<br> EL host al que va la peticion es :" . $minavegador;