<?php

$title = " - Fale Conosco";


require('_header.php') ?>

<h1>Entre em contato e nos siga nas redes sociais</h1>

<div class="contact">
  <form action="action_page.php" method="post">

    <label for="fname">Nome</label>
    <input type="text" id="fname" name="nome" placeholder="...">

    <label for="lname">E-mail</label>
    <input type="text" id="lname" name="email" placeholder="...">

    <label for="subject">Mensagem</label>
    <textarea id="subject" name="mensagem" placeholder="Pergunte..." style="height:200px"></textarea>

    <input type="submit" value="enviar">

  </form>


<?php require('_footer.php') ?>