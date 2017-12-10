$(document).ready(function(){
	$.ajax({
		url: "http://18.217.208.126/JSP/chartJs/data2.php",
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
						label :'Sold amount',
						backgroundColor: 'rgba(0,128,128,0.75)',
						borderColor: 'rgba(0,128,128,0.75)',
						hoverBackgroundColor:'rgba(0,128,128,1)',
						hoverBoderColor: 'rgba(0,128,128,1)',
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