<?php
// $p="Badshaa" ; $n="DON";$store=$p." ".$n." ";
// echo "$store";
// $i=5; $p=25; $t=30;

// echo $i ."\n";
// $i+=10;
// echo $i ."\n";
//
// $i*=10;
// echo $i ."\n";

/**
 *
 */
class phpdiary
{
  public $name;
  public $date;
  public $number;



  function set($n, $d, $l){
    $this->name =$n;
    $this->date=$d;
    $this->number=$l;

  }
function show(){
  echo "<h1>".$this->name."\n</h1>";
  echo "<h1>".$this->date."\n</h1>";
  echo "<h1>".$this->number."\n</h1>";
}



}


/**
 *
 */
class diary
{
  function getdiary(){
    $dr = new phpdiary();
    $dr->set("jwel", "21/05/2004", 05);
    $dr->show();

  }

}
// $d=new diary();
// $d->getdiary();

/**
 *
 */
class mydiary extends phpdiary
{
  public $myname;
  public $myroll;

  function __construct($m,$r)
  {
    $this->myname=$m;
    $this->myroll=$r;


  }
  function show_details() : int{
    echo "<h1>".$this->myname."</h1>";
    echo "<h1>".$this->myroll."</h1>";
return 2;



  }

}

function check(){
  $int=15;
  $float=20.56;
  $string="               this is a diary           ";
  $double=35.86423;
  $boolean=true;

  // if(is_int($int)){
  //   echo "<h1>passed</h1>";
  //
  // }
  // else{
  //   echo "<h1>fail</h1>";
  //
  // }

echo "<h1>".strlen($string)."</h1>";
echo "<h1>".strrev($string)."</h1>";
echo "<h1>".strpos($string, "r")."</h1>";
echo "<h1>".str_word_count($string)."</h1>";
echo "<h1>".str_replace ("is","will",$string)."</h1>";
echo "<h1>".trim($string)."</h1>";


}
// check();


// $me=new mydiary("shobhon", 05);
// $me->set("jwel", "21/05/2004", 05);
// $me->show_details();
// $me->show();



/**
 *
 */



// switch ($i) {
//   case 5:
//   echo "i5";
//     // code...
//     break;
//
//     case 150:
//     echo "i150";
//       // code...
//       break;
//
//
//
//   default: echo "nothing";
//     // code...
//     break;
// }


//  function fruit_names($fruits){
//   foreach ($fruits as $fruit) {
//     // code...
//     echo $fruit."\n";
//
//   }
// }
// $fruits = ["apple", "banana","guava"];
// fruit_names($fruits);
//
//
// $fruits=["one"=>'1',"two"=>'2'];
// $fruits["three"]='3';
// foreach ($fruits as $key => $value) {
//   echo "<h1>".$key ."\t".$value."\n<h1>";
//
// }
// $ar = array(5,6,9,2,8,3,4);
// $ars=sort($ar);
// $ars2=asort($ar);
// foreach ($ar as $key) {
//   echo "<h1>".$key."</h1>";
// }


 $fruits=["one"=>'1',"two"=>'2', "three"=>'3',"four"=>'4',"five"=>'5'];
arsort($fruits);
foreach ($fruits as $key => $value) {
  echo "<h1>".$key."</h1>";
}



// if($i==5)
// {
//   echo "i5";
// }
// else if($i==150)
// {
//   echo "i150";
// }
// else {
//   echo "nothing";
// }

// $fruits=["biman","ram", "gita"];

// foreach ($fruits as $fruit) {
//   echo $fruit."\n";
//   // code...
// }
//
// for ($i=0; $i < count($fruits) ; $i++) {
//
//   // code...
// echo $fruits[$i]."\n";
// }
// $i=0;
// while ($i < count($fruits)) {
//
 // echo $fruits[$i]."\n ";
// $i++;
//
//
// }
// do{
//   echo $fruits[$i]."\n ";
//   $i++;
// }while ($i < count($fruits));
//
// $k=54;$k=null;
// if($k==null){
//   echo "null";
// }
// else{
//   echo "not null";
// }

/**
 *
 */
// class ClassName extends AnotherClass
// {
//
//   function __construct(argument)
//   {
//     // code...
//   }
// }







// this is a DOMComment
#this also single line DOMComment

/*doble line

 comment*/
 ?>
