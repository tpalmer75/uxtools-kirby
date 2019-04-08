
<script type="text/x-template" id="design-system-tools">
  <div>
    <table id="scroll-table" v-scrolltable="">
      <thead id="fixed-header">
        <tr>
          <th v-for="column in toolsHeaders" v-bind:class="[{'sorted' : sortPath == column.sortPath}, 'fixed-header']" v-on:click="sortBy(column.sortPath, column.sortDir)">
            <span style="position: relative;">{{ column.title }}
              <span class="sort-arrow" v-if="column.sortable"><?= (new Asset("assets/images/icons/chevron-down.svg"))->content() ?></span>
            </span>
            <p v-if="$parent.$data.tableConfiguration.showNotes" class="notes" v-html="column.notes"></p>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="app in sortedTools">
          <td class="fixed-col"><a v-bind:href="app.url" v-bind:title="app.url" target="_blank"><img v-tooltip.right-middle="app.name" v-bind:alt="app.name + 'Logo'" src="<?php echo kirby()->urls()->assets() . '/images/blank.png' ?>" v-bind:style="app.image"/></a></td>
          <td class="name-col"><a v-bind:href="app.url" v-bind:title="app.url" target="_blank"><span>{{ app.name }}</span></a></td>
          <td v-tooltip.bottom-center="app.designSystems.surveyRaw2018 + ' votes in 2018<br>Design Tools Survey'">
            <a href="/survey-2018" style="display: block;">
              <div 
                v-bind:class="[{'blue-bar' : app.designSystems.surveyRaw2018}, 'bar']" 
                v-bind:style="{ width: app.designSystems.surveyPercent2018 + '%' }">
              </div>
            </a>
          </td>
          <td>
            <div class="flex-wrapper">
              <div class="flex-col">
                <div v-if="app.designSystems.platforms.web" v-tooltip.bottom-center="'Web'">
                  <div title="Web">
                  <?= (new Asset("assets/images/icons/cloud-outline.svg"))->content() ?>
                  </div>
                </div>
              </div>
              <div class="flex-col">
                <div v-if="app.designSystems.platforms.mac" v-tooltip.bottom-center="'Mac'">
                  <div title="Mac">
                    <?= (new Asset("assets/images/icons/apple.svg"))->content() ?>
                  </div>
                </div>
              </div>
              <div class="flex-col">
                <div v-if="app.designSystems.platforms.windows" v-tooltip.bottom-center="'Windows'">
                  <div title="Windows">
                    <?= (new Asset("assets/images/icons/windows.svg"))->content() ?>
                  </div>
                </div>
              </div>
              <div class="flex-col">
                <div v-if="app.designSystems.platforms.linux" v-tooltip.bottom-center="'Linux'">
                  <div title="Linux">
                    <?= (new Asset("assets/images/icons/linux.svg"))->content() ?>
                  </div>
                </div>
              </div>
            </div>
          </td>
          <td class="colspan-5">
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Sketch'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/sketch.png' ?>" v-if="app.designSystems.programs.sketch" title="Sketch"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Figma'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/figma.png' ?>" v-if="app.designSystems.programs.figma" title="Figma"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'UX Pin'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/ux-pin.png' ?>" v-if="app.designSystems.programs.uxPin" title="UX Pin"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Illustrator'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/illustrator.png' ?>" v-if="app.designSystems.programs.illustrator" title="Illustrator"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Office'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/office.png' ?>" v-if="app.designSystems.programs.office" title="Office"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Powerpoint'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/powerpoint.png' ?>" v-if="app.designSystems.programs.powerpoint" title="Powerpoint"/></div>
            </div>
            <div class="flex-col">
              <div v-tooltip.bottom-center="'Word'"><img src="<?php echo kirby()->urls()->assets() . '/images/icons/word.png' ?>" v-if="app.designSystems.programs.word" title="Word"/></div>
            </div>
          </td>
          <check-box-table-cell :tool-property="app.pricing.free"></check-box-table-cell>
          <td style="min-width: 100px;"><span v-tooltip.bottom-center="'Individual'">{{app.pricing.individual}}</span></td>
          <td style="min-width: 100px;"><span v-tooltip.bottom-center="'Team'">{{app.pricing.team}}</span></td>
          

          <check-box-table-cell :tool-property="app.designSystems.symbols"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.designSystems.layers"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.designSystems.assets"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.designSystems.sharing"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.designSystems.permissions"></check-box-table-cell>
          <td>
            <div v-if="app.designSystems.interface" v-tooltip.bottom-center="'Interface'">
              <span>{{app.designSystems.interface}}</span>
            </div>
          </td>
          <check-box-table-cell :tool-property="app.designSystems.update"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.designSystems.annotate"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.designSystems.styleguide"></check-box-table-cell>
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
</script>