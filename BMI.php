<form method="post" action="">
  <input type="text" name="number1" placeholder="hight"><br>
  <input type="text" name="number2" placeholder="wight"><br>
  <input type="submit" name="ok" value="คำนวน">
</form>
<?php
$num1 = $_POST['number1'];
$num2 = $_POST['number2'];
$total = $num1 /100;
$t = $total * $total;
$o = $num2 / $t;
$l = round($o,2);

echo "BMI = $l <br>";

if($o >= 30.0 ){
    echo "โรคอ้วนอันตราย <br>";
}
if($o <= 29.9 && $o >=25.0){
    echo "โรคอ้วน <br>";
}
if($o <= 24.9 && $o >=23.0){
    echo "น้ำหนักเกิน <br>";
}if($o <= 22.9 && $o >=18.5){
    echo "สมส่วน <br>";
}if($o <18.5){
    echo "น้ำหนักต่ำกว่าเกณฑ์ <br>";
}
?>