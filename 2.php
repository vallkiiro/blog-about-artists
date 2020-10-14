<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};
		.bg-text {
			background-color: #9c8d67;
		};
		.ff {
			font-family: serif;
		}
	</style>
</head>
<body>
	<?php
		$connect = mysqli_connect("127.0.0.1", "root","", "myFirstDB");
		if ($connect==false) {
				echo "Не подключен";
			} else{
				echo "подключен";
			};

		$text_query = 'SELECT * FROM more';
		$query = mysqli_query($connect, $text_query);
		if ($query==false) {
				echo "запрос не работает";
			} else {
				echo "запрос работает";
			};
	?>
	<div class="col-7 mx-auto bg-white pt-5 pl-4 pr-4">
		<?php
			$stroka1 = $query->fetch_assoc();
			$stroka2 = $query->fetch_assoc();
			$stroka3 = $query->fetch_assoc();
			$stroka4 = $query->fetch_assoc();
			$stroka5 = $query->fetch_assoc();

			echo "<h2 class='bg-light'>".$stroka2["title"]."</h2>";
			echo "<img src='".$stroka2["img"]."' class='w-100'>";
			echo "<p align='justify'>".$stroka2["short_text"]."</p>";
		?>
		<div class='d-flex'>
			<?php
			 	echo "<p align='left'>Автор: ".$stroka2["users"]."</p>";
				echo "<a href='index2.php' class='ml-auto'>назад</a>";
			 ?>
		</div>
	</div>
</body>
</html>