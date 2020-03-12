<?php

include_once('IConnectMethod.php');

class ConnSQL implements IConnected {
    private $server=IConnected::HOST;
    private $currentDB=IConnected::DBNAME;
    private $user=IConnected::UNAME;
    private $password=IConnected::PW;

    public function testConnection() {
        $hookup=new mysqli($this->server, $this->user, $this->password, $this->currentDB);

        if (mysqli_connect_error()){
            die('falha ao tentar conexão com o banco de dados');
        }

        
        print "Voçê etá conectado a base de dados! </br>" . $hookup->host_info;

        $hookup->close();
    }

}

$useConstant = new ConnSQL();
$useConstant->testConnection();

?>