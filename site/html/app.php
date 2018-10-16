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


      <div class="element col-12 p-card--highlighted">
        <h2>Elementary OS 5 Juno</h2>
        <div class="u-equal-height p-divider">
          <div class="col-8 p-divider__block">
            <p>Les points forts:</p>
            <ul class="p-list">
              <li class="p-list__item is-ticked">Basé sur Ubuntu</li>
              <li class="p-list__item is-ticked">Bureau dérivé de Gnome</li>
              <li class="p-list__item is-ticked">Esthétique (gros développement UI/UX)</li>
              <li class="p-list__item is-ticked">Soigné</li>
              <li class="p-list__item is-ticked">Simple</li>
            </ul>
          </div>
          <div class="col-4">
            <p class="p-card__content">
              <a class="p-button--positive is-wide" href="https://elementary.io/">Download</a>
            </p>
          </div>
        </div>
      </div>



      <?php include("includes/footer.php"); ?>
  </section>

  <div class="clear"></div>

</section>


</body>
</html>
