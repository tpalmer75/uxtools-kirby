<?php snippet('header') ?>
<section class="hero">
  <div class="wrapper">
    <h1>👋 Hi, I’m <a href="/about">Taylor</a>. I compare new UX tools so you don’t have to.</h1>
    <a href="/tools"><button class="blue">See the tools <?= (new Asset("assets/images/icons/arrow-right.svg"))->content() ?></button></a>
  </div>
</section>
<section>
      <div class="wrapper">
        <div class="columns reverse">
          <div class="content">
            <h2>The ultimate comparison of UX industry tools.</h2>
            <p>There's a new design tool every week. What's the difference? See how these design, prototyping, collaboration, and monitoring tools work for you.</p><a href="/tools">
              <button class="blue">See the Tools <?= (new Asset("assets/images/icons/arrow-right.svg"))->content() ?>
              </button></a>
          </div>
          <div class="content"><a href="/tools">
              <div class="landing-image"><img src="assets/images/landing-image-logos.png" alt="App Logos"/><img src="assets/images/bottom-shadow.png" class="shadow-image"/></div></a></div>
        </div>
      </div>
    </section>
    <section style="padding: 20px 0; text-align: center; position: relative;">

      <?php snippet('google-ad') ?>
        
    </section>
    <section>
      <div class="wrapper">
        <div class="columns">
          <div class="content"><a href="/library">
              <div class="landing-image"><img src="assets/images/landing-image-books.png" alt="App Logos"/><img src="assets/images/bottom-shadow.png" class="shadow-image"/></div></a></div>
          <div class="content">
            <h2>The ultimate list of UX industry books.</h2>
            <p>What's everyone reading these days? It’s hard to know where to start in a big industry like UX design. See the most popular and recommended books in the industry.</p><a href="/library">
              <button class="blue">Browse the Library <?= (new Asset("assets/images/icons/arrow-right.svg"))->content() ?></button></a>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="wrapper extra-wide">
        <h2 style="text-align: center;">From the UX Tools Blog</h2>
        <div class="blog-preview">
          <ul>
            <?php foreach(page('blog')->children()->flip()->limit(3) as $article): ?>
            <li>
              <a href="<?php echo $article->url() ?>">
                <div class="image-container">
                  <?php snippet('coverimage', $article) ?>
                </div>
                <h4><?php echo html($article->title()) ?></h4>
              </a>
            </li>
            <?php endforeach ?>
          </ul>
        </div>
      </div>
    </section>

    <?php snippet('signup-form') ?>

    <footer>
      <p>Made by <a href="https://twitter.com/@_taylorpalmer">Taylor Palmer</a> in his spare time.</p>
      
    </footer>

<?php snippet('footer') ?>