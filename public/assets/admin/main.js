document.addEventListener('DOMContentLoaded', function() {

    if(document.querySelector('#visitorsChart')){

        const ctx = document.getElementById('visitorsChart').getContext('2d');
        
        // Gradient for chart
        let gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(56, 189, 248, 0.5)');   
        gradient.addColorStop(1, 'rgba(56, 189, 248, 0.0)');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                datasets: [{
                    label: 'Visitors',
                    data: [65, 59, 80, 81, 56, 55, 40, 75, 90, 110],
                    borderColor: '#38bdf8',
                    backgroundColor: gradient,
                    borderWidth: 2,
                    tension: 0.4,
                    fill: true,
                    pointBackgroundColor: '#1e293b',
                    pointBorderColor: '#38bdf8',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    pointHoverRadius: 6
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(255, 255, 255, 0.05)',
                            drawBorder: false
                        },
                        ticks: {
                            color: '#94a3b8'
                        }
                    },
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            color: '#94a3b8'
                        }
                    }
                }
            }
        });

    }
    
});