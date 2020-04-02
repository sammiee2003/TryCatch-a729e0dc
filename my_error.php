<?php 
    
function countDown() 
{
    $number = 2;
    try {
        throw new Exception('foo');
    } catch (Exception $e) {
        if ($number >= 0 && $number <= 10) {
                return "er is iets goed gegaan";
        } else {
                return "er is iets fout gegaan";
        }
    }
}
    echo countDown()
?>
    
  
