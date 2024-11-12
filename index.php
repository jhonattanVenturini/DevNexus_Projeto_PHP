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
        <section class="topo"><img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815263393426710017&th=19311c704af81e01&view=fimg&fur=ip&permmsgid=msg-f:1815263393426710017&sz=s0-l75-ft&attbid=ANGjdJ_7tCa4p5zo0fJIKJIRpd0LwQqABetevBiknQEAOuG-CwKI4XWHa8tXBsx8NW0k_87kejPSqsTpYBIvqysfxX63OFDx3-cUazNUIDV_wNLXKFL7YPXA8QxZ7ek&disp=emb&realattid=19311c6bdbecaed87861&zw" alt=""></section>
    </header>
    <main>
        <section class="texto-inicial">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum repellendus quasi quis. Vel dolorem, veniam quis minima tempora atque, quae ipsa unde maiores doloremque temporibus inventore earum. Eaque, maiores quo?Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, dolorem? Veritatis laudantium omnis doloremque perferendis, amet voluptates totam animi nisi quisquam velit aut, est cumque rerum tempora vitae ipsa tempore?</section>

        <section class="navios">
            <div class="container">
                <div class="cards">
                    <img src="./ASSETS/N01.webp" alt="imagem do navio">
                    <h1><?php echo htmlspecialchars($navio['nome_navio']); ?></h1>
                    <p>Ano Construção: <?php echo htmlspecialchars($navio['ano_construcao']); ?></p>
                    <p>Número Tripulantes: <?php echo htmlspecialchars($navio['num_tripulantes']); ?></p>
                    <p>Número Passageiros: <?php echo htmlspecialchars($navio['num_passageiros']); ?></p>
                    <br>
                    <button><a href="./detalhes.php" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio....</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
                <div class="cards">
                    <img src="https://mail.google.com/mail/u/0?ui=2&ik=67eea0b0cd&attid=0.1&permmsgid=msg-f:1815264653752816630&th=19311d95bc4253f6&view=fimg&fur=ip&permmsgid=msg-f:1815264653752816630&sz=s0-l75-ft&attbid=ANGjdJ-AJ2XSNVrhx-EF3HKHRfPTmBJlMEjXLEY1ahVU9Lortvl4T5nrO_UsXdBtEqbyPSg6-_uRbjsv9J4An8TR-jA3_q2Ddxste8zUhgLzagn3mYD03LX8Ah_wYWY&disp=emb&realattid=19311d90fdbafd530ea1&zw" alt="imagem do navio">
                    <h1>navio...</h1>
                    <p>Ano Construção:</p>
                    <p>Número Tripulantes:</p>
                    <p>Número Passageiros:</p>
                    <br>
                    <button> <a href="" target="_self">Mais Informações</a></button>
                </div>
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