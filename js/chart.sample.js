var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2009"],
        datasets: [{
                label: "Bactéria",
                data: [1, 2, 3, 4, 5, 6, 7, 8, 9],
                borderWidth: 4,
                borderColor: '#2ecc71',
                backgroundColor: "transparent",
            },
            {
                label: "Vírus",
                data: [10, 2, 1, 9, 8, 6, 3, 4, 2],
                borderWidth: 4,
                borderColor: '#e74c3c',
                backgroundColor: "transparent",
            },
        ]
    },
    options: {
        title: {
            display: true,
            fontSize: 20,
            text: "Números de Bactérias e Vírus no Mundo"
        },
        labels: {
            fontStyle: "bold"
        }
    }
});