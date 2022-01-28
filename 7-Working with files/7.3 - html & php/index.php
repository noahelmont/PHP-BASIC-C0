<?php  
    $leeftijd = 21;
?>
<html>
<head>
</head>
<body>

    <div id="IsMeerderJarig">
        <?php
            if($leeftijd < 18 ){
                echo "<h6>Deze webiste is voor 18+</h6>";
            }
        ?>
    </div>

</body>
</html>