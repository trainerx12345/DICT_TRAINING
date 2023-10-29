<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Pie Chart Data
  var pieChartCanvas = document.getElementById('pieChart').getContext('2d');
  var pieChartData = {
    labels: ['March', 'April', 'May', 'June', 'July'],
    datasets: [{
      data: [70, 30, 45, 20, 50],
      backgroundColor: ['#FF5733', '#76659b', '#900C3F', '#458c82', '#cac34b']
    }]
  };
  new Chart(pieChartCanvas, {
    type: 'pie',
    data: pieChartData
  });

  // Line Chart Data
  var lineChartCanvas = document.getElementById('lineChart').getContext('2d');
  var lineChartData = {
    labels: ['March', 'April', 'May', 'June', 'July'],
    datasets: [{
      label: 'Progress for the months of March to July',
      data: [70, 30, 45, 20, 50],
      borderColor: '#007BFF',
      fill: false
    }]
  };
  new Chart(lineChartCanvas, {
    type: 'line',
    data: lineChartData
  });
</script>
<!-- Bootstrap JavaScript Libraries -->
<script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js"
  integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
  integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<!-- Core theme JS-->
<script src="assets/js/scripts.js"></script>

</html>