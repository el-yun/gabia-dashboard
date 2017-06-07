/*
	Dashboard lib
*/
(function(window){
	// w3-dropdown-hover
	var Dashboard = {
		dropdown : function(prefix, event){
			try{
				if(event == "click"){
					var className = prefix + "-click";
					var childName = prefix + "-content";
					if(typeof document.getElementsByClassName(className) != 'undefined'){
						var t = document.getElementsByClassName(className);
						for(var i = 0; i < t.length; i += 1){
							var _object = t[i];
							_object.addEventListener("click", function(i, v) { 
								var child = _object.querySelector('.' + childName);
								toggleClass(child, 'show');
							}, false);
						}
					}

				}
			}
			catch (e)
			{
				alert(e.number + " : " + e.message);
			}

		}
	}


	function addClass(element, className) { element.className += " " + className; };
	function removeClass(element, className) { var check = new RegExp("(\\s|^)" + className + "(\\s|$)"); element.className = element.className.replace(check, " ").trim(); };
	function toggleClass(element, className) { var check = new RegExp("(\\s|^)" + className + "(\\s|$)"); if(check.test(element.className)){ element.className = element.className.replace(check, " ").trim(); } else { element.className += " " + className; } };
	// Export
	window.Dashboard = Dashboard;
})(window);

