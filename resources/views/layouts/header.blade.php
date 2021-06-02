<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">dddd</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('index') }}"><span>XRTK </span>attendance system</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
	
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
			<div style="width: 100%; margin: 20px; margin-left: 40px">
				<div class="row">
					<div class="col-md-2"><img style="border-radius: 50%" width="50" src="https://aui.atlassian.com/aui/8.6/docs/images/avatar-person.svg"></div>
					<div class="col-md-7"><div style="margin: 10px; font-size: 20px">{{ Auth::user()->name }}</div></div>
				</div>
			</div>
		<ul class="nav menu">
			<li><a href="{{ url('index') }}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Головна</a></li>
			<li><a href="{{ url('home') }}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Профіль</a></li>
			<li><a href="{{ url('grades') }}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Oцінки</a></li>
            <li><a href="{{ url('report') }}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Звіти</a></li>
			<li role="presentation" class="divider"></li>
			<li>
				<a href="{{ route('logout') }}"
			   		onclick="event.preventDefault();
			    	document.getElementById('logout-form').submit();"> <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>Вийти из системи
			    </a>			  
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			    @csrf
				</form>
			</li>

		</ul>

	</div><!--/.sidebar-->			
                                                                                    
                                               
<style type="text/css">
    /*
Lumino Admin Bootstrap Template
Version 1.0
*/


/*Global Styles*/

body {
    background: #f1f4f7;
    padding-top: 50px;
    color: #5f6468;
}

p {
    color: #777;
}

a, a:hover, a:focus {
    color: #30a5ff;
}

h1, h2, h3, h4, h5, h6 {
    color: #5f6468;
}

h1 {
    font-weight: 300;
    font-size: 40px;
}

h2 {
    font-weight: 300;
    margin-bottom: 20px;
}

h3, h4 {
    font-weight: 300;
}

.large {
    font-size: 2em;
}

.text-muted {
    color: #9fadbb;
}

