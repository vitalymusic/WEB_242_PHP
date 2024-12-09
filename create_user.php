<?php include "head.php"?>
<?php include "navbar.php"?>

<div class="container">


<h1>Create User</h1>

    <form action="functions.php?create=true" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">
            Name</label>
        <input type="text" class="form-control" id="name"  name="name" placeholder="Users name">
    </div>
    <div class="mb-3">
        <label for="surname" class="form-label">
            Surname</label>
        <input type="text" class="form-control" id="surname"  name="surname" placeholder="Users surname">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">
            Email</label>
        <input type="text" class="form-control" id="email"  name="email" placeholder="Users email">
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">
        Username</label>
        <input type="text" class="form-control" id="username"  name="username" placeholder="Users username">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">
            Password</label>
        <input type="password" class="form-control" id="password"  name="password" placeholder="Users password" >
    </div>

     <input type="submit" value="Save" class="btn btn-outline-primary">  

    </form>



</div>

<?php include "foot.php"?>