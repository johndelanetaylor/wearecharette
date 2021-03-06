<!DOCTYPE html>
<html lang='en'>
<?php $pageTitle = 'Our Studio'; ?>
    
<head>
	<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/header.php"); ?>
</head>

<body>
	
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/nav.php"); ?>
    
<!-- Contact Modal -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/modal.php"); ?>

<!-- Intro -->
<section class="dark">
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <h3>About Us</h3>
                <h2>We are inspired by the amazing people we get to work with.</h2>
            </div>
        </div>
    </div> 
</section>

<!-- Method -->
<section class="light">
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <h3>Our Method Is Simple</h3>
                <p>We Are Charette is a studio with experience in uncovering the imperative message and communicating that to the target audience in a way that is clear and attractive. We aspire to create design that not only delivers a message, but opens a visual and emotional dialog between our clients and their audiences.</p>
            </div>
        </div>
    </div> 
</section>
    
<!-- Services -->
<section id="services" class="services">
    <div class="container">
        <div class="row">
            <div class="three columns">
                <img src="img/computers.jpg" />
            </div>
            <div class="six columns">
                <h4>Our Services</h4>
                <h2>Identity<br>Web Design<br>Packaging</h2>
                <h4>What is a Charette?</h4>
                <p>According to Wikipedia, a charette is a collaborative design approach used to solve a problem quickly and comprehensively.</p>
                <p>It's also our last name!</p>
            </div>
            <div class="three columns">
                <img src="img/coffee.jpg" />
            </div>
        </div>
    </div> 
</section>
    
<!-- Process -->
<section id="process" class="process">
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <h3>Our Process</h3>
                <!-- Process 1 -->
                <div class="block">
                    <span class="dropcap">1</span>
                    <h4>FIND THE CORE MESSAGE</h4>
                    <p>Through parallel research, discussion, and exploration, we determine the unique key benefits offered by our client. Who are we? How are we different? What is special about what we’re offering?</p>
                </div>
                <!-- Process 2 -->
                <div class="block">
                    <span class="dropcap">2</span>
                    <h4>KNOW THE AUDIENCE</h4>
                    <p>Using research, intution, discussion and analysis, we determine who it is we are speaking to. Why are we speaking to this group? How can we benefit from communicating with them?</p>
                </div>
                <!-- Process 3 -->
                <div class="block">
                    <span class="dropcap">3</span>
                    <h4>CREATE A DIALOG</h4>
                    <p>Combining the communication objectives with a visual language that speaks to our audience, we create a brand concept that delivers the message in a way that is precise, engaging, and honest.</p>
                </div>
                <!-- Process 4 -->
                <div class="block">
                    <span class="dropcap">4</span>
                    <h4>FINE TUNE</h4>
                    <p>With feedback, discussion, revisions, focus groups and creative problem solving, we dial in our design to make sure it’s on target, clear, and beautiful.</p>
                </div>
            </div>
        </div>
    </div> 
</section>
    
<section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="slider color">
                <div class="slide">
                    <div class="offset-by-two eight columns">
                        <a href="/happy-cup"><img src="img/aaron-levine.jpg" /></a>
                        <h4>"In my experience I have never worked with a team as talented, attentive, and intuitive as Emily and the team at We Are Charette."</h4>
                        <h6><strong>Aaron Levine</strong><br />
                            Happy Cup, Founder &amp; CEO</h6>
                    </div>
                </div>
                <div class="slide">
                    <div class="offset-by-two eight columns">
                        <img src="img/rob-futrell.jpg" />
                        <h4>"We Are Charette has this gift for creating a spectrum of options that capture my unique style and taste. It never felt like we were working - just creating. "</h4>
                        <h6><strong>Rob Futrell</strong><br />
                            Rob Futrell Photography, Owner</h6>
                    </div>
                </div>
                <div class="slide">
                    <div class="offset-by-two eight columns">
                        <img src="img/sandra-swale.jpg" />
                        <h4>"We Are Charette are brand builders, but mostly, they are just a whole lot of fun to work with."</h4>
                        <h6><strong>Sandra Swale</strong><br />
                            Blue Marble Brands, Creative Services Manager</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<!-- <section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="offset-by-two eight columns">
                <a href="/happy-cup"><img src="img/aaron-levine.jpg" /></a>
                <h4>"In my experience I have never worked with a team as talented, attentive, and intuitive as Emily and the team at We Are Charette."</h4>
                <h6><strong>Aaron Levine</strong><br />
                    Happy Cup, Founder &amp; CEO</h6>
            </div>
        </div>
    </div>
</section>-->
    
<!-- Team -->
<section id="team" class="team">
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <h3>We Love Great Company Culture</h3>
                <h4>And Our Team Rocks!</h4>
                <p>
                <div class="item">
                    <span class="name">Jeff Charette</span>
                    <span class="title">Principal</span>
                </div>
                <div class="item">
                    <span class="name">Emily Charette</span>
                    <span class="title">Principal</span>
                </div>
                </p>
                <div class="item">
                    <span class="name">John Taylor</span>
                    <span class="title">Designer</span>
                </div>
                <div class="item">
                    <span class="name">Katie Evans</span>
                    <span class="title">Designer</span>
                </div>
                <div class="item">
                    <span class="name">Seth Mcleod</span>
                    <span class="title">Developer</span>
                </div>
            </div>
        </div>
    </div> 
</section>
    
<!-- Contact -->
<section id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="two columns offset"></div>
            <div class="eight columns">
                <h3>Get In Touch</h3>
                <h4>And Say Hi</h4>
                <?php include($_SERVER['DOCUMENT_ROOT']."/snippets/contact.php"); ?>
            </div>
            <div class="two columns offset"></div>
        </div>
    </div> 
</section>
    
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/footer.php"); ?>

</body>
</html>