<!-- Fullstory -->
<script>
  window['_fs_debug'] = false;
  window['_fs_host'] = 'www.fullstory.com';
  window['_fs_org'] = '2EJY1';
  window['_fs_namespace'] = 'FS';
  (function(m,n,e,t,l,o,g,y){
      if (e in m && m.console && m.console.log) { m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].'); return;}
      g=m[e]=function(a,b){g.q?g.q.push([a,b]):g._api(a,b);};g.q=[];
      o=n.createElement(t);o.async=1;o.src='https://'+_fs_host+'/s/fs.js';
      y=n.getElementsByTagName(t)[0];y.parentNode.insertBefore(o,y);
      g.identify=function(i,v){g(l,{uid:i});if(v)g(l,v)};g.setUserVars=function(v){g(l,v)};
      g.identifyAccount=function(i,v){o='account';v=v||{};v.acctId=i;g(o,v)};
      g.clearUserCookie=function(c,d,i){if(!c || document.cookie.match('fs_uid=[`;`]*`[`;`]*`[`;`]*`')){
      d=n.domain;while(1){n.cookie='fs_uid=;domain='+d+
      ';path=/;expires='+new Date(0).toUTCString();i=d.indexOf('.');if(i<0)break;d=d.slice(i+1)}}};
  })(window,document,window['_fs_namespace'],'script','user');
</script>
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-78846271-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- Adsense -->
<script async="async" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Adblock Detector -->
<script>
  var adBlockEnabled = false;
  var testAd = document.createElement('div');
  testAd.innerHTML = '&nbsp;';
  testAd.className = 'adsbox';
  document.body.appendChild(testAd);
  window.setTimeout(function() {
    if (testAd.offsetHeight === 0) {
      adBlockEnabled = true;
      document.body.classList.add("promotions-are-blocked");
    }
    testAd.remove();
  }, 100);
</script>
<script>
  var hamburger = document.getElementById("hamburger");
  var sidebar = document.getElementById("sidebar");
  var shade = document.getElementById("shade");
  var close = document.getElementById("close");

  hamburger.addEventListener("click", function() {
    sidebar.classList.add("show-menu");
  }, false);

  shade.addEventListener("click", function() {
    sidebar.classList.remove("show-menu");
  }, false);

  close.addEventListener("click", function() {
    sidebar.classList.remove("show-menu");
  }, false);
</script>

</body>
</html>