
  // Gráfica de Línea (Préstamos por día) - SE MANTIENE IGUAL - Alonso
  const ctx = document.getElementById('line-chart-prestamos').getContext('2d');

  let chart;

  function cargarGrafico(tipo = 'actual') {
    fetch(`ajax/inicio.ajax.php?tipo=${tipo}`)
      .then(res => res.json())
      .then(data => {
        const dias = data.map(d => d.dia);
        const cantidades = data.map(d => d.cantidad);

        if (chart) chart.destroy(); // limpiar gráfico anterior

        chart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: dias,
            datasets: [{
              label: 'Préstamos por día',
              data: cantidades,
              borderColor: '#17a2b8',
              backgroundColor: 'rgba(23, 162, 184, 0.2)',
              fill: true,
              tension: 0.4,
              pointBackgroundColor: '#17a2b8'
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: { labels: { color: '#000' } }
            },
            scales: {
              x: { ticks: { color: '#000' } },
              y: { ticks: { color: '#000' } }
            }
          }
        });
      });
  }

  // Eventos para los botones
  document.getElementById('semana-actual').addEventListener('click', () => cargarGrafico('actual'));
  document.getElementById('semana-anterior').addEventListener('click', () => cargarGrafico('anterior'));

  // Cargar gráfico por defecto
  cargarGrafico();

  // Fin de grafica




  

