<?php
  include_once './zusatz/dbh.inc.php'
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="/main.css">
        <link rel="icon" href="/Images/NA.jpg">
        <title>Kontakt - Web Portfolio von Nikola</title>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav">
                  <li><a class="nav-link" href="/index.html">Home</a></li>
                  <li><a class="nav-link" href="/blog/index.html">Blog</a></li>
                  <li><a class="nav-link" href="/Projekte/index.html">Projekte</a></li>
                  <li><a class="nav-link active" href="/kontakt/Index.html">Kontakt</a></li>
                </ul>
              </div>
            </div>
          </nav>
          
    <div class="container">
        <h1 class = "title">Kontakt</h1>
        
        <h2 style="font-size: 30px;">Meine Kontaktdaten und verlinkte Konten:</h2>
        <table>
            <tr>
                <td><a href="mailto:anticn@bzz.ch" title="Mail an Nikola Antic">Meine schulische E-Mail</a></td>
            </tr>
            <tr>
                <td><a href="mailto:anticnikolazh@gmail.com" title="Mail an Nikola Antic">Meine private E-Mail</a></td>
            </tr>
            <tr>
                <td>Telefon: </td>
            </tr>
            <tr>
                <td><a href="https://github.com/anticN" title="Mein Github" target="_blank"><img src=  /Images/gitlogo.PNG style="width: 8%;" alt="Github"> Github Konto</a></td>
            </tr>
            <tr>
                <td>LinkedIn</td>
            </tr>
        </table>
$conn;
        <form action="$conn;">
          <p>Bei irgendwelchen Anliegen, können Sie mir hier gerne eine Nachricht schreiben.<br> Ich werde so schnell wie möglich darauf
            antworten.
          </p>
          <p><label>Name:</label><br>
            <input type="text" name="name" maxlength="50" size="30" required>
          </p>
          <p><label>Vorname:</label><br>
            <input type="text" name="vorname" maxlength="50" size="30" required>
          </p>
          <p><label>E-Mail:</label><br>
            <input type="email" name="email" maxlength="50" size="30" required>
          </p>
          <p class="checkboxPage"><label>Wie sind Sie auf meine Seite gestossen?</label><br>
            <input type="checkbox" name="aufSeite_1" value="github">Github
            <input type="checkbox" name="aufSeite_2" value="linkedin">LinkedIn
            <input type="checkbox" name="aufSeite_3" value="visitenkarte">Visitenkarte
            <input type="checkbox" name="aufSeite_4" value="bekannte">Bekannte
            <input type="checkbox" name="aufSeite_5" value="divers">Divers
          </p>
          <p><label>Ihre Nachricht:</label><br>
            <textarea name="nachricht" rows="6" cols="50" required></textarea>
          </p>
          <p>
            <input type="submit" name="ok" value="Versenden" />
            <input type="reset" name="loeschen" value="Löschen" />
          </p>
        </form>
    </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>