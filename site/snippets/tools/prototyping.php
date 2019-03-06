
<script type="text/x-template" id="prototyping-tools">
  <div>
    <table id="scroll-table" v-scrolltable="">
      <thead id="fixed-header">
        <tr>
          <th v-for="column in toolsHeaders" v-bind:class="[{'sorted' : sortPath == column.sortPath}, 'fixed-header']" v-on:click="sortBy(column.sortPath, column.sortDir)">
            <span style="position: relative;" v-tooltip.bottom-left="column.tipText">{{ column.title }}
              <span class="sort-arrow" v-if="column.sortable"><?= (new Asset("assets/images/icons/chevron-down.svg"))->content() ?></span>
            </span>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="app in sortedTools">
          <td class="fixed-col"><a v-bind:href="app.url" v-bind:title="app.url" target="_blank"><img v-tooltip.right-middle="app.name" v-bind:alt="app.name + ' Logo'" src="<?php echo kirby()->urls()->assets() . '/images/blank.png' ?>" v-bind:style="app.image"/></a></td>
          <td class="name-col"><a v-bind:href="app.url" v-bind:title="app.url" target="_blank">{{ app.name }}</a></td>
          <td v-tooltip.bottom-center="app.prototyping.surveyRaw2018 + ' votes in 2018<br>Design Tools Survey'">
            <a href="/survey-2018" style="display: block;">
              <div 
                v-bind:class="[{'blue-bar' : app.prototyping.surveyRaw2018}, 'bar']" 
                v-bind:style="{ width: app.prototyping.surveyPercent2018 + '%' }">
              </div>
            </a>
          </td>
          <td class="colspan-5">
            <div class="flex-wrapper">
              <div class="flex-col">
                <div v-if="app.prototyping.platforms.web" v-tooltip.bottom-center="'Web'">
                  <div title="Web"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M19,18H6A4,4 0 0,1 2,14A4,4 0 0,1 6,10H6.71C7.37,7.69 9.5,6 12,6A5.5,5.5 0 0,1 17.5,11.5V12H19A3,3 0 0,1 22,15A3,3 0 0,1 19,18M19.35,10.03C18.67,6.59 15.64,4 12,4C9.11,4 6.6,5.64 5.35,8.03C2.34,8.36 0,10.9 0,14A6,6 0 0,0 6,20H19A5,5 0 0,0 24,15C24,12.36 21.95,10.22 19.35,10.03Z" /></svg>
                  </div>
                </div>
              </div>
              <div class="flex-col">
                <div v-if="app.prototyping.platforms.mac" v-tooltip.bottom-center="'Mac'">
                  <div title="Mac"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M18.71,19.5C17.88,20.74 17,21.95 15.66,21.97C14.32,22 13.89,21.18 12.37,21.18C10.84,21.18 10.37,21.95 9.1,22C7.79,22.05 6.8,20.68 5.96,19.47C4.25,17 2.94,12.45 4.7,9.39C5.57,7.87 7.13,6.91 8.82,6.88C10.1,6.86 11.32,7.75 12.11,7.75C12.89,7.75 14.37,6.68 15.92,6.84C16.57,6.87 18.39,7.1 19.56,8.82C19.47,8.88 17.39,10.1 17.41,12.63C17.44,15.65 20.06,16.66 20.09,16.67C20.06,16.74 19.67,18.11 18.71,19.5M13,3.5C13.73,2.67 14.94,2.04 15.94,2C16.07,3.17 15.6,4.35 14.9,5.19C14.21,6.04 13.07,6.7 11.95,6.61C11.8,5.46 12.36,4.26 13,3.5Z" /></svg>
                  </div>
                </div>
              </div>
              <div class="flex-col">
                <div v-if="app.prototyping.platforms.windows" v-tooltip.bottom-center="'Windows'">
                  <div title="Windows"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M3,12V6.75L9,5.43V11.91L3,12M20,3V11.75L10,11.9V5.21L20,3M3,13L9,13.09V19.9L3,18.75V13M20,13.25V22L10,20.09V13.1L20,13.25Z" /></svg>
                  </div>
                </div>
              </div>
              <div class="flex-col">
                <div v-if="app.prototyping.platforms.iOS" v-tooltip.bottom-center="'iOS'">
                  <div title="iOS"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M20,9V7H16A2,2 0 0,0 14,9V11A2,2 0 0,0 16,13H18V15H14V17H18A2,2 0 0,0 20,15V13A2,2 0 0,0 18,11H16V9M11,15H9V9H11M11,7H9A2,2 0 0,0 7,9V15A2,2 0 0,0 9,17H11A2,2 0 0,0 13,15V9A2,2 0 0,0 11,7M4,17H6V11H4M4,9H6V7H4V9Z" /></svg>
                  </div>
                </div>
              </div>
              <div class="flex-col">
                <div v-if="app.prototyping.platforms.android" v-tooltip.bottom-center="'Android'">
                  <div title="Android"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M15,5H14V4H15M10,5H9V4H10M15.53,2.16L16.84,0.85C17.03,0.66 17.03,0.34 16.84,0.14C16.64,-0.05 16.32,-0.05 16.13,0.14L14.65,1.62C13.85,1.23 12.95,1 12,1C11.04,1 10.14,1.23 9.34,1.63L7.85,0.14C7.66,-0.05 7.34,-0.05 7.15,0.14C6.95,0.34 6.95,0.66 7.15,0.85L8.46,2.16C6.97,3.26 6,5 6,7H18C18,5 17,3.25 15.53,2.16M20.5,8A1.5,1.5 0 0,0 19,9.5V16.5A1.5,1.5 0 0,0 20.5,18A1.5,1.5 0 0,0 22,16.5V9.5A1.5,1.5 0 0,0 20.5,8M3.5,8A1.5,1.5 0 0,0 2,9.5V16.5A1.5,1.5 0 0,0 3.5,18A1.5,1.5 0 0,0 5,16.5V9.5A1.5,1.5 0 0,0 3.5,8M6,18A1,1 0 0,0 7,19H8V22.5A1.5,1.5 0 0,0 9.5,24A1.5,1.5 0 0,0 11,22.5V19H13V22.5A1.5,1.5 0 0,0 14.5,24A1.5,1.5 0 0,0 16,22.5V19H17A1,1 0 0,0 18,18V8H6V18Z" /></svg>
                  </div>
                </div>
              </div>
            </div>
          </td>
          <td>
            <div v-if="app.pricing.free" v-tooltip.bottom-center="'Free'"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" /></svg>
            </div>
          </td>
          <td style="min-width: 100px"><span v-tooltip.bottom-center="'Subscription'">{{app.pricing.subscription}}</span></td>
          <td><span v-tooltip.bottom-center="'Price'">{{app.pricing.purchase}}</span></td>
          <td>
            <div v-if="app.prototyping.design" title="Design from scratch"><span v-tooltip.bottom-center="'Design'"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" /></svg></span></div>
          </td>
          <td class="colspan-5">
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Sketch'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/sketch.png' ?>" v-if="app.prototyping.import.sketch" title="Sketch"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Photoshop'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/photoshop.png' ?>" v-if="app.prototyping.import.photoshop" title="Photoshop"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Figma'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/figma.png' ?>" v-if="app.prototyping.import.figma" title="Figma"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Balsamiq'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/balsamiq.png' ?>" v-if="app.prototyping.import.balsamiq" title="balsamiq"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Dropbox'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/dropbox.png' ?>" v-if="app.prototyping.import.dropbox" title="dropbox"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Mobile Camera'">
                <div v-if="app.prototyping.import.camera" title="camera"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M4,4H7L9,2H15L17,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20H4A2,2 0 0,1 2,18V6A2,2 0 0,1 4,4M12,7A5,5 0 0,0 7,12A5,5 0 0,0 12,17A5,5 0 0,0 17,12A5,5 0 0,0 12,7M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9Z" /></svg>
                </div>
              </div>
            </div>
          </td>
          <td>
            <div v-if="app.prototyping.micro" v-tooltip.bottom-center="'Animations'"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" /></svg>
            </div>
          </td>
          <td>
            <div v-if="app.prototyping.transition" v-tooltip.bottom-center="'Screen transitions'"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" /></svg>
            </div>
          </td>
          <td>
            <div v-if="app.prototyping.data" v-tooltip.bottom-center="'Data'"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" /></svg>
            </div>
          </td>
          <td>
            <div v-if="app.prototyping.code" v-tooltip.bottom-center="'Code'"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" /></svg>
            </div>
          </td>
          <td class="colspan-8">
            <div class="flex-col">
              <div v-if="app.prototyping.sharing.web" v-tooltip.bottom-center="'Web'">
                <div title="Web"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M19,18H6A4,4 0 0,1 2,14A4,4 0 0,1 6,10H6.71C7.37,7.69 9.5,6 12,6A5.5,5.5 0 0,1 17.5,11.5V12H19A3,3 0 0,1 22,15A3,3 0 0,1 19,18M19.35,10.03C18.67,6.59 15.64,4 12,4C9.11,4 6.6,5.64 5.35,8.03C2.34,8.36 0,10.9 0,14A6,6 0 0,0 6,20H19A5,5 0 0,0 24,15C24,12.36 21.95,10.22 19.35,10.03Z" /></svg>
                </div>
              </div>
            </div>
            <div class="flex-col">
              <div v-if="app.prototyping.sharing.iOS" v-tooltip.bottom-center="'iOS'">
                <div title="iOS"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M20,9V7H16A2,2 0 0,0 14,9V11A2,2 0 0,0 16,13H18V15H14V17H18A2,2 0 0,0 20,15V13A2,2 0 0,0 18,11H16V9M11,15H9V9H11M11,7H9A2,2 0 0,0 7,9V15A2,2 0 0,0 9,17H11A2,2 0 0,0 13,15V9A2,2 0 0,0 11,7M4,17H6V11H4M4,9H6V7H4V9Z" /></svg>
                </div>
              </div>
            </div>
            <div class="flex-col">
              <div v-if="app.prototyping.sharing.android" v-tooltip.bottom-center="'Android'">
                <div title="Android"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M15,5H14V4H15M10,5H9V4H10M15.53,2.16L16.84,0.85C17.03,0.66 17.03,0.34 16.84,0.14C16.64,-0.05 16.32,-0.05 16.13,0.14L14.65,1.62C13.85,1.23 12.95,1 12,1C11.04,1 10.14,1.23 9.34,1.63L7.85,0.14C7.66,-0.05 7.34,-0.05 7.15,0.14C6.95,0.34 6.95,0.66 7.15,0.85L8.46,2.16C6.97,3.26 6,5 6,7H18C18,5 17,3.25 15.53,2.16M20.5,8A1.5,1.5 0 0,0 19,9.5V16.5A1.5,1.5 0 0,0 20.5,18A1.5,1.5 0 0,0 22,16.5V9.5A1.5,1.5 0 0,0 20.5,8M3.5,8A1.5,1.5 0 0,0 2,9.5V16.5A1.5,1.5 0 0,0 3.5,18A1.5,1.5 0 0,0 5,16.5V9.5A1.5,1.5 0 0,0 3.5,8M6,18A1,1 0 0,0 7,19H8V22.5A1.5,1.5 0 0,0 9.5,24A1.5,1.5 0 0,0 11,22.5V19H13V22.5A1.5,1.5 0 0,0 14.5,24A1.5,1.5 0 0,0 16,22.5V19H17A1,1 0 0,0 18,18V8H6V18Z" /></svg>
                </div>
              </div>
            </div>
            <div class="flex-col">
              <div v-if="app.prototyping.sharing.mac" v-tooltip.bottom-center="'Mac'">
                <div title="Mac"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M18.71,19.5C17.88,20.74 17,21.95 15.66,21.97C14.32,22 13.89,21.18 12.37,21.18C10.84,21.18 10.37,21.95 9.1,22C7.79,22.05 6.8,20.68 5.96,19.47C4.25,17 2.94,12.45 4.7,9.39C5.57,7.87 7.13,6.91 8.82,6.88C10.1,6.86 11.32,7.75 12.11,7.75C12.89,7.75 14.37,6.68 15.92,6.84C16.57,6.87 18.39,7.1 19.56,8.82C19.47,8.88 17.39,10.1 17.41,12.63C17.44,15.65 20.06,16.66 20.09,16.67C20.06,16.74 19.67,18.11 18.71,19.5M13,3.5C13.73,2.67 14.94,2.04 15.94,2C16.07,3.17 15.6,4.35 14.9,5.19C14.21,6.04 13.07,6.7 11.95,6.61C11.8,5.46 12.36,4.26 13,3.5Z" /></svg>
                </div>
              </div>
            </div>
            <div class="flex-col">
              <div v-if="app.prototyping.sharing.windows" v-tooltip.bottom-center="'Windows'">
                <div title="Windows"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M3,12V6.75L9,5.43V11.91L3,12M20,3V11.75L10,11.9V5.21L20,3M3,13L9,13.09V19.9L3,18.75V13M20,13.25V22L10,20.09V13.1L20,13.25Z" /></svg>
                </div>
              </div>
            </div>
            <div class="flex-col">
              <div v-if="app.prototyping.sharing.pdf" v-tooltip.bottom-center="'PDF'">
                <div title="PDF"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M11.43,10.94C11.2,11.68 10.87,12.47 10.42,13.34C10.22,13.72 10,14.08 9.92,14.38L10.03,14.34V14.34C11.3,13.85 12.5,13.57 13.37,13.41C13.22,13.31 13.08,13.2 12.96,13.09C12.36,12.58 11.84,11.84 11.43,10.94M17.91,14.75C17.74,14.94 17.44,15.05 17,15.05C16.24,15.05 15,14.82 14,14.31C12.28,14.5 11,14.73 9.97,15.06C9.92,15.08 9.86,15.1 9.79,15.13C8.55,17.25 7.63,18.2 6.82,18.2C6.66,18.2 6.5,18.16 6.38,18.09L5.9,17.78L5.87,17.73C5.8,17.55 5.78,17.38 5.82,17.19C5.93,16.66 6.5,15.82 7.7,15.07C7.89,14.93 8.19,14.77 8.59,14.58C8.89,14.06 9.21,13.45 9.55,12.78C10.06,11.75 10.38,10.73 10.63,9.85V9.84C10.26,8.63 10.04,7.9 10.41,6.57C10.5,6.19 10.83,5.8 11.2,5.8H11.44C11.67,5.8 11.89,5.88 12.05,6.04C12.71,6.7 12.4,8.31 12.07,9.64C12.05,9.7 12.04,9.75 12.03,9.78C12.43,10.91 13,11.82 13.63,12.34C13.89,12.54 14.18,12.74 14.5,12.92C14.95,12.87 15.38,12.85 15.79,12.85C17.03,12.85 17.78,13.07 18.07,13.54C18.17,13.7 18.22,13.89 18.19,14.09C18.18,14.34 18.09,14.57 17.91,14.75M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M17.5,14.04C17.4,13.94 17,13.69 15.6,13.69C15.53,13.69 15.46,13.69 15.37,13.79C16.1,14.11 16.81,14.3 17.27,14.3C17.34,14.3 17.4,14.29 17.46,14.28H17.5C17.55,14.26 17.58,14.25 17.59,14.15C17.57,14.12 17.55,14.08 17.5,14.04M8.33,15.5C8.12,15.62 7.95,15.73 7.85,15.81C7.14,16.46 6.69,17.12 6.64,17.5C7.09,17.35 7.68,16.69 8.33,15.5M11.35,8.59L11.4,8.55C11.47,8.23 11.5,7.95 11.56,7.73L11.59,7.57C11.69,7 11.67,6.71 11.5,6.47L11.35,6.42C11.33,6.45 11.3,6.5 11.28,6.54C11.11,6.96 11.12,7.69 11.35,8.59Z" /></svg>
                </div>
              </div>
            </div>
            <div class="flex-col">
              <div v-if="app.prototyping.sharing.html" v-tooltip.bottom-center="'HTML'">
                <div title="HTML"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,17.56L16.07,16.43L16.62,10.33H9.38L9.2,8.3H16.8L17,6.31H7L7.56,12.32H14.45L14.22,14.9L12,15.5L9.78,14.9L9.64,13.24H7.64L7.93,16.43L12,17.56M4.07,3H19.93L18.5,19.2L12,21L5.5,19.2L4.07,3Z" /></svg>
                </div>
              </div>
            </div>
            <div class="flex-col">
              <div v-if="app.prototyping.sharing.appleWatch" v-tooltip.bottom-center="'Apple Watch'">
                <div title="Apple Watch"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M6,12A6,6 0 0,1 12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18A6,6 0 0,1 6,12M20,12C20,9.45 18.81,7.19 16.95,5.73L16,0H8L7.05,5.73C5.19,7.19 4,9.45 4,12C4,14.54 5.19,16.81 7.05,18.27L8,24H16L16.95,18.27C18.81,16.81 20,14.54 20,12Z" /></svg>
                </div>
              </div>
            </div>
            <div class="flex-col">
              <div v-if="app.prototyping.sharing.appleTv" v-tooltip.bottom-center="'Apple TV'">
                <div title="Apple TV"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"><path d="M12 9h-2v2h2v4c0 .39.086.908.356 1.447C12.832 17.4 13.732 18 15 18c.552 0 1-.448 1-1s-.448-1-1-1c-.482 0-.707-.15-.856-.447C14.04 15.343 14 15.11 14 15v-4h2V9h-2V7c0-.552-.448-1-1-1s-1 .448-1 1v2zm5 5c0 .234.082.46.232.64l2.5 3c.4.48 1.136.48 1.536 0l2.5-3c.15-.18.232-.406.232-.64V9c0-.552-.448-1-1-1s-1 .448-1 1v4.75l-1.5 1.75-1.5-1.75V9c0-.552-.448-1-1-1s-1 .448-1 1v5zm-9.73 3.98c-.826.02-1.09-.473-2.27-.473-.7 0-.99.462-1.773.492-.808.03-1.418-.793-1.935-1.52C.238 15-.57 12.27.515 10.435c.536-.912 1.498-1.488 2.54-1.506.788-.012 1.458 1.164 1.945 1.164.48 0 1.475-1.284 2.43-1.188.4.018 1.522.156 2.243 1.188-.055.036-1.685 1.39-1.673 2.408.018 2.312 1.982 2.295 2 2.3-.018.043-.26.865-.85 1.7-.512.743-1.054 1.47-1.88 1.48zM7.442 6c.08.702-.21 1.41-.442 2-.624.424-1.326 1.054-2 1-.11-.69.236-1.644.5-2.1.58-.498 1.326-.876 1.942-.9z" fill="#555" fill-rule="evenodd"/></svg>
                </div>
              </div>
            </div>
          </td>
          <td>
            <div v-if="app.prototyping.handoff" v-tooltip.bottom-center="'Handoff'"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" /></svg>
            </div>
          </td>
          <td>
            <div v-if="app.prototyping.sensors" v-tooltip.bottom-center="'Sensors'"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" /></svg>
            </div>
          </td>
          <td>
            <div v-if="app.prototyping.voice" v-tooltip.bottom-center="'Voice'"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" /></svg>
            </div>
          </td>
          <td>
            <div v-if="app.prototyping.tasks" v-tooltip.bottom-center="'Tasks'"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" /></svg>
            </div>
          </td>
          <td>
            <div v-if="app.prototyping.analytics" v-tooltip.bottom-center="'Analytics'"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" /></svg>
            </div>
          </td>
          <td>
            <div v-if="app.prototyping.heatmap" v-tooltip.bottom-center="'Heatmap'"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" /></svg>
            </div>
          </td>

        </tr>
      </tbody>
    </table>
    <a href="https://uxtools.typeform.com/to/EFoJO3" title="Submit a new tool" class="new-tool" target="_blank"><?= (new Asset("assets/images/icons/pencil-box-outline.svg"))->content() ?><span>Suggest a change</span></a>
    <div class="promotion-missing">
      <div class="content">
        <h4>Normally there's an ad here. 🤔</h4>
        <p>I run this site by myself, so it would be awesome if you turned off your ad blocker.</p>
      </div>
    </div><ins style="display:block" data-ad-client="ca-pub-2169456968850651" data-ad-slot="8125149927" data-ad-format="auto" class="adsbygoogle"></ins>
  </div>
</script>