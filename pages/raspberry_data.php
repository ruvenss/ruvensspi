<?php
$os=php_uname('s');
$osv=php_uname('r');
$memdata=exec("cat /proc/meminfo");
if (strlen($memdata)>0) {
    $arraymemdata=explode("\r", $memdata);
    if (sizeof($arraymemdata)>0) {
        $arraymemtotal=$arraymemtotal[0];
        $arraymemfree =$arraymemfree[1];
        $splitmemtotal=explode(":", $arraymemtotal);
        $totalmemory=$splitmemtotal[1];
        $totalfree=$splitmemtotal[1];
    }
}

$phpmemory=$phpinfo['PHP Core']['memory_limit'];
?>
<h1>Raspberry <span class="glcolor"><?php echo $os." Kernel ".$osv;?></span></h1>
<p>
Network IP :<span class="glcolor"> <?php echo $_SERVER['SERVER_NAME'];?></span><br>
Public IP :<span class="glcolor"> <?php echo exec('wget -qO- http://ipecho.net/plain ; echo');?></span><br>
Your IP :<span class="glcolor"> <?php echo $_SERVER['REMOTE_ADDR'];?></span><br>
Your software :<span class="glcolor"> <?php echo $_SERVER['HTTP_USER_AGENT'];?></span><br>
USB : <span class="glcolor">
<?php
$usb=trim(exec("ls /dev/sd*"));
if ($usb=="/dev/sda2") {
    echo "1 device plug.";
} else {
    echo "No devices plugged.";
}
?>
</span><br>
</p>
    
<div class="section skills">
    <div class="skill">
        <div class="title">Free memory: <?php echo $phpmemory ?></div>
        <div class="bar">
			<div class="bar-container">

<!-- ======== Edit "width" style for change progress bar ======== -->
            	<div class="progress" style="width: 85%"></div>
			</div>
        </div>
    </div>

    <div class="skill">
        <div class="title">PHP memory</div>
        <div class="bar">
			<div class="bar-container">
            	<div class="progress" style="width: 75%"></div>
			</div>
        </div>
    </div>

    <div class="skill">
        <div class="title">CPU</div>
        <div class="bar">
			<div class="bar-container">
            	<div class="progress" style="width: 90%"></div>
			</div>
        </div>
    </div>

    <div class="skill">
        <div class="title">Disk</div>
        <div class="bar">
			<div class="bar-container">
            	<div class="progress" style="width: 65%"></div>
			</div>
        </div>
    </div>
</div>