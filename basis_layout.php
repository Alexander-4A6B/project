<!DOCTYPE html>
<html>
<head>
    <?php include('DBfuncties.php') ?>
    <title>Basis_layout</title>
    <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="basis_layout.css">
</head>
<body>
    <div id="logo">Rhein</div>
    <div id="SchermNaam">Bestand</div>
    <div id="contentDiv">
        <form action="" method="post">
            <button name="reset">reset</button>
            <select type="text" name="opdrachtnummer">
                <option value="1">1</option>
                <option value="2">2</option>	
        		<option value="3">3</option>
            </select>
            <input type="submit" name="submit" value="Kies opdracht">
        </form>
                <?php
                    if(isset($_POST["opdrachtnummer"])) {
                        echo getOpdracten();
                        echo getKabelKeuring();
                    }
                ?>   
        <div id="exitButton">
                <button onclick="" id="button_exit" class="buttons">Exit</button>                
            </div>
    </div>
    
    <nav>
        <ul>
            <li><a href="">Bestand</a></li>
            <li><a href="">Info</a></li>
        </ul>
    </nav>   
    
</body>
</html>