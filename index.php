
<!DOCTYPE html>
<html lang="de" dir="ltr">

  <head>
    <?php include("css/inter.html"); ?>
    <?php include("config.php"); ?>
		<?php include "core/check.php";
          include 'core/check_erw.php';

          /**
           * Jomlua - A PHP Framework For Web Artisans.
           *
           * @author   Tobias Bieder <akatobias@live.de>
           */

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

       <button class="tablink" onclick="openPage('Home', this, '#777')" id="defaultOpen"><?php echo $navigation_site1 ?></button>
       <button class="tablink" onclick="openPage('vote', this, '#777')" ><?php echo $navigation_site2 ?></button>
       <button class="tablink" onclick="openPage('Contact', this, '#777')"><?php echo $navigation_site3 ?></button>
      <button class="tablink" onclick="openPage('About', this, '#777')"><?php echo $navigation_site4 ?></button>

<div id="player" class="tabcontent">
  <h3>Installation.</h3>
  <?php include 'core/app/modpack.php'; ?>
</div>

<div id="Home" class="tabcontent">
  <h3>Willkommen auf Space Remix!</h3>
     <p>Player statistic</p>
      <?php include("site/willcome.html") //Hier steht die Willkommens rede von Prasodym?>

  <h3>Server Status</h3>
			<?php include("core/app/server.php") ?>



    <!-- Wiki label nach unten Anpassen! ################################## s_1, servert_p, i ####################################-->
		<h3><i class="fab fa-wikipedia-w" style="
    margin-top: 60px;text-align: left; height:40px;"></i> - Mod Wiki</h3>
		<p>Suche nach ein Modpack wie Zb. <b>Mekanism</b> oder nach Items wie <b>Querry.</b></p>

		 <form class="such" action="https://ftb.gamepedia.com/" method="get" onSubmit="if(!confirm('Du wirst jetzt weitergeleitet zu ftb.gamepedia.com. Bist du damit einverstanden?')){return false;}">
			  <input type="search" name="search" class="form-control"  aria-describedby="basic-addon3" placeholder="InfiMiner" onclick="show_alert();" onKeyPress="return submitenter(this,event)">
  </form>
</div>
</div>

<div id="vote" class="tabcontent">
  <h3>Vote für Space Remix um belohnungen zu erhalten.</h3>
  <p>Es ist nur einmal am tag möglich zu voten.</p>
     <?php include('core/app/vote_list.php')?>
  <div class="topvotecontent">
		<h3>Vote statistik</h3>
    <p>Comming soon.</p>
    <?php include("core/app/vote_listner.php"); ?>


  </div>
</div>

<div id="Contact" class="tabcontent">
  <h3>Spieler statistik</h3>
<p id="dcue1">Wenn du probleme hast mit dem Spieleablauf melde dich bitte in den Support Channel.</p>
     <div class="discrd_f">


	 <iframe src="https://discordapp.com/widget?id=<?php echo $discord_ID?>&theme=dark" width="750" height="500" allowtransparency="true" frameborder="0"></iframe>
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
<?php include('core/app/body_footer.php');?>

</div>
<footer>Jomlua.de | Createt by Prasodym | Kontakt | <a id="win2" style="cursor: pointer;" > Impressum </a> | Fehler melden
  </div></body>
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
