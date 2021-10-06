<?php

function register(){
	if(isset($_POST['submit'])){
		$email = $_POST['name'];
		$pw = $_POST['pw'];
		$Cpw = $_POST['Cpw'];


		if($email ==""){
			echo " Email nuk mund te jete i zbrazet";
		}
		else if($pw ==""){
             echo "Passwordi nuk mund te jet i zbrzet";

		}else if ($Cpw != $pw ){
                   echo "passwordi nuk eshte i njejt"
		}else{
			$sql = "INSERT INTO register(name,pw,) VALUES('$email','$pw')";
			$row = mysql_query($connection1,$sql);
			if($row){
				header("Location: index.php");
			}
		}
	}
}

?>