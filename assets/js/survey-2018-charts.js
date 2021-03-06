var midColors7 = ["#182f57","#543b73","#92417e","#cc4976","#f5635e","#ff8e3b","#ffc108"];
var midColors6 = ["#182f57","#603d77","#ab437d","#e75669","#ff8443","#ffc108"]
var midColors5 = ["#182f57","#733e7b","#cc4976","#ff764d","#ffc108"]
var midColors4 = ["#182f57","#92417e","#f5635e","#ffc108"]
var midColors3 = ["#182f57","#cc4976","#ffc108"];
var midColors2 = ["#182f57","#ffc108"];
var blue = "#4285F4";
var blueFaded = "rgba(66, 133, 244, 0.3)";
var blueDark = "#1F3E71";


Chart.defaults.global.defaultFontFamily = "'Karla','Helvetica',sans-serif";
Chart.defaults.global.defaultFontColor = "#1F3E71";
Chart.defaults.global.defaultColor = "#1F3E71";
Chart.defaults.global.backgroundColor = blue;
Chart.defaults.global.defaultFontSize = 14;
Chart.defaults.global.elements.line.borderColor = "#1F3E71";
Chart.defaults.global.maintainAspectRatio = false;
// Chart.defaults.global.animation.duration = 0;

var percentageCallback = function(tooltipItem, data) {
var allData = data.datasets[tooltipItem.datasetIndex].data;
var tooltipLabel = data.labels[tooltipItem.index];
var tooltipData = allData[tooltipItem.index];
var total = 0;
for (var i in allData) {
  total += allData[i];
}
var tooltipPercentage = Math.round((tooltipData / total) * 100);
return tooltipLabel + ': ' + tooltipData + ' (' + tooltipPercentage + '%)';
};

function isScrolledIntoView(elem)
  {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemTop <= docViewBottom) && (elemBottom >= docViewTop));
  }

function buildChart(canvasId,chartType,chartData,chartOptions) {
  new Chart(document.getElementById(canvasId), {
    type: chartType,
    data: chartData,
    options: chartOptions
  });
};




