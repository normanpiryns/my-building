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
    <h1 style="text-align:center;"> Appartment registration</h1> <hr>
    <form action="/appartment/register" method="post" class="form-style-9">
        <ul>
            <li>
                <label for="number" class="form-label">number : </label>
                <input type="text" class="form-control" id="number" name="number" >
            </li>
<?php if(!empty($building)): ?>
            <li>
                <label for="building" class="form-label"> building : </label><br>
                <select name="building" id="building" >
                    <?php foreach ($building as $built ){ ?>
                        <option value="<?php echo $built['id']; ?>"><?php echo $built['name']; ?></option>
                    <?php }?>
                </select>
            </li>
<?php endif;?>
            <li>
                <label for="password" class="form-label"> Password :  </label><br>
                <input type="text" class="form-control" id="password" name="password">
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