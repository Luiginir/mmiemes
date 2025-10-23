<?php

function generateHeader() {

    return
    <<<HTML

<header>
<!--  Logo  -->
    <div>
        <img src="images/logo.svg" alt="logo">
    </div>
<!--  Nav  -->
    <div class="nav-pc">
        <a></a>
    </div>
    <div class="nav-mobile">
        <i class="fa-solid fa-bars"></i>
    </div>
</header>

HTML;

}




