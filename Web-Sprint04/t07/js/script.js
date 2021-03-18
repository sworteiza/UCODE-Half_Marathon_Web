const key = '8f17df1778e4d711d9a41ac261b4f263';
if (key == '') document.getElementById('temp').innerHTML = ('Remember to add your api key!');

function weatherBallon(cityID) {
    fetch('https://api.openweathermap.org/data/2.5/forecast?id=' + cityID + '&appid=' + key)
        .then(function (resp) { return resp.json() }) // Convert data to json
        .then(function (data) {
            drawWeather(data);
        })
        .catch(function () {
            // catch any errors
        });
}
function drawWeather(d) {

    var celcius = [];
    var description = [];
    var days = [];

    for (let i = 0; i < 40; i += 8) {
        celcius.push(Math.round(parseFloat(d.list[i].main.temp) - 273.15) + '&deg;')
        description.push(d.list[i].weather[0].main);
        days.push(d.list[i].dt_txt);
    }

    for (let i = 0; i < 5; i++) {
        let date = new Date(days[i]);
        document.getElementById('date' + i).innerHTML = date.getDate() + '.' + date.getMonth();
        document.getElementById('description' + i).innerHTML = description[i];
        document.getElementById('temp' + i).innerHTML = celcius[i];
    }

    for (let i = 0; i < 5; i++) {
        if (description[i].indexOf('Clouds') == 0) {
            document.getElementById("icon" + i).className = "Clouds";
        }
        else if (description[i].indexOf('Rain') == 0) {
            document.getElementById("icon" + i).className = "Rain";
        }
        else if (description[i].indexOf('Snow') == 0) {
            document.getElementById("icon" + i).className = "Snow";
        }
        else if (description[i].indexOf('Sun') == 0) {
            document.getElementById("icon" + i).className = "Sun";
        }
        else if (description[i].indexOf('Clear') == 0) {
            document.getElementById("icon" + i).className = "Clear";
        }
    }

}
window.onload = function () {
    weatherBallon(1850147);
}

