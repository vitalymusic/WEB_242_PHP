<?php include "head.php"?>
<?php include "navbar.php"?>

<div class="container">
<h1>Users</h1>

<table class="table">
    <tr>
        <td>Name</td>
        <td>Surname</td>
        <td>Email</td>
        <td>Username</td>
        <td>Password</td>
        <td>Edit</td>
    <tr>
    <?php foreach(get_users() as $user): ?>
        <tr>
            <td><?=$user["name"]?></td>
            <td><?=$user["surname"]?></td>
            <td><?=$user["email"]?></td>
            <td><?=$user["username"]?></td>
            <td><?=$user["password"]?></td>
            <td><a href="edit_user.php?id=<?=$user["id"]?>" class="btn btn-outline-secondary">Edit</td>
        </tr>    
    
    <?php endforeach?>    

</table>
</div>

<?php include "foot.php"?>