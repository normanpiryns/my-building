<div class="formulaire" style="margin-left:600px;margin-right:600px">
    <h2 style="text-align:center"> resident's update </h1> <hr>
        <form action="/resident/update" method="post" class="form-style-9">
            <ul style="list-style: none;">

                <input name="id" type="hidden" value="<?= $resident->__get('id')?>">

                <li>
                    <label for="firstname" class="form-label">Firstname : </label>
                    <input type="text" class="form-control" id="firstname" name="firstname" value="<?= $resident->__get('firstName');?>" >
                </li>

                <li>
                    <label for="lastname" class="form-label"> Lastname : </label><br>
                    <input type="text" class="form-control" id="lastname" name="lastname" value="<?= $resident->__get('lastName');?>">
                </li>
                <li>
                    <label for="telephone" class="form-label"> Telephone :  </label><br>
                    <input type="text" class="form-control" id="telephone" name="telephone" value="<?= $resident->__get('telephone');?>">
                </li>
                <li>
                    <label for="email" class="form-label"> Email :  </label><br>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $resident->__get('email');?>">
                </li>
                <li>
                    <label for="birthdate" class="form-label"> Birthdate :  </label><br>
                    <input type="date" class="form-control" id="birthdate" name="birthdate" value="<?= $resident->__get('birthDate');?>">
                </li>
                <li>
                    <label for="appartment" class="form-label"> Appartment :  </label><br>
                    <input type="number" class="form-control" id="appartment" name="appartment" value="<?= $resident->__get('appartment');?>">
                </li>



                <hr>
                <li>
                    <div class="butt">
                        <button type="submit" name="submit" > Update   </button>
                    </div>
                </li>
            </ul>
        </form>
</div>
