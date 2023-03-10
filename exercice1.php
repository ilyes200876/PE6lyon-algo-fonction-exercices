<?php


function chekWord($tab)
{
  $somme = 0;
  $i;
  $j = 1;
  for($i=0; $i < count($tab); $i++){
    if ($tab[$i] === $tab[count($tab) - $j]){
      $somme = $somme + 1;
      $j = $j + 1;
    }
  }
  if ($somme === count($tab)){
    return true;
  }
  return false;
}

chekWord(["F", "A", "R", "F"]);
var_dump(chekWord(["F", "A", "R", "F"]));
chekWord(["F", "A", "A", "F"]);
var_dump(chekWord(["F", "A", "A", "F"]));