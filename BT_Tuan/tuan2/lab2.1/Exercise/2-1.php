<html>
<head>
	<title>Thank You</title>
</head>
<body>
	<?php
		$name = $_POST["name"];
		$class = $_POST["Class"];
		$university = $_POST["University"];
		$major = $_POST["major"];
		$gender = $_POST["gender"];
		$birthday = $_POST["birthday"];
		$year = $_POST["year"];
		$address = $_POST["address"];
		$email = $_POST["email"];

		print ("- Hello, $name<br>");
		print ("- Your gender is $gender<br>");
		print ("- Your birthday is $birthday<br> ");
		print ("- You live in $address <br>");
		print ("- Your email is $email");
		print ("- You are a $year student studying at class $class in $university<br>");
		print ("- Your major is $major<br>");

		print ("- Your hobbies is/are: <br> ");
		
		$a = 1;
		if (isset($_POST['hobbie'])) {
			
      		foreach($_POST['hobbie'] as $value) {
				//Xử lý các phần tử được chọn
				echo  "$a.";
				echo $value."<br/>";
				$a +=1;
       		}
	   } 
	   if ($a == 1) {
		print("OMG you DON'T have a hobbie, get a hobbie please");
	   }
	?>
</body>
</html>