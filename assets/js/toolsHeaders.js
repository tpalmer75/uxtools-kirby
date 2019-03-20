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
      "notes": "Platforms used to upload components"
    },
    {
      "title": "Programs",
      "notes": "Supported file types"
    },
    {
      "title": "Free",
      "notes": "Can the tool be used for free?"
    },
    {
      "title": "Individual",
      "notes": "Monthly cost for  single user"
    },
    {
      "title": "Team",
      "notes": "Monthly cost for 2+ team members"
    },
    {
      "title": "Symbols",
      "notes": "Can import symbols"
    },
    {
      "title": "Layers",
      "notes": "Can import normal layers"
    },
    {
      "title": "Assets",
      "notes": "Can import generic  assets (like images)"
    },
    {
      "title": "Sharing",
      "notes": "Can share the library"
    },
    {
      "title": "Permissions",
      "notes": "Can restrict access to others"
    },
    {
      "title": "Interface",
      "notes": "How the tool appears in-app"
    },
    {
      "title": "Update",
      "notes": "Can sync changes across documents"
    },
    {
      "title": "Annotate",
      "notes": "Can create notes about components"
    },
    {
      "title": "Style Guide",
      "notes": "Automatically generates  a style guide  of components"
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
      "notes": "Platforms used for creating designs"
    },
    {
      "title": "Cost",
      "notes": "Estimated cost per year"
    },
    {
      "title": "Free",
      "notes": "Free to use without trial"
    },
    // {
    //   "title": "Purchase",
    //   "notes": "One-time cost"
    // },
    {
      "title": "Offline",
      "notes": "Can open and edit files offline"
    },
    {
      "title": "Pen Tool",
      "notes": "Draw vectors and paths"
    },
    {
      "title": "Collaboration",
      "notes": "Simultaneous editing"
    },
    {
      "title": "Comments",
      "notes": "Others can leave comments"
    },
    {
      "title": "Handoff",
      "notes": "Automatic specs for developers"
    },
    {
      "title": "Artboards",
      "notes": "Multiple visible artboards"
    },
    {
      "title": "Symbols",
      "notes": "Document-wide master symbols"
    },
    {
      "title": "Responsive",
      "notes": "Dynamically resizing groups"
    },
    {
      "title": "Prototyping",
      "notes": "Can prototype within the app"
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
      "notes": "Platforms used for  building prototypes"
    },
    {
      "title": "Cost",
      "notes": "Estimated cost per year"
    },
    {
      "title": "Free",
      "show": true,
      "canChange": true,
      "notes": "Has a free version"
    },
    // {
    //   "title": "Purchase",
    //   "notes": "One-time cost"
    // },
    {
      "title": "Design",
      "show": true,
      "canChange": true,
      "notes": "Can create designs from scratch"
    },
    {
      "title": "Import",
      "show": true,
      "canChange": true,
      "notes": "Integrations with other apps"
    },
    {
      "title": "Animations",
      "show": true,
      "canChange": true,
      "notes": "Animate objects & micro-interactions"
    },
    {
      "title": "Transitions",
      "show": true,
      "canChange": true,
      "notes": "Animate between screens"
    },
    {
      "title": "Data",
      "show": true,
      "canChange": true,
      "notes": "Can populate objects from data"
    },
    {
      "title": "Code",
      "show": true,
      "canChange": true,
      "notes": "Requires code to prototype"
    },
    {
      "title": "Inputs",
      "show": true,
      "canChange": true,
      "notes": "Supports dynamic text inputs"
    },
    {
      "title": "Variables",
      "show": true,
      "canChange": true,
      "notes": "Conditional logic and data"
    },
    {
      "title": "Sharing",
      "show": true,
      "canChange": true,
      "notes": "How others can preview the prototype"
    },
    {
      "title": "Handoff",
      "show": true,
      "canChange": true,
      "notes": "Automatic specs for developers"
    },
    {
      "title": "Sensors",
      "show": true,
      "canChange": true,
      "notes": "Access native device sensors"
    },
    {
      "title": "Voice",
      "show": true,
      "canChange": true,
      "notes": "Accept voice as input"
    },
    {
      "title": "Tasks",
      "show": true,
      "canChange": true,
      "notes": "Guided usability testing prompts"
    },
    {
      "title": "Analytics",
      "show": true,
      "canChange": true,
      "notes": "Can track events when testing"
    },
    {
      "title": "Heatmap",
      "show": true,
      "canChange": true,
      "notes": "Generates heatmaps from user testing"
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
      "notes": "Platforms used to  upload designs"
    },
    {
      "title": "Free",
      "show": true,
      "canChange": true,
      "notes": "Has a free version"
    },
    {
      "title": "Cost",
      "notes": "Estimated cost per year"
    },
    // {
    //   "title": "Purchase",
    //   "notes": "One-time cost"
    // },
    {
      "title": "Programs",
      "show": true,
      "canChange": true,
      "notes": "Compatible design programs"
    },
    {
      "title": "Specs",
      "show": true,
      "canChange": true,
      "notes": "App creates design  specifications"
    },
    {
      "title": "Automatic",
      "show": true,
      "canChange": true,
      "notes": "App automatically  generates specs"
    },
    {
      "title": "Assets",
      "show": true,
      "canChange": true,
      "notes": "Export  design assets"
    },
    {
      "title": "Measure",
      "show": true,
      "canChange": true,
      "notes": "Measure  distance and size"
    },
    {
      "title": "Variables",
      "show": true,
      "canChange": true,
      "notes": "Allows custom  CSS variables"
    },
    {
      "title": "Style Guide",
      "show": true,
      "canChange": true,
      "notes": "Auto-generates  style guide"
    },
    {
      "title": "Guides",
      "show": true,
      "canChange": true,
      "notes": "Maintains layout guides  from design apps"
    },
    {
      "title": "Layers",
      "show": false,
      "canChange": true,
      "notes": "App shows layer tree"
    },
    {
      "title": "Comments",
      "show": true,
      "canChange": true,
      "notes": "Viewers can comment  on designs"
    },
    {
      "title": "Revisions",
      "show": false,
      "canChange": true,
      "notes": "Save versions  of files"
    },
    {
      "title": "Sharing",
      "show": true,
      "canChange": true,
      "notes": "How users can  access designs"
    },
    {
      "title": "Integrations",
      "show": true,
      "canChange": true,
      "notes": "Other external apps"
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
      "notes": "Has a free version"
    },
    {
      "title": "Cost",
      "notes": "Estimated cost per year"
    },
    // {
    //   "title": "Purchase",
    //   "notes": "One-time cost"
    // },
    {
      "title": "Playback",
      "notes": "Records user's  actions"
    },
    {
      "title": "Skip",
      "notes": "Can skip inactivity  during playback"
    },
    {
      "title": "Speed",
      "notes": "Fast-forward  & half-speed"
    },
    {
      "title": "Jump Back",
      "notes": "Go back a few seconds  in playback (so useful)"
    },
    {
      "title": "Console",
      "notes": "Records JS console  during playback"
    },
    {
      "title": "Heatmaps",
      "notes": "Generates heatmap  of actions"
    },
    {
      "title": "Location",
      "notes": "Shows visitor's  location"
    },
    {
      "title": "Form Stats",
      "notes": "Analyzes form  drop off & stats"
    },
    {
      "title": "Polls",
      "notes": "Can create  user surveys"
    },
    {
      "title": "Live",
      "notes": "Can watch users  in real-time"
    },
    {
      "title": "Control",
      "notes": "Can remotely control  user's browser"
    },
    {
      "title": "Export",
      "notes": "Format for  downloaded"
    },
    {
      "title": "Last Updated",
      "notes": "The last time I checked on this app"
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
      "notes": "Platform for uploading designs"
    },
    {
      "title": "Cost",
      "notes": "Estimated cost per year"
    },
    // {
    //   "title": "Purchase",
    //   "notes": "One-time cost"
    // },
    {
      "title": "Purchase",
      "notes": "One time cost"
    },
    {
      "title": "Team",
      "notes": "Cheapest monthly cost for teams"
    },
    {
      "title": "Import",
      "notes": "Supported file types"
    },
    {
      "title": "Symbols",
      "notes": "Works with symbols"
    },
    {
      "title": "Documents",
      "notes": "Works with documents"
    },
    {
      "title": "Branching",
      "notes": "Can create branches"
    },
    {
      "title": "Preview",
      "notes": "Shows preview of designs"
    },
    {
      "title": "Compare",
      "notes": "Shows versions side by side"
    },
    {
      "title": "Comments",
      "notes": "Users can comment on designs"
    },
    {
      "title": "Sharing",
      "notes": "How others can view designs"
    },
    {
      "title": "Integrations",
      "notes": "Other external apps"
    }
  ]
}