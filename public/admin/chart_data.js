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
                'rgb(0, 0, 255)',
            ],
            borderColor: [
                'rgb(0, 0, 255)',
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


  async function fitterData() {
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
                'rgb(0, 0, 255)',
            ],
            borderColor: [
                'rgb(0, 0, 255)',
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
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)',
                'rgba(75, 192, 192)',
                'rgba(153, 102, 255)',
                'rgba(255, 159, 64)'
            ],
            borderColor: [
                'rgba(255,99,132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)',
                'rgba(75, 192, 192)',
                'rgba(153, 102, 255)',
                'rgba(255, 159, 64)'
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
  
  
  ///////////////////////Chart Item///////////////////////////////
  
  
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
                  total.push(data[i].time);
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
                          'rgb(0, 0, 255)',
                      ],
                      borderColor: [
                          'rgb(0, 0, 255)',
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
          let xtotal_data = [];
  let yitem_data = [];
  
  async function fitterItem() {
    xtotal_data = [];
    yitem_data = [];
  
    let star_dataItem = document.getElementById("start_item").value;
    let end_dataItem = document.getElementById("end_item").value;
    let dataTotal = {
        "datastart": star_dataItem,
        "endstart": end_dataItem
    }
    console.log(dataTotal)
   
    $.ajax({
        type: "POST",
        url: "chart_fitter2.php",
        data: dataTotal,
        success: function(respone) {
            let respon_json = JSON.parse(respone)
            console.log(respon_json)
  
            for (let i in respon_json) {
                xtotal_data.push(respon_json[i].total)
                yitem_data.push(respon_json[i].detail)
            }
            fitterItem()
        }
    });
  }
  
   // Dateitem
   async function fitterItem() {
    console.log(xtotal_data)
    console.log(yitem_data)
    let ChartStatustem = Chart.getChart("myTest");
    if (ChartStatustem != undefined) {
        ChartStatustem.destroy();
    }
  
    let chartdataItem = {
        labels: yitem_data,
        datasets: [{
            label: 'จำนวนครุภัณฑ์ที่ถูกยืม',
            backgroudColor: '#49e2ff',
            borderColor: '#46d5f1',
            hoverBackgroundColor: '#CCCCCC',
            hoverBorderColor: '#666666',
            data: xtotal_data,
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)',
                'rgba(75, 192, 192)',
                'rgba(153, 102, 255)',
                'rgba(255, 159, 64)'
            ],
            borderColor: [
                'rgba(255,99,132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)',
                'rgba(75, 192, 192)',
                'rgba(153, 102, 255)',
                'rgba(255, 159, 64)'
            ],
            borderWidth: 1
        }]
    };
    let graphTarget = $('#myTest');
    let barGraph = new Chart(graphTarget, {
        type: 'bar',
        data: chartdataItem,
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

  