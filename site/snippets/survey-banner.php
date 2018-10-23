<div id="survey-banner">The 2018 Design Tools Survey is live! <a href="/survey">Take the survey</a></div>
<script>
	var url = window.location.href;
	var lastPart = url.substr(url.lastIndexOf('/') + 1);

	if (lastPart === "survey") {
	   document.getElementById("survey-banner").style.display = "none";
	}
</script>