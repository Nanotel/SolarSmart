        // Functie pentru afisarea secundelor de la 60 la 1 si apoi refresh la pagina
        function startCountdown() {
            var seconds = 60;
            var countdownElement = document.getElementById('countdown');

            function updateCountdown() {
                countdownElement.innerHTML = 'Refresh in: ' + seconds + ' secunde';
                seconds--;

                if (seconds < 0) {
                    clearInterval(intervalId);
                    window.location.href = 'https://solarsmart.ro';
                }
            }

            updateCountdown();
            var intervalId = setInterval(updateCountdown, 1000);
        }

        // Porneste numaratoarea inversa dupa ce pagina s-a incarcat complet
        window.addEventListener('load', startCountdown);



