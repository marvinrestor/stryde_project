<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/stryde.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.xx.x/css/uikit.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />
	<!--GoogleFonts-->
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
</head>
<body>
	<header>
<h1 class="uk-heading-primary"> <a href="index.php">STRYDE</a></h1>
<!--Navigationbar-->
<nav class="uk-navbar-container " uk-navbar="boundary-align: true; align: center;" >
    <div class="uk-navbar-left ">

        <ul class="uk-navbar-nav">
            <li>
                <a href="#">Events</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-header">Header</li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#">Promos</a>
                <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                    <div class="uk-navbar-dropdown-grid uk-child-width-1-2" uk-grid>
                        <div>
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Events</a></li>
                                <li class="uk-nav-header">Header</li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-header">Header</li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="#">Item</a>
                <div class="uk-navbar-dropdown uk-navbar-dropdown-width-3">
                    <div class="uk-navbar-dropdown-grid uk-child-width-1-3" uk-grid>
                        <div>
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-header">Header</li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-header">Header</li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-header">Header</li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

    </div>

    <div class="uk-navbar-right uk-padding">
        
             <a href="#">Signup</a>|<a href="php/Login.php">Login</a>
            
    </div>

</nav><!--End of nav bar-->
</header>
<div uk-slideshow="min-height: 250; max-height: 400; autoplay: true; autoplay-interval: 3000">

    <div class="uk-position-relative uk-visible-toggle uk-light">

        <ul class="uk-slideshow-items">
            <li>
                <img src="images/mountainpic1.jpg" alt="" uk-cover>
            </li>
            <li>
                <img src="images/mountainpic2.jpg" alt="" uk-cover>
            </li>
            <li>
                <img src="images/mountainpic3.jpg" alt="" uk-cover>
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

    </div>

    <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>

</div>
<!--End of slideshow-->

<hr class="uk-divider-icon">

<div class="uk-section uk-section-muted">
    <div class="uk-container">

        <h3>Section</h3>

        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
        </div>

    </div>
</div>
<?php 
include "php/footer.php";
?>
</body>
<!--Javascript links-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.xx.x/js/uikit.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js"></script>
</body>
</html>