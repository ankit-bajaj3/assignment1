<?php
$sentence= "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
 
$toArr= explode(' ', $sentence); //exploding it 
asort($toArr); //asort function 

$toString= implode(" ", $toArr); // imploding it


echo '<p>'.$toString.'</p>'; // printing the value