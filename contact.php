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

  <div class="links">
    <a href="https://www.instagram.com/emporiogpf/?next=%2F" target="_blank"><i class="fa-brands fa-instagram fa-2x" style="color: #fbd5f6;" ></i></a>
    <a href="" target="_blank"><i class="fa-brands fa-linkedin fa-2x" style="color: #fbd5f6;"></i></a>
    <a href="" target="_blank"><i class="fa-brands fa-steam fa-2x" style="color: #fbd5f6;"></i></a>
    <a href="" target="_blank"><i class="fab fa-facebook fa-fw fa-2x" style="color: #fbd5f6;"></i></a>

</div>


<?php require('_footer.php') ?>