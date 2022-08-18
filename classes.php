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
    function userExample(){
        echo "Hi, I am $this->name $this->surname";   
    }
}
    
$firstUser = new user("Mario" , "Rossi");
$firstUser->set_age(12);
//echo $firstUser->get_age();
$firstUser->userExample();

    class teacher extends user{
        public $subject;

        public function __construct($name, $surname, $subject){
            $this->name = $name;
            $this->surname = $surname;
            $this->subject = $subject;
        }
        
        function teacherExample(){
            echo "Hi, I am $this->name $this->surname, and I teach $this->subject";   
        }

        function example(){
            $this->userExample();
        }
    }

$firstTeacher = new teacher("Mario","Bianchi","Matematica");
$firstTeacher->teacherExample();