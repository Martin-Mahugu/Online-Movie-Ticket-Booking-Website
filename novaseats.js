const container = document.querySelector(".container");
const seats = document.querySelectorAll(".row .seat:not(.occupied)");
const count = document.getElementById("count");
const total = document.getElementById("total");
const movieSelect = document.getElementById("movie");
const submitButton = document.getElementById("submit-button");

let ticketPrice = parseInt(movieSelect.value);

// Update total and count
function updateSelectedCount() {
  const selectedSeats = document.querySelectorAll(".row .seat.selected");
  const selectedSeatsCount = selectedSeats.length;
  count.innerText = selectedSeatsCount;
  total.innerText = selectedSeatsCount * ticketPrice;

  // Enable submit button if there is at least one selected seat
  if (selectedSeatsCount > 0) {
    submitButton.disabled = false;
  } else {
    submitButton.disabled = true;
  }
}

// Movie select event
movieSelect.addEventListener("change", (e) => {
  ticketPrice = parseInt(e.target.value);
  updateSelectedCount();
});

// Seat click event
container.addEventListener("click", (e) => {
  if (
    e.target.classList.contains("seat") &&
    !e.target.classList.contains("occupied")
  ) {
    e.target.classList.toggle("selected");
    updateSelectedCount();
  }
});

// Submit button click event
submit-Button.addEventListener("click", (e) => {
  e.preventDefault();
  const selectedSeats = document.querySelectorAll(".row .seat.selected");
  const selectedSeatNumbers = [...selectedSeats].map(seat => seat.getAttribute('data-seat-number')).join(',');
  const selectedMovie = movieSelect.options[movieSelect.selectedIndex].text;
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;

  fetch('bookseats.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      selected_seats: selectedSeatNumbers,
    selected_movie: selectedMovie,
      name: name,
      email: email
    })
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      alert('Booking successful!');
    } else {
      alert('Booking failed.');
    }
  })
  .catch(error => {
    console.error('Error:', error);
  });
});

// Initial count and total set
updateSelectedCount();
