<?php
  
 $n = 100 ; 
 $f = 0 ; 
 $k=1; 
 $e=1;
while ( $k !== $n )
{
    for (  $e ; $e < $k ; $e++ )
        $e = $k;
     {
         echo "(",$e,")","<br> "; 
         for ($i= 2 ; $i <= $e ; $i++)
         {
                  if ($e % $i == 0 ) 
                  {
                      $f++ ;
                  }
         }
                  if ($f<=2) 
                 {
                       echo "$e";
                  }
                      $f =0 ;
     }
 $k++;   
}                   
 ?>