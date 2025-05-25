<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>poupe</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .logo {
            width: 100px;
            height: 50px;
            margin-top: -11px;
        }


        .container {
            margin: 0 auto;
            width: 940px;
            margin-bottom: 100px;
        }

        .conteudo {
            display: flex;
            flex-direction: row;
            padding: 50px;
        }

        .btn-container {
            display: flex;
            margin-top: 20px;
        }


        .conteudoinfo {
            display: flex;
            flex-direction: row;
            padding: 50px 50rem;
        }

        .conteudo div {
            text-decoration: none;
            padding: 18px 40px;
        }

        header {
            background-color: #333;
            height: 50px;
            padding: 12px 10px 25px;
        }

        .slider input {
            display: none;
        }

        .slider {
            display: block;
            height: 293px;
            width: 600px;
            margin: auto;
            margin-top: 20px;
            position: relative;
        }

        .slider li {
            list-style: none;
            position: absolute;
        }

        .slider img {
            margin: auto;
            height: 100%;
            width: 100%;
            vertical-align: top;
        }

        .slider label {
            background-color: #000;
            bottom: 10px;
            cursor: pointer;
            display: block;
            height: 10px;
            position: absolute;
            width: 10px;
            z-index: 10;
        }

        .slider li:nth-child(1) label {
            left: 10px;
        }

        .slider li:nth-child(2) label {
            left: 40px;
        }

        .slider li:nth-child(3) label {
            left: 70px;
        }

        .slider img {
            opacity: 0;
            visibility: hidden;
        }

        .slider li input:checked~img {
            opacity: 1;
            visibility: visible;
            z-index: 10;
        }

        h1,
        h2,
        h3 {
            color: #333;
        }

        .cate {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px auto;
            max-width: 400px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
        }

        .submit {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        .form {
            width: 20%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: rgb(249, 249, 249);
            padding: 6rem 30rem;
        }

        .form-header {
            margin-bottom: 3rem;
            display: flex;
            justify-content: space-between;
        }

        #chart_div {
            width: 100%;
            max-width: 600px;
            height: 400px;
            margin: 20px auto;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        footer {
            position: relative;
            bottom: 0;
            width: 100%;
            background-color: rgb(163, 163, 163);
            padding: 20px;
            text-align: center;
        }

        #menu {
            float: right;
            padding: 1px 2px 4px;
        }

        #menu a {
            text-decoration: none;
            padding: 15px 25px;
            color: #e3e3e3;
            text-shadow: 1px 2px 1px #111;
        }

        #menu a:hover {
            background-color: #DB7093;
        }
    </style>


</head>

<body>
    <header>
        <div class="container">
            <a href="?pagina=home"><img src="img/logo.png" title="Logo" alt="Logo" class="logo"></a>
            <div id="menu">
                <a href="?pagina=despesas">Despesas</a>
                <a href="?pagina=categorias">categorias
                </a>
                <a href="?pagina=grafico">Grafico
                </a>
            </div>
        </div>
    </header>