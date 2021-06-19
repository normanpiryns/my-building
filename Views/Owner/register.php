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