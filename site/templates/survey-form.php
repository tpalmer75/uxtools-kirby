<?php snippet('header') ?>
<!-- <iframe id="designToolsForm" src="https://docs.google.com/forms/d/e/1FAIpQLScvabonlHQIeJ8A6TuK5wNTThY3d2XFyJJwjsikcdUFjevQtg/viewform?embedded=true" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe> -->
<div style="background-color:#f0f0f0;">
	<iframe id="designToolsForm" src="https://docs.google.com/forms/d/e/1FAIpQLSfhffvuS8EelGrQOMa530UT9gx79o7ftTnMl_k-bytryWGJ-g/viewform" width="1024" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
</div>
<script>
  resizeFrame = function() {
    iframe = document.getElementById("designToolsForm");
    iframe.width = window.innerWidth;
    iframe.height = window.innerHeight - document.getElementById("main-header").offsetHeight;
  }
  resizeFrame();

  window.onresize = function(event) {
    resizeFrame();
  };
</script>

<?php snippet('footer') ?>