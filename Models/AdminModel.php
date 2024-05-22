<?php
class AdminModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($username, $password)
    {
        $response = $this->initialResponse();

        try {
            $sql = "SELECT * FROM usuarios WHERE username = ?";
            $data = [
                "username" => $username,
            ];
            $result = $this->select($sql, $data);

            if ($result != null) {
                if (password_verify($password,  $result["password"])) {
                    $response->status = true;
                    $response->message = "Usuario autenticado";
                    $response->data = $result;
                    $response->code = 200;
                } else {
                    $response->status = false;
                    $response->message = "Contraseña incorrecta";
                    $response->data = null;
                    $response->code = 400;
                }
            } else {
                $response->status = false;
                $response->message = "Usuario no encontrado";
                $response->data = null;
                $response->code = 400;
            }
        } catch (Exception $e) {
            $response->error = $e->getMessage();
        } finally {
            return $response;
        }
    }
    private function initialResponse()
    {
        $response = new stdClass();
        $response->status = false;
        $response->message = "Error en el servidor";
        $response->data = null;
        $response->code = 500;
        $response->error = null;
        return $response;
    }
}
