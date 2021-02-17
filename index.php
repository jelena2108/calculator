<?php
  
 if(isset($_GET['number1'])&& !empty($_GET['number1'])){
        $a=$_GET['number1']; 
    }else{
     $a=0;
       // echo "Unesi broj u polje 1."."<br>";
    }
    if(isset($_GET['number2'])&& !empty($_GET['number2'])){
        $b=$_GET['number2']; 
    }else{
        $b=0;
           // echo "Unesi broj u polje 2."."<br>";
    } 
if(isset($_GET['select'])){
    $select=$_GET['select'];
}else{
    $select="+";
}
    
class Calculator{
    private $num1;
    private $num2;
    private $result;
    private $sel;

public function input($x,$y){
    $this->num1=$x;
    $this->num2=$y;
}
public function calculate($select){
    $this->sel=$select;
    if($select=="+"){
    $this->result=$this->num1 +$this->num2;
    }elseif($select=="-"){
        $this->result=$this->num1 - $this->num2;
    }elseif($select=="*"){
        $this->result=$this->num1 * $this->num2;
    }else{
         $this->result=$this->num1 / $this->num2;
    }
}
    public function render(){
       if(isset($_GET['submit'])){
        echo "Rezultat je: ".$this->result;
       }
   
    }
}
$res=new Calculator;
$res->input($a,$b);
$res->calculate($select);
 //$res->render();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculator</title>
    <link rel="stylesheet" href="style_calc.css">
</head>
<body>
    <main>
       <h1>Kalkulator</h1>
        <form method="GET" action="#">
    
        <label for="number1">Unesi broj u polje 1: </label>
        <input type="number" name="number1" id="number1"><br><br>
        <label for="number2">Unesi broj u polje 2: </label>
        <input type="number" name="number2" id="number2">
    
        <select name="select">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        </select><br><br>
    
        <input type="submit" name="submit" value="Izracunaj">
   
        </form>
        <br>
<?php $res->render(); ?>
    </main>
</body>
</html>