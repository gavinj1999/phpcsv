<?php
function upload_file($server,$ftp_username,$ftp_userpass,$filename) {
    $ftp_server = $server;
    $ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
    $login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

    $file = "localfile.txt";
	$remotepath="/var/www/processcsv/uploaded/";
   $uploadfile = $remotepath . $file;
    if (ftp_put($ftp_conn, $remotepath . $filename, $file, FTP_ASCII)) {
        echo "Successfully uploaded $file.";
    } else {
        echo "Error uploading $file.";
    }

    ftp_close($ftp_conn);
}

function parse_csv_file($csvfile) {
    $csv = Array();
    $rowcount = 0;
    if (($handle = fopen($csvfile, "r")) !== FALSE) {
        $max_line_length = defined('MAX_LINE_LENGTH') ? MAX_LINE_LENGTH : 10000;
        $header = fgetcsv($handle, $max_line_length);
        $header_colcount = count($header);
        while (($row = fgetcsv($handle, $max_line_length)) !== FALSE) {
            $row_colcount = count($row);
            if ($row_colcount == $header_colcount) {
                $entry = array_combine($header, $row);
                $csv[] = $entry;
            } else {
                error_log("csvreader: Invalid number of columns at line ".($rowcount + 2).
                    " (row ".($rowcount + 1).
                    "). Expected=$header_colcount Got=$row_colcount");
                return null;
            }
            $rowcount++;
        }
        //echo "Totally $rowcount rows found\n";
        fclose($handle);
    } else {
        error_log("csvreader: Could not read CSV \"$csvfile\"");
        return null;
    }
    return $csv;
}


function readCSV($csvFile){
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle) ) {
		$line_of_text[] = fgetcsv($file_handle, 1024);
	}
	fclose($file_handle);
	return $line_of_text;
}

function generate_serial() {
    static $max = 60466175; // ZZZZZZ in decimal
    return strtoupper(sprintf(
        "%05s-%05s-%05s-%05s-%05s",
        base_convert(mt_rand(0, $max), 10, 36),
        base_convert(mt_rand(0, $max), 10, 36),
        base_convert(mt_rand(0, $max), 10, 36),
        base_convert(mt_rand(0, $max), 10, 36),
        base_convert(mt_rand(0, $max), 10, 36)
    ));
}

// Set path to CSV file



?>