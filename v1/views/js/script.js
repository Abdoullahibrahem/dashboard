const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item => {
  const li = item.parentElement;

  item.addEventListener('click', function () {
    allSideMenu.forEach(i => {
      i.parentElement.classList.remove('active');
    })
    li.classList.add('active');
  })
});


// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
  sidebar.classList.toggle('hide');
})



const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
  if (window.innerWidth < 576) {
    e.preventDefault();
    searchForm.classList.toggle('show');
    if (searchForm.classList.contains('show')) {
      searchButtonIcon.classList.replace('bx-search', 'bx-x');
    } else {
      searchButtonIcon.classList.replace('bx-x', 'bx-search');
    }
  }
})





if (window.innerWidth < 768) {
  sidebar.classList.add('hide');
} else if (window.innerWidth > 576) {
  searchButtonIcon.classList.replace('bx-x', 'bx-search');
  searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
  if (this.innerWidth > 576) {
    searchButtonIcon.classList.replace('bx-x', 'bx-search');
    searchForm.classList.remove('show');
  }
})


// BAR CHART
var barChartOptions = {
  series: [{
    data: Object.values(chartData) // Use the values from the chartData variable
  }],
  chart: {
    type: 'bar',
    height: 300,
    toolbar: {
      show: false
    },
  },
  colors: [
    "#0B46C4",
    "#7F56D9",
    "#009EF8",
    "#ED0F58",
    "#28C66F",
    "#FEC901"
  ],

  plotOptions: {
    bar: {
      distributed: true,
      borderRadius: 4,
      horizontal: false,
      columnWidth: '40%',
    }
  },
  dataLabels: {
    enabled: false
  },
  legend: {
    show: false
  },
  xaxis: {
    categories: Object.keys(chartData), // Use the keys from the chartData variable
    labels: {
      style: {
        fontSize: '14px',
      }
    }
  },
  yaxis: {
    title: {
      text: "Count"
    }
  }
};

var barChart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
barChart.render();

// AREA CHART
var areaChartOptions = {
  series: [{
    name: '',
    data: [31, 40, 28, 51, 42, 109, 100]
  }, {
    name: '',
    data: [11, 32, 45, 32, 34, 52, 41]
  }],
  chart: {
    height: 350,
    type: 'area',
    toolbar: {
      show: false,
    },
  },
  colors: ["#4f35a1", "#ED0F58"],
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: 'straight'
  },
  labels: ["Launch", "Week1", "Week2", "Week3", "Week4", "Week5", "Week6"],
  markers: {
    size: 0
  },
  yaxis: [
    {
      title: {
        text: '',
      },
    },
    {
      opposite: true,
      title: {
        text: '',
      },
    },
  ],
  tooltip: {
    shared: true,
    intersect: false,
  }
};

var areaChart = new ApexCharts(document.querySelector("#area-chart"), areaChartOptions);
areaChart.render();

// Comparison Chart

var options = {
  series: [{
    data: [44, 55, 41, 64, 22, 43, 21]
  }, {
    data: [53, 32, 33, 52, 13, 44, 32]
  }],
  colors: ["#28c66f", "#28d66f50"],


  chart: {
    type: 'bar',
    height: 430
  },
  plotOptions: {
    bar: {
      horizontal: false,
      dataLabels: {
        position: 'top',
      },
    }
  },
  dataLabels: {
    enabled: true,
    offsetX: -6,
    style: {
      fontSize: '12px',
      colors: ['#fff']


    }
  },
  stroke: {
    show: true,
    width: 1,

    colors: ['#fff']
  },
  tooltip: {
    shared: true,
    intersect: false
  },
  xaxis: {
    categories: [2001, 2002, 2003, 2004, 2005, 2006, 2007],
  },
};

var chart = new ApexCharts(document.querySelector("#comp-chart"), options);
chart.render();

// Pie Chart

var options = {
  series: [66, 55, 41],
  labels: ["Direct", "Affilliate", "Reffal"],
  chart: {
    type: 'donut',
  },
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 200
      },
      legend: {
        position: 'bottom'
      }
    }
  }]
};

var chart = new ApexCharts(document.querySelector("#pie-chart"), options);
chart.render();



// active Users 
var options = {
  series: [{
    name: '',
    data: [44, 55, 57, 56, 61, 58, 63, 60, 66, 44, 55, 57, 56, 61, 58, 63, 60, 66, 44, 55, 57, 56, 61, 58, 63, 60, 66, 78],
  }],
  chart: {
    type: 'bar',
    height: 350
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: '55%',
      endingShape: 'rounded'
    },
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    show: true,
    width: 2,
    colors: ['transparent']
  },
  xaxis: {
    categories: [''],
  },
  yaxis: {
    title: {
      text: ' ()'
    }
  },
  fill: {
    opacity: 1,
    colors: "#7F56D9"
  },

};

var chart = new ApexCharts(document.querySelector("#active-chart"), options);
chart.render();