<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="3" width="65%" align="center">
		<tr>
			<td align="center">BILANGAN PRIMA, GANJIL&GENAP</td>
		</tr>
		<tr>
			<td>
				<form method="get" name="frm" action="">
					Masukan Jumlah Angka Yang ingin di cari : <input  name="Jumlah" type="number">
					<input type="submit" name="btnJumlah" value="Enter"/>
				</form>
			</td>
		</tr>
		<form name="inputan" method="POST">
			<?php
			if(isset($_GET['Jumlah']) && $_GET['Jumlah']>0){
				$Jumlah_form = $_GET['Jumlah'];
			}
			else{
				$Jumlah_form = 1;
				}
				for($i=1; $i<$Jumlah_form; $i++){
				?>
		<tr>
			<td>
				angka ke <?php echo $i;?> : <input name="angka[]"  type="number" size="15" />
			</td>
		</tr>
		<?php
			}
		?>
		<tr>
			<td>
				<input type="submit" name="button" value="hasil">
				<input type="reset" value="ulang / reset">
			</td>
		</tr>
		<tr>
			<td>
				Genap :
				<?php

			if(isset($_POST['button'])){
				$angka = $_POST['angka'];

			foreach ($angka as $key => $val) {
				if($angka[$key]%2==0){
					echo $angka[$key],",";
				}
			'<br>';
			}

			}
			?>
			<br>
				Ganjl:
				<?php
			if (isset($_POST['button'])) {
				$angka = $_POST['angka'];
				foreach ($angka as $key => $val) {
					if($angka[$key]%2==1){
						echo $angka[$key].",";
					}
					'<br>';
				}
			}
			?>
			<br>
				Prima :
						<?php
				if(isset($_POST['button'])){

					$angka = $_POST['angka'];
					
					foreach ($angka as $key => $val) {
						if($angka[$key]%2==1){
							echo $angka[$key].",";
						}
						'<br>';
					}
				}
				?>

			</td>
		</tr>

		</form>
		
	</table>
<blink><a href="indexx.html"><font size="3" color="blue"><Center>kembali ke awal</center></font></blink></a>
</body>
</html>