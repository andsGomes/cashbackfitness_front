<?php



if (isset($_POST['email']) && !empty($_POST['email'])) {

  $nome = addslashes($_POST['nome']);
  $email = addslashes($_POST['email']);
  $assunto = addslashes($_POST['assunto']);
  $mensagem = addslashes($_POST['mensagem']);


  $to = "atendimento@cashbackfitness.club";
  $subject = "Fale Conosco - atendimento br";
  $body =  "Nome :    " . $nome .   "\r\n" .
    "Email :   " . $email .  "\r\n" .
    "Assunto : " . $assunto . "\r\n" .
    "Mensagem :" . $mensagem;


  $header = "From:" . $email . "\r\n" .
    "Reply-To:" . $email . "\r\n" .
    "X=Mailer:PHP/" . phpversion();


  if (mail($to, $subject, $body, $header)) {
    echo ("Email enviado com sucesso.");
    sleep(3);
    // header ("location: http://www.cashbackfitness.club/index.html");
    //die();
  } else {
    echo ("O Email nao pode ser enviado.");
    //sleep(3);
    //header("Location: http://www.cashbackfitness.club/index.html");

    die();

  }
}

?>