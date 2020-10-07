<?php
/*
WIKIPEDIA :
    sa valeur se détermine en faisant la somme des valeurs individuelles de chaque symbole, 
    sauf quand l'un des symboles précède un symbole de valeur supérieure ; 
    dans ce cas, on soustrait la valeur du premier symbole au deuxième. 
*/
$roman_letter = array (
    "M"=>1000,
    "D"=>500,
    "C"=>100,
    "L"=>50,
    "X"=>10,
    "V"=>5,
    "I"=>1,
);

$arabic_number = array (
    1000=>"M",
    500=>"D",
    100=>"C",
    50=>"L",
    10=>"X",
    5=>"V",
    1=>"I",
);
if(isset($_POST["phpletterrm"]))
{
    $php_letter_result_rm = calculerChiffreArabe($_POST["textephpletterrm"], $roman_letter);
}
else if(isset($_POST["phpletterar"]))
{
    $php_letter_result_ar = calculerChiffreRomain(intval($_POST["textephpletterar"]), $arabic_number);
}

else
{
    $php_letter_result = "aucun chiffre envoyer";
}

function calculerChiffreArabe ($data,$roman_letter)
{
    $php_letter_result_rom = 0;
    $t = 0;
    $valeur_recu = null;
    $key_ad = 0;
    $split_data_envoyer = str_split($data);
    foreach ($split_data_envoyer as $key => $value) {
        if(isset($roman_letter[$value]))
        {
            $valeur_recu[$t] = $roman_letter[$value];
            $t++;
        }
    };

    foreach ($valeur_recu as $key => $value) {
        if($key<sizeof($valeur_recu)-1)
        {
            $key_ad = $key_ad+1;
        }
            
        if($valeur_recu[$key]>$valeur_recu[$key_ad] || $valeur_recu[$key]==$valeur_recu[$key_ad])
        {
            $php_letter_result_rom = $php_letter_result_rom+$value;
        }
        elseif ($valeur_recu[$key]<$valeur_recu[$key_ad])
        {
            $php_letter_result_rom = $php_letter_result_rom-$value;
        }
        
    };

    return $php_letter_result_rom;
}

function calculerChiffreRomain ($data,$arabic)
{
    $php_number_result = "";
    $taille_chiffre = sizeof(str_split($data));
    $tab = str_split($data);
    
    for($r = 0; $r < sizeof($tab); $r++)
    {
        $taille_chiffre = $taille_chiffre-1;
        $tab[$r] =  intval($tab[$r].ajout0($taille_chiffre));
    }
    foreach ($tab as $keych => $valuech) 
    {
        if($valuech>1000 || $valuech==1000)
        {
            for($l = 0; $l < str_replace("0","",strval($valuech)); $l++)
                {
                    $php_number_result = $php_number_result."M";
                }
        }
    };
        /*
        foreach ($arabic as $keyar => $valuear) {
            foreach ($tab as $keych => $valuech) {
                if($keyar>$valuech || $keyar<$valuech)
                {
                    $php_number_result = $php_number_result.$valuear;
                }
                if($valuech==$keyar)
                {
                    for($l = 0; $l < str_replace("0","",strval($valuech)); $l++)
                    {
                        $php_number_result = $php_number_result.$valuear;
                    }
                }
            };
        };*/
    if($taille_chiffre==1 && $tab[0]==5)
    {
        for($u = 0; $u < $tab[0]; $u++)
        {
            $php_number_result = $php_number_result."V";
        }
    }
    
    return $php_number_result;
}

function ajout0 ($index)
{
    $f = "";
    for($s = 0; $s < $index; $s++)
    {
        $f = $f."0";
    }
    return $f;
}

require "index.php";