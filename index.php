<?php inlude header.php ?>

  <section class="banner">
    <a href="/esporte">
      <img style="display:block; margin:auto;" src="img/Banner-home-esporte-cidadania-encerrado.jpg"
        alt="Edita Esporte e Cidadania">
    </a>
    <a href="docs/Relatorio-Anual-Instituto-Assai.pdf" target="_blank">
      <img style="display:block; margin:auto;" src="img/banner_relatorioanual2022_institutoassai.jpg?v2"
        alt="Relatório anual e de sustentabilidade">
    </a>
  </section>

  <!--section id="top">
    <div class="container">
      <h2>Ações para transformar, oportunidades para crescer</h2>
      <h3>Conheça o instituto Assaí</h3>
    </div>
  </!section-->

  <section id="quem">
    <div class="container">
      <h2>#QuemSomos?</h2>
      <p>O Instituto Assaí é o responsável pelo investimento social do Assaí Atacadista, e foi criado para promover
        oportunidades e caminhos de prosperidade para pessoas e comunidades.</p>
      <p>O Assaí já realizou diversas ações sociais além de projetos institucionais com o objetivo de potencializar e
        fomentar o microempreendedorismo no setor de alimentos em regiões de vulnerabilidade social pelo Brasil.</p>
      <p>Agora queremos fazer ainda mais. Nos dedicaremos de maneira independente fortalecendo a ação com nossa cultura,
        promovendo o cuidado da nossa gente e o desenvolvimento das comunidades.</p>
    </div>
  </section>

  <section id="frentes">
    <div class="container">
      <h2>Frentes de atuação</h2>
      <ul>
        <li class="empreendedorismo">Empreendedorismo</li>
        <li class="alimentacao">Alimentação</li>
        <li class="esporte">Esporte</li>
      </ul>
    </div>
  </section>

  <section id="video">
    <div class="container">
      <h2>Compartilhar <strong>conhecimento</strong><br />para multiplicar <strong>sucesso</strong>.</h2>
      <iframe width="100%" height="615" src="https://www.youtube.com/embed/yPVdX_KXSok" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>
  </section>

  <section id="redes">
    <div class="container">
      <div class="col-1"></div>
      <div class="col-2">
        <ul class="posts">
          <li>
            <a href="https://www.instagram.com/institutoassai/">
              <img src="img/p01.jpg" />
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/institutoassai/">
              <img src="img/p02.jpg" />
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/institutoassai/">
              <img src="img/p03.jpg" />
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/institutoassai/">
              <img src="img/p04.jpg" />
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/institutoassai/">
              <img src="img/p05.jpg" />
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/institutoassai/">
              <img src="img/p06.jpg" />
            </a>
          </li>
        </ul>
      </div>
      <div class="col-3">
        <h3><strong>Nos acompanhe</strong> nas redes sociais</h3>
        <ul class="redes">
          <li>
            <a class="fb" href="https://www.facebook.com/institutoassai" target="_blank">Facebook</a>
          </li>
          <li>
            <a class="insta" href="https://www.instagram.com/institutoassai/" target="_blank">Instagram</a>
          </li>
          <!--li>
            <a class="lk" href="https://www.linkedin.com/company/institutoassaiatacadista/" target="_blank">Linkedin</a>
          </li-->
        </ul>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <p><strong>Assaí Atacadista.</strong> Todos os direitos reservados | Powered by: MegaMidia Group</p>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="slick/slick.min.js"></script>
  <script>
    $('.banner').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      autoplay: true,
    });
  </script>
  <script src="https://plugin.handtalk.me/web/latest/handtalk.min.js"></script>
  <script>
    var ht = new HT({
      token: "e97f0c8dde9806e59c9895dbe199cc95"
    });
  </script>
</body>

</html>