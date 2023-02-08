<?php 

  class a
  {
    function sum($a,$b)
    {
    	return $a+$b;
    }

  }

  class abcde extends  a
  {
     
      function sum($x,$y)
      {
        $z=$x+$y;
        echo $z;
      }

  }
$obj=new abcde;
echo $obj->sum(7,6)."<br>";

   // Serialization 

$str=serialize($obj);
echo $str;
//fwrite(	$file, $str);



// // Polimorphism

// interface ab
// {
//    function add();

// }


// class c implements ab
// {
// 	 function add()
// 	 {
// 	 	$a+$b+$c;
// 	 }
// }
 ?>