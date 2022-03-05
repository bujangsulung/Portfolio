<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; " />
<meta name="description" content="navigasi" />
<title>navigasi</title>
</head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css2?family=Caveat&family=League+Gothic&family=Road+Rage&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style type="text/css">

body { margin: 0;
		padding: 0;
		width: 980px;
		position: absolute;
	}
nav {display: flex;
	position: absolute;
	justify-content: space-between;
	align-item: center;
	background-color: transparent;
	height: 110px;
	width: 980px;
	border: 1px solid #000080;
	box-shadow: 0px 2px 0 rgb(0,0,128,1.0);
	z-index: 1;
	}
h1 { font-size: 40px;
	margin-left: 30px;
	color: #000080;
	font-family: 'Road Rage', cursive;
	}
.link { display: inline-block;
		width: 100px;
		height: 70px;
		text-shadow: 0px -1px 1px red;
		border: 1px solid #000080;
		background-color: #ffffff;
		margin: 20px 0px 0 0;
		border-radius: 200px;
		}
a { display: inline-block;
	text-decoration: none;
	color: #000080;
	font-size: 12px;
	margin: 30px auto;
	background-color: transparent;
	}
a:active { 
	display: inline-block;
	text-decoration: none;
	color: #ffffff;
	font-size: 12px;
	margin: 30px auto;
	background-color: transparent;
	}
.header { background-image: url(black.jpg);
		background-size: cover;
		background-repeat: no-repeat;
		}
.foto { display: inline-block;
		border: 5px solid #000080;
		border-radius: 500px;
		margin: 200px 0 0 20px; }
h2 { margin-left: 110px;
	font-family: 'League Gothic', sans-serif;
	}
.paragraf { margin: 100px 640px 0 0;}
p {text-align: center;
	font-family: 'Caveat', cursive;
	}
.masukan { width: 250px;
			height:200px;
			border: 1px solid black;
			margin: 50px 0 0px 45px;
			border-radius: 5px;
			box-shadow: 1px 2px 5px black;
			}
form {
		text-align: center;
		margin-top: 20px;
		 }
.contact { width: 200px;
			height: 42px;
			margin-left: 70px;}
.material-icons { 
			font-size: 35px;
			margin-left: 5px;
			}
</style>
<body>
<nav><h1>AWALUDIN</h1><br><br><br><br><br><br>
<button class="link"><a href="index.php">HOME</a></button>
<button class="link"><a href="Portfolio.php">PORTFOLIO</a></button>
<button class="link"><a href="about.php">ABOUT</a></button>
<button class="link"><a href="Contact.php">CONTACT ME</a></button>
</nav>
<div class="header"><img src="awaludin.jpg" class="foto" name="awaludin" alt="awaludin" width="300px" height="300px"><h2>GENERASI FRUSTASI</h2>
<div class="paragraf"><p>"Jangan Syirik ketika miskin"<br>&<br>"Jangan Sombong ketika Kaya"<br><br><br>'Ketika Kau susah'<br>'Kau akan tau siapa temanmu'<br><br><br><br>"Hiduplah"<br>"demi dirimu"<br>"demi orang tuamu"<br>&<br>"demi orang yangg peduli padamu"</p><br><br>
</div>
<div class="masukan" id="masukan">
<form method="" action="">
Nama<br>
<input type="text" name="nama" placeholder="Nama"><br>
Email<br>
<input type="email" name="email" placeholder="Email"><br><br>
<textarea></textarea><br>
<input type="submit" name="kirim" value="Kirim"><br>
</form>
</div>
<br>
<div class="contact">
<span class="material-icons">
gmail
</span>
<span class="material-icons">
facebook
</span>
<span class="material-icons">
whatsapp
</span></div><br><br>
</div></body>
</html>