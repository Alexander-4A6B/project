<?php // table in a function  
  function getOpdracten() {  // Dit is als voorbeeld
        $servername = "localhost"; 
        $username = "root"; 
        $password = "";
        $dbname = "overderhein";  // jouw databasenaam
        $resultaat = "test";
         
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
             $resultaat = "geen connectie gemaakt";
        } 
        $opdrachtnummer = $_POST["opdrachtnummer"];
        $sql = "SELECT * FROM opdrachten WHERE opdrachtnummer = '" . $opdrachtnummer . "'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            $resultaat = "<table border = '1'> <tr><th>opdrachtnummer</th><th>werkinstructie</th><th>datum uitvoering</th><th>kabelleverancier</th><th>waarnemingen</th><th>handtekening</th><th>aantal bedrijfsuren</th><th>afleg redenen</th></tr>";
            while($row = $result->fetch_assoc()) {
                $resultaat = $resultaat . "<tr><td>". $row["opdrachtnummer"]. "</td><td>" . $row["werkinstructie"] . "</td><td>" . $row["datum_uitvoering"] . "</td><td>" . $row["kabelleverancier"] . "</td><td>" . $row["waarnemingen"] . "</td><td>" . $row["handtekening"] . "</td><td>" . $row["aantal_Bedrijfsuren"] . "</td><td>" . $row["afleg_Redenen"] . "</td></tr>";   
            }; 
            $resultaat =  $resultaat . "</table>";
        } else {
             $resultaat = "wel een connectie, tabel is leeg";
        }

        $conn->close();
        return $resultaat;
    }

    function getKabelKeuring() {
        $servername = "localhost"; 
        $username = "root"; 
        $password = "";
        $dbname = "overderhein";  // jouw databasenaam
        $resultaat = "test";
         
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
             $resultaat = "geen connectie gemaakt";
        } 
        
        $opdrachtnummer = $_POST["opdrachtnummer"];
        $sql = "SELECT * FROM kabelkeuring WHERE opdrachtnummer = '" . $opdrachtnummer . "'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            $resultaat = "<table border = '1'> <tr><th>opdrachtnummer</th><th>kabelid</th><th>draadbreuk_6D</th><th>draadbreuk_30D</th><th>beschadiging_buitenzijde</th><th>beschadiging_roest_corrosie</th><th>verminderde_kabeldiameter</th><br><br><th>positie_meetpunten</th><th>beschadiging_totaal</th><th>type_beschadiging_roest</th></tr>";
            while($row = $result->fetch_assoc()) {
                $resultaat = $resultaat . "<tr><td>". $row["opdrachtnummer"]. "</td><td>" . $row["kabelid"] . "</td><td>" . $row["draadbreuk_6D"] . "</td><td>" . $row["draadbreuk_30D"] . "</td><td>" . $row["beschadiging_buitenzijde"] . "</td><td>" . $row["beschadiging_roest_corrosie"] . "</td><td>" . $row["verminderde_kabeldiameter"] . "</td><td>" . $row["positie_meetpunten"] . "</td><td>" . $row["beschadiging_totaal"] . "</td><td>" . $row["type_beschadiging_roest"] . "</td></tr>";   
            }; 
            $resultaat =  $resultaat . "</table>";
        } else {
             $resultaat = "wel een connectie, tabel is leeg";
        }

        $conn->close();
        return $resultaat;
    }

?>  