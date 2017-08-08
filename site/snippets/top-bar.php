<div class="top-bar">
    <h1 class="screen-reader">
    </h1>
    <div class="wrapper">
      <div class="left"><a href="/"><img id="logo" src="<?php echo kirby()->urls()->assets() . '/images/uxtools-logo.svg' ?>" alt="UX Tools"/></a></div>
      <div class="right">
        <nav>
        <ul>
          <?php foreach($pages->visible() as $item): ?>
          <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
            <a href="<?= $item->url() ?>"><span><?= $item->menutitle()->html() ?></span></a>
          </li>
          <?php endforeach ?>
          <li><a href="http://newsletter.uxtools.co">
              <button class="small">Subscribe</button></a>
            </li>
        </ul>
        </nav>
      </div>
      <div id="hamburger" @click="showMenu = true">
        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" /></svg>
        </div><span>Menu</span>
      </div>
    </div>
  </div>
  <div id="sidebar" v-bind:class="{'show-menu': showMenu}">
    <div id="shade" @click="showMenu = false" class="shade">
      <div class="container">
          <nav role="navigation">
            <ul>
              <?php foreach($pages->visible() as $item): ?>
              <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
                <a href="<?= $item->url() ?>">
                <span><?= $item->menutitle()->html() ?></span>
                </a>
              </li>
              <?php endforeach ?>
              <li><a href="http://newsletter.uxtools.co">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
              <span>Subscribe</span></a></li>
            </ul>
          </nav>
        <div id="close" ng-click="$root.showMenu = false" class="close">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
        </div>
      </div>
    </div>
  </div>