<nav>
    <div class="container">
        <div class="row">
            <div class="three columns">
                <a href="/"><img class="logo" src="img/logo.svg" onerror="this.onerror=null; this.src='logo.png'" alt="We Are Charette" /></a>
            </div>
            <div class="nine columns nav">
                <ul>
                    <li <?php if($pageTitle === 'Home'){echo 'class="active"'; } ?> ><a href="work">Work</a></li>
                    <li <?php if($pageTitle === 'Our Studio'){echo 'class="active"'; } ?> ><a href="studio">Our Studio</a></li>
                    <li <?php if($pageTitle === 'Contact'){echo 'class="active"'; } ?> ><a href="contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>