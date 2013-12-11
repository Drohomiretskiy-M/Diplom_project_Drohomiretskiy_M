<?php
mysql_connect('localhost','phpadmin','1234') or die ('не підключено' .mysql_error());
mysql_select_db('inform');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
			<a href="inform.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspГоловна&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
			<a href="#tab1">&nbsp&nbsp&nbspДля викладачів&nbsp&nbsp&nbsp</a> <a
				href="#tab2">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspДля
				студентів&nbsp&nbsp&nbsp&nbsp&nbsp</a> <a href="#tab3">&nbsp&nbsp&nbsp&nbspПо
				аудиторіях&nbsp&nbsp&nbsp&nbsp</a> <a href="#tab4">Адміністрування
				БД</a>
		</div>

		
		<div class="tab">
			
				Викладач:
				<?php
			
			$select=mysql_query("SELECT * FROM vicladach ORDER BY id DESC");
			
	
	$fselect=mysql_fetch_assoc($select);
		echo '<select>';
do
printf ('<option value = "'.$fselect['id'].'">'.$fselect['name'].'</option>');
		
						
				

while ($fselect=mysql_fetch_assoc($select));
				echo'</select>';
			?>
				</br></br>Наукова ступінь:
				<?php
			
			$select=mysql_query("SELECT * FROM vicladach ORDER BY id DESC");
			
	
	$fselect=mysql_fetch_assoc($select);
		echo '<select>';
do
printf ('<option value = "'.$fselect['id'].'">'.$fselect['stupen'].'</option>');
		
						
				

while ($fselect=mysql_fetch_assoc($select));
				echo'</select>';
			?>


			</div>
		</div>



		

		<div class="roz">
			<table cellspacing="2" border="1" cellpadding="5" width="100%">
				<tr>
					<td align="center" width="0%"><b>Розклад дзвінків </b></br> </br> І пара
						– 8.00-9.20</br> ІІ пара – 9.35-10.55</br> ІІІ пара – 11.10-12.30</br> ІV пара -
						12.45-14.05</br> V пара – 14.35-15.55</br> VІ пара – 16.10-17.30</br> VІІ пара –
						17.45-19.05</br> VІІІ пара – 19.20-20.40</br></td>

					<td width="60%">
					
					
					
					
					<a class="tabs" id="tab3"></a>
		<div class="tab">
			По аудиторіях <br>
		</div>

		<a class="tabs" id="tab4"></a>
		<div class="tab">
			<div align="center">Адміністрування БД<br><br><br></div>

			<form method="POST">
				Викладач:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text"
					name="pip" value="П.І.П" /> </br>
Наукова ступінь:<input type="text "name="stup" /> 
			
			<?
				$pip = $_POST['pip'];
				$stup = $_POST['stup'];
				$select=mysql_query("SELECT * FROM vicladach WHERE name = '".$pip."';");
				if(mysql_num_rows($select) != 0){
				echo '</br> <div class ="warning">' ;
					echo "Такий викладач вже є!!!";
					echo "</div></br>";}
				else 
				{
				if (preg_match("/^[а-я]+$/ui", $pip)) {
					
					echo '</br> <div class ="warning">' ;
					echo "Дані занесено до БД.";
					echo "</div></br>";
				}
				else 
				{
					echo '</br> <div class ="warning">' ;
					echo "Дані НЕ занесено до БД.";	echo "</div>";
				}
								if($pip == "" ||$pip == "П.І.П"  || empty($pip))
				{
				echo '</br> <div class ="warning">' ;
					echo "Уведіть п.і.п. викладача!";
					echo "</div></br>" ;}
							else
				mysql_query("INSERT INTO vicladach (name, stupen) values ('".$pip."', '".$stup."');") or die ("Зміни не внесено".mysql_error());
				}
				?>
</br><input type="submit" align="center" "value="Додати" />
</form>
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
						</br></br>
						
						
						
						
						
						</br></br></br></br>	</br></br></br></br>	</br></br></br></br>	</br></br></br></br>
						<div align="center" class="copi">
								</br>ІФНТУНГ Інформ &copy 2014 </br> MishaD
							</div>
						</div></td>
					<td align="center" width="20%">
						<div align="center">
							<script language="JavaScript"
								src="http://101widgets.com/02000101/137/43"></script>
							</br>
							<script language="JavaScript"
								src="http://101widgets.com/00001602/170/170"></script>
							<div align="center">
								<script language="JavaScript"
									src="http://101widgets.com/0500011i/88/31"></script>
							</div>
						</div>
						</div>
					</td>
				</tr>
			</table>

		</div>
</body>


</html>