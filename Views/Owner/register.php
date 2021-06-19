
<div class="formulaire" style="margin-left:600px;margin-right:600px">
    <h2 style="text-align:center"> Owner registration</h1> <hr>
    <form action="/owner/insert" method="post" class="form-style-9">
        <ul style="list-style: none;">
            <li>
                <label for="firstname" class="form-label">First Name : </label>
                <input type="text" class="form-control" id="firstname" name="firstname" >
            </li>

            <li>
                <label for="lastname" class="form-label"> Last Name : </label><br>
                <input type="text" class="form-control" id="lastname" name="lastname">
            </li>
            <li>
                <label for="telephone" class="form-label"> Telephone :  </label><br>
                <input type="text" class="form-control" id="telephone" name="telephone">
            </li>
            <li>
                <label for="email" class="form-label"> E-mail : </label><br>
                <input type="email" class="form-control" id="email" name="email">
            </li>
            <li>
                <label for="birthdate" class="form-label"> Birth date : </label><br>
                <input type="date" class="form-control" id="birthdate" name="birthdate">
            </li>
            
            
            <hr>
            <li>
                <div class="butt">
                    <button type="submit" name="submit" > Register   </button>
                </div>
            </li>
        </ul>
    </form>
</div>