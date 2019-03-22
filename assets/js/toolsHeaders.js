const toolsHeaders = {
  "designSystems": [
    {
      "title": "",
      "notes": ""
    },
    {
      "title": "Name",
      "notes": "Name of app",
      "sortable": true,
      "sortPath": "name",
      "sortDir": "asc"
    },
    {
      "title": "Usage",
      "notes": "Based on the 2018 Design Tools Survey",
      "sortable": true,
      "sortPath": "designSystems.surveyRaw2018",
      "sortDir": "desc"
    },
    {
      "title": "Platform",
      "notes": "Which platforms can import components?"
    },
    {
      "title": "Programs",
      "notes": "Which file types are supported?"
    },
    {
      "title": "Free",
      "notes": "Can the tool be used for free?"
    },
    {
      "title": "Individual",
      "notes": "Cost for single user?"
    },
    {
      "title": "Team",
      "notes": "Cost for 2+ team members?"
    },
    {
      "title": "Symbols",
      "notes": "Can import symbols?"
    },
    {
      "title": "Layers",
      "notes": "Can import normal layers?"
    },
    {
      "title": "Assets",
      "notes": "Can import generic assets (like images)?"
    },
    {
      "title": "Sharing",
      "notes": "Can the library be shared?"
    },
    {
      "title": "Permissions",
      "notes": "Can access be restricted?"
    },
    {
      "title": "Interface",
      "notes": "Which type of interface?"
    },
    {
      "title": "Update",
      "notes": "Can sync changes across documents?"
    },
    {
      "title": "Annotate",
      "notes": "Include descriptions about components?"
    },
    {
      "title": "Style Guide",
      "notes": "Can automatically generate a style guide?"
    }
  ],
  "design": [
    {
      "title": "",
      "notes": ""
    },
    {
      "title": "Name",
      "notes": "Name of app",
      "sortable": true,
      "sortPath": "name",
      "sortDir": "asc"
    },
    {
      "title": "Usage",
      "notes": "Based on the 2018 Design Tools Survey",
      "sortable": true,
      "sortPath": "design.surveyRaw2018",
      "sortDir": "desc"
    },
    {
      "title": "Platform",
      "notes": "Which platforms can create designs?"
    },
    {
      "title": "Cost",
      "notes": "Estimated cost per year?"
    },
    {
      "title": "Free",
      "notes": "Free to use without trial?"
    },
    // {
    //   "title": "Purchase",
    //   "notes": "One-time cost"
    // },
    {
      "title": "Offline",
      "notes": "Can open and edit files offline?"
    },
    {
      "title": "Pen Tool",
      "notes": "Can draw vectors and paths?"
    },
    {
      "title": "Collaboration",
      "notes": "Supports simultaneous editing?"
    },
    {
      "title": "Comments",
      "notes": "Others can leave comments?"
    },
    {
      "title": "Handoff",
      "notes": "Can create automatic specs for developers?"
    },
    {
      "title": "Artboards",
      "notes": "Can show multiple artboards at once?"
    },
    {
      "title": "Symbols",
      "notes": "Supports document-wide master symbols?"
    },
    {
      "title": "Responsive",
      "notes": "Can resize groups dynamically?"
    },
    {
      "title": "Prototyping",
      "notes": "Can prototype within the app?"
    }
  ],
  "prototyping": [
    {
      "title": "",
      "show": true,
      "canChange": false,
      "notes": ""
    },
    {
      "title": "Name",
      "notes": "Name of app",
      "sortable": true,
      "sortPath": "name",
      "sortDir": "asc"
    },
    {
      "title": "Usage",
      "notes": "Based on the 2018 Design Tools Survey",
      "sortable": true,
      "sortPath": "prototyping.surveyRaw2018",
      "sortDir": "desc"
    },
    {
      "title": "Platform",
      "show": true,
      "canChange": true,
      "notes": "Which platforms can create prototypes?"
    },
    {
      "title": "Cost",
      "notes": "Estimated cost per year?"
    },
    {
      "title": "Free",
      "show": true,
      "canChange": true,
      "notes": "Can be used for free without trial?"
    },
    // {
    //   "title": "Purchase",
    //   "notes": "One-time cost"
    // },
    {
      "title": "Design",
      "show": true,
      "canChange": true,
      "notes": "Can create designs from scratch?"
    },
    {
      "title": "Import",
      "show": true,
      "canChange": true,
      "notes": "Integrations with other apps?"
    },
    {
      "title": "Animations",
      "show": true,
      "canChange": true,
      "notes": "Can animate objects & micro-interactions?"
    },
    {
      "title": "Transitions",
      "show": true,
      "canChange": true,
      "notes": "Can animate between screens?"
    },
    {
      "title": "Data",
      "show": true,
      "canChange": true,
      "notes": "Can populate objects from data?"
    },
    {
      "title": "Code",
      "show": true,
      "canChange": true,
      "notes": "Requires code to prototype?"
    },
    {
      "title": "Inputs",
      "show": true,
      "canChange": true,
      "notes": "Supports dynamic text inputs?"
    },
    {
      "title": "Variables",
      "show": true,
      "canChange": true,
      "notes": "Supports conditional logic and data?"
    },
    {
      "title": "Sharing",
      "show": true,
      "canChange": true,
      "notes": "How others can view the prototype?"
    },
    {
      "title": "Handoff",
      "show": true,
      "canChange": true,
      "notes": "Can create specs for developers?"
    },
    {
      "title": "Sensors",
      "show": true,
      "canChange": true,
      "notes": "Supports native device sensors?"
    },
    {
      "title": "Voice",
      "show": true,
      "canChange": true,
      "notes": "Can use voice as input?"
    },
    {
      "title": "Tasks",
      "show": true,
      "canChange": true,
      "notes": "Supports guided usability testing prompts?"
    },
    {
      "title": "Analytics",
      "show": true,
      "canChange": true,
      "notes": "Can track events when testing?"
    },
    {
      "title": "Heatmap",
      "show": true,
      "canChange": true,
      "notes": "Can generates heatmaps from user testing?"
    }
  ],
  "handoff": [
    {
      "title": "",
      "show": true,
      "canChange": false,
      "notes": ""
    },
    {
      "title": "Name",
      "notes": "Name of app",
      "sortable": true,
      "sortPath": "name",
      "sortDir": "asc"
    },
    {
      "title": "Usage",
      "notes": "Based on the 2018 Design Tools Survey",
      "sortable": true,
      "sortPath": "handoff.surveyRaw2018",
      "sortDir": "desc"
    },
    {
      "title": "Platform",
      "show": true,
      "canChange": true,
      "notes": "Which platforms can upload designs?"
    },
    {
      "title": "Free",
      "show": true,
      "canChange": true,
      "notes": "Can be used for free without trial?"
    },
    {
      "title": "Cost",
      "notes": "Estimated cost per year?"
    },
    // {
    //   "title": "Purchase",
    //   "notes": "One-time cost"
    // },
    {
      "title": "Programs",
      "show": true,
      "canChange": true,
      "notes": "Compatible design programs?"
    },
    {
      "title": "Specs",
      "show": true,
      "canChange": true,
      "notes": "Can create design specs?"
    },
    {
      "title": "Automatic",
      "show": true,
      "canChange": true,
      "notes": "Can automatically generates specs?"
    },
    {
      "title": "Assets",
      "show": true,
      "canChange": true,
      "notes": "Can export design assets?"
    },
    {
      "title": "Measure",
      "show": true,
      "canChange": true,
      "notes": "Can measure distance and size?"
    },
    {
      "title": "Variables",
      "show": true,
      "canChange": true,
      "notes": "Supports custom CSS variables?"
    },
    {
      "title": "Style Guide",
      "show": true,
      "canChange": true,
      "notes": "Can automatically generate style guide"
    },
    {
      "title": "Guides",
      "show": true,
      "canChange": true,
      "notes": "Can display layout guides from design apps?"
    },
    {
      "title": "Layers",
      "show": false,
      "canChange": true,
      "notes": "Can show layer tree?"
    },
    {
      "title": "Comments",
      "show": true,
      "canChange": true,
      "notes": "Other can leave comments?"
    },
    {
      "title": "Revisions",
      "show": false,
      "canChange": true,
      "notes": "Can save versions of files?"
    },
    {
      "title": "Sharing",
      "show": true,
      "canChange": true,
      "notes": "How others can access designs?"
    },
    {
      "title": "Integrations",
      "show": true,
      "canChange": true,
      "notes": "Other external apps?"
    }
  ],
  "monitoring": [
    {
      "title": "",
      "notes": ""
    },
    {
      "title": "Name",
      "notes": "Name of app",
      "sortable": true,
      "sortPath": "name",
      "sortDir": "asc"
    },
    {
      "title": "Usage",
      "notes": "Based on the 2018 Design Tools Survey",
      "sortable": true,
      "sortPath": "monitoring.surveyRaw2018",
      "sortDir": "desc"
    },
    {
      "title": "Free",
      "notes": "Can be used for free without trial?"
    },
    {
      "title": "Cost",
      "notes": "Estimated cost per year?"
    },
    // {
    //   "title": "Purchase",
    //   "notes": "One-time cost"
    // },
    {
      "title": "Playback",
      "notes": "Can record user actions?"
    },
    {
      "title": "Skip",
      "notes": "Can skip inactivity during playback?"
    },
    {
      "title": "Speed",
      "notes": "Supports fast-forward & half-speed?"
    },
    {
      "title": "Jump Back",
      "notes": "Can rewind few seconds in playback?"
    },
    {
      "title": "Console",
      "notes": "Can records JS console during playback?"
    },
    {
      "title": "Heatmaps",
      "notes": "Can generate heatmap of actions?"
    },
    {
      "title": "Location",
      "notes": "Can show visitor location?"
    },
    {
      "title": "Form Stats",
      "notes": "Can analyze form drop-off and stats?"
    },
    {
      "title": "Polls",
      "notes": "Can create user surveys?"
    },
    {
      "title": "Live",
      "notes": "Can watch users in real-time?"
    },
    {
      "title": "Control",
      "notes": "Can remotely control user's browser?"
    },
    {
      "title": "Export",
      "notes": "Supported format for download?"
    }
  ],
  "versioning": [
    {
      "title": "",
      "notes": ""
    },
    {
      "title": "Name",
      "notes": "Name of app",
      "sortable": true,
      "sortPath": "name",
      "sortDir": "asc"
    },
    {
      "title": "Usage",
      "notes": "Based on the 2018 Design Tools Survey",
      "sortable": true,
      "sortPath": "versioning.surveyRaw2018",
      "sortDir": "desc"
    },
    {
      "title": "Platform",
      "notes": "Which platforms can upload designs?"
    },
    {
      "title": "Cost",
      "notes": "Estimated cost per year?"
    },
    // {
    //   "title": "Purchase",
    //   "notes": "One-time cost"
    // },
    // {
    //   "title": "Purchase",
    //   "notes": "One time cost"
    // },
    // {
    //   "title": "Team",
    //   "notes": "Cheapest monthly cost for teams?"
    // },
    {
      "title": "Import",
      "notes": "Supported file types?"
    },
    {
      "title": "Symbols",
      "notes": "Can version individual symbols?"
    },
    {
      "title": "Documents",
      "notes": "Works with documents?"
    },
    {
      "title": "Branching",
      "notes": "Can create branches?"
    },
    {
      "title": "Preview",
      "notes": "Can show visual preview of designs?"
    },
    {
      "title": "Compare",
      "notes": "Can show versions side-by-side?"
    },
    {
      "title": "Comments",
      "notes": "Others can leave comments?"
    },
    {
      "title": "Sharing",
      "notes": "How others can view designs?"
    },
    {
      "title": "Integrations",
      "notes": "Other external apps?"
    }
  ]
}