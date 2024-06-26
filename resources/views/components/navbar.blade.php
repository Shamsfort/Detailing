<style>
    body {
        font-family: 'Cabin', sans-serif;
        background: url('YOUR_BACKGROUND_IMAGE_URL') no-repeat center center fixed;
        background-size: cover;
    }
    .navbar {
        background: transparent;
        padding: 1rem 2rem;
    }
    .navbar-brand {
        font-weight: 700;
        font-size: 40px;
        color: #ffffff;
        pointer-events: none;
        transform: translateX(-130%);
        animation: slideInLeft 1s forwards;
    }
    .navbar-toggler {
        border: none;
        color: white;
    }
    .navbar-toggler:focus {
        outline: none;
    }
    .navbar-toggler-icon {
        background-image: none;
    }
    .navbar-toggler .fa-sliders {
        font-size: 24px;
    }
    .navbar-nav .nav-link {
        color: #ffffff;
        font-size: 18px;
        transition: color 0.3s;
    }
    .navbar-nav .nav-link:hover {
        color: #ffc107;
    }
    .navbar-nav .nav-item:last-child .nav-link {
        font-size: 1em;
        margin-right: 0;
    }
    .navbar-collapse {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .navbar-nav.centered {
        position:absolute;
        left: 40%;
        transform: translateX(-50%) translateY(-100%);
        animation: slideInDown 1s forwards;
        
        
        
    }
    .navbar-nav.right {
        margin-left: auto;
    }
    .dropdown-menu {
        right: 0;
        left: auto;
    }
    .dropdown-item:hover {
        background-color: #ffc107;
    }
    
    .button1 {
        height: 3em;
        width: 12em;
        border: none;
        border-radius: 10em;
        background: #016DD9;
        font-size: 17px;
        color: #ffffff;
        font-family: inherit;
        font-weight: 500;
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
    }
    .button1:hover {
        animation: shake3856 0.3s linear infinite both;
    }
    @keyframes shake3856 {
        0% { transform: translate(0); }
        20% { transform: translate(-2px, 2px); }
        40% { transform: translate(-2px, -2px); }
        60% { transform: translate(2px, 2px); }
        80% { transform: translate(2px, -2px); }
        100% { transform: translate(0); }
    }
    
    /* Bottone Learn More */
    button {
        position: relative;
        display: inline-block;
        cursor: pointer;
        outline: none;
        border: 0;
        vertical-align: middle;
        text-decoration: none;
        background: transparent;
        padding: 0;
        font-size: inherit;
        font-family: inherit;
    }
    
    button.learn-more {
        width: 12rem;
        height: auto;
    }
    
    button.learn-more .circle {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        position: relative;
        display: block;
        margin: 0;
        width: 3rem;
        height: 3rem;
        background: #282936;
        border-radius: 1.625rem;
    }
    
    button.learn-more .circle .icon {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto;
        background: #fff;
    }
    
    button.learn-more .circle .icon.arrow {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        left: 0.625rem;
        width: 1.125rem;
        height: 0.125rem;
        background: none;
    }
    
    button.learn-more .circle .icon.arrow::before {
        position: absolute;
        content: "";
        top: -0.29rem;
        right: 0.0625rem;
        width: 0.625rem;
        height: 0.625rem;
        border-top: 0.125rem solid #fff;
        border-right: 0.125rem solid #fff;
        transform: rotate(45deg);
    }
    
    button.learn-more .button-text {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        padding: 0.75rem 0;
        margin: 0 0 0 1.85rem;
        color: #282936;
        font-weight: 700;
        line-height: 1.6;
        text-align: center;
        text-transform: uppercase;
    }
    
    button:hover .circle {
        width: 100%;
    }
    
    button:hover .circle .icon.arrow {
        background: #fff;
        transform: translate(1rem, 0);
    }
    
    button:hover .button-text {
        color: #fff;
    }
    
    
    /* UIVERSE  */
    /* === removing default button style ===*/
    .button2 {
        margin: 0;
        height: auto;
        background: transparent;
        padding: 0;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    /* button styling */
    .button2 {
        --border-right: 6px;
        --text-stroke-color: rgba(255,255,255,0.6);
        --animation-color: #37FF8B;
        --fs-size: 2em;
        letter-spacing: 3px;
        text-decoration: none;
        font-size: var(--fs-size);
        font-family: "Arial";
        position: relative;
        text-transform: uppercase;
        color: transparent;
        -webkit-text-stroke: 1px var(--text-stroke-color);
    }
    /* this is the text, when you hover on button */
    .hover-text {
        position: absolute;
        box-sizing: border-box;
        content: attr(data-text);
        color: var(--animation-color);
        width: 0%;
        inset: 0;
        border-right: var(--border-right) solid var(--animation-color);
        overflow: hidden;
        transition: 0.5s;
        -webkit-text-stroke: 1px var(--animation-color);
    }
    /* hover */
    .button2:hover .hover-text {
        width: 100%;
        filter: drop-shadow(0 0 23px var(--animation-color))
    }
    @keyframes slideInLeft{
        from {
            transform: translateX(-120%);
        }
        to
        {
            transform: translateX(0);
        }
    }
    @keyframes slideInDown
    {
        from {
            transform: translateY(-100%);
        }
        to
        {
            transform: translateY(0);
        }
    }
    @keyframes slideInRight {
        from {
            transform: translateX(100%);
        }
        to {
            transform: translateX(0);
        }
    }
    .dropdown-toggle {
        transform: translateX(100%);
        animation: slideInRight 1s forwards;
    }
    
</style>
<nav class="navbar navbar-expand-lg  fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">SmartWash</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-sliders"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav centered">
                <li class="nav-item">
                    <button class="button2" data-text="Awesome">
                        <span class="actual-text">&nbsp;Chiedi Preventivo&nbsp;</span>
                        <span aria-hidden="true" class="hover-text">&nbsp;Chiedi Preventivo&nbsp;</span>
                    </button>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu
                    </a>
                    <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Azione 1</a>
                        <a class="dropdown-item" href="#">Azione 2</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Altro</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>