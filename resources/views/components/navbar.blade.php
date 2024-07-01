<style>
    body {
        font-family: 'Cabin', sans-serif;
        background: url('YOUR_BACKGROUND_IMAGE_URL') no-repeat center center fixed;
        background-size: cover;
        
    }
    .navbar {
        position: absolute;
        margin: 0;
        padding: 0;
        background: transparent;
        padding: 1rem 2rem;
    }
    .navbar-brand {
        font-weight: 700;
        font-size: 40px;
        color: whitesmoke;
        pointer-events: none;
        transform: translateX(-130%);
        animation: slideInLeft 2s forwards;
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
        animation: slideInDown 2s forwards;
        
        
        
    }
    .navbar-nav.right {
        margin-left: auto;
        size: 20px;
        
    }
    .dropdown-menu {
        top: 100%;
        left: -4rem!important;
    }
    
    div.dropdown-menu {
        top: 100%; /* Position the dropdown below the button */
        left: -4rem!important; /* Adjust as needed */
        backdrop-filter: blur(8px); /* Apply blur effect to backdrop */
        background-color: rgba(95, 95, 171, 0.7); /* Semi-transparent background color */
        border: none;
        border-radius: 10px; /* Optional: Rounded corners for dropdown */
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2); /* Optional: Box shadow for dropdown */
        transition: backdrop-filter 0.3s ease, background-color 0.3s ease; /* Smooth transition */
    }
    
    .dropdown-item {
        background-color: transparent; /* Transparent background for items */
        color: #ffffff; /* Text color */
        font-size: 18px;
        transition: background-color 0.3s ease, color 0.3s ease; /* Smooth transition */
        padding: 0.5rem 1rem;
        border-radius: 0;
        text-transform: capitalize;
        font-weight: 400;
        letter-spacing: 1px;
    }
    
    .dropdown-item:hover {
        background-color: rgba(44, 44, 84, 0.9); /* Darker background color on hover */
    }
    /*Bottone personalizzato */
    
    .buttonmod {
        position: relative;
        padding: 10px 22px;
        border-radius: 6px;
        border: none;
        color: #fff;
        cursor: pointer;
        background-color: #7d2ae8;
        transition: all 0.2s ease;
    }
    
    .buttonmod:active {
        transform: scale(0.96);
    }
    
    .buttonmod:before,
    .buttonmod:after {
        position: absolute;
        content: "";
        width: 150%;
        left: 50%;
        height: 100%;
        transform: translateX(-50%);
        z-index: -1000;
        background-repeat: no-repeat;
    }
    
    .buttonmod:hover:before {
        top: -70%;
        background-image: radial-gradient(circle, #7d2ae8 20%, transparent 20%),
        radial-gradient(circle, transparent 20%, #7d2ae8 20%, transparent 30%),
        radial-gradient(circle, #7d2ae8 20%, transparent 20%),
        radial-gradient(circle, #7d2ae8 20%, transparent 20%),
        radial-gradient(circle, transparent 10%, #7d2ae8 15%, transparent 20%),
        radial-gradient(circle, #7d2ae8 20%, transparent 20%),
        radial-gradient(circle, #7d2ae8 20%, transparent 20%),
        radial-gradient(circle, #7d2ae8 20%, transparent 20%),
        radial-gradient(circle, #7d2ae8 20%, transparent 20%);
        background-size: 10% 10%, 20% 20%, 15% 15%, 20% 20%, 18% 18%, 10% 10%, 15% 15%,
        10% 10%, 18% 18%;
        background-position: 50% 120%;
        animation: greentopBubbles 0.6s ease;
    }
    
    @keyframes greentopBubbles {
        0% {
            background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%,
            40% 90%, 55% 90%, 70% 90%;
        }
        
        50% {
            background-position: 0% 80%, 0% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%,
            50% 50%, 65% 20%, 90% 30%;
        }
        
        100% {
            background-position: 0% 70%, 0% 10%, 10% 30%, 20% -10%, 30% 20%, 22% 40%,
            50% 40%, 65% 10%, 90% 20%;
            background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
        }
    }
    
    .buttonmod:hover::after {
        bottom: -70%;
        background-image: radial-gradient(circle, #7d2ae8 20%, transparent 20%),
        radial-gradient(circle, #7d2ae8 20%, transparent 20%),
        radial-gradient(circle, transparent 10%, #7d2ae8 15%, transparent 20%),
        radial-gradient(circle, #7d2ae8 20%, transparent 20%),
        radial-gradient(circle, #7d2ae8 20%, transparent 20%),
        radial-gradient(circle, #7d2ae8 20%, transparent 20%),
        radial-gradient(circle, #7d2ae8 20%, transparent 20%);
        background-size: 15% 15%, 20% 20%, 18% 18%, 20% 20%, 15% 15%, 20% 20%, 18% 18%;
        background-position: 50% 0%;
        animation: greenbottomBubbles 0.6s ease;
    }
    
    @keyframes greenbottomBubbles {
        0% {
            background-position: 10% -10%, 30% 10%, 55% -10%, 70% -10%, 85% -10%,
            70% -10%, 70% 0%;
        }
        
        50% {
            background-position: 0% 80%, 20% 80%, 45% 60%, 60% 100%, 75% 70%, 95% 60%,
            105% 0%;
        }
        
        100% {
            background-position: 0% 90%, 20% 90%, 45% 70%, 60% 110%, 75% 80%, 95% 70%,
            110% 10%;
            background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
        }
    }
    /*Bottone personalizzato */
    
    
    

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
        animation: slideInRight 2s forwards;
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
                    <a class="button2" data-text="Awesome" href="{{route('preventivo')}}">
                        <span class="actual-text">&nbsp;Chiedi Preventivo&nbsp;</span>
                        <span aria-hidden="true" class="hover-text">&nbsp;Chiedi Preventivo&nbsp;</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <button class="buttonmod">
                            Menu
                        </button>
                    </a>
                    <div class="dropdown-menu text-center " aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-white" href="#">Contattaci</a>
                        <a class="dropdown-item text-white" href="#">Chi Siamo</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>