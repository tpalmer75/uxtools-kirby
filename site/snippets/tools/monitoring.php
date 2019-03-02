
<script type="text/x-template" id="monitoring-tools">
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
          <td class="fixed-col"><a v-bind:href="app.url+'?utm_source=uxtools.co&utm_medium=website&utm_campaign=uxtools.co'" v-bind:title="app.url" target="_blank"><img v-tooltip.right-middle="app.name" v-bind:alt="app.name + 'Logo'" src="<?php echo kirby()->urls()->assets() . '/images/blank.png' ?>" v-bind:style="app.image"/></a></td>
          <td class="name-col"><a v-bind:href="app.url+'?utm_source=uxtools.co&utm_medium=website&utm_campaign=uxtools.co'" v-bind:title="app.url" target="_blank">{{ app.name }}</a></td>
          <td v-tooltip.bottom-center="app.monitoring.surveyRaw2017 + ' votes in 2017<br>Design Tools Survey'">
            <a href="/survey-2017" style="display: block;">
              <div 
                v-bind:class="[{'blue-bar' : app.monitoring.surveyRaw2017}, 'bar']" 
                v-bind:style="{ width: app.monitoring.surveyPercent2017 + '%' }">
              </div>
            </a>
          </td>
          <td>
            <div v-if="app.pricing.free">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td style="min-width: 100px"><span v-tooltip.bottom-center="'Subscription'">{{app.pricing.subscription}}</span></td>
          <td><span v-tooltip.bottom-center="'Price'">{{app.pricing.purchase}}</span></td>
          <td>
            <div v-if="app.monitoring.playback" v-tooltip.bottom-center="'Playback'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.monitoring.skipInactivity" v-tooltip.bottom-center="'Skip Inactivity'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.monitoring.playbackSpeed" v-tooltip.bottom-center="'Speed'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.monitoring.jumpBack" v-tooltip.bottom-center="'Jump Back'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.monitoring.console" v-tooltip.bottom-center="'Console'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.monitoring.heatmaps" v-tooltip.bottom-center="'Heatmaps'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.monitoring.location" v-tooltip.bottom-center="'Location'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.monitoring.formAnalytics" v-tooltip.bottom-center="'Form Stats'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.monitoring.polls" v-tooltip.bottom-center="'Polls'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.monitoring.live" v-tooltip.bottom-center="'Live'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.monitoring.control" v-tooltip.bottom-center="'Control'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
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