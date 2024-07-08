<!DOCTYPE html theme-color="#131112">
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preventivo</title>
    <!-- Includi Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white">
    @if(session('message'))
    <div class="tw-alert tw-alert-success">
        {{ session('message') }}
    </div>
    @endif
    
    <div class="tw-flex tw-flex-col sm:tw-flex-row tw-w-full tw-h-screen">
        <div class="tw-w-full sm:tw-w-1/2 tw-h-64 sm:tw-h-full tw-bg-cover tw-bg-no-repeat" style="background-image: url('{{asset('images/evgeny-tchebotarev-aiwuLjLPFnU-unsplash.jpg')}}')">
            
        </div>
        
        <div class="tw-w-full lg:tw-w-1/2 tw-h-auto tw-p-8 sm:tw-p-16 lg:tw-p-20">
            <div class="tw-flex tw-items-center tw-text-center tw-w-full tw-absolute tw-top-2 tw-right-2 tw-bg-transparent">
                <label class="tw-inline-block tw-relative tw-h-8 tw-w-14 tw-bg-transparent">
                    <input type="checkbox" id="checkbox" class="tw-hidden">
                </label>
            </div>
            
            <h1 class="tw-text-[#3F444C] tw-uppercase tw-text-2xl tw-tracking-wide tw-font-light">Contattaci</h1>
            <p class="tw-text-[#818386] tw-text-sm tw-w-full tw-mt-1">Benvenuto Utente, Dicci quello che ti serve saremo subito a tua disposizione!</p>
            
            <form action="{{ route('preventivo.submit') }}" method="POST" class="tw-w-full tw-mt-8">
                @csrf
                @method('POST')
                <label for="email" class="tw-block tw-text-xs tw-uppercase tw-text-[#818386]">Email</label>
                <input type="email" id="email" name="email" placeholder="E-Mail" required class="tw-w-full tw-block tw-bg-[#FCFDFD] tw-text-[#010712] tw-border-b tw-border-[#818386] tw-py-2 tw-mb-4 tw-outline-none">
                
                <label for="nomec" class="tw-block tw-text-xs tw-uppercase tw-text-[#818386]">Nome e Cognome</label>
                <input type="text" id="nomec" name="nomec" placeholder="Nome e Cognome" required class="tw-w-full tw-block tw-bg-[#FCFDFD] tw-text-[#010712] tw-border-b tw-border-[#818386] tw-py-2 tw-mb-4 tw-outline-none">
                
                <label for="telefono" class="tw-block tw-text-xs tw-uppercase tw-text-[#818386]">Telefono</label>
                <input type="text" id="telefono" name="telefono" placeholder="Telefono" required class="tw-w-full tw-block tw-bg-[#FCFDFD] tw-text-[#010712] tw-border-b tw-border-[#818386] tw-py-2 tw-mb-4 tw-outline-none">
                
                <label for="targa" class="tw-block tw-text-xs tw-uppercase tw-text-[#818386]">Targa</label>
                <input type="text" id="targa" name="targa" placeholder="Targa" required class="tw-w-full tw-block tw-bg-[#FCFDFD] tw-text-[#010712] tw-border-b tw-border-[#818386] tw-py-2 tw-mb-4 tw-outline-none">
                
                <label for="auto" class="tw-block tw-text-xs tw-uppercase tw-text-[#818386]">Auto</label>
                <input type="text" id="auto" name="auto" placeholder="Auto" required class="tw-w-full tw-block tw-bg-[#FCFDFD] tw-text-[#010712] tw-border-b tw-border-[#818386] tw-py-2 tw-mb-4 tw-outline-none">
                
                <label for="corpo" class="tw-block tw-text-xs tw-uppercase tw-text-[#818386]">Richiesta</label>
                <textarea id="corpo" name="corpo" rows="6" placeholder="Messaggio" required class="tw-w-full tw-block tw-bg-[#FCFDFD] tw-text-[#010712] tw-border-b tw-border-[#818386] tw-py-2 tw-mb-4 tw-outline-none tw-resize-none"></textarea>
                
                <div class="tw-flex tw-flex-col sm:tw-flex-row">
                    <button type="submit" class="tw-uppercase tw-font-light tw-bg-[#3B3636] tw-text-[#FCFDFD] tw-w-full sm:tw-w-40 tw-h-9 tw-border-none tw-rounded-sm tw-outline-none tw-cursor-pointer hover:tw-opacity-50 active:tw-opacity-80 tw-mb-4 sm:tw-mb-0">Invia</button>
                    
                    <form action="{{ route('home') }}">
                        @csrf
                        <button type="submit" class="tw-uppercase tw-font-light tw-bg-[#3B3636] tw-text-[#FCFDFD] tw-w-full sm:tw-w-40 tw-h-9 tw-border-none tw-rounded-sm tw-outline-none tw-cursor-pointer hover:tw-opacity-50 active:tw-opacity-80 sm:tw-ml-4">Torna indietro</button>
                    </form>
                </div>
            </form>
        </div>
    </div>
</body>
</html>