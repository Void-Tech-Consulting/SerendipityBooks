<?php 
// set up basic ssl connection
$ftp_server = "ftp.addicosolutions.com";
$ftp_user_name = "serendipity";
$ftp_user_pass = "$3r3nd1p1ty509";
$last_pull_date_storage = "newfile.txt";

// retreive the modified date of the newest file we've pulled so far
// we will use this as a marker to only look at files newer than this
$opened_file = fopen($last_pull_date_storage, "rb") or die("Unable to open file!");
$last_file_pulled_date = fread($opened_file, filesize($last_pull_date_storage)) or die("Unable to open file!");
fclose($opened_file);

// setup the connection
$conn_id = ftp_connect($ftp_server);
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
ftp_pasv($conn_id,true);

// pull all file names from ftp server and start array at index 0
$contents = ftp_nlist($conn_id, '-rt .');
reset($contents);

function is_txt($file) {
 return preg_match('/.*\.txt/', $file) > 0;
}


$txt_files = array_filter($contents, 'is_txt');
$file_date_modified_map = array();
//retrieve the last modified date of each file and store it
foreach ($txt_files as $key => $value) {
    $last_modified = ftp_mdtm($conn_id, $value);
    if ($last_modified != -1) {
        $file_date_modified_map[$value] = $last_modified;
    }
}
asort($file_date_modified_map);
// get the newest modified file so we can throw it into storage @ last_pull_date_storage
$lmdate = end((array_values($file_date_modified_map)));

// filter down to only the newest files to prevent rereading
function filter_newest_files($file_date_in_ms) {
 global $last_file_pulled_date;
 return $last_file_pulled_date < $file_date_in_ms;
}
$new_files = array_filter($file_date_modified_map, 'filter_newest_files');

$file_name = "";
$temp_file = "temp_file.txt";
foreach ($new_files as $file_name => $last_time_modified ) {
    ftp_get($conn_id, $temp_file, $file_name, FTP_BINARY);
    $row = 1;
    if (($handle = fopen($temp_file, "rb")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            echo "<p> $num fields in line $row: <br /></p>\n";
            $row++;
            for ($c=0; $c < $num; $c++) {
                echo $data[$c] . "<br />\n";
            }
        }
        fclose($handle);
    }
}


// store the newest file we read once reading is complete
$myfile = fopen($last_pull_date_storage, "w") or die("Unable to open file!");
$txt = $lmdate;
fwrite($myfile, $txt);
fclose($myfile);
?>
