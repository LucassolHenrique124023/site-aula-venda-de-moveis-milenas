<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="styles/categorias.css">
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
        for($i=0;$i<count($categorias);$i++){
            ?>
            <a href="produtos.php"><div>
            <img src="<?php echo $categorias[$i]["link"]?>">
            <h2><?php echo $categorias[$i]["nome"]?></h2>
            </div></a>
            <?php
            $id=$i;
            }
            ?>
    </section>
</article>
</main>
</body>
<?php 
include_once './assets/footer.php'; 
?>