/*
	RENAME TO core.js IF THIS PROJECT IS *NOT* JQUERY-ENABLED
*/
var HCW = {
	Config : {
		sImgPath : "/-/img/",
		sHTMLtag : "can-has-js"
	}

	/*
		STOP EDITING HERE
	*/
	,init : function() {
		var c = HCW;
		var p = c.Project;
		var u = c.Utility;

		if (u.isCompatible()) {
			u.addDOMLoadEvent(function() {
				p.tagIt();
			});
		}
	}

	/*
		CLIENT-SPECIFIC FUNCTIONS
	*/
	,Project : {
		tagIt : function() {
			var c = HCW;
			var u = c.Utility;

			var oHtml = document.getElementsByTagName("html")[0];

			if (oHtml) {
				oHtml.className = u.safeAppend(oHtml.className, c.Config.sHTMLtag);
			}
		}
	}

	/*
		UTILITY FUNCTIONS
	*/
	,Utility : {
		// From http://www.thefutureoftheweb.com/blog/adddomloadevent
		addDOMLoadEvent : (function(){
			// create event function stack
			var load_events = [],
				load_timer,
				script,
				done,
				exec,
				old_onload,
				init = function () {
					done = true;

					// kill the timer
					clearInterval(load_timer);

					// execute each function in the stack in the order they were added
					while (exec = load_events.shift())
						exec();

					if (script) script.onreadystatechange = '';
				};

			return function (func) {
				// if the init function was already ran, just run this function now and stop
				if (done) return func();

				if (!load_events[0]) {
					// for Mozilla/Opera9
					if (document.addEventListener)
						document.addEventListener("DOMContentLoaded", init, false);

					// for Internet Explorer
					/*@cc_on @*/
					/*@if (@_win32)
						document.write("<script id=__ie_onload defer src=//0><\/scr"+"ipt>");
						script = document.getElementById("__ie_onload");
						script.onreadystatechange = function() {
							if (this.readyState == "complete")
								init(); // call the onload handler
						};
					/*@end @*/

					// for Safari
					if (/WebKit/i.test(navigator.userAgent)) { // sniff
						load_timer = setInterval(function() {
							if (/loaded|complete/.test(document.readyState))
								init(); // call the onload handler
						}, 10);
					}

					// for other browsers set the window.onload, but also execute the old window.onload
					old_onload = window.onload;
					window.onload = function() {
						init();
						if (old_onload) old_onload();
					};
				}

				load_events.push(func);
			}
		})()
		,addLoadEvent : function(func) {
			var oldonload = window.onload;
			if (typeof window.onload != 'function') {
				window.onload = func;
			} else {
				window.onload = function() {
					oldonload();
					func();
				}
			}
		}
		,getParent : function (oEl, pTagName) {
			var c = HCW;
			var u = Utility;

			if (oEl == null) {
				return null;
			} else if (oEl.nodeType == 1 && oEl.tagName.toLowerCase() == pTagName.toLowerCase()) { // Gecko bug, supposed to be uppercase
				return oEl;
			} else {
				return c.getParent(oEl.parentNode, pTagName);
			}
		}
		,getRandom : function(iMin, iMax) {
			return (Math.round(Math.random() * (iMax - iMin))) + iMin;
		}
		,isCompatible : function() {
			if (document.getElementById && document.getElementsByTagName && document.createElement) {
				return true;
			} else {
				return false;
			}
		}
		,removeChildren : function(el) {
			if (el.hasChildNodes()) {
				while (el.firstChild) {
					el.removeChild(el.firstChild);
				}
			}
		}
		,safeAppend : function(target, str) {
			target += (target.length > 0 ? " ": "") + str;
			return target;
		}
		,wordFind : function(needle, haystack) {
			return haystack.match(needle + "\\b");
		}
		,wordReplace : function(oldNeedle, newNeedle, haystack) {
			return haystack.replace(new RegExp(oldNeedle + "\\b", "g"), newNeedle);
		}
	}
};

HCW.init();
