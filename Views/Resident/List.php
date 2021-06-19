

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

<?php if (!empty($residents)): ?>


<div style="margin-left:300px;margin-right:300px">
    <h1 style="text-align:center;"> Residents list  </h1>
    <table class="table  table-striped table-hover table-bordered" id="data"  >
        <thead class="table-primary">
        <tr>

            <th scope="col">Firstname </th>
            <th scope="col">Lastname</th>
            <th scope="col">telephone</th>
            <th scope="col">email</th>
            <th scope="col">Birthdate </th>
            <th scope="col">Building</th>
            <th scope="col">Apartment  </th>
            <th scope="col">Update</th>
            <th scope="col">Cancel</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($residents as $resident): ?>
            
            <tr>
                <td><?= $resident->__get('firstName'); ?></td>
                <td><?= $resident->__get('lastName'); ?></td>
                <td><?= $resident->__get('telephone'); ?></td>
                <td><?= $resident->__get('email'); ?></td>
                <td><?= $resident->__get('birthDate'); ?></td>
                <td><?= $building->getBuildingById($resident->__get('building'))->__get('name') ?></td>
                <td><?= $appartment->getAppartmentById($resident->__get('appartment'))->__get('number') ?></td>

                <td class="cell100 column2">
                    <a href="/resident/edit/<?= $resident ->__get('id')?>">
                        <i class="fa fa-refresh" aria-hidden="true"></i>
                    </a>
                </td>

                <td class="cell100 column2">
                    <a href="/resident/delete/<?=$resident ->__get('id')?>">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>


        </tbody>
    </table>
    <?php endif; ?>
    <div class="butt">
        <button onclick="location.href='/resident/create'"  > Add a resident  </button>
    </div>