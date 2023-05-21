<?php 
$Email =htmlspecialchars($_POST["email"]);
$Password =htmlspecialchars($_POST["password"]);
if($Email=="b221210079@sakarya.edu.tr" && $Password=="b221210079" ){
	echo "Giriş Başarılı "; ?> <br> <?php 
	echo "Hoşgeldin :" . $Email ;
}
else{
 echo "eerrtt";	
 header("Location:LOGİN.html");
  }
?>

