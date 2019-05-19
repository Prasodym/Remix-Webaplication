
<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <?php include("css/inter.html"); ?>
    <?php include("config.php"); ?>
		<?php include "core/check.php";

$server = new MCServerStatus("server.jomlua.de", 25566); //The second argument is optional in this case ?>
		<script type="text/javascript" href="serv.html">

		</script>

    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />


<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#252e39"
    },
    "button": {
      "background": "#14a7d0"
    }
  },
  "theme": "classic",
  "content": {
    "message": "Um unsere Webseite für Sie optimal zu gestalten und fortlaufend verbessern zu können, verwenden wir Cookies. Durch die weitere Nutzung der Webseite stimmen Sie der Verwendung von Cookies zu. Weitere Informationen zu Cookies erhalten Sie in unserer ",
    "href": "jomlua.de/policy.php"
  }
})});
</script>

    <meta charset="<?php echo $web_charset; ?>">
    <title><?php echo $web_title; ?></title>
  </head>
  <body>






    <div class="site">


     <div class="content">

       <button class="tablink" onclick="openPage('Home', this, '#777')" id="defaultOpen"><i class="fas fa-grin-stars"></i> <?php echo $navigation_site1 ?></button>
       <button class="tablink" onclick="openPage('vote', this, '#777')" ><i class="fal fa-home"></i><i class="fas fa-poll"></i> <?php echo $navigation_site2 ?></button>
       <button class="tablink" onclick="openPage('Contact', this, '#777')"><i class="fab fa-discord"></i> <?php echo $navigation_site3 ?></button>
      <button class="tablink" onclick="openPage('About', this, '#777')"><i class="fas fa-at"></i> <?php echo $navigation_site4 ?></button>

<div id="Home" class="tabcontent">
  <h3>Willkommen auf Space Remix!</h3>
     <p>Player statistic</p>
      <img id="linke" style="height: 250px; width: auto;"src="image/body.png" alt=""> <p>Hallo, ich bin Prasodym, Ich versuche dir zu helfen wie es nur geht. Ich habe alles für euch zusammen gestellt damit ihr es so einfach wie möglich habt. Wie man unter mir sieht, kann man nach was suchen. Gib doch da einfach ein Item ein, wo du gerne mehr von möchtest. Du landest danach direkt in FTB Wiki. Auch das Voten ist ein wichtiger bestandteil des Servers. Merk dir einfach dieses Motto, “um so mehr Stimmen um so mehr Spieler„ und umsonst macht ihr das auch nicht, es gibt dafür wertvolle Ingame Geschenke. Wenn du alles mitbekommen möchtes, was auf dem Server passiert, kannst du uns auf Discord besuchen, da haben wir ein Ingame Livechat, falls du mal gerade nicht auf dem Server bist und mit Spieler Kommunizieren kannst.</p>
    <div class="su">

  <h3>Server Status</h3>
			<?php $var = $server->online; //$server->online returns true if the server is online, and false otherwise
             //Outputs the maximum number of players the server allows
						echo "<a href='java' id='checks' data-toggle='tooltip' data-placement='top' title='". @$player . "'><b>" . $server->online_players . "</b> Spieler von <b>" . $server->max_players . "</b> Online.</a>";
?>

<!-- Player list -->
<script>
$.getJSON('https://api.mcsrvstat.us/2/jomlua.de:25566', function(status) {
//Show the version
console.log(status.version);

//Show a list of players
$.each(status.players.list, function(index, player){
	console.log(player);
});
});
</script>
<?php
//Get the status and decode the JSON
$status = json_decode(file_get_contents('https://api.mcsrvstat.us/2/jomlua.de:25566'));

//Show the version


//Show a list of players
foreach ($status->players->list as $player) {
	 echo "<div class='server_p'>";
	 echo "<img is='s2' style='width: 24px;' src='https://minecraft-statistic.net/face/". $player .".png' alt='". $player ."'>";
	 echo "<p id='s1'>  " . $player . "</p>";
	 echo "</div>";
}
?>

