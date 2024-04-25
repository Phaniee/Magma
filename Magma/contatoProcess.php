<?php
require_once './model/Contato.php';
require_once './dao/ContatoDao.php';
require_once './model/Mensagem.php';

$contato = new Contato();
$msg = new Mensagem();
echo "O arquivo contatoProcess.php foi acessado.";
switch ($_POST["acao"]) {
    
    case 'SALVAR':
        $contato->setId($_POST['idContato']);
        $contato->setNome($_POST['nomeContato']);
        $contato->setSobrenome($_POST['sobrenomeContato']);
        $contato->setEmail($_POST['emailContato']);
        $contato->setMensagem($_POST['mensagemContato']);
        
        try {
            ContatoDao::insert($contato);
            $msg->setMensagem("Contato enviado com sucesso.", "bg-success");
            header("Location: home.php");
            exit(); // Adicionei a saída após redirecionar
        } catch (Exception $e) {
            $msg->setMensagem("Verifique os dados digitados.", "bg-danger");
            header("Location: contatoProcess.php");
            exit(); // Adicionei a saída após redirecionar
        } 
        break;
}
?>
