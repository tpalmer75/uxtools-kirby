<?php snippet('header') ?>
<div class="survey-2018">
  <section>
    <header class="survey-header">
      <div class="wrapper grid">
        <div class="grid-item-2-3">
          <img id="logo" src="assets/images/survey-2018/logo.svg">
        </div>
        <div class="message grow grid-item-1-3">
          <p>Last year was my first Design Tools survey ever, and this year was even better! Almost 2,800 designers shared their best tools and workflows. All the anonymized data is available for download <a href="https://docs.google.com/spreadsheets/d/1Rh7DkqmttgAaUUf1R_Neg7D8j7QB0RyH9kCnt168VLw/edit?usp=sharing">here</a>. If you'd like to help, you can share this page on Twitter, Facebook, or your media of choice.</p>
          <span class="name">—<a target="_blank" href="https://twitter.com/_taylorpalmer">Taylor</a></span>
        </div>
      </div>
      
    </header>
  </section>
  <section>
    <div class="wrapper small">
      <div class="section-header"><h2>Table of Contents</h2><div class="line"></div>
      </div>
      <ul class="table-of-contents">
        <li><a href="#demographics"><span class="number-list">01</span>Demographics</a></li>
        <li><a href="#brainstorming"><span class="number-list">02</span>Brainstorming & Ideation Tools</li>
        <li><a href="#user-flow"><span class="number-list">03</span>User Flow & Site Map Tools</a></li>
        <li><a href="#wireframing"><span class="number-list">04</span>Wireframing Tools</a></li>
        <li><a href="#ui-design"><span class="number-list">05</span>UI Design Tools</a></li>
        <li><a href="#prototyping"><span class="number-list">06</span>Prototyping Tools </a></li>
        <li><a href="#handoff"><span class="number-list">07</span>Handoff Tools</a></li>
        <li><a href="#design-system"><span class="number-list">08</span>Design System Tools</a></li>
        <li><a href="#monitoring"><span class="number-list">09</span>Experience Monitoring Tools</a></li>
        <li><a href="#file-management"><span class="number-list">10</span>File Management Tools</a></li>
        <li><a href="#toolkit"><span class="number-list">11</span>The 2018 Designer's Toolkit</a></li>
        <li><a href="#exciting"><span class="number-list">12</span>Most Exciting Tools of 2019</a></li>
      </ul>
  </section>
  <section id="demographics">
    <div class="wrapper small">
      <div class="section-header"><h2>Demographics</h2><div class="line"></div></div>
      <h4><span class="callout">2,775</span> total responses</h4>
      <div class="grid countries">
        <div class="grid-item-1-6">
          <div class="country-tile">
            <img src="assets/images/survey-2018/country-usa.svg">
          </div>
          <h3>753</h3>
          <h4>USA</h4>
        </div>
        <div class="grid-item-1-6">
          <div class="country-tile">
            <img src="assets/images/survey-2018/country-uk.svg">
          </div>
          <h3>147</h3>
          <h4>UK</h4>
        </div>
        <div class="grid-item-1-6">
          <div class="country-tile">
            <img src="assets/images/survey-2018/country-germany.svg">
          </div>
          <h3>126</h3>
          <h4>Germany</h4>
        </div>
        <div class="grid-item-1-6">
          <div class="country-tile">
            <img src="assets/images/survey-2018/country-france.svg">
          </div>
          <h3>116</h3>
          <h4>France</h4>
        </div>
        <div class="grid-item-1-6">
          <div class="country-tile">
            <img src="assets/images/survey-2018/country-india.svg">
          </div>
          <h3>102</h3>
          <h4>India</h4>
        </div>
        <div class="grid-item-1-6">
          <div class="country-tile">
            <img src="assets/images/survey-2018/country-globe.svg">
          </div>
          <h3>1,253</h3>
          <h4>More</h4>
        </div>
      </div>
      <h3>Main Insights</h3>
      <ul class="main-insights">
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>The job titles "UX Designer" and "Product Designer" are equally common among respondents.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>83% of respondents work on a design team of 10 people or less.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>Regardless of company size, most design teams have 10 designers or less.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>80% of respondents only use Mac for design purposes.</span></li>
        </ul>
      <div class="grid">
        <div class="grid-item-1-2 graph">
          <h3>Roles</h3>
          <h4>"Which best describes your&nbsp;role?"</h4>
          <div class="graph-wrapper">
            <canvas id="roles-graph"></canvas>
          </div>
        </div>
        <div class="grid-item-1-2 graph">
          <h3>Work Experience</h3>
          <h4>"How many years of experience do you&nbsp;have?"</h4>
          <div class="graph-wrapper">
            <canvas id="career-experience-graph"></canvas>
          </div>
        </div>
        <div class="grid-item-1-2 graph">
          <h3>Company Size</h3>
          <h4>"How many employees work at your&nbsp;company?"</h4>
          <div class="graph-wrapper">
            <canvas id="company-size"></canvas>
          </div>
        </div>
        <div class="grid-item-1-2 graph">
          <h3>Design Team Size</h3>
          <h4>"How many designers are on your design&nbsp;team?"</h4>
          <div class="graph-wrapper">
            <canvas id="design-team-size"></canvas>
          </div>
        </div>
        <div class="grid-item-3-3 graph">
          <h3>Design Team Size Based on Company Size</h4>
          <div class="graph-wrapper">
            <canvas id="design-team-company-size"></canvas>
          </div>
        </div>
        <div class="grid-item-1-2 graph">
          <h3>Platforms</h3>
          <h4>"Which platform(s) do you primarily use for&nbsp;design?"</h4>
          <div class="graph-wrapper">
            <canvas id="platform-graph"></canvas>
          </div>
        </div>
        <div class="grid-item-1-2 graph">
          <h3>Experience Design</h3>
          <h4>"What types of experiences are you&nbsp;designing?"</h4>
          <div class="graph-wrapper">
            <canvas id="experience-design-graph"></canvas>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="brainstorming">
      <div class="wrapper small">
        <?php snippet('google-ad') ?>
        <div class="section-header">
          <h2>Brainstorming & Ideation Tools<span class="line"></span></h2>
          <p>Brainstorming can mean something different to everyone, but I still like to see what designers are doing before they start creating interfaces. Brainstorming could mean anything from exploratory mocks to requirements gathering. While most respondents are still using their notebooks or whiteboards, many still stay in Sketch.</p>
        </div>
        <h3>Main Insights</h3>
        <ul class="main-insights">
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>Traditional media are still best for brainstorming.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span><a target="_blank" href="https://uxtools.co/survey-2017">Compared to 2017</a>, Figma passed all three Adobe tools.</span></li>
        </ul>
        <div class="graph align-left">
          <h3>Most Popular Brainstorming Tools</h3>
          <h4>"Which tools do you use for brainstorming and ideation?"</h4>
          <div class="graph-wrapper">
            <canvas id="brainstorming-graph"></canvas>
          </div>
        </div>
      </div>
  </section>
  <section id="user-flow">
      <div class="wrapper small">
        <div class="section-header">
          <h2>User Flow & Site Mapping Tools<span class="line"></span></h2>
          <p>I didn't ask any questions about user flows in 2017, so we can't observe any trends this year. I'm surprised we didn't see a stronger showing from Adobe XD or Figma, where designers frequently use their prototyping capabilities to communicates flows and paths. Sketch is <em>not</em> ideal for creating user flows, so I expect we'll see an increase in usage from dedicated flow tools like Overflow.io and Lucidchart in the coming years.</p>
        </div>
        <h3>Main Insights</h3>
        <ul class="main-insights">
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>15% of respondents don't use any special tools for creating user flows.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>Sketch is the most used tool for creating user flows.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>Respondents seem to use their primary tools for as many solutions as possible.</span></li>
        </ul>
        <div class="graph align-left">
          <h3>Most Popular User Flow Tools</h3>
          <h4>"Which tools do you use for user flows, site maps, and flow&nbsp;charts?"</h4>
          <div class="graph-wrapper">
            <canvas id="user-flow-graph"></canvas>
          </div>
        </div>
      </div>
  </section>
  <section id="wireframing">
      <div class="wrapper small">
        <div class="section-header">
          <h2>Wireframing Tools<span class="line"></span></h2>
          <p>Are wireframing tools still a thing in 2018? The numbers indicate that most designers are wireframing in their primary UI design tools. The only true wireframing tool that cracks the top ten is Balsamiq. Next year, I'd like to be more thorough in asking designers if they actually create traditional wireframes.</p>
        </div>
        <h3>Main Insights</h3>
        <ul class="main-insights">
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>Only 3% of designers reported that they don't create wireframes, despite higher trends of using high-fidelity Design Systems.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>While HTML/CSS was <a target="_blank" href="https://uxtools.co/survey-2017">high on the list in 2017</a>, it barely appeared in this year's responses (likely to due a change in options).</span></li>
        </ul>
        <div class="graph align-left">
          <h3>Most Popular User Flow Tools</h3>
          <h4>"Which tools do you use for&nbsp;wireframing?"</h4>
          <div class="graph-wrapper">
            <canvas id="wireframing-graph"></canvas>
          </div>
        </div>
      </div>
  </section>
  <section id="ui-design">
      <div class="wrapper small">
        <div class="section-header">
          <h2>UI Design Tools<span class="line"></span></h2>
          <p>The most important category of them all! Can anyone take down Sketch? Short answer: not yet. No surprises here, but it's great to see Figma moving up in the world. (If you're wondering how Windows users are accessing Sketch, I'm guessing it's through a virtual machine).</p>
        </div>
        <h3>Main Insights</h3>
        <ul class="main-insights">
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>According to this sample, Sketch is still on top.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span><a target="_blank" href="https://uxtools.co/survey-2017">In 2017</a>, designers reported InVision Studio as being the most exciting tool of this year but aren't showing strong adoption yet.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>All three Adobe tools continue continue to have almost equal usage.</span></li>
        </ul>
        <div class="graph align-left">
          <h3>Most Popular UI Design Tools</h3>
          <h4>"Which tools do you use for interface&nbsp;design?"</h4>
          <div class="graph-wrapper">
            <canvas id="ui-design-graph"></canvas>
          </div>
        </div>
        <div class="graph">
          <h3>Top Tools for Mac and Windows</h3>
            <div class="graph-wrapper">
              <canvas id="ui-design-mac-graph"></canvas>
            </div>
        </div>
      </div>
  </section>
  <section id="prototyping">
      <div class="wrapper small">
        <div class="section-header">
          <h2>Prototyping Tools<span class="line"></span></h2>
          <p>Each year, this is the most volatile category of tools. It's constantly changing and evolving, and this year was no exception. Sketch introduced its own prototyping tools which have proven quite successful.</p>
        </div>
        <h3>Main Insights</h3>
        <ul class="main-insights">
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>Respondents use an average of 3.5 tools to accomplish their prototyping solutions.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>Sketch prototyping has a surprising amount of usage, almost rivaling InVision Classic.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>Framer's new tool, FramerX, is used only slightly more than its predecessor, Framer Classic.</span></li>
        </ul>
        <div class="graph align-left">
          <h3>Most Popular Prototyping Tools</h3>
          <h4>"Which tools do you use for&nbsp;prototyping?"</h4>
          <div class="graph-wrapper">
            <canvas id="prototyping-graph"></canvas>
          </div>
        </div>
      </div>
  </section>
  <section id="handoff">
      <div class="wrapper small">
        <?php snippet('google-ad') ?>
        <div class="section-header">
          <h2>Handoff Tools<span class="line"></span></h2>
          <p>Handing off designs as code is a relatively recent development in the typical UX tool kit. I expect that as these features get stronger within individual tools like Sketch or Adobe XD, we'll start to see stronger leaders in this race.</p>
        </div>
        <h3>Main Insights</h3>
        <ul class="main-insights">
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>12% of respondents don't use handoff tools for delivering designs.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span><a target="_blank" href="https://uxtools.co/survey-2017">Compared to 2017</a>, Zeplin passed InVision to take first place.</span></li>
        </ul>
        <div class="graph align-left">
          <h3>Most Popular Handoff Tools</h3>
          <h4>"Which tools (if any) do you use for&nbsp;handoff?"</h4>
          <div class="graph-wrapper">
            <canvas id="handoff-graph"></canvas>
          </div>
        </div>
      </div>
  </section>
  <section id="design-system">
      <div class="wrapper small">
        <div class="section-header">
          <h2>Design System Tools<span class="line"></span></h2>
          <p>Design Systems, Component Libraries, Pattern Libraries, Style Guides. Whatever you choose to call them, most respondents are making them in Sketch (or not using them at all).</p>
        </div>
        <h3>Main Insights</h3>
        <ul class="main-insights">
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>Sketch is the most highly used Design System tool among respondents.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>15% of respondents don't have a Design System (down from 28% last year).</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>Despite the introduction of InVision Design System Manager (DSM), InVision's Craft still holds much of the market.</span></li>
        </ul>
        <div class="graph align-left">
          <h3>Most Popular Design System Tools</h3>
          <h4>"Which tools (if any) do you use to manage your design&nbsp;system?"</h4>
          <div class="graph-wrapper">
            <canvas id="design-system-graph"></canvas>
          </div>
        </div>
      </div>
  </section>
  <section id="monitoring">
      <div class="wrapper small">
        <div class="section-header">
          <h2>Experience Monitoring Tools<span class="line"></span></h2>
          <p>This is always an interesting, untapped market for design tools. I think the lack of usage comes from implementation difficulties: designers aren't usually able to set up these tools on their own. If you're not using them, you should.</p>
        </div>
        <h3>Main Insights</h3>
        <ul class="main-insights">
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>2 out of 3 respondents aren't using experience monitoring tools.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>56% of respondents who use experience monitoring tools use Hotjar.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>Responses almost exactly mirror the responses <a target="_blank" href="https://uxtools.co/survey-2017">from 2017</a>, indicated that this market hasn't changed much in the last year.</span></li>
        </ul>
        <div class="graph align-left">
          <h3>Most Popular Monitoring Tools</h3>
          <h4>"What tools (if any) do you use for experience&nbsp;monitoring?"</h4>
          <div class="graph-wrapper">
            <canvas id="monitoring-graph"></canvas>
          </div>
        </div>
      </div>
  </section>
  <section id="version-control">
      <div class="wrapper small">
        <div class="section-header">
          <h2>File Management Tools<span class="line"></span></h2>
          <p>The data here can be a bit scattered because some file management services (like Google Drive and Dropbox) offer version control tools, while some respondents are using both Drive and Abstract at the same time. Nevertheless, it is suprising how many respondents aren't managing their files using any system at all.</p>
        </div>
        <h3>Main Insights</h3>
        <ul class="main-insights">
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>Google Drive and Dropbox continue to be highly used file management solutions. Almost all tools remained in their same positions <a target="_blank" href="https://uxtools.co/survey-2017">from 2017</a>.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>12% of respondents aren't using file management software.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>Usage of Abstract among respondents lept from 7% to 11% <a target="_blank" href="https://uxtools.co/survey-2017">since 2017</a>.</span></li>
        </ul>
        <div class="graph align-left">
          <h3>Most Popular File Management Tools</h3>
          <h4>"Which tools (if any) do you use for version control and file management?"</h4>
          <div class="graph-wrapper">
            <canvas id="file-management-graph"></canvas>
          </div>
        </div>
      </div>
  </section>
  <section id="toolkit">
      <div class="wrapper small">
        <div class="section-header">
          <h2>The 2018 Designer's Toolkit<span class="line"></span></h2>
          <p>Based on this year's responses, these represent the most commonly used tools in each category. Sketch is still on top, but digging deeper into the data you'll find some movement in several of these categories—like Figma climbing within the top 5 in almost every single category.</p>
        </div>
        <div class="grid">
          <div class="grid-item-1-3 logo-tile">
            <div class="header">
              <h3>Brainstorming</h3>
              <h4>Pencil, Paper, Whiteboard</h4>
            </div>
            <div class="logo-wrapper">
              <img src="/assets/images/survey-2018/logo-pencil-paper.png">
            </div>
          </div>
          <div class="grid-item-1-3 logo-tile">
            <div class="header">
              <h3>User Flows</h3>
              <h4>Sketch</h4>
            </div>
            <div class="logo-wrapper">
              <a target="_blank" href="https://www.sketchapp.com/?ref=uxtools.co">
              <img src="/assets/images/survey-2018/logo-sketch.png">
              </a>
            </div>
          </div class="header">
          <div class="grid-item-1-3 logo-tile">
            <div>
              <h3>Wireframing</h3>
              <h4>Sketch</h4>
            </div>
            <div class="logo-wrapper">
              <a target="_blank" href="https://www.sketchapp.com/?ref=uxtools.co">
              <img src="/assets/images/survey-2018/logo-sketch.png">
              </a>
            </div>
          </div>
          <div class="grid-item-1-3 logo-tile">
            <div>
              <h3>UI Design</h3>
              <h4>Sketch</h4>
            </div>
            <div class="logo-wrapper">
              <a target="_blank" href="https://www.sketchapp.com/?ref=uxtools.co">
              <img src="/assets/images/survey-2018/logo-sketch.png">
              </a>
            </div>
          </div>
          <div class="grid-item-1-3 logo-tile">
            <div>
              <h3>Prototyping</h3>
              <h4>InVision (Classic)</h4>
            </div>
            <div class="logo-wrapper">
              <a target="_blank" href="https://www.invisionapp.com/?ref=uxtools.co">
              <img src="/assets/images/survey-2018/logo-invision.png">
              </a>
            </div>
          </div>
          <div class="grid-item-1-3 logo-tile">
            <div>
              <h3>Handoff</h3>
              <h4>Zeplin</h4>
            </div>
            <div class="logo-wrapper">
              <a target="_blank" href="https://zeplin.io/?ref=uxtools.co">
              <img src="/assets/images/survey-2018/logo-zeplin.png">
              </a>
            </div>
          </div>
          <div class="grid-item-1-3 logo-tile">
            <div>
              <h3>Design System</h3>
              <h4>Sketch</h4>
            </div>
            <div class="logo-wrapper">
              <a target="_blank" href="https://www.sketchapp.com/?ref=uxtools.co">
              <img src="/assets/images/survey-2018/logo-sketch.png">
              </a>
            </div>
          </div>
          <div class="grid-item-1-3 logo-tile">
            <div>
              <h3>Monitoring</h3>
              <h4>Hotjar</h4>
            </div>
            <div class="logo-wrapper">
              <a target="_blank" href="https://www.hotjar.com/?ref=uxtools.co">
              <img src="/assets/images/survey-2018/logo-hotjar.png">
              </a>
            </div>
          </div>
          <div class="grid-item-1-3 logo-tile">
            <div>
              <h3>File Management</h3>
              <h4>Google Drive</h4>
            </div>
            <div class="logo-wrapper">
              <a target="_blank" href="https://www.google.com/drive/?ref=uxtools.co">
              <img src="/assets/images/survey-2018/logo-drive.png">
              </a>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section id="exciting">
      <div class="wrapper small">
        <?php snippet('google-ad') ?>
        <div class="section-header">
          <h2>Most Exciting Tools in 2019<span class="line"></span></h2>
          <p>While some designers are burned out on new design tools, these respondents aren't! See what tools are likely to take the market by storm in 2019.</p>
        </div>
        <h3>Main Insights</h3>
        <ul class="main-insights">
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>Figma, which was <a target="_blank" href="https://uxtools.co/survey-2017">low on the list in 2017</a>, emerges as the most exciting tool of 2019.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>InVision Studio remains near the top, indicating that many respondents have yet to try it—or are still waiting for future development.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>Respondents always seem to keep Framer on their bucket list of design tools.</span></li>
        </ul>
        <div class="graph align-left">
          <h3>Most Exciting Tools in 2019</h3>
          <h4>"What tools are you most excited to try in 2019?"</h4>
          <div class="graph-wrapper">
            <canvas id="excited-graph"></canvas>
          </div>
        </div>
      </div>
  </section>
  <section id="exciting">
      <div class="wrapper small">
        <div class="section-header">
          <h2>Thanks for reading 👋<span class="line"></span></h2>
          <p>People like you make this survey great! Thanks for participating in the second uxtools.co annual Design Tools Survey. Hopefully you learned something interesting, or maybe found a new tool to try! If you have any questions, reach out to <a href="mailto:taylor@uxtools.co">taylor@uxtools.co</a>.</p>
          <button class="blue">
        <?= (new Asset("assets/images/icons/twitter.svg"))->content() ?>
        <a href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode($page->url()); ?>%20<?php echo ('via @_taylorpalmer')?>" target="blank" title="Tweet this">Share on Twitter</a>
      </button>

      <button class="blue">
        <?= (new Asset("assets/images/icons/facebook-box.svg"))->content() ?>
        <a href="http://www.facebook.com/sharer.php?u=<?php echo rawurlencode ($page->url()); ?>" target="blank" title="Share on Facebook">Share on Facebook</a>
      </button>
      <button class="white">
        <a href="https://docs.google.com/spreadsheets/d/1Rh7DkqmttgAaUUf1R_Neg7D8j7QB0RyH9kCnt168VLw/edit?usp=sharing" target="blank" title="See the 2017 Survey">View the raw data</a>
      </button>
      <button class="white">
        <a href="https://uxtools.co/survey-2017" target="blank" title="See the 2017 Survey">View the 2017 Survey</a>
      </button>
        </div>
  </section>
  <section id="sign-up">
      <div class="wrapper small">
        <script type="text/javascript" src="https://app.sender.net/webforms/2857/cd2b14d0.js?v=2"></script>
      </div>
  </section>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/zepto/1.2.0/zepto.min.js"></script>
<script src="/assets/js/survey-2018-charts.js"></script>
<?php snippet('footer') ?>