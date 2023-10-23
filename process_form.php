<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeSobrenome = $_POST["nomesobrenome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $senha = $_POST["senha"];
    $contato = $_POST["contato"];
    $novidades = isset($_POST["novidades"]) ? "Sim" : "Não";

    
}
?>
