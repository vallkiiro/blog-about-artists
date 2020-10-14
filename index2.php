<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};
		.bg-text {
			background-color: #9c8d67;
		};
		.ff {
			font-family: serif;
		};
	</style>
<body>
	<div> <!-- 1. Все массивы создаем здесь-->
		<?php 
			$connect = mysqli_connect("127.0.0.1", "root","", "myFirstDB");
			if ($connect==false) {
				echo "Не подключен";
			} else{
				echo "подключен";
			};

			$text_query = 'SELECT * FROM posts';
			$query = mysqli_query($connect, $text_query);
			if ($query==false) {
				echo "запрос не работает";
			} else {
				echo "запрос работает";
			};

			// $stroka1 = $query->fetch_assoc();
			// echo "<h2 class='bg-light'>".$stroka1["title"]."</h2>";
			// echo "<img src='".$stroka1["img"]."' class='w-100'>";
			// echo "<p>".$stroka1["short_text"]."</p>";
			// echo "<p>Автор: ".$stroka1["users"]."</p>";

			// $stroka2 = $query->fetch_assoc();
			// echo $stroka2['title'];
			// echo $stroka2['short_text'];
			// echo $stroka2['img'];
			// echo $stroka2['users'];

			// $stroka3 = $query->fetch_assoc();
			// echo $stroka3['title'];
			// echo $stroka3['short_text'];
			// echo $stroka3['img'];
			// echo $stroka3['users'];

			// $stroka4 = $query->fetch_assoc();
			// echo $stroka4['title'];
			// echo $stroka4['short_text'];
			// echo $stroka4['img'];
			// echo $stroka4['users'];

			// $stroka5 = $query->fetch_assoc();
			// echo $stroka5['title'];
			// echo $stroka5['short_text'];
			// echo $stroka5['img'];
			// echo $stroka5['users'];

			
			$database = [
				[
					"title" => "Древнеримская трагедия, ставшая триумфом Карла Брюллова",
					"short_text" => "Сюжет повествует о древнеримской трагедии — гибели старинного города Помпеи, расположенного у подножия Везувия: 24 августа 79 года н. э. извержение вулкана унесло жизни двух тысяч жителей.В этой работе Брюллов являет себя не традиционным классицистом, а художником романтического направления. Так, его исторический сюжет посвящен не одному герою, а трагедии целого народа. А в качестве сюжета он выбрал не идеализированный образ или идею, а реальный исторический факт.Правда, композицию картины Брюллов строит в традициях классицизма — как цикл отдельных эпизодов, заключенных в треугольник.",
					"img" => "img/33.jpg",
					"users" => "Анатолий Цой"
				],
				[
					"title" => "Эжен Делакруа «свобода ведущая народ»",
					"short_text" => "У Делакруа получается здесь то, чего почти никогда не получается у художников XIX века, все более реалистически мыслящих. Ему удается в одной картине — очень патетической, очень романтической, очень звучной — соединить реальность, физически осязаемую и брутальную, и символы. Потому что эта полнокровная женщина — это, конечно, сама Свобода. Политическое развитие начиная с XVIII века поставило перед художниками необходимость визуализировать то, чего нельзя увидеть. Как ты можешь увидеть свободу? Христианские ценности доносятся до человека через очень человеческое — через жизнь Христа и его страдания. А такие политические абстракции, как свобода, равенство, братство, не имеют облика. И вот Делакруа, пожалуй, первый и как бы не единственный, кто, в общем, успешно с этой задачей справился: мы теперь знаем, как свобода выглядит.",
					"img" => "img/77.jpg",
					"users" => "Илья Доронченков"
				],
				[
					"title" => "Иван Айвазовский «Волна»",
					"short_text" => "Картина Айвазовского «Волна» — это одно из воспоминаний мастера, перенесенное им на холст: известно, что живописец работал по памяти, делая эскизы с натуры, а затем прорабатывая их в своей мастерской. Такая манера позволяла Айвазовскому импровизировать, не привязываясь к конкретному моменту.Центральным «персонажем» картины Айвазовского «Волна» является море. Безмятежность бирюзовой глади сменилась ревущими валами, чьи размеры ужасают: это видно по останкам корабля, который с минуты на минуту уйдет на дно, сдавшись в неравной борьбе. Из пучины торчит лишь верхушка мачт с истрепанным сигнальным флагом на одной из них и тремя членами команды, тщетно пытающимися спастись от гнева Посейдона, на другой.",
					"img" => "img/11.jpg",
					"users" => "Алена Грошева"
				],
				[
					"title" => "Иван Айвазовский «Всемирный потоп»",
					"short_text" => "Картина Айвазовского «Всемирный потоп» – это поразительное произведение великого мариниста. Как известно, множество шедевров в истории мирового искусства написано на сюжеты из Библии, и история про всемирный потоп не раз использовалась разными художниками. Да и сам Айвазовский несколько раз на протяжении своей жизни возвращался к этому знаменитому сюжету.
						Вряд ли кто-нибудь еще, кроме Айвазовского, смог бы отобразить столь искусно размах трагедии, грандиозную бурю, бушующую на небе и земле, громадные волны, покрывающие уступы скал, за которые пытаются уцепиться люди и прочие живые существа. Персонажи этой композиции объединяются в группы – по центру явственно выделяется старик, которого окружает целое семейство; гибнущая женщина, а также группа людей в преклоненной позе.",
					"img" => "img/66.jpg",
					"users" => "Марина Дьяконова"
				],
				[
					"title" => "На знаменитом полотне Ивана Крамского «Неизвестная» изображена последняя любовь императора",
					"short_text" => "Одно из самых знаменитых и загадочных полотен русской школы живописи возникло словно ниоткуда. В обширном эпистолярном наследии Крамского нет ни слова о работе над «Неизвестной». Не проясняют ситуацию дневники и воспоминания современников - нигде ничего. Какая-то таинственная 'фигура умолчания'' вместо досконально документированной творческой предыстории создания шедевра, именуемого 'Русской Джокондой'. Напрашивается вывод: именитый художник, имевший широкий круг заказчиков в разных слоях петербургского общества - от богатых дворянских и купеческих домов до великокняжеских и царских дворцов, - сознательно писал 'Неизвестную' втайне от всех. Для Ивана Николаевича подобная скрытность была делом противоестественным: как правило он охотно делился своими творческими замыслами.",
					"img" => "img/55.jpg",
					"users" => "Алексей Прокопьев"
				],
				[
					"title" => $_GET["title"],
					"short_text" => $_GET["img"],
					"img" => $_GET["text"],
					"users" => $_GET["user"]
				]

			];

