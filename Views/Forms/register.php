<?php



$user = new UserDAO();

if (isset($_POST['submit'])) {
    $user->store($_POST);


}

?>

<form action="/user/register" method="post" class="form-style-9">
    <ul>
        <li>
            <label for="username" class="form-label">Username : </label>
            <input type="text" class="form-control" id="username" name="username" >
        </li>

        <li>
            <label for="email" class="form-label"> E-mail : </label><br>
            <input type="text" class="form-control" id="email" name="email">
        </li>
        <li>
            <label for="password" class="form-label"> Password :  </label><br>
            <input type="text" class="form-control" id="password" name="password">
        </li>

        <li>
            <div class="butt">
                <button type="submit" name="submit" > Register   </button>
            </div>
        </li>
    </ul>
</form>
