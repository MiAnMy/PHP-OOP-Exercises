<?php
    include 'vector.php';
    $ve = new vector(3,2);
    $ve->updateData(2,1);
    $ve->returnLength();

    $ve2 = new vector(-2,4);
    $ve->additionVector($ve2);
    $ve->dotproductVector($ve2);
?>