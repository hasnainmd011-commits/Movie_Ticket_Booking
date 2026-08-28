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