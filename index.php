<!DOCTYPE html>
<html lang='en'>
<?php $pageTitle = 'Home'; ?>
    
<head>
	<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/header.php"); ?>
</head>

<body>
	
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/nav.php"); ?>
    
<!-- Contact Modal -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/modal.php"); ?>
    
<!-- Slider Placeholder
<div style="text-align: center; width: 100%; margin: 20px 0 40px;">
    <img src="img/slider.jpg" style="margin:auto; max-width: 100%;" />
</div> -->

<!-- Slider -->
<!-- <div class="home-slider">
    <div class="slide"><img src="img/slide-1.jpg"></div>
    <div class="slide"><img src="img/slide-2.jpg"></div>
    <div class="slide"><img src="img/slide-3.jpg"></div>
    <div class="slide"><img src="img/slide-4.jpg"></div>
</div>-->
    
<!-- We are... -->
<section class="cycle">
    <div class="container">
        <div class="twelve columns">
            <div class="box">
                <h1>we are</h1>
                <ul>
                    <li>designers</li>
                    <li>developers</li>
                    <li>thinkers</li>
                    <li>problem solvers</li>
                    <li>rad</li>
                    <li>charette</li>
                </ul>
            </div>
        </div>
        
  <!--      <div class="six columns left">
            <div class="left">
                <p>we are</p>
            </div>
        </div>
        <div class="six columns right">
            <ul>
                <li id="content-1">designers</li>
                <li id="content-2">developers</li>
                <li id="content-3">thinkers</li>
                <li id="content-4">problem solvers</li>
                <li id="content-5">rad</li>
                <li id="content-6">charette</li>
            </ul>
        </div>
    </div>-->
</section>
    
<!-- Case Study 1 -->
<section class="study">
    <div class="container">
        <div class="row">
            <div class="five columns">
                <h4>Case Study</h4>
                <h2>Happy Cup</h2>
                <p>Happy Cup is the place for homespun food and frozen yogurt made with natural and organic ingredients - the way it should be!</p>
                <a class="button" href="/happy-cup">View Case Study</a>
            </div>
            <div class="seven columns">
                <div class="skew">
                    <img src="img/projects/happy-cup.jpg" />
                </div>
            </div>
        </div>
    </div> 
</section>
    
<!-- Case Study 2 -->
<section class="study right">
    <div class="container">
        <div class="row">
            <div class="five columns">
                <h4>Case Study</h4>
                <h2>Natural Sea</h2>
                <p>Natural Sea is sensible and sustainably harvested seafood that contains no preservatives and is ocean friendly. Take some Natural Sea with you on your next adventure!</p>
                <a class="button" href="/natural-sea">View Case Study</a>
            </div>
            <div class="seven columns">
                <div class="skew">
                    <img src="img/projects/natural-sea.jpg" />
                </div>
            </div>
        </div>
    </div> 
</section>

<!-- Case Study 3 -->
<section class="study">
    <div class="container">
        <div class="row">
            <div class="five columns">
                <h4>Case Study</h4>
                <h2>Mediterranean Organic</h2>
                <p>From orchards that pre-date the Roman Empire come the fantastic fruits and veggies that make Mediterranean Organic.</p>
                <a class="button" href="/mediterranean-organic">View Case Study</a>
            </div>
            <div class="seven columns">
                <div class="skew">
                    <img src="img/projects/med-org.jpg" />
                </div>
            </div>
        </div>
    </div> 
</section>
    
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/footer.php"); ?>

</body>
</html>