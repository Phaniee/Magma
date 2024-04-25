<?php 
    class Contato{
        public $id, $nome,$sobrenome, $email, $mensagem;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this-> id = $id;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this-> nome = $nome;
        }
        public function getSobrenome(){
            return $this->sobrenome;
        }
        public function setSobrenome($sobrenome){
            $this-> sobrenome = $sobrenome;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this-> email = $email;
        }
        public function getMensagem(){
            return $this->mensagem;
        }
        public function setMensagem($mensagem){
            $this-> mensagem = $mensagem;
        }
      
    }




?>