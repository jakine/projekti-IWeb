<?php
session_start();

require_once 'C:\xampp\htdocs\projekti-IWeb\htmlp\config\Database.php';


class ProductController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //messages
    public function getMessages(){
        $query = $this->db->pdo->query('SELECT * FROM mesazhet');

        return $query->fetchAll();
    }

    public function createMessage($request){
        $query = $this->db->pdo->prepare('INSERT INTO mesazhet(emri, mbiemri, email, mesazhi)
        VALUES(:emri, :mbiemri, :email, :mesazhi)');
        
        $query->bindParam(':emri', $request['emri']);
        $query->bindParam(':mbiemri', $request['mbiemri']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':mesazhi', $request['message']);
        $query->execute();

        return header('Location: http://localhost/projekti-IWeb/htmlp/contact.php');
    }

    //users
    public function getUsers(){
        $query = $this->db->pdo->query('SELECT * FROM perdoruesit');

        return $query->fetchAll();
    }

    public function registerUser($request){
        $query = $this->db->pdo->prepare('INSERT INTO perdoruesit(emri, mbiemri, email, pwd)
        VALUES(:emri, :mbiemri, :email, :pwd)');
        
        $query->bindParam(':emri', $request['emri']);
        $query->bindParam(':mbiemri', $request['mbiemri']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':pwd', $request['password']);
        $query->execute();

        return header('Location: http://localhost/projekti-IWeb/htmlp/login.php');
    }


    //CRUD

    public function readData(){
        $query = $this->db->pdo->query('SELECT * FROM produktet');

        return $query->fetchAll();
    }

    public function insert($request){
        $query = $this->db->pdo->prepare('INSERT INTO produktet(titulli, pershkrimi, img, cmimi, admin_name, admin_id, kategoria)
        VALUES(:titulli, :pershkrimi, :img, :cmimi, :admin_name, :admin_id, :kategoria)');
        $request['img'] = '../img/'.$request['img'];
        
        $query->bindParam(':titulli', $request['titulli']);
        $query->bindParam(':pershkrimi', $request['pershkrimi']);
        $query->bindParam(':img', $request['img']);
        $query->bindParam(':cmimi', $request['cmimi']);
        $query->bindParam(':admin_name', $_SESSION['emri']);
        $query->bindParam(':admin_id', $_SESSION['id']);
        $query->bindParam(':kategoria', $request['kategoria']);
        $query->execute();

        return header('Location: http://localhost/projekti-IWeb/htmlp/admin-dashboard.php');
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * FROM produktet WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();
        
        return $query->fetch();
    }

    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE produktet SET titulli = :titulli_u, pershkrimi = :pershkrimi_u,
        img = :img_u, cmimi = :cmimi_u WHERE id = :id_u');

        $request['img'] = '../img/'.$request['img'];

        $query->bindParam(':titulli_u', $request['titulli']);
        $query->bindParam(':pershkrimi_u', $request['pershkrimi']);
        $query->bindParam(':img_u', $request['img']);
        $query->bindParam(':cmimi_u', $request['cmimi']);
        $query->bindParam(':id_u', $id);
        $query->execute();

        return header('Location: http://localhost/projekti-IWeb/htmlp/admin-dashboard.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE FROM produktet WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: http://localhost/projekti-IWeb/htmlp/admin-dashboard.php');
    }
    
}
?>