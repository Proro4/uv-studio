  <link rel="stylesheet" type="text/css" href="css/style.css">
<?
  if (isset($_POST['name']) && isset($_POST['telephone'])   && isset($_POST['email']))  {
 
     if (empty($_POST['name']) || empty($_POST['telephone'])    || empty($_POST['email'])) {
   
       echo "
        <div class='send-page'>
          <div class='header-wrap header-send'>
            <div class='main-container header' id='home'>
              <a href='#' class='logo'><img src='img/logo.png' alt=''><span class='orange-text'>Termex</span><span class='green-text'>Pro</span></a>
            </div>
          </div>
          <div class='send-message'>
            <p class='sent-title'>Благодарим вас за внимание к нашей продукции!</p>
            <p class='send-text'>Нажаль, ваше сообщение не было отправлено, попробуйте вернутся на главную страницу и отправить заново.</p>
          </div>
          <a href='https://termexpro.com' class='send-link'>Вернуться на главную</a>
        </div>
       ";

    } else {

      $name = strip_tags($_POST['name']);

      $telephone = strip_tags($_POST['telephone']);

      $email = strip_tags($_POST['email']);

      $text = strip_tags($_POST['text']);

      

       $to = "info@termexpro.com";

       $charset = "utf-8";

       $subject = "New massage";

       $content = "text/plain";

       $message = "Name: $name \n\nTelephone: $telephone \n\nText: $text \n\nE-mail: $email";

      

       $send = mail($to, $subject, $message);

       echo "
        <div class='send-page'>
          <div class='header-wrap header-send'>
            <div class='main-container header' id='home'>
              <a href='#' class='logo'><img src='img/logo.png' alt=''><span class='orange-text'>Termex</span><span class='green-text'>Pro</span></a>
            </div>
          </div>
          <div class='send-message'>
            <p class='sent-title'>Благодарим вас за внимание к нашей продукции!</p>
            <p class='send-text'>Ваша заявка будет обработана в ближайшее время и наш менеджер свяжется с Вами для уточнения Вашего заказа.</p>
          </div>
          <a href='https://termexpro.com' class='send-link'>Вернуться на главную</a>
        </div>
       ";
     }

   } else {

    echo "
    <div class='send-page'>
      <div class='header-wrap header-send'>
        <div class='main-container header' id='home'>
          <a href='#' class='logo'><img src='img/logo.png' alt=''><span class='orange-text'>Termex</span><span class='green-text'>Pro</span></a>
        </div>
      </div>
      <div class='send-message'>
        <p class='sent-title'>Благодарим вас за внимание к нашей продукции!</p>
        <p class='send-text'>Нажаль, ваше сообщение не было отправлено, попробуйте вернутся на главную страницу и отправить заново.</p>
      </div>
      <a href='https://termexpro.com' class='send-link'>Вернуться на главную</a>
    </div>
    ";
  }

?>
