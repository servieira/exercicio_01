<?php
    //PHP8
    class Proprietario extends Pessoa
    {
        //metodo construtor

        public function __construct(
            private string $cpf = "", $nome, $telefone, 
            private array $cachorro = array())
        {
            parent:: __construct($nome, $telefone);
        }     
          



        
         //métodos gets 
    public function getCpf()
    {
        return $this->cpf;
    }

    private function getCachorro()
    {
        return $this->cachorro;
    }

    

       

    /* métodos sets*/

    public function setCpf($cnpj)
    {
        $this->cpf = $cpf;
    }

    private function setCachorro($cachorro)
    {
        $this->cachorro[] = $cachorro;
    }


       
    }

    
?>