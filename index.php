<?php
require_once 'Carro.php';
require_once 'Moto.php';

$veiculo = [
    new Carro("Chevrolet", "Celta", 250, 1, 2),
    new Carro("Fiat", "Fiat Uno", 200, 1, 4),
    new Carro("Toyota", "Corolla", 120, 1, 4),
    new Carro("Honda", "Civic", 200, 1, 4),
    new Moto("Honda","Pop", 150, 1, 1000),
    new Moto("Yamaha","Pop", 150, 1, 1000),
    new Moto("Honda","Fazer", 350, 1, 1500),
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>📚 Sistema Escolar</h1>
        <table>
            <thead>
                <tr>
            <thead>
                <tr>
                    <th>Tip</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($veiculo as $v): ?>
                <tr>
                    <td><?= $v->infosVeiculos(); ?></td>
                    <!--chama o getTipo da classe 'Aluno' -->
                    <td><?= $v->getNome(); ?></td>
                    <!--chama o getNome da classe 'Pessoa' -->
                    <td><?= $v->getIdade(); ?></td>
                    <!--chama o getIdade da classe 'Pessoa' -->
                    <td><?= $v->getDescricao(); ?></td>
                    <!--chama o getDescricao da classe 'Pessoa' -->
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <footer>
            <p>Desenvolvido em PHP Orientado a Objetos – Exemplo de Herança e Polimorfismo</p>
        </footer>
    </div>
</body>
</html>