google.charts.load('current',{packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

var data = google.visualization.arrayToDataTable([
  ['Danh mục', 'Số lượng'],
  ['Áo ấm',55],
  ['Balo kaki',2],
  ['Túi xách',2],
  ['Phụ kiện khách',2],
  ['Giày cao cổ',6],
  ['Giày cổ thấp',8]
  
 
 
]);



var options = {
  title: ''
};

var chart = new google.visualization.BarChart(document.getElementById('myChart'));
chart.draw(data, options);

}