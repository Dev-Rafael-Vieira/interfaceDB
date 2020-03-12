<?php

/*  
    embora não seja possível incluir variáveis é possível incluir constantes
    em interfaces, pra usar essas constantes é nescessário utilizar o 
    operador de resolução de escopo (::), este operador é utilizado para 
    permitir acesso a essas constantes!
*/

Interface IConnected {
    const HOST = "localhost";
    const UNAME = "root";
    const DBNAME = "interfacemsql";
    const PW = "";

    function testConnection();
}

// uma interface não pode ser instanciada diretamente
?>