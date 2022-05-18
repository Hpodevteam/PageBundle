import Chart from "chart.js/auto";

export default {
    draw: function(ctx, labels, datasets, title) {
        const data = {
            labels: labels,
            datasets: datasets
        };

        const config = {
            type: 'line',
            data: data,
            options: {
                scales: {
                    y: {
                        ticks: {
                            callback: function(value, index, values) {
                                return value + ' téc';
                            }
                        }
                    }
                },
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: title !== undefined,
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


