$(document).ready(function() {
    showChart();
  });
  
  async function showChart() {
    let respone = await fetch("chart_data1.php", {
        method: 'GET', // or 'PUT'
        headers: {
            'Content-Type': 'application/json',
        },
  
    })
  
    let body = await respone.json();
    console.log(body)
    gentGraphTem(body)
  }
  
  
  function gentGraphTem(data) {
  
    let count = [];
    let time = [];
  
    for (let i in data) {
        count.push(data[i].COUNT);
        time.push(data[i].br_time);
    }
    let chatdataTem = {
        labels: time,
        datasets: [{
            label: 'ครุภัณฑ์ที่ถูกยืมทั้งหมด',
            backgroudColor: '#49e2ff',
            borderColor: '#46d5f1',
            hoverBackgroundColor: '#CCCCCC',
            hoverBorderColor: '#666666',
            data: count,
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 1
        }]
    };
    let graphTarget = $('#myChart');
    let barGraph = new Chart(graphTarget, {
        type: 'bar',
        data: chatdataTem,
        options: {
            scales: {
                y: {
                    ticks: {
                        // Include a dollar sign in the ticks
                        callback: function(value, index, ticks) {
                            return value + '';
                        }
                    }
                }
            }
        }
  
    })
  }
  let xcount_data = [];
  let ytime_data = [];
  
  async function fitterData() {
    xcount_data = [];
    ytime_data = [];
  
    let star_dataTem = document.getElementById("start").value;
    let end_dataTem = document.getElementById("end").value;
    let dataTime = {
        "datastart": star_dataTem,
        "dataend": end_dataTem
    }
    console.log(dataTime)
   
    $.ajax({
        type: "POST",
        url: "chart_fitter1.php",
        data: dataTime,
        success: function(respone) {
            let respon_json = JSON.parse(respone)
            console.log(respon_json)
  
            for (let i in respon_json) {
                xcount_data.push(respon_json[i].COUNT)
                ytime_data.push(respon_json[i].br_time)
            }
            chart_dataTem()
        }
    });
  }
  
   // Date tem
   async function chart_dataTem() {
    console.log(xcount_data)
    console.log(ytime_data)
    let ChartStatustem = Chart.getChart("myChart");
    if (ChartStatustem != undefined) {
        ChartStatustem.destroy();
    }
  
    let chartdataTem = {
        labels: ytime_data,
        datasets: [{
            label: 'จำนวนครุภัณฑ์ที่ถูกยืม',
            backgroudColor: '#49e2ff',
            borderColor: '#46d5f1',
            hoverBackgroundColor: '#CCCCCC',
            hoverBorderColor: '#666666',
            data: xcount_data,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    };
    let graphTarget = $('#myChart');
    let barGraph = new Chart(graphTarget, {
        type: 'bar',
        data: chartdataTem,
        options: {
            scales: {
                y: {
                    ticks: {
                        // Include a dollar sign in the ticks
                        callback: function(value, index, ticks) {
                            return value + '';
                        }
                    }
                }
            }
        }
  
    })
  }
  
  
  //////////////////////////////////////////////////////
  
  
    $(document).ready(function() {
              totalChart();
          });
  
          async function totalChart() {
              let respone = await fetch("chart_data2.php", {
                  method: 'GET', // or 'PUT'
                  headers: {
                      'Content-Type': 'application/json',
                  },
  
              })
  
              let body = await respone.json();
              console.log(body)
              gentGraphTotal(body)
          }
  
  
          function gentGraphTotal(data) {
  
              let total = [];
              let item = [];
  
              for (let i in data) {
                  total.push(data[i].total);
                  item.push(data[i].detail);
               
              }
              let chatdataTotal= {
                  labels: item,
                  datasets: [{
                      label: 'ครุภัณฑ์ที่ถูกยืมทั้งหมด',
                      backgroudColor: '#49e2ff',
                      borderColor: '#46d5f1',
                      hoverBackgroundColor: '#CCCCCC',
                      hoverBorderColor: '#666666',
                      data: total,
                      backgroundColor: [
                          'rgba(54, 162, 235, 0.2)',
                      ],
                      borderColor: [
                          'rgba(54, 162, 235, 1)',
                      ],
                      borderWidth: 1
                  }]
              };
              let graphTarget = $('#myTest');
              let barGraph = new Chart(graphTarget, {
                  type: 'bar',
                  data: chatdataTotal,
                  options: {
                      scales: {
                          y: {
                              ticks: {
                                  // Include a dollar sign in the ticks
                                  callback: function(value, index, ticks) {
                                      return value + '';
                                  }
                              }
                          }
                      }
                  }
  
              })
          }
    ///////////////////////////////////////////////////////
    
  