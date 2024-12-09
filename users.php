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
        <td>Delete</td>
    <tr>
    <?php foreach(get_users() as $user): ?>
        <tr>
            <td><?=$user["name"]?></td>
            <td><?=$user["surname"]?></td>
            <td><?=$user["email"]?></td>
            <td><?=$user["username"]?></td>
            <td><?=$user["password"]?></td>
            <td><a href="edit_user.php?id=<?=$user["id"]?>" class="btn btn-outline-secondary">Edit</a></td>
            <td>
                <a href="functions.php?delete=true&id=<?=$user["id"]?>" class="btn btn-outline-danger delButton">Delete</a></td>
        </tr>    
    
    <?php endforeach?>    

</table>

<div>
    <a href="create_user.php" class="btn btn-outline-primary">+ Create user</a>
</div>
</div>
<script>
        let delButtons = document.querySelectorAll(".delButton");

        for(button of delButtons){
            button.onclick = (event)=>{
                event.preventDefault();
                if(confirm("Really want to delete???")){
                fetch(event.target.href)
                    .then(location.reload())
        }
        }   
    }
    
</script>
<?php include "foot.php"?>