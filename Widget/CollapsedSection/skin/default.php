<div>
	<button class="masking-button"><?=isset($btnLabel) ? $btnLabel : "Activate" ?></button>
	<div class="hidden-data" style="height: 0; display: none; transition: all .2s ease;">
		<h2>Hidden field</h2>
	</div>
</div>


<script type="text/javascript" defer>
	var btn = document.querySelector('.masking-button');
	console.log('hello');
	var section = document.querySelector('.hidden-data');
	var expanded = false;
		

	btn.onclick = function() {

		if (!expanded) {
			section.style.height = '300px';
			section.style.display = 'block';	
		} else {
			section.style.height = '0';	
			section.style.display = 'none';
		}

		expanded = !expanded;
	};

</script>
