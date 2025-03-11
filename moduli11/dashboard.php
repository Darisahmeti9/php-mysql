<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 11</title>
    <style>
        table,td,th {
            border: 1px solid black;
            border-collapse: collapse;
        }
        td,th {
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <?php
    include_once('condig.php');
    $sql = 'SELECT * FROM user';
    $getUsers = $conn->prepare($sql);
    $getUsers->execute();
    $user = $getUsers->fetchAll(); 
    ?>
    <table>
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
        </thead>
    <tbody>
        <?php
        foreach($users as $user) {
            ?>
            <tr>
                <td><?= $user['id']?></td>
                <td><?= $user['name']?></td>
                <td><?= $user['surname']?></td>
                <td><?= $user['email']?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
    </table>
    <a href="index.php">Add User</a>
    
</body>
</html>