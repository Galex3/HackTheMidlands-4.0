 <?php
// echo "yo ma dude";			Yet another test code Lol
 	 $a_counter=0;				//this declares the global variables which are used as the accumulators to store the vote
	 $b_counter=0;				
	 $c_counter=0;
function vote ($choice){		//this function writes the votes to a file, pass in a, b or c depending on what choice the user has
	$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
	$txt = $choice;
	fwrite($myfile, $txt);
	fclose($myfile);
}

function count_votes(){		//use this after the time has ended, it will tally up all of the votes from the file
	$votes = file_get_contents("newfile.txt");
	$length= strlen($votes);
	global $a_counter,$b_counter,$c_counter;
	for ($x = 0; $x < $length; $x++){
		switch($votes[$x]){
			case "a":
				++$a_counter;
				break;
			case "b":
				++$b_counter;
				break;
			case "c":
				++$b_counter;

		}
	}
	fclose($votes);
}

function make_choice(){		//this function will return the most votes (or if there is a tie, random) choice the users picked, will return a string
	if ($a_counter==$b_counter||$a_counter==$c_counter||$c_counter==$b_counter||$a_counter==$b_counter=$c_counter){
		$options= array("a","b","c");
		$randomint = rand(2);
		return($options[randomint]) ;
	}
	switch (max($a_counter,$b_counter,$c_counter)){
		case $a_counter:
			return("a");
			break;
		case $b_counter:
			return("b");
			break;
		case $c_counter:
			return("c");
			break;
		
	}
}

function clear(){						// clears file ready to be used again for the next question
	$file1 = @fopen("newfile.txt", "r+");
	if ($file1 !== false) {
    	ftruncate($file1, 0);
    	fclose($file1);
	}
}
/* ALL CODE HERE IS STRICLY FOR TESTING
vote("a");
echo "\n";
count_votes();
echo $a_counter.$b_counter.$c_counter;
echo (make_choice());
*/
clear();
?> 