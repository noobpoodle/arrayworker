<?php
 //$arrayworker = simple and clean, and recursive;

class arrayworker {

 public $traverse;

 public function traversal( $separator, $array , $end = null)
 {
   $out = "";
   $lastElement = end($array);

   foreach ( $array as $val )
   {
     if ( is_array($val) )
     {
       $out .= self::traversal( $separator , $val, $lastElement );
     }
     else
     {
      if ( $val === $lastElement)
      {
       // Leave separator from last array element
       $out .= $val;
      }
      else
      {
       $out .= $val.$separator;
      }
     }
  }
 return $out;
 }
}

$arrayworker = new arrayworker;
	$arrayworker->traverse = array(
 "key1" =>"value1",
 "key2"=>"value2",
 "key3"=> array (
   "key4"=>"value4",
   "key5"=> array (
     "key6"=> "value6"
   )
  )
 );
 //var_dump($arrayworker);
//echo $arrayworker->traversal( "," , $arrayworker->traverse );
 var_dump($arrayworker->traversal( "," , $arrayworker->traverse ));
