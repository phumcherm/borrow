
  const numChart = document.getElementById('myChart');
  const timeChart = document.getElementById('testChart');
  new Chart(numChart, {
    type: 'polarArea',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
  responsive: true,
    }
  });

  new Chart(timeChart, {
    type: 'bar',
    data: {
      labels: ['ม.ค.', 'ก.พ.', 'ม.ค.', 'เม.ย.', 'พ.ค.', 'ม.ย.','ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.','ธ.ค.'],
      datasets: [{
        label: 'จำนวนการยืม',
        data: [12, 19, 3, 5, 2, 3,12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
    }
  });
