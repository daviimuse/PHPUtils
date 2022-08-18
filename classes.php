<?php  
    class user{
        public $name;
        public $surname;
        public $age;
        //Constructor
        function __construct($name, $surname){
            $this->name = $name;
            $this->surname = $surname;
        }
        //Get and set
        function set_age($age){
            $this->age = $age;
        }
        function get_age(){
            return $this->age;
        }
        //Methods
        function methodExample(){
            echo "Hi, I am $this->name $this->surname";   
        }
    }
    
    $firstUser = new user("Mario" , "Rossi");
    $firstUser->set_age(12);
    echo $firstUser->get_age();

    class teacher extends user{
        public $subject;

        public function __construct($name, $surname, $subject){
            $this->name = $name;
            $this->surname = $surname;
            $this->subject = $subject;
        }
    }
