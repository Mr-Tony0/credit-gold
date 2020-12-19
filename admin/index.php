<?php
$conect = mysqli_connect('localhost','root','','credit-gold');



if (isset($_POST['submit'])){	
	$session = 1;
	
	$uploadImg = '../img/';
	$apendImg=date('YmdHis').rand(100,1000).'.jpg'; 
	$uploadfile1 = "$uploadImg$apendImg";
	if(($_FILES['loadImg']['type'] == 'image/gif' || $_FILES['loadImg']['type'] == 'image/jpeg' || $_FILES['loadImg']['type'] == 'image/png') && ($_FILES['loadImg']['size'] != 0 and $_FILES['loadImg']['size']<=1512000)){ 
		if (move_uploaded_file($_FILES['loadImg']['tmp_name'], $uploadfile1)){
			$size = getimagesize($uploadfile1); 
			if ($size[0] < 5001 && $size[1]<15001){
				$addImg = 1;
			}else{
				echo '<p style="background:red; color:white; margin:0;">Загружаемое изображение превышает допустимые нормы (ширина не более - 500; высота не более 1500)</p>';
				unlink($uploadfile1); 
			} 
		} else {
			echo '<p style="background:red; color:white; margin:0;">изображение не загружено попробуйте снова!</p>';
		} 
	} else { 
	echo '<p style="background:red; color:white; margin:0;">Размер или тип изображения не коректны попрбуйте выбрать другой файл!</p>';
	}



	$name =  mysqli_real_escape_string($conect, trim($_POST['name']));
	$link = mysqli_real_escape_string($conect, trim($_POST['link']));
	$procent = mysqli_real_escape_string($conect, trim($_POST['procent']));
	$loadImg = str_replace('.jpg', '', $uploadfile1);
	$sum = mysqli_real_escape_string($conect, trim($_POST['sum']));
	$srok_ot = mysqli_real_escape_string($conect, trim($_POST['srok_ot']));
	$srok_do = mysqli_real_escape_string($conect, trim($_POST['srok_do']));
	$kart = mysqli_real_escape_string($conect, trim($_POST['kart']));
	$kart_otkaz = mysqli_real_escape_string($conect, trim($_POST['kart_otkaz']));
	$kart_kruglos = mysqli_real_escape_string($conect, trim($_POST['kart_kruglos']));
	$kart_procent = mysqli_real_escape_string($conect, trim($_POST['kart_procent']));
	$kart_srocno = mysqli_real_escape_string($conect, trim($_POST['kart_srocno']));
	$kart_bistro = mysqli_real_escape_string($conect, trim($_POST['kart_bistro']));
	$kart_maestro = mysqli_real_escape_string($conect, trim($_POST['kart_maestro']));
	$kart_18 = mysqli_real_escape_string($conect, trim($_POST['kart_18']));
	$kart_20 = mysqli_real_escape_string($conect, trim($_POST['kart_20']));
	$kart_komisii = mysqli_real_escape_string($conect, trim($_POST['kart_komisii']));
	$kart_5minut = mysqli_real_escape_string($conect, trim($_POST['kart_5minut']));
	$kart_new = mysqli_real_escape_string($conect, trim($_POST['kart_new']));
	$kart_operator = mysqli_real_escape_string($conect, trim($_POST['kart_operator']));
	$kart_mir = mysqli_real_escape_string($conect, trim($_POST['kart_mir']));
	$kart_sber = mysqli_real_escape_string($conect, trim($_POST['kart_sber']));
	$kart_proverok = mysqli_real_escape_string($conect, trim($_POST['kart_proverok']));
	$kart_mgnoveno = mysqli_real_escape_string($conect, trim($_POST['kart_mgnoveno']));
	$kart_moment = mysqli_real_escape_string($conect, trim($_POST['kart_moment']));
	$kart_kredit_history = mysqli_real_escape_string($conect, trim($_POST['kart_kredit_history']));
	$qiwi = mysqli_real_escape_string($conect, trim($_POST['qiwi']));
	$qiwi_bez_karty = mysqli_real_escape_string($conect, trim($_POST['qiwi_bez_karty']));
	$qiwi_bez_pasport = mysqli_real_escape_string($conect, trim($_POST['qiwi_bez_pasport']));
	$qiwi_po_pasportu = mysqli_real_escape_string($conect, trim($_POST['qiwi_po_pasportu']));
	$qiwi_bystro = mysqli_real_escape_string($conect, trim($_POST['qiwi_bystro']));
	$qiwi_proverok = mysqli_real_escape_string($conect, trim($_POST['qiwi_proverok']));
	$qiwi_kredit_history = mysqli_real_escape_string($conect, trim($_POST['qiwi_kredit_history']));
	$zalog = mysqli_real_escape_string($conect, trim($_POST['zalog']));
	$zalog_pts = mysqli_real_escape_string($conect, trim($_POST['zalog_pts']));
	$zalog_nedvij = mysqli_real_escape_string($conect, trim($_POST['zalog_nedvij']));
	$zalog_kwartir = mysqli_real_escape_string($conect, trim($_POST['zalog_kwartir']));
	$zalog_avto = mysqli_real_escape_string($conect, trim($_POST['zalog_avto']));
	$nal = mysqli_real_escape_string($conect, trim($_POST['nal']));
	$yandex = mysqli_real_escape_string($conect, trim($_POST['yandex']));
	$luchie = mysqli_real_escape_string($conect, trim($_POST['luchie']));
	$zp = mysqli_real_escape_string($conect, trim($_POST['zp']));
	
	if(!empty($name) and !empty($link) and !empty($procent) and !empty($loadImg) and !empty($sum) and !empty($srok_ot) and !empty($srok_do)){
		$query ="SELECT * FROM `zaymy` WHERE name = '$name'";
		$data = mysqli_query($conect, $query);
		if(mysqli_num_rows($data) == 0 and $addImg == 1 ){
			$query ="INSERT INTO`zaymy`(name, img, link, procent, sum, term_ot, term_do, na_kartu, na_kartu_bezOtkaza, na_kartu_kruglosut, na_kartu_bezProcentov, na_kartu_srocno, na_kartu_bystro, na_kartu_maestro, na_kartu_s18, na_kartu_s20, na_kartu_bezKomisii, na_kartu_za5Minut, na_kartu_novie, na_kartu_bezZvonkovOperatora, na_kartu_mir, na_kartu_sberbank, na_kartu_bezProverok, na_kartu_mgnoveno, na_kartu_momentalno, na_kartu_sPloxoyKreditnoyIstoriey, nalichnimi, na_qiwi, na_qiwi_bezKarti, na_qiwi_bezPasporta, na_qiwi_poPasportu, na_qiwi_bistro, na_qiwi_bezProverok, na_qiwi_sPloxoyKreditnoyIstoriey, na_yandex, pod_zalog, pod_zalog_pts, pod_zalog_nedvijimosti, pod_zalog_kvartiri, pod_zalog_avto, luchie, do_zp) VALUES('$name', '$loadImg', '$link', '$procent', '$sum', '$srok_ot', '$srok_do', '$kart', '$kart_otkaz', '$kart_kruglos', '$kart_procent', '$kart_srocno', '$kart_bistro', '$kart_maestro', '$kart_18',' $kart_20', '$kart_komisii', '$kart_5minut', '$kart_new', '$kart_operator', '$kart_mir', '$kart_sber', '$kart_proverok', '$kart_mgnoveno', '$kart_moment', '$kart_kredit_history', '$nal', '$qiwi', '$qiwi_bez_karty', '$qiwi_bez_pasport','$qiwi_po_pasportu', '$qiwi_bystro', '$qiwi_proverok', '$qiwi_kredit_history', '$yandex', '$zalog', '$zalog_pts', '$zalog_nedvij', '$zalog_kwartir', '$zalog_avto', '$luchie', '$zp')";
			mysqli_query($conect, $query);
			echo'<p style="background:green; color:white; margin:0;">Организация успешно добавлена!</p>';
			mysqli_close($conect);
			
		}
		else{
			if(mysqli_num_rows($data) != 0){
				echo '<p style="background:red; color:white; margin:0;">Такая организация существует!</p>';
			}else{
				echo '<p style="background:red; color:white; margin:0;">файл с изображением не загружен!</p>';
			}
			
			
		}
	}else{
		echo'<p style="background:red; color:white; margin:0;">Поля заполненны не коректно!</p>';
		
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>work</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/modification.css">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	
</head>
<body>
<form method="POST" action=<?php echo $_SERVER['PHP_SELF'];?> enctype="multipart/form-data">
<?php
	$conect = mysqli_connect('localhost','root','','credit-gold');
	if (isset($_POST['admin'])){
		
		$login = mysqli_real_escape_string($conect, trim($_POST['login']));
		$pass = mysqli_real_escape_string($conect, trim($_POST['pass']));
		$autorization = mysqli_query($conect, "SELECT `login`, `password` FROM `admin`");
		while ($result_autorization = mysqli_fetch_array($autorization)){
			if($login == $result_autorization['login'] and $pass == $result_autorization['password']){
				
				$session = 1;
				
			}else{
				echo'<p style="background:red; color:white; margin:0;">Не верный логин или пароль<p></br>
					<div class="center">
						<div class="center__column">
							<h2 class="center__title">Админ панель</h2>
							<p class="center__text">введите логин от админ панели</p>
							<input class="center__input" type = "text" name="login">
							<p class="center__text">введите пароль от админ панели</p>
							<input class="center__input" type = "password" name = "pass">
							<button class="center__button" type="submit" name="admin">войти</button>
						</div>
					</div>
				';
				exit();
			}
		}
	}else{
		if($session == 1){ 
		
			echo ' <div class="admin">
	<input placeholder="Название мфо" type="text" name="name"/>
	<input placeholder="Ссылка на мфо" type="text" name="link"/>
	<p>Укажите категории и под категории</p>
		<ul>
			<li><input type="checkbox" name="kart"/><span>На карту</span>
				<ul>
					<li><input type="checkbox" name="kart_otkaz"/><span>На карту без отказа</span></li>
					<li><input type="checkbox" name="kart_kruglos"/><span>На карту круглосуточно</span></li>
					<li><input type="checkbox" name="kart_procent"/><span>На карту без процентов</span></li>
					<li><input type="checkbox" name="kart_srocno"/><span>На карту срочно</span></li>
					<li><input type="checkbox" name="kart_bistro"/><span>На карту быстро</span></li>
					<li><input type="checkbox" name="kart_maestro"/><span>На карту маестро</span></li>
					<li><input type="checkbox" name="kart_18"/><span>На карту с 18 лет</span></li>
					<li><input type="checkbox" name="kart_20"/><span>На карту с 20 лет</span></li>
					<li><input type="checkbox" name="kart_komisii"/><span>На карту без комисии</span></li>
					<li><input type="checkbox" name="kart_5minut"/><span>На карту за 5 минут</span></li>
					<li><input type="checkbox" name="kart_new"/><span>На карту новые</span></li>
					<li><input type="checkbox" name="kart_operator"/><span>На карту без звонков оператора</span></li>
					<li><input type="checkbox" name="kart_mir"/><span>На карту мир</span></li>
					<li><input type="checkbox" name="kart_sber"/><span>На карту сбер</span></li>
					<li><input type="checkbox" name="kart_proverok"/><span>На карту без проверок</span></li>
					<li><input type="checkbox" name="kart_mgnoveno"/><span>На карту мгновенно</span></li>
					<li><input type="checkbox" name="kart_moment"/><span>На карту моментально</span></li>
					<li><input type="checkbox" name="kart_kredit_history"/><span>На карту с плохой кредитной историей</span></li>
				</ul>
			</li>
			<li><input type="checkbox" name="qiwi"/><span>На киви</span>
				<ul>
					<li><input type="checkbox" name="qiwi_bez_karty"/><span>На киви без карты</span></li>
					<li><input type="checkbox" name="qiwi_bez_pasport"/><span>На киви без паспорта</span></li>
					<li><input type="checkbox" name="qiwi_po_pasportu"/><span>На киви по паспорту</span></li>
					<li><input type="checkbox" name="qiwi_bystro"/><span>На киви быстро</span></li>
					<li><input type="checkbox" name="qiwi_proverok"/><span>На киви без проверок</span></li>
					<li><input type="checkbox" name="qiwi_kredit_history"/><span>На киви с плохой кредитной историей</span></li>
				</ul>
			</li>
			<li><input type="checkbox" name="zalog"/><span>под залог</span>
				<ul>
					<li><input type="checkbox" name="zalog_pts"/><span>под залог птс</span></li>
					<li><input type="checkbox" name="zalog_nedvij"/><span>под залог недвижимости</span></li>
					<li><input type="checkbox" name="zalog_kwartir"/><span>под залог квартиры</span></li>
					<li><input type="checkbox" name="zalog_avto"/><span>под залог авто</span></li>
				</ul>
			</li>
			<li><input type="checkbox" name="nal"/><span>наличными</span></li>
			<li><input type="checkbox" name="yandex"/><span>на яндек деньги</span></li>
			<li><input type="checkbox" name="luchie"/><span>лучшие</span></li>
			<li><input type="checkbox" name="zp"/><span>до зп</span></li>
		</ul>
	<p>Установите картинку</p>
	<input type="file" name="loadImg" id="imgFile"/>
	<input placeholder="Дневная ставка" type="number" name="procent"/>
	<input placeholder="Сумма" type="number" name="sum"/>
	<p>Срок</p>
	<div class="row">
		<input placeholder="От" type="number" name="srok_ot"/>
		<input placeholder="До" type="number" name="srok_do"/>
	</div>
	<button id="buton" name="submit" type="submit">Добавить</button>';
				exit();
	}else{
			echo'
					<div class="center">
						<div class="center__column">
						<h2 class="center__title">Админ панель</h2>
						<p class="center__text">введите логин от админ панели</p>
						<input class="center__input" type = "text" name="login">
						<p class="center__text">введите пароль от админ панели</p>
						<input class="center__input" type = "password" name = "pass">
						<button class="center__button" type="submit" name="admin">войти</button>
					</div>
				</div>
				';exit();
	}
	}if($session == 1){ 
		
			echo ' <div class="admin">
	<input placeholder="Название мфо" type="text" name="name"/>
	<input placeholder="Ссылка на мфо" type="text" name="link"/>
	<p>Укажите категории и под категории</p>
		<ul>
			<li><input type="checkbox" name="kart"/><span>На карту</span>
				<ul>
					<li><input type="checkbox" name="kart_otkaz"/><span>На карту без отказа</span></li>
					<li><input type="checkbox" name="kart_kruglos"/><span>На карту круглосуточно</span></li>
					<li><input type="checkbox" name="kart_procent"/><span>На карту без процентов</span></li>
					<li><input type="checkbox" name="kart_srocno"/><span>На карту срочно</span></li>
					<li><input type="checkbox" name="kart_bistro"/><span>На карту быстро</span></li>
					<li><input type="checkbox" name="kart_maestro"/><span>На карту маестро</span></li>
					<li><input type="checkbox" name="kart_18"/><span>На карту с 18 лет</span></li>
					<li><input type="checkbox" name="kart_20"/><span>На карту с 20 лет</span></li>
					<li><input type="checkbox" name="kart_komisii"/><span>На карту без комисии</span></li>
					<li><input type="checkbox" name="kart_5minut"/><span>На карту за 5 минут</span></li>
					<li><input type="checkbox" name="kart_new"/><span>На карту новые</span></li>
					<li><input type="checkbox" name="kart_operator"/><span>На карту без звонков оператора</span></li>
					<li><input type="checkbox" name="kart_mir"/><span>На карту мир</span></li>
					<li><input type="checkbox" name="kart_sber"/><span>На карту сбер</span></li>
					<li><input type="checkbox" name="kart_proverok"/><span>На карту без проверок</span></li>
					<li><input type="checkbox" name="kart_mgnoveno"/><span>На карту мгновенно</span></li>
					<li><input type="checkbox" name="kart_moment"/><span>На карту моментально</span></li>
					<li><input type="checkbox" name="kart_kredit_history"/><span>На карту с плохой кредитной историей</span></li>
				</ul>
			</li>
			<li><input type="checkbox" name="qiwi"/><span>На киви</span>
				<ul>
					<li><input type="checkbox" name="qiwi_bez_karty"/><span>На киви без карты</span></li>
					<li><input type="checkbox" name="qiwi_bez_pasport"/><span>На киви без паспорта</span></li>
					<li><input type="checkbox" name="qiwi_po_pasportu"/><span>На киви по паспорту</span></li>
					<li><input type="checkbox" name="qiwi_bystro"/><span>На киви быстро</span></li>
					<li><input type="checkbox" name="qiwi_proverok"/><span>На киви без проверок</span></li>
					<li><input type="checkbox" name="qiwi_kredit_history"/><span>На киви с плохой кредитной историей</span></li>
				</ul>
			</li>
			<li><input type="checkbox" name="zalog"/><span>под залог</span>
				<ul>
					<li><input type="checkbox" name="zalog_pts"/><span>под залог птс</span></li>
					<li><input type="checkbox" name="zalog_nedvij"/><span>под залог недвижимости</span></li>
					<li><input type="checkbox" name="zalog_kwartir"/><span>под залог квартиры</span></li>
					<li><input type="checkbox" name="zalog_avto"/><span>под залог авто</span></li>
				</ul>
			</li>
			<li><input type="checkbox" name="nal"/><span>наличными</span></li>
			<li><input type="checkbox" name="yandex"/><span>на яндек деньги</span></li>
			<li><input type="checkbox" name="luchie"/><span>лучшие</span></li>
			<li><input type="checkbox" name="zp"/><span>до зп</span></li>
		</ul>
	<p>Установите картинку</p>
	<input type="file" name="loadImg" id="imgFile"/>
	<input placeholder="Дневная ставка" type="number" name="procent"/>
	<input placeholder="Сумма" type="number" name="sum"/>
	<p>Срок</p>
	<div class="row">
		<input placeholder="От" type="number" name="srok_ot"/>
		<input placeholder="До" type="number" name="srok_do"/>
	</div>
	<button id="buton" name="submit" type="submit">Добавить</button>';
	exit();}

?>	

</form>
</body>
</html>
