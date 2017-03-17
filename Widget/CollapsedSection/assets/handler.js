var btn = document.querySelector('.masking-button');
var section = document.querySelector('#hiddenSection');
var expanded = false;
	
btn.onclick = function() {
	section.className = 'hidden-section ';
	section.className += expanded ? 
		'hidden-section-minified' :
		'hidden-section-expanded';

	expanded = !expanded;
};

