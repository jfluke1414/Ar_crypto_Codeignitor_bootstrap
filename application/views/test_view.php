<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	setInterval(function(){
		$("#screen").load('test')
    }, 2000);
});
</script>



<div id="screen"></div>




<?php
$bg_array = array("#CEED9D","#ECED9D","#EDCF9D","#EC9CA7","#ED9DD0","#EE9DE2","#D69DEC","#9E9CEC");
$bg = array_rand($bg_array,1);
?>
<div class="banner" style="background-color:<?php echo $bg_array[$bg];?>;" >
<div class="txt-title">jQuery DIV Auto Load Refresh</div>
<div class="txt-subtitle">This Banner auto loads and refreshes every 2 seconds.</div>
</div>