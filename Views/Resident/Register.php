<?php

include("C:\wamp\www\MyBuilding\Views\Templates\head.php");

$resident = new ResidentDAO();

// Insert Record in customer table
if (isset($_POST['submit'])) {
    $resident->insert($_POST);


}

?>

<form action="/resident/register" method="post" class="form-style-9">
    <ul>
        <li>
            <label for="firstName" class="form-label">Firstname : </label>
            <input type="text" class="form-control" id="firstName" name="firstName" >
        </li>
        <li>
            <label for="LastName" class="form-label">Lastname : </label>
            <input type="text" class="form-control" id="lastName" name="lastName">
        </li>
        <li>
            <label for="telephone" class="form-label">Phone number : </label>
            <input type="text" class="form-control" id="telephone" name="telephone">
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
            <label for="birthDate" class="form-label"> Birthdate :  </label><br>
            <input type="date" class="form-control" id="birthDate" name="birthDate">
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

<?php  include('C:\wamp\www\MyBuilding\Views\Templates\footer.php');
?>

