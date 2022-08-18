<?php  
    class persona{
        public $nome;
        public $cognome;
        public $eta;
        //Costruttore
        function __construct($nome, $cognome){
            $this->nome = $nome;
            $this->cognome = $cognome;
        }
        
        //Get e Set
        function set_nome($nome){
            $this->nome = $nome;
        }
        function get_nome(){
            return $this->nome;
        }
        
        function set_cognome($cognome){
            $this->cognome = $cognome;
        }
        function get_cognome(){
            return $this->cognome;
        }

        function set_eta($eta){
            $this->eta = $eta;
        }
        function get_eta(){
            return $this->eta;
        }

        //Metodi
        function saluto(){
            echo "ciao sono $this->nome $this->cognome";   
        }
    }

$persona1 = new persona("Mario" , "Rossi");
$persona1->set_eta(12);
echo $persona1->get_nome();
//$persona1->saluto();
var_dump($persona1);