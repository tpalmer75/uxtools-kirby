<?php snippet('header') ?>
<div class="survey-2018">
  <section>
    <header class="survey-header">
      <div class="wrapper grid">
        <div class="grid-item-2-3"><img id="logo" src="assets/images/survey-2018/logo.svg"></div>
        <div class="message grow grid-item-1-3">
          <p>Last year was my first Design Tools survey ever, and this year was even better! Almost 2,800 designers shared their best tools and workflows. All the anonymized data is available for download <a href="LINK NEEDED">here</a>. If you'd like to help, you can share this page on Twitter, Facebook, or your media of choice.</p>
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
        <li><a href="#file-management"><span class="number-list">09</span>File Management Tools</a></li>
        <li><a href="#exciting"><span class="number-list">10</span>Most Exciting Tools of 2019</a></li>
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
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>The job titles "UX Designer" and "Product Designer" are equally common.</span></li>
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
          <h3>OS/Platforms</h3>
          <h4>"Which platform(s) do you primarily use for&nbsp;design?"</h4>
          <div class="graph-wrapper">
            <canvas id="platform-graph"></canvas>
          </div>
        </div>
        <div class="grid-item-1-2 graph">
          <h3>Design Output</h3>
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
        <div class="section-header">
          <h2>Brainstorming & Ideation Tools<span class="line"></span></h2>
          <p>Brainstorming can mean something different to everyone, but I still like to see what designers are doing before they start creating interfaces. Brainstorming could mean anything from exploratory mocks to requirements gathering. While most designers are still using their notebooks or whiteboards, many still stay in Sketch.</p>
        </div>
        <h3>Main Insights</h3>
        <ul class="main-insights">
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>Traditional media are still best for brainstorming.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>Compared to 2017, Figma passed all three Adobe tools.</span></li>
        </ul>
        <div class="graph">
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
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>15% of designers don't use any special tools for creating user flows.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>Sketch is the most used tool for creating user flows.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>Designers seem to use their primary tools for as many solutions as possible.</span></li>
        </ul>
        <div class="graph">
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
        <h2>Wireframing Tools<span class="line"></span></h2>
          <p>Are wireframing tools really a thing in 2018? The numbers indicate that most designers are wireframing in their primary UI design tools. The only traditional tools that cracks the top ten is Balsamiq. Next year, I'd like to be more thorough in asking designers if they actually create traditional wireframes.</p>
        <h3>Main Insights</h3>
        <ul class="main-insights">
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>Only 3% of designers reported that they don't create wireframes, despite higher trends of using high-fidelity Design Systems.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>While HTML/CSS was high on the list last in 2017, it barely appeared in this year's responses (likely to due a change in options).</span></li>
        </ul>
        <div class="graph">
          <h3>Most Popular User Flow Tools</h3>
          <h4>"Which tools do you use for wireframing?"</h4>
          <div class="graph-wrapper">
            <canvas id="wireframing-graph"></canvas>
          </div>
        </div>
      </div>
  </section>
  <section id="ui-design">
      <div class="wrapper small">
        <h2>UI Design Tools<span class="line"></span></h2>
          <p>The most important category of them all! Can anyone take down Sketch? Short answer: not yet. No surprises here, but it's great to see Figma moving up in the world. (If you're wondering how Windows users are accessing Sketch, I'm guessing it's through a virtual machhine).</p>
        <h3>Main Insights</h3>
        <ul class="main-insights">
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>According to this sample, Sketch is still on top.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>In 2017, designers reported InVision Studio as being the most exciting tool of this year but aren't showing strong adoption yet.</span></li>
          <li><?= (new Asset("assets/images/icons/lightbulb-on-outline.svg"))->content() ?><span>All three Adobe tools continue continue to have almost equal usage.</span></li>
        </ul>
        <div class="graph">
          <h3>Most Popular UI Design Tools</h3>
          <h4>"Which tools do you use for interface design?"</h4>
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
        <div class="section-header"><h2>Prototyping Tools</h2><div class="line"></div></div>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <canvas id="brainstorming-graph-1"></canvas>
      </div>
  </section>
  <section id="handoff">
      <div class="wrapper small">
        <div class="section-header"><h2>Handoff Tools</h2><div class="line"></div></div>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <canvas id="brainstorming-graph-1"></canvas>
      </div>
  </section>
  <section>
      <div class="wrapper small">
        <div class="section-header"><h2>Design System Tools</h2><div class="line"></div></div>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <canvas id="brainstorming-graph-1"></canvas>
      </div>
  </section>
  <section id="monitoring">
      <div class="wrapper small">
        <div class="section-header"><h2>Monitoring Tools</h2><div class="line"></div></div>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <canvas id="brainstorming-graph-1"></canvas>
      </div>
  </section>
  <section id="version-control">
      <div class="wrapper small">
        <div class="section-header"><h2>Version Control & File Management Tools</h2><div class="line"></div></div>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <canvas id="brainstorming-graph-1"></canvas>
      </div>
  </section>
  <section id="exciting">
      <div class="wrapper small">
        <div class="section-header"><h2>Most Exciting Tools of 2019</h2><div class="line"></div></div>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <canvas id="brainstorming-graph-1"></canvas>
      </div>
  </section>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
<script src="/assets/js/survey-2018-charts.js"></script>
<?php snippet('footer') ?>