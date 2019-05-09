<?PHP
include "head.php";

//temp tábla ürítése
if($connect->query("TRUNCATE TABLE temp") == False)
		{
		echo "Sikertelen ürítés"."<br>";
		}
//tempborn tábla ürítése
if($connect->query("TRUNCATE TABLE tempborn") == False)
		{
		echo "Sikertelen ürítés"."<br>";
		}

//sejtek ellenőrzése egyesével
$sejtek = 'SELECT * FROM sejtek';
         $result = mysqli_query($connect, $sejtek);

         if (mysqli_num_rows($result) == 0)
			{
?>
<script type="text/javascript">
window.location.href = 'index.php';
</script>
<?php
            }


		while ($row = mysqli_fetch_assoc($result))
			{
//környezet meghatározása
			$xstart = $row["X"]-1;
			$xend = $row["X"]+1;
			$ystart = $row["Y"]-1;
			$yend = $row["Y"]+1;
//eletképesség vzsgálat
			$count = "SELECT ID FROM sejtek WHERE X >= $xstart AND X <= $xend AND Y >= $ystart AND Y <= $yend";
				$result2 = mysqli_query($connect, $count);
				//önmagát is bele kell számítani a számlálásba
				if (mysqli_num_rows($result2) == 3 OR mysqli_num_rows($result2) == 4)
					{		 
					mysqli_query($connect,"INSERT INTO temp (X , Y ) VALUES ($row[X],$row[Y])");
					}
					mysqli_free_result($result2);

//sejtszületések vizsgálata	
//csak létező sejtek közelében jöhet létre			

			for ($ix = $xstart; $ix <= $xend; $ix++)
				{
				for ($iy = $ystart; $iy <= $yend; $iy++)
					{
//környezet meghatározás
					$ixs = $ix-1;
					$ixe = $ix+1;
					$iys = $iy-1;
					$iye = $iy+1;
					$new = "SELECT ID FROM sejtek WHERE ( X >= $ixs AND X <= $ixe ) AND ( Y >= $iys AND Y <= $iye )";
					$result3 = mysqli_query($connect, $new);
//mivel üres cellákat vizsgálunk, 3 a szükséges az élerekeléshez
					if (mysqli_num_rows($result3) == 3)
						{
//létezés vizsgálat
						$exist = "SELECT * FROM temp WHERE X = $ix AND Y = $iy";
						$result4 = mysqli_query($connect, $exist);

						if (mysqli_num_rows($result4) == 0)
							{		 
							mysqli_query($connect,"INSERT INTO temp (X , Y ) VALUES ($ix,$iy)");
							}
						mysqli_free_result($result4);

						}

						mysqli_free_result($result3);
					}
				}
			}
mysqli_free_result($result);

//játéktábla ürítése
mysqli_query($connect,"TRUNCATE TABLE sejtek");
//temp tábla másolása a játéktáblára duplikációszűréssel

$upload = 'SELECT * FROM temp';
       $result5 = mysqli_query($connect, $upload);

		while ($row = mysqli_fetch_assoc($result5))
			{
			$exist = "SELECT ID FROM sejtek WHERE X = $row[X] AND Y = $row[Y]";
			$result6 = mysqli_query($connect, $exist);

			if (mysqli_num_rows($result6) == 0)
				{		 
				mysqli_query($connect,"INSERT INTO sejtek (X , Y ) VALUES ($row[X],$row[Y])");
				}
			mysqli_free_result($result6);
			}
		mysqli_free_result($result5);

mysqli_close($connect);
//visszatérés a táblára
?>

<script type="text/javascript">
window.location.href = 'play.php';
</script>