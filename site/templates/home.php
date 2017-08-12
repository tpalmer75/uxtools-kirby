<?php snippet('header') ?>

<section>
      <div class="wrapper">
        <div class="columns reverse">
          <div class="content">
            <h2>The ultimate comparison of UX industry tools.</h2>
            <p>There's a new design tool every week. What's the difference? See how these design, prototyping, collaboration, and monitoring tools work for you.</p><a href="/tools">
              <button class="blue">See the Tools </button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#fff" fill-rule="evenodd" d="M0 6.92v2h12.01l-5.5 5.5 1.4 1.42 7.93-7.92L7.92 0 6.5 1.41l5.5 5.5z"/></svg></a>
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
              <button class="blue">Browse the Library</button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#fff" fill-rule="evenodd" d="M0 6.92v2h12.01l-5.5 5.5 1.4 1.42 7.93-7.92L7.92 0 6.5 1.41l5.5 5.5z"/></svg></a>
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