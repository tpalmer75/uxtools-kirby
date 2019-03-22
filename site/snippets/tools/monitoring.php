
<script type="text/x-template" id="monitoring-tools">
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
          <td class="name-col"><a v-bind:href="app.url" v-bind:title="app.url" target="_blank"><span>{{ app.name }}</span></a></td>
          <td v-tooltip.bottom-center="app.monitoring.surveyRaw2018 + ' votes in 2018<br>Design Tools Survey'">
            <a href="/survey-2018" style="display: block;">
              <div 
                v-bind:class="[{'blue-bar' : app.monitoring.surveyRaw2018}, 'bar']" 
                v-bind:style="{ width: app.monitoring.surveyPercent2018 + '%' }">
              </div>
            </a>
          </td>
          <check-box-table-cell :tool-property="app.pricing.free"></check-box-table-cell>
          <td>
            <span>{{app.pricing.cost}}</span>
            <p class="notes">{{app.pricing.notes}}</p>
          </td>
          <check-box-table-cell :tool-property="app.monitoring.playback"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.monitoring.skipInactivity"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.monitoring.playbackSpeed"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.monitoring.jumpBack"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.monitoring.console"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.monitoring.heatmaps"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.monitoring.location"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.monitoring.formAnalytics"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.monitoring.polls"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.monitoring.live"></check-box-table-cell>
          <check-box-table-cell :tool-property="app.monitoring.control"></check-box-table-cell>

          
          <td>
            <div class="flex-col">
              <div v-if="app.monitoring.export.html" v-tooltip.bottom-center="'Static HTML file'">
                <div title="HTML"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,17.56L16.07,16.43L16.62,10.33H9.38L9.2,8.3H16.8L17,6.31H7L7.56,12.32H14.45L14.22,14.9L12,15.5L9.78,14.9L9.64,13.24H7.64L7.93,16.43L12,17.56M4.07,3H19.93L18.5,19.2L12,21L5.5,19.2L4.07,3Z" /></svg>
                </div>
              </div>
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
  </div>
</script>