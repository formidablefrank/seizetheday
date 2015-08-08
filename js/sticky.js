
/* sticky.js
 * ---------
 *   Handles automatically changing the classes of top menus based on scroll position.
 */

(function() {
	$(function(){
		$(".sticky.menu").visibility({
			once: false,
			continuous: true,
			onPassing: function(values) {
				if (values.pixelsPassed < 10) {
					$(".ui.sticky.menu").addClass("ontop");
				} else {
					$(".ui.sticky.menu").removeClass("ontop");
				}
			}
		});
	});
})();