/*
	Dashboard lib
*/
(function(window){
	// w3-dropdown-hover
	var Dashboard = {
			init : function(){
				var object = document.getElementsByAttribute('gashboard-event');
				for(var i = 0; i < object.length; i++){
					var event = object[i].getAttribute('gashboard-event');
					if(event == 'dropdown-click'){
						new Dashboard.dropdown(object[i], 'click');
					} else if(event == 'tabs'){
						new Dashboard.tabs(object[i]);
					}
				}
			},
			/*
				Dropdown
				@ Event : Dropdown  이 발생할 이벤트
				@ 
			*/
			dropdown : function(obj, ev){
				try{
						var _object = obj.getElementsByAttribute('gashboard-role');
						var menu = obj.getElementsByRole('menu');
						var content = obj.getElementsByRole('content');
						menu.addEventListener(ev, function(v) { 
							var parent = v.path[1];
							var _content = parent.getElementsByRole('content');
							toggleClass(_content, 'w3-show');
						});
						content.addEventListener('click', function(v) {
							console.log(this);
							removeClass(this, 'w3-show');
						});
				}
				catch (e)
				{
					alert(e.number + " : " + e.message);
				}
			},
			/*
				Tabs
				@ (param) prefix :  탭 화면을 감싸는 클래스 
				@ prefix-menu : 탭 메뉴
				@ prefix-content : 탭  화면
			*/
			tabs : function(obj){
				try{
					var menu = obj.getElementsByRole('menu');
					for(var i = 0; i < menu.children.length; i += 1){
						menu.children[i].addEventListener("click", function(e) { 
							var t = this.href.split('#')[1];
							var contents = e.path[2].getElementsByRoles('content');
							contents.forEach(function(v, i){
								removeClass(v, 'w3-hide');
								if(v.getAttribute('id') != t) addClass(v, 'w3-hide');
							});
						});
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
		table : function(className, target, data, cols, colsName, len){
			try{				
				if(typeof len == 'undefined') len = 20;
				var dataTable = [];
				if(typeof cols == 'undefined' || !cols){
						dataTable = data;
						cols = Object.keys(data[0]);
				} else {
					for(var index in data) { 
						var tmp = [];
						var record = data[index];
						for(var col in record){
							var val = record[col];
							if(cols.indexOf(col) > -1)	tmp[col] = val;
						}
					}
					dataTable[index] = tmp;
					if(index >= len) return false;
				}
				if(typeof colsName == 'undefined') colsName = cols;
				var table = document.createElement( "TABLE" ); 
				var tbody = document.createElement("TBODY");
				var thead = document.createElement( "TR" ); 
				colsName.forEach(function(colName, i){
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
				addClass(table, className);
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

	document.getElementsByAttribute = Element.prototype.getElementsByAttribute = function(attr) {
		var nodeList = this.getElementsByTagName('*');
		var nodeArray = [];
		for (var i = 0, elem; elem = nodeList[i]; i++) {
			if ( elem.getAttribute(attr) ) nodeArray.push(elem);
		}
		return nodeArray;
	};	
	Element.prototype.getElementsByRole = function(e){
		var nodeList = this.getElementsByAttribute('gashboard-role');
		for (var i = 0, elem; elem = nodeList[i]; i++) {
			if ( elem.getAttribute('gashboard-role') == e ) return elem; 
		}
	}
	Element.prototype.getElementsByRoles = function(e){
		var nodeList = this.getElementsByAttribute('gashboard-role');
		var nodeArray = [];
		for (var i = 0, elem; elem = nodeList[i]; i++) {
			if ( elem.getAttribute('gashboard-role') == e )  nodeArray.push(elem);
		}
		return nodeArray;
	}

	// Export
	window.Dashboard = Dashboard;
})(window);

