<?php 
if(isset($_POST['username']) && isset($_POST['name1']) && isset($_POST['name2']) && isset($_POST['name3']) && isset($_POST['name4']) && isset($_POST['cedula']) && isset($_POST['celular']) && isset($_POST['password'])){
  $username=$_POST['username'];//Encriptada
  $name1=$_POST['name1'];
  $name2=$_POST['name2'];
  $name3=$_POST['name3'];
  $name4=$_POST['name4'];
  $cedula=$_POST['cedula'];//Encriptada
  $celular=$_POST['celular'];//Encriptada
  $password=$_POST['password'];//Encriptada
  if(preg_match('/^a-zA-Z/g', $sr)===1){

  }
  echo $username;
}
$str = "localhost:/";
$pattern = "/(^[0-9]{4})/";
//$pattern2 = "/[a-zA-Z]\s/";
echo $str."<br>"; 
echo preg_match($pattern, $str); 
?>