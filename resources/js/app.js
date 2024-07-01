import { comment } from 'postcss';
import './bootstrap';
import 'bootstrap';

// Mostra la schermata di caricamento al caricamento della pagina
// Mostra la schermata di caricamento al caricamento della pagina
















document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.hero .container').classList.add('loaded');
});

// Mostra la schermata di caricamento
const loader = document.getElementById('loader');
loader.style.display = 'flex'; // Mostra la schermata di caricamento

// Nascondi la schermata di caricamento dopo un ritardo di 5 secondi
setTimeout(() => {
    loader.style.display = 'none'; // Nascondi la schermata di caricamento
    document.getElementById('main-content').style.display = 'block'; // Mostra il contenuto principale della pagina
}, ); // Tempo totale di 5 secondi (5000 millisecondi)

// Gestisci il caricamento completo della pagina
window.addEventListener('load', () => {
    // Esegui altre azioni dopo che tutto è stato caricato completamente
    // Esempio: Mostra un messaggio di benvenuto con animazione
    const welcomeMessage = document.getElementById('welcome-message');
    welcomeMessage.style.opacity = '1'; // Imposta l'opacità a 1 per mostrare il messaggio
    welcomeMessage.style.transform = 'translateY(0)'; // Effetto di traslazione verso l'alto per mostrare il messaggio
});