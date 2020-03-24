  $(document).ready(function () {

    $.ajax({
      url: "http://paperflybd.com/chartdata.php",
      method: "POST", 
      data:
      {

         flagreq: "Daraz"
     },
     success: function (data)
     {
            //alert(flagreq);
            //console.log(data);
            var month = [];
            var totalCount = [];

            for (var i in data) {
                month.push(data[i].month);
                totalCount.push(data[i].totalCount);
            }

            var chartdata = {
                labels: month,
                datasets: [
                {
                    label: 'Total Order',
                    backgroundColor: '#D8BFD8',
                    borderColor: '#D8BFD8',
                    hoverBackgroundColor: '#CCCCCC',
                    hoverBorderColor: '#666666',
                    data: totalCount
                }
                ]
            };
            var options = {
             animation: {
                duration: 1,
                onComplete: function () {
                    var chartInstance = this.chart,
                    ctx = chartInstance.ctx;
                    ctx.textAlign = 'center';
                    ctx.fillStyle = "rgba(0, 0, 0, 1)";
                    ctx.textBaseline = 'bottom';

                    this.data.datasets.forEach(function (dataset, i) {
                        var meta = chartInstance.controller.getDatasetMeta(i);
                        meta.data.forEach(function (bar, index) {
                            var data = dataset.data[index];
                            ctx.fillText(data, bar._model.x, bar._model.y - 5);

                        });
                    });
                }
            },           
            scales: {
                xAxes: [{
                    gridLines: {
                        display:false
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display:false
                    },
                    ticks: {
                    display: false //this will remove only the label
                }  
            }]
        }
    };


    var graphTarget = $("#graphCanvas");

    var barGraph = new Chart(graphTarget, {
        type: 'bar',
        options: options,
        data: chartdata
    });
}
});

//revDaraz
$.ajax({
      url: "http://paperflybd.com/chartdata.php",
      method: "POST", 
      data:
      {

         flagreq: "revDaraz"
     },
     success: function (data)
     {
            //alert(data);
           // console.log(data);
            var month = [];
            var revCount = [];

            for (var i in data) {
                month.push(data[i].month);
                
                 var sum = data[i].revCount;
                 var n = parseFloat(sum).toFixed(2);
                 
                 revCount.push(n);

               
            }

            var chartdata = {
                labels: month,
                datasets: [
                {
                    label: 'Revenue',
                    backgroundColor: '#f1cfc8',
                    borderColor: '#dac1bc ',
                    hoverBackgroundColor: '#b7b0af',
                    hoverBorderColor: '#a39896',
                    data: revCount
                }
                ]
            };
            var options = {

             animation: {
                duration: 1,
                onComplete: function () {
                    var chartInstance = this.chart,
                    ctx = chartInstance.ctx;
                    ctx.textAlign = 'center';
                    ctx.fillStyle = "rgba(0, 0, 0, 1)";
                    ctx.textBaseline = 'bottom';

                    this.data.datasets.forEach(function (dataset, i) {
                        var meta = chartInstance.controller.getDatasetMeta(i);
                        meta.data.forEach(function (bar, index) {
                            var data = dataset.data[index];

                            ctx.fillText(data, bar._model.x, bar._model.y - 5);

                        });
                    });
                }
            },           
            scales: {
                xAxes: [{
                    gridLines: {
                        display:false
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display:false
                    },
                    ticks: {

                    display: false //this will remove only the label
                }  
            }]
        }
    };


    var graphTarget = $("#RevgraphCanvas");

    var barGraph = new Chart(graphTarget, {
        type: 'bar',
        options: options,
        data: chartdata
    });
}
});

//
      
 

//end rev daraz


      $.ajax({
      url: "http://paperflybd.com/chartdata.php",
      method: "POST", 
      data:
      {

         flagreq: "large"
     },
     success: function (data)
     {
            //alert(flagreq);
            //console.log(data);
            var month = [];
            var totalCount = [];

            for (var i in data) {
                month.push(data[i].month);
                totalCount.push(data[i].totalCount);
           




            }

            var chartdata = {
                labels: month,
                datasets: [
                {
                    label: 'Total Order',
                    backgroundColor: 'rgb(238,232,170)',
                    borderColor: 'rgb(238,232,170)',
                    hoverBackgroundColor: '#CCCCCC',
                    hoverBorderColor: '#666666',
                    data: totalCount
                }
                ]
            };
            var options = {
             animation: {
                duration: 1,
                onComplete: function () {
                    var chartInstance = this.chart,
                    ctx = chartInstance.ctx;
                    ctx.textAlign = 'center';
                    ctx.fillStyle = "rgba(0, 0, 0, 1)";
                    ctx.textBaseline = 'bottom';

                    this.data.datasets.forEach(function (dataset, i) {
                        var meta = chartInstance.controller.getDatasetMeta(i);
                        meta.data.forEach(function (bar, index) {
                            var data = dataset.data[index];
                            ctx.fillText(data, bar._model.x, bar._model.y - 5);

                        });
                    });
                }
            },           
            scales: {
                xAxes: [{
                    gridLines: {
                        display:false
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display:false
                    },
                    ticks: {
                    display: false //this will remove only the label
                }  
            }]
        }
    };


    var graphTarget = $("#Largecanvas");

    var barGraph = new Chart(graphTarget, {
        type: 'bar',
        options: options,
        data: chartdata
    });
}
});

//revLarge
     $.ajax({
      url: "http://paperflybd.com/chartdata.php",
      method: "POST", 
      data:
      {

         flagreq: "revLarge"
     },
     success: function (data)
     {
            //alert(flagreq);
            //console.log(data);
            var month = [];
            var revCount = [];

            for (var i in data) {
                month.push(data[i].month);
                
           
                 var sum = data[i].revCount;
                 var n = parseFloat(sum).toFixed(2);
                revCount.push(n);

            }

            var chartdata = {
                labels: month,
                datasets: [
                {
                    label: 'Revenue',
                    backgroundColor: '#cadcdc',
                    borderColor: '#52add5',
                    hoverBackgroundColor: '#e7cef1',
                    hoverBorderColor: '#666666',
                    data: revCount
                }
                ]
            };
            var options = {
             animation: {
                duration: 1,
                onComplete: function () {
                    var chartInstance = this.chart,
                    ctx = chartInstance.ctx;
                    ctx.textAlign = 'center';
                    ctx.fillStyle = "rgba(0, 0, 0, 1)";
                    ctx.textBaseline = 'bottom';

                    this.data.datasets.forEach(function (dataset, i) {
                        var meta = chartInstance.controller.getDatasetMeta(i);
                        meta.data.forEach(function (bar, index) {
                            var data = dataset.data[index];
                            ctx.fillText(data, bar._model.x, bar._model.y - 5);

                        });
                    });
                }
            },           
            scales: {
                xAxes: [{
                    gridLines: {
                        display:false
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display:false
                    },
                    ticks: {
                    display: false //this will remove only the label
                }  
            }]
        }
    };


    var graphTarget = $("#RevLargecanvas");

    var barGraph = new Chart(graphTarget, {
        type: 'bar',
        options: options,
 
        data: chartdata
    });
}
});


    $.ajax({
      url: "http://paperflybd.com/chartdata.php",
      method: "POST", 
      data:
      {

         flagreq: "sm"
     },
     success: function (data)
     {
            //alert(flagreq);
            //console.log(data);
            var month = [];
            var totalCount = [];

            for (var i in data) {
                month.push(data[i].month);
                totalCount.push(data[i].totalCount);
            }

            var chartdata = {
                labels: month,
                datasets: [
                {
                    label: 'Total Order',
                    backgroundColor: '#FFDAB9',
                    borderColor: '#FFDAB9',
                    hoverBackgroundColor: '#CCCCCC',
                    hoverBorderColor: '#666666',
                    data: totalCount
                }
                ]
            };
            var options = {
                animation: {
                    duration: 1,
                    onComplete: function () {
                        var chartInstance = this.chart,
                        ctx = chartInstance.ctx;
                        ctx.textAlign = 'center';
                        ctx.fillStyle = "rgba(0, 0, 0, 1)";
                        ctx.textBaseline = 'bottom';

                        this.data.datasets.forEach(function (dataset, i) {
                            var meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function (bar, index) {
                                var data = dataset.data[index];
                                ctx.fillText(data, bar._model.x, bar._model.y - 5);

                            });
                        });
                    }
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display:false
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            display:false
                        },
                        ticks: {
                    display: false //this will remove only the label
                }    
            }]
        }
    };


    var graphTarget = $("#graphCanvass");

    var barGraph = new Chart(graphTarget, {
        type: 'bar',
        options:options,
        data: chartdata
    });
}
});

