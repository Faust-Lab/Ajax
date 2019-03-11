<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax - Les bases</title>
</head>
<body>
    <h1>Mon site</h1>
    
    <script>

    // On instancie le moteur AJAX
var xhr = new XMLHttpRequest();

// On veut suivre l'évolution de la requête AJAX
xhr.addEventListener('readystatechange', function () {
    if (4 === xhr.readyState) {
        if (200 === xhr.status) {
            console.log(xhr.response);
            document.getElementsByTagName('h1')[0].innerHTML = xhr.response;
        }
    }
});

// On prépare une requête HTTP
xhr.open('GET', './worker.php');

// On exécute la requête HTTP
xhr.send();



    </script>

</body>
</html>