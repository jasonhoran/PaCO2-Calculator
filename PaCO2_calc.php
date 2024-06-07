<!DOCTYPE html> 
<html> 

<!-- Based on https://www.geeksforgeeks.org/php-program-to-find-simple-interest/ -->
<!-- Science ref at  https://icm-experimental.springeropen.com/articles/10.1186/s40635-023-00564-w -->

<head> 
    <title>PaCO2 Calculator</title> 
    <base target="_blank">  
</head> 

<style> 
a { 
  color: black; 
  text-decoration: none; 
} 
</style>
  
<body> 
    <form action="" method="post"> 
        <table> 
            <tr> 
                <td><label for="pvco2">PvCO<sub>2</sub>:</label></td> 
                <td><input type="number" id="pvco2" name="pvco2" min="2" max="20" step="0.1"></td>
                <td>kPa</td>  
            </tr> 
            <tr> 
                <td><label for="svo2">SvO<sub>2</sub>:</label></td> 
                <td><input type="number" id="svo2" name="svo2" min="50" max="100" step="1"></td> 
                <td>%</td>  
            </tr>
            <tr><td>&nbsp;</td></tr>  
            <tr> 
                <td><input type="submit" formtarget="_self" value="Calculate"></td> 
            </tr>
        </table> 
    </form> 
<br>
<br>
  
    <?php
    if (isset($_POST['pvco2'])  
        && isset($_POST['svo2'])) { 
            $pvco2 = $_POST['pvco2']; 
            $svo2 = $_POST['svo2']; 
            $paco2 = $pvco2 - (0.03 * (93 - $svo2));
            $paper = '"https://icm-experimental.springeropen.com/articles/10.1186/s40635-023-00564-w"'; 
            echo "For values of PvCO<sub>2</sub> " . $pvco2 . " kPa and SvO<sub>2</sub> " . $svo2 . " % (using the Farkas model)";
            echo "<br>";
            echo "<p><b>PaCO<sub>2</sub> ≈ " . $paco2 . " kPa</b></p>"; 
    	    echo "<br>";
	    echo "<a href=".$paper.">Jörg M Agreement of pCO<sub>2</sub> in venous to arterial blood gas conversion models in undifferentiated emergency patients <i>IntensiveCareMedExp</i> 2023 Nov 21;11(1):80.</a>";
    }
    ?> 
    
</body>
</html>
