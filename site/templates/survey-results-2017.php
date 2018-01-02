<?php snippet('header') ?>
<div class="survey-2017">
  <header class="survey-header">
    <h4><?= $page->subtitle()->html() ?></h4>
    <div class="spacer"></div>
    <h1><?= $page->title()->html() ?></h1>
  </header>

  <section class="blog-post">

      <article class="introduction">
        <?= $page->introduction()->kirbytext() ?>
      </article>

      <article class="blog-content">
        <?= $page->text()->kirbytext() ?>
      </article>


    <div class="social-sharing">
      <button class="white">
        <?= (new Asset("assets/images/icons/twitter.svg"))->content() ?>
        <a href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode($page->url()); ?>%20<?php echo ('via @uxtoolsco')?>" target="blank" title="Tweet this">Share on Twitter</a>
      </button>

      <button class="white">
        <?= (new Asset("assets/images/icons/facebook-box.svg"))->content() ?>
        <a href="http://www.facebook.com/sharer.php?u=<?php echo rawurlencode ($page->url()); ?>" target="blank" title="Share on Facebook">Share on Facebook</a>
        </button>
    </div>
  </section>
</div>

<?php snippet('signup-form') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
<script>
  Chart.defaults.global.defaultFontFamily = "'Karla','Helvetica',sans-serif";
  Chart.defaults.global.maintainAspectRatio = false;
  Chart.defaults.global.animation.duration = 0;

  var colors = ["#4285F4","#FFC108","#F8588B","#66BB66","#1F3E71","#A5A5A5"];

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

  new Chart(document.getElementById("demographic-graph-1"), {
      type: 'bar',
      data: {
          labels: ["US", "Germany", "UK", "India", "Canada", "France", "Australia", "Brazil", "Netherlands", "Spain", "Italy", "Austria", "Poland","Other"],
          datasets: [{
              data: [499, 99, 84, 69, 65, 55, 37, 31, 30, 28, 22, 22, 20,444],
              backgroundColor: colors[0],
              borderWidth: 0
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
      },
  });
  new Chart(document.getElementById("demographic-graph-2"), {
    type: 'doughnut',
    data: {
      labels: ["US", "Non-US"],
      datasets: [
        {
          backgroundColor: colors,
          data: [499,1006]
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
  new Chart(document.getElementById("demographic-graph-3"), {
    type: 'doughnut',
    data: {
      labels: ["UX Designer", "Product Designer", "Web Designer", "Graphic Designer", "Dev/Engineer", "Other"],
      datasets: [
        {
          // label: "Respondents",
          backgroundColor: colors,
          data: [615,529,314,232,86,193]
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
  new Chart(document.getElementById("demographic-graph-4"), {
    type: 'doughnut',
    data: {
      labels: ["< 1 year", "1–2 years", "3–5 years", "5–10 years", "10+ years"],
      datasets: [
        {
          backgroundColor: colors,
          data: [93,298,579,510,481]
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
  new Chart(document.getElementById("demographic-graph-5"), {
    type: 'doughnut',
    data: {
      labels: ["Mac","Windows","Linux","Multiple"],
      datasets: [
        {
          // label: "Respondents",
          backgroundColor: colors,
          data: [1663, 283, 8, 13]
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
  new Chart(document.getElementById("demographic-graph-6"), {
    type: 'doughnut',
    data: {
      labels: ["1–10","11–100","101–500","501–1000","1000+","Freelancer"],
      datasets: [
        {
          // label: "Respondents",
          backgroundColor: colors,
          data: [1287,292,36,7,9,315]
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
  new Chart(document.getElementById("brainstorming-graph-1"), {
    type: 'bar',
    data: {
      labels: ["Pencil/Paper","Sketch","Illustrator","Photoshop","Adobe XD", "Figma","Balsamiq","Axure","Other"],
      datasets: [
        {
          backgroundColor: colors[0],
          data: [1793, 884, 305, 277, 146, 51, 14,12,1979]
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
          label: percentageCallback
        }
      }
    }
  });
  new Chart(document.getElementById("wireframing-graph-1"), {
    type: 'bar',
    data: {
      labels: ["Sketch","Illustrator","HTML/CSS","Balsamiq","Axure","Figma","Adobe XD","Omnigraffle","Pencil/Paper","Other"],
      datasets: [
        {
          // label: "Respondents",
          backgroundColor: colors[1],
          data: [1285,319,251,203,101,78,78,66,63,228]
        }
      ]
    },
    options: {
      scales: {  
        xAxes: [{
          ticks: {
            autoSkip: false
          }
        }],
      },
      legend: {
            display: false
          },
      tooltips: {
        caretSize: 0,
        callbacks: {
          label: percentageCallback
        }
      }
    }
  });
  new Chart(document.getElementById("interface-graph-1"), {
    type: 'bar',
    data: {
      labels: ["Sketch","Photoshop","Illustrator","Adobe XD","Figma","Framer","Axure","Affinity Designer", "Other"],
      datasets: [
        {
          backgroundColor: colors[2],
          data: [1409,530,388,277,214,103,96,23,87]
        }
      ]
    },
    options: {
      scales: {  
        xAxes: [{
          ticks: {
            autoSkip: false
          }
        }],
      },
      legend: {
            display: false
          },
      tooltips: {
        caretSize: 0,
        callbacks: {
          label: percentageCallback
        }
      }
    }
  });
  new Chart(document.getElementById("interface-graph-2"), {
    type: 'bar',
    data: {
      labels: ["Sketch","Photoshop","Illustrator","Adobe XD","Figma"],
      datasets: [
        {
          backgroundColor: colors[2],
          data: [1369,375,284,198,151]
        }
      ]
    },
    options: {
      scales: {  
        xAxes: [{
          ticks: {
            autoSkip: false
          }
        }],
      },
      legend: {
            display: false
          },
      tooltips: {
        caretSize: 0,
        callbacks: {
          label: percentageCallback
        }
      }
    }
  });
  new Chart(document.getElementById("interface-graph-3"), {
    type: 'bar',
    data: {
      labels: ["Sketch","Photoshop","Illustrator","Adobe XD","Figma"],
      datasets: [
        {
          backgroundColor: colors[2],
          data: [26,146,100,78,51]
        }
      ]
    },
    options: {
      scales: {  
        xAxes: [{
          ticks: {
            autoSkip: false
          }
        }],
      },
      legend: {
            display: false
          },
      tooltips: {
        caretSize: 0,
        callbacks: {
          label: percentageCallback
        }
      }
    }
  });
  new Chart(document.getElementById("prototyping-graph-1"), {
    type: 'bar',
    data: {
      labels: ["InVision","HTML/CSS/JS","Principle","Adobe XD","Marvel","Framer","Axure","Figma","Flinto","Webflow","Proto.io","UX Pin","Origami","Atomic.io","Other"],
      datasets: [
        {
          backgroundColor: colors[3],
          data: [1193,509,412,292,250,228,203,144,85,65,56,43,41,39,143]
        }
      ]
    },
    options: {
      scales: {  
        xAxes: [{
          ticks: {
            autoSkip: false
          }
        }],
      },
      legend: {
        display: false
      },
      tooltips: {
        caretSize: 0,
        callbacks: {
          label: percentageCallback
        }
      }
    }
  });
  new Chart(document.getElementById("handoff-graph-1"), {
    type: 'bar',
    data: {
      labels: ["InVision","Zeplin","None / Blank","Adobe XD","Sketch Measure","Figma","Marvel","Avocode","UX Pin","Justinmind","Other"],
      datasets: [
        {
          // label: "Respondents",
          backgroundColor: colors[4],
          data: [721,602,520,157,152,127,75,30,14,10,136]
        }
      ]
    },
    options: {
      scales: {  
        xAxes: [{
          ticks: {
            autoSkip: false
          }
        }],
      },
      legend: {
        display: false
      },
      tooltips: {
        caretSize: 0,
        callbacks: {
          label: percentageCallback
        }
      }
    }
  });
  new Chart(document.getElementById("design-system-graph-1"), {
    type: 'bar',
    data: {
      labels: ["Sketch Libraries","None / Blank","Craft","Figma","Brand.ai","Lingo","UX Pin", "Other"],
      datasets: [
        {
          // label: "Respondents",
          backgroundColor: colors[0],
          data: [861,585,321,123,49,45,23,50]
        }
      ]
    },
    options: {
      scales: {  
        xAxes: [{
          ticks: {
            autoSkip: false
          }
        }],
      },
      legend: {
            display: false
          },
      tooltips: {
        caretSize: 0,
        callbacks: {
          label: percentageCallback
        }
      }
    }
  });
  new Chart(document.getElementById("file-management-graph-1"), {
    type: 'bar',
    data: {
      labels: ["Google Drive","Dropbox","Github","None / Blank", 
      "Abstract App","Plant.io","Bitbucket","Box","Figma","OneDrive","Gitlab","Custom / Server","Other"],
      datasets: [
        {
          // label: "Respondents",
          backgroundColor: colors[1],
          data: [778,705,398,355,185,33,29,27,22,21,17,12,167]
        }
      ]
    },
    options: {
      scales: {  
        xAxes: [{
          ticks: {
            autoSkip: false
          }
        }],
      },
      legend: {
            display: false
          },
      tooltips: {
        caretSize: 0,
        callbacks: {
          label: percentageCallback
        }
      }
    }
  });
  
  
  new Chart(document.getElementById("monitoring-graph-1"), {
    type: 'bar',
    data: {
      labels: ["None / Blank","Hotjar","Fullstory","Google Analytics","Jaco","Pendo","Wisdom","Other"],
      datasets: [
        {
          // label: "Respondents",
          backgroundColor: colors[2],
          data: [1460,319,122,21,8,8,7,162]
        }
      ]
    },
    options: {
      scales: {  
        xAxes: [{
          ticks: {
            autoSkip: false
          }
        }],
      },
      legend: {
        display: false
      },
      tooltips: {
        caretSize: 0,
        callbacks: {
          label: percentageCallback
        }
      }
    }
  });
  new Chart(document.getElementById("exciting-graph-1"), {
    type: 'bar',
    data: {
      labels: ["InVision Studio","Framer","Sketch","Figma","Adobe XD","HTML/CSS/JS","Principle","Other"],
      datasets: [
        {
          // label: "Respondents",
          backgroundColor: colors[3],
          data: [486,195,73,71,65,63,33,261]
        }
      ]
    },
    options: {
      scales: {  
        xAxes: [{
          ticks: {
            autoSkip: false
          }
        }],
      },
      legend: {
        display: false
      },
      tooltips: {
        caretSize: 0,
        callbacks: {
          label: percentageCallback
        }
      }
    }
  });
</script>

<?php snippet('footer') ?>