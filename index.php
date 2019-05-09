<?PHP
include "head.php";
//Sejt hozzáadása
if(isset($_POST['add']))
	{
			$sql="INSERT INTO sejtek (X , Y )
				  VALUES ($_POST[X],$_POST[Y])";
		 
			if ($connect->query($sql) === TRUE)
				{
				echo "Sikeres Sejt felvétel"."<br>";
				}
				else
				{
				{die('Adatbázis hiba: ' . mysql_error());}
				}
	}
//sejtek törlése
if(isset($_POST['del']))
	{
	if($connect->query("TRUNCATE TABLE sejtek") == TRUE)
		{
		echo "Sikeres ürítés"."<br>";
		}
		else
		{
		{die('Adatbázis hiba: ' . mysql_error());}
		}
	}

//sejtek számlálása
$sejtek = 'SELECT ID FROM sejtek';
         $result = mysqli_query($connect, $sejtek);

         if (mysqli_num_rows($result) == 0)
			{
			echo "Nincsenek felvett sejtek";
            }
			else
			{
			$db = mysqli_num_rows($result);
			echo $db."db sejt van a táblában";
			}

?>
<!--add-Form táblázat-->
<form name="add" action="index.php" method="post">
<div align = "center">
<table style="background-color: white; width: 70%; text-align: right; margin-left: auto; margin-right: auto; height: 0px;" border="0" cellpadding="2" cellspacing="2">

<tbody>

<tr style="color: rgb(51, 102, 255);">
<td style="text-align: right; width: 50%"><font size="4,5">X koordináta:</font>
</td>
<td style="text-align: left; width: 50%"><input autocomplete="off" placeholder="X" required name="X" type="text">
</td>
</tr>

<tr style="color: rgb(51, 102, 255);">
<td style="text-align: right; width: 50%"><font size="4,5">Y koordináta:</font>
</td>
<td style="text-align: left; width: 50%"><input autocomplete="off" placeholder="Y" required name="Y" type="text">
</td>
</tr>

<tr style="color: rgb(51, 102, 255);">
<td colspan="2" style="text-align: center; width: 100%"><input class="myButton" type="submit" name="add" value="Hozzáad">
</td>
</tr>

</tbody>
</table>
</div>
</form>
<!--add-Form vége--!>

<!-- del-Form -->
<form name="del" action="index.php" method="post">
<input class="myButton" type="submit" name="del" value="Ürítés">
</form>
<!--del-Form vége-->

<!-- play-Form -->
<form name="play" action="play.php" method="post">
<input class="myButton" type="submit" name="play" value="Játék">
</form>
<!--play-Form vége-->