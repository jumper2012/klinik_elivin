<?php
// Proses Backup  database dilakukan Oleh Fungsi
function backup($host, $user, $pass, $name, $nama_file, $tables) {
    //untuk koneksi database
    $link = mysql_connect($host, $user, $pass);
    mysql_select_db($name, $link);
    // Jika Semua Tabel
    if ($tables == '*') {
        $tables = array();
        $result = mysql_query('SHOW TABLES');
        while ($row = mysql_fetch_row($result)) {
            $tables[] = $row[0];
        }
    } else {
        //jika hanya table-table tertentu
        $tables = is_array($tables) ? $tables : explode(',', $tables);
    }
    $return="CREATE DATABASE `klinik`;\n";
    $return.="USE `klinik`;\n\n";
    foreach ($tables as $table) {
        $result = mysql_query('SELECT * FROM ' . $table);
        $num_fields = mysql_num_fields($result);
        //menyisipkan query drop table untuk nanti hapus table yang lama
        $return .= 'DROP TABLE ' . $table . '';
        $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE ' . $table));
        $return.= "\n\n" . $row2[1] . ";\n\n";
        for ($i = 0; $i < $num_fields; $i++) {
            while ($row = mysql_fetch_row($result)) {
                $return.= 'INSERT INTO ' . $table . ' VALUES(';
                for ($j = 0; $j < $num_fields; $j++) {
                    $row[$j] = addslashes($row[$j]);
                    $row[$j] = ereg_replace("\n", "\\n", $row[$j]);
                    if (isset($row[$j])) {
                        $return.= '"' . $row[$j] . '"';
                    } else {
                        $return.= '""';
                    }
                    if ($j < ($num_fields - 1)) {
                        $return.= ',';
                    }
                }
                $return.= ");\n";
            }
        }
        $return.="\n\n\n";
    }

    $nama_file;
    $handle = fopen($nama_file, 'w+');
    fwrite($handle, $return);
    fclose($handle);
}
?>