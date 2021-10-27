<!DOCTYPE HTML>
<html lang="pl">
<head>
     <meta charset="utf-8">
     <title>Sklep papierniczy</title>   
     <link rel="stylesheet" type="text/css" href="styl.css">
</head>

<body>
    
    <header>
   <h1>W naszym sklepie internetowym kupisz najtaniej</h1>     
    </header>
    <article>
        <h3>Promocja 15% obejmie artykuły:</h3>
            <section>
                         <?php
                  $con=mysqli_connect('localhost','root','','sklep');
                  $pytanie="SELECT `nazwa` FROM towary WHERE `promocja` = 1";
                  $wyslij=mysqli_query($con,$pytanie);
                  echo "<ul>";
                  while($wiersz=mysqli_fetch_array($wyslij))
                  {
                            echo "<li>".$wiersz[0]."</li>";
                  }
           echo "</ol>";
       mysqli_close($con);
                ?>
            </section>
    </article>
    <nav>
        <h3>Cena wybranego artykułu w promocji</h3>
        <select>
           <input type="submit" value="WYBIERZ">
            <option value="1"></option>
            <option value="1"></option>
            <option value="1"></option>
            <option value="1"></option>
        </select>
    </nav>
    <aside>
        <h3>Kontakt</h3>
        <p>telefon: 123123123 <br>
        e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a>
        </p>
        <br>
        <img src="promocja2.png" alt="promocja">
    </aside>
        
    <footer>
        <h4>Autor strony: XXXXXXXXXXX</h4>
    </footer>
    
</body>
</html>