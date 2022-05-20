<?php
$monthDays=array('January'=>31,'February'=>28,
                 'March'=>31,'April'=>30,
                 'May'=>31,'June'=>30,
                 'July'=>31,'August'=>31,
                 'September'=>30,'October'=>31,
                 'November'=>30,'December'=>31);
    echo "Number of day in a month"."</br>";
    foreach($monthDays as $key => $days)
    {
        echo $key.":".$days."</br>";
    }
    echo"</br>";
    foreach($monthDays as $key => $thirtyMonth)
    {
        if($thirtyMonth == 30)
        {
            echo $key."=".$thirtyMonth;
            echo"</br>";
        }
    }
?>
