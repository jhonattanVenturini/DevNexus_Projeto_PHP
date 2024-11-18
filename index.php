<?php
include('./PHP/conexao.php')
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/index.css">
    <title>Home</title>
</head>

<body>
    <header>
        <section class="topo"><img src="./ASSETS" alt=""></section>
    </header>
    <main>
        <section class="texto-inicial">
            <p>
                Lorem ipsum dolor sit amet consectetur., est cumque rerum tempora vitae ipsa tempore?
                Lorem ipsum dolor sit amet consectetur., est cumque rerum tempora vitae ipsa tempore?
                Lorem ipsum dolor sit amet consectetur., est cumque rerum tempora vitae ipsa tempore?
            </p>
        </section>
        <section class="navios">
        <div class="container">
            <?php
            foreach ($navios as $navio) {
                echo "<div class='cards'>";
                echo "<img src='./ASSETS/{$navio['codigo_navio']}.webp' alt='imagem do navio'>";
                echo "<h1>" . htmlspecialchars($navio['nome_navio']) . "</h1>";
                echo "<p>Ano de Construção: " . htmlspecialchars($navio['ano_construcao']) . "</p>";
                echo "<p>Número de Tripulantes: " . htmlspecialchars($navio['num_tripulantes']) . "</p>";
                echo "<p>Número de Passageiros: " . htmlspecialchars($navio['num_passageiros']) . "</p>";
                echo "<br>";
                echo "<button><a href='./detalhes.php?codigo_navio=" . htmlspecialchars($navio['codigo_navio']) . "' target='_self'>Mais Informações</a></button>";
                echo "</div>";
            }
            ?>
        </div>
        </section>
        
        <h2> 7 principais países de destino </h2>
        <section class="paises">

            <div class="lugares-impar">
                <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea earum repellendus deserunt facere quibusdam aperiam, at reiciendis et alias nulla sint molestias dolorum nihil expedita sapiente odio doloremque modi quo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae accusantium minus cum earum et sapiente nesciunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, id hic qui dolorum dolore ipsum quisquam excepturi suscipit consequatur provident dolorem facilis perspiciatis sapiente nostrum beatae delectus alias modi quae.</p>
            </div>
            <br>
            <div class="lugares-impar">
                <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea earum repellendus deserunt facere quibusdam aperiam, at reiciendis et alias nulla sint molestias dolorum nihil expedita sapiente odio doloremque modi quo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae accusantium minus cum earum et sapiente nesciunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, id hic qui dolorum dolore ipsum quisquam excepturi suscipit consequatur provident dolorem facilis perspiciatis sapiente nostrum beatae delectus alias modi quae.
                </p>
            </div>
            <br>
            <div class="lugares-impar">
                <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea earum repellendus deserunt facere quibusdam aperiam, at reiciendis et alias nulla sint molestias dolorum nihil expedita sapiente odio doloremque modi quo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae accusantium minus cum earum et sapiente nesciunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, id hic qui dolorum dolore ipsum quisquam excepturi suscipit consequatur provident dolorem facilis perspiciatis sapiente nostrum beatae delectus alias modi quae.</p>
            </div>
            <br>
            <div class="lugares-impar">
                <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea earum repellendus deserunt facere quibusdam aperiam, at reiciendis et alias nulla sint molestias dolorum nihil expedita sapiente odio doloremque modi quo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae accusantium minus cum earum et sapiente nesciunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, id hic qui dolorum dolore ipsum quisquam excepturi suscipit consequatur provident dolorem facilis perspiciatis sapiente nostrum beatae delectus alias modi quae.</p>
            </div>
            <br>
            <div class="lugares-impar">
                <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea earum repellendus deserunt facere quibusdam aperiam, at reiciendis et alias nulla sint molestias dolorum nihil expedita sapiente odio doloremque modi quo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae accusantium minus cum earum et sapiente nesciunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, id hic qui dolorum dolore ipsum quisquam excepturi suscipit consequatur provident dolorem facilis perspiciatis sapiente nostrum beatae delectus alias modi quae.</p>
            </div>
            <br>
            <div class="lugares-impar">
                <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea earum repellendus deserunt facere quibusdam aperiam, at reiciendis et alias nulla sint molestias dolorum nihil expedita sapiente odio doloremque modi quo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae accusantium minus cum earum et sapiente nesciunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, id hic qui dolorum dolore ipsum quisquam excepturi suscipit consequatur provident dolorem facilis perspiciatis sapiente nostrum beatae delectus alias modi quae.</p>
            </div>
            <br>
            <div class="lugares-impar">
                <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea earum repellendus deserunt facere quibusdam aperiam, at reiciendis et alias nulla sint molestias dolorum nihil expedita sapiente odio doloremque modi quo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae accusantium minus cum earum et sapiente nesciunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, id hic qui dolorum dolore ipsum quisquam excepturi suscipit consequatur provident dolorem facilis perspiciatis sapiente nostrum beatae delectus alias modi quae.</p>
            </div>


        </section>
        <br>
        <footer>&copy;2024</footer>
    </main>
</body>

</html>