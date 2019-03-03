const designData = {
	columns: [
    {
            "title": "",
            "tipText": ""
    }, {
            "title": "Name",
            "tipText": "Name of app",
            "sortable": true,
            "sortVar": "name",
            "sortDir": "asc"
    }, {
            "title": "Usage",
            "tipText": "Based on the<br>2017 Design Tools Survey",
            "sortable": true,
            "sortVar": "surveyRaw2017",
            "sortDir": "desc",
    }, {
            "title": "Platform",
            "tipText": "Platforms used for <br>building prototypes"
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
            "title": "Offline",
            "tipText": "Can open and<br>edit offline"
    }, {
            "title": "Pen Tool",
            "tipText": "Draw vectors<br>and paths"
    }, {
            "title": "Collaborate",
            "tipText": "Simultaneous editing"
    },  {
            "title": "Comments",
            "tipText": "Others can<br>leave comments"
    }, {
            "title": "Handoff",
            "tipText": "Automatic specs<br>for developers"
    }, {
            "title": "Artboards",
            "tipText": "Multiple visible<br>artboards"
    }, {
            "title": "Symbols",
            "tipText": "Document-wide<br>master symbols"
    }, {
            "title": "Responsive",
            "tipText": "Dynamically resizing<br>groups"
    }, {
            "title": "Prototyping",
            "tipText": "Can prototype<br>within the app"
    }
    ],
    tools: [{
        "name": "Sketch",
        "url": "https://www.sketchapp.com/",
        "image": {
            "background-position": "-200 0",
        },
        "surveyPercent2017": 100,
        "surveyRaw2017": 1409,
        "surveyRaw2018": 1953,
        "surveyPerent2018": 41,
        "platforms": {
            "mac": true
        },
        "import": {
            "sketch": true,
            "svg": true,
            "eps": true,
            "pdf": true,
            "tiff": true
        },
        "export": {
            "png": true,
            "jpg": true,
            "svg": true,
            "pdf": true,
            "eps": true,
            "tiff": true
        },
        "offline": true,
        "penTool": true,
        "collaboration": false,
        "handoff": false,
        "plugins": true,
        "artboards": true,
        "symbols": true,
        "responsive": true,
        "vector": true,
        "prototyping": true,
        "pricing": {
            "purchase": "$99"
        },
        lastUpdated: "Oct '18"
    }, {
        "name": "Figma",
        "url": "https://www.figma.com",
        "image": {
            "background-position": "-200 -100",
        },
        "surveyPercent2017": 15,
        "surveyRaw2017": 214,
        "surveyRaw2018": 583,
        "surveyPerent2018": 12,
        "platforms": {
            "web": true,
            "mac": true,
            "windows": true
        },
        "import": {
            "svg": true,
            "jpg": true,
            "png": true,
        },
        "export": {
            "png": true,
            "jpg": true,
            "svg": true,
            "tiff": true
        },
        "offline": false,
        "comments": true,
        "penTool": true,
        "collaboration": true,
        "handoff": true,
        "artboards": true,
        "symbols": true,
        "responsive": true,
        "prototyping": true,
        "vector": true,
        "pricing": {
            "free": true,
            "subscription": "$12+",
            "purchase": ""
        }
    }, {
        "name": "Adobe Illustrator",
        "url": "http://www.adobe.com/products/illustrator.html",
        "image": {
            "background-position": "-100 -100",
        },
        "surveyPercent2017": 28,
        "surveyRaw2017": 388,
        "surveyRaw2018": 492,
        "surveyPerent2018": 10,
        "platforms": {
            "mac": true,
            "windows": true
        },
        "import": {
            "svg": true,
            "eps": true,
            "pdf": true,
            "psd": true,
            "tiff": true,
            "ai": true
        },
        "export": {
            "png": true,
            "jpg": true,
            "svg": true,
            "pdf": true,
            "eps": true,
            "tiff": true,
            "ai": true
        },
        "offline": true,
        "penTool": true,
        "collaboration": false,
        "handoff": false,
        "artboards": true,
        "plugins": true,
        "symbols": true,
        "responsive": true,
        "vector": true,
        "pricing": {
            "free": false,
            "subscription": "$20"
        }
    }, {
        "name": "Adobe Photoshop",
        "url": "http://www.adobe.com/products/photoshop.html",
        "image": {
            "background-position": "-100 0",
        },
        "surveyPercent2017": 38,
        "surveyRaw2017": 530,
        "surveyRaw2018": 0,
        "surveyPerent2018": 0,
        "platforms": {
            "mac": true,
            "windows": true
        },
        "import": {
            "pdf": true,
            "psd": true,
            "ai": true,
            "tiff": true,
            "eps": true
        },
        "export": {
            "png": true,
            "jpg": true,
            "tiff": true,
            "pdf": true,
            "psd": true
        },
        "offline": true,
        "penTool": true,
        "collaboration": false,
        "plugins": true,
        "handoff": false,
        "artboards": true,
        "symbols": false,
        "responsive": false,
        "vector": true,
        "pricing": {
            "free": false,
            "subscription": "$20"
        }
    }, {
        "name": "Affinity Designer",
        "url": "https://affinity.serif.com/en-us/",
        "image": {
            "background-position": "-400 0",
        },
        "surveyPercent2017": 1,
        "surveyRaw2017": 23,
        "surveyRaw2018": 0,
        "surveyPerent2018": 0,
        "platforms": {
            "mac": true,
            "windows": true
        },
        "import": {
            "svg": true,
            "eps": true,
            "pdf": true,
            "ai": true,
            "tiff": true
        },
        "export": {
            "png": true,
            "jpg": true,
            "gif": true,
            "svg": true,
            "psd": true,
            "eps": true,
            "tiff": true,
            "pdf": true
        },
        "offline": true,
        "penTool": true,
        "collaboration": false,
        "handoff": false,
        "artboards": true,
        "symbols": true,
        "responsive": true, 
        "vector": true,
        "pricing": {
            "free": false,
            "purchase": "$40"
        }
    }, {
        "name": "Adobe XD",
        "url": "http://www.adobe.com/products/experience-design.html",
        "image": {
            "background-position": "0 0",
        },
        "surveyPercent2017": 20,
        "surveyRaw2017": 277,
        "surveyRaw2018": 0,
        "surveyPerent2018": 0,
        "platforms": {
            "mac": true,
            "windows": true
        },
        "import": {
            "svg": true,
            "tiff": true
        },
        "export": {
            "png": true,
            "jpg": true,
            "gif": true,
            "svg": true,
            "tiff": true,
            "pdf": true
        },
        "offline": true,
        "penTool": true,
        "comments": true,
        "collaboration": false,
        "handoff": true,
        "artboards": true,
        "symbols": true,
        "responsive": false,
        "prototyping": true,
        "vector": true,
        "pricing": {
            "subscription": "$10",
            "free": true
        }

    }, {
        "name": "UX Pin",
        "url": "https://www.uxpin.com/",
        "image": {
            "background-position": "0 -100",
        },
        "surveyPercent2017": 1,
        "surveyRaw2017": 4,
        "surveyRaw2018": 0,
        "surveyPerent2018": 0,
        "platforms": {
            "web": true,
            "mac": true,
            "windows": true
        },
        "import": {
            "sketch": true,
            "psd": true,
            "svg": true,
            "eps": true,
            "pdf": true,
            "ai": true,
            "tiff": true
        },
        "export": {
            "png": true,
            "pdf": true,
            "html": true
        },
        "offline": false,
        "penTool": true,
        "collaboration": true,
        "comments": true,
        "handoff": true,
        "artboards": false,
        "symbols": true,
        "responsive": true,
        "prototyping": true,
        "vector": true,
        "pricing": {
            "free": false,
            "subscription": "$20"
        },
        lastUpdated: "Oct '18"
    }, {
        "name": "Axure",
        "url": "http://www.axure.com/",
        "image": {
            "background-position": "-300 0",
        },
        "surveyPercent2017": 1,
        "surveyRaw2017": 96,
        "surveyRaw2018": 0,
        "surveyPerent2018": 0,
        "platforms": {
            "mac": true,
            "windows": true
        },
        "import": {
            "png": true,
            "jpg": true,
            "gif": true
        },
        "export": {
            "word": true,
            "png": true,
            "jpg": true,
            "html": true,
            "pdf": true
        },
        "offline": true,
        "penTool": true,
        "collaboration": true,
        "comments": true,
        "handoff": true,
        "artboards": false,
        "symbols": true,
        "responsive": true,
        "prototyping": true,
        "vector": false, // Seems HTML based
        "pricing": {
            "free": false,
            "subscription": "$29",
            "purchase": "$495"
        }
    }, {
        "name": "Atomic.io",
        "url": "https://atomic.io/",
        "image": {
            "background-position": "-500 -700",
        },
        "surveyPercent2017": 1,
        "surveyRaw2017": 2,
        "surveyRaw2018": 0,
        "surveyPerent2018": 0,
        "platforms": {
            "web": true
        },
        "import": {
            "sketch": true,
            "svg": true,
            "png": true,
            "jpg": true
        },
        "export": {
            "png": true,
            "jpg": true,
            "svg": true,
            "pdf": true,
            "eps": true,
            "tiff": true
        },
        "offline": false,
        "penTool": false,
        "collaboration": true,
        "comments": true,
        "handoff": false,
        "plugins": false,
        "artboards": false,
        "symbols": true,
        "responsive": false,
        "vector": false,
        "prototyping": true,
        "pricing": {
            "subscription": "$15",
            "free": true
        }
    }, {
        "name": "Gravit Designer",
        "url": "https://gravit.io/",
        "image": {
            "background-position": "0 -900",
        },
        "surveyPercent2017": 1,
        "surveyRaw2017": 4,
        "surveyRaw2018": 0,
        "surveyPerent2018": 0,
        "platforms": {
            "web": true,
            "mac": true,
            "windows": true,
            "linux": true
        },
        "import": {
        },
        "export": {
        },
        "offline": true,
        "penTool": true,
        "collaboration": false,
        "comments": true,
        "handoff": true,
        "plugins": false,
        "artboards": true,
        "symbols": true,
        "responsive": true,
        "vector": true,
        "prototyping": true,
        "pricing": {
            "free": true
        }
    }, {
        "name": "MockFlow",
        "url": "https://www.mockflow.com/",
        "image": {
            "background-position": "-200 -900",
        },
        "surveyPercent2017": 100,
        "surveyRaw2017": 0,
        "surveyRaw2018": 0,
        "surveyPerent2018": 0,
        "platforms": {
            "web": true,
            "mac": true,
            "windows": true,
        },
        "import": {
        },
        "export": {
        },
        "offline": false,
        "penTool": false,
        "collaboration": true,
        "comments": true,
        "handoff": true,
        "plugins": false,
        "artboards": false,
        "symbols": true,
        "responsive": false,
        "vector": false,
        "prototyping": false,
        "pricing": {
            "free": false,
            "subscription": "$19"
        }
    }, {
        "name": "Antetype",
        "url": "http://antetype.com/",
        "image": {
            "background-position": "-400 -900",
        },
        "surveyPercent2017": 100,
        "surveyRaw2017": 0,
        "surveyRaw2018": 0,
        "surveyPerent2018": 0,
        "platforms": {
            "mac": true,
        },
        "import": {
        },
        "export": {
        },
        "offline": true,
        "penTool": false,
        "collaboration": false,
        "comments": true,
        "handoff": true,
        "plugins": false,
        "artboards": true,
        "symbols": true,
        "responsive": true,
        "vector": true,
        "prototyping": true,
        "pricing": {
            "free": false,
            "purchase": "$189"
        }
    }, {
        "name": "Proto.io",
        "url": "https://proto.io/",
        "image": {
            "background-position": "-100 -500",
        },
        "surveyPercent2017": 1,
        "surveyRaw2017": 2,
        "surveyRaw2018": 0,
        "surveyPerent2018": 0,
        "platforms": {
            "web": true,
        },
        "import": {
        },
        "export": {
        },
        "offline": true,
        "penTool": true,
        "collaboration": true,
        "comments": true,
        "handoff": false,
        "plugins": false,
        "artboards": true,
        "symbols": false,
        "responsive": false,
        "vector": true,
        "prototyping": true,
        "pricing": {
            "free": true,
            "subscription": "$24+"
        }
    }, {
        "name": "Framer (Classic)",
        "url": "https://classic.framer.com/",
        "image": {
            "background-position": "-200 -400",
        },
        "surveyPercent2017": 1,
        "surveyRaw2017": 103,
        "surveyRaw2018": 0,
        "surveyPerent2018": 0,
        "platforms": {
            "mac": true,
        },
        "import": {
        },
        "export": {
        },
        "offline": true,
        "penTool": true,
        "collaboration": false,
        "comments": false,
        "handoff": true,
        "plugins": true,
        "artboards": true,
        "symbols": false,
        "responsive": true,
        "vector": true,
        "prototyping": true,
        "pricing": {
            "free": false,
            "subscription": "",
            "purchase": ""
        },
        lastUpdated: "Jan '18"
    }, {
        "name": "Framer X",
        "url": "http://framer.com/",
        "image": {
            "background-position": "-200 -400",
        },
        "surveyPercent2017": 0,
        "surveyRaw2017": 0,
        "surveyRaw2018": 0,
        "surveyPerent2018": 0,
        "platforms": {
            "mac": true,
        },
        "import": {
        },
        "export": {
        },
        "offline": true,
        "penTool": true,
        "collaboration": false,
        "comments": false,
        "handoff": false,
        "plugins": true,
        "artboards": true,
        "symbols": true,
        "responsive": true,
        "vector": true,
        "prototyping": true,
        "pricing": {
            "free": false,
            "subscription": "$12",
            "purchase": ""
        },
        lastUpdated: "Jan '18"
    }, {
        "name": "Justinmind",
        "url": "http://www.justinmind.com/",
        "image": {
            "background-position": "-400 -700",
        },
        "surveyPercent2017": 1,
        "surveyRaw2017": 3,
        "surveyRaw2018": 0,
        "surveyPerent2018": 0,
        "platforms": {
            "mac": true,
            "windows": true
        },
        "import": {
        },
        "export": {
        },
        "offline": true,
        "penTool": false,
        "collaboration": true,
        "comments": true,
        "handoff": true,
        "plugins": false,
        "artboards": true,
        "symbols": true,
        "responsive": true,
        "prototyping": true,
        "pricing": {
            "free": true,
            "subscription": "$19",
            "purchase": "$495"
        }
    }, {
        "name": "Studio",
        "url": "https://studio.design",
        "image": {
            "background-position": "-500 -1100",
        },
        "surveyPercent2017": 100,
        "surveyRaw2017": 0,
        "surveyRaw2018": 0,
        "surveyPerent2018": 0,
        "platforms": {
            "web": true
        },
        "import": {
        },
        "export": {
        },
        "offline": false,
        "penTool": false,
        "collaboration": true, // don't actually know
        "comments": true, // don't actually know
        "handoff": false,
        "plugins": false,
        "artboards": true,
        "symbols": true,
        "responsive": true,
        "prototyping": true,
        "pricing": {
            "free": true,
            "subscription": "",
            "purchase": ""
        }
    }, {
        "name": "Mockplus",
        "url": "https://goo.gl/uBdBne",
        "image": {
            "background-position": "-100 -800",
        },
        "surveyPercent2017": 100,
        "surveyRaw2017": 0,
        "surveyRaw2018": 0,
        "surveyPerent2018": 0,
        "platforms": {
            "web": true
        },
        "import": {
            "sketch": true
        },
        "export": {
        },
        "offline": false,
        "penTool": false,
        "collaboration": true,
        "comments": true,
        "handoff": false,
        "plugins": false,
        "artboards": false,
        "symbols": true,
        "responsive": false,
        "prototyping": true,
        "pricing": {
            "free": true,
            "subscription": "$29+",
            "purchase": ""
        }, 
    }, {
        "name": "InVision Studio",
        "url": "https://www.invisionapp.com/studio",
        "image": {
            "background-position": "-300 -400",
        },
        "surveyPercent2017": 100,
        "surveyRaw2017": 0,
        "surveyRaw2018": 0,
        "surveyPerent2018": 0,
        "platforms": {
            "mac": true,
            "windows": true
        },
        "import": {
            "sketch": true
        },
        "export": {
        },
        "offline": true,
        "penTool": true,
        "collaboration": false,
        "comments": true,
        "handoff": true,
        "plugins": false,
        "artboards": true,
        "symbols": true,
        "responsive": true,
        "prototyping": true,
        "pricing": {
            "free": false,
            "subscription": "??",
            "purchase": ""
        }
    }]

}