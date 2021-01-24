const mainContainer = document.querySelector(".main-container");

// console.log("Obiekt pobrany z BD: ");

fetch('http://localhost:8080/get-weight', {
        method: "GET",
        body: JSON.stringify()
    })
    .then(console.log("Dotarłem tu"))
    .then(response => response.json())
    .then(data => console.log(data));