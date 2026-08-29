document.addEventListener("DOMContentLoaded", function() {

```
let search = document.getElementById("search");

if (search) {

    search.addEventListener("keyup", function() {

        let text = search.value.toLowerCase();
        let movies = document.querySelectorAll(".movie-card");

        movies.forEach(function(movie) {

            let title = movie.querySelector("h3").innerText.toLowerCase();

            if (title.includes(text)) {
                movie.style.display = "block";
            } else {
                movie.style.display = "none";
            }

        });

    });

}


let seats = document.querySelectorAll(".seats button");
let seatInput = document.getElementById("selectedSeats");
let total = document.getElementById("total");

seats.forEach(function(seat) {

    seat.addEventListener("click", function() {

        seat.classList.toggle("selected");

        let selected = document.querySelectorAll(".seats button.selected");
        let names = [];

        selected.forEach(function(item) {
            names.push(item.innerText);
        });

        if (seatInput) {
            seatInput.value = names.join(", ");
        }

        if (total) {
            total.innerText = "Total Price: Tk " + (names.length * 300);
        }

    });

});
```

});
