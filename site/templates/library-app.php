  
  <?php snippet('header-library') ?>
  <section>
    <div id="library-sidebar-shade" @click="showSidebar = false" v-bind:class="{'showing':showSidebar}">
      <div id="library-sidebar" v-bind:class="{'showing':showSidebar}" @click.stop="">
        <div @click="showSidebar = false" class="close mobile"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
        </div>
        <div class="sidebar-list">
          <header>Categories</header>
          <ul>
            <li @click="categoryData.categoryModel.tags = ''" v-bind:class="{'active': !categoryData.categoryModel.tags}">  <span>All Categories</span>
            </li>
            <li v-for="option in orderedCategoryOptions" @click="setTags(option.value)" v-bind:class="{'active': categoryData.categoryModel.tags == option.value}">
              <span>{{option.name}}</span>
            </li>
            <!-- <li @click="showMoreCategories()" class="show-more"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,18.17L8.83,15L7.42,16.41L12,21L16.59,16.41L15.17,15M12,5.83L15.17,9L16.58,7.59L12,3L7.41,7.59L8.83,9L12,5.83Z" /></svg><span v-show="categoryCount &lt; 6">Show More</span><span v-show="categoryCount &gt; 5">Show Less</span> -->
            </li>
          </ul>
        </div>
        <div class="sidebar-list">
          <header>Featured Lists</header>
          <ul>
            <li v-for="list in convertedBookLists" @click="showSidebar = false" class="image-list">
              <router-link :to="{ name: 'bookList', params: {listId: list.id }}"><img v-bind:src="'<?php echo kirby()->urls()->assets() . '/images/book-recommendations/' ?>' + list.image"/>
                <div class="text-wrapper">
                  <div>{{ list.name }}</div>
                  <div class="owner">{{ list.owner }}</div>
                </div>
              </router-link>
            </li>
          </ul>
        </div>
        <div>
          <div class="promotion-missing">
            <div class="content">
              <h4>Normally there's an ad here. 🤔</h4>
              <p>I run this site by myself, so it would be awesome if you turned off your ad blocker.</p>
            </div>
          </div><ins style="display:block" data-ad-client="ca-pub-2169456968850651" data-ad-slot="9521157922" data-ad-format="auto" class="adsbygoogle"></ins>
          <script>
            (adsbygoogle = window.adsbygoogle || []).push({});		
            
          </script>
        </div>
      </div>
    </div>
    <div class="books-wrapper">
      <div class="search non-mobile">
        <input placeholder="Search..." v-model="searchTerm" v-on:change="categoryData.categoryModel.tags='';"/><?= (new Asset("assets/images/icons/magnify.svg"))->content() ?>
      </div>
      <router-view></router-view>
      <div class="promotion-missing">
        <div class="content">
          <h4>Normally there's an ad here. 🤔</h4>
          <p>I run this site by myself, so it would be awesome if you turned off your ad blocker.</p>
        </div>
      </div><ins style="display:block" data-ad-client="ca-pub-2169456968850651" data-ad-slot="9521157922" data-ad-format="auto" class="adsbygoogle"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        
        
        
        
        	
      </script>
    </div>
  </section>
  <transition name="grow">
    <div id="modal-wrapper" v-show="showModal" style="display: none;">
      <div @click="showModal=false" class="shade">
        <div ng-click="$event.stopPropagation();" class="container">
          <header>
            <div class="title"> 
              <h6>{{modalBookRecommendations.length}} Recommendation<span v-show="modalBookRecommendations.length !== 1">
                  s
                   for </span></h6>
              <h4>{{modalBookTitle}}</h4>
            </div>
            <div ng-click="showModal=false" class="close"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
            </div>
          </header>
          <div class="scroll-area">
            <ul>
              <li v-for="list in modalBookRecommendations"><a target="_blank" v-bind:href="bookLists[list].url + '?ref=uxtools.co'"><img v-bind:src="'<?php echo kirby()->urls()->assets() . '/images/book-recommendations/' ?>' +bookLists[list].image"/>
                  <div class="content">
                    <h5>{{bookLists[list].name}}</h5>
                    <h6>{{bookLists[list].owner}}</h6>
                  </div></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </transition>
</div>

<?php snippet('library-script') ?>

<script src="/assets/js/min/library-min.js?ver=20170207"></script>
<?php snippet('footer') ?>