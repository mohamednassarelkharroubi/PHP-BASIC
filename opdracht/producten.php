<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Title</title>
  </head>
    <form action="producten.php" method="get"><!-- dit laten staan! -->
    <?php include 'includes/functions.php'?>
    <p>Hieronder een lijst met producten die je bij ons kunt bestellen en de prijs per stuk:</p>
    <?php 
          $productenLijst = array ("cola", "friet", "ijs", "taart", "sisi", "fanta", "pepsi", "7up");
          $productenPrijs = array ( 2,35, 1,20, 2.50, 1,00, 0,60, 6,50, 1.40, 27,50, 2,10, 1,60);
    ?>
        <table>
            <tr>
                <th>#</th>
                <th>product</th>
                <th>prijs per stuk</th>
            </tr>
            <tr>
                <td>0</td>
                <td><?php echo $productenLijst[0]; ?></td>
                <td><?php echo $productenPrijs[0]; ?></td>
            </tr>
            <tr>
                <td>1</td>
                <td><?php echo $productenLijst[1]; ?></td>
                <td><?php echo $productenPrijs[1]; ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td><?php echo $productenLijst[2]; ?></td>
                <td><?php echo $productenPrijs[2]; ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td><?php echo $productenLijst[3]; ?></td>
                <td><?php echo $productenPrijs[3]; ?></td>
            </tr>
            <tr>
                <td>4</td>
                <td><?php echo $productenLijst[4]; ?></td>
                <td><?php echo $productenPrijs[4]; ?></td>
            </tr>
            <tr>
                <td>5</td>
                <td><?php echo $productenLijst[5]; ?></td>
                <td><?php echo $productenPrijs[5]; ?></td>
            </tr>
            <tr>
                <td>6</td>
                <td><?php echo $productenLijst[6]; ?></td>
                <td><?php echo $productenPrijs[6]; ?></td>
            </tr>
            <tr>
                <td>7</td>
                <td><?php echo $productenLijst[7]; ?></td>
                <td><?php echo $productenPrijs[7]; ?></td>
            </tr>
            <tr>
                <td>8</td>
                <td><?php echo $productenLijst[8]; ?></td>
                <td><?php echo $productenPrijs[8]; ?></td>
            </tr>
            <tr>
                <td>9</td>
                <td><?php echo $productenLijst[9]; ?></td>
                <td><?php echo $productenPrijs[9]; ?></td>
            </tr>
        </table>

    <p>Vul hieronder het productnummer in van het product wat je wilt bestellen en de hoeveelheid.</p> 
    <p><label>productnummer: </label><input type="text" name="productnummer"> &nbsp;&nbsp;<label>aantal: </label><input type="text" name="aantal"></p><!-- dit laten staan! -->
    
    <p>Vul je leeftijd in voor korting</p>
    <p><label>leeftijd: </label><input type="text" name="leeftijd"></p><!-- dit laten staan! -->
    <p><button type="submit" name="submit">Bereken totaal</button></p><!-- dit laten staan! -->
    <p>voor <?php getAmount(); ?> x het product: <?php getProductNr(); ?> betaal je: <?php getPrijs() ?></p>
    <p>je bent <?php getAge(); ?> je korting is: <?php getDiscount() ?></p>

    </form><!-- dit laten staan! -->
  </body>
</html>