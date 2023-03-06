<?php



// class Person{

         
//     public $name;
//     public $surname;
//     public $age;


//     public static $counter = 0;


//     public function __construct($nome,$cognome,$età){



//         $this->$name=$nome;
//         $this->surname=$cognome;
//         $this->age=$età; 


//         self :: $counter++;



//     }







//     public function presentati(){


//         echo "Ciao sono $this->name $this->surname ed ho $this->age anni \n";
       
       
       
//     }


//     public static function showCounter(){



//        echo self :: $counter;

       


//     }
       



// }





// $Leo = new Person ('Leonardo', 'Colaleo','28');

// var_dump($Leo);

// $Leo->presentati();

// echo Person :: $counter;



class Animal {

    public $name;
    public $breed;
    public $origin;
    public $aggression;

    public function __construct($nome, $razza, $origine, $aggressivita)

    {
    $this->name=$nome;
    $this->breed=$razza;
    $this->origin=$origine;
    $this->aggression=$aggressivita;
    }

    public function presentazione (){
        echo "Ciao $this->name sei il $this->breed più forte d' $this->origin con un grado di aggressività $this->aggression \n";
    }
}

    class Lion extends Animal {
        public $roar;

        public function __construct($nome, $razza, $origine, $aggressivita, $roar){
            Animal::__construct($nome, $razza, $origine, $aggressivita);
            $this->roar=$roar;
        }
        public function presentazioneLion(){
            echo "Ciao $this->name sei il $this->breed più forte d'$this->origin con un grado di aggressività $this->aggression e il tuo verso è il $this->roar\n";
        }
    }


    class Crocodile extends Animal {
        public $teeth;

        public function __construct($nome, $razza, $origine, $aggressivita, $teeth){
            parent::__construct($nome, $razza, $origine, $aggressivita);
            $this->teeth=$teeth;
        }
        public function presentazioneCrocodile(){
            echo "Ciao $this->name sei il $this->breed più forte d'$this->origin con un grado di aggressività $this->aggression e hai $this->teeth denti \n";
        }
    }

    class Shark extends Animal {
        public $fin;

        public function __construct($nome, $razza, $origine, $aggressivita, $fin){
            parent::__construct($nome, $razza, $origine, $aggressivita);
            $this->fin=$fin;
        }
        public function presentazioneShark(){
            echo "Ciao $this->name sei lo $this->breed più forte degli $this->origin con un grado di aggressività $this->aggression e hai $this->fin pinne \n";
        }
    }


    class Elephant extends Animal {
        public $ears;

        public function __construct($nome, $razza, $origine, $aggressivita, $ears){
            parent::__construct($nome, $razza, $origine, $aggressivita);
            $this->ears=$ears;
        }
        public function presentazioneElephant(){
            echo "Ciao $this->name sei l' $this->breed più dolce dell' $this->origin con un grado di aggressività $this->aggression e hai $this->ears orecchie \n";
        }
    }


    class Tiger extends Animal {
        public $claws;

        public function __construct($nome, $razza, $origine, $aggressivita, $claws){
            parent::__construct($nome, $razza, $origine, $aggressivita);
            $this->claws=$claws;
        }
        public function presentazioneTiger(){
            echo "Ciao $this->name sei la $this->breed più feroce della $this->origin con un grado di aggressività $this->aggression e hai $this->claws artigli \n";
        }
    }



$simba = new Lion('Simba', 'leone', 'africa', '10', 'ruggito');
$crocco = new Crocodile('Crocco', 'coccodrillo', 'america', '10', '60');
$shark = new Shark('Shark', 'squalo', 'oceani', '10','4');
$dumbo = new Elephant('Dumbo', 'elefante', 'africa', '7','grandi');
$shereKan = new Tiger('Sherekan', 'tigre', 'malesya', '10', 'lunghissimi');

$simba->presentazioneLion();
print_r($simba);


$crocco->presentazioneCrocodile();
print_r($crocco);

$shark->presentazioneShark();
print_r($shark);

$dumbo->presentazioneElephant();
print_r($dumbo);

$shereKan->presentazioneTiger();
print_r($shereKan);


?>