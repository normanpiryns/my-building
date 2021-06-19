
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
    <h2 style="text-align:center"> Modify an owner's information</h1> <hr>
        <form action="/user/update" method="post" class="form-style-9">
            <ul style="list-style: none;">

                <input name="id" type="hidden" value="<?= $User->__get('id')?>">

                <li>
                    <label for="username" class="form-label">Name : </label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= $User->__get('username');?>" >
                </li>

                <li>
                    <label for="email" class="form-label"> Email : </label><br>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $User->__get('email');?>">
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
