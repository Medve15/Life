<style type="text/css">

th { font-size: 20px; }
td { font-size: 12px; }




#navi {
margin: 0 auto 0 auto;
padding: 12px 4px;
overflow: hidden;
background: #1a75ff; /* menü háttérszíne */
width: 800px; /* menü szélessége */
}
.navi-link-left {
float: left;
}
.navi-link-left a { /* bal menüpontok */
font-family: Arial;
font-size: 13px;
display: inline;
color: #ffffff; /* menücímek színe */
text-align: center;
padding: 0 16px;
text-decoration: none;
}
.navi-link-left a:hover { /* ha ráviszed az egeret */
color: #ffffff; /* menücímek színe */
background: #0047b3; /* menücímek háttere */
padding: 10px 16px;
text-decoration: none;
}
.navi-link-left .active {
background: #005ce6;
padding: 10px 16px;
}
.navi-link-right {
display: inline;
float: right;
}
.navi-link-right a { /* jobb menüpontok */
font-family: Arial;
font-size: 13px;
display: inline;
color: white;
text-align: center;
padding: 0 16px;
text-decoration: none;
}
.navi-link-right a:hover { /* ha ráviszed az egeret */
color: #ffffff; /* menücímek színe */
background: #0047b3; /* menücímek háttere */
padding: 10px 16px;
text-decoration: none;
}

.myButton {
	-moz-box-shadow:inset 0px 1px 0px 0px #5ba6f0;
	-webkit-box-shadow:inset 0px 1px 0px 0px #5ba6f0;
	box-shadow:inset 0px 1px 0px 0px #5ba6f0;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #57b4e6), color-stop(1, #108ee8));
	background:-moz-linear-gradient(top, #57b4e6 5%, #108ee8 100%);
	background:-webkit-linear-gradient(top, #57b4e6 5%, #108ee8 100%);
	background:-o-linear-gradient(top, #57b4e6 5%, #108ee8 100%);
	background:-ms-linear-gradient(top, #57b4e6 5%, #108ee8 100%);
	background:linear-gradient(to bottom, #57b4e6 5%, #108ee8 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#57b4e6', endColorstr='#108ee8',GradientType=0);
	background-color:#57b4e6;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #206999;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #233d5c;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #108ee8), color-stop(1, #57b4e6));
	background:-moz-linear-gradient(top, #108ee8 5%, #57b4e6 100%);
	background:-webkit-linear-gradient(top, #108ee8 5%, #57b4e6 100%);
	background:-o-linear-gradient(top, #108ee8 5%, #57b4e6 100%);
	background:-ms-linear-gradient(top, #108ee8 5%, #57b4e6 100%);
	background:linear-gradient(to bottom, #108ee8 5%, #57b4e6 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#108ee8', endColorstr='#57b4e6',GradientType=0);
	background-color:#108ee8;
}
.myButton:active {
	position:relative;
	top:1px;
}



/* dropdown */

.dropbtn {
    background-color: #ffffff;
    color: black;
    padding: 2px;
    font-size: 12px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #1a75ff;


 /* Popup container */
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
}

/* The actual popup (appears on top) */
.popup .popuptext {
    visibility: hidden;
    width: 160px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class when clicking on the popup container (hide and show the popup) */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
} 
</style>