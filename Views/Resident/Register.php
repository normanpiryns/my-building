
<div class="formulaire" style="margin-left:600px;margin-right:600px">
    <h1 style="text-align:center;"> Resident form </h1> <hr>
    <form action="/resident/insert" method="post" class="form-style-9" >
        <ul>
            <li>
                <label for="firstname" class="form-label">Firstname : </label>
                <input type="text" class="form-control" id="firstname" name="firstname" >
            </li>
            <li>
                <label for="lastname" class="form-label">Lastname : </label>
                <input type="text" class="form-control" id="lastname" name="lastname">
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
                <label for="birthDate" class="form-label"> Birthdate :  </label><br>
                <input type="date" class="form-control" id="birthDate" name="birthDate">
            </li>
            <li>
                <label for="appartment" class="form-label">Appartment : </label>
                <input type="number" class="form-control" id="appartment" name="appartment">
            </li>
            
            <li>
                <label for="building" class="form-label"> City :  </label><br>
                <select name="building" id="building">
                    <?php foreach ($buildings as $building): ?>
                        <option value="<?= $building->__get('id'); ?>"><?= $building->__get('name'); ?></option>
                    <?php endforeach; ?>
                </select>
            </li>
            


            <li>
            <hr>
                <div class="butt">
                    <button type="submit" name="submit" > Register   </button>
                </div>
            </li>
        </ul>
    </form>

</div>






