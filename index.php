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
                    <li>hard at work</li>
                    <li>charette</li>
                </ul>
            </div>
        </div>
    </div>
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

<!-- Case Study 4 -->
<section class="study right">
    <div class="container">
        <div class="row">
            <div class="five columns">
                <h4>Case Study</h4>
                <h2>Tumaros</h2>
                <p>Tumaro's journey began in Santa Monica, CA in the early 90’s and quickly became the leading brand in the flavored tortilla category.</p>
                <a class="button" href="/tumaros">View Case Study</a>
            </div>
            <div class="seven columns">
                <div class="skew">
                    <img src="img/projects/tumaros.jpg" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Study 5 -->
<section class="study">
    <div class="container">
        <div class="row">
            <div class="five columns">
                <h4>Case Study</h4>
                <h2>Harvest Bay</h2>
                <p>This popular coconut water brand was extending their line to include three new certified organic flavors.</p>
                <a class="button" href="/harvest-bay">View Case Study</a>
            </div>
            <div class="seven columns">
                <div class="skew">
                    <img src="img/projects/harvest-bay.jpg" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Study 6 -->
<section class="study right">
    <div class="container">
        <div class="row">
            <div class="five columns">
                <h4>Case Study</h4>
                <h2>1565 Artisan Coffee</h2>
                <p>When a local coffee company asked us to help them launch an all-new brand of St. Augustine-roasted coffee, we put on our storytelling hats and went to town.</p>
                <a class="button" href="/1565">View Case Study</a>
            </div>
            <div class="seven columns">
                <div class="skew">
                    <img src="img/projects/1565-cover.jpg" />
                </div>
            </div>
        </div>
    </div>
</section>

<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/footer.php"); ?>

</body>
</html>
