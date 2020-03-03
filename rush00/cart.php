<?php
session_start();
    // echo $_SESSION['Sticker'];
    // echo $_SESSION['Tshirt'];
    // echo $_SESSION['Jacket'];
    // echo $_SESSION['Performance Tshirt'];
    // echo $_SESSION['Pullover'];
    // echo $_SESSION['Jogger'];
    // echo $_SESSION['Summer Zipup'];
    $total = ($_SESSION['Sticker'] * 1.5)
            + ($_SESSION['Tshirt'] * 7.53)
            + ($_SESSION['Jacket'] * 24.71) 
            + ($_SESSION['Performance Tshirt'] * 10) 
            + ($_SESSION['Pullover'] * 26.70) 
            + ($_SESSION['Jogger'] * 22.50) 
            + ($_SESSION['Summer Zipup'] * 31.90);


    echo "<html>
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
            #logindiv{
                background-color: bisque;
            }
            form{
                text-align: center;
            }
            body{
                background-color: bisque;
            }
            table, tr{
                text-align: center;
            }
            #rowcheckout{
                width:100%

            }
		</style>
    </header>
    <body>
		<div id=\"headingdiv\">
			<h1 class=\"heading\">WELCOME To 42 Market</h1><h1>
			<form method=\"post\" action=\"create.php\">
				<table style=\"width:100%\">
					<tr>
                        <td>
							<a href=\"landing.php\">HOME</a>
						</td>
						<td>
							<a href=\"signin.html\">SIGN IN</a>
						</td>
						<td>
							<a href=\"signup.html\">SIGN UP</a>
						</td>
						<td>
							<a href=\"cart.html\">CART</a>
						</td>
						<td>
							<a href=\"admin.PHP\">ADMIN</a>
						</td>
					</tr>
				</table>
			</form>	
        </div>
		<div id=\"mainpart\">
                <table style=\"width:100%\">
                    <tr id=\"warerow\">
                        <td>
                            <img src=\"./things to sell/sticker.jpg\" height=250px; width=250px>
                            </br> $1.50 x ".$_SESSION['Sticker'];

echo                    "</br>
                        </td>
                        <td>
                            <img src=\"./things to sell/regulartshirt.jpg\" height=250px; width=250px>
                            </br> $7.53 x " . $_SESSION['Tshirt'];



echo                        "</br>
                        </td>
                        <td>
                            <img src=\"./things to sell/ziphoodie.jpg\" height=250px; width=250px>
                            </br> $24.71 x ".$_SESSION['Jacket'];

echo                    "</br>
                        </td>
                        <td>
                            <img src=\"./things to sell/tshirt.jpg\" height=250px; width=250px>
                            </br> $10.00 x ".$_SESSION['Performance Tshirt'];


echo                "</br>
                        </td>
                    </tr>
                    <tr id=\"warerow\">
                        <td>
                            <img src=\"./things to sell/pullover.jpg\" height=250px; width=250px>
                            </br> $26.70 x ".$_SESSION['Pullover'];

echo                    "</br>
                        </td>
                        <td>
                            <img src=\"./things to sell/joggers.jpg\" height=250px; width=250px>
                            </br> $22.50 x ".$_SESSION['Jogger'];

echo                    "</br>
                        </td>
                        <td>
                            <img src=\"./things to sell/ziphoodiesummer.jpg\" height=250px; width=250px>
                            </br> $31.90 x ".$_SESSION['Summer Zipup'];

echo                     "</br>
                        </td>
                    </tr>
                </table>
            </div>";
echo "<H1 style=\"text-align:center;\">Total: $".money_format('%.2n', $total)."</H1>";
echo "
    <form method=\"get\" action=\"placeorder.php\">
        <input type=\"submit\" name=\"Place Order\" value=\"Place Order\">
    </form>";
echo "
    <form method=\"get\" action=\"clearcart.php\">
        <input type=\"submit\" name=\"Clearcart\" value=\"Clear Cart\">
    </form>";
echo "
    </body>
</html>"

?> 