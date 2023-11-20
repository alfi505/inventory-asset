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
