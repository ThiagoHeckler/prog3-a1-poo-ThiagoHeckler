<?php

require_once 'Usuario.php';
require_once 'Sessao.php';

class Autenticador {
    private $usuarios;

    public function __construct() {
        // Simula uma base de dados com um array de objetos Usuario
        $this->usuarios = json_decode(file_get_contents('usuarios.json'), true) ?? [];
    }

    public function registrar(Usuario $usuario, $salvar = false) {
        if ($salvar) {
            // Salva o usuário na "base de dados" (arquivo JSON)
            $this->usuarios[] = [
                'nome' => $usuario->getNome(),
                'email' => $usuario->getEmail(),
                'senha' => $usuario->getSenha()
            ];
            file_put_contents('usuarios.json', json_encode($this->usuarios));
        } else {
            // Registra o usuário apenas na sessão
            Sessao::iniciar();
            Sessao::set('nome', $usuario->getNome());
            Sessao::set('email', $usuario->getEmail());
        }
    }

    public function login($email, $senha) {
        // Verifica na "base de dados"
        foreach ($this->usuarios as $usuario) {
            if ($usuario['email'] === $email && password_verify($senha, $usuario['senha'])) {
                return $usuario;
            }
        }
        return null;
    }
}
?>