<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class testeController extends Controller {
    
    public function index() {
        return view('index');
    }
    public function primeiraView() {
        return view(teste.primeiraView);
    }
    public function segundaView() {
        return view('segunda');
    }
    public function terceiraView() {
        return view('terceiraView');
    }
    public function show($nome) {
        $data = array(
            'nome' => $nome
        );
        return view('segundaview', $data);
    }
    public function create() {
        try {
           return "Olá Método Create!";
        } catch (Exception $e) {
            return null;
        }
    }
    public function store() {
        try {
            return "Olá Método Store!";
        } catch (Exception $e) {
            return null;
        }
    }
    public function show1($id) {
        try {
            return "Olá Método Show!";
        } catch (Exception $e) {
            return null;
        }
    }
}