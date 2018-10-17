<?php include("includes/a_config.php"); ?>

<?php include("includes/header.php"); ?>


<body>

<section id="body" class="width">
  <aside id="sidebar" class="column-left">

      <?php include("includes/header.php"); ?>
      <?php include("includes/nav.php"); ?>

  </aside>

  <section id="content" class="column-right">

    <div class="column">


      <div class="title">
        <h3><?php echo $PAGE_TITLE ?></h3>
      </div>


      <div class="element p-card--highlighted">
        <h2>JetBrain</h2>
        <div class="u-equal-height p-divider">
          <div class="p-divider__block">
            <p>Un éditeur qui met à disposition une collection d'outils très puissants pour le développement dans n'importe quel language.</p>
            <ul class="p-list">
              <li class="p-list__item is-ticked">Clion (c, c++)</li>
              <li class="p-list__item is-ticked">IntelliJ (Java)</li>
              <li class="p-list__item is-ticked">PyCharm (Python)</li>
              <li class="p-list__item is-ticked">WebStorm (Javascript)</li>
              <li class="p-list__item is-ticked">PhpStorm (Php, Web)</li>
            </ul>
          </div>
          <div class="">
            <p class="p-card__content">
              <a class="p-button--positive is-wide" href="https://www.jetbrains.com/toolbox/app/">Download</a>
            </p>
          </div>
          <p><small>Pour bénéficier de la licence étudiant, il faut d'abord <a href="https://www.jetbrains.com/shop/eform/students">s'enregister comme étudiant</a>.</small></p>
        </div>
      </div>

      <div class="element p-card--highlighted">
        <h2>LibreOffice</h2>
        <div class="u-equal-height p-divider">
          <div class="p-divider__block">
            <p>Permet d'éditer tous les documents office dont on a besoin.</p>
            <ul class="p-list">
              <li class="p-list__item is-ticked">Write</li>
              <li class="p-list__item is-ticked">Calc</li>
              <li class="p-list__item is-ticked">Impress</li>
            </ul>
          </div>
          <div class="">
            <p class="p-card__content">
              <a class="p-button--positive is-wide" href="https://www.libreoffice.org/download/download/">Download</a>
            </p>
          </div>
          <p><small>Sous Ubuntu</small></p>
          <blockquote>
            <p> sudo apt update </p>
            <p> sudo apt install libreoffice</p>
          </blockquote>
        </div>
      </div>

      <div class="element p-card--highlighted">
        <h2>Okular</h2>
        <div class="u-equal-height p-divider">
          <div class="p-divider__block">
            <p>Lecteur éditeur de pdf</p>
          </div>
          <p><small>Sous Ubuntu</small></p>
          <blockquote>
            <p> sudo apt update </p>
            <p> sudo apt install okular</p>
          </blockquote>
        </div>
      </div>

      <div class="element p-card--highlighted">
        <h2>TexMaker</h2>
        <div class="u-equal-height p-divider">
          <div class="p-divider__block">
            <p>Editeur de document LaTex.</p>
          </div>
          <p><small>Sous Ubuntu</small></p>
          <blockquote>
            <p>sudo apt update </p>
            <p>sudo apt install texlive-full</p>
            <p>sudo apt install texmaker</p>
          </blockquote>
          <p><small>"texlive" est le compilateur LaTex. Il est impératif de l'installer pour que l'éditeur fonctionne.</small></p>
        </div>
      </div>

      <div class="element p-card--highlighted">
        <h2>Git</h2>
        <div class="u-equal-height p-divider">
          <div class="p-divider__block">
            <p>Outil de travail collaboratif. Très utilisé dans le monde du développement. Permet de faire du versionning et donc de revenir en arrière dans le temps.</p>
            <ul class="p-list">
              <li class="p-list__item is-ticked">Collaborer durant un labo.</li>
              <li class="p-list__item is-ticked">Partager du code</li>
              <li class="p-list__item is-ticked">Garder un versionning de ses fichiers</li>
            </ul>
          </div>
          <p><small>Sous Ubuntu</small></p>
          <blockquote>
            <p> sudo apt update </p>
            <p> sudo apt install okular</p>
          </blockquote>
        </div>
      </div>

      <div class="element p-card--highlighted">
        <h2>RedShift</h2>
        <div class="u-equal-height p-divider">
          <div class="p-divider__block">
            <p>Permet d'atténuer la lumière bleue de l'écran. Certaines distribution ont déjà cet outil intégré.</p>
            <ul class="p-list">
              <li class="p-list__item is-ticked">Se fatiguer moins les yeux</li>
              <li class="p-list__item is-ticked">Travail plus agréable</li>
            </ul>
          </div>
          <p><small>Sous Ubuntu</small></p>
          <blockquote>
            <p> sudo apt update </p>
            <p> sudo apt install reshift-gtk</p>
          </blockquote>
        </div>
      </div>

      <div class="element p-card--highlighted">
        <h2>tldr</h2>
        <div class="u-equal-height p-divider">
          <div class="p-divider__block">
            <p>C'est une sorte de man page du strict minimum. Les man pages sont un manuel de toutes les options d'une commande. tldr ne donne que la structure des commandes sous leur forme la plus courante. C'est donc un rappel rapide de l'utilisation d'une commande</p>
            <ul class="p-list">
              <li class="p-list__item is-ticked">Rappel rapide</li>
              <li class="p-list__item is-ticked">Strict minimum</li>
              <li class="p-list__item is-ticked">Participatif</li>
            </ul>
          </div>
          <p><small>Avec npm :</small></p>
          <blockquote>
            <p> npm install -g tldr </p>
          </blockquote>
          <p><small>Il est possible d'ajouter des pages en faisant une pull request sur <a href="https://github.com/tldr-pages/tldr">github</a></small></p>
        </div>
      </div>


      <?php include("includes/footer.php"); ?>
  </section>

  <div class="clear"></div>

</section>


</body>
</html>
