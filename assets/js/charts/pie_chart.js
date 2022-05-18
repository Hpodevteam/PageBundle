import Chart from "chart.js/auto";

export default {
    draw: function(ctx, vLabels, vValues, vColors, title, tooltipLabel = " %") {
        const data = {
            labels: vLabels,
            datasets: [
                {
                    label: '2020',
                    data: vValues,
                    backgroundColor: vColors,
                }
            ]
        };

        const config = {
            type: 'pie',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'left',
                        labels: {
                            font: {
                                size: 22,
                                lineHeight: 1.8
                            }
                        },
                        padding: 30
                    },
                    title: {
                        display: title !== undefined,
                        text: title
                    },
                    tooltip: {
                        bodyFont: {size: 14},
                        callbacks: {
                            label: function(tooltipItem) {
                                return " " + tooltipItem.label + ": " + tooltipItem.parsed + tooltipLabel;
                            },
                        }
                    }
                },

            },
        };

        return new Chart(ctx, config);
    }
}


