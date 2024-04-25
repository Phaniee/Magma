<?php  

require_once (__DIR__ . '../../model/Conexao.php');


    class ContatoDao{
        public static function insert($contato){
            $id = $contato->getId();
            $nome = $contato->getNome();
            $sobrenome = $contato->getSobrenome();
            $email = $contato->getEmail();
            $mensagem = $contato->getMensagem();
        
            $conn = Conexao::conectar(); // Estabeleça a conexão com o banco de dados
            
            $stmt = $conn->prepare("INSERT INTO tbcontato (idContato, nomeContato,sobrenomeContato, emailContato, mensagemContato) 
                            VALUES (:id, :nome,:sobrenome, :email, :mensagem)");
        
            $stmt->bindParam(':id', $id);        
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':sobrenome', $sobrenome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':mensagem', $mensagem);
        
            $result = $stmt->execute();
        
            if ($result) {
                return true; // Inserção bem-sucedida
            } else {
                return false; // Erro na inserção
            }
        }
        
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbcontato";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        

        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbcontato WHERE idContato = :id";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':id', $id,  PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }

        public static function delete($cod){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbcontato WHERE idContato = :id";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':id', $id);
            return  $stmt->execute();

        }

        public static function update($id, $contato){
            $conexao = Conexao::conectar();
        
            $query = "UPDATE tbcontato SET 
                nomeContato = :nome,
                sobrenomeContato = :sobrenome, 
                emailContato = :email, 
                mensagemContato = :mensagem
                WHERE idContato = :id";
            
            $stmt = $conexao->prepare($query);
        
            // Atribuir os valores a variáveis antes de chamar bindParam
            $id = $contato->getId();
            $nome = $contato->getNome();
            $sobrenome = $contato->getSobrenome();
            $email = $contato->getEmail();
            $mensagem = $contato->getMensagem();
               
            $stmt->bindParam(':id', $id);        
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':sobrenome', $sobrenome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':mensagem', $mensagem);
        
            return $stmt->execute();

        }
    }


?>