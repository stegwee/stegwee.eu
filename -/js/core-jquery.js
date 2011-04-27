/*
	RENAME TO core.js IF THIS PROJECT IS JQUERY-ENABLED
*/
(function($) {
	var HCW = {
		Config : {
			sImgPath : "/-/img/"
			,sHTMLtag : "can-has-js"
		}

		/*
			STOP EDITING HERE
		*/
		,init : function() {
			var c = HCW;
			var p = c.Project;

			$(document).ready(function() {
				p.tagIt();
			});
		}

		/*
			CLIENT-SPECIFIC FUNCTIONS
		*/
		,Project : {
			tagIt : function() {
				var c = HCW;
				$("html").addClass(c.Config.sHTMLtag);
			}
		}
	};

	HCW.init();
})(jQuery);
