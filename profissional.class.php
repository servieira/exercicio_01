<?php
    //PHP8
    class Profissional extends Pessoa
    {
        //metodo construtor

        public function __construct(private string $crmv = "", $nome, $telefone, private array $atendimento = array())
        {
            parent:: __construct($nome, $telefone);
        }      

       
         //métodos gets 
    public function getCrmv()
    {
        return $this->crmv;
    }
    public function getAtendimento()
    {
        return $this->Atendimento;
    }

    
       

    /* métodos sets*/

    public function setCrmv($cnpj)
    {
        $this->crmv = $crmv;
    }

    public function setAtendimento($dataAtendimento)
    {
        $this->Atendimento[] = $Atendimento;
    }

    
    }//fim da classe

    
?>