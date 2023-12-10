<?php
require "db_conn.php";
require "enkrip.php"; // Include the file where encryption functions are defined

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (strtolower($_POST['aksi']) == strtolower('tambah data')) {
        function insert_data()
        {
            global $conn;

            $query = "INSERT INTO enkripkripto (nama, harga, jml, keterangan) VALUE (:nama, :harga, :jml, :keterangan)";

            $params = array(
                ':nama' => encrypt($_POST['nama'], 12),
                ':harga' => encrypt($_POST['harga'], 12),
                ':jml' => encrypt($_POST['jml'], 12),
                ':keterangan' => encrypt($_POST['keterangan'], 12),
                
            );

            try {
                $stmt = $conn->prepare($query);
                $stmt->execute($params);
            } catch (PDOException $e) {
                echo "Kesalahan tambah: " . $e->getMessage();
            }
        }
        insert_data();
    } elseif (($_POST['aksi'] == 'Edit Data') && ($_POST['id'] > 0)) {
        function update_data()
        {
            global $conn;

            $query = 'UPDATE enkripkripto SET nama = :nama, harga = :harga, jml = :jml, keterangan = :keterangan ';
            $params = array(
                ':nama' => encrypt($_POST['nama'], 12),
                ':harga' => encrypt($_POST['harga'], 12),
                ':jml' => encrypt($_POST['jml'], 12),
                ':keterangan' => encrypt($_POST['keterangan'], 12),
                ':id' => $_POST['id'],
            );

            
            $query .= ' where id = :id';

            try {
                $stmt = $conn->prepare($query);
                $stmt->execute($params);
            } catch (PDOException $e) {
                echo "Kesalahan edit: " . $e->getMessage();
                echo $query;
            }
        }
        update_data();
    } elseif (($_POST['aksi'] == 'Hps') && ($_POST['del'] > 0)) {
        function delete_data()
        {
            global $conn;

            $query = 'DELETE from enkripkripto where id = ?';

            try {
                $stmt = $conn->prepare($query);
                $stmt->execute(array($_POST['del']));
            } catch (PDOException $e) {
                echo "Kesalahan hapus : " . $e->getMessage();
                echo $query;
            }
        }
        delete_data();
    }

    header("Location: index.php");
    exit;
} else {
    echo "halaman ini tidak boleh diakses secara langsung";
    exit;
}
