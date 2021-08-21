<style>
html, body {
	margin:0;
	height:100%;
}

.companyName {
	font-size:80px;
	color:#363636;
	text-align:center;
	margin-top: 2%;
	font-weight: bold;
}

/* Top navigation used */
.topnav {
	margin-top: 2%;
	margin-bottom: 2%;
	overflow: hidden;
	background-color: #DBF6E9;
	padding:100;
    width: 100%;
}

.topnav a {
	float: left;
	color: #31326F;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
	font-size: 17px;
}

/* Topnav section will be highlighted when cursor touches it*/
.topnav a:hover, .dropdown:hover, .dropbtn:hover, .dropdown-content a:hover{
	background-color: #9FD3C7;
	color: white;
}

/* Active is for the page where we currently is */
.topnav a.active {
	background-color: #3F3F44;
	color: white;
}

.dropdown {
    float: right;
    margin-right: 3%;
    overflow: hidden;
}

.dropbtn {
    font-family: "Times New Roman", Times, serif;
	font-size: 17px;
    padding: 14px 16px;
    background-color: #DBF6E9;
    color: black;
}

/* The design for dropdown box content */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 150px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    display: block;
    text-align: left;
}

.show {
    display: block;
}

.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    padding: 2%;
    background-color: #3F3F44;
    color: white;
    text-align: center;
}
</style>
