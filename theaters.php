

<!DOCTYPE html>
<html>
<head>
	<title>Movie Ticket Booking System - Theaters</title>
	 <link rel="stylesheet" type="text/css" href="theater.css">
	
</head>
<body>
	
	<header>
    <nav>
      <ul>
        <li><a href="project.php">Home</a></li>
        <li><a href="movies.php">Movies</a></li>
        <li><a href="theaters.php">Theaters</a></li>
         <li><a href="logout.php">Logout</a></li>
        
      </ul>
    </nav>
  </header>
	
	<main>
		<h2>Theaters</h2>
		<div class="theater">
			<h3>Theater Aria</h3>
			<p>East Hallway</p>
			<p>Capacity = 70</p>
			
			<button onclick="window.location.href='movies.php'" type="button" class="movies btn">Watch Movies</button>
		</div>
		<!-- more theater listings... -->
		  <div class="theater">
			<h3>Theater Nova</h3>
			<p>East Hallway</p>
			<p>Capacity = 60</p>
			<button onclick="window.location.href='movies.php'" type="button" class="movies btn">Watch Movies</button>
		</div>
		<div class="theater">
			<h3>Theater August</h3>
			<p>West Hallway</p>
			<p>Capacity = 72</p>
			<button onclick="window.location.href='movies.php'" type="button" class="movies btn">Watch Movies</button>
					</div>
			<div class="theater">
			<h3>Theater Brooklyn</h3>
			<p>West Hallway</p>
			<p>Capacity = 65</p>
			<button onclick="window.location.href='movies.php'" type="button" class="movies btn">Watch Movies</button>
		</div>
		<div class="theater">
			<h3>Theater Cairo</h3>
			<p>West Hallway</p>
			<p>Capacity =79</p>
			<button onclick="window.location.href='movies.php'" type="button" class="movies btn">Watch Movies</button>
		</div>
	</main>
	
</body>
</html>
