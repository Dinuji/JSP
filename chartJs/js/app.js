$(document).ready(function(){
	$.ajax({
		url: "http://ec2-18-217-208-126.us-east-2.compute.amazonaws.com/JSP/chartJs/data.php",
		method:"GET",
		success: function(data) {
			console.log(data);
			var FseId=[];
			var Count=[];

			for(var i in data){
				FseId.push(data[i].Id);
				Count.push(data[i].Count);
			}

			var chartdata={
				labels: FseId,
				datasets : [
					{
						label :'Sales amount',
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