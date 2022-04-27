<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="latihan01a.css">
  <title>Latihan 02 - PHP dan Array</title>
</head>
<body>
<h1>KLASEMEN SEMENTARA (HTML + PHP Array)</h1>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Rank</th>
                <th>Name</th>
                <th>Points</th>
                <th>Team</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $racer_list = array(
            array(1,"Agus", 6000,"Repsol Honda"),
            array(2, "Budi","5150","Monster Yamaha"),
            array(3,"Charli","6000","RedBull KTM"),
            array(4,"Dedi","5150","Petronas"),
            array(5,"Edi","6000","LCR"),
            array(6,"Farah","5150","RNF Moto"),
            array(7,"Ganda", "6000", "Ducati"),
            array(8,"Hari","5150","Reale Avintia"),
            array(9,"Iyun","6000","Suzuki"),
            array(10,"Joko","5150","Pond Racing")
        );
        
# tulis isi array ke page
foreach ($racer_list as $racer) {
    echo("<tr><td>" . $racer[0] . "</td><td>". $racer[1] ."</td><td>"
    . $racer[2] ."</td><td>" . $racer[3] . "</td></tr>");
}
?>
</tbody>
</table>
</body>
</html>


    



    

            
        
        