<!-- Player list end   https://minecraft-statistic.net/face/Prasodym.png-->


<?php
$ip = "jomlua.de";
$port = "25566";
if (!@$fp = fsockopen($ip, $port, $errno, $errstr, 1)){
echo "<div class='server_o'>Online</div>";
} else {
echo "<div class='server_of'>Offline</div>";
}
?>




		<h3><i class="fab fa-wikipedia-w"></i> - Mod Wiki</h3>
		<p>Suche nach ein Modpack wie Zb. <b>Mekanism</b> oder nach Items wie <b>Querry.</b></p>

		 <form class="such" action="https://ftb.gamepedia.com/" method="get" onSubmit="if(!confirm('Du wirst jetzt weitergeleitet zu ftb.gamepedia.com. Bist du damit einverstanden?')){return false;}">
			  <input type="search" name="search" class="form-control"  aria-describedby="basic-addon3" placeholder="InfiMiner" onclick="show_alert();" onKeyPress="return submitenter(this,event)">
  </form>
</div>
</div>

<div id="vote" class="tabcontent">
  <h3>Vote für Space Remix um belohnungen zu erhalten.</h3>
  <p>Es ist nur einmal am tag möglich zu voten.</p>
     <div class="vote_con">


       <button type="button" onclick="window.location.href='http://www.serverliste.net/vote/1963'" class="btn btn-primary btn-lg btn-block"><i class="fas fa-vote-yea"></i> serverliste.net</button>
       <button type="button" onclick="window.location.href='https://www.minecraft-serverlist.net/vote/49068'" class="btn btn-primary btn-lg btn-block"><i class="fas fa-vote-yea"></i> minecraft-serverlist.net</button>
       <button type="button" onclick="window.location.href='https://minecraft-server.eu/vote/index/20082'" class="btn btn-primary btn-lg btn-block"><i class="fas fa-vote-yea"></i> minecraft-server.eu</button>
    </div>
  <div class="topvotecontent">
		<h3>Vote statistik</h3>
    <p>Comming soon.</p>
		<?php echo $dsatz["name"] . "," . $dsatz["email"]?>

  </div>
</div>

<div id="Contact" class="tabcontent">
  <h3>Spieler statistik</h3>
<p id="dcue1">Wenn du probleme hast mit dem Spieleablauf melde dich bitte in den Support Channel.</p>
     <div class="discrd_f">


	 <iframe src="https://discordapp.com/widget?id=444474379276124162&theme=dark" width="750" height="500" allowtransparency="true" frameborder="0"></iframe>
 </div>

</div>

<div id="About" class="tabcontent">
  <h3>About</h3>
  <p>Who we are and what we do.</p>
	<div class="email">
		<!-- Kontaktformular einfügen!! -->

	</div>
</div>
</div>
<div class="foot">
	<p>  <img src="/image/site-logo.png" onclick="window.location.href='https://unitedworldminers.com'" alt=""> <a href="https://jomlua.de" id="main" ><i class="far fa-copyright">  </i>  Jomlua.de</a>  <a href="https://jomlua.de" id="contakt" target="_blank"><i class="fas fa-envelope">  </i>  Kontakt</a>
		<a href="https://git.unitedworldminers.com/Bent/space-remix/issues"  role="button" id="issue" target="_blank"><i class="fas fa-bug">  </i>  Fehler melden</a><a href="https://jomlua.de" id="leer">Ist free</a> <i class="fas fa-code-branch"> 1.0.1</i></p>

</div>

</div>
<footer>Jomlua.de | Createt by Prasodym | Kontakt | <a id="win2" style="cursor: pointer;" > Impressum </a> | Fehler melden
  </body>
</html>
<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

document.getElementById('win2').onclick = function() {
    var winURL = '/site/impressum.php';
    var winName = 'win1';
    var winSize = 'width=660,height=620,scrollbars=yes';
    var ref = window.open(winURL, winName, winSize);
}
</script>