//revsm
 $.ajax({
      url: "http://paperflybd.com/chartdata.php",
      method: "POST", 
      data:
      {

         flagreq: "Revsm"
     },
     success: function (data)
     {
            //alert(flagreq);
            //console.log(data);
            var month = [];
            var revCount = [];

            for (var i in data) {
                month.push(data[i].month);
                

                var sum = data[i].revCount;
                 var n = parseFloat(sum).toFixed(2);
                 revCount.push(n);

            }

            var chartdata = {
                labels: month,
                datasets: [
                {
                    label: 'Revenue',
                    backgroundColor: '#d9cadc',
                    borderColor: '#d085df',
                    hoverBackgroundColor: '#aba2ad',
                    hoverBorderColor: '#666666',
                    data: revCount
                }
                ]
            };
            var options = {
                animation: {
                    duration: 1,
                    onComplete: function () {
                        var chartInstance = this.chart,
                        ctx = chartInstance.ctx;
                        ctx.textAlign = 'center';
                        ctx.fillStyle = "rgba(0, 0, 0, 1)";
                        ctx.textBaseline = 'bottom';

                        this.data.datasets.forEach(function (dataset, i) {
                            var meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function (bar, index) {
                                var data = dataset.data[index];
                                ctx.fillText(data, bar._model.x, bar._model.y - 5);

                            });
                        });
                    }
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display:false
                        }
                    }],
                    yAxes: [{
                        gridLines: {

                            display:false
                        },
                        ticks: {
                    display: false //this will remove only the label
                }    
            }]
        }
    };


    var graphTarget = $("#RevgraphCanvass");

    var barGraph = new Chart(graphTarget, {
        type: 'bar',
        options:options,
 
        data: chartdata
    });
}
});

    $.ajax({
      url: "http://paperflybd.com/chartdata.php",
      method: "POST", 
      data:
      {

         flagreq: "Daraz"
     },
     success: function (data)
     {
            //alert(flagreq);
            //console.log(data);
            var month = [];
            var totalCount = [];
            var months = ["demo","January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

            for (var i in data) {
                month1 = months.indexOf(data[i].month);
                var now = new Date();
                var year = now.getFullYear();
                var currentMonth = now.getMonth() +1;
                var daysSinceStartOfMonth = now.getDate();

                $days = days(month1, year);

                month.push(data[i].month);
                if(month1 == currentMonth)
                {
                
                $avg = data[i].totalCount / daysSinceStartOfMonth ;
                //console.log(data[i].totalCount);

                $avg = $avg.toFixed(2)
                totalCount.push($avg);  
                }
                else
                {
 
                $avg = data[i].totalCount / $days ;
                $avg = $avg.toFixed(2)
                totalCount.push($avg);  
                }





            }

            var chartdata = {
                labels: month,
                datasets: [
                {
                    label: 'Average Count',
                    backgroundColor: '#B0E0E6',
                    borderColor: '#B0E0E6',
                    hoverBackgroundColor: '#CCCCCC',
                    hoverBorderColor: '#666666',
                    data: totalCount
                }
                ]
            };
            var options = {
                animation: {
                    duration: 1,
                    onComplete: function () {
                        var chartInstance = this.chart,
                        ctx = chartInstance.ctx;
                        ctx.textAlign = 'center';
                        ctx.fillStyle = "rgba(0, 0, 0, 1)";
                        ctx.textBaseline = 'bottom';

                        this.data.datasets.forEach(function (dataset, i) {
                            var meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function (bar, index) {
                                var data = dataset.data[index];
                                ctx.fillText(data, bar._model.x, bar._model.y - 5);

                            });
                        });
                    }
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display:false
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            display:false
                        },
                        ticks: {
                    display: false //this will remove only the label
                }    
            }]
        }
    };


    var graphTarget = $("#AvgDaraz");

    var barGraph = new Chart(graphTarget, {
        type: 'bar',
        options: options,
        data: chartdata
    });
}
});

    $.ajax({
      url: "http://paperflybd.com/chartdata.php",
      method: "POST", 
      data:
      {

         flagreq: "large"
     },
     success: function (data)
     {
            //alert(flagreq);
            //console.log(data);
            var month = [];
            var totalCount = [];
            var months = ["demo","January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

            for (var i in data) {
                month1 = months.indexOf(data[i].month);
                var now = new Date();
                var year = now.getFullYear();
                var currentMonth = now.getMonth() +1;
                var daysSinceStartOfMonth = now.getDate();

                $days = days(month1, year);

                month.push(data[i].month);
                if(month1 == currentMonth)
                {
                
                $avg = data[i].totalCount / daysSinceStartOfMonth ;
                //console.log(data[i].totalCount);

                $avg = $avg.toFixed(2)
                totalCount.push($avg);  
                }
                else
                {
 
                $avg = data[i].totalCount / $days ;
                $avg = $avg.toFixed(2)
                totalCount.push($avg);  
                }





            }

            var chartdata = {
                labels: month,
                datasets: [
                {
                    label: 'Average Count',
                    backgroundColor: 'rgb(240,230,140)',
                    borderColor: 'rgb(240,230,140)',
                    hoverBackgroundColor: '#CCCCCC',
                    hoverBorderColor: '#666666',
                    data: totalCount
                }
                ]
            };
            var options = {
                animation: {
                    duration: 1,
                    onComplete: function () {
                        var chartInstance = this.chart,
                        ctx = chartInstance.ctx;
                        ctx.textAlign = 'center';
                        ctx.fillStyle = "rgba(0, 0, 0, 1)";
                        ctx.textBaseline = 'bottom';

                        this.data.datasets.forEach(function (dataset, i) {
                            var meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function (bar, index) {
                                var data = dataset.data[index];
                                ctx.fillText(data, bar._model.x, bar._model.y - 5);

                            });
                        });
                    }
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display:false
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            display:false
                        },
                        ticks: {
                    display: false //this will remove only the label
                }    
            }]
        }
    };


    var graphTarget = $("#LargeAvg");

    var barGraph = new Chart(graphTarget, {
        type: 'bar',
        options: options,
        data: chartdata
    });
}
});




    $.ajax({
      url: "http://paperflybd.com/chartdata.php",
      method: "POST", 
      data:
      {

         flagreq: "sm"
     },
     success: function (data)
     {
            //alert(flagreq);
            //console.log(data);
            var month = [];
            var totalCount = [];
            var months = ["demo","January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

            for (var i in data) {
                month1 = months.indexOf(data[i].month);
                var now = new Date();
                var year = now.getFullYear();
                var currentMonth = now.getMonth() +1;
                var daysSinceStartOfMonth = now.getDate();

                $days = days(month1, year);

                month.push(data[i].month);
                if(month1 == currentMonth)
                {
                
                $avg = data[i].totalCount / daysSinceStartOfMonth ;
                //console.log(data[i].totalCount);

                $avg = $avg.toFixed(2)
                totalCount.push($avg);  
                }
                else
                {
 
                $avg = data[i].totalCount / $days ;
                $avg = $avg.toFixed(2)
                totalCount.push($avg);  
                }
               
            }

            var chartdata = {
                labels: month,
                datasets: [
                {
                    label: 'Average Count',
                                //fillColor: 'rgba(220,220,220,0)',
                                backgroundColor: 'rgb(255,228,181',
                                //backgroundColor: 'rgba(255, 10, 13, 0.1)',
                                borderColor: 'rgb(255,228,181',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                
                                data: totalCount
                            },

                            ]
                        };
                        var options = {
                           animation: {
                            duration: 1,
                            onComplete: function () {
                                var chartInstance = this.chart,
                                ctx = chartInstance.ctx;
                                ctx.textAlign = 'center';
                                ctx.fillStyle = "rgba(0, 0, 0, 1)";
                                ctx.textBaseline = 'bottom';

                                this.data.datasets.forEach(function (dataset, i) {
                                    var meta = chartInstance.controller.getDatasetMeta(i);
                                    meta.data.forEach(function (bar, index) {
                                        var data = dataset.data[index];
                                        ctx.fillText(data, bar._model.x, bar._model.y - 5);

                                    });
                                });
                            }
                        },
                        scales: {
                            xAxes: [{
                                gridLines: {
                                    display:false
                                }
                            }],
                            yAxes: [{
                                gridLines: {
                                    display:false
                                },
                                ticks: {
                    display: false //this will remove only the label
                }    
            }]
        }
    };


    var graphTarget = $("#AvgSM");

    var barGraph = new Chart(graphTarget, {

        type: 'bar',
        options: options,
        data: chartdata
    });
    }
    });










});
  var days = function(month,year) {
   return new Date(year, month, 0).getDate();
};






