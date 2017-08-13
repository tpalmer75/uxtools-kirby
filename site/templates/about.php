<?php snippet('header') ?>

<section>
  <div class="wrapper small">

    <?= $page->text()->kirbytext() ?>
    
    <div><a href="https://twitter.com/uxtoolsco" style="text-decoration: none">
        <button class="blue icon-left">
          <?= (new Asset("assets/images/icons/twitter.svg"))->content() ?>
            Follow @uxtoolsco on Twitter
        </button></a></div>
    <div><a href="mailto:taylor@uxtools.co" style="text-decoration: none">
        <button class="blue icon-left">
          <?= (new Asset("assets/images/icons/email.svg"))->content() ?>
            taylor@uxtools.co
        </button></a></div>
  </div>
</section>

<?php snippet('footer') ?>