    <!-- Sobre -->

    <div id="id01" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content">
            <header class="w3-container w3-theme">
                <span onclick="document.getElementById('id01').style.display='none'"
                      class="w3-button w3-display-topright">&times;</span>
                <h2>IE Exemplo</h2>
            </header>
            <div class="w3-container">
                <p>Site SEA+: <b>Sistema de Estoque Automático Plus</b></p>
                <p class="w3-small">Ana Schran, Gabriel Ernesto, Loham Akim e Victor Moreira</p>
            </div>
            <footer class="w3-container w3-theme ">
                <p>PUCPR 2020</p>
            </footer>
        </div>
    </div>


    <script>
        // Script para abrir e fechar o sidebar
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("myOverlay").style.display = "none";
        }

        function w3_show_nav(name) {
            document.getElementById("menuProf").style.display = "none";
            document.getElementById("menuDisc").style.display = "none";
			document.getElementById("menuTurma").style.display = "none";
            document.getElementById(name).style.display = "block";

        }
    </script>

