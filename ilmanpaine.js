      function drawChart() {
		var jsonData = $.ajax({
		url: "pressure_h.php",
		dataType: "json",
		async: false
		}).responseText;
		var data = new google.visualization.DataTable(jsonData);
		var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

      	var options = {
		width: 1000, 
		height: 400,
		title: 'Ilmanpaine',
		};
		chart.draw(data, options);
		
		setInterval(function() {
			var jsonData = $.ajax({
				url: "pressure_h.php",
				dataType: "json",
				async: false
			}).responseText;
			data = new google.visualization.DataTable(jsonData);
			chart.draw(data, options);
		}, 10000);

	  }

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
