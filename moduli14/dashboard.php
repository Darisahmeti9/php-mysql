<?php
   include_once("config.php");
   if(empty($_SESSION['username'])){
    header("location:login.php");
   }
   $sql = "SELECT * FROM users";
   $selectUsers = $conn->prepare($sql);
   $selectUsers->execute();

   $users_data = $selectUsers->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        table,td,th  {
            border: 1px solid black;
            border-collapse: collapse;
        }
        td,th{
            padding: 10px 20px;
        }
    </style>
</head>
<body>
          <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
            <a href="#" class="navbar-brand col-sm-3 col-md-2 mr-0">Welcome, <i><?php echo $_SESSION['username']?></i></a>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a href="logout.php" class="nav-link">Sign out</a>
                </li>
            </ul>
          </nav>
          <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <ul class="sidebar-sticky">
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                    </ul>
          </div>
                   
    <?php
    include_once('config.php');
    $sql = 'SELECT * FROM users';
    $getUsers = $conn->prepare($sql);
    $getUsers->execute();
    $users = $getUsers->fetchAll();
    ?>
    <table>
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Age</th>
            <th>Edit</th>
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
                    <td><?= $user['age']?></td>
                    <td><?="<a href='delete.php?id=$user[id]'> Delete</a> | <a href='edit.php?id=$user[id]'>Edit User</a>"?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <a href="index.php">Add User</a>
   
</body>
</html>