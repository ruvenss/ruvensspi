<h1>Raspberry<br><span class="glcolor">Turning off...</span></h1>
<p> 5 4 3 2....<br>
Thank you for using Raspberry PI<br>
Ruvenss style...
</p>
<?php
exec ('sudo shutdown -h now',$output);
echo "Execution ".$output;
?>
