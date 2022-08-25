<?php 
include_once './includes/_header.php'; 

include_once './includes/_head.php';
 ?>

<html>
<head>
    <title>Formulario</title>
    <meta charset="iso-8859-1">
    <link rel="stylesheet" href="style.css" media="all" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
    <h2>Formulário de contato </h2>
    <form method="post" onsubmit="validaForm(); return false;" class="form">
    <p class="name">
        <label for="name">Nome</label>
        <input type="text" placeholder="Seu Nome" />
    </p>
    <p class="email">
        <label for="email">E-mail</label>
        <input type="text" placeholder="mail@exemplo.com.br" />
    </p>
    <p class="text">
        <label for="mensagem">Mensagem</label>
        <textarea placeholder="Escreva sua mensagem" /></textarea>
    </p>
    <p class="submit">
        <input type="submit" value="Enviar" />
    </p>
    </form>
</body>
</html>

<?php
function sendMail($de,$para,$mensagem,$assunto)
{
    require_once('phpmailer/class.phpmailer.php');
    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    try {
      $mail->SMTPAuth   = true;
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPSecure = "tls"; #remova se nao usar gmail
     $mail->Port       = 587;                  #remova se nao usar gmail
      $mail->Username   = 'seuemail@gmail.com';
      $mail->Password   = 'suasenha';
      $mail->AddAddress($para);
     $mail->AddReplyTo($de);
     $mail->SetFrom($de);
      $mail->Subject = $assunto;
      $mail->MsgHTML($mensagem);
      $mail->Send();    
      $envio = true;
    } catch (phpmailerException $e) {
      $envio = false;
    } catch (Exception $e) {
      $envio = false;
    }
    return $envio;
}
?>
<!-- java test -->
<script type="text/javascript">
 function validaForm()
 {
    erro = false;
    if($('#nome').val() == '')
    {
        alert('Você precisa preencher o campo Nome');erro = true;
    }
    if($('#email').val() == '' && !erro)
    {
        alert('Você precisa preencher o campo E-mail');erro = true;
    }
    if($('#mensagem').val() == '' && !erro)
    {
        alert('Você precisa preencher o campo Mensagem');erro = true;
    }

    //se nao tiver erros
    if(!erro)
    {
        $('#formulario_contato').submit();
    }
 }
</script>
<?php
// include do footer
include_once './includes/_footer.php';     
?>