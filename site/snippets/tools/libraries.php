
<script type="text/x-template" id="design-library-tools">
  <div>
    <table id="scroll-table" v-scrolltable="">
      <thead id="fixed-header">
        <tr>
          <th v-for="column in toolsData.columns" v-bind:class="[{'sorted' : sortVar == column.sortVar}, 'fixed-header']" v-on:click="sortBy(column.sortVar, column.sortDir)">
            <span style="position: relative;" v-tooltip.bottom-left="column.tipText">{{ column.title }}
              <span class="sort-arrow" v-if="column.sortable"><?= (new Asset("assets/images/icons/chevron-down.svg"))->content() ?></span>
            </span>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="app in toolsData.tools">
          <td class="fixed-col"><a v-bind:href="app.url+'?utm_source=uxtools.co&utm_medium=website&utm_campaign=uxtools.co'" v-bind:title="app.url" target="_blank"><img v-tooltip.right-middle="app.name" v-bind:alt="app.name + 'Logo'" src="<?php echo kirby()->urls()->assets() . '/images/blank.png' ?>" v-bind:style="app.image"/></a></td>
          <td class="name-col"><a v-bind:href="app.url+'?utm_source=uxtools.co&utm_medium=website&utm_campaign=uxtools.co'" v-bind:title="app.url" target="_blank">{{ app.name }}</a></td>
          <td v-tooltip.bottom-center="app.surveyRaw + ' votes in 2017<br>Design Tools Survey'">
            <a href="/survey-2017" style="display: block;">
              <div 
                v-bind:class="[{'blue-bar' : app.surveyRaw}, 'bar']" 
                v-bind:style="{ width: app.surveyPercent + '%' }">
              </div>
            </a>
          </td>
          <td>
            <div class="flex-wrapper">
              <div class="flex-col">
                <div v-if="app.platforms.web" v-tooltip.bottom-center="'Web'">
                  <div title="Web">
                  <?= (new Asset("assets/images/icons/cloud-outline.svg"))->content() ?>
                  </div>
                </div>
              </div>
              <div class="flex-col">
                <div v-if="app.platforms.mac" v-tooltip.bottom-center="'Mac'">
                  <div title="Mac">
                    <?= (new Asset("assets/images/icons/apple.svg"))->content() ?>
                  </div>
                </div>
              </div>
              <div class="flex-col">
                <div v-if="app.platforms.windows" v-tooltip.bottom-center="'Windows'">
                  <div title="Windows">
                    <?= (new Asset("assets/images/icons/windows.svg"))->content() ?>
                  </div>
                </div>
              </div>
              <div class="flex-col">
                <div v-if="app.platforms.linux" v-tooltip.bottom-center="'Linux'">
                  <div title="Linux">
                    <?= (new Asset("assets/images/icons/linux.svg"))->content() ?>
                  </div>
                </div>
              </div>
            </div>
          </td>
          <td class="colspan-5">
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Sketch'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/sketch.png' ?>" v-if="app.programs.sketch" title="Sketch"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Figma'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/figma.png' ?>" v-if="app.programs.figma" title="Figma"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'UX Pin'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/ux-pin.png' ?>" v-if="app.programs.uxPin" title="UX Pin"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Illustrator'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/illustrator.png' ?>" v-if="app.programs.illustrator" title="Illustrator"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Office'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/office.png' ?>" v-if="app.programs.office" title="Office"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Powerpoint'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/powerpoint.png' ?>" v-if="app.programs.powerpoint" title="Powerpoint"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Word'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/word.png' ?>" v-if="app.programs.word" title="Word"/></div>
            </div>
          </td>
          <td>
            <div v-if="app.pricing.free" v-tooltip.bottom-center="'Free'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td style="min-width: 100px;"><span v-tooltip.bottom-center="'Individual'">{{app.pricing.individual}}</span></td>
          <td style="min-width: 100px;"><span v-tooltip.bottom-center="'Team'">{{app.pricing.team}}</span></td>
          <td>
            <div v-if="app.symbols" v-tooltip.bottom-center="'Symbols'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.layers" v-tooltip.bottom-center="'Layers'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.assets" v-tooltip.bottom-center="'Assets'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.sharing" v-tooltip.bottom-center="'Sharing'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.permissions" v-tooltip.bottom-center="'Permissions'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.interface" v-tooltip.bottom-center="'Interface'">
              <span>{{app.interface}}</span>
            </div>
          </td>
          <td>
            <div v-if="app.update" v-tooltip.bottom-center="'Update'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.annotate" v-tooltip.bottom-center="'Annotate'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.styleguide" v-tooltip.bottom-center="'S'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.lastUpdated">
              {{app.lastUpdated}}
            </div>
          </td>
        </tr>
      </tbody>
    </table>
<a href="https://uxtools.typeform.com/to/EFoJO3" title="Submit a new tool" class="new-tool"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M19,19V5H5V19H19M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5C3,3.89 3.9,3 5,3H19M11,7H13V11H17V13H13V17H11V13H7V11H11V7Z" /></svg><span>Submit a new tool</span></a>
<div class="promotion-missing">
  <div class="content">
    <h4>Normally there's an ad here. 🤔</h4>
        <p>I run this site by myself, so it would be awesome if you turned off your ad blocker.</p>
  </div>
</div><ins style="display:block" data-ad-client="ca-pub-2169456968850651" data-ad-slot="8125149927" data-ad-format="auto" class="adsbygoogle"></ins>
</script>