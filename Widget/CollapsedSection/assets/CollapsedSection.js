
IpWidget_CollapsedSection = function() {
	this.$widgetObject = null;

	this.init = function($widgetObject, data) {
		var item = $widgetObject.find('.masking-button');
		item.click(function() {
			var value = prompt('Enter the value') || 'empty';
			$widgetObject.save({btnLabel: value}, true);
		});
	};
}
