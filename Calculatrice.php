<?php 

class Calculatrice {

    public function add(int $firstParam,int $secondParam){
        return $firstParam + $secondParam;
    }

    public function sub(int $firstParam,int $secondParam){
        return $firstParam - $secondParam;
    }

    public function mul(int $firstParam,int $secondParam){
        return $firstParam * $secondParam;
    }

    public function div(int $firstParam,int $secondParam){
        return $firstParam / $secondParam;
    }

    public function avg(array $array){
        $result = null;
        $compteur = null;

        foreach($array as $val){
            $result += $val;
            $compteur ++;
        }

        return $result / $compteur;
    }
}