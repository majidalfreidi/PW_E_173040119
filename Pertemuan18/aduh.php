<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        * {
	        box-sizing: border-box;
        }
        body {
            font-family: poppins;
            font-size: 16px;
            color: #fff;
        }
        .form-box {
            background-color: grey;
            margin: auto auto;
            padding: 40px;
            border-radius: 5px;
            /* box-shadow: 0 0 10px #000; */
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 430px;
            height: 430px;
        }
        /* .form-box:before {
            background-image: url("https://i.postimg.cc/8cnYLpfc/ddddd.jpg");
            width: 100%;
            height: 100%;
            background-size: cover;
            content: "";
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: -1;
            display: block;
            filter: blur(2px);
        } */
        .form-box .header-text {
            font-size: 32px;
            font-weight: 600;
            padding-bottom: 30px;
            text-align: center;
        }
        .form-box input {
            margin: 10px 0px;
            border: none;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            font-size: 18px;
            font-family: poppins;
        }
        .form-box input[type=checkbox] {
            display: none;
        }
        .form-box label {
            position: relative;
            margin-left: 5px;
            margin-right: 10px;
            top: 5px;
            display: inline-block;
            width: 20px;
            height: 20px;
            cursor: pointer;
        }
        .form-box label:before {
            content: "";
            display: inline-block;
            width: 20px;
            height: 20px;
            border-radius: 5px;
            position: absolute;
            left: 0;
            bottom: 1px;
            background-color: #ddd;
        }
        .form-box input[type=checkbox]:checked+label:before {
            content: "\2713";
            font-size: 20px;
            color: #000;
            text-align: center;
            line-height: 20px;
        }
        .form-box span {
            font-size: 14px;
        }
        .form-box button {
            background-color: deepskyblue;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
            padding: 10px;
            margin: 20px 0px;
        }
        span a {
            color: #BBB;
        }

    </style>
</head>
<body>
<div class="form-box">
		<div class="header-text">
			Login Form
		</div>
        <input placeholder="Your Email Address" type="text"> 
        <input placeholder="Your Password" type="password"> 
        <input id="terms" type="checkbox"> 
        <label for="terms"></label>
        <span>Agree with <a href="#">Terms & Conditions</a></span> 
        <button>login</button>
</div>
</body>
</html>