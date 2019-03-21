
<script type="text/x-template" id="handoff-tools">
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
          <td v-tooltip.bottom-center="app.handoff.surveyRaw2018 + ' votes in 2018<br>Design Tools Survey'">
            <a href="/survey-2018" style="display: block;">
              <div
                v-bind:class="[{'blue-bar' : app.handoff.surveyRaw2018}, 'bar']"
                v-bind:style="{ width: app.handoff.surveyPercent2018 + '%' }">
              </div>
            </a>
          </td>
          <td class="colspan-3">
            <div class="flex-wrapper">
              <div class="flex-col">
                <div v-if="app.handoff.platforms.web" v-tooltip.bottom-center="'Web'">
                  <div title="Web"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M19,18H6A4,4 0 0,1 2,14A4,4 0 0,1 6,10H6.71C7.37,7.69 9.5,6 12,6A5.5,5.5 0 0,1 17.5,11.5V12H19A3,3 0 0,1 22,15A3,3 0 0,1 19,18M19.35,10.03C18.67,6.59 15.64,4 12,4C9.11,4 6.6,5.64 5.35,8.03C2.34,8.36 0,10.9 0,14A6,6 0 0,0 6,20H19A5,5 0 0,0 24,15C24,12.36 21.95,10.22 19.35,10.03Z" /></svg>
                  </div>
                </div>
              </div>
              <div class="flex-col">
                <div v-if="app.handoff.platforms.mac" v-tooltip.bottom-center="'Mac'">
                  <div title="Mac"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M18.71,19.5C17.88,20.74 17,21.95 15.66,21.97C14.32,22 13.89,21.18 12.37,21.18C10.84,21.18 10.37,21.95 9.1,22C7.79,22.05 6.8,20.68 5.96,19.47C4.25,17 2.94,12.45 4.7,9.39C5.57,7.87 7.13,6.91 8.82,6.88C10.1,6.86 11.32,7.75 12.11,7.75C12.89,7.75 14.37,6.68 15.92,6.84C16.57,6.87 18.39,7.1 19.56,8.82C19.47,8.88 17.39,10.1 17.41,12.63C17.44,15.65 20.06,16.66 20.09,16.67C20.06,16.74 19.67,18.11 18.71,19.5M13,3.5C13.73,2.67 14.94,2.04 15.94,2C16.07,3.17 15.6,4.35 14.9,5.19C14.21,6.04 13.07,6.7 11.95,6.61C11.8,5.46 12.36,4.26 13,3.5Z" /></svg>
                  </div>
                </div>
              </div>
              <div class="flex-col">
                <div v-if="app.handoff.platforms.windows" v-tooltip.bottom-center="'Windows'">
                  <div title="Windows"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M3,12V6.75L9,5.43V11.91L3,12M20,3V11.75L10,11.9V5.21L20,3M3,13L9,13.09V19.9L3,18.75V13M20,13.25V22L10,20.09V13.1L20,13.25Z" /></svg>
                  </div>
                </div>
              </div>
              <div class="flex-col">
                <div v-if="app.handoff.platforms.linux" v-tooltip.bottom-center="'Linux'">
                  <div title="Linux"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M13.18,14.5C12.53,15.26 11.47,15.26 10.82,14.5L7.44,10.5C7.16,11.28 7,12.12 7,13C7,14.67 7.57,16.18 8.5,17.27C10,17.37 11.29,17.96 11.78,19C11.85,19 11.93,19 12.22,19C12.71,18 13.95,17.44 15.46,17.33C16.41,16.24 17,14.7 17,13C17,12.12 16.84,11.28 16.56,10.5L13.18,14.5M20,20.75C20,21.3 19.3,22 18.75,22H13.25C12.7,22 12,21.3 12,20.75C12,21.3 11.3,22 10.75,22H5.25C4.7,22 4,21.3 4,20.75C4,19.45 4.94,18.31 6.3,17.65C5.5,16.34 5,14.73 5,13C4,15 2.7,15.56 2.09,15C1.5,14.44 1.79,12.83 3.1,11.41C3.84,10.6 5,9.62 5.81,9.25C6.13,8.56 6.54,7.93 7,7.38V7A5,5 0 0,1 12,2A5,5 0 0,1 17,7V7.38C17.46,7.93 17.87,8.56 18.19,9.25C19,9.62 20.16,10.6 20.9,11.41C22.21,12.83 22.5,14.44 21.91,15C21.3,15.56 20,15 19,13C19,14.75 18.5,16.37 17.67,17.69C19.05,18.33 20,19.44 20,20.75M9.88,9C9.46,9.5 9.46,10.27 9.88,10.75L11.13,12.25C11.54,12.73 12.21,12.73 12.63,12.25L13.88,10.75C14.29,10.27 14.29,9.5 13.88,9H9.88M10,5.25C9.45,5.25 9,5.9 9,7C9,8.1 9.45,8.75 10,8.75C10.55,8.75 11,8.1 11,7C11,5.9 10.55,5.25 10,5.25M14,5.25C13.45,5.25 13,5.9 13,7C13,8.1 13.45,8.75 14,8.75C14.55,8.75 15,8.1 15,7C15,5.9 14.55,5.25 14,5.25Z" /></svg>
                  </div>
                </div>
              </div>
            </div>
          </td>
          <check-box-table-cell :tool-property="app.pricing.free"></check-box-table-cell>
          <td>
            <span>{{app.pricing.cost}}</span>
            <p class="notes">{{app.pricing.notes}}</p>
          </td>
          <td class="colspan-2">
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Sketch'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/sketch.png' ?>" v-if="app.handoff.programs.sketch" title="Sketch"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Photoshop'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/photoshop.png' ?>" v-if="app.handoff.programs.photoshop" title="Photoshop"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Adobe XD'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/adobe-xd.png' ?>" v-if="app.handoff.programs.adobeXd" title="Adobe XD"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Figma'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/figma.png' ?>" v-if="app.handoff.programs.figma" title="Figma"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Illustrator'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/illustrator.png' ?>" v-if="app.handoff.programs.illustrator" title="Illustrator"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Indesign'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/indesign.png' ?>" v-if="app.handoff.programs.indesign" title="Indesign"/></div>
            </div>

          </td>
          <check-box-table-cell :tool-property="app.handoff.specs"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.handoff.automatic"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.handoff.assets"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.handoff.measure"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.handoff.variables"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.handoff.styleguide"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.handoff.guides"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.handoff.layers"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.handoff.comments"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.handoff.revisions"></check-box-table-cell>
          <!-- <td class="colspan-2">
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Sketch'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/sketch.png' ?>" v-if="app.handoff.prototyping.sketch" title="Sketch"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Adobe XD'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/adobe-xd.png' ?>" v-if="app.handoff.prototyping.adobeXd" title="Adobe XD"/></div>
            </div>
          </td> -->
          <td class="colspan-5">
            <div class="flex-col">
              <div v-if="app.handoff.sharing.web" v-tooltip.bottom-center="'Web'">
                <div title="Web"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M19,18H6A4,4 0 0,1 2,14A4,4 0 0,1 6,10H6.71C7.37,7.69 9.5,6 12,6A5.5,5.5 0 0,1 17.5,11.5V12H19A3,3 0 0,1 22,15A3,3 0 0,1 19,18M19.35,10.03C18.67,6.59 15.64,4 12,4C9.11,4 6.6,5.64 5.35,8.03C2.34,8.36 0,10.9 0,14A6,6 0 0,0 6,20H19A5,5 0 0,0 24,15C24,12.36 21.95,10.22 19.35,10.03Z" /></svg>
                </div>
              </div>
            </div>
            <div class="flex-col">
              <div v-if="app.handoff.sharing.html" v-tooltip.bottom-center="'Static HTML file'">
                <div title="HTML"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,17.56L16.07,16.43L16.62,10.33H9.38L9.2,8.3H16.8L17,6.31H7L7.56,12.32H14.45L14.22,14.9L12,15.5L9.78,14.9L9.64,13.24H7.64L7.93,16.43L12,17.56M4.07,3H19.93L18.5,19.2L12,21L5.5,19.2L4.07,3Z" /></svg>
                </div>
              </div>
            </div>
            <div class="flex-col">
              <div v-if="app.handoff.sharing.mac" v-tooltip.bottom-center="'Mac'">
                <div title="Mac"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M18.71,19.5C17.88,20.74 17,21.95 15.66,21.97C14.32,22 13.89,21.18 12.37,21.18C10.84,21.18 10.37,21.95 9.1,22C7.79,22.05 6.8,20.68 5.96,19.47C4.25,17 2.94,12.45 4.7,9.39C5.57,7.87 7.13,6.91 8.82,6.88C10.1,6.86 11.32,7.75 12.11,7.75C12.89,7.75 14.37,6.68 15.92,6.84C16.57,6.87 18.39,7.1 19.56,8.82C19.47,8.88 17.39,10.1 17.41,12.63C17.44,15.65 20.06,16.66 20.09,16.67C20.06,16.74 19.67,18.11 18.71,19.5M13,3.5C13.73,2.67 14.94,2.04 15.94,2C16.07,3.17 15.6,4.35 14.9,5.19C14.21,6.04 13.07,6.7 11.95,6.61C11.8,5.46 12.36,4.26 13,3.5Z" /></svg>
                </div>
              </div>
            </div>
            <div class="flex-col">
              <div v-if="app.handoff.sharing.windows" v-tooltip.bottom-center="'Windows'">
                <div title="Windows"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M3,12V6.75L9,5.43V11.91L3,12M20,3V11.75L10,11.9V5.21L20,3M3,13L9,13.09V19.9L3,18.75V13M20,13.25V22L10,20.09V13.1L20,13.25Z" /></svg>
                </div>
              </div>
            </div>
            <div class="flex-col">
              <div v-if="app.handoff.sharing.linux" v-tooltip.bottom-center="'Linux'">
                <div title="Linux"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M13.18,14.5C12.53,15.26 11.47,15.26 10.82,14.5L7.44,10.5C7.16,11.28 7,12.12 7,13C7,14.67 7.57,16.18 8.5,17.27C10,17.37 11.29,17.96 11.78,19C11.85,19 11.93,19 12.22,19C12.71,18 13.95,17.44 15.46,17.33C16.41,16.24 17,14.7 17,13C17,12.12 16.84,11.28 16.56,10.5L13.18,14.5M20,20.75C20,21.3 19.3,22 18.75,22H13.25C12.7,22 12,21.3 12,20.75C12,21.3 11.3,22 10.75,22H5.25C4.7,22 4,21.3 4,20.75C4,19.45 4.94,18.31 6.3,17.65C5.5,16.34 5,14.73 5,13C4,15 2.7,15.56 2.09,15C1.5,14.44 1.79,12.83 3.1,11.41C3.84,10.6 5,9.62 5.81,9.25C6.13,8.56 6.54,7.93 7,7.38V7A5,5 0 0,1 12,2A5,5 0 0,1 17,7V7.38C17.46,7.93 17.87,8.56 18.19,9.25C19,9.62 20.16,10.6 20.9,11.41C22.21,12.83 22.5,14.44 21.91,15C21.3,15.56 20,15 19,13C19,14.75 18.5,16.37 17.67,17.69C19.05,18.33 20,19.44 20,20.75M9.88,9C9.46,9.5 9.46,10.27 9.88,10.75L11.13,12.25C11.54,12.73 12.21,12.73 12.63,12.25L13.88,10.75C14.29,10.27 14.29,9.5 13.88,9H9.88M10,5.25C9.45,5.25 9,5.9 9,7C9,8.1 9.45,8.75 10,8.75C10.55,8.75 11,8.1 11,7C11,5.9 10.55,5.25 10,5.25M14,5.25C13.45,5.25 13,5.9 13,7C13,8.1 13.45,8.75 14,8.75C14.55,8.75 15,8.1 15,7C15,5.9 14.55,5.25 14,5.25Z" /></svg>
                </div>
              </div>
            </div>
            <div class="flex-col">
              <div v-if="app.handoff.sharing.xcode" v-tooltip.bottom-center="'Xcode'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/xcode.png' ?>" title="Xcode"/></div>
            </div>
            <div class="flex-col">
              <div v-if="app.handoff.sharing.androidStudio" v-tooltip.bottom-center="'Android Studio'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/android-studio.png' ?>" title="Android Studio"/></div>
            </div>
          </td>
          <td style="min-width: 100px">
            <div class="flex-col">
              <div v-if="app.handoff.integrations.slack" v-tooltip.bottom-center="'Slack'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/slack.png' ?>" title="Slack"/></div>
            </div>
            <div class="flex-col">
              <div v-if="app.handoff.integrations.jira" v-tooltip.bottom-center="'JIRA'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/jira.png' ?>" title="JIRA"/></div>
            </div>
            <div class="flex-col">
              <div v-if="app.handoff.integrations.microsoftTfs" v-tooltip.bottom-center="'Microsoft TFS'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/microsoft-tfs.png' ?>" title="Microsoft TFS"/></div>
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
