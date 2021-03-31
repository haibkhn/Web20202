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
		print ("Hello, $name<br>");
		print ("Your birthday is $birthday<br> ");
		print ("You are studying at $class $university<br>");
		print ("Your major is $major<br>");
		print ("Your gender is $gender<br>");
		print ("Your hobbies is<br> ");
		$a = 1;
		if (isset($_POST['hobbie'])) {
      		foreach($_POST['hobbie'] as $value) {
         	//Xử lý các phần tử được chọn
      	print ("\t $a.");
        echo $value."<br/>";
        $a +=1;
       }
}
	?>
</body>
</html>