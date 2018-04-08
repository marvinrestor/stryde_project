<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="../css/stryde.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.xx.x/css/uikit.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css"/>
	<!--GoogleFonts-->
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
</head>
<body>
<?php 
include "header.php";
 ?>


<div id="Profile_page_wrap" class="uk-container-large">
	<div class="uk-placeholder" id="profile_page">
	<a href="#offcanvas-slide" class="uk-position-top-right uk-button uk-button-default uk-margin-medium-right uk-margin-medium-top" uk-toggle>	 <span uk-icon="icon: cog"></span></a>
<img src="../images/avatar_img_sample.png" class="uk-position-top-center " id="profile_img"></br>

<h2 class="profile_name_display">Marvin T. Restor</h2>

<ul class="uk-tab-bottom" uk-tab>
    <li class="uk-active"><a href="#">Left</a></li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
</ul>

<div id="offcanvas-slide" uk-offcanvas>
    <div class="uk-offcanvas-bar">

        <ul class="uk-nav uk-nav-default">
            <li class="uk-active"><a href="#">Active</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-header">Header</li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="#">Item</a></li>
        </ul>

    </div>
</div><!--offcanvas-slide-->
</div><!--end of profile_tab-->
	</div><!--end of profile_page-->

</div><!--end of profile page wrap-->





<?php 
include "footer.php";
 ?>
<!--Javascript links-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.xx.x/js/uikit.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js"></script>
</body>
</html>