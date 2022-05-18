import Chart from "chart.js/auto";

export default {
    draw: function(ctx, labels, datasets, title, displayLegend, orientation) {
        const data = {
            labels: labels,
            datasets: datasets
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        ticks: {
                            fontSize: 24,
                        }
                    }
                },
                responsive: true,
                //grouped: false,
                indexAxis: orientation,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        display: displayLegend,
                        position: 'top',
                    },
                    title: {
                        display: title !== undefined && title !== "",
                        text: title
                    },
                    tooltip: {
                        bodyFont: {size: 14},
                        callbacks: {
                            title: function(tooltipItem) {
                                return tooltipItem[0].dataset.label;
                            },
                            label: function(tooltipItem) {
                                return " " + tooltipItem.label + ": " + tooltipItem.formattedValue;
                            },
                        }
                    }
                },
            },
        };

        return new Chart(ctx, config);
    },
}


