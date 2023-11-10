<?php
//CLASSE DE CADASTRO
    class Cadastro{
 
        //declaração das variaveis
        private int $cpf;
        private string $nome;
        private string $telefone;
        private string $endereco;
        private string $cidade;
 
        public function __construct($cpf, $nome, $telefone, $endereco, $cidade  /* Sao parametros */)
        {
            $this->setCPF ($cpf);                                                     /* Faz referencia as variaveis criadas */
            $this->setNome ($nome);
            $this->setTelefone ($telefone);
            $this->setEndereco ($endereco);
            $this->setCidade ($cidade);
        }//Fim do construtor
 
        //Métodos modificadores e de consulta
        public function getCPF()
        {
            return $this->cpf;
        }//Fim do metodo
       
        public function getNome()
        {
            return $this->nome;
        }//Fim do metodo
       
        public function getTelefone()
        {
            return $this->telefone;
        }//Fim do metodo
       
        public function getEndereco()
        {
            return $this->endereco;
        }//Fim do metodo
       
        public function getCidade()
        {
            return $this->cidade;
        }//Fim do metodo
       
        public function setCPF($cpf)
        {
            return $this->cpf = $cpf;
        }//Fim do metodo
       
        public function setNome($nome)
        {
            return $this->nome = $nome;
        }//Fim do metodo
       
        public function setTelefone($telefone)
        {
            return $this->telefone = $telefone;
        }//Fim do metodo
       
        public function setEndereco($endereco)
        {
            return $this->endereco = $endereco;
        }//Fim do metodo
       
        public function setCidade($cidade)
        {
            return $this->cidade = $cidade;
        }//Fim do metodo

        public function imprimir(){
            $msg = "\n\nCPF: ".$this->getCPF().
                   "\nNome: ".$this->getNome().
                   "\nTelefone: ".$this->getTelefone().
                   "\nEndereço: ".$this->getEndereco().
                   "\nCidade: ".$this->getCidade(); 
            return $msg;
        }//Fim do metodos

        public function excluir(){
            $this->setCPF(0);
            $this->setNome("");
            $this->setTelefone("");
            $this->setEndereco("");
            $this->setCidade("");
            return "Dados Excluídos!";
        }//fim do método

        public function menu(){
            $men = "\nEscolha o que deseja atualizar: ".
                   "\n1. Nome".
                   "\n2. Teefone".
                   "\n3. Endereço".
                   "\n4. Cidade";
            return $men;
        }//fim do método

        public function atualizar($opcao){
            switch($opcao){
                case 1: 
                    $this->setnome($dado);
                    break;
                case 2: 
                    $this->setTelefone($dado);
                    break;
                case 3: 
                    $this->setEndereco($dado);
                    break;
                case 4: 
                    $this->setCidade($dado);
                    break;
                default:
                    return "Opção Escolhida não é válida";
            }//fim do escolha
        }//fim do método

 
    }//Fim da classe
?>