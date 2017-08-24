<!-- Hotjar -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:601365,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
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