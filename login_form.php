<?
session_start();

$names = array();

function loginForm(){
    echo'
    <div id="loginform">
    <form action="index.php" method="post">
        <p>Please enter your name to continue:</p>
        <label for="name">Nickname:</label>
        <input type="text" name="name" id="name" />
        <input type="submit" name="enter" id="enter" value="Join" />
    </form>
    </div>
    ';
}

if(isset($_POST['enter'])){
    if($_POST['name'] != ""){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
        array_push($names, $_SESSION['name']);
    }
    else{
        echo '<span class="error">Please type in a name!</span>';
    }
}

function sendNames() {
  global $names;
  return $names;
}
?>
