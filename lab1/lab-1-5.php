<p> Хакимов Н.И. ЭАС-310 Варианты 5 и 10
  <title>Хакимов Н.И.</title>
<?php 
print('<br>');
print('<br>');
print("Вариант 5".'<br>');
$a = rand (-20,20);
$b = rand (-20,20);
$c = rand (-20,20);
$d = rand (-20,20);
print('<br>');
print("Число а = ". ($a).'<br>');
print("Число b = ". ($b).'<br>');
print("Число c = ". ($c).'<br>');
print("Число d = ". ($d).'<br>');
$F1=((4*$c+$d-1)/($c-($a/2)));
print("Результат вычисления F1:".($F1).'<br>');
print('<br>');
print("Вариант 10".'<br>');
$a = rand (-20,20);
$b = rand (-20,20);
$c = rand (-20,20);
$d = rand (-20,20);
print('<br>');
print("Число а = ". ($a).'<br>');
print("Число b = ". ($b).'<br>');
print("Число c = ". ($c).'<br>');
print("Число d = ". ($d).'<br>');
print('<br>');
$F2=(((2*$c/$d)+2)/($d-$a^2-1));
print("Результат вычисления F2:".($F2).'<br>');