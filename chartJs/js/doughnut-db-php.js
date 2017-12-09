$(document).ready(function(){
	$.ajax({
		 url: "http://localhost//JSP/chartJs/doughnut.php",
		method:"GET",
		success: function(data) {
			console.log(data);
			var Type=[];
			var Count=[];

			for(var i in data){
				Type.push(data[i].Type);
				Count.push(data[i].Count);
			}

			var chartdata={
				labels: Type,
				datasets : [
					{
						label :'Sales amount',
						backgroundColor: 'rgba(200,200,200,0.75)',
						borderColor: 'rgba(200,200,200,0.75)',
						hoverBackgroundColor:'rgba(200,200,200,1)',
						hoverBoderColor: 'rgba(200,200,200,1)',
						data:Count
					}
				]
			};

			var ctx = $("#mycanvas");

			var bargraph = new Chart(ctx,{
				type:'bar',
				data: chartdata

			});
		},
		error: function(data) {
			console.log(data);
		}
	})
});