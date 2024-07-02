<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css resources/js/app.js'])
</head>
<body> 
    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <style>
        :root {
            --primary-color: #010712;
            --secondary-color: #818386;
            --bg-color: #FCFDFD;
            --button-color: #3B3636;
            --h1-color: #3F444C;
        }
        
        [data-theme="dark"] {
            --primary-color: #FCFDFD;
            --secondary-color: #818386;
            --bg-color: #010712;
            --button-color: #818386;
            --h1-color: #FCFDFD;
        }
        
        * {
            margin: 0;
            box-sizing: border-box;
            transition: all 0.3s ease-in-out;
        }
        
        .contact-container {
            display: flex;
            width: 100vw;
            height: 100vh;
            background: var(--bg-color);
        }
        
        .left-col {
            width: 45vw;
            height: 100%;
            background-image: url("https://images.pexels.com/photos/931018/pexels-photo-931018.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500");
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        .logo {
            width: 10rem;
            padding: 1.5rem;
        }
        
        .right-col {
            background: var(--bg-color);
            width: 50vw;
            height: 100vh;
            padding: 5rem 3.5rem;
        }
        
        h1, label, button, .description {
            font-family: 'Jost', sans-serif;
            font-weight: 400;
            letter-spacing: 0.1rem;
        }
        
        h1 {
            color:var(--h1-color);
            text-transform: uppercase;
            font-size: 2.5rem;
            letter-spacing: 0.5rem;
            font-weight: 300;
        }
        
        p {
            color: var(--secondary-color);
            font-size: 0.9rem;
            letter-spacing: 0.01rem;
            width: 40vw;
            margin: 0.25rem 0;
        }
        
        label, .description {
            color: var(--secondary-color);
            text-transform: uppercase;
            font-size: 0.625rem;
        }
        
        form {
            width: 31.25rem;
            position: relative;
            margin-top: 2rem;
            padding: 1rem 0;
        }
        
        input, textarea, label {
            width: 40vw;
            display: block;
        }
        
        p, placeholder, input, textarea {
            font-family: 'Helvetica Neue', sans-serif;
        }
        
        input::placeholder, textarea::placeholder {
            color: var(--primary-color);
        }
        
        input, textarea {
            color: var(--primary-color);
            font-weight: 500;
            background: var(--bg-color);
            border: none;
            border-bottom: 1px solid var(--secondary-color);
            padding: 0.5rem 0;
            margin-bottom: 1rem;
            outline: none;
        }
        
        textarea {
            resize: none;
        }
        
        button {
            text-transform: uppercase;
            font-weight: 300;
            background: var(--button-color);
            color: var(--bg-color);
            width: 10rem;
            height: 2.25rem;
            border: none;
            border-radius: 2px;
            outline: none;
            cursor: pointer;
        }
        
        input:hover, textarea:hover, button:hover {
            opacity: 0.5;
        }
        
        button:active {
            opacity: 0.8;
        }
        
        /* Toggle Switch */
        
        .theme-switch-wrapper {
            display: flex;
            align-items: center;
            text-align: center;
            width: 160px;
            position: absolute;
            top: 0.5rem;
            right: 0;
        }
        
        .description {
            margin-left: 1.25rem;
        }
        
        .theme-switch {
            display: inline-block;
            height: 34px;
            position: relative;
            width: 60px;
        }
        
        .theme-switch input {
            display:none;
        }
        
        .slider {
            background-color: #ccc;
            bottom: 0;
            cursor: pointer;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            transition: .4s;
        }
        
        .slider:before {
            background-color: #fff;
            bottom: 0.25rem;
            content: "";
            width: 26px;
            height: 26px;
            left: 0.25rem;
            position: absolute;
            transition: .4s;
        }
        
        input:checked + .slider {
            background-color: var(--button-color);
        }
        
        input:checked + .slider:before {
            transform: translateX(26px);
        }
        
        .slider.round {
            border-radius: 34px;
        }
        
        .slider.round:before {
            border-radius: 50%;
        }
        
        #error, #success-msg {
            width: 40vw;
            margin: 0.125rem 0;
            font-size: 0.75rem;
            text-transform: uppercase;
            font-family: 'Jost';
            color: var(--secondary-color);
        }
    }
    
    #success-msg {
        transition-delay: 3s;
    }
    
    @media only screen and (max-width: 950px) {
        .logo {
            width: 8rem;
        }
        h1 {
            font-size: 1.75rem;
        }
        p {
            font-size: 0.7rem;
        }
        input, textarea, button {
            font-size: 0.65rem;
        }
        .description {
            font-size: 0.3rem;
            margin-left: 0.4rem;
        }
        button {
            width: 7rem;
        }
        .theme-switch-wrapper {
            width: 120px;
        }
        .theme-switch {
            height: 28px;
            width: 50px;
        }
        
        .theme-switch input {
            display:none;
        }
        
        .slider:before {
            background-color: #fff;
            bottom: 0.25rem;
            content: "";
            width: 20px;
            height: 20px;
            left: 0.25rem;
            position: absolute;
            transition: .4s;
        }
        input:checked + .slider:before {
            transform: translateX(16px);
        }
        
        .slider.round {
            border-radius: 15px;
        }
        
        .slider.round:before {
            border-radius: 50%;
        }
        
    }
</style>

<div class="contact-container">
    <div class="left-col">
        <img class="logo" src="https://www.indonesia.travel/content/dam/indtravelrevamp/en/logo.png"/>
    </div>
    <div class="right-col">
        <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox" />
                {{-- <div class="slider round"></div> --}}
            </label>
            {{-- <div class="description">Dark Mode</div> --}}
        </div>
        
        <h1>Contattaci</h1>
        <p>Benvenuto Utente, Dicci quello che ti serve saremo subito a tua disposizione!</p>
        
        <form action="{{route('preventivo.submit')}}" method="post">
            @csrf
            @method('POST')
            <label for="userEmail">Email</label>
            <input type="email" id="email" name="email" placeholder="E-Mail" required>
            <label for="userNomec">Nome e Cognome</label>
            <input type="text" id="nomec" name="nomec" placeholder="Nome e Cognome" required>
            <label for="userTelefono">Telefono</label>
            <input type="text" id="telefono" name="telefono" placeholder="Telefono" required>
            <label for="userTarga">Targa</label>
            <input type="text" id="targa" name="targa" placeholder="Targa" required>
            <label for="userAuto">Auto</label>
            <input type="text" id="auto" name="auto" placeholder="Auto" required>
            <label for="userCorpo">Richiesta</label>
            <textarea rows="6" placeholder="Messaggio" id="userCorpo" name="corpo" required></textarea>
            <button type="submit" >Send</button>
            
        </form>
        <div id="error"></div>
        <div id="success-msg"></div>
    </div>
</div>



</body>
</html>

