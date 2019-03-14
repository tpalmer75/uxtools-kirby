// @codekit-prepend "_bundle/tether-1.4.0.js"
// @codekit-prepend "_bundle/tether-drop-.1.4.1.js"
// @codekit-prepend "_bundle/tether-tooltip-1.1.0.js"

// @codekit-prepend "_bundle/vue-production.js"
// @codekit-prepend "_bundle/vue-router.js"

// @codekit-prepend "_bundle/v-tooltip@1.1.2.js"

// @codekit-prepend "_bundle/lodash-4.17.4.js"

// @codekit-prepend "toolsHeaders.js"
// @codekit-prepend "toolsData.js"

Vue.use(VTooltip)

Vue.directive('scrolltable', {
	inserted: function(el) {
			var scrollElement = document.getElementById("scroll-element");
			var fixedHeaders = document.querySelectorAll("th");
			var fixedCols = document.querySelectorAll(".fixed-col");
			var fixedColHeight = fixedCols[1].offsetHeight;
			var mainHeader = document.getElementById("main-header");
			var latestKnownScrollX = 0;
			var latestKnownScrollY = 0;
			var ticking = false;
			var headerHeight = mainHeader.clientHeight;
			var fixedHeader = document.getElementById("fixed-header");
			var fixedHeaderHeight = fixedHeader.getBoundingClientRect().height;
			var columns = document.querySelectorAll("tr:first-of-type td");
			var table = document.getElementById("scroll-table");

			fixedHeader.style.position = "fixed"; // to keep it hidden while loading
			// set initial position of fixed header
			fixedHeader.style.top = headerHeight + "px";

			// Make room for fixed header 
			scrollElement.style.marginTop = fixedHeaderHeight + "px";
			console.log(fixedHeaderHeight);

			// align column headers with content
			var alignHeaders = function() {
				for (var i=0; i < columns.length; i++) {
					var newWidth = columns[i].offsetWidth;
					fixedHeaders[i].style.minWidth = newWidth;

					//Firefox fix for minwidth problems
					if(fixedHeaders[i].offsetWidth > newWidth) {
						// Figure out the difference between what is should be
						var difference = fixedHeaders[i].offsetWidth - newWidth;
						var firefoxWidth = fixedHeaders[i].offsetWidth - (difference*2);
						fixedHeaders[i].style.minWidth = firefoxWidth;
					}
				}
			}
			alignHeaders();
			
			var onScroll = function() {
				latestKnownScrollX = scrollElement.scrollLeft;
				latestKnownScrollY = scrollElement.scrollTop;
				requestTick();
			};

			function requestTick() {
			if (!ticking) {
				requestAnimationFrame(update);
			}
			ticking = true;
			}

			// on each scroll
			var update = function() {


				ticking = false;
				var currentScrollY = latestKnownScrollY;
				var currentScrollX = latestKnownScrollX;

				

				fixedHeader.style.left = -currentScrollX;

				if (currentScrollY <= headerHeight) {

					// mainHeader.style.marginTop = -currentScrollY;
					// 	fixedHeader.style.top = headerHeight - currentScrollY;
					// 	fixedHeader.style.boxShadow = "";
					
					// if the table can't scroll completely
					if ((scrollElement.scrollHeight-50) < window.innerHeight) {
						// and isn't scrolled all the way
						if (!(scrollElement.scrollHeight - currentScrollY <= (scrollElement.clientHeight+5))) {
							// normal parallax
							mainHeader.style.marginTop = -currentScrollY;
							fixedHeader.style.top = headerHeight - currentScrollY;
							fixedHeader.style.boxShadow = "";
						}
					} else {
						// normal parallax
						mainHeader.style.marginTop = -currentScrollY;
						fixedHeader.style.top = headerHeight - currentScrollY;
						fixedHeader.style.boxShadow = "";
					}
				} else {
					mainHeader.style.marginTop = -headerHeight;
					fixedHeader.style.top = 0;
					fixedHeader.style.boxShadow = "2px 2px 10px rgba(0,0,0,.15)";
				}

				// if scrolling vertically
				if (currentScrollX > 0) {
					// for each column
					for ( var i=0; i < fixedCols.length; i++ ) {
					fixedCols[i].style.position = "fixed";
					fixedCols[i].style.top = parseInt(fixedHeader.style.top) + fixedHeaderHeight - currentScrollY + (fixedColHeight*i);
					fixedCols[i].style.boxShadow = "2px 0 5px rgba(0,0,0,.1)";
					fixedCols[i].style.backgroundColor = "white";
					}
					// put the column back
				} else {
					for ( var i=0; i < fixedCols.length; i++ ) {
					fixedCols[i].style.position = "absolute";
					fixedCols[i].style.top = "";
					fixedCols[i].style.boxShadow = "";
					}
				}
			};	

			scrollElement.onscroll = function() {onScroll()};
			window.onresize = function() {resizeThings};

			function resizeThings() {
				headerHeight = mainHeader.clientHeight;
				fixedHeader.style.top = headerHeight + "px";
				alignHeaders();
			};

	}
})

