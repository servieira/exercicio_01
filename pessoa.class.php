<?php
    //PHP8
    class Pessoa
    {
        //metodo construtor

        public function __construct(protected string $nome = "", protected $telefone = ""){}   
        
        

         //métodos gets 
    public function getNome()
    {
        return $this->nome;
    }

    public function getTelefone()
    {
       return $this->telefone;
    }

       

    /* métodos sets*/

    public function setNome($cnpj)
    {
        $this->nome = $nome;
    }

    public function setTelefone($razao_social)
    {
        $this->telefone = $telefone;
    } 

    

       
    }//fim da classe

    
?>