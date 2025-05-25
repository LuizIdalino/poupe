<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>poupe</title>
    <link rel="stylesheet" href="/style/bootstrap/bootstrap.min.css">
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

        .container {
            margin: 0 auto;
            width: 940px;
        }

        header {
            position: relative;
            background-color: rgb(114, 146, 104);
            height: 70px;
            padding: 12px 10px 25px;
        }

        .conteudo {
            display: flex;
            flex-direction: row;
            padding: 50px;
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
            background-color: rgb(114, 146, 104);
            height: 50px;
            padding: 12px 10px 25px;
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

        footer {
            background-color: rgb(163, 163, 163);
            bottom: 0;
            position: absolute;
            height: 1px;
            width: 100%;
            padding: 7px 15px 85px 15px;
            text-align: center;
        }

        #menu {
            float: right;
            padding: 1px 2px 4px;
        }

        #menu a {
            text-decoration: none;
            padding: 20px 25px;
            color: #e3e3e3;
            text-shadow: 1px 2px 1px #111;
        }

        #menu a:hover {
            background-color: #44b4b8;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <a href="?pagina=home"><img src="img/logo.jpg" title="Logo" alt="Logo" class="logo"></a>
            <div id="menu">
                <a href="?pagina=despesas">Cadastro Despesas</a>
                <a href="?pagina=categorias">Cadastro categorias
                </a>
                <a href="?pagina=grafico">Grafico
                </a>
            </div>
        </div>
    </header>