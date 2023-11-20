"use strict"

var statistics1 = document.getElementById("chart_inventory").getContext('2d');
var inventory = new Chart(statistics1, {
  type: 'line',
  data: {
    labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
    datasets: [{
      label: 'CPU',
      data: [640, 380, 530, 302, 430, 270, 480, 400, 130, 550, 220, 560],
      borderWidth: 5,
      borderColor: '#ff0000',
      backgroundColor: '#ff0000',
      pointBackgroundColor: '#fff',
      pointRadius: 4
    },{
      label: 'Monitor',
      data: [140, 780, 330, 502, 130, 970, 580, 100, 330, 850, 620, 160],
      borderWidth: 5,
      borderColor: '#ff791a',
      backgroundColor: '#ff791a',
      pointBackgroundColor: '#fff',
      pointRadius: 4
    },{
      label: 'Keyboard',
      data: [130, 900, 110, 202, 230, 100, 610, 190, 220, 500, 600, 430],
      borderWidth: 5,
      borderColor: '#ffe41a',
      backgroundColor: '#ffe41a',
      pointBackgroundColor: '#fff',
      pointRadius: 4
    },{
      label: 'Mouse',
      data: [740, 200, 700, 102, 190, 190, 290, 150, 300, 200, 500, 90],
      borderWidth: 5,
      borderColor: '#66ff1a',
      backgroundColor: '#66ff1a',
      pointBackgroundColor: '#fff',
      pointRadius: 4
    },{
      label: 'Speaker',
      data: [300, 180, 730, 102, 430, 370, 300, 120, 170, 520, 410, 110],
      borderWidth: 5,
      borderColor: '#1a47ff',
      backgroundColor: '#1a47ff',
      pointBackgroundColor: '#fff',
      pointRadius: 4
    },{
      label: 'Network',
      data: [300, 480, 150, 802, 210, 620, 220, 430, 190, 500, 320, 600],
      borderWidth: 5,
      borderColor: '#811aff',
      backgroundColor: '#811aff',
      pointBackgroundColor: '#fff',
      pointRadius: 4
    },{
      label: 'Printer',
      data: [120, 280, 830, 402, 330, 170, 680, 300, 230, 750, 120, 860],
      borderWidth: 5,
      borderColor: '#ff1ad5',
      backgroundColor: '#ff1ad5',
      pointBackgroundColor: '#fff',
      pointRadius: 4
    }]
  },
  options: {
    legend: {
      display: false
    },
    // maintainAspectRatio: false,
    scales: {
      yAxes: [{
        gridLines: {
          display: false,
          drawBorder: false,
        },
        ticks: {
          stepSize: 150
        }
      }],
      xAxes: [{
        gridLines: {
          color: '#fbfbfb',
          lineWidth: 2,
          display: false
        }
      }]
    },
  }
});


"use strict"

var statistics2 = document.getElementById("chart_pic").getContext('2d');
var pic = new Chart(statistics2, {
  type: 'line',
  data: {
    labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
    datasets: [{
      label: 'PIC',
      data: [640, 380, 530, 302, 430, 270, 480, 400, 130, 550, 220, 560],
      borderWidth: 5,
      borderColor: '#6777ef',
      backgroundColor: '#6777ef',
      pointBackgroundColor: '#fff',
      pointRadius: 4
    },{
      label: 'No IP',
      data: [140, 780, 330, 502, 130, 970, 580, 100, 330, 850, 620, 160],
      borderWidth: 5,
      borderColor: '#ff0000',
      backgroundColor: '#ff0000',
      pointBackgroundColor: '#fff',
      pointRadius: 4
    }]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        gridLines: {
          display: false,
          drawBorder: false,
        },
        ticks: {
          stepSize: 150
        }
      }],
      xAxes: [{
        gridLines: {
          color: '#fbfbfb',
          lineWidth: 2,
          display: false
        }
      }]
    },
  }
});

