<?php
mysql_connect('localhost','phpadmin','1234') or die ('не підключено' .mysql_error());


mysql_select_db('inform');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type"
	content="text/html; charset=windows-1251">
<title>ІФНТУНГ інформ</title>
<link rel="stylesheet" type="text/css" href="mainstile.css">
<style>
body {
	background: url(bg.jpg);
}
</style>
</head>
<body>

	<div class="main">
		<br> <br> <br> <br> <br> <br> <br>
		<br> <br> <br> <br>




		<div class="tabsLink" align="center">
			<a href="inform.html">Головна</a> <a href="#tab1">Для викладачів</a>
			<a href="#tab2">Для студентів</a> <a href="#tab3">По аудиторіях</a> <a
				href="#tab4">Адміністрування БД</a>
		</div>

		<br> <a class="tabs" id="tab1"></a>
		<div class="tab">
			<div class="doct">
				Викладач:
				<form method = "POST">
				<input type = "text" name = "vvid"/>
				<input type = "text" name = "opys"/>
				<input type = "submit"/>
				</form>
				<?
				$vvid = $_POST['vvid'];
				$opys = $_POST['opys'];
				$select=mysql_query("SELECT * FROM users WHERE name = '".$vvid."';");
				if(mysql_num_rows($select) != 0)echo "Takiy 4uvak uje e!";
				else 
				mysql_query("INSERT INTO users (name, info) values ('".$vvid."', '".$opys."');") or die ("ne vstavleno epta".mysql_error());
				?>
				
				<div class="doct">
					<select>
						<option>П.І.П.</option>

					</select>
				</div>

				Наукова ступінь:
				<div class="stup">
					<select >
						<option>професор</option>
						<option>аспірант</option>

					</select>
				</div>

			</div>
		</div>

		<a class="tabs" id="tab2"></a>
		<div class="tab">
			Для студентів <br>
			<?php
			
			$select=mysql_query("SELECT * FROM users ORDER BY id DESC");
			
	
	$fselect=mysql_fetch_assoc($select);
		echo '<select>';
do
printf ('<option value = "'.$fselect['id'].'">'.$fselect['name'].'</option>');
		
						
				

while ($fselect=mysql_fetch_assoc($select));
				echo'</select>';
			?>
			
			
		</div>

		<a class="tabs" id="tab3"></a>
		<div class="tab">
			По аудиторіях <br>
		</div>

		<a class="tabs" id="tab4"></a>
		<div class="tab">
			ЮІоЎІп§Ґ г««бҐЄаЎ‚lueCode.ru 4 <br>
		</div>

		<a class="tabs" id="tab5"></a>
		<div class="tab">
			И жєҐ пҐ­аЎўл¬ е«  BlueCode.ru аЇ¤ оЇ¬ж±®м µ :) <br>
		</div>
		<div></div>
		
</body>


</html>