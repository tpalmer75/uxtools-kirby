const designData = {
	columns: [
    {
            "title": "",
            "show": true,
            "canChange": false,
            "tipText": ""
    }, {
            "title": "Name",
            "show": true,
            "canChange": true,
            "tipText": "Name of app"
    }, {
            "title": "Platform",
            "show": true,
            "canChange": true,
            "tipText": "Platforms used for <br>building prototypes"
    }, {
            "title": "Free",
            "show": true,
            "canChange": true,
            "tipText": "Has a free version"
    }, {
            "title": "Subscription",
            "show": true,
            "canChange": true,
            "tipText": "Cheapest monthly<br>payment"
    }, {
            "title": "Purchase",
            "show": true,
            "canChange": true,
            "tipText": "One time cost"
    }, {
            "title": "Offline",
            "show": true,
            "canChange": true,
            "tipText": "Can open and<br>edit offline"
    }, {
            "title": "Pen Tool",
            "show": true,
            "canChange": true,
            "tipText": "Draw vectors<br>and paths"
    }, {
            "title": "Collaborate",
            "show": true,
            "canChange": true,
            "tipText": "Simultaneous editing"
    },  {
            "title": "Comments",
            "show": true,
            "canChange": true,
            "tipText": "Others can<br>leave comments"
    }, {
            "title": "Handoff",
            "show": true,
            "canChange": true,
            "tipText": "Automatic specs<br>for developers"
    }, {
            "title": "Artboards",
            "show": true,
            "canChange": true,
            "tipText": "Multiple visible<br>artboards"
    }, {
            "title": "Symbols",
            "show": true,
            "canChange": true,
            "tipText": "Document-wide<br>master symbols"
    }, {
            "title": "Responsive",
            "show": true,
            "canChange": true,
            "tipText": "Dynamically resizing<br>groups"
    }, {
            "title": "Prototyping",
            "show": true,
            "canChange": true,
            "tipText": "Can prototype<br>within the app"
    }
    // , {
    //         "title": "Import",
    //         "show": false,
    //         "canChange": true,
    //         "tipText": "Unique formats that<br>can be opened"
    // }, {
    //         "title": "Export",
    //         "show": false,
    //         "canChange": true,
    //         "tipText": "Unique formats that can<br>be exported"
    // }
    ],
    tools: [{
        "name": "Sketch",
        "url": "https://www.sketchapp.com/",
        "image": {
            "background-position": "-200 0",
        },
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
        "pricing": {
            "purchase": "$99"
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
        "handoff": false,
        "artboards": true,
        "symbols": true,
        "responsive": false,
        "prototyping": true,
        "vector": true,
        "pricing": {
            "free": true,
            "subscription": "?"
        }

    }, {
        "name": "UX Pin",
        "url": "https://www.uxpin.com/",
        "image": {
            "background-position": "0 -100",
        },
        "platforms": {
            "web": true
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
        "penTool": false,
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
        }

    }, {
        "name": "Axure",
        "url": "http://www.axure.com/",
        "image": {
            "background-position": "-300 0",
        },
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
        "penTool": false,
        "collaboration": true,
        "handoff": false, // generate a spec Word doc
        "artboards": false,
        "symbols": false,
        "responsive": false,
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
        "name": "Framer",
        "url": "http://framerjs.com/",
        "image": {
            "background-position": "-200 -400",
        },
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
        "comments": false,
        "handoff": true,
        "plugins": false,
        "artboards": true,
        "symbols": false,
        "responsive": true,
        "vector": true,
        "prototyping": true,
        "pricing": {
            "free": false,
            "subscription": "",
            "purchase": "$129"
        }
    }, {
        "name": "Justinmind",
        "url": "http://www.justinmind.com/",
        "image": {
            "background-position": "-400 -700",
        },
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
    }]

}