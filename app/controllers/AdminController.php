<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\Models\Customer;
use Formacom\Models\Address;

class AdminController extends Controller{
    public function index(...$params){
        $customer = Customer::find(1);
        $data = [
            'mensaje' => '¡Bienvenido a la página de inicio!',
            'customer' => $customer
        ];
        $this->view('home', $data);
    }
}
?>

