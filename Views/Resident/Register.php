<div  >
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary " >

        <ul class="nav navbar-nav " style="padding-left:300px" >
            <li class="nav-item"><a class="nav-link" href="/ticket"><i class="fa fa-inbox"></i> E-ticket </a></li>
            <li class="nav-item"><a class="nav-link" href="/communication"><i class="fa fa-inbox"></i> Communication </a></li>
            <li class="nav-item"><a class="nav-link" href="/user"><i class="fa fa-user-plus"></i> Users </a></li>
            <li class="nav-item"><a class="nav-link" href="/owner"><i class="fa fa-user-plus"></i> Owners </a></li>
            <li class="nav-item"><a class="nav-link" href="/resident"><i class="fa fa-user-plus"></i> Resident </a></li>
            <li class="nav-item"><a class="nav-link" href="/building"><i class="fa fa-building"></i> Building </a></li>
            <li class="nav-item"><a class="nav-link" href="/appartment"><i class="fa fa-building"></i> Appartment </a></li>
            <li class="nav-item"><a class="nav-link" href="/city"><i class="fa fa-directions"></i> Cities </a></li>
            <li class="nav-item"><a class="nav-link" href="/logout"><i class="fa fa-power-off"></i> log out  </a></li>
        </ul>

    </nav> <br>

</div>
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






