<?php
    if (! defined('BASEPATH')) exit('No direct script access allowed');
    class TestCSV_model extends CI_Model 
    {
        /*public function import_data_from_xls($file_path, $table_name) {
            $this->load->database();
            $this->load->library('csvreader');
        
            // Lecture du fichier .xls
            $data = $this->csvreader->parse_file($file_path);
        
            // Insertion des données dans la base de données
            foreach ($data as $row) {
                $this->db->insert($table_name, $row);
            }
        } */
        
        public function import_xls_to_db()
        {
    // Charger la bibliothèque PHPExcel
         $this->load->library('phpexcel');

    // Charger le fichier Excel
        $input_file = 'D/PCG-ECRITURE.xls';
        $input_file_type = PHPExcel_IOFactory::identify($input_file);
        $obj_reader = PHPExcel_IOFactory::createReader($input_file_type);
        $objPHPExcel = $obj_reader->load($input_file);

    // Convertir le fichier Excel en format CSV
        $obj_writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');
        $csv_file = 'D/PCG-ECRITURE.xls';
        $obj_writer->save($csv_file);

        // Lire les données CSV et les insérer dans la base de données
        if (($handle = fopen($csv_file, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $this->db->insert('tablecompte', array(
                    'column1' => null,
                    'column2' => $data[1],
                    'column3' => $data[2],
                // ajouter d'autres colonnes ici si nécessaire
            ));
        }
        fclose($handle);
        }
    }

    }
?>