<?php
    require "connexion.php";
    $stament=$pdo->query('select * from users');
    $rows=$stament->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App1</title>
    <style>
        body{
            margin-left: 50px;
            margin-right: 50px;
            margin-top: 50px;
            margin-bottom: 50px;
        }
        table,th,td{
            border: solid 1px black;
        }
    </style>
</head>
<body>
    <h3>Liste des utilisateurs</h3>
    <form action="insert.php" method="POST">
            <div>
                <label for="name">Non de l'utilisateur</label><br>
                <input type="text" name="username">
            </div>
            <div>
                <label for="name">Email</label><br>
                <input type="email" name="email">
            </div>
            <div>
                <label for="name">Téléphone</label><br>
                <input type="text" name="phone">
            </div>
            <div>
                <button type="submit">Sauvegarder</button>
            </div>
        </form>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $key => $row) { ?>
                    <tr>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['phone'] ?></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>
