<?php
include_once __DIR__ . '/../config/conn.php';

class Contact {
    static function select($id='') {
        global $conn;
        $sql = "SELECT * FROM db_contact";
        if ($id!='') {
            $sql .= " WHERE id = $id";
        }
        $result = $conn->query($sql);
        $rows = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        $result->free();
        $conn->close();
        return $rows;
    }
    
    static function insert($data=[]) {
        extract($data);
        global $conn;
        $sql = "INSERT INTO db_contact SET no_hp = ?, nama_pemilik = ?, jenis_kelamin = ?, user_fk = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssss', $no_hp, $nama_pemilik, $jenis_kelamin, $user_fk);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }

    static function update($data=[]) {
        extract($data);
        global $conn;
        $sql = "UPDATE db_contact SET no_hp = ?, nama_pemilik = ?, jenis_kelamin = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssss', $no_hp, $nama_pemilik, $jenis_kelamin, $id);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        $conn->close();
        return $result;
    }

    static function delete($id = '') {
        global $conn;
        $sql = "DELETE FROM db_contact WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $id);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }
    
}

?>