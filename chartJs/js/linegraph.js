$(document).ready(function(){
	$.ajax({
		url :"http://uoc-mydb-instance.ciaqpoqp6i0b.us-east-2.rds.amazonaws.com:3306/JSP/chartJs/salesdatagraph.php",
		type:"GET",
		success :function(data){
			console.log(data);

			var date =[];
			var fse3_sales =[];
			var fse5_sales =[];
			var fse6_sales =[];

			for(var i in data){
				date.push(data[i].Date);
				fse3_sales.push(data[i].FSE3);
				fse5_sales.push(data[i].FSE5);
				fse6_sales.push(data[i].FSE6);
			}

			var chartdata={
				labels:date,
				datasets:[
				{
					label:"FSE3",
					fill: false,
					lineTension: 0.1,
					backgroundColor: "rgba(59,89,152,0.75)",
					borderColor:"rgba(59,89,152,1)",
					pointHoverBackgroundColor:"rgba(59,89,152,1)",
					pointHoverBorderColor:"rgba(59,89,152,1)",
					data:fse3_sales

					
				},
				{
					label:"FSE5",
					fill: false,
					lineTension: 0.1,
					backgroundColor: "rgba(29,202,255,0.75)",
					borderColor:"rgba(29,202,255,1)",
					pointHoverBackgroundColor:"rgba(29,202,255,1)",
					pointHoverBorderColor:"rgba(29,202,255,1)",
					data:fse5_sales

					},
				{
					label:"FSE6",
					fill: false,
					lineTension: 0.1,
					backgroundColor: "rgba(211,72,54,0.75)",
					borderColor:"rgba(211,72,54,1)",
					pointHoverBackgroundColor:"rgba(211,72,54,1)",
					pointHoverBorderColor:"rgba(211,72,54,1)",
					data:fse6_sales

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