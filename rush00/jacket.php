<?php
	session_start();
	//check if logged in and if it is then pull from csv file
	// if(isset($_SESSION['loggued_on_user']))
	// {

	// }

	//init the varaibles if the user inst logged on
	if(!isset($_SESSION['Sticker']) || !isset($_SESSION['loggued_on_user']))
	{
		$_SESSION['Sticker'] = 0;
		$_SESSION['Tshirt'] = 0;
		$_SESSION['Jacket'] = 0;
		$_SESSION['Performance Tshirt'] = 0;
		$_SESSION['Pullover'] = 0;
		$_SESSION['Jogger'] = 0;
		$_SESSION['Summer Zipup'] = 0;
	}
	if(isset($_GET['submit']))
	{
		$_SESSION[$_GET['submit']] += 1;
	}
	//update the csv file
	if(isset($_SESSION['loggued_on_user']))
	{
		$fh = fopen("userdata.csv", "r+");
		while (($line = fgetcsv($fh)) !== FALSE)
		{
			if($line[0] == $_SESSION['loggued_on_user'])
			{
				$data = array(
					"name" => $_SESSION['loggued_on_user'],
					"Sticker" => $_SESSION['Sticker'],
					"Tshirt" => $_SESSION['Tshirt'],
					"Jacket" => $_SESSION['Jacket'],
					"Performance Tshirt" => $_SESSION['Performance Tshirt'],
					"Pullover" => $_SESSION['Pullover'],
					"Jogger" => $_SESSION['Jogger'],
					"Summer Zipup" => $_SESSION['Summer Zipup'],
				);
				fputcsv($fh, $data);
				continue ;
			}
			fputcsv($fh, $line);
		}
		fclose($fh);
	}
?>

<html>
	<header>
		<style>
			.heading{
				text-align: center;
				background-color: aqua;
			}
			#headingdiv{
				height: 100px;
				width: auto;
				background-color: aqua;
			}
			td{
				text-align: center;
			}
			#mainpart{
				background-color: bisque;
				height: 100%;
				width: 100%;
			}
			#tableware{
				border-style: solid;
				border-color: black;
			}
			#warerow{
				border: 1px solid black;
			}
			#cate{
				background-color: bisque;
				width: 100%;
			}
		</style>
	</header>
	<body>
		<div id="headingdiv">
			<h1 class="heading">Welcome to the 42 Market<h1>
			<form method="post" action="create.php">
				<table style="width:100%">
					<tr>
						<td>
							<a href="landing.php">HOME</a>
						</td>
						<td>
							<a href="signin.html">SIGN IN</a>
						</td>
						<td>
							<a href="signup.html">SIGN UP</a>
						</td>
						<td>
							<a href="cart.php">CART</a>
						</td>
						<td>
							<a href="admin.html">ADMIN</a>
						</td>
					</tr>
				</table>
			</form>	
		</div>
		<div id = "cate">
			<a href="jacket.php">Jackets</a>  |   <a href="everythingelse.php">Everything Else</a>
		</div>
		<div id="mainpart">
			<table style="width:100%">
				<tr id="warerow">
					<td>
					<td>
						<img src="./things to sell/ziphoodie.jpg" height=250px; width=250px>
						</br>Price $24.71
						</br>
						<form method="get" action="jacket.php">
							<input type="submit" name="submit" value="Jacket">
						</form>
					</td>
                    <td>
						<img src="./things to sell/pullover.jpg" height=250px; width=250px>
						</br>Price $26.70
						</br>
						<form method="get" action="jacket.php">
							<input type="submit" name="submit" value="Pullover">
						</form>
					</td>
					<td>
						<img src="./things to sell/ziphoodiesummer.jpg" height=250px; width=250px>
						</br>Price $31.90
						</br>
						<form method="get" action="jacket.php">
							<input type="submit" name="submit" value="Summer Zipup">
						</form>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>
