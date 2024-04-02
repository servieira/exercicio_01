<?php
    //PHP8
    class Atendimento
    {
        //metodo construtor

        public function __construct( private string $DataAtendimento = "", 
        private $cachorro = null,          
        private array $servico = array()){}       

       
         //métodos gets 
    public function getDataAtendimento()
    {
        return $this->DataAtendimento;
    }

    
    public function getServico()
    {
        return $this->servico;
    }

    public function getCachorro()
    {
        return $this->cachorro;
    }
     
    /* métodos sets*/

    public function setDataAtendimento($cnpj)
    {
        $this->dataAtendimento = $DataAtendimento;
    }

    

    public function setServico($servico)
    {
        $this->servico[] = $servico;
    }

    public function setCachorro($cachorro)
    {
        $this->cachorro = $cachorro;
    }
    }//fim da classe

    
?>