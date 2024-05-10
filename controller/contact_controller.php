<?php
include_once __DIR__ . '/../model/contact_model.php';

class ContactController {
    static function contacts() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            view('contact/layout', ['url' => 'data_contact', 'contact' => Contact::select(), 'user' => $_SESSION['user']]);
        }
    }
    
    static function add() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            view('contact/layout', ['url' => 'add']);
        }
    }

    static function saveAdd() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            $post = array_map('htmlspecialchars', $_POST);
            $contact = Contact::insert([
                'no_hp' => $post['no_hp'], 
                'nama_pemilik' => $post['nama_pemilik'],
                'jenis_kelamin' => $post['jenis_kelamin'],
                'id_akun' => $_SESSION['user']['id']
            ]);
            
            if ($contact) {
                header('Location: '.BASEURL.'data_contact');
            }
            else {
                header('Location: '.BASEURL.'add?addFailed=true');
            }
        }
    }

    static function edit() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            view('contact/layout', ['url' => 'edit', 'contact' => Contact::select($_GET['id'])]);
        }
    }

    static function saveEdit() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            $post = array_map('htmlspecialchars', $_POST);
            $contact = Contact::update([
                'id' => $_GET['id'],
                'no_hp' => $post['no_hp'], 
                'nama_pemilik' => $post['nama_pemilik'],
                'jenis_kelamin' => $post['jenis_kelamin'],
            ]);
            if ($contact) {
                header('Location: '.BASEURL.'data_contact');
            }
            else {
                header('Location: '.BASEURL.'edit?id='.$_GET['id'].'&editFailed=true');
            }
        }
    }

    static function remove() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            $contact = Contact::delete($_GET['id']);
            if ($contact) {
                header('Location: '.BASEURL.'data_contact');
            }
            else {
                header('Location: '.BASEURL.'data_contact?removeFailed=true');
            }
        }
    }
}