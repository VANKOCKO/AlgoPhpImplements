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
* function : racine carre() 
* @Param : n : integer 
* @Return: f : integer 
*/

?>