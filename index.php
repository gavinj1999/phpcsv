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
include_once 'parsecsv.lib.php';



$csvFile = 'test1.csv';




$content = new parseCSV($csvFile,true);
$ordercount = count($content);



$list = $content;
$csv = new parseCSV();
$csv->save('data.csv', array(array('1986', 'Home', 'Nowhere', '')), true);



$file_rnd = generate_serial();
upload_file('192.168.1.68','root','Alldone01','newparamfile_' . $file_rnd .'.txt');
echo generate_serial() ;
?>