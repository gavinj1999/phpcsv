<html>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<style>
    .before {
        color: red;
    }
    
    .after {
        color: green;
    }
</style>
<body>

</body>
</html>

<?PHP



include_once 'myfunctions.php';



$csvFile = 'test1.csv';




$content = readCSV($csvFile);
$ordercount = count($content);

echo '<div class="container"><div class="row">';
try{
for ($i=0; $i < $ordercount ; $i++) {
echo '<div class="col-md-12 before">';

	if ($content [$i][16] == $content [$i+1][16]){
		echo 'same: ' . $content [$i][0] .	$content [$i][1] .	$content [$i][2] .	$content [$i][3] .	$content [$i][4] .	$content [$i][5] .	$content [$i][6] .	$content [$i][7] .	$content [$i][8] .	$content [$i][9] .	$content [$i][10] .	$content [$i][11] .	$content [$i][12] .	$content [$i][13] .	$content [$i][14] .	$content [$i][15] .	$content [$i][16] .	$content [$i][17] .	$content [$i][18] .	$content [$i][19] .	$content [$i][20] .	$content [$i][21] .	$content [$i][22] .	$content [$i][23] .	$content [$i][24] .	$content [$i][25] .	$content [$i][26] .	$content [$i][27] .	$content [$i][28] .	$content [$i][29] .	$content [$i][30] .	$content [$i][31] .	$content [$i][32] .	$content [$i][33] .	$content [$i][34] .	$content [$i][35] .	$content [$i][36] .	$content [$i][37] .	$content [$i][38] .	$content [$i][39] .	$content [$i][40] .	$content [$i][41] .	$content [$i][42] .	$content [$i][43] .	$content [$i][44] .	$content [$i][45] .	$content [$i][46] .	$content [$i][47] .	$content [$i][48] .	$content [$i][49] .	$content [$i][50] .	$content [$i][51] .	$content [$i][52] .	$content [$i][53] .	$content [$i][54] .	$content [$i][55] ;																																										

	}else{
		echo 'different: ' . $content [$i][0] .	$content [$i][1] .	$content [$i][2] .	$content [$i][3] .	$content [$i][4] .	$content [$i][5] .	$content [$i][6] .	$content [$i][7] .	$content [$i][8] .	$content [$i][9] .	$content [$i][10] .	$content [$i][11] .	$content [$i][12] .	$content [$i][13] .	$content [$i][14] .	$content [$i][15] .	$content [$i][16] .	$content [$i][17] .	$content [$i][18] .	$content [$i][19] .	$content [$i][20] .	$content [$i][21] .	$content [$i][22] .	$content [$i][23] .	$content [$i][24] .	$content [$i][25] .	$content [$i][26] .	$content [$i][27] .	$content [$i][28] .	$content [$i][29] .	$content [$i][30] .	$content [$i][31] .	$content [$i][32] .	$content [$i][33] .	$content [$i][34] .	$content [$i][35] .	$content [$i][36] .	$content [$i][37] .	$content [$i][38] .	$content [$i][39] .	$content [$i][40] .	$content [$i][41] .	$content [$i][42] .	$content [$i][43] .	$content [$i][44] .	$content [$i][45] .	$content [$i][46] .	$content [$i][47] .	$content [$i][48] .	$content [$i][49] .	$content [$i][50] .	$content [$i][51] .	$content [$i][52] .	$content [$i][53] .	$content [$i][54] .	$content [$i][55] ;																																										
		
	}

	
echo '</div>';

}
echo '</div></div>';
}
catch (Exception $e){
	
}


$list = $content;

$fp = fopen('file.csv', 'w');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);



$file_rnd = generate_serial();
upload_file('192.168.1.68','root','Alldone01','newparamfile_' . $file_rnd .'.txt');
echo generate_serial() ;
?>