
<script type="text/x-template" id="versioning-tools">
  <div>
    <table id="scroll-table" v-scrolltable="">
      <thead id="fixed-header">
        <tr>
          <th v-for="column in toolsHeaders" v-bind:class="[{'sorted' : sortPath == column.sortPath}, 'fixed-header']" v-on:click="sortBy(column.sortPath, column.sortDir)">
            <span style="position: relative;">{{ column.title }}
              <span class="sort-arrow" v-if="column.sortable"><?= (new Asset("assets/images/icons/chevron-down.svg"))->content() ?></span>
            </span>
            <p class="notes" v-html="column.notes"></p>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="app in sortedTools">
          <td class="fixed-col"><a v-bind:href="app.url" v-bind:title="app.url" target="_blank"><img v-tooltip.right-middle="app.name" v-bind:alt="app.name + 'Logo'" src="<?php echo kirby()->urls()->assets() . '/images/blank.png' ?>" v-bind:style="app.image"/></a></td>
          <td class="name-col"><a v-bind:href="app.url" v-bind:title="app.url" target="_blank">{{ app.name }}</a></td>
          <td v-tooltip.bottom-center="app.versioning.surveyRaw2018 + ' votes in 2018<br>Design Tools Survey'">
            <a href="/survey-2018" style="display: block;">
              <div 
                v-bind:class="[{'blue-bar' : app.versioning.surveyRaw2018}, 'bar']" 
                v-bind:style="{ width: app.versioning.surveyPercent2018 + '%' }">
              </div>
            </a>
          </td>
          <td class="colspan-3">
            <div class="flex-wrapper">
              <div class="flex-col">
                <div v-if="app.versioning.platforms.web" v-tooltip.bottom-center="'Web'">
                  <div title="Web"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M19,18H6A4,4 0 0,1 2,14A4,4 0 0,1 6,10H6.71C7.37,7.69 9.5,6 12,6A5.5,5.5 0 0,1 17.5,11.5V12H19A3,3 0 0,1 22,15A3,3 0 0,1 19,18M19.35,10.03C18.67,6.59 15.64,4 12,4C9.11,4 6.6,5.64 5.35,8.03C2.34,8.36 0,10.9 0,14A6,6 0 0,0 6,20H19A5,5 0 0,0 24,15C24,12.36 21.95,10.22 19.35,10.03Z" /></svg>
                  </div>
                </div>
              </div>
              <div class="flex-col">
                <div v-if="app.versioning.platforms.mac" v-tooltip.bottom-center="'Mac'">
                  <div title="Mac"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M18.71,19.5C17.88,20.74 17,21.95 15.66,21.97C14.32,22 13.89,21.18 12.37,21.18C10.84,21.18 10.37,21.95 9.1,22C7.79,22.05 6.8,20.68 5.96,19.47C4.25,17 2.94,12.45 4.7,9.39C5.57,7.87 7.13,6.91 8.82,6.88C10.1,6.86 11.32,7.75 12.11,7.75C12.89,7.75 14.37,6.68 15.92,6.84C16.57,6.87 18.39,7.1 19.56,8.82C19.47,8.88 17.39,10.1 17.41,12.63C17.44,15.65 20.06,16.66 20.09,16.67C20.06,16.74 19.67,18.11 18.71,19.5M13,3.5C13.73,2.67 14.94,2.04 15.94,2C16.07,3.17 15.6,4.35 14.9,5.19C14.21,6.04 13.07,6.7 11.95,6.61C11.8,5.46 12.36,4.26 13,3.5Z" /></svg>
                  </div>
                </div>
              </div>
            </div>
          </td>
          <td>
            <div v-if="app.pricing.free" v-tooltip.bottom-center="'Free'"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" /></svg>
            </div>
          </td>
          <td><span v-tooltip.bottom-center="'Team'">{{app.pricing.team}}</span></td>
          <td class="colspan-2">
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Sketch'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/sketch.png' ?>" v-if="app.versioning.import.sketch" title="Sketch"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Photoshop'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/photoshop.png' ?>" v-if="app.versioning.import.photoshop" title="Photoshop"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Illustrator'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/illustrator.png' ?>" v-if="app.versioning.import.illustrator" title="Illustrator"/></div>
            </div>
          </td>
          <td>
            <div v-if="app.versioning.symbols" v-tooltip.bottom-center="'Symbols'"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" /></svg>
            </div>
          </td>
          <td>
            <div v-if="app.versioning.documents" v-tooltip.bottom-center="'Documents'"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" /></svg>
            </div>
          </td>
          <td>
            <div v-if="app.versioning.branching" v-tooltip.bottom-center="'Branching'"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" /></svg>
            </div>
          </td>
          <td>
            <div v-if="app.versioning.preview" v-tooltip.bottom-center="'Preview'"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" /></svg>
            </div>
          </td>
          <td>
            <div v-if="app.versioning.compare" v-tooltip.bottom-center="'Compare'"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" /></svg>
            </div>
          </td>
          <td>
            <div v-if="app.versioning.comments" v-tooltip.bottom-center="'Comments'"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" /></svg>
            </div>
          </td>
          <td class="colspan-5">
            <div class="flex-col">
              <div v-if="app.versioning.sharing.web" v-tooltip.bottom-center="'Web'">
                <div title="Web"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M19,18H6A4,4 0 0,1 2,14A4,4 0 0,1 6,10H6.71C7.37,7.69 9.5,6 12,6A5.5,5.5 0 0,1 17.5,11.5V12H19A3,3 0 0,1 22,15A3,3 0 0,1 19,18M19.35,10.03C18.67,6.59 15.64,4 12,4C9.11,4 6.6,5.64 5.35,8.03C2.34,8.36 0,10.9 0,14A6,6 0 0,0 6,20H19A5,5 0 0,0 24,15C24,12.36 21.95,10.22 19.35,10.03Z" /></svg>
                </div>
              </div>
            </div>
            <div class="flex-col">
              <div v-if="app.versioning.sharing.mac" v-tooltip.bottom-center="'Mac'">
                <div title="Mac"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M18.71,19.5C17.88,20.74 17,21.95 15.66,21.97C14.32,22 13.89,21.18 12.37,21.18C10.84,21.18 10.37,21.95 9.1,22C7.79,22.05 6.8,20.68 5.96,19.47C4.25,17 2.94,12.45 4.7,9.39C5.57,7.87 7.13,6.91 8.82,6.88C10.1,6.86 11.32,7.75 12.11,7.75C12.89,7.75 14.37,6.68 15.92,6.84C16.57,6.87 18.39,7.1 19.56,8.82C19.47,8.88 17.39,10.1 17.41,12.63C17.44,15.65 20.06,16.66 20.09,16.67C20.06,16.74 19.67,18.11 18.71,19.5M13,3.5C13.73,2.67 14.94,2.04 15.94,2C16.07,3.17 15.6,4.35 14.9,5.19C14.21,6.04 13.07,6.7 11.95,6.61C11.8,5.46 12.36,4.26 13,3.5Z" /></svg>
                </div>
              </div>
            </div>
          </td>
          <td style="min-width: 100px">
            <div class="flex-col">
              <div v-if="app.versioning.integrations.slack" v-tooltip.bottom-center="'Slack'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/slack.png' ?>" title="Slack"/></div>
            </div>
            <div class="flex-col">
              <div v-if="app.versioning.integrations.gitlab" v-tooltip.bottom-center="'GitLab'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/gitlab.png' ?>" title="GitLab"/></div>
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