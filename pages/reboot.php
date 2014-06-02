<h1>Raspberry<br><span class="glcolor">Rebooting...</span></h1>
<p>Raspberry PI Will be back after a short time<br>
Thank you for your patiente.
</p>
<?php
exec ('sudo reboot',$output);
echo "Execution ";
print_r($output);
?>
