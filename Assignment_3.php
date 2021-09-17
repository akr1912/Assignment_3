<?php
$str = "hello world";

echo "<br>Q1 a), ";
echo strtoupper($str);

echo "<br>Q1 b), ";
echo strtolower($str);

echo "<br>Q1 c), ";
echo ucfirst($str);

echo "<br>Q1 d), ";
echo ucwords("php is the backend scripting language");

echo "<br>Q2, ";
$str1= '082307';
echo substr(chunk_split($str1, 2, ':'), 0, -1);

echo "<br>Q3, ";
$str1 = 'The quick black fox jumps over the white dog.';
if (strpos($str1,'over') !== false)
{
    echo 'Yes it contains';
}
else
{
    echo 'Not contains';
}
echo "<br>Q4, ";
$var =  123456789;
$var2 = strval($var);
echo $var."\n";
echo gettype($var); //dataype is Integer
echo "<br>";
echo $var2."\n";
echo gettype($var2); //dataype is String

echo "<br>Q5, ";
$str ='ak@creation.com';
echo substr($str,-3);

echo "<br>Q6, ";
$currency1 = 65.45;
$currency2 = 104.35;
echo sprintf("%.2f", $currency1+$currency2);

echo "<br>Q7, ";
$password_contains = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
$password_length = 8;
$required_password = substr(str_shuffle($password_contains), 0,$password_length);
echo "Required Password is: ";
echo $required_password;

echo "<br>Q8, ";
$str = 'the moon is round in shape';
echo preg_replace('/the/', 'That', $str, -1);

echo "<br>Q9, ";

$str1 = "facebook";
$str2 = "faceboll";
$different_char_position = strspn($str1 ^ $str2, "\0");
printf('First differece between two strings is at %d: "%s" vs "%s"', $different_char_position, $str1[$different_char_position], $str2[$different_char_position]);

echo "<br>Q10, ";
$string = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$array = explode("\n", $string);
var_dump($array);
?>