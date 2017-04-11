<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Chart.js Fun</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js"></script>
</head>
<body>
  <div style="width: 50%;">
    <canvas id="myChart" width="400" height="200"></canvas>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
          datasets: [{
            label: '# of votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)', 
              'rgba(54, 162, 235, 0.2)', 
              'rgba(255, 206, 86, 0.2)', 
              'rgba(75, 192, 192, 0.2)', 
              'rgba(153, 102, 255, 0.2)', 
              'rgba(255, 159, 64, 0.2)'
            ],
            boderColor: [
              'rgba(255,99,132,1)', 
              'rgba(54, 162, 235, 1)', 
              'rgba(255, 206, 86, 1)', 
              'rgba(75, 192, 192, 1)', 
              'rgba(153, 102, 255, 1)', 
              'rgba(255, 159, 64, 1)' 
            ],
            boderWidth: 1
          }]
        },
        options: {
          scales: {
            yAxes:[{
              ticks: {
                beginAtZero:true
              }
            }]
          }
        }
      });
    </script>
  </div>
</body>
</html>