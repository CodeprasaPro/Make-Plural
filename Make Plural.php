<?php

  $pets = array('cat' => 3, 
                'dog' => 5, 
                'goat' => 4, 
                'sheep' => 0, 
                'cow' => 5,
                'pig' => 2,
                'Rooster'=> 10,
                'Hen' => 5);
                
  $makeNounplural = 's';              
                
  foreach($pets as $value => $amount) {
  if ($amount > 1 ) { 
       echo $amount . ' ' . ucwords($value).$makeNounplural , "\n";
    } else if ($amount == 1 || $amount < 0) {
       echo $amount . ' ' . ucwords($value), "\n";
    } 
  } //end of foreach loop  
  
  $newVal = array_sum($pets);
    echo "There are ", $newVal, " total pets";
  
?>