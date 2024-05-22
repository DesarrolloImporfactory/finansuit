<?php

class Admin extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->views->render($this, "index");
    }
    public function login()
    {
        $get_data = file_get_contents("php://input");

        parse_str($get_data, $parsedData);

        // Validar y sanitizar los datos
        $username = filter_var($parsedData['username'], FILTER_SANITIZE_STRING);
        $password = filter_var($parsedData['password'], FILTER_SANITIZE_STRING);

        // Validar que los datos no estén vacíos
        if (empty($username) || empty($password)) {
            echo json_encode(["status" => 400, "response" => "Los campos no pueden estar vacíos"]);
            return;
        }

        $response = $this->model->login($username, $password);
        echo json_encode($response);
    }
}
