// Hamburger Navigation Bar

const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener("click", () => {
    navLinks.classList.toggle("open");
    links.forEach((link) => {
        link.classList.toggle("show");
    });
});

navLinks.addEventListener("click", () => {
    navLinks.classList.toggle("open");
    links.forEach((link) => {
        link.classList.toggle("show");
    });
});

// Progress Scrolling Bar

$(window).scroll(function() {
    let scroll = $(window).scrollTop(),
        dh = $(document).height(),
        wh = $(window).height(),
        scrollPercent = (scroll / (dh - wh)) * 100;
    $("#progressBar").css("height", scrollPercent + "%");
});

// Background Fading On Scroll

let headerBg = document.getElementById("bg");
window.addEventListener("scroll", function() {
    headerBg.style.opacity = 1 - +window.pageYOffset / 550 + "";
    headerBg.style.top = +window.pageYOffset + "px";
    headerBg.style.backgroundPositionY = -+window.pageYOffset / 5 + "px";
});

// Call Weather API

// Setting the class to get the JcDecaux Api data
class GetWeather {
    constructor(apiKey, city, country, weathField, weathIcon) {
        this.displayData = function() {
            this.apiKey = apiKey;
            this.city = city;
            this.country = country;
            this.tempeField = weathField;
            this.weathIcon = weathIcon;
            // Api Calling with fetch method and get the promise
            this.getPromise = fetch(
                `http://api.openweathermap.org/data/2.5/weather?q=${city},${country}&APPID=${apiKey}&units=metric&lang=Fr`
            ).then((response) => response.json());

            this.getPromise.then(function(data) {
                console.log(data.weather[0].description);
                let description = data.weather[0].description;
                let icon = data.weather[0].icon;
                let temperature = Math.round(data.main.temp);
                document.getElementById(`${weathField}`).innerHTML = `${temperature}` + "°" + " -> " + `${description}`;
                document.getElementById(`${weathIcon}`).innerHTML =
                    "<img class=" +
                    " image-fluid " +
                    "src=" +
                    "http://openweathermap.org/img/wn/" +
                    `${icon}` +
                    "@2x.png" +
                    " " +
                    `"alt=""` +
                    ">";
                console.log(icon);
            });
            // Ready to use the data from the promise
        };
    }
}

const torontoWeather = new GetWeather(
    "360cccc6e22db8194872d3b393f23d91",
    "toronto",
    "canada",
    "torontoWeath",
    "torontoIcon"
);
const montrealWeather = new GetWeather(
    "360cccc6e22db8194872d3b393f23d91",
    "montreal",
    "canada",
    "montrealWeath",
    "montrealIcon"
);
const ottawaWeather = new GetWeather(
    "360cccc6e22db8194872d3b393f23d91",
    "ottawa",
    "canada",
    "ottawaWeath",
    "ottawaIcon"
);
const vancouverWeather = new GetWeather(
    "360cccc6e22db8194872d3b393f23d91",
    "vancouver",
    "canada",
    "vancouverWeath",
    "vancouverIcon"
);
const parisWeather = new GetWeather("360cccc6e22db8194872d3b393f23d91", "paris", "france", "parisWeath", "parisIcon");

torontoWeather.displayData();
montrealWeather.displayData();
vancouverWeather.displayData();
ottawaWeather.displayData();
parisWeather.displayData();

const openWeatherPromise = torontoWeather.getPromise;

console.log(openWeatherPromise);

var mymap = L.map("mapid").setView([43.653226, -79.3831843], 13);

L.tileLayer("https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}", {
    attribution:
        'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: "mapbox.streets",
    accessToken: "pk.eyJ1Ijoid2xhZDM0IiwiYSI6ImNqeHA5N25qYTBhZnozbmwzMmdmczBtcGoifQ.hYSWIqrFTCmtKzfE56Y4iw"
}).addTo(mymap);

let cluster = L.markerClusterGroup();
let markers = L.marker([43.653226, -79.3831843]).addTo(cluster);
mymap.addLayer(cluster);

// Disable Map Zoom
mymap.scrollWheelZoom.disable();

// Togglr if Map clicked activate ZOOM..
mymap.on("click", function() {
    if (mymap.scrollWheelZoom.enabled()) {
        mymap.scrollWheelZoom.disable();
    } else {
        mymap.scrollWheelZoom.enable();
    }
});
