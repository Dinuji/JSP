$(document).ready(function(){
	$.ajax({
		url :"http://18.217.208.126/JSP/chartJs/my_graph.php",
		type:"GET",
		success :function(data){
			console.log(data);

			var date =[];
			//var fseId =[];
			var amount = [];

			for(var i in data){
				date.push(data[i].Date);
				//fseId.push(data[i].FseId);
				amount.push(data[i].Amount);
				
			}

			var chartdata={
				labels:date,
				datasets:[
				{
					label:"Amount",
					fill: false,
					lineTension: 0.1,
					backgroundColor: "rgba(59,89,152,0.75)",
					borderColor:"rgba(59,89,152,1)",
					pointHoverBackgroundColor:"rgba(59,89,152,1)",
					pointHoverBorderColor:"rgba(59,89,152,1)",
					data:amount

					
				}
				

				]
			};
			var ctx=$("#mycanvas");
			var LineGraph = new Chart(ctx,{
				type: 'line',
				data: chartdata
			})
		},
		error :function(data){

		}

	});
});