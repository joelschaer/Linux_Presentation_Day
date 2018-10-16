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


      <h2>Examples</h2>

      <h1>Heading H1</h1>
      <h2>Heading H2</h2>
      <h3>Heading H3</h3>
      <h4>Heading H4</h4>
      <h5>Heading H5</h5>
      <p>&nbsp;</p>


      <h3>Lists</h3>
      <ul>
        <li>List item</li>
        <li>List item</li>
        <li>List item</li>
      </ul>

      <ol>

        <li>List item</li>
        <li>List item</li>
        <li>List item</li>
      </ol>
      <p>&nbsp;</p>


      <blockquote><p>Mauris sit amet tortor in urna tincidunt aliquam. Pellentesque habitant morbi tristique senectus et
          netus et malesuada fames ac turpis egestas</p></blockquote>
      <p>&nbsp;</p>


      <h3>Form</h3>
      <fieldset>

        <legend>Form legend</legend>
        <form action="#" method="get">
          <p><label for="name">Name:</label>
            <input type="text" name="name" id="name" value=""/><br/></p>
          <p><label for="email">Email:</label>
            <input type="text" name="email" id="email" value=""/><br/></p>
          <p><label for="message">Message:</label>
            <textarea cols="60" rows="11" name="message" id="message"></textarea><br/></p>
          <p><input type="submit" name="send" class="formbutton" value="Send"/></p>
        </form>

      </fieldset>
      </article>

    </div>

      <?php include("includes/footer.php"); ?>
  </section>

  <div class="clear"></div>

</section>


</body>
</html>
