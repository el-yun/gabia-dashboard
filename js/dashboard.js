/*
	Dashboard lib
*/
(function(window){
	// w3-dropdown-hover
	var Dashboard = {
			/*
				Dropdown
				@ Event : Dropdown  이 발생할 이벤트
				@ Prefix :  -Click (타겟 클래스) , -Content( Dropdown될 대상 )
			*/
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
									toggleClass(child, 'w3-show');
								}, false);
							}
						}

					}
				}
				catch (e)
				{
					alert(e.number + " : " + e.message);
				}

			},
			/*
				Tab
				@ (param) prefix :  탭 화면을 감싸는 클래스 
				@ prefix-menu : 탭 메뉴
				@ prefix-content : 탭  화면
			*/
			tab : function(prefix){
				try{
					var className = prefix;
					var menuName = prefix + "-menu";
					var contentName = prefix + "-content";
					if(typeof document.getElementsByClassName(className) != 'undefined'){
							var t = document.getElementsByClassName(className);
							for(var i = 0; i < t.length; i += 1){
								var _o = t[i];
								var _m = _o.querySelectorAll("." + menuName + " a");
								_m.forEach(function(o_menu, k){
									o_menu.addEventListener("click", function(e) { 
											var _c = document.getElementById(e.target.href.split("#")[1]);
											_c.parentElement.querySelectorAll("div.dashtab-content:not(.w3-hide)").forEach(function(_t){
												addClass(_t, "w3-hide");
											});
											removeClass(_c, "w3-hide");
									});
								})
							}
					}
			}
			catch(e)
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

