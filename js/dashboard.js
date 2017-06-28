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
		},
			/*
				Table
				@ (param) target :  테이블을 삽입할 ID
				@ (param) data :  데이터
				@ (param) cols : 칼럼 이름(순서대로)
				@ (param) len :  출력할 데이터 크기
			*/
		table : function(target, data, cols, len){
			try{
				if(typeof len == 'undefined') len = 20;
				var dataTable = [];
				if(typeof cols == 'undefined' || !cols){
					dataTable = data;
					cols = Object.keys(data[0]);
				} else {
					data.forEach(function(record, i){
						var tmp = [];
						record.forEach(function(val, col){
							if(cols.indexOf(col) < 0) return;
							else {
								tmp[col] = val;
							}
						});
						dataTable[i] = tmp;
						if(i >= len) return false;
					});
				}
				var table = document.createElement( "TABLE" ); 
				var tbody = document.createElement("TBODY");
				var thead = document.createElement( "TR" ); 
				cols.forEach(function(colName, i){
					var th = document.createElement( "TH" );
					th.innerHTML = colName;
					thead.appendChild(th);
				});
				tbody.appendChild( thead ); 

				dataTable.forEach(function(list, col){
					var tr = document.createElement( "TR" );
					for(var index in list) { 
						var td = document.createElement( "TD" );
						td.innerHTML = list[index];
						tr.appendChild(td);
					}
					tbody.appendChild( tr ); 
				});
				table.appendChild( tbody ); 
				addClass(table, 'w3-table-all');
				document.getElementById(target).append(table);
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

