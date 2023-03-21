<?php
    if (! defined('BASEPATH')) exit('No direct script access allowed');
    class CVS_model extends CI_Model 
    {
        function readExcelFile($filename) {
            $file = fopen($filename, "r");
            $data = array();
            while (($row = fgetcsv($file, 1000, "\t")) !== false) {
                $data[] = $row;
            }
            fclose($file);
            return $data;
        }

    }    
?>