<?php
class Session{

    public function createSession($car){
        if(is_array($car)){
            if(!isset($_SESSION['cars']) || !in_array($car['name'], $_SESSION['cars'])){
                $_SESSION['cars'][] = $car;
            }
            // else{
            //     foreach($_SESSION['cars'][$car['name']] as $key=>$value){
            //         if($key == $car['name']){
            //             unset($value['name']);
            //         }
                    
            //     }
            //     if(array_key_exists($car['name'], $_SESSION['cars'])){
            //         $_SESSION['cars'][$car['name']];
            //         $amount = $_SESSION['cars'][$car['name']]['amount'];
            //         unset($_SESSION['cars'][$car['name']]['amount']);
            //         $amount = $amount + 1;
            //         $_SESSION['cars'][$car['name']]['amount'] = $amount;
            //     }
            // }
            
            // foreach($_SESSION['cars'][$car['name']] as $key=>$value){

            // }
            
            // if(in_array($car['name'], $_SESSION['cars'])){
            //     $amount = $_SESSION['cars'][$car['name']]['amount'];
            //     unset($_SESSION['cars'][$car['name']]['amount']);
            //     $amount++;
            //     $_SESSION['cars'][$car['name']]['amount'] = $amount;
            // }
            
            
            
        }
    }
}