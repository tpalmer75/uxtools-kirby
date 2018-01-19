
<script type="text/x-template" id="monitoring-tools">
  <div>
    <table id="scroll-table" v-scrolltable="">
      <thead id="fixed-header">
        <tr>
          <th v-for="column in toolsData.columns" class="fixed-header"><span style="display: block; position: relative" v-tooltip.bottom-center="column.tipText">{{ column.title }}</span></th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="app in computedTools">
          <td class="fixed-col"><a v-bind:href="app.url+'?utm_source=uxtools.co&utm_medium=website&utm_campaign=uxtools.co'" v-bind:title="app.url" target="_blank"><img v-tooltip.right-middle="app.name" v-bind:alt="app.name + 'Logo'" src="<?php echo kirby()->urls()->assets() . '/images/blank.png' ?>" v-bind:style="app.image"/></a></td>
          <td class="name-col"><a v-bind:href="app.url+'?utm_source=uxtools.co&utm_medium=website&utm_campaign=uxtools.co'" v-bind:title="app.url" target="_blank">{{ app.name }}</a></td>
          <td>
            <div v-if="app.pricing.free">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td style="min-width: 100px"><span v-tooltip.bottom-center="'Subscription'">{{app.pricing.subscription}}</span></td>
          <td><span v-tooltip.bottom-center="'Price'">{{app.pricing.purchase}}</span></td>
          <td>
            <div v-if="app.playback" v-tooltip.bottom-center="'Playback'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.skipInactivity" v-tooltip.bottom-center="'Skip Inactivity'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.playbackSpeed" v-tooltip.bottom-center="'Speed'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.jumpBack" v-tooltip.bottom-center="'Jump Back'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.console" v-tooltip.bottom-center="'Console'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.heatmaps" v-tooltip.bottom-center="'Heatmaps'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.location" v-tooltip.bottom-center="'Location'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.formAnalytics" v-tooltip.bottom-center="'Form Stats'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.polls" v-tooltip.bottom-center="'Polls'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.live" v-tooltip.bottom-center="'Live'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div v-if="app.control" v-tooltip.bottom-center="'Control'">
              <?= (new Asset("assets/images/icons/check.svg"))->content() ?>
            </div>
          </td>
          <td>
            <div class="flex-col">
              <div v-if="app.export.html" v-tooltip.bottom-center="'Static HTML file'">
                <div title="HTML"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,17.56L16.07,16.43L16.62,10.33H9.38L9.2,8.3H16.8L17,6.31H7L7.56,12.32H14.45L14.22,14.9L12,15.5L9.78,14.9L9.64,13.24H7.64L7.93,16.43L12,17.56M4.07,3H19.93L18.5,19.2L12,21L5.5,19.2L4.07,3Z" /></svg>
                </div>
              </div>
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
        <h4>So you don't like ads. 😒</h4>
        <p>Want to help me win a Nintendo Switch instead? Just like <a href="https://dribbble.com/shots/4113716-Win-A-Switch">this shot on Dribbble</a>. That's it.</p>
      </div>
    </div><ins style="display:block" data-ad-client="ca-pub-2169456968850651" data-ad-slot="8125149927" data-ad-format="auto" class="adsbygoogle"></ins>
    </div>
  </div>
</script>