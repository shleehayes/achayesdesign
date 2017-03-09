/*-------------------------------------
| NAVIGATION RULES
-------------------------------------*/
nav {
    height: 3em;
    line-height: 2.3em;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 600;
    display: inline-block;
    width: 100%;
    background: rgba(0,0,0,0.85);
    border: 0;
    font-family: 'Rajdhani', 'Helvetica',arial, sans-serif;
    text-transform: uppercase;
    text-align: center;
/* Next line prevents links from jumping to wrong place in Chrome and Safari*/
    -webkit-transform: translateZ(0);
}

nav.nav_closed {
    overflow: hidden;
}

/*-------------------------------------
| MENU RULES
-------------------------------------*/
a#menu {
    float: right;
    border: 1px solid #E69D88;
    color: white;
    width: 4em;
    margin-top: 5px;
    margin-right: 15px;
    font-weight: 700;
    margin-bottom: 6px;
    text-decoration: none;
}

a#menu:hover {
    background-color: rgba(100, 100, 100, 0.70);
    color: #E69D88;
    font-weight: 700;
}

ul#navlist{
    clear: right;
    list-style: none;
    font-weight: 400;
}

nav.nav_closed ul#navlist {
	display: none;
}

nav.nav_open {
	overflow: visible;
	background-color: rgba(0,0,0,0.85);
}

nav.nav_open ul#navlist {
	display: block;
	background-color: rgba(0,0,0,0.85);
}

nav.nav_open a#menu {
    color: #333;
    background: #999;
}

nav ul#navlist li a {
    display: block;
    width: 100%;
    height: 100%;
    border-top: 1px #ccc solid;
    color: #E69D88;
    text-decoration: none;
}

nav ul#navlist li a:hover {
    background: #000;
    color: #fff;
    text-decoration: none;
}
