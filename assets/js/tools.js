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
	inserted: function(el, binding, vnode) {
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
			var rows = document.querySelectorAll("tbody tr");
			var table = document.getElementById("scroll-table");

			fixedHeader.style.position = "fixed"; // to keep it hidden while loading
			// set initial position of fixed header
			fixedHeader.style.top = headerHeight + "px";

			// Make room for fixed header 
			scrollElement.style.marginTop = fixedHeaderHeight + "px";

			// align column headers with content
			var alignHeaders = function() {
				for (var i=0; i < columns.length; i++) {
					var newWidth = columns[i].offsetWidth;
					fixedHeaders[i].style.minWidth = newWidth + "px";

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

			var setRowHeight = function() {
				// set height of fixedColumn cells
				for ( var i=0; i < fixedCols.length; i++ ) {
					fixedCols[i].style.height = rows[i].clientHeight + "px";
				}
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

				// if scrolling horizontally
				if (currentScrollX > 0) {
					// for each column
					for ( var i=0; i < fixedCols.length; i++ ) {
						fixedCols[i].style.position = "fixed";
						// fixedCols[i].style.top = parseInt(fixedHeader.style.top) + fixedHeaderHeight - currentScrollY + (fixedColHeight*i);
						fixedCols[i].style.top = rows[i].getBoundingClientRect().y + "px";
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

			var setTableConfiguration = function() {
				if (scrollElement.offsetWidth < 800) {
					vnode.context.$parent.tableConfiguration.showNotes = false;
				} else {
					vnode.context.$parent.tableConfiguration.showNotes = true;
				}
			}

			

			scrollElement.onscroll = function() {onScroll()};

			function resizeThings() {
				headerHeight = mainHeader.clientHeight;
				fixedHeader.style.top = headerHeight + "px";
				alignHeaders();
				setTableConfiguration();
				fixedHeaderHeight = fixedHeader.getBoundingClientRect().height;
				scrollElement.style.marginTop = fixedHeaderHeight + "px";
				setRowHeight();
			};

			window.onresize = function() {resizeThings()};

			setTableConfiguration();
			Vue.nextTick(function() {
				resizeThings();
			})
			
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
		},
		getCheckIcon: function(capability) {
			switch (capability) {
				case 'yes': 
					return '<svg class="yes" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M11,16.5L18,9.5L16.59,8.09L11,13.67L7.91,10.59L6.5,12L11,16.5Z" /></svg>'
				case 'no': 
					return '<svg class="no" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />'
				case 'semi': 
					return '<svg class="semi" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M17,13H7V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" /></svg>'
			}
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
		},
		getCheckIcon: function(capability) {
			switch (capability) {
				case 'yes': 
					return '<svg class="yes" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M11,16.5L18,9.5L16.59,8.09L11,13.67L7.91,10.59L6.5,12L11,16.5Z" /></svg>'
				case 'no': 
					return '<svg class="no" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />'
				case 'semi': 
					return '<svg class="semi" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M17,13H7V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" /></svg>'
			}
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
		},
		getCheckIcon: function(capability) {
			switch (capability) {
				case 'yes': 
					return '<svg class="yes" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M11,16.5L18,9.5L16.59,8.09L11,13.67L7.91,10.59L6.5,12L11,16.5Z" /></svg>'
				case 'no': 
					return '<svg class="no" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />'
				case 'semi': 
					return '<svg class="semi" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M17,13H7V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" /></svg>'
			}
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
		},
		getCheckIcon: function(capability) {
			switch (capability) {
				case 'yes': 
					return '<svg class="yes" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M11,16.5L18,9.5L16.59,8.09L11,13.67L7.91,10.59L6.5,12L11,16.5Z" /></svg>'
				case 'no': 
					return '<svg class="no" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />'
				case 'semi': 
					return '<svg class="semi" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M17,13H7V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" /></svg>'
			}
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
		},
		getCheckIcon: function(capability) {
			switch (capability) {
				case 'yes': 
					return '<svg class="yes" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M11,16.5L18,9.5L16.59,8.09L11,13.67L7.91,10.59L6.5,12L11,16.5Z" /></svg>'
				case 'no': 
					return '<svg class="no" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />'
				case 'semi': 
					return '<svg class="semi" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M17,13H7V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" /></svg>'
			}
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
		},
		getCheckIcon: function(capability) {
			switch (capability) {
				case 'yes': 
					return '<svg class="yes" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M11,16.5L18,9.5L16.59,8.09L11,13.67L7.91,10.59L6.5,12L11,16.5Z" /></svg>'
				case 'no': 
					return '<svg class="no" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />'
				case 'semi': 
					return '<svg class="semi" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M17,13H7V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" /></svg>'
			}
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

Vue.component('check-box-table-cell', {
	template: '<td><div v-html="getCheckIcon(toolProperty)"></div><p v-if="$parent.$parent.$data.tableConfiguration.showNotes" class="notes" v-html="toolProperty.notes"></p></td>',
	props: ['toolProperty'],
	methods: {
		getCheckIcon: function(toolProperty) {
			if (toolProperty.capable) {
				switch (toolProperty.capable) {
					case 'yes': 
						return '<svg class="yes" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M11,16.5L18,9.5L16.59,8.09L11,13.67L7.91,10.59L6.5,12L11,16.5Z" /></svg>'
					case 'no': 
						return '<svg class="no" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />'
					case 'semi': 
						return '<svg class="semi" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M17,13H7V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" /></svg>'
					default:
						return '<svg class="no" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />'
				}
			} else {
				switch (toolProperty) {
					case true: 
						return '<svg class="yes" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M11,16.5L18,9.5L16.59,8.09L11,13.67L7.91,10.59L6.5,12L11,16.5Z" /></svg>'
					case false: 
						return '<svg class="no" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />'
					default:
						return '<svg class="no" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />'
				}
			}
		}
	}
}) 


	

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
			tableConfiguration: {
				showNotes: true
			}
		}
	}
});

