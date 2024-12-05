<?php include "head.php"?>
<?php include "navbar.php"?>

<div class="container">


<?php 
    $id = $_GET["id"];
    $user_data = get_user($id)[0];
?>

<h1>Edit User <?=$user_data["name"]?></h1>

    <form action="functions.php?update=true" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">
            Name</label>
        <input type="text" class="form-control" id="name"  name="name" placeholder="Users name" value="<?=$user_data["name"]?>">
    </div>
    <div class="mb-3">
        <label for="surname" class="form-label">
            Surname</label>
        <input type="text" class="form-control" id="surname"  name="surname" placeholder="Users surname" value="<?=$user_data["surname"]?>">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">
            Email</label>
        <input type="text" class="form-control" id="email"  name="email" placeholder="Users email" value="<?=$user_data["email"]?>">
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">
        Username</label>
        <input type="text" class="form-control" id="username"  name="username" placeholder="Users username" value="<?=$user_data["username"]?>">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">
            Password</label>
        <input type="password" class="form-control" id="password"  name="password" placeholder="Users password" value="<?=$user_data["password"]?>">
    </div>
    <input type="hidden" name="id" value="<?=$user_data["id"]?>">

     <input type="submit" value="Save" class="btn btn-outline-primary">  

    </form>



</div>

<?php include "foot.php"?>