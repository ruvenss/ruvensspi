<?php
$dir = '../slaves';
$berries = scandir($dir);
?>
<h1><?php echo sizeof($berries)-2?> Raspberries<span class="glcolor"> Slaves hooked</span></h1>
<p>
<div class="CSSTableGenerator">
<table width="100%" >
<tr>
<td>CPU Serial Number</td><td>Public IP</td><td>Local IP</td>
</tr>
<?php
if (sizeof($berries )>0) {
	for ($i=0; $i < sizeof($berries); $i++) { 
		if ($berries[$i]=="." or $berries[$i]=="..") {
		} else {
			$barray=explode(".", $berries[$i]);
			$medata = explode("\n", file_get_contents($dir."/".$berries[$i]));
			echo "<tr>";
			echo "	<td>".strtoupper($barray[0]).'</td><td>'.$medata[2].'</td><td>'.$medata[1].'</td>';
			echo "</tr>";
		}
	}
}
?>
</table>
</div>
</p>
