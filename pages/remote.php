<?php 
if (file_exists("../remoteurl.txt")) {
    $remoteurl= file_get_contents("../remoteurl.txt");
} else {
    $remoteurl="";
}
?>
<h1>Remote <span class="glcolor">Access</span></h1>
<p>You can set up this raspberry pi to be accessible from your website or webhosting provider, even if you don't have the control of the router where is situated.<br>No need for DMZ, DNS, or port forwarding</p>
<div class="section contacts">
    <form class="remote" action="index.php" method="post">
    <div >       
            <div class="input-icon">
                <i class="icon-home"></i>
                <input type="text" name="s-remoteurl" placeholder="script url" class="url" value=<?php echo '"'.$remoteurl.'"';?>>
            </div>
    </div>
    <div class="mtop10">
        <button name="submit">SAVE</button>    
    </div>
    </form>
</div>