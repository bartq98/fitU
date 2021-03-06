const mainContainer = document.querySelector(".main-container");

function formatDateFromPostgres(timestampz) {
    return timestampz.substring(0, timestampz.length - 7);
}

function generateLabels(resource) {
    let to_return = [];
    let len = resource.length;
    for (let i = 0; i < len; i++) {
        to_return.push(resource[i].x.getDate() + "/" + resource[i].x.getMonth() + 1);
    }
    return to_return;
}

function generateValues(resource) {
    let to_return = [];
    let len = resource.length;
    for (let i = 0; i < len; i++) {
        to_return.push(resource[i].y);
    }
    return to_return;
}

fetch('http://localhost:8080/get-weight', {
        method: "GET",
        body: JSON.stringify()
    })
    .then(response => response.json())
    .then(function(response) {
        let bodyweightResource = [];
        let len = response.length;
        for (let i = 0; i < len; i++) {
            fetchedDate = new Date(formatDateFromPostgres(response[i].measured_at));
            bodyweightResource.push({x : fetchedDate, y : parseFloat(response[i].weight)});
        }



        dataDomain = generateLabels(bodyweightResource);
        dataValues = generateValues(bodyweightResource);

        console.debug(dataValues);

        let ctx = document.getElementById('chart');
        let chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: dataDomain,
                datasets: [{
                    label: "Waga w kg w danym dniu",
                    data: dataValues
                }]
            },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            title: {
                display: true,
                text: "Wykres Twojej wagi na przestrzeni dni",

            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Dzień pomiaru'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Waga w kg'
                    }
                }],
            }
        }
    });
});

Chart.defaults.global.defaultFontSize = 17;
