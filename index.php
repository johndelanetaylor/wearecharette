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
<div class="home-slider">
    <div class="slide"><img src="img/slide-1.jpg"></div>
    <div class="slide"><img src="img/slide-2.jpg"></div>
    <div class="slide"><img src="img/slide-3.jpg"></div>
    <div class="slide"><img src="img/slide-4.jpg"></div>
</div>
    
<!-- Case Study 1 -->
<section class="study">
    <div class="container">
        <div class="row">
            <div class="five columns">
                <h4>Case Study</h4>
                <h2>City of St. Augustine</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam.</p>
                <a class="button" href="#">View Case Study</a>
            </div>
            <div class="seven columns">
                <div class="skew">
                    <img src="img/projects/default.jpg" />
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.</p>
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
                <h2>Menuat</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.</p>
                <a class="button" href="#">View Case Study</a>
            </div>
            <div class="seven columns">
                <div class="skew">
                    <img src="img/projects/default.jpg" />
                </div>
            </div>
        </div>
    </div> 
</section>

<!-- Standard buttons -->
<div style="text-align: center; width: 100%; margin-top: 40px;">
    <a class="button" href="#">Anchor button</a>
    <button>Button element</button>
    <input type="submit" value="submit input">
    <input type="button" value="button input">
</div>

<!-- Primary buttons -->
<div style="text-align: center; width: 100%;">
    <a class="button button-primary" href="#">Anchor button</a>
    <button class="button-primary">Button element</button>
    <input class="button-primary" type="submit" value="submit input">
    <input class="button-primary" type="button" value="button input">
</div>
    
<!-- Dark buttons -->
<div style="text-align: center; width: 100%; margin-bottom: 40px;">
    <a class="button button-dark" href="#">Anchor button</a>
    <button class="button-dark">Button element</button>
    <input class="button-dark" type="submit" value="submit input">
    <input class="button-dark" type="button" value="button input">
</div>
    
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/footer.php"); ?>

</body>
</html>