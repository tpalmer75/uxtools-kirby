const librariesData = {
	tools: [{
		"name": "Lingo",
		"url": "https://www.lingoapp.com/",
		"image": {
			"background-position": "-100 -1100",
		},
		"platforms": {
			"mac": true
		},
		"programs": {
			"sketch": true,
		},
		"assets": true,
		"symbols": true,
		"layers": true,
		"sharing": true,
		"permissions": true,
		"interface": "Window",
		"update": true, // push and pull changes
		"annotate": true,
		"styleguide": false,
		"pricing": {
			"free": true,
			"individual": "$0+",
			"team": "$29–$149"
		}
	}, {
		"name": "Craft",
		"url": "https://www.invisionapp.com/craft",
		"image": {
			"background-position": "-500 -300",
		},
		"platforms": {
			"mac": true
		},
		"programs": {
			"sketch": true,
		},
		"assets": false,
		"symbols": true,
		"layers": false,
		"sharing": true,
		"permissions": false,
		"interface": "Panel",
		"update": true, // push and pull changes
		"annotate": false,
		"styleguide": false,
		"pricing": {
			"free": true,
			"individual": "—",
			"team": "—"
		}
	}, {
		"name": "Zeroheight",
		"url": "https://www.zeroheight.com/",
		"image": {
			"background-position": "-200 -1100",
		},
		"platforms": {
			"mac": true
		},
		"programs": {
			"sketch": true,
		},
		"assets": false,
		"symbols": true,
		"layers": true,
		"sharing": true,
		"permissions": false,
		"interface": "Panel",
		"update": true, // push and pull changes
		"annotate": false,
		"styleguide": true,
		"pricing": {
			"free": false,
			"individual": "—",
			"team": "$19–$99"
		}
	}, {
		"name": "Brand.ai",
		"url": "https://brand.ai/",
		"image": {
			"backgroundPosition": "-200 -1000",
		},
		"platforms": {
			"web": true
		},
		"programs": {
			"sketch": true,
			"illustrator": true,
			"office": true,
			"powerpoint": true,
			"word": true
		},
		"assets": true,
		"symbols": true,
		"layers": true,
		"sharing": true,
		"permissions": true,
		"interface": "Window",
		"update": true, // push and pull changes
		"annotate": false,
		"styleguide": true,
		"pricing": {
			"free": false,
			"individual": "—",
			"team": "$19–$99"
		}
	}, {
		"name": "Figma",
		"url": "https://www.figma.com",
		"image": {
			"background-position": "-200 -100",
		},
		"platforms": {
			"web": true,
			"mac": true,
			"windows": true
		},
		"programs": {
			"figma": true,
		},
		"assets": false,
		"symbols": true,
		"layers": true,
		"sharing": true,
		"permissions": false,
		"interface": "Window",
		"update": true, // push and pull changes
		"annotate": false,
		"styleguide": false,
		"pricing": {
			"free": true,
			"individual": "$12",
			"team": "$12+"
		}
	}, {
		"name": "UX Pin",
		"url": "https://www.figma.com",
		"image": {
			"background-position": "0 -100"
		},
		"platforms": {
			"web": true,
			"mac": true,
		},
		"programs": {
			"uxPin": true,
			"sketch": true
		},
		"assets": true,
		"symbols": true,
		"layers": true,
		"sharing": true,
		"permissions": false,
		"interface": "Window",
		"update": true, // push and pull changes
		"annotate": true,
		"styleguide": true,
		"pricing": {
			"free": false,
			"individual": "$29",
			"team": "$49+"
		}
	}
	// UX Pin
	],

	columns: [
	{
			"title": "",
			"tipText": ""
	}, {
			"title": "Name",
			"tipText": "Name of app"
	}, {
			"title": "Platform",
			"tipText": "Platforms used to <br>upload components"
	}, {
			"title": "Programs",
			"tipText": "Supported<br>file types"
	}, {
			"title": "Free",
			"tipText": "Has a free version"
	}, {
			"title": "Individual",
			"tipText": "Monthly cost for<br> single user"
	}, {
			"title": "Team",
			"tipText": "Monthly cost for 2+<br> team members"
	}, {
			"title": "Symbols",
			"tipText": "Can import<br>symbols"
	}, {
			"title": "Layers",
			"tipText": "Can import<br>normal layers"
	}, {
			"title": "Assets",
			"tipText": "Can import generic<br> assets (like images)"
	}, {
			"title": "Sharing",
			"tipText": "Can share<br>the library"
	}, {
			"title": "Permissions",
			"tipText": "Can restrict access<br>to others"
	}, {
			"title": "Interface",
			"tipText": "How the tool<br>appears in-app"
	}, {
			"title": "Update",
			"tipText": "Can sync changes<br>across documents"
	}, {
			"title": "Annotate",
			"tipText": "Can create<br>notes about components"
	}, {
			"title": "Style Guide",
			"tipText": "Automatically generates<br> a style guide<br> of components"
	}]
};