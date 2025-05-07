<style>
.back-to-top {
                position: fixed;
                bottom: 20px;
                left: 93%;
                transform: translateX(-50%);
                z-index: 999;
                cursor: pointer;
                background-color: #ffffff;
                border-radius: 10%;
                padding: 5px;
            }
            .back-to-top img {
                width: 25px; /* prilagodi po potrebi */
                height: auto;
            }
        </style>
<a href="#" class="back-to-top" aria-label="Vrnitev na vrh">
     <img src="fotografije/logotip/puščica.png" alt="Na vrh" />
</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            document.querySelector('.back-to-top').addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        </script>