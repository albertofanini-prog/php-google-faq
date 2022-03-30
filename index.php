<?php
    var_dump('Google faq');

    $links = [
        'Introduzione',
        'Norme sulla privacy',
        'Termini di servizio',
        'Tecnologie',
        'Domande frequenti'
    ];

    $faqs = [
        [
            'ask' => '<h3>Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?</h3>',
            'answer' => '<p>La recente <a>decisione della Corte di giustizia dell\'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. 
            La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. 
            Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.</p>
            
            <p>Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. 
            Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell\'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.</p>
            '
        ]
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Poppins:wght@200&display=swap" rel="stylesheet">
    <title>Domande Frequenti - Privacy e Termini</title>
</head>
<body>
    <header>
        <div class="toolbar">
            <div class="logo">
                <div class="image">
                    <img src="images/google_logo.svg" alt="">
                </div>
                <div class="explain">
                    <span><a class="privacy" href="#">Privacy e termini</a></span>
                </div>
            </div>
            <div class="tools">
                <div class="menu">
                    <img src="images/menu.webp" alt="">
                </div>
                <div class="user">
                <img src="images/user.png" alt="">
                </div>
            </div>
        </div>
        <div class="navbar">
            <div class="links">
                <ul>
                    <?php
                        for ($i = 0; $i < count($links); $i++){
                            ?>
                            <li>
                                <?php
                                    echo $links[$i]
                                ?>
                            </li>
                            <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="faqs">
            <?php
                foreach ($faqs as $value){
                    ?>
                    <?php
                        echo $value['ask'];
                    ?>
                    <?php
                        echo $value['answer'];
                }
            ?>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>