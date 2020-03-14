<?php
namespace App\src\constraint;

class Constraint{
    public function notBlank($name, $value){
        if (empty($value)){
            return '<p>Le champ ' . $name . ' saisi est vide</p>';
        }
    }
    public function minLength($name, $value, $minSize){
        if (strlen($value) < $minSize){
            return '<p>Le champ ' . $name . ' doit contenir au moins ' . $minSize . ' caractères</p>';
        }
    }
    public function maxLength($name, $value, $maxSize){
        if (strlen($value) > $maxSize){
            return '<p>Le champ ' . $name . ' doit contenir au maximun ' . $maxSize . ' caractères</p>';
        }
    }
    public function regexPassword($value){
        if (!(preg_match('#[A-Z]+#', $value) && preg_match('#[0-9]+#', $value)
            && preg_match('#[@&"()!_$*€£`+=/;?\#\-]+#', $value) && preg_match('#.{8,}#', $value))){
            return '<p>Le mot de passe doit comporter au moins 8 caractères, et un caractère spécial et une majuscule'; 
        }
    }
    public function regexEmail($value){
        if (!(preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $value))){
            return '<p>L\'email n\'est pas valide';
        }
    }
    
}