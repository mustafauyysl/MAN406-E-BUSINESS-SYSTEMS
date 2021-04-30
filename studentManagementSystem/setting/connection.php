<?php 


try {



	$db=new PDO("mysql:host=localhost;dbname=school;charset=utf8",'root','mu231423');

	//echo "veritabanı bağlantısı başarılı";

}



catch (PDOExpception $e) {



	echo $e->getMessage();

}



 ?>