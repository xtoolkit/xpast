<?php
//$my_custom_password=123456;
function get_now_url(){
  $req_protocol=strpos(strtolower($_SERVER["SERVER_PROTOCOL"]),"https") === FALSE ? "http" : "https";
  $req_host=$_SERVER["HTTP_HOST"];
  $req_uri=$_SERVER["REQUEST_URI"];
  $req_path=$_SERVER["SCRIPT_NAME"];
  $req_url=$req_protocol."://".$req_host.$req_path;
  $req_uri=$req_protocol."://".$req_host.$req_uri;
  $req_filename=substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
  $filenamepos=strpos($req_url,$req_filename);
  $req_url=substr($req_url,0,$filenamepos);
  return $req_url;
}
if(isset($_REQUEST["body"])){
  $body=$_REQUEST["body"];
}else{
  $body="";
}
if(isset($_REQUEST["password"])){
  $password=$_REQUEST["password"];
}else{
  $password="";
}
if(isset($my_custom_password) AND $password!=$my_custom_password){
  echo"your pass word is wrong";
  die();
}
$body=$_REQUEST["body"];
if($body!=""){
  $filex=rand(10,99).time().".txt";
  $myfilex=fopen($filex,"w");
  fwrite($myfilex,$body);
  fclose($myfilex);
  $adress=get_now_url();
  echo $adress.$filex;
}
?>
