<!-- classe de cadastro -->
<?php
    class Cadastro{
        //declarando variavel
        private int    $cpf;
        private string $nome;
        private string $telefone;
        private string $endereco;
        private string $cidade;
        
        public function __construct($cpf, $nome, $telefone, $endereco, $cidade){
            $this->setCPF($cpf);
            $this->setNome($nome);
            $this->setTelefone($telefone);
            $this->setEndereco($endereco);
            $this->setCidade($cidade);
        }// fim do construtor

        //metodo modificaDORES
        //metodo get
        public function getCPF(){
            return $this->cpf;
        }//fim do método
        public function getNome(){
            return $this->nome;
        }//fim do método
        public function getTelefone(){
            return $this->telefone;
        }//fim do método
        public function getEndereco(){
            return $this->endereco;
        }//fim do método
        public function getCidade(){
            return $this->cidade;
        }//fim do método

        public function setCPF($cpf){
            $this->cpf = $cpf;
        }// fim do método
        public function setNome($nome){
            $this->nome = $nome;
        }// fim do método
        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }// fim do método
        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }// fim do método
        public function setCidade($cidade){
            $this->cidade = $cidade;
        }// fim do método

        public function imprimir(){
            $msg = "\n\nCPF:".$this->getCPF().
                    "\nNome:".$this->getNome().
                    "\nTelefone:".$this->getTelefone().
                    "\nEndereco:".$this->getEndereco().
                    "\nCidade:".$this->getCidade();
            return $msg;
        }// fim do método imprimir

        public function excluir(){
            $this->setCPF(0);
            $this->setNome("");
            $this->setTelefone("");
            $this->setEndereco("");
            $this->setCidade("");
            return "Dados excluidos!";
        }//fim do metodo

        public function menu(){
            $men = "\nEscolha o que deseja atualizar: ".
                    "\n1. Nome". 
                    "\n2. Telefone". 
                    "\n3. Endereço". 
                    "\n4. CIdade";
            return $men;
        }
        public function atualizar($opicao, $dado){
            switch($opicao){
                case 1:
                    $this->setNome($dado);
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
                    return "Opção escolhida não é válida";
                
            }// fim do metodo


        }// fim do método

    }//fim da classe

    

?>