<?php
abstract class Class3{
  // Abstract method with an argument
  abstract protected function lastname($name);
}
class ChildClass extends Class3 {
  // The child class may define optional arguments that is not in the parent's abstract method
  public function lastname($name, $separator = ".", $greet = "Dear") {
    if ($name == "SREELEKHA") {
      $lastname = "JALLI";
    } elseif ($name == "ALEKHYA") {
      $lastname = "JALLI";
    } else {
      $lastname = "";
    }
    return "{$greet} {$lastname}{$separator} {$name}";
  }
}
$class = new ChildClass;
echo $class->lastname("SREELEKHA");  
echo "<br>";  
echo $class->lastname("ALEKHYA");  
?>   