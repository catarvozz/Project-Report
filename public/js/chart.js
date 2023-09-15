const CHART = document.getElementById("lineChart");
console.log(CHART);
let lineChart = new Chart (CHART, {
    type: 'line',
    data:{
        labels: ['10.00', '11.00', '12.00', '13.00', '14.00', '15.00', '16.00', '17.00', '18.00', '19.00'],
        datasets: [
            {
                label: "Visitors",
                fill: false,
                lineTension: 0.1,
                backgroundColor:"#f77c76",
                borderColor:"#f45049",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset:0.0,
                borderJoinStyle:'mitter',
                pointBorderColor:"#f45049",
                pointBackgroundColor:"#ffff",
                pointBorderWidth:1,
                pointHoverRadius:5,
                pointHitRadius:10,
                data: [10, 20, 30, 40, 50, 20, 4, 6, 9, 10],
            }
        ]
    }
});
// var ctx = document.getElementById('myChart').getContext('2d');
// var myChart = new Chart(ctx, {
//     type: 'bar',
//     data: {
//         labels: ['10.00', '11.00', '12.00', '13.00', '14.00', '15.00', '16.00', '17.00', '18.00', '19.00'],
//         datasets: [{
//             C
//             data: [10, 20, 30, 40, 50, 60, 4, 6, 9, 10],
//             backgroundColor: [
//                 'rgba(255, 99, 132, 0.2)',
//                 'rgba(54, 162, 235, 0.2)',
//                 'rgba(255, 206, 86, 0.2)',
//                 'rgba(75, 192, 192, 0.2)',
//                 'rgba(153, 102, 255, 0.2)',
//                 'rgba(255, 159, 64, 0.2)'
//             ],
//             borderColor: [
//                 'rgba(255, 99, 132, 1)',
//                 'rgba(54, 162, 235, 1)',
//                 'rgba(255, 206, 86, 1)',
//                 'rgba(75, 192, 192, 1)',
//                 'rgba(153, 102, 255, 1)',
//                 'rgba(255, 159, 64, 1)'
//             ],
//             borderWidth: 1
//         }]
//     },
//     options: {
//         scales: {
//             y: {
//                 beginAtZero: true
//             }
//         }
//     }
// });