//Chart.defaults.fontSize = 7;
var ctx = document.getElementById('myChart');
var Usuarios = [10, 2 ,3 , 4, 5, 6, 7, 9, 9, 10];
const Servico = ['Cardiologia', 'Dermatologia', 'Oncologia', 'Pediatria', 
'Geriatria', 'Oftalmologista', 'Ortopedia', 'Ginecologia' , 'Obstetricía', 'Psiquiatria'];
const graphColors = [];
const bordercolor = [];
for (i = 0; i < Servico.length; i++){
  const r = Math.floor(Math.random() * 255);
  const g = Math.floor(Math.random() * 255);
  const b = Math.floor(Math.random() * 255);
  graphColors.push('rgba('+r+', '+g+', '+b+', 0.5)');
  bordercolor.push('rgba('+r+', '+g+', '+b+', 0.8)');
}
var myChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: Servico ,
    datasets: [{
        label: "Serviço por usuário",
        data: Usuarios,
        backgroundColor: graphColors,      
        borderColor: "rgba(217, 217, 217, 1)",
        hoverBorderColor: "rgba(255, 255, 255, 1)",
        hoverBackgroundColor: bordercolor,
        borderWidth: 1,
       
    }]
  },

  options: {
    layout: {
      padding: 0
    },
    plugins: {
      legend: {
        display: true
      },
    labels: {
      render: 'percentage',
      precision: 1,
      position: 'border',
      fontColor: "rgba(0, 0, 0, 1)"
      }
    }
  }  
})
;