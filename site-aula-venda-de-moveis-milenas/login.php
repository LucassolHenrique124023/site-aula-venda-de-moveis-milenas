<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contatos</title>
    <link rel="stylesheet" href="styles/contato.css">
</head>
<?php 
include_once 'assets/header.php';
?> 
<main>
    <article id="arti" style="height:800px;">
        <div id="bnt" style="margin-top:135px; height:270px">
        <h2>login</h2>
        <form action="recebe-login.php" method="GET" >
        <input type="email" placeholder="email" name="email">
        <input type="password" placeholder="senha" name="senha">
        <button>logar</button>
    </form>
    </div>
    </article>
</main>
<?php 
include_once './assets/footer.php'; 
?>
