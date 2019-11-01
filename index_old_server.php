<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/ChoiceButtons.css" rel="stylesheet" />
    <script src="js/bootstrap.min.js"></script>
    <style>
      .verticalRow {
        height: 100vh;
        overflow-y: scroll;
        border-style: solid;
        border-color: #555555;
        border-right-style: none;
        background-color: #b8b8b8;
      }
      .horizontalRow {
        padding-left: 25px;
        padding-right: 25px;
        border-style: solid;
        border-color: #555555;
        margin-left: 15px;
        background-color: #b8b8b8;
      }
    </style>
  </head>
  <body>
    <?php
      include 'login_form.php';
      include 'server.php';
      if(!isset($_SESSION['name'])){
        echo "Hello Mama";
        loginForm();
      }
      else{
    ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-2 verticalRow"><p>
          <?
            printNames();
          ?>
        </p></div>
        <div class="row flex-grow-1">
          <div class="col-xl-12 horizontalRow" id="art"><p>Art</p></div>
          <div class="col-xl-12 horizontalRow" id="text"><p>Text</p></div>
          <div class="col-xl-12 horizontalRow">
            <button class="button button1" id="button1" type="button" formaction="" formmethod="post">Want to save the kingdom!</button>
            <button class="button button2" id="button2" type="button" formaction="" formmethod="post">Want to have a good internet connection.</button>
            <button class="button button3" id="button3" type="button" formaction="" formmethod="post">Want to get rewarded by the king.</button>
          </div>
        </div>
      </div>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){});
        $("#choice1").click(function(){
		        var choice = $("#button1").val();
		        $.post("post.php", {text: choice});
		        return false;
	      });
        $("#choice2").click(function(){
		        var choice = $("#button2").val();
		        $.post("post.php", {text: choice});
		        return false;
	      });
        $("#choice3").click(function(){
		        var choice = $("#button3").val();
		        $.post("post.php", {text: choice});
		        return false;
	      });
      </script>
      <script>
				var homeTown = '';
				var king = '';
				var bountyHunter = '';
				var town2 = '';
				var captain = '';
				var fireElem = '';
				var weapon = '';
				var armour = '';
				var transportation = '';
				var isAlly = false;
				
				setTimeout(function(){
					document.getElementById("text").innerHTML = "The king was kind and loved by all, but alas he was a fierce competitive gamer." + "<br />" + "When the kingdom was cursed with lag, the king was filled with rage and taxes reached an all time high, "+ "<br />" + "as the king tried to upgrade his internet package.";
				}, 5000);
			
				setTimeout(function(){
					document.getElementById("text").innerHTML = "As an adventurer, you decide to take it upon yourself" + "<br />" + "to quest out into the world and slay the evil beast. This is because you.."
					document.getElementById("button1").innerText= "Want to save the Kingdom!";
					document.getElementById("button2").innerText= "Want to get good internet connection.";
					document.getElementById("button3").innerText= "Want to get an award from the King.";
				}, 5000);
				
				//document.getElementById("button1").addEventListener("click", vote("a"));
				//document.getElementById("button2").addEventListener("click", vote("b"));
				//document.getElementById("button3").addEventListener("click", vote("c"));
				document.getElementById("button1").addEventListener("click", e1);
				document.getElementById("button2").addEventListener("click", e1);
				document.getElementById("button3").addEventListener("click", e1);

				function e1(){
					//click
					// change text based on Elmaan's response and set weapon variable
					document.getElementById("button1").innerText= "A Sword";
					document.getElementById("button2").innerText= "A Gun";
					document.getElementById("button3").innerText= "Confidence";
					document.getElementById("button1").removeEventListener("click", e1);
					document.getElementById("button1").addEventListener("click", e2);
					document.getElementById("button2").removeEventListener("click", e1);
					document.getElementById("button2").addEventListener("click", e2);
					document.getElementById("button3").removeEventListener("click", e1);
					document.getElementById("button3").addEventListener("click", e2);
				}
				
				function e2(){
					// change text based on Elmaan's response and set armour variable
					document.getElementById("button1").innerText= "Heavy Plate Armour";
					document.getElementById("button2").innerText= "BBQ Apron";
					document.getElementById("button3").innerText= "Hack The Midlands 4.0 T-shirt";
					document.getElementById("button1").removeEventListener("click", e2);
					document.getElementById("button1").addEventListener("click", e3);
					document.getElementById("button2").removeEventListener("click", e2);
					document.getElementById("button2").addEventListener("click", e3);
					document.getElementById("button3").removeEventListener("click", e2);
					document.getElementById("button3").addEventListener("click", e3);
				}
				
				function e3(){
					// change text based on Elmaan's response and set transportatian var
					document.getElementById("button1").innerText= "Walking";
					document.getElementById("button2").innerText= "Horse";
					document.getElementById("button3").innerText= "T.A.R.D.I.S";
					document.getElementById("button1").removeEventListener("click", e3);
					document.getElementById("button1").addEventListener("click", e4);
					document.getElementById("button2").removeEventListener("click", e3);
					document.getElementById("button2").addEventListener("click", e4);
					document.getElementById("button3").removeEventListener("click", e3);
					document.getElementById("button3").addEventListener("click", e4);
				}
				
				function e4(){
					// change text based on Elmaan's response and set bounty hunter var and isAlly
					document.getElementById("button1").innerText= "Fight the bounty hunter.";
					document.getElementById("button2").innerText= "Charm the bounty hunter.";
					document.getElementById("button3").innerText= "Intimidate the bounty hunter.";
					document.getElementById("button1").removeEventListener("click", e4);
					document.getElementById("button1").addEventListener("click", e5);
					document.getElementById("button2").removeEventListener("click", e4);
					document.getElementById("button2").addEventListener("click", e5);
					document.getElementById("button3").removeEventListener("click", e4);
					document.getElementById("button3").addEventListener("click", e5);
							//if choice 2 then change event listeners to 51 and change text and button text
					//else if choice 3 then change event listeners to 52 and change text and button text
					//else change event listeners to 6 and change text and button text	
				}
					
				function e5(){
					if(isAlly == false){
						document.getElementById("button3").innerText= "Let the bounty hunter take care of it.";
						document.getElementById("button3").setAttribute("disabled","disabled");
						document.getElementById("button3").style.cursor = "not-allowed";
					}
					else{
						document.getElementById("button3").innerText= "Let the bounty hunter take care of it.";
					}
					// change text based on Elmaan's response
					document.getElementById("button1").innerText= "Challenge the pirate to a duel which turns out to be a game of rock, paper, scissors.";
					document.getElementById("button2").innerText= "Start singing the spongebob intro song.";
					document.getElementById("button1").removeEventListener("click", e5);
					document.getElementById("button1").addEventListener("click", e6);
					document.getElementById("button2").removeEventListener("click", e5);
					document.getElementById("button2").addEventListener("click", e6);
					document.getElementById("button3").removeEventListener("click", e5);
					document.getElementById("button3").addEventListener("click", e6);
				}
				
				function e6(){
					// change text based on Elmaan's response 
					document.getElementById("button1").innerText= "Hug the fire elemental.";
					document.getElementById("button2").innerText= "Attack the fire elemental.";
					document.getElementById("button3").innerText= "Attempt to blow him out.";
					document.getElementById("button1").removeEventListener("click", e6);
					document.getElementById("button1").addEventListener("click", e7);
					document.getElementById("button2").removeEventListener("click", e6);
					document.getElementById("button2").addEventListener("click", e7);
					document.getElementById("button3").removeEventListener("click", e6);
					document.getElementById("button3").addEventListener("click", e7);
				}
				
				function e7(){
					// change text based on Elmaan's response and set transportatian var
					document.getElementById("button1").innerText= "A carpet";
					document.getElementById("button2").innerText= "The Unisinkable Titanic";
					document.getElementById("button3").innerText= "Swimming(Don't pick this)";
					document.getElementById("button1").removeEventListener("click", e7);
					document.getElementById("button1").addEventListener("click", e8);
					document.getElementById("button2").removeEventListener("click", e7);
					document.getElementById("button2").addEventListener("click", e8);
					document.getElementById("button3").removeEventListener("click", e7);
					document.getElementById("button3").addEventListener("click", e8);
				}
				
				function e8(){
					// change text based on Elmaan's response 
					document.getElementById("button1").innerText= "“We takesies the precious!”";
					document.getElementById("button2").innerText= "“Harry Potter is better”";
					document.getElementById("button3").innerText= "You pass";
					document.getElementById("button1").removeEventListener("click", e8);
					document.getElementById("button1").addEventListener("click", e9);
					document.getElementById("button2").removeEventListener("click", e8);
					document.getElementById("button2").addEventListener("click", e9);
					document.getElementById("button3").removeEventListener("click", e8);
					document.getElementById("button3").addEventListener("click", e9);
				}
				
				function e9(){
					// change text based on Elmaan's response 
					document.getElementById("button1").innerText= "You give up";
					document.getElementById("button2").innerText= "You cry";
					document.getElementById("button3").innerText= "You run a troubleshooter";
					document.getElementById("button1").removeEventListener("click", e9);
					document.getElementById("button1").addEventListener("click", kingReward);
					document.getElementById("button2").removeEventListener("click", e9);
					document.getElementById("button2").addEventListener("click", kingReward);
					document.getElementById("button3").removeEventListener("click", e9);
					document.getElementById("button3").addEventListener("click", kingReward);
				}
				
				function kingReward(){
					// change text based on Elmaan's response 
					document.getElementById("button1").innerText= "Money!";
					document.getElementById("button2").innerText= "You cry";
					document.getElementById("button3").innerText= "You run a troubleshooter";
					document.getElementById("button1").removeEventListener("click", kingReward);
					document.getElementById("button2").removeEventListener("click", kingReward);
					document.getElementById("button3").removeEventListener("click", kingReward);
				}
				
				
			</script>
      <?php
      }
      ?>
  </body>
</html>
