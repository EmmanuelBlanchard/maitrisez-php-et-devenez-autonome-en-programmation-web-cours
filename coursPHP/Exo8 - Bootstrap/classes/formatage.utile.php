<?php

class Utile {
    public static function gererTitreNiveau1($titre){
        return '<h1 class="persoBackgroundColorBlueLight text-white p-2 mt-2 rounded-lg border border-dark">'.$titre.'</h1>';
    }

    public static function gererTitreNiveau2($titre){
        return '<h2 class="persoBackgroundColorBlueLight text-white p-2 mt-2 rounded-lg border border-dark">'.$titre.'</h2>';
    }
}

?>