<?php
	ipAddCss('../assets/theme.css');
	echo ipHead();
?>


<button class="masking-button"><?=isset($btnLabel) ? $btnLabel : "[click to change label]" ?></button>
<div id="hiddenSection" class="hidden-section hidden-section-minified" >
	<h2>Hidden field</h2>
</div>


<?php 
	ipAddJs('../assets/handler.js');
	echo ipJs();
?>
