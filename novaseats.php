


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="novaseats.css" />
    <title>Movie Seat Booking</title>
    

  </head>
  <body>
    <div class="movie-container">
      <label> Select a movie:</label>
      <select id="movie">
        <option value="220">Creed III (ksh.220)</option>
        <option value="320">Venom(ksh.320)</option>
        <option value="250">Batman (ksh.250)</option>
        <option value="260">John Wick:Chapter4(ksh.260)</option>
      </select>
    </div>

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>Available</small>
      </li>
      <li>
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat sold"></div>
        <small>Sold</small>
      </li>
    </ul>

    <div class="container">
      <div class="screen"></div>

      <div class="row">
        <div class="seat" id="seat1"></div>
        <div class="seat" id="seat2"></div>
        <div class="seat" id="seat3"></div>
        <div class="seat" id="seat4"></div>
        <div class="seat" id="seat5"></div>
        <div class="seat" id="seat6"></div>
        <div class="seat" id="seat7"></div>
        <div class="seat" id="seat8"></div>
        <div class="seat" id="seat9"></div>
        <div class="seat" id="seat10"></div>
      </div>

   <div class="row">
        <div class="seat" id="seat11"></div>
        <div class="seat" id="seat12"></div>
        <div class="seat" id="seat13"></div>
        <div class="seat" id="seat14"></div>
        <div class="seat" id="seat15"></div>
        <div class="seat" id="seat16"></div>
        <div class="seat" id="seat17"></div>
        <div class="seat" id="seat18"></div>
        <div class="seat" id="seat19"></div>
        <div class="seat" id="seat20"></div>
      </div>
<div class="row">
        <div class="seat" id="seat21"></div>
        <div class="seat" id="seat22"></div>
        <div class="seat" id="seat23"></div>
        <div class="seat" id="seat24"></div>
        <div class="seat" id="seat25"></div>
        <div class="seat" id="seat26"></div>
        <div class="seat" id="seat27"></div>
        <div class="seat" id="seat28"></div>
        <div class="seat" id="seat29"></div>
        <div class="seat" id="seat30"></div>
      </div>
 <div class="row">
        <div class="seat" id="seat31"></div>
        <div class="seat" id="seat32"></div>
        <div class="seat" id="seat33"></div>
        <div class="seat" id="seat34"></div>
        <div class="seat" id="seat35"></div>
        <div class="seat" id="seat36"></div>
        <div class="seat" id="seat37"></div>
        <div class="seat" id="seat38"></div>
        <div class="seat" id="seat39"></div>
        <div class="seat" id="seat40"></div>
      </div>
 <div class="row">
        <div class="seat" id="seat41"></div>
        <div class="seat" id="seat42"></div>
        <div class="seat" id="seat43"></div>
        <div class="seat" id="seat44"></div>
        <div class="seat" id="seat45"></div>
        <div class="seat" id="seat46"></div>
        <div class="seat" id="seat47"></div>
        <div class="seat" id="seat48"></div>
        <div class="seat" id="seat49"></div>
        <div class="seat" id="seat50"></div>
      </div>
      <div class="total-container">
  <p>Selected Seats: <span id="count">0</span></p>
  <p>Total Price: ksh<span id="total">0</span></p>
</div>
 
  <form id="booking-form" method="post" action="bookseats.php">
  <input type="text" id="name" name="name" placeholder="Name" /><br>
  <input type="email" id="email" name="email" placeholder="Email" />
<button type="submit" name="submit-button" id="submit-button" >Book Now</button>

</form>

</div>
</div>

<script src="novaseats.js"></script>
  </body>
</html>
