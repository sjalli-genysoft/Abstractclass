<?php
abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function lastname($name);
}

class ChildClass extends ParentClass {
  public function lastname($name) {
    if ($name == "SREELEKHA") {
      $lastname = "JALLI";
    } elseif ($name == "ALEKHYA") {
      $lastname = "JALLI";
    } else {
      $lastname = "";
    }
    return "{$lastname} {$name}";
  }
}

$class = new ChildClass;
echo $class->lastname("SREELEKHA");
echo "<br>"; 
echo $class->lastname("ALEKHYA");
?> 
<!-- git remote add origin -->