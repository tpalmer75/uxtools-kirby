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

new Chart(document.getElementById("roles-graph"), {
  type: 'pie',
  data: {
    labels: ["UX Designer", "Product Designer", "Web Designer", "Graphic Designer", "Developer / Engineer", "Product Manager", "Other"],
    datasets: [
      {
        backgroundColor: midColors7,
        data: [1009,897,291,167,130,76,206],
        borderColor: "transparent"
      }
    ]
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
});

new Chart(document.getElementById("career-experience-graph"), {
  type: 'pie',
  data: {
    labels: ["I'm a student","< 1 year","1–2 years","3–5 years","6–10 years","10+ years"],
    datasets: [
      {
        backgroundColor: midColors6,
        data: [44,110,339,849,702,732],
        borderColor: "transparent"
      }
    ]
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
});

new Chart(document.getElementById("company-size"), {
  type: 'pie',
  data: {
    labels: ["Freelancer","1–10","11–100","101–500","501–1000","1000+"],
    datasets: [
      {
        backgroundColor: midColors6,
        data: [175,435,892,475,175,501],
        borderColor: "transparent"
      }
    ]
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
});

new Chart(document.getElementById("design-team-size"), {
  type: 'pie',
  data: {
    labels: ["1 (it's just me","2–10","11–20","21–50","51–100","100+"],
    datasets: [
      {
        backgroundColor: midColors6,
        data: [711,1589,194,136,45,35],
        borderColor: "transparent"
      }
    ]
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
});

new Chart(document.getElementById("platform-graph"), {
  type: 'pie',
  data: {
    labels: ["Mac","windows","Linux","Multiple"],
    datasets: [
      {
        backgroundColor: midColors4,
        data: [2208,325,11,232],
        borderColor: "transparent"
      }
    ]
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
});

new Chart(document.getElementById("experience-design-graph"), {
  type: 'bar',
  data: {
    labels: ["Websites","Web Apps","Mobile Apps","Desktop Apps","Print Materials", "Other"],
    datasets: [
      {
        backgroundColor: blue,
        data: [2022,1951,1839,1046,652,211]
      }
    ]
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
});

new Chart(document.getElementById("design-team-company-size"), {
  type: 'bar',
  data: {
    labels: ["1–10 employees","11–100 employees","101–500 employees","501-1000 employees","1000+ employees"],
    datasets: [{
      type: 'bar',
      label: "1 designer",
      backgroundColor: midColors6[0],
      data: [173,202,52,38,16],
      borderWidth: 0,
    }, {
      type: 'bar',
      label: '2–10 designers',
      backgroundColor: midColors6[1],
      data: [245,618.339,247,90],
      borderWidth: 0,
    }, {
      type: 'bar',
      label: '11–20 designers',
      backgroundColor: midColors6[2],
      data: [3,40,47,67,34],
      borderWidth: 0,
    }, {
      type: 'bar',
      label: '21–50 designers',
      backgroundColor: midColors6[3],
      data: [0,15,20,78,23],
      borderWidth: 0,
    }, {
      type: 'bar',
      label: '51–100 designers',
      backgroundColor: midColors6[4],
      data: [0,4,5,28,8],
      borderWidth: 0,
    }, {
      type: 'bar',
      label: '100+ designers',
      backgroundColor: midColors6[5],
      data: [1,0,0,34,0],
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
});

new Chart(document.getElementById("brainstorming-graph"), {
  type: 'bar',
  data: {
    labels: ["Paper/Whiteboard","Sketch","Figma","Illustrator","Photoshop","Adobe XD","Balsamiq","Other"],
    datasets: [
      {
        backgroundColor: blue,
        data: [2423,1504,435,433,415,360,189,614]
      }
    ]
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
});

new Chart(document.getElementById("user-flow-graph"), {
  type: 'bar',
  data: {
    labels: ["Sketch","None","Overflow.io","Draw.io","Lucidchart","Whimsical","Figma","Mindmeister","Flowmapp","Axure","Omnigraffle","Other"],
    datasets: [
      {
        backgroundColor: [blue,blueFaded,blue,blue,blue,blue,blue,blue,blue,blue,blue,blue,blue,blue],
        data: [1341,585,324,292,181,107,102,89,84,71,52,554]
      }
    ]
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
});

new Chart(document.getElementById("wireframing-graph"), {
  type: 'bar',
  data: {
    labels: ["Sketch","Figma","Adobe XD","Illustrator","Axure","Balsamiq","Invision Studio","Photoshop","None","UX Pin","Other"],
    datasets: [
      {
        backgroundColor: [blue,blue,blue,blue,blue,blue,blue,blue,blueFaded,blue,blue],
        data: [1721,473,449,269,264,231,208,189,172,61,476]
      }
    ]
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
});

new Chart(document.getElementById("ui-design-graph"), {
  type: 'bar',
  data: {
    labels: ["Sketch","Figma","Photoshop","Adobe XD","Adobe Illustrator","InVision Studio","FramerX","Axure","Affinity Designer","Framer (Classic)","Other"],
    datasets: [
      {
        backgroundColor: blue,
        data: [1953,583,581,495,492,191,101,78,55,52,174]
      }
    ]
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
});

new Chart(document.getElementById("ui-design-mac-graph"), {
  type: 'bar',
  data: {
    labels: ["Sketch","Figma","Photoshop","Illustrator","Adobe XD","InVision Studio"],
    datasets: [
      {
        type: "bar",
        label: "Mac",
        backgroundColor: midColors2[0],
        data: [1918,484,418,383,364,177],
        borderWidth: 0,
      }, {
        type:"bar",
        label: "Windows",
        backgroundColor: midColors2[1],
        data: [123,160,232,163,211,28],
        borderWidth: 0,
      }
    ]
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
});

new Chart(document.getElementById("ui-design-windows-graph"), {
  type: 'bar',
  data: {
    labels: ["Sketch","Figma","Photoshop","Illustrator","Adobe XD","InVision Studio"],
    datasets: [
      {
        backgroundColor: blue,
        data: [123,160,232,163,211,28]
      }
    ]
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
});




