<?php snippet('header') ?>

<section class="wrapper medium">

  <header>
    <h1><?= $page->title()->html() ?></h1>

    <div class="intro text">
      <?= $page->text()->kirbytext() ?>
    </div>

</header>

<div>
  <ul class="blog-preview large">
    <?php if($articles->count()): ?>
      <?php foreach($page->children()->flip() as $article): ?>

      <li>
        <div class="blog-preview-flex">
          <div class="blog-preview-img">

            <a href="<?php echo $article->url() ?>">
              <div class="image-container">

                <?php snippet('coverimage', $article) ?>

              </div>
            </a>
          </div>
          <div class="blog-preview-content">
            <h4>
              <a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
            </h4>



          <time class="small"><?= $article->date('F jS, Y') ?></time>
          <p class="blog-preview-text">
            <?= $article->text()->kirbytext()->excerpt(30, 'words') ?>
          </p>
          <a href="<?= $article->url() ?>" class="read-more">Read More</a>
        </div>
      </li>

    <?php endforeach ?>
  </ul>
<?php else: ?>
  <p>This blog does not contain any articles yet.</p>
<?php endif ?>
</div>


</section>

<?php snippet('signup-form') ?>

<?php snippet('footer') ?>