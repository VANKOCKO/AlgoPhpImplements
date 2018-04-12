<?php

  
  
  /**
   *   methode resolution de factoriel 
   * 
   */


   /**   
    * function : factorielv1() 
    * @Param : n : integer 
    * @Return: f : integer 
    */

    function factorielv1($n)
    {
        $f=1;
        for($i=1;$i<=$n;$i++)
        {
           $f*=$i;
        }
        return $f;
    }
    
    echo "factoriel v1 =".factorielv1(3);



    
   /**   
    * function : factorielv2() 
    * @Param : n : integer 
    * @Return: f : integer 
    */
    
    function factorielv2($n)
    {
        $f=1;
        while($n)
        {
           $f*=$n--;
        }
        return $f;
        
    } 
    echo "<br>";
    echo "factoriel v2 =".factorielv2(3);
  
    






             /**
             *   methode resolution de racine entiere
             * 
             */

  /**   
* function : RacineCarre() 
* @Param : n : integer 
* @Return: r : integer 
*/
function RacineCarre($n){
    $nbS =0; /*Nombre de soustraction possible */
    $impair=1;
    while($n >=$impair)
    { 
           $n-=$impair; /*On soustrait sur le nombre que nous recherchons */
           $nbS++;      /*On compte le nombre de soustraction possible */
           $impair +=2; /* On ajoute de 2 */            
    }
    return $nbS;
}

 echo "<br>";
 echo "racince carre = ".RacineCarre(43);

  

       /**
             *   methode resolution de suite arithmetique 
             *    
             *   Uo = 1/10 
             *   Un+1= 6*Un - 1/2
             */

            echo "<br>";           
  /**   
* function : SuiteArithme() 
* @Param : n : integer 
* @Return: s : integer 
*/
function SuiteArithme($n){
    $Uo =1.0/3; /*Initialisation de la suite  */
    for($k=1;$k<=$n;++$k)
    { 
            $Un=4*$Uo - 1.0;    
           echo "U".$k."=".$Un."<br>";
    }
}

echo SuiteArithme(6);

 




?>