const designComp = {
	template: '#design-tools',
	data: function () {
		return {
			toolsHeaders: toolsHeaders.design,
			toolsData: toolsData,
			sortedTools: [],
			scroll: 0,
			sortPath: "design.surveyRaw2018"
		}
	},
	methods: {
		sortBy: function (sortable, dir) {
			this.sortedTools = _.orderBy(this.sortedTools, sortable, dir);
			this.sortPath = sortable;
		}
	},
	created: function() {
		// set Up Google Ads
		(adsbygoogle = window.adsbygoogle || []).push({});
		let tempSortedTools = [];
		// Sort the tools by popularity
		for (var i=0;i<toolsData.length;i++) {
			if (toolsData[i].design) {
				tempSortedTools.push(toolsData[i]);
			}
		}
		tempSortedTools = _.orderBy(tempSortedTools, this.sortPath, "desc");
		this.sortedTools = tempSortedTools;

	}
}

const prototypingComp = {
	template: '#prototyping-tools',
	data: function () {
		return {
			toolsHeaders: toolsHeaders.prototyping,
			toolsData: toolsData,
			sortedTools: [],
			scroll: 0,
			sortPath: "prototyping.surveyRaw2018"
		}
	},
	methods: {
		sortBy: function (sortable, dir) {
			this.sortedTools = _.orderBy(this.sortedTools, sortable, dir);
			this.sortPath = sortable;
		}
	},
	created: function() {
		// set Up Google Ads
		(adsbygoogle = window.adsbygoogle || []).push({});
		let tempSortedTools = [];
		// Sort the tools by popularity
		for (var i=0;i<toolsData.length;i++) {
			if (toolsData[i].prototyping) {
				tempSortedTools.push(toolsData[i]);
			}
		}
		tempSortedTools = _.orderBy(tempSortedTools, this.sortPath, "desc");
		this.sortedTools = tempSortedTools;

	}
}


const handoffComp = {
	template: '#handoff-tools',
	data: function () {
		return {
			toolsHeaders: toolsHeaders.handoff,
			toolsData: toolsData,
			sortedTools: [],
			scroll: 0,
			sortPath: "handoff.surveyRaw2018"
		}
	},
	methods: {
		sortBy: function (sortable, dir) {
			this.sortedTools = _.orderBy(this.sortedTools, sortable, dir);
			this.sortPath = sortable;
		}
	},
	created: function() {
		// set Up Google Ads
		(adsbygoogle = window.adsbygoogle || []).push({});
		let tempSortedTools = [];
		// Sort the tools by popularity
		for (var i=0;i<toolsData.length;i++) {
			if (toolsData[i].handoff) {
				tempSortedTools.push(toolsData[i]);
			}
		}
		tempSortedTools = _.orderBy(tempSortedTools, this.sortPath, "desc");
		this.sortedTools = tempSortedTools;

	}
}

