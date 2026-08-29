let seats = document.querySelectorAll(".seats button");
let selected = document.querySelector(".selected-seats");
let price = document.querySelector(".total-price");

let ticketPrice = 300;

seats.forEach(function(seat) {

    seat.addEventListener("click", function() {

        seat.classList.toggle("selected");

        let chosen = document.querySelectorAll(".seats .selected");
        let names = [];

        chosen.forEach(function(item) {
            names.push(item.innerText);
        });

        selected.innerText = names.length == 0
            ? "Selected seats: None"
            : "Selected seats: " + names.join(", ");

        price.innerText = "Total Price: Tk " + (names.length * ticketPrice);
    });

});

let search = document.querySelector("#search");

if (search) {
    search.addEventListener("keyup", function() {

        let movies = document.querySelectorAll(".movie");

        movies.forEach(function(movie) {

            let title = movie.querySelector("h3").innerText.toLowerCase();

            if (title.includes(search.value.toLowerCase())) {
                movie.style.display = "block";
            } else {
                movie.style.display = "none";
            }

        });

    });
}

let form = document.querySelector("form");

if (form) {
    form.addEventListener("submit", function(event) {

        let name = document.querySelector("input[name='name']");

        if (name && name.value.length < 3) {
            alert("Please enter your full name.");
            event.preventDefault();
        }

    });
}