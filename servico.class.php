<?php
    //PHP8
    class Servico
    {
        //metodo construtor

        public function __construct(
            private string $descritivo = "",
            private float $preco = 0.00,
            private $atendimento = null){}       


        
         //métodos gets 
    public function getDescritivo()
    {
        return $this->descritivo;
    }

    public function getPreco()
    {
        return $this->preco;
    }
    
     
    /* métodos sets*/

    public function setDescritivo($descritivo)
    {
        $this->descritivo = $descritivo;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    
       
    }//fim da classe

    
?>