var graphs = [
{
  id: "roles-graph",
  hashId: "#roles-graph",
  viewed: false,
  type: 'pie',
  data: {
    labels: ["UX Designer", "Product Designer", "Web Designer", "Graphic Designer", "Developer / Engineer", "Product Manager", "Other"],
    datasets: [{
      backgroundColor: midColors7,
      data: [1009, 897, 291, 167, 130, 76, 206],
      borderColor: "transparent"
    }]
  },
  options: {
    legend: {
      position: 'bottom'
    },
    tooltips: {
      caretSize: 0,
      callbacks: {
        label: percentageCallback
      }
    }
  }
},


{
  id: "career-experience-graph",
  hashId: "#career-experience-graph",
  viewed: false,
  type: 'pie',
  data: {
    labels: ["I'm a student", "< 1 year", "1–2 years", "3–5 years", "6–10 years", "10+ years"],
    datasets: [{
      backgroundColor: midColors6,
      data: [44, 110, 339, 849, 702, 732],
      borderColor: "transparent"
    }]
  },
  options: {
    legend: {
      position: 'bottom'
    },
    tooltips: {
      caretSize: 0,
      callbacks: {
        label: percentageCallback
      }
    }
  }
},

{
  id: "company-size",
  hashId: "#company-size",
  viewed: false,
  type: 'pie',
  data: {
    labels: ["Freelancer", "1–10", "11–100", "101–500", "501–1000", "1000+"],
    datasets: [{
      backgroundColor: midColors6,
      data: [175, 435, 892, 475, 175, 501],
      borderColor: "transparent"
    }]
  },
  options: {
    legend: {
      position: 'bottom'
    },
    tooltips: {
      caretSize: 0,
      callbacks: {
        label: percentageCallback
      }
    }
  }
},

{
  id: "design-team-size",
  hashId: "#design-team-size",
  viewed: false,
  type: 'pie',
  data: {
    labels: ["1 (it's just me", "2–10", "11–20", "21–50", "51–100", "100+"],
    datasets: [{
      backgroundColor: midColors6,
      data: [711, 1589, 194, 136, 45, 35],
      borderColor: "transparent"
    }]
  },
  options: {
    legend: {
      position: 'bottom'
    },
    tooltips: {
      caretSize: 0,
      callbacks: {
        label: percentageCallback
      }
    }
  }
},

{
  id: "platform-graph",
  hashId: "#platform-graph",
  viewed: false,
  type: 'pie',
  data: {
    labels: ["Mac", "Windows", "Linux", "Multiple"],
    datasets: [{
      backgroundColor: midColors4,
      data: [2208, 325, 11, 232],
      borderColor: "transparent"
    }]
  },
  options: {
    legend: {
      position: 'bottom'
    },
    tooltips: {
      caretSize: 0,
      callbacks: {
        label: percentageCallback
      }
    }
  }
},

{
  id: "experience-design-graph",
  hashId: "#experience-design-graph",
  viewed: false,
  type: 'bar',
  data: {
    labels: ["Websites", "Web Apps", "Mobile Apps", "Desktop Apps", "Print Materials", "Other"],
    datasets: [{
      backgroundColor: midColors6[0],
      data: [2022, 1951, 1839, 1046, 652, 211]
    }]
  },
  options: {
    scales: {
      xAxes: [{
        ticks: {
          autoSkip: false
        }
      }]
    },
    legend: {
      display: false
    },
    tooltips: {
      caretSize: 0,
      callbacks: {
        // label: percentageCallback
      }
    }
  }
},

{
  id: "design-team-company-size",
  hashId: "#design-team-company-size",
  viewed: false,
  type: 'bar',
  data: {
    labels: ["1–10 employees", "11–100 employees", "101–500 employees", "501-1000 employees", "1000+ employees"],
    datasets: [{
      type: 'bar',
      label: "1 designer",
      backgroundColor: midColors6[0],
      data: [173, 202, 52, 38, 16],
      borderWidth: 0,
    }, {
      type: 'bar',
      label: '2–10 designers',
      backgroundColor: midColors6[1],
      data: [245, 618.339, 247, 90],
      borderWidth: 0,
    }, {
      type: 'bar',
      label: '11–20 designers',
      backgroundColor: midColors6[2],
      data: [3, 40, 47, 67, 34],
      borderWidth: 0,
    }, {
      type: 'bar',
      label: '21–50 designers',
      backgroundColor: midColors6[3],
      data: [0, 15, 20, 78, 23],
      borderWidth: 0,
    }, {
      type: 'bar',
      label: '51–100 designers',
      backgroundColor: midColors6[4],
      data: [0, 4, 5, 28, 8],
      borderWidth: 0,
    }, {
      type: 'bar',
      label: '100+ designers',
      backgroundColor: midColors6[5],
      data: [1, 0, 0, 34, 0],
      borderWidth: 0,
    }]
  },
  options: {
    scales: {
      xAxes: [{
        scaleLabel: {
          display: true,
          labelString: "Company Size",
          fontStyle: "bold"
        },
        gridLines: {
          color: "rgba(0,0,0,.1)"
        }
      }],
      yAxes: [{
        scaleLabel: {
          display: true,
          labelString: "Number of Responses",
          fontStyle: "bold"
        },
        gridLines: {
          color: "rgba(0,0,0,.1)"
        }
      }]
    },
    legend: {
      display: true,
      position: 'right'
    },
    tooltips: {
      caretSize: 0,
    }
  }
},

{
  id: "brainstorming-graph",
  hashId: "#brainstorming-graph",
  viewed: false,
  type: 'bar',
  data: {
    labels: ["Paper/Whiteboard", "Sketch", "Figma", "Illustrator", "Photoshop", "Adobe XD", "Balsamiq", "Other"],
    datasets: [{
      backgroundColor: blue,
      data: [2423, 1504, 435, 433, 415, 360, 189, 614]
    }]
  },
  options: {
    scales: {
      xAxes: [{
        ticks: {
          autoSkip: false
        }
      }]
    },
    legend: {
      display: false
    },
    tooltips: {
      caretSize: 0,
    }
  }
},

{
  id: "user-flow-graph",
  hashId: "#user-flow-graph",
  viewed: false,
  type: 'bar',
  data: {
    labels: ["Sketch", "None", "Overflow.io", "Draw.io", "Lucidchart", "Whimsical", "Figma", "Mindmeister", "Flowmapp", "Axure", "Omnigraffle", "Other"],
    datasets: [{
      backgroundColor: [blue, blueFaded, blue, blue, blue, blue, blue, blue, blue, blue, blue, blue, blue, blue],
      data: [1341, 585, 324, 292, 181, 107, 102, 89, 84, 71, 52, 554]
    }]
  },
  options: {
    scales: {
      xAxes: [{
        ticks: {
          autoSkip: false
        }
      }]
    },
    legend: {
      display: false
    },
    tooltips: {
      caretSize: 0,
    }
  }
},

{
  id: "wireframing-graph",
  hashId: "#wireframing-graph",
  viewed: false,
  type: 'bar',
  data: {
    labels: ["Sketch", "Figma", "Adobe XD", "Illustrator", "Axure", "Balsamiq", "Invision Studio", "Photoshop", "None", "UX Pin", "Other"],
    datasets: [{
      backgroundColor: [blue, blue, blue, blue, blue, blue, blue, blue, blueFaded, blue, blue],
      data: [1721, 473, 449, 269, 264, 231, 208, 189, 172, 61, 476]
    }]
  },
  options: {
    scales: {
      xAxes: [{
        ticks: {
          autoSkip: false
        }
      }]
    },
    legend: {
      display: false
    },
    tooltips: {
      caretSize: 0,
    }
  }
},

{
  id: "ui-design-graph",
  hashId: "#ui-design-graph",
  viewed: false,
  type: 'bar',
  data: {
    labels: ["Sketch", "Figma", "Photoshop", "Adobe XD", "Adobe Illustrator", "InVision Studio", "FramerX", "Axure", "Affinity Designer", "Framer (Classic)", "Other"],
    datasets: [{
      backgroundColor: blue,
      data: [1953, 583, 581, 495, 492, 191, 101, 78, 55, 52, 174]
    }]
  },
  options: {
    scales: {
      xAxes: [{
        ticks: {
          autoSkip: false
        }
      }]
    },
    legend: {
      display: false
    },
    tooltips: {
      caretSize: 0,
    }
  }
},

{
  id: "ui-design-mac-graph",
  hashId: "#ui-design-mac-graph",
  viewed: false,
  type: 'bar',
  data: {
    labels: ["Sketch", "Figma", "Photoshop", "Illustrator", "Adobe XD", "InVision Studio"],
    datasets: [{
      type: "bar",
      label: "Mac",
      backgroundColor: midColors2[0],
      data: [1918, 484, 418, 383, 364, 177],
      borderWidth: 0,
    }, {
      type: "bar",
      label: "Windows",
      backgroundColor: midColors2[1],
      data: [123, 160, 232, 163, 211, 28],
      borderWidth: 0,
    }]
  },
  options: {
    scales: {
      xAxes: [{
        ticks: {
          autoSkip: false
        }
      }]
    },
    legend: {
      display: true,
      position: 'right'
    },
    tooltips: {
      caretSize: 0,
    }
  }
},

{
  id: "prototyping-graph",
  hashId: "#prototyping-graph",
  viewed: false,
  type: 'bar',
  data: {
    labels: ["InVision (Classic)", "Sketch", "HTML/CSS/JS", "Principle", "Adobe XD", "Figma", "Pencil/Paper", "InVision Studio", "Marvel", "Axure", "FramerX", "Framer (Classic)", "Flinto", "None", "Other"],
    datasets: [{
      backgroundColor: [blue, blue, blue, blue, blue, blue, blue, blue, blue, blue, blue, blue, blue, blueFaded, blue],
      data: [1217, 1014, 534, 528, 503, 413, 371, 294, 291, 235, 177, 142, 159, 113, 274]
    }]
  },
  options: {
    scales: {
      xAxes: [{
        ticks: {
          autoSkip: false
        }
      }]
    },
    legend: {
      display: false
    },
    tooltips: {
      caretSize: 0,
    }
  }
},

{
  id: "handoff-graph",
  hashId: "#handoff-graph",
  viewed: false,
  type: 'bar',
  data: {
    labels: ["Zeplin", "InVision", "None", "HTML/CSS/JS", "Figma", "Adobe XD", "Sketch Measure", "Marvel", "Avocode", "Abstract", "UX Pin", "Other"],
    datasets: [{
      backgroundColor: [blue, blue, blueFaded, blue, blue, blue, blue, blue, blue, blue, blue, blue],
      data: [983, 827, 504, 385, 366, 264, 213, 79, 43, 52, 23, 184]
    }]
  },
  options: {
    scales: {
      xAxes: [{
        ticks: {
          autoSkip: false
        }
      }]
    },
    legend: {
      display: false
    },
    tooltips: {
      caretSize: 0,
    }
  }
},

{
  id: "design-system-graph",
  hashId: "#design-system-graph",
  viewed: false,
  type: 'bar',
  data: {
    labels: ["Sketch", "None", "No Design System", "Figma", "HTML", "Craft", "Abstract", "Brand.ai", "Lingo", "UX Pin", "InVision DSM", "Other"],
    datasets: [{
      backgroundColor: [blue, blueFaded, blueFaded, blue, blue, blue, blue, blue, blue, blue, blue, blue],
      data: [1158, 530, 500, 334, 324, 295, 80, 33, 29, 28, 26, 199]
    }]
  },
  options: {
    scales: {
      xAxes: [{
        ticks: {
          autoSkip: false
        }
      }]
    },
    legend: {
      display: false
    },
    tooltips: {
      caretSize: 0,
    }
  }
},

{
  id: "monitoring-graph",
  hashId: "#monitoring-graph",
  viewed: false,
  type: 'bar',
  data: {
    labels: ["None", "Hotjar", "Fullstory", "Google Analytics", "Mixpanel", "Jaco", "Pendo.io", "Inspectlet", "Other"],
    datasets: [{
      backgroundColor: [blueFaded, blue, blue, blue, blue, blue, blue, blue, blue],
      data: [1775, 508, 145, 31, 15, 11, 11, 10, 178],
    }]
  },
  options: {
    scales: {
      xAxes: [{
        ticks: {
          autoSkip: false
        }
      }]
    },
    legend: {
      display: false
    },
    tooltips: {
      caretSize: 0,
    }
  }
},

{
  id: "file-management-graph",
  hashId: "#file-management-graph",
  viewed: false,
  type: 'bar',
  data: {
    labels: ["Google Drive", "Dropbox", "None", "Github", "Abstract", "Custom Server", "Bitbucket", "OneDrive", "Box", "Figma", "Plant.io", "Other"],
    datasets: [{
      backgroundColor: [blue, blue, blueFaded, blue, blue, blue, blue, blue, blue, blue, blue, blue],
      data: [864, 614, 479, 471, 454, 381, 170, 152, 93, 71, 57, 164]
    }]
  },
  options: {
    scales: {
      xAxes: [{
        ticks: {
          autoSkip: false
        }
      }]
    },
    legend: {
      display: false
    },
    tooltips: {
      caretSize: 0,
    }
  }
},

{
  id: "excited-graph",
  hashId: "#excited-graph",
  viewed: false,
  type: 'bar',
  data: {
    labels: ["Figma", "InVision Studio", "FramerX", "Sketch", "Abstract", "Principle"],
    datasets: [{
      backgroundColor: blue,
      data: [299, 295, 234, 136, 42, 35]
    }]
  },
  options: {
    scales: {
      xAxes: [{
        ticks: {
          autoSkip: false
        }
      }]
    },
    legend: {
      display: false
    },
    tooltips: {
      caretSize: 0,
    }
  }
}
];
$(document).ready(function() {
  for (i=0; i<graphs.length;i++) {
    if (isScrolledIntoView(graphs[i].hashId)) {
        if (!graphs[i].viewed) {
        buildChart(graphs[i].id,graphs[i].type,graphs[i].data,graphs[i].options);
        graphs[i].viewed = true;
      }
    }
  }
});

$(window).scroll(function() {
  for (i=0; i<graphs.length;i++) {
    if (isScrolledIntoView(graphs[i].hashId)) {
        if (!graphs[i].viewed) {
        buildChart(graphs[i].id,graphs[i].type,graphs[i].data,graphs[i].options);
        graphs[i].viewed = true;
      }
    }
  }
});