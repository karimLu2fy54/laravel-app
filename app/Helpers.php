<?php

namespace App;

class Helpers{

    public static function HashtagGenerate($rand1,$rand2){

        $hashtags = ['confinement','summer','spring','nature','ecologie','business'];

        $hasts = "";

        $rand1 = rand(1,5);
        $rand2 = rand(1,5);

        $min = 0;
        $max = 0;

        if($rand1 > $rand2){
            $min = $rand2;
            $max = $rand1;
        }else{
            $min = $rand1;
            $max = $rand2;
        }

        for($i=$min;$i<$max;$i++){
            $hasts .= " #".$hashtags[$i];
        }

        return $hasts;
    }

}