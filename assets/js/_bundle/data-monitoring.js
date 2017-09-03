const monitoringData = {
	tools: [{
		"name": "Inspectlet",
		"url": "http://www.inspectlet.com/",
		"image": {
			"background-position": "-100 -200",
		},
		"platforms": {
			"web": true
		},
		"playback": true,
		"heatmaps": true,
		"tags": true,
		"location": true,
		"skipInactivity": true,
		"playbackSpeed": true,
		"export": {
			"html": true
		},
		"pricing": {
			"free": true,
			"subscription": "$39+"
		}
	}, {
		"name": "Lucky Orange",
		"url": "http://www.luckyorange.com/",
		"image": {
			"background-position": "0 -300",
		},
		"platforms": {
			"web": true
		},
		"playback": true,
		"heatmaps": true,
		"tags": true,
		"polls": true,
		"formAnalytics": true,
		"location": true,
		"console": true,
		"skipInactivity": true,
		"playbackSpeed": true,
		"live": true,
		"pricing": {
			"free": false,
			"subscription": "$10+"
		},
		"export": {},
		// can watch live sessions
		// can show trending referrers
		// can show trending tweets
		// can see global map of locations
	}, {
		"name": "Fullstory",
		"url": "http://www.fullstory.com/",
		"image": {
			"background-position": "-300 -100",
		},
		"platforms": {
			"web": true
		},
		"playback": true,
		"tags": true,
		"location": true,
		"console": true,
		"skipInactivity": true,
		"playbackSpeed": true,
		"jumpBack": true, // Skip backwards a few seconds
		"taylorChoice": true,
		"live": true,
		"pricing": {
			"free": true,
			"subscription": "$199+"
		},
		"export": {},
		// Can search according the the html element a user clicked
		// can watch live sessions
	}, {
		"name": "Hotjar",
		"url": "https://www.hotjar.com/",
		"image": {
			"background-position": "0 -200",
		},
		"platforms": {
			"web": true
		},
		"playback": true,
		"heatmaps": true,
		"location": true,
		"formAnalytics": true,
		"polls": true,
		"playbackSpeed": true,
		"skipInactivity": true,
		"pricing": {
			"free": true,
			"subscription": "$29+"
		},
		"export": {},
		// host custom surveys like Qualtrics
	}, {
		"name": "MouseStats",
		"url": "https://www.mousestats.com/",
		"image": {
			"background-position": "-400 -100",
		},
		"platforms": {
			"web": true
		},
		"playback": true,
		"heatmaps": true,
		"formAnalytics": true,
		"polls": true,
		"skipInactivity": true,
		"pricing": {
			"free": false,
			"subscription": "$29+"
		},
		"export": {},
	}, {
		"name": "UserTrack",
		"url": "https://www.usertrack.net/",
		"image": {
			"background-position": "-200 -200",
		},
		"platforms": {
			"web": true
		},
		"playback": true,
		"heatmaps": true,
		"location": true,
		"skipInactivity": true,
		"pricing": {
			"free": false,
			"purchase": "$27"
		},
		"export": {},
	}, {
		"name": "Zeerat",
		"url": "https://zeerat.com",
		"image": {
			"background-position": "-300 -200",
		},
		"platforms": {
			"web": true
		},
		"playback": true,
		"heatmaps": true,
		"location": true,
		"formAnalytics": true,
		"pricing": {
			"free": false,
			"subscription": "$40+"
		},
		"export": {},
	}, {
		"name": "Jaco",
		"url": "http://www.getjaco.com/",
		"image": {
			"background-position": "-400 -200",
		},
		"platforms": {
			"web": true
		},
		"playback": true,
		"tags": false,
		"location": false,
		"console": false,
		"skipInactivity": true,
		"playbackSpeed": true,
		"pricing": {
			"free": true,
			"subscription": "$39+"
		},
		"export": {},
		// Can search according the the html element a user clicked
		// can watch live sessions
	}, {
		"name": "Smartlook",
		"url": "https://www.smartlook.com/",
		"image": {
			"background-position": "-400 -800",
		},
		"platforms": {
			"web": true
		},
		"playback": true,
		"tags": false,
		"location": true,
		"console": false,
		"skipInactivity": true,
		"playbackSpeed": true,
		"jumpBack": true,
		"live": true,
		"pricing": {
			"free": true,
			"subscription": "$16+"
		},
		"export": {},
		// Can search according the the html element a user clicked
		// can watch live sessions
	}, {
		"name": "Zarget",
		"url": "https://zarget.com",
		"image": {
			"background-position": "0 -1000",
		},
		"platforms": {
			"web": true
		},
		"playback": true,
		"tags": false,
		"location": false,
		"heatmaps": true,
		"console": false,
		"skipInactivity": false,
		"playbackSpeed": false,
		"formAnalytics": true,
		"jumpBack": false,
		"polls": true,
		"pricing": {
			"free": false,
			"subscription": "$44+"
		},
		"export": {},
	}, {
		"name": "Wisdom",
		"url": "https://getwisdom.io/",
		"image": {
			"background-position": "-400 -1100",
		},
		"platforms": {
			"web": true
		},
		"playback": true,
		"tags": false,
		"location": true,
		"heatmaps": false,
		"console": true,
		"skipInactivity": true,
		"playbackSpeed": true,
		"formAnalytics": false,
		"jumpBack": false,
		"polls": false,
		"live": true,
		"control": true,
		"pricing": {
			"free": true,
			"subscription": "$89+"
		},
		"export": {},
	}],

	columns: [
	{
			"title": "",
			"tipText": ""
	}, {
			"title": "Name",
			"tipText": "Name of app"
	}, {
			"title": "Free",
			"tipText": "Has a free version"
	}, {
			"title": "Subscription",
			"tipText": "Cheapest monthly<br>payment"
	}, {
			"title": "Purchase",
			"tipText": "One time cost"
	}, {
			"title": "Playback",
			"tipText": "Records user's<br> actions"
	}, {
			"title": "Skip",
			"tipText": "Can skip inactivity<br> during playback"
	}, {
			"title": "Speed",
			"tipText": "Fast-forward<br> & half-speed"
	}, {
			"title": "Jump Back",
			"tipText": "Go back a few seconds<br> in playback (so useful)"
	}, {
			"title": "Console",
			"tipText": "Records JS console<br> during playback"
	}, {
			"title": "Heatmaps",
			"tipText": "Generates heatmap<br> of actions"
	}, {
			"title": "Location",
			"tipText": "Shows visitor's<br> location"
	}, {
			"title": "Form Stats",
			"tipText": "Analyzes form<br> drop off & stats"
	}, {
			"title": "Polls",
			"tipText": "Can create<br> user surveys"
	}, {
			"title": "Live",
			"tipText": "Can watch users<br> in real-time"
	}, {
			"title": "Control",
			"tipText": "Can remotely control<br> user's browser"
	}, {
			"title": "Export",
			"tipText": "Format for<br> downloaded"
	}]
};