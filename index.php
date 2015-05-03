<!DOCTYPE html>
<html lang='en'>
<?php $pageTitle = 'Home'; ?>
    
<head>
	<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/header.php"); ?>
</head>

<body>
	
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/nav.php"); ?>
    
<!-- Slideshow Placeholder -->
<div style="text-align: center; width: 100%; margin: 20px 0 40px;">
    <img src="img/slideshow.jpg" style="margin:auto; max-width: 100%;" />
</div>

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
                    <img src="img/case-study.jpg" />
                </div>
            </div>
        </div>
    </div> 
</section>
    
<section class="study right">
    <div class="container">
        <div class="row">
            <div class="five columns">
                <h4>Case Study</h4>
                <h2>Natural Sea</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.</p>
                <a class="button" href="#">View Case Study</a>
            </div>
            <div class="seven columns">
                <div class="skew">
                    <img src="img/case-study.jpg" />
                </div>
            </div>
        </div>
    </div> 
</section>
    
<section class="study">
    <div class="container">
        <div class="row">
            <div class="five columns">
                <h4>Case Study</h4>
                <h2>City of St. Augustine</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.</p>
                <a class="button" href="#">View Case Study</a>
            </div>
            <div class="seven columns">
                <div class="skew">
                    <img src="img/case-study.jpg" />
                </div>
            </div>
        </div>
    </div> 
</section>

<!-- Button Styles -->
<div style="text-align: center; width: 100%; margin-top: 40px;">
    <!-- Standard buttons -->
    <a class="button" href="#">Anchor button</a>
    <button>Button element</button>
    <input type="submit" value="submit input">
    <input type="button" value="button input">
</div>
<div style="text-align: center; width: 100%;">
    <!-- Primary buttons -->
    <a class="button button-primary" href="#">Anchor button</a>
    <button class="button-primary">Button element</button>
    <input class="button-primary" type="submit" value="submit input">
    <input class="button-primary" type="button" value="button input">
</div>
<div style="text-align: center; width: 100%; margin-bottom: 40px;">
    <!-- Dark buttons -->
    <a class="button button-dark" href="#">Anchor button</a>
    <button class="button-dark">Button element</button>
    <input class="button-dark" type="submit" value="submit input">
    <input class="button-dark" type="button" value="button input">
</div>
    
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/footer.php"); ?>

</body>
</html>