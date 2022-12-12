// Two man walk towards from $distance. Funny dog runs from one man to another and back until moment of meeting. 
// How many times will the dog turn?

// version 2

<?php

function dogRuns($distance, $firstFriendSpeed, $secondFriendSpeed, $dogSpeed, $count = 0) {
    if ($distance <= 10) {return $count;}
    if ($count === 2 * (int) ($count / 2)) {
        $time = $distance / ($secondFriendSpeed + $dogSpeed);
    }
    else
    {
        $time = $distance / ($firstFriendSpeed + $dogSpeed);
    }
    
    $distance = $distance - ($firstFriendSpeed + $secondFriendSpeed) * $time;
    return dogRuns($distance, $firstFriendSpeed, $secondFriendSpeed, $dogSpeed, $count+1);
}

echo dogRuns(100000,1,2,5);
?>  