.color-gray { color: #5f6468; }
.color-blue { color: #30a5ff; }
.color-teal { color: #1ebfae; }
.color-orange { color: #ffb53e; }
.color-red { color: #f9243f; }

.bg-primary .glyphicon-remove { color: #5f6468;}
.bg-primary .glyphicon-remove:hover { color: #ef4040;}

.no-padding {
    padding: 0; margin: 0;
}

.glyphicon-xl {
    font-size: 6em;
}

.glyphicon-l {
    font-size: 3em;
}

.glyphicon-m {
    font-size: 1.5em;
}

.glyphicon-s {
    font-size: 0.75em;
}

.form-control {
    border: 1px solid #eee;
    box-shadow: none;
}

.form-control:focus {
    border: 1px solid #30a5ff;
    outline: 0;
    box-shadow: inset 0px 0px 0px 1px #30a5ff;
}

.navbar-header .navbar-brand {
    color: #fff;
    font-size: 16px;
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: 2px;
}

.navbar-header .navbar-brand span {
    color: #30a5ff;
}

/*Buttons*/

a.btn:hover,
button:hover {
    opacity: 0.8;
}

a.btn:active,
button:active {
    box-shadow: inset 0px 0px 500px rgba(0,0,0,.1);
    opacity: 1;
}

.btn-default,
.btn-default:hover,
.btn-default:focus,
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default,
.btn-default.disabled,
.btn-default[disabled],
fieldset[disabled] .btn-default,
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled:active,
.btn-default[disabled]:active,
fieldset[disabled] .btn-default:active,
.btn-default.disabled.active,
.btn-default[disabled].active,
fieldset[disabled] .btn-default.active {
    background-color: #e9ecf2;
    border-color: #e9ecf2;
    color: #1b3548;
}

.btn-primary,
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary,
.btn-primary.disabled,
.btn-primary[disabled],
fieldset[disabled] .btn-primary,
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled:active,
.btn-primary[disabled]:active,
fieldset[disabled] .btn-primary:active,
.btn-primary.disabled.active,
.btn-primary[disabled].active,
fieldset[disabled] .btn-primary.active {
    background-color: #30a5ff;
    border-color: #30a5ff;
}

.btn-success,
.btn-success:hover,
.btn-success:focus,
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success,
.btn-success.disabled,
.btn-success[disabled],
fieldset[disabled] .btn-success,
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled:active,
.btn-success[disabled]:active,
fieldset[disabled] .btn-success:active,
.btn-success.disabled.active,
.btn-success[disabled].active,
fieldset[disabled] .btn-success.active {
    background-color: #8ad919;
    border-color: #8ad919;
}

.btn-warning,
.btn-warning:hover,
.btn-warning:focus,
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning,
.btn-warning.disabled,
.btn-warning[disabled],
fieldset[disabled] .btn-warning,
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled:active,
.btn-warning[disabled]:active,
fieldset[disabled] .btn-warning:active,
.btn-warning.disabled.active,
.btn-warning[disabled].active,
fieldset[disabled] .btn-warning.active {
    background-color: #ffb53e;
    border-color: #ffb53e;
}

.btn-danger,
.btn-danger:hover,
.btn-danger:focus,
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger,
.btn-danger.disabled,
.btn-danger[disabled],
fieldset[disabled] .btn-danger,
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled:active,
.btn-danger[disabled]:active,
fieldset[disabled] .btn-danger:active,
.btn-danger.disabled.active,
.btn-danger[disabled].active,
fieldset[disabled] .btn-danger.active {
    background-color: #f9243f;
    border-color: #f9243f;
}

/*Backgrounds*/

.bg-primary {
    color: #1b3548;
    background-color: #e9ecf2;
}
a.bg-primary:hover {
    background-color: #e9ecf2;
}
.bg-success {
    color: #fff;
    background-color: #8ad919;
}
a.bg-success:hover {
    background-color: #8ad919;
}
.bg-success a {
    color: rgba(255, 255, 255, .75);
}
.bg-info {
    color: #fff;
    background-color: #30a5ff;
}
a.bg-info:hover {
    background-color: #30a5ff;
}
.bg-info a {
    color: rgba(255, 255, 255, .75);
}
.bg-warning {
    color: #fff;
    background-color: #ffb53e;
}
a.bg-warning:hover {
    background-color: #ffb53e;
}
.bg-warning a {
    color: rgba(255, 255, 255, .75);
}
.bg-danger {
    color: #fff;
    background-color: #f9243f;
}
a.bg-danger:hover {
    background-color: #f9243f;
}
.bg-danger a {
    color: rgba(255, 255, 255, .75);
}

/*Panels*/

.panel {
    border: 0;
}

.panel-heading {
    font-size: 18px;
    font-weight: 300;
    letter-spacing: 0.025em;
    height: 66px;
    line-height: 45px;
}

.panel-default .panel-heading {
    background: #fff;
    border-bottom: 1px solid #eee;
    color: #5f6468;
}

.panel-footer {
    background: #fff;
    border-top: 1px solid #eee;
}

.panel-widget {
    padding: 0;
    position: relative;
}

.panel-widget .panel-footer {
    border: 0;
    text-align: center;
}

.panel-footer .input-group {
    padding: 0px;
    margin: 0 -5px;
}

.panel-footer .input-group-btn:last-child>.btn, 
.panel-footer .input-group-btn:last-child>.btn-group {
    margin: 0;
}

.panel-widget .panel-footer a {
    color: #999;
}

.panel-widget .panel-footer a:hover {
    color: #666;
    text-decoration: none;
}

.panel-blue { background: #30a5ff; color: #fff; }
.panel-teal { background: #1ebfae; color: #fff; }
.panel-orange { background: #ffb53e; color: #fff; }
.panel-red { background: #f9243f; color: #fff; }

.panel-blue .panel-body p,
.panel-teal .panel-body p,
.panel-orange .panel-body p,
.panel-red .panel-body p { 
    color: #fff; 
    color: rgba(255, 255, 255, .8);
}

.panel-blue .panel-heading,
.panel-teal .panel-heading,
.panel-orange .panel-heading,
.panel-red .panel-heading {
    border-bottom: 1px solid rgba(255, 255, 255, .2);
}

.panel-blue .text-muted,
.panel-teal .text-muted,
.panel-orange .text-muted,
.panel-red .text-muted { 
    color: rgba(255, 255, 255, .5); 
}

.dark-overlay {
    background: rgba(0, 0, 0, .05);
    text-align: center;
}

.widget-left {
    height: 80px;
    padding-top: 15px;
    text-align: center;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}

.widget-right {
    text-align: left;
    line-height: 1.6em;
    margin: 0px;
    padding: 20px;
    height: 80px;
    color: #999;
    font-weight: 300;
    background: #fff;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}

@media (max-width: 768px) {
    .widget-right {
    width: 100%;
    margin: 0;
    text-align: center;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
    }
}

@media (max-width: 768px) {
    .widget-left {
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
    }
}

.widget-right .text-muted {
    color: #9fadbb;
}
.widget-right .large {
    color: #5f6468;
}

.panel-blue .widget-left { background: #30a5ff; color: #fff; }
.panel-teal .widget-left { background: #1ebfae; color: #fff; }
.panel-orange .widget-left { background: #ffb53e; color: #fff; }
.panel-red .widget-left { background: #f9243f; color: #fff; }

.panel-widget {
    background: #fff;
}

/*Jumbotron*/

.jumbotron {
    background: #fff;
    border-bottom: 1px solid #eee;
    color: #5f6468;
}

/*Tabs*/

.panel .tabs {
    margin: 0;
    padding: 0;
}

.nav-tabs {
    background: #e9ecf2;
    border: 0;
}

.nav-tabs li a:hover {
    background: #fff;
}

.nav-tabs li a,
.nav-tabs li a:hover,
.nav-tabs li.active a,
.nav-tabs li.active a:hover {
    border: 0;
    padding: 15px 20px;
}

.nav-pills {
    padding: 15px;
    padding-bottom: 0;
}

.nav-pills li a,
.nav-pills li a:hover,
.nav-pills li.active a,
.nav-pills li.active a:hover {
    border: 0;
    padding: 7px 15px;
}

.nav-pills li.active a,
.nav-pills li.active a:hover {
    background: #30a5ff;
}

.tab-content {
    padding: 15px;
}


/*Navbar*/

.navbar {
    border: 0;
}

.navbar input {
    border: 0;
    background: #444;
    color: #fff;
}

.navbar input:focus {
    color: #fff;
    background: #555;
    border: 1px solid #30a5ff;
    outline: 0;
    box-shadow: inset 0px 0px 0px 1px #30a5ff;
}

.user-menu {
    display: inline-block;
    margin-top: 14px;
    margin-right: 10px;
    float: right;
    list-style: none;
    padding: 0;
}

.user-menu a {
    color: #fff;
}

.user-menu a:hover, .user-menu a:focus {
    text-decoration: none;
}

/* Sidebar */

.sidebar {
    display: block;
    background-color: #fff;
    padding: 0;
    display: none;
}

.sidebar form {
    padding: 20px 15px 5px 15px;
    border-bottom: 1px solid #eee;
    margin-bottom: 20px;
}

@media (min-width: 768px) {
    .sidebar {
        display: block;
        position: fixed;
        top: 50px;
        bottom: 0;
        left: 0;
        z-index: 1000;
        display: block;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
        overflow-y: auto; 
        background-color: #fff;
        box-shadow: 1px 0px 10px rgba(0, 0, 0, .05);
    }
    .navbar-header {
        width: 100%;
    }
}

.sidebar ul.nav a:hover, 
.sidebar ul.nav li.parent ul li a:hover {
    text-decoration: none;
    background-color: #e9ecf2;
}

.sidebar ul.nav .active a, .sidebar ul.nav li.parent a.active,
.sidebar ul.nav .active > a:hover, .sidebar ul.nav li.parent a.active:hover,
.sidebar ul.nav .active > a:focus, .sidebar ul.nav li.parent a.active:focus {
    color: #fff;
    background-color: #30a5ff;
}*/

.sidebar ul.nav ul,
.sidebar ul.nav ul li {
    list-style: none;
    list-style-type: none;
}

.sidebar ul.nav ul.children {
    width: auto;
    padding: 0;
    margin: 0;
    background: #f9f9f9;
}

.sidebar ul.nav ul.children li a {
    height: 40px;
    background: #f9f9f9;
    color: #30a5ff!important;
}

.sidebar ul.nav li.current a {
    background-color: #30a5ff;
    color: #fff!important;
}

.sidebar ul.nav li.parent ul li a {
    border: none;
    display:block;
    padding-left: 30px;
    line-height: 40px;
}


.sidebar span.glyphicon {
    margin-right: 10px;
}

.sidebar ul.nav li.divider {
    border-bottom: 1px solid #eee;
    margin: 20px 0;
}

.sidebar .attribution {
    position: absolute;
    bottom: 0px;
    width: 100%;
    padding: 15px;
    text-align: center;
    border-top: 1px solid #eee;
    font-size: 12px;
}

/*Breadcrumbs*/

.breadcrumb {
    border-radius: 0;
    padding: 10px 15px;
    background: #e9ecf2;
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    margin: 0 ;
}

h1.page-header {
    margin-top: 30px;
    border-bottom: 0;
}

/*Charts*/

.main-chart {
    background: #fff;
}

.easypiechart-panel {
    text-align: center;
    padding: 1px 0;
    margin-bottom: 20px;
}

.placeholder h2 {
    margin-bottom: 0px;
}

.donut {
    width: 100%;
}

.easypiechart {
    position: relative;
    text-align: center;
    width: 120px;
    height: 120px;
    margin: 20px auto 10px auto;
}

.easypiechart .percent {
    display: block;
    position: absolute;
    font-size: 26px;
    top: 38px;
    width: 120px;
}

#easypiechart-blue .percent { color: #30a5ff;}
#easypiechart-teal .percent { color: #1ebfae;}
#easypiechart-orange .percent { color: #ffb53e;}
#easypiechart-red .percent { color: #ef4040;}

/*Calendar Widget*/

#calendar, .datepicker-inline {
    width: 100%;
}

#calendar table {
    width: 100%;
}

.datepicker table tr td.old,
.datepicker table tr td.new {
    color: rgba(255, 255, 255, .50);
}

.datepicker table tr td.active,
.datepicker table tr td.active:hover,
.datepicker table tr td.active.disabled,
.datepicker table tr td.active.disabled:hover,
.datepicker table tr td.active:hover,
.datepicker table tr td.active:hover:hover,
.datepicker table tr td.active.disabled:hover,
.datepicker table tr td.active.disabled:hover:hover,
.datepicker table tr td.active:focus,
.datepicker table tr td.active:hover:focus,
.datepicker table tr td.active.disabled:focus,
.datepicker table tr td.active.disabled:hover:focus,
.datepicker table tr td.active:active,
.datepicker table tr td.active:hover:active,
.datepicker table tr td.active.disabled:active,
.datepicker table tr td.active.disabled:hover:active,
.datepicker table tr td.active.active,
.datepicker table tr td.active:hover.active,
.datepicker table tr td.active.disabled.active,
.datepicker table tr td.active.disabled:hover.active,
.open .dropdown-toggle.datepicker table tr td.active,
.open .dropdown-toggle.datepicker table tr td.active:hover,
.open .dropdown-toggle.datepicker table tr td.active.disabled,
.open .dropdown-toggle.datepicker table tr td.active.disabled:hover {
    color: #ffffff;
    background-color: rgba(0, 0, 0, .5);
    border-color: #285e8e;
}

.datepicker table tr td span:hover,
.datepicker thead tr:first-child th:hover,
.datepicker tfoot tr th:hover,
.datepicker table tr td.day:hover,
.datepicker table tr td.day.focused {
    background: rgba(0, 0, 0, 0.25);
}

.panel-heading .glyphicon {
    margin-right: 10px;
}

/*Todo List Widget*/

.todo-list-item .glyphicon { 
    margin-right:5px; 
    color: #9fadbb; 
}

.todo-list-item .glyphicon:hover { 
    margin-right:5px; 
    color: #1b3548; 
}

.todo-list { 
    padding: 0;
    margin: -15px;
    background: #fff;
    color: #5f6468;
}

#checkbox {
    margin: 0;
}

.todo-list .checkbox { 
    display:inline-block; 
    margin: 0px;
}

.panel-body input[type=checkbox]:checked + label { 
    text-decoration: line-through;
    color: #777; 
}

.todo-list-item {
    list-style: none;
    line-height: 0.9;
    padding: 14px 15px 8px 15px;
}

.todo-list-item:hover, a.todo-list-item:focus {
    text-decoration: none;
    background-color: #f6f6f6;
}

.todo-list-item .trash .glyph:hover {
    color: #ef4040;
}


/*Chat Widget*/

.chat ul {
    list-style: none;
    margin: -15px;
    padding: 15px;
}

.chat ul li {
    margin-bottom: 10px;
    padding: 15px 5px;
    border-bottom: 1px solid #eee;
}

.chat ul li.left .chat-body { margin-left: 100px;}
.chat ul li.right .chat-body { margin-right: 100px;}

.chat ul li .chat-body p {
    margin: 0;
}

.chat ul .glyphicon {
    margin-right: 5px;
}

.chat .panel-body {
    overflow-y: scroll;
    height: 300px;
}

.chat-body small {
    margin-left: 5px;
}

/*Tables*/
.table {
    background: #fff;
}

.fixed-table-container {
    border: 1px solid #eee;
}

.fixed-table-container thead th {
    background: #f7f7f8;
    border-color: #ddd;
    color: #5f6468;
    font-weight: 300;
    font-size: 16px;
}

.fixed-table-container tbody td {
    border: 1px solid #eee;
}

.fixed-table-container tbody td:last-child {
    border-right: none;
}

.table>thead>tr>th {
    border-bottom: 1px solid #e6e7e8;
    vertical-align: middle;
    height: 50px;
}

.fixed-table-pagination .pagination {
    margin-top: 10px;
    margin-bottom: 0px;
}
.fixed-table-pagination .pagination-detail {
    margin-top: 20px;
}

/*Icons*/


.sidebar .glyph, .user-menu .glyph {
    height: 16px;
    width: 16px;
    margin: 0 10px 0 0;
    stroke-width: 3px;
}

.user-menu .glyph {
    stroke-width: 4px;
}

.breadcrumb .glyph {
    height: 14px;
    width: 14px;
    margin: -2px 0 0 0;
    stroke-width: 4px;
}

.alert .glyph, .panel-heading .glyph {
    width: 26px;
    height: 26px;
    margin: 0 10px 0 0;
    stroke-width: 2px;
}

.panel-widget .glyph {
    stroke-width: 2px;
}

.todo-list .glyph {
    width: 14px;
    height: 14px;
    stroke-width: 4px;
    color: #999;
}

.glyph.table {
    background: none;
    border: none;
}

/*Icon Grid*/

.icon-grid div {
    border: 1px solid #ddd;
    margin: 0 0 -1px -1px;
    text-align: center;
    padding: 10px 0 20px 0;
}

.icon-grid svg {
    width: 35%;
    display: block;
    margin: 0 auto;
}

.icon-grid h4 {
    display: none;
}

.icon-grid pre {
    margin: 10px 10px -10px 10px;
    border-radius: 0;
    font-size: 10px;
    border-color: #ddd;
    height: 65px;
    overflow: scroll;
}










</style>