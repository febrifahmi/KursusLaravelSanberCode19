<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
        
    <?php 
        echo "<h3> Soal 1 </h3>";
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"); // Lengkapi di sini
        $adults = array("Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"); 
        foreach ($kids as &$value){
            echo "Kids: " .$value. ".<br>"; 
        };
        foreach ($adults as &$value){
            echo "Adults: " .$value. ".<br>";
        };

        echo "<h3> Soal 2</h3>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        echo "Cast Stranger Things: ";
        echo "<br>";
        echo "Total Kids: " .count($kids). "."; // Berapa panjang array kids
        echo "<br>";
        echo "<ol>"; 
        foreach ($kids as &$value){
            echo "Kids: <li>" .$value. ".</li><br>"; 
        };
        // Lanjutkan

        echo "</ol>";
        
        echo "Total Adults: " .count($adults). ".";// Berapa panjang array adults
        echo "<br>";
        echo "<ol>";
        foreach ($adults as &$value){
            echo "Adults: <li>" .$value. "</li>.<br>";
        };
        // Lanjutkan

        echo "</ol>";
    
        $aso = array(array("Name" => "Will Byers", "Age" => "12", "Aliases" => "Will the Wise", "Status" => "Alive"), array("Name" => "Mike Wheeler", "Age" => "12", "Aliases" => "Dungeon Master", "Status" => "Alive"), array("Name" => "Jim Hopper", "Age" => "43", "Aliases" => "Chief Hopper", "Status" => "Deceased"), array("Name" => "Eleven", "Age" => "12", "Aliases" => "El", "Status" => "Alive"));
       
        print_r($aso);
    ?>
</body>
</html>