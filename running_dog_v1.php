// Two man walk towards from $distance. Funny dog runs from one man to another and back until moment of meeting. 
// How many times will the dog turn?

// version 1

<?php

function dogRun($distance, $firstFriendSpeed, $secondFriendSpeed, $dogSpeed, $toFirst = FALSE, $count = 0) {
    if ($distance <= 10) {return $count;}
    if ($toFirst) {
        $time = $distance / ($secondFriendSpeed + $dogSpeed);
    }
    else
    {
        $time = $distance / ($firstFriendSpeed + $dogSpeed);
    }
    
    $distance = $distance - ($firstFriendSpeed + $secondFriendSpeed) * $time;
    echo "count = ".$count."  test = ". 2 * (int) ($count / 2)."\n"; 
    return dogRun($distance, $firstFriendSpeed, $secondFriendSpeed, $dogSpeed, ! $toFirst, $count+1);
}

echo dogRun(100000,1,2,5);

?>  
