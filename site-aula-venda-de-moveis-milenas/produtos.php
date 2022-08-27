<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="styles/produtos.css">
 </head>
 <?php 
include_once 'assets/header.php';
include_once 'includes/_dados.php';
?>
 <body>
     <main>
         <article>
    <section>
        <?php
        for($i=0;$i<count($produtos);$i++){
            ?>
            <form action="produto.php" method="GET">
            <div>
                <input type="number" style="visibility:hidden;" name="butao" value="<?php echo$i?>">
            <img src="<?php echo $produtos[$i]["link"]?>">
            <h2><?php echo $produtos[$i]["nome"]?></h2>
            <h3><?php echo $produtos[$i]["preco"]?></h3>
                <button>ver mais</button>
                
            </div>
        </form>
            <?php
            }
            ?>
    </section>
</article>
</main>
</body>
<?php 
include_once './assets/footer.php'; 
?>