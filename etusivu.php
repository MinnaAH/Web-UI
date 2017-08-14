
<html>
  <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
	  <li class="active"><a href="harkka.php?action=home">Etusivu</a></li>
        <li><a  href="harkka.php?action=table">Taulukko</a></li>
        <li><a  href="harkka.php?action=wind_speed">Tuulen nopeus(JSON)</a></li> 
		<li><a  href="harkka.php?action=wind_speed2">Tuulen nopeus</a></li> 
		<li><a  href="harkka.php?action=temperature">Lämpötila (JSON)</a></li>
		<li><a  href="harkka.php?action=temperature2">Lämpötila</a></li> 
		<li><a  href="harkka.php?action=pressure">Ilmanpaine</a></li> 
		<li><a  href="harkka.php?action=wind_direction">Tuulen suunta</a></li> 
      </ul>
    </div>
  </div>
</nav>

<div class ="container">
	<head>
<title>Etusivu</title>
</head
<div class="text-center">
 <h3 class="margin">Etusivu</h3>
  <p>Täälä sivustolla nähdään ajankohtaista dataa säätiedoista. Taulukosta löytyy kaikkien säätietojen viimeisimmät 1000 mittausta</p>
  <p>JSON välilehdiltä löytyy kahden eri säätiedon JSON koodit, joita on käytetty sivuja tehdessä</p>
  <p>Tuulen nopeus kertoo ajankohtaisen päivittyvän tuulennopeuden.</p>
  <p>Lämpötila kertoo viimeisen 24 tunnin säätiedot.</p>
  <p>Ilmanpaineesta löytyy ajankohtainen päivittyvä tieto ilmanpaineesta.</p>
  <p>Tuulensuunta kertoo ajankohtaisen tuulensuunnan.</p>
  <p>Sääasema, josta tiedot saadaan sijaitsee Tampereen Ammattikorkeakoululla.</p>
</div></div>

</body>
</html>
