<?php
$ido=$_GET["butao"];
include_once 'assets/header.php';
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="styles/produto.css">
 </head>
<?php
include_once 'includes/_dados.php'
?>
<body>
    <article>
        <img src="<?php echo$produtos[$ido]["link"] ?>" alt="">
        <h2><?php echo$produtos[$ido]["nome"] ?></h2>
        <p>moveis de qualidade aprovada pelos cupins, desmonta rapido porem não monta mais, venha comprar o <?php echo$produtos[$ido]["nome"]?>, esse é um dos melhores produtos possiveis á compra, você será a pessoa mais feliz do mundo caso compre esse produto de qualidade testada por mim, diria que monaliza é como uma formiga perto do meu elefante de móveis revigorantes de perfeito estado as vezes, na real quase nunca.</p>
        <h3><?php echo$produtos[$ido]["preco"]?></h3>
        <button>comprar</button>
    </article>
</body>
<?php 
include_once './assets/footer.php'; 
?>