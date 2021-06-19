



<?php if (!empty($residents)): ?>


<div style="margin-left:300px;margin-right:300px">
    <h1 style="text-align:center;"> Residents list  </h1>
    <table class="table  table-striped table-hover table-bordered" id="data"  >
        <thead class="thead-dark">
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