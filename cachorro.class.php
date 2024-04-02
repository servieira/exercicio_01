<?php
    //PHP8
    class Cachorro
    {
        //metodo construtor

        public function __construct(
            private string $nome = "", 
            private string $cor = "",        
            private string $raca = "", 
            private string $data = "", 
            private $proprietario = null){}
                 


        
         //métodos gets 
    public function getNome()
    {
        return $this->nome;
    }

    public function getCor()
    {
       return $this->cor;
    }

    public function getRaca()
    {
       return $this->raca;
    }

    public function getDataNascimento()
    {
       return $this->data;
    }
    public function getProprietario()
    {
       return $this->proprietario;
    }

   


       

    /* métodos sets*/

    public function setNome($cnpj)
    {
        $this->nome = $nome;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    } 

    public function setRaca($raca)
    {
        $this->raca = $raca;
    } 

    public function setDataNascimento($data)
    {
        $this->data = $data;
    } 

    public function setProprietario($proprietario)
    {
        $this->proprietario = $proprietario;
    } 
    
       
    }//fim da classe

    
?>