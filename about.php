<?php

// Função para incluir o cabeçalho do documento
function includeHeader() {
    $headerFile = '_header.php';
    if (file_exists($headerFile)) {
        require($headerFile);
    }
}

// Função para incluir o rodapé do documento
function includeFooter() {
    $footerFile = '_footer.php';
    if (file_exists($footerFile)) {
        require($footerFile);
    }
}

// Configurações desta página
$page = array(
    "title" => "Nossa História",
    "css" => "about.css"
);

// Inclui o cabeçalho do documento
includeHeader();
?>

<article>

    <h2>O Legado do Empório GPF</h2>
    <br><br>
    <p>
    Há muitos anos, numa pequena cidade costeira, um grupo de jovens empreendedores tinha um sonho tão vasto quanto os horizontes do mar que banhavam sua cidade natal. Em 1985, Gustavo Oliveira, Gladson Marques, Patrick Reis e Flavia Virgynia fundaram o Empório GPF com uma visão clara em mente: proporcionar aos habitantes de sua comunidade uma experiência de compras única e abrangente, onde pudessem encontrar tudo o que precisavam sob um mesmo teto.

O grupo compreendia as necessidades diversificadas de sua clientela. Eles acreditavam que uma loja não era apenas um local para comprar itens essenciais, mas também um espaço para criar memórias e fortalecer laços comunitários. Assim, o Empório GPF não era apenas uma loja; era um ponto de encontro para os moradores locais, um lugar onde histórias eram compartilhadas e novas amizades surgiam.

A diversidade de produtos vendidos no Empório GPF refletia a visão inclusiva dos fundadores. Desde eletrônicos de última geração até alimentos frescos colhidos na região, passando por perfumes exóticos, roupas estilosas e uma vasta gama de produtos de beleza, cada item cuidadosamente selecionado para atender às necessidades e desejos variados dos clientes.

Os eletrônicos eram uma paixão compartilhada pelos fundadores, que sempre acompanhavam de perto as últimas tendências tecnológicas para garantir que seus clientes tivessem acesso aos produtos mais inovadores. Os alimentos frescos eram uma homenagem à rica tradição agrícola da região, com o Empório GPF apoiando agricultores locais e promovendo práticas sustentáveis de produção. Os perfumes, roupas e produtos de beleza eram escolhidos a dedo para refletir a diversidade cultural da comunidade, oferecendo opções para todos os gostos e estilos.

Ao longo dos anos, o Empório GPF cresceu e se expandiu, tornando-se um ponto de referência não apenas na cidade costeira, mas em toda a região. No entanto, mesmo com o sucesso comercial, os fundadores nunca perderam de vista suas raízes e valores fundamentais. Eles continuaram a dedicar-se pessoalmente ao negócio, garantindo que o Empório GPF permanecesse fiel à sua missão original de servir à comunidade.

Hoje, o Empório GPF é mais do que uma loja; é um símbolo de excelência, integridade e compromisso comunitário. A cada compra feita em suas dependências, os clientes não apenas levam para casa produtos de alta qualidade, mas também carregam consigo um pedaço da história e do legado dos fundadores que transformaram um simples sonho em realidade.
    </p><br><br><br><br><br><br>
    <h2>Políticas de Privacidade e Segurança do Empório GPF</h2>
  <br><br>
    <p>Desde sua fundação em 1985, os criadores do Empório GPF, Gustavo Oliveira, Gladson Marques, Patrick Reis e Flavia Virgynia, sempre colocaram a segurança e a privacidade de seus clientes em primeiro lugar. Eles compreendem a importância de proteger as informações pessoais de seus clientes e estão comprometidos em garantir que todas as transações realizadas em sua loja sejam seguras e confidenciais.

Para proteger a privacidade dos clientes, o Empório GPF implementou uma rigorosa política de privacidade que abrange a coleta, o uso e o armazenamento de informações pessoais. Os dados dos clientes são tratados com o mais alto nível de confidencialidade e só são utilizados para processar pedidos, fornecer suporte ao cliente e melhorar a experiência de compra.

Além disso, o Empório GPF adota medidas de segurança robustas para proteger as informações dos clientes contra acesso não autorizado, uso indevido ou divulgação. Isso inclui a utilização de tecnologias avançadas de criptografia para proteger as transações online e a implementação de protocolos de segurança rigorosos em todas as etapas do processo de compra.

Os criadores do Empório GPF também estão comprometidos em manter um ambiente seguro para seus clientes em sua loja física. Eles investem em sistemas de segurança modernos, como câmeras de vigilância e alarmes, para garantir a segurança dos clientes e funcionários.

Além disso, o Empório GPF está sempre atualizado com as regulamentações de privacidade e segurança mais recentes, garantindo que suas políticas e práticas estejam em conformidade com as leis aplicáveis.

Em resumo, os criadores do Empório GPF têm um compromisso inabalável com a privacidade e a segurança de seus clientes, garantindo que cada visita à sua loja seja uma experiência tranquila e segura.

</p>
</article>

<aside>

    <h3>Veja +</h3>
    <ul>
        <li><a href="contacts.php">Faça contato conosco</a></li>
        <?php if (isset($site['sitename'])): ?>
            <li><a href="about.php">Sobre o <?php echo $site['sitename'] ?></a></li>
        <?php endif; ?>
    </ul>

</aside>

<?php
// Inclui o rodapé do documento
includeFooter();
?>