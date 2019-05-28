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

