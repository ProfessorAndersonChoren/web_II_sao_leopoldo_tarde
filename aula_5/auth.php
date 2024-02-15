<?php
if (empty($_POST))
    throw new InvalidArgumentException("Requisição inválida!!!");

$email = $_POST['user_email'];
$password = $_POST['user_password'];

session_start();
if(accessVerify($email,$password)){
    // Achei o usuário
    header('location:dashboard.php');
    exit;
}
// Não achei o usuário
$_SESSION['msg_login_error'] = "Usuário ou senha inválidos!!!";
header('location:index.php');

function accessVerify(string $email, string $password): bool
{
    $db = [
        [
            'name' => 'Maria Aparecida',
            'email' => 'maria.aparecida@email.com.br',
            'password' => '$2y$10$3/nJwr/yWBMql9KmMKkBquakPoPbR9wbZEl3OTzYThZ/O8t6LCYL.',
            'gender' => 'F'
        ],
        [
            'name' => 'João Paulo',
            'email' => 'joao.paulo@email.com.br',
            'password' => '$2y$10$VUC0iN1tGZeXx2yuOmRYAuD2g8cu4QRJRjDQ65NLb6LVIoDPffR26',
            'gender' => 'M'
        ]
    ];

    foreach($db as $register){
        if(
            $register['email'] == $email
            && password_verify($password, $register['password'])
        ){
            return true;
        }
    }
    return false;
}
