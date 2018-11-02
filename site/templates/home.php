<?php snippet('header') ?>
<section class="hero">
  <div class="wrapper">
    <h1>👋 Hi, I’m <a href="/about">Taylor</a>. I compare new UX tools so you don’t have to.</h1>
    <a href="/tools"><button class="blue">See the tools <?= (new Asset("assets/images/icons/arrow-right.svg"))->content() ?></button></a>
  </div>
</section>
<section>
  <div class="wrapper">
    <div class="tile-grid-row">
      <div class="tile-grid-item two-thirds">
        <div class="tile-grid-item-content white">
          <div class="text-wrapper">
            <h2>The 2017 Design Tools Survey</h2>
            <p>Wonder which tools everyone else is using? In this survey, 2,000 designers gave their opinion on the most popular design tools of 2017.</p><a href="/survey-2017">
            <button class="blue">See the Survey <?= (new Asset("assets/images/icons/arrow-right.svg"))->content() ?>
            </button></a>
          </div>
        </div>
      </div>
      <div class="tile-grid-item one-third">
        <div class="tile-grid-item-content gray no-padding">
          <?php snippet('signup-form') ?>
        </div>
      </div>
      </div>
    <div class="tile-grid-row">
      <div class="tile-grid-item one-half">
        <div class="tile-grid-item-content">
          <h2>Hello world!</h2>
        </div>
      </div>
      <div class="tile-grid-item one-half">
        <div class="tile-grid-item-content">
          <h2>Hello world!</h2>
        </div>
      </div>
  </div>
  </div>
</section>
<!-- <section>
      <div class="wrapper">
        <div class="columns">
          <div class="content"><a href="/survey-2017">
              <div class="landing-image"><img src="assets/images/landing-image-survey.png" alt="App Logos"/><img src="assets/images/bottom-shadow.png" class="shadow-image"/></div></a></div>
          <div class="content">
            <h2>The 2017 Design Tools Survey</h2>
            <p>Wonder which tools everyone else is using? In this survey, 2,000 designers gave their opinion on the most popular design tools of 2017.</p><a href="/survey-2017">
              <button class="blue">See the Survey <?= (new Asset("assets/images/icons/arrow-right.svg"))->content() ?>
              </button></a>
          </div>
        </div>
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
          
          <div class="content large"><a href="/guides">
              <div class="landing-image"><img src="assets/images/field-guide.jpg" alt="The UX Tools Field Guide"/></div></a></div>
              <div class="content">
            <h2>The UX Tools Field Guide</h2>
            <p>Advice, tips, and tricks for the most common topics in the industry. Use this field guide to navigate the wild wilderness of UX design.</p><a href="/guides">
              <button class="blue">See the Guide <?= (new Asset("assets/images/icons/arrow-right.svg"))->content() ?>
              </button></a>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="wrapper">
        <div class="columns reverse">
          <div class="content">
            <h2>The ultimate list of UX industry books.</h2>
            <p>What's everyone reading these days? It’s hard to know where to start in a big industry like UX design. See the most popular and recommended books in the industry.</p><a href="/library">
              <button class="blue">Browse the Library <?= (new Asset("assets/images/icons/arrow-right.svg"))->content() ?></button></a>
          </div>
          <div class="content"><a href="/library">
              <div class="landing-image"><img src="assets/images/landing-image-books.png" alt="App Logos"/><img src="assets/images/bottom-shadow.png" class="shadow-image"/></div></a></div>
          
        </div>
      </div>
    </section> -->
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

<?php snippet('footer') ?>