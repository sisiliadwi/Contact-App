<?php

include_once 'model/contact.php';

class ContactController {
    static function add() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            view('contact_page/layout', ['url' => 'view/contact_page/add']);
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
                'id' => $post['id'], 
                'nama_pemilik' => $post['nama_pemilik'],
                'no_hp' => $post['no_hp'],
                'jenis_kelamin' => $post['jenis_kelamin'],
                'user_fk' => $_SESSION['user']['id']
            ]);
            
            if ($contact) {
                header('Location: '.BASEURL.'dashboard/contacts');
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
            view('contact_page/layout', [
                'url' => 'view/contact_page/edit',
                'contact' => Contact::select($_GET['id'])
            ]);
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
                'nama_pemilik' => $post['nama_pemilik'],
                'no_hp' => $post['no_hp'],
                'jenis_kelamin' => $post['jenis_kelamin'],
            ]);
            if ($contact) {
                header('Location: '.BASEURL.'dashboard/contacts');
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
                header('Location: '.BASEURL.'dashboard/contacts');
            }
            else {
                header('Location: '.BASEURL.'dashboard/contacts?removeFailed=true');
            }
        }
    }
}