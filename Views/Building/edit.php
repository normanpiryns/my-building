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
<div style="padding-top:10px;margin-left:450px;">
    <div style="float:left; width:500px;padding-left:100px">
        <h4 style="text-align:center;">  Modification of building's information </h4>
        <div class="container" ><br>
            <h1 class="text-center"></h1><hr><br>
            <div class="row animate__animated animate__pulse">
                <div class="col-md-4 offset-md-4">
                    <form action="/building/update" method="post" class="form-style-9">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input name="id" type="hidden" value="<?= $building->__get('id')?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="name" class="form-label">Name : </label>
                                <input type="text" class="form-control" id="name" name="name" value="<?= $building->__get('name');?>" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="street" class="form-label"> Street : </label><br>
                                <input type="text" class="form-control" id="street" name="street" value="<?= $building->__get('street');?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="number" class="form-label"> Number :  </label><br>
                                <input type="number" class="form-control" id="number" name="number" value="<?= $building->__get('number');?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="city" class="form-label"> City :  </label><br>
                                <select name="city" id="city">
                                    <?php foreach ($cities as $city): ?>
                                        <option value="<?= $city->__get('id'); ?>" <?php if($city->__get('name') == $cityDao->getCityById($building->__get('city'))->__get('name')): echo 'selected="selected"'; endif; ?>><?= $city->__get('name');?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
            
                            <hr>
                            <li>
                                <div class="butt">
                                    <button type="submit" name="submit" > Register   </button>
                                </div>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
