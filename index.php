<!-- Riscrivere questa pagina del sito google
https://policies.google.com/faq. 
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->

<?php 
    $db = [
        "questions" => [
            "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
            "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?"

        ]
        ];
    [
        "answers" => [
            "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.",
            "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni."
        ],
    ]
?>