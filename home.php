<?php
//  L'obiettivo di questo esercizio è creare uno script PHP che calcola la somma dei numeri pari da 1 a N, dove N è un numero 
// inserito dall'utente. Puoi utilizzare un ciclo for per calcolare la somma

// $num = 10;
// $pari = 0;
// for ($i = 0; $i <= $num; $i++){
//     if ($i % 2 == 0)
//     $pari += $i;
// }
// echo ("Il numero $pari è pari!");



// Scrivi uno script PHP per creare un nuovo array di lunghezza nota usando i numeri dispari da un dato array di interi positivi

// $array = [1,2,3,4,5,6,7,8,9,10];
// $dispari = [];

// foreach($array as $items){
//     if($items %2 !=0){
//         array_push($dispari, $items);
//     }
// }
// var_dump($dispari);

// !INCOMPLETO!


// Scrivi una classe PHP chiamata Calculator che accetterà due valori come argomento. 
// Aggiungili, sottraili, moltiplicali e dividili tra loro usando delle funzioni.

// class Calculator{
//     public $n1;
//     public $n2;
//     public function __construct($n1, $n2){
//         $this->n1 = $n1;
//         $this->n2 = $n2;
//     }
//     public function somma(){
//         var_dump($this->n1 + $this->n2);
//     }
//     public function sottrazione(){
//         var_dump($this->n1 - $this->n2);
//     }
//     public function moltiplicazione(){
//         var_dump($this->n1 * $this->n2);
//     }
//     public function divisione(){
//         var_dump($this->n1 / $this->n2);
//     }
    
// }

// $inserisci = new Calculator(6,8);
    
//     $inserisci->somma();
//     $inserisci->sottrazione();
//     $inserisci->moltiplicazione();
//     $inserisci->divisione();




// Scrivi un programma PHP per spostare tutti gli zero in un array, alla fine di esso.

// $arr = [2, 30, 0, 4, 0, 50];
// $zeri = [];
// $ris = [];
// foreach($arr as $i)
// if ($i == 0){
//     array_push($zeri, $i);
// }else{
//     array_push($ris, $i);
// }
// $ris = array_merge($ris, $zeri);
// var_dump($ris);




//verificare se la password inserita dall'utente è valida secondo i seguenti criteri
//1 deve essere lunga almeno 8 caratteri
//2 deve contenere almeno un numero
//3 deve contenere almeno una lettera in UPPERCASE
//4 deve contenere almeno un carattere speciale




//         function lunghezza($password){
//         if(strlen($password) >= 8){
//             return true;
//     }
//         echo("Deve contenere almeno 8 caratteri! \n");
// }


//     function numero($password){
//         for($i = 0; $i < strlen($password); $i++){
//         if(is_numeric ($password[$i])){
//             return true;
//     }}
//     echo("Deve contenere almeno un numero! \n");
// }

//     function uppercase($password){
//         for($i = 0; $i < strlen($password); $i++){
//         if(ctype_upper($password[$i])){
//         return true;
//     }}
//     echo("Deve contenere almeno una lettera maiuscola! \n");
// }

//     function special($password){
//         if(preg_match('/[!@#$%^&*()\-_=+[\]{};:\'",.<>?~`]/', $password)){
//             return true;
//         }
//         echo("Deve contenere almeno un carattere speciale! \n");
//         }
    


//     function check(){
//         for ($i = 0; $i <= 4; $i++){
//         $password = readline("Inserisci la tua password: ");
//         $lunghezza = lunghezza($password);
//         $numero = numero($password);
//         $uppercase = uppercase($password);
//         $special = special($password);

        
//             if($lunghezza && $numero && $uppercase && $special){
//                 echo("La password è corretta");
//                 break;
//         }elseif($i == 4){
//             echo("Hai superato i tentativi! Riprova più tardi");
//             break;
//         }else{
//             echo ("Riprova! \n");
//             continue;
//         }
//     }
// }
// check();






class Machine{
    public $caffè;
    public $cappuccino;
    public $thè;
    public $cioccolato;

    public function __construct($caffè, $cappuccino, $thè, $cioccolato){
        $this->caffè = $caffè;
        $this->cappuccino = $cappuccino;
        $this->thè = $thè;
        $this->cioccolato = $cioccolato;
    }

    public function caffè(){
        $this->caffè->caffèDolce();
    }

}
   
    abstract class Caffè{
        abstract function caffèDolce();
        abstract function caffèAmaro();
    }
    // se scelgo Lavazza
    class Lavazza extends Caffè{
        public function caffèDolce(){
            echo "Hai scelto caffè Lavazza dolce \n";
        }

        public function caffèAmaro(){
            echo "Hai scelto caffè Lavazza amaro \n";
        }
    }
    // se scelgo Quarta
    class Quarta extends Caffè{
        public function caffèDolce(){
            echo "Hai scelto caffè Quarta dolce \n";
        }

        public function caffèAmaro(){
            echo "Hai scelto caffè Quarta amaro \n";
        }
    }
    
    abstract class Cappuccino{

        abstract function cappuccinoDolce();
        abstract function cappuccinoAmaro();
    }

        class Crastan extends Cappuccino{
            public function cappuccinoDolce(){
                echo "Hai scelto il cappuccino dolce \n";
    }
            public function cappuccinoAmaro(){
                echo "Hai scelto il cappuccino amaro \n";
    }
}


    abstract class Thè{
        
        abstract function thèDolce();
        abstract function thèAmaro();
    }    
    
    class Twining extends Thè{
        public function thèDolce(){
            echo "Hai scelto un thé dolce \n";
    }
        public function thèAmaro(){
            echo "Hai scelto un thé amaro \n";
    }
}

    abstract class Cioccolato{
        abstract function cioccolatoDolce();
        abstract function cioccolatoAmaro();
    }

    class Ciobar extends Cioccolato{
        public function cioccolatoDolce(){
            echo "Hai scelto un cioccolato dolce\n";
    }
        public function cioccolatoAmaro(){
            echo "Hai scelto un cioccolato amaro";
        }
    }

    $machine = new Machine(new Quarta, new Crastan, new Twining, new Ciobar);
    var_dump($machine);    
    $machine->caffè();

?>