const versioningComp = {
	template: '#versioning-tools',
	data: function () {
		return {
			toolsHeaders: toolsHeaders.versioning,
			toolsData: toolsData,
			sortedTools: [],
			scroll: 0,
			sortPath: "versioning.surveyRaw2018"
		}
	},
	methods: {
		sortBy: function (sortable, dir) {
			this.sortedTools = _.orderBy(this.sortedTools, sortable, dir);
			this.sortPath = sortable;
		}
	},
	created: function() {
		// set Up Google Ads
		(adsbygoogle = window.adsbygoogle || []).push({});
		let tempSortedTools = [];
		// Sort the tools by popularity
		for (var i=0;i<toolsData.length;i++) {
			if (toolsData[i].versioning) {
				tempSortedTools.push(toolsData[i]);
			}
		}
		tempSortedTools = _.orderBy(tempSortedTools, this.sortPath, "desc");
		this.sortedTools = tempSortedTools;

	}
}

const monitoringComp = {
	template: '#monitoring-tools',
	data: function () {
		return {
			toolsHeaders: toolsHeaders.monitoring,
			toolsData: toolsData,
			sortedTools: [],
			scroll: 0,
			sortPath: "monitoring.surveyRaw2018"
		}
	},
	methods: {
		sortBy: function (sortable, dir) {
			this.sortedTools = _.orderBy(this.sortedTools, sortable, dir);
			this.sortPath = sortable;
		}
	},
	created: function() {
		// set Up Google Ads
		(adsbygoogle = window.adsbygoogle || []).push({});
		let tempSortedTools = [];
		// Sort the tools by popularity
		for (var i=0;i<toolsData.length;i++) {
			if (toolsData[i].monitoring) {
				tempSortedTools.push(toolsData[i]);
			}
		}
		tempSortedTools = _.orderBy(tempSortedTools, this.sortPath, "desc");
		this.sortedTools = tempSortedTools;

	}
}

const designSystemsComp = {
	template: '#design-system-tools',
	data: function () {
		return {
			toolsHeaders: toolsHeaders.designSystems,
			toolsData: toolsData,
			sortedTools: [],
			scroll: 0,
			sortPath: "designSystems.surveyRaw2018"
		}
	},
	methods: {
		sortBy: function (sortable, dir) {
			this.sortedTools = _.orderBy(this.sortedTools, sortable, dir);
			this.sortPath = sortable;
		}
	},
	created: function() {
		// set Up Google Ads
		(adsbygoogle = window.adsbygoogle || []).push({});
		let tempSortedTools = [];
		// Sort the tools by popularity
		for (var i=0;i<toolsData.length;i++) {
			if (toolsData[i].designSystems) {
				tempSortedTools.push(toolsData[i]);
			}
		}
		tempSortedTools = _.orderBy(tempSortedTools, this.sortPath, "desc");
		this.sortedTools = tempSortedTools;

	}
}

const router = new VueRouter({
	mode:"history",
	base:"/tools",
	routes: [
		{ 
			path: '/design', 
			component: designComp,
		}, { 
			path: '/prototyping', 
			component: prototypingComp,
		}, {
			path: '/handoff', 
			component: handoffComp,
		}, {
			path: '/design-libraries', 
			redirect: '/design-systems',
		}, {
			path: '/design-systems', 
			component: designSystemsComp,
		}, {
			path: '/versioning', 
			component: versioningComp,
		}, {
			path: '/monitoring', 
			component: monitoringComp,
		}, { 
			path: '*',
			redirect: '/design'
		},
	]
})

const app = new Vue({
	router: router,
	el: '#tools',
	data: function() {
		return {
			showMenu: false,
		}
	}
});

