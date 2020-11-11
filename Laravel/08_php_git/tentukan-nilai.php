<?php
function tentukan_nilai($number) {
    //  kode disini
	if ($number >= 85 && $number <= 100) {
		echo "Cek nilai: ".$number." ";
		return "(Sangat Baik)<br>";
	} elseif ($number >= 70 && $number < 85) {
	    echo "Cek nilai: ".$number." ";
		return "(Baik)<br>";
	} elseif ($number >= 60 && $number < 70) {
	    echo "Cek nilai: ".$number." ";
		return "(Cukup)<br>";
	} else {
	    echo "Cek nilai: ".$number."<br>";
		return "(Kurang)<br>";
	}
};

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
?>