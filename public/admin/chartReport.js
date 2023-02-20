
const numChart = document.getElementById('myChart');
const timeChart = document.getElementById('testChart');
new Chart(numChart, {
  type: 'line',
  data: {
    labels: ['02/02/2565', '05/02/2565', '09/02/2565', '11/02/2565', '12/02/2565', '18/02/2565','19/02/2565','20/02/2565'],
    datasets: [{
      label: 'จำนวนการยืม',
      data: [12, 19, 3, 5, 2, 3,9,10],
      borderWidth: 1
    }]
  },
  options: {
responsive: true,
  }
});

// Chart
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

// ChartYeah

const monthSelect = document.getElementById("month");
const yearInput = document.getElementById("year");

monthSelect.addEventListener("change", updateChart);
yearInput.addEventListener("input", updateChart);

function updateChart() {
  const selectedMonth = monthSelect.value;
  const selectedYear = yearInput.value;

  const filteredData = {
    labels: [],
    datasets: [
      {
        label: "Sales",
        data: [],
        backgroundColor: "rgba(255, 99, 132, 0.2)",
        borderColor: "rgba(255, 99, 132, 1)",
        borderWidth: 1,
      },
    ],
  };

  for (let i = 0; i < data.labels.length; i++) {
    const labelParts = data.labels[i].split(" ");
    const month = labelParts[0];
    const year = labelParts[1];

    if (month === selectedMonth && year === selectedYear) {
      filteredData.labels.push(data.labels[i]);
      filteredData.datasets[0].data.push(data.datasets[0].data[i]);
    }
  }

  chart.data = filteredData;
  chart.update();
}