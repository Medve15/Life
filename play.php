<?PHP
include "head.php";

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
mysqli_free_result($result);
?>
<!-- play-Form -->
<form name="next" action="circle.php" method="post">
<input class="myButton" type="submit" name="next" value="Következő">
</form>
<!--play-Form vége-->
<!--tábla-->
<div align = "center">
<table style="background-color: white; width: 100%; text-align: right; margin-left: auto; margin-right: auto; height: 0px;" border="1" cellpadding="0" cellspacing="0">

<tbody>
<?php
for ($ir = 1; $ir <= 50; $ir++)
	{
    ?>
	<tr style="color: rgb(51, 102, 255);">


<?php
		for ($ic = 1; $ic <= 50; $ic++)
			{
 ?>
			<td style="text-align: center; width: 2%"><font size="4,5">
<?php
//Sejt létezés vizsgálat
			$sejt = "SELECT * FROM sejtek WHERE X = '$ic' AND Y = '$ir'";
				 $result = mysqli_query($connect, $sejt);

				  if (mysqli_num_rows($result) == 0)
					{
					echo "&nbsp;";
					}
					else
					{
					echo "O";
					}
			mysqli_free_result($result);
?>
			
			</font>
			</td>
<?php
			}
?>


	</tr>
	<?php
	}
?>

</tbody>
</table>
</div>
<!--tábla vége--!>

<!-- del-Form -->
<form name="del" action="index.php" method="post">
<input class="myButton" type="submit" name="del" value="Vége">
</form>
<!--del-Form vége-->

