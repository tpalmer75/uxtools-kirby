<?php if($image = $item->coverimage()->toFile()): ?>
  <figure class="cover-image">
    <img src="<?= $image->url() ?>" alt="" />
  </figure>
<?php endif ?>
