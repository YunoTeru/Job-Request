<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Home</title>
    <style type="text/css">
        li{

        display: inline;
        padding: 20px;


        }

        /*文字の色を白にしたい*/

        #menu{

        margin-top: 10px;
        position: fixed;
        left: 990px;
        bottom: 750px;
        z-index: 10;


        }

        .box1{

        background-image: url(../jobrequest/images/bg.jpg);
        width: 100%;
        height: 810px;
        background-position: center;
        background-size: cover;

        }

        .button{

        border:5px;
        background-color: #5B5B5B;

        }

        .button a{

        color: white;
        text-decoration: none;

        }
        .button:hover {
        background-color: gray;
        color: gray;

        }

        h1{

        position: absolute;
        bottom: 600px;
        left: 100px;
        color: white;
        font-family: 'Great Vibes', cursive;
        font-size: 100px;
        text-shadow: 2px 2px 7px #202020;


        }

    </style>
</head>
<body>
<div class="container-fuild">
	<div class="box1">
		<h1>
            Job Request
        </h1>
		<div id="menu">
			<ul>
			    <li class="button"><a href="home.php"><i class="fas fa-home">HOME</i></a></li>
				<li class="button"><a href="user/user_tbl.php" target="_blank"><i class="fas fa-user-tie">USER</i></a></li>
				<li class="button"><a href="request/request_tbl.php" target="_blank"><i class="fas fa-file-alt">REQUEST</i></a></li>
			</ul>
	</div>
</div>
</body>
</html>