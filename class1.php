<?php
abstract class  mobile{
    public $name;
    public function __construct($name){
        $this->name=$name;

    }
    abstract public function intro() : string;
}
class Samsung extends mobile{
    public function intro(): string{
        return "hd quality I'm $this->name";
    }    
}
class Iphone extends mobile{
    public function intro(): string {
        return "camera system with a 48MP! I'm $this->name";
    }
}
$Samsung=new Samsung("Samsung");
echo $Samsung->intro();
echo "<br><br>";
$Iphone=new Iphone("Iphone");
echo $Iphone->intro();
echo "<br>";
?>