<?php

class DatabaseConnect{

    public function __construct($db_host, $db_username, $db_password, $frontroom){
        echo $db_host.'<br/>', $db_username.'<br/>', $db_password.'<br/>'.$frontroom.'<br/>'; 
        if(!@$this->db_connect($db_host, $db_username, $db_password))
        {
         echo 'no connection';   
            
        }
 elseif($this->db_connect($db_host, $db_username, $db_password)) {
        echo 'connection'.$db_host;   
     
 }
}

  public function db_connect($db_host, $db_username, $db_password){
    
      
     if(!mysql_connect($db_host, $db_username, $db_password)){
          return false; 
         
     }
 else {
         
 {
     return true;
    
     
 }
 }
            
        }
        
    

    
    
	/*function db_connect()
	//{
	/$connection = mysql_connect('localhost', 'adrian', 'password');
	if(!$connection)
	{
	return false;
	}
	if(!mysql_select_db('frontroom'))
	{
	return false;
	}
	return $connection;
	} 
*/


}
    $connection = new DatabaseConnect('localhost', 'adrian', 'password', 'frontroom');
        

class People{
    public 
$name;
    
    public function setName($x){
        $this->name = $x;
    }
    
}

class tuna{
    public $fishName1 = 'stinky';
    private $fishName2 = 'neville';
    
    function getFishname(){
       $this->fishName1;
        
    }
}

class Beef{
    private $cowsName;
    
    //setter function
    public function setCowsName($x){
        $this->cowsName = $x;
}
    
    //getter function

public function getCowsName(){
    return $this->cowsName;    
}  
    
}




class artists{
public $artist_name;

public function getName($x){

 $this->artist_name = $x;
}
}


class Alien{
public $age;
public $colour;

public function setAge($x){
  $this->age=$x;
}

public function setColour($x){
  $this->colour=$x;
}

public function getAge(){
  return $this->age;
}

public function getColour(){
  return $this->colour;
}
}

class theParent{

public $something = 'i am a variable';

public function someFunction(){
echo 'i am a funky mnkey';

}
}

class theChild extends theParent{


}

class constructorExample{
function __construct(){
echo 'i am text from a constructor';

}
}

class baby extends constructorExample{

}

?>


<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
        //artist name

        $artist = new artists();

$artist->getName('giotto');

        //peoples names
        $person1 = new People();
        $person1 -> setName('adrian');
        echo "$person1->name <br/>";
        //fish names
        $fishName = new tuna();
        $fishName -> getFishname();           
   
        $cowObject = new Beef();
         $cowObject->setCowsName('lady');
       echo $cowObject->getCowsName();
         $cowObject->setCowsName('dave');
       echo $cowObject->getCowsName();

$dave_alien = new Alien;
$dave_alien->setAge(105);
$dave_alien->setColour('green');

$adrian_alien = clone $dave_alien;
$adrian_alien->setColour('red');



 echo $dave_alien->getAge();   
  echo $adrian_alien->getColour(); 

  $childObj = new theChild;
  echo $childObj->something;
      $childObj->someFunction();

$constructor_exampleObj = new baby();
        
        ?>
    </body>

</html>