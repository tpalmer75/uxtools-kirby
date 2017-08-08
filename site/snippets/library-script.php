<script type="text/x-template" id="book-list">
      <div>
        <header v-if="listId" class="books-header">
          <div class="flex-wrapper"><a v-bind:href="bookLists[listId].url" target="_blank"><img v-bind:src="'<?php echo kirby()->urls()->assets() . '/images/book-recommendations/' ?>'+bookLists[listId].image"/></a>
            <div class="content-wrapper">
              <h3>{{ bookLists[listId].name }}</h3><a v-bind:href="bookLists[listId].url" target="_blank">
                <h4>{{ bookLists[listId].owner }}<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M21,11L14,4V8C7,9 4,14 3,19C5.5,15.5 9,13.9 14,13.9V18L21,11Z" /></svg>
                </h4></a>
            </div>
          </div>
          <router-link to="/" class="view-all"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M21,5C19.89,4.65 18.67,4.5 17.5,4.5C15.55,4.5 13.45,4.9 12,6C10.55,4.9 8.45,4.5 6.5,4.5C4.55,4.5 2.45,4.9 1,6V20.65C1,20.9 1.25,21.15 1.5,21.15C1.6,21.15 1.65,21.1 1.75,21.1C3.1,20.45 5.05,20 6.5,20C8.45,20 10.55,20.4 12,21.5C13.35,20.65 15.8,20 17.5,20C19.15,20 20.85,20.3 22.25,21.05C22.35,21.1 22.4,21.1 22.5,21.1C22.75,21.1 23,20.85 23,20.6V6C22.4,5.55 21.75,5.25 21,5M21,18.5C19.9,18.15 18.7,18 17.5,18C15.8,18 13.35,18.65 12,19.5V8C13.35,7.15 15.8,6.5 17.5,6.5C18.7,6.5 19.9,6.65 21,7V18.5Z" /></svg><span>View All Books</span>
          </router-link>
        </header>
        <transition name="slide-down">
          <div v-show="$parent.computedTags || $parent.searchTerm" v-bind:class="{'showing': $parent.computedTags || $parent.searchTerm}" class="filter-wrapper">
            <div class="filter-growl"> <span>Only showing "{{$parent.computedTags}}{{$parent.searchTerm}}"</span><span @click="clearAll()" class="close">Dismiss</span></div>
          </div>
        </transition>
        <ul id="books">
          <li v-for="book in books">
            <div class="book-wrapper">
              <div class="image-container"><a v-bind:href="book.url" target="_blank" v-bind:title="book.title"><img v-bind:alt="book.title" v-bind:src="'<?php echo kirby()->urls()->assets() . '/images/book-covers/' ?>' + book.image" class="cover"/></a></div>
              <div class="book-info"><a v-bind:href="book.url" target="_blank" v-bind:title="book.title">
                  <h4 class="title">{{ shortenedTitle(book.title) }}</h4></a>
                <h5><em>by </em>{{ book.author }}</h5>
                <ul class="tags">
                  <li v-for="tag in book.tags" @click="clearAll(); scrollToTop(); $parent.categoryData.categoryModel.tags = tag">{{ tag }}</li>
                </ul>
                <div @click="$parent.showModal=true; $parent.setModalData(book);" class="book-lists"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M17,3H7A2,2 0 0,0 5,5V21L12,18L19,21V5C19,3.89 18.1,3 17,3Z" /></svg><span>{{book.recommendations.length}}</span>
                </div>
              </div>
            </div>
          </li>
          <li style="padding: 0; border-bottom: none;"></li>
          <li style="padding: 0; border-bottom: none;"></li>
          <li style="padding: 0; border-bottom: none;"></li>
          <li style="padding: 0; border-bottom: none;"></li>
          <li style="padding: 0; border-bottom: none;"></li>
        </ul>
        <div v-if="listId &amp;&amp; books.length" style="font-size: 14px; color: #999;" class="no-books">
          <p>These are just the books from {{ bookLists[listId].owner }}'s list. Want to see more? <a @click="reset()">View&nbsp;All&nbsp;Books</a></p>
        </div>
        <div v-if="!books.length" class="no-books">
          <p>Hmm, looks like there aren't any books here.
            <button @click="reset()" class="blue small">View All Books</button>
          </p>
        </div>
      </div>
    </script>