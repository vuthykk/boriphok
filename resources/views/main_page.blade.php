<style type="text/css">
/* BASIC STYLES */
body {
  margin: 0;
  padding: 0;
  font-family: 'Roboto', sans-serif;
  background-image: url("{{asset('images/breakfast_bg.png')}}");
  background-size: cover;
}

header {
  width: 100%;
}

ul {
  list-style: none;
}

/* NAV BAR */
#nav_bar {
  float: right;
}

#nav_bar li {
  display: inline-block;
  padding: 8px;
}

#nav_bar #sign_in {
  background: #4887ef; 
  margin-right: 25px;
  padding: 7px 15px;
  border-radius: 3px; 
  font-weight: bold;
}

.nav-links {
  color: #404040;
}

a {
  text-decoration: none;
  color: inherit;
}

li.nav-links a:hover {
  text-decoration: underline;
}

#sign_in:hover { 
  box-shadow: 1px 1px 5px #999;
}

#sign_in {
  color: #fff;
}

/* GOOGLE AREA */
.google #google_logo {
  text-align: center;
  display: block;
  margin: 0 auto;
  clear: both;
  padding-top: 175px;
  padding-bottom: 20px;
}

.form {
  text-align: center;
}

#form-search { 
  width: 44%;
  line-height: 50px;
  padding: 20px 10px;
}

.form #form-search {
  padding: 0 15px;
}

.searching {
	position: relative;
    top: 11px;
    right: 52px;
}

.buttons {
  text-align: center;
  padding-top: 10px;
  margin-bottom: 300px;
}
.buttons a {
	margin-right: 15px;
}

/* FOOTER */
footer  {
  background: #f2f2f2;
  border-top: solid 2px #e4e4e4;
/*   position: fixed; */
  bottom: 0;
  padding-bottom: 0;
  width: 100%;
  
}

footer ul li {
  display: inline;
  color: #666666;
  font-size: 14px;
  padding: 13px;
}

footer ul {
  float: left;
  padding: 1px;
}

footer ul a:hover {
  text-decoration: underline;
}

.footer-right {
  float: right;
}

/* MEDIA QUERIES */

@media screen and (max-width: 400px) {
 
 li.nav-links a {
    display: none;
  }
  
 #google_logo {
   padding: 0;
 }
  
 .buttons {
   display: none;
 }
  
 #form-search {
   width: 80%;

 }
  
 footer {
   bottom: 0;
 }
  
 footer ul {
   float: none;
   padding-bottom: 2px;
    
 }
  
 .footer-left {
   text-align: center;
   margin: auto; 
   padding-top: 10px;
    
 }
  
 .footer-right {
   float: none;
   text-align: center;
   
 }
}

@media screen and (max-width: 565px) {
 
  li.nav-links a {
    display: none;
  }
  
  
 #google_logo {
   padding: 0;
 }
  
 .buttons {
   display: none;
 }
  
 #form-search {
   width: 80%;

 }
  
 footer {
/*    bottom: 0;
   postion: absolute; */
   position:absolute;
   bottom:0;
   width:100%;
   height:60px;
 }
  
 footer ul {
   float: none;
   padding-bottom: 2px;
    
 }
  
 .footer-left {
   text-align: center;
   margin: auto; 
   padding-top: 10px;
    
 }
  
 .footer-right {
   float: none;
   text-align: center;
   
 }
}
</style>

<head>
    <title>Boriphok</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  
  <body>
    <header>
      <nav>
        <ul id="nav_bar">
          <li class="nav-links" id="gmail"><a href="#">Sign in</a></li>
          <li class="nav-links"><a href="#">Language</a></li>
        </ul>  
      </nav>  
    </header>  
    
    <!-- GOOGLE IMG -->  
    <div class="google">
      <a href="#" id="google_logo">
        <img src="{{asset('images/logo.png')}}" alt="photo google-logo_zpspkcztsjo.png"/>
      </a>
    </div>
	
    <!-- FORM SEARCH -->  
    <div class="form">  
      <form>
        <label for="form-search"></label>
		<div>
			<input type="text" id="form-search" placeholder="ចូលចិត្តញាំុ...">
			<span class="searching"><a href="#"><img src="{{asset('images/searching.png')}}"/></a></span>
		</div>
      </form>
    </div>  
    
    <!-- BUTTONS -->
    <div class= "buttons"> 
      <a href="#">អាហារពេញនិយម</a>
	  <a href="#">អាហារគួរសាកល្បង</a>
	  <a href="#">អាហារបញ្ចុះតម្លៃ</a>
	  <a href="#">អាហារក្បែរចិញ្ចើមផ្លូវ</a>
	  <a href="#">អាហាររហ័ស</a>
    </div>
      
    <!-- FOOTER -->
    <!-- <footer>
        <ul class="footer-left">
          <li><a href="#">Advertising</a></li>
          <li><a href="#">Business</a></li>
          <li><a href="#">About</a></li> 
        </ul>
        <ul class="footer-right">    
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Settings</a></li>
        </ul>       
    </footer>       -->
  </body>