// 			$short_text = ["Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
// tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
// quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
// consequat. ","Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
// tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
// quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
// consequat. ","Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
// tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
// quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
// consequat. ","Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
// tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
// quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
// consequat. ","Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
// tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
// quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
// consequat. ",

// 			];
// 			$img = ["img/1.jpg","img/2.jpg","img/3.jpg","img/4.jpg","img/5.jpg",];
// 			$users = ["user12","user30","user49","user21","user97",];
		 ?>
	</div>

	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<?php
			if ($_GET["login"]=="vallkiiro" & $_GET["password"]=="asd"){
				echo "<h2 class='text-center'>Добро пожаловать,". $_GET["login"]."</h2>";
			}
			else {
				echo "<h2 class='text-center'>неизвестный пользователь</h2>";
			}
		?>
		<h1 class="text-center">БЛОГ</h1>
		<?php
			date_default_timezone_set('Asia/Yakutsk');
			echo "<p class='text-center'>".date('l jS \of F Y h:i:s A')."</p>";
		?>
		

		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
			 
				
				<!-- // for ($i=0; $i < count($database); $i++) { 
				// 	echo "<h2 class='bg-light'>".$database[$i]["title"]."</h2>";
				// 	echo "<img src='".$database[$i]["img"]."' class='w-100'>";
				// 	echo "<p>".$database[$i]["short_text"]."</p>";
				// 	echo "<p>Автор: ".$database[$i]["users"]."</p>";	
				// } -->
			 <?php
			 	$stroka1 = $query->fetch_assoc();
				echo "<h2 class='bg-light text-center'>".$stroka1["title"]."</h2>";
				echo "<img src='".$stroka1["img"]."' class='w-100'>";
				echo "<p align='justify'>".$stroka1["short_text"]."</p>";				
			 ?>
			 	<div class='d-flex'>
			 		<?php
			 			echo "<p align='left'>Автор: ".$stroka1["users"]."</p>";
						echo "<a href='1.php' class='ml-auto'>подробнее</a>";
			 		?>
			 	</div>
	

			 <?php
			 	$stroka2 = $query->fetch_assoc();
				echo "<h2 class='bg-light text-center'>".$stroka2["title"]."</h2>";
				echo "<img src='".$stroka2["img"]."' class='w-100'>";
				echo "<p align='justify'>".$stroka2["short_text"]."</p>";
			 ?>
			 <div class="d-flex">
			 	<?php
			 		echo "<p>Автор: ".$stroka2["users"]."</p>";
					echo "<a href='2.php' class='ml-auto'>подробнее</a>";
				?>
			 </div>
	

			<?php
			 	$stroka3 = $query->fetch_assoc();
				echo "<h2 class='bg-light text-center'>".$stroka3["title"]."</h2>";
				echo "<img src='".$stroka3["img"]."' class='w-100'>";
				echo "<p align='justify'>".$stroka3["short_text"]."</p>";
			 ?>
			 <div class="d-flex">
			 	<?php
			 		echo "<p>Автор: ".$stroka3["users"]."</p>";
					echo "<a href='3.php' class='ml-auto'>подробнее</a>";
				?>
			 </div>


			 <?php
			 	$stroka4 = $query->fetch_assoc();
				echo "<h2 class='bg-light text-center'>".$stroka4["title"]."</h2>";
				echo "<img src='".$stroka4["img"]."' class='w-100'>";
				echo "<p align='justify'>".$stroka4["short_text"]."</p>";
			 ?>
			<div class="d-flex">
			 	<?php
			 		echo "<p>Автор: ".$stroka4["users"]."</p>";
					echo "<a href='4.php' class='ml-auto'>подробнее</a>";
				?>
			 </div>	


			 <?php
			 	$stroka5 = $query->fetch_assoc();
				echo "<h2 class='bg-light text-center'>".$stroka5["title"]."</h2>";
				echo "<img src='".$stroka5["img"]."' class='w-100'>";
				echo "<p align='justify'>".$stroka5["short_text"]."</p>";
			 ?>
			<div class="d-flex">
			 	<?php
			 		echo "<p>Автор: ".$stroka5["users"]."</p>";
					echo "<a href='5.php' class='ml-auto'>подробнее</a>";
				?>
			 </div>	
		
		</div>
	</div>

	<script type="text/javascript">
		let btn1 = document.querySelector("btn1")
		btn1.onclick = function(){

		}
	</script>
</body>
</html>