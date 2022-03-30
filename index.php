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
            
            <p>Per presentare una richiesta di rimozione, compila questo <a>modulo web</a>. 
            Riceverai una risposta automatica che conferma la ricezione della tua richiesta. 
            Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po\' di tempo perché abbiamo già ricevuto tante richieste simili). 
            Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. 
            Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). 
            Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. 
            Se non sei ddell\'accordo con la nostra valutazione, puoi rivolgerti alldell\'Autorità garante per la protezione dei dati personali nel tuo paese.</p>
            
            <p>Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. 
            La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.</p>
            
            <p>Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. 
            Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.</p>
            
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