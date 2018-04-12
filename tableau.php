<?php 
   

   /**
    *     Determination de la moyenne
    */
   function moyenne()
   {     
    $tab= array(1,2,3,4);
    $somme=0;
    $moy;
    for($i=0;$i<count($tab); $i++)
    {
         $somme=$somme + $tab[$i];
    }
    $moy=$somme/count($tab);
    return $moy;
   }
   echo "moy = ".moyenne();

?>