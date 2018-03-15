<?php
    include 'vector.php';
    $ve = new Vector(3,2);
    $ve->updateData(2,1);
    $ve->returnLength();

    $ve2 = new Vector(-2,4);
    $ve->additionVector($ve2);
    $ve->dotproductVector($ve2);
?>