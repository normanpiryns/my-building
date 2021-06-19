



<?php if (!empty($resident)): ?>


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
            <th scope="col"> Building</th>
            <th scope="col">apartment  </th>
            <th scope="col"> Update</th>
            <th scope="col">Cancel</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($resident as $resi): ?>
            <tr>
                <td><?= $resi->__get('firstName'); ?></td>
                <td><?= $resi->__get('lastName'); ?></td>
                <td><?= $resi->__get('telephone'); ?></td>
                <td><?= $resi->__get('email'); ?></td>
                <td><?= $resi->__get('birthDate'); ?></td>
                <td><?= $building->getBuildingById($resi->__get('building'))->__get('name') ?></td>
                <td><?= $appartment->getAppartmentById($resi->__get('appartment'))->__get('number') ?></td>

                <td class="cell100 column2">
                    <a href="/resident/edit/<?= $resi ->__get('id')?>">
                        <i class="fa fa-refresh" aria-hidden="true"></i>
                    </a>
                </td>

                <td class="cell100 column2">
                    <a href="/resident/delete/<?=$resi ->__get('id')?>">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>


        </tbody>
    </table>
    <?php endif; ?>
    <div class="butt">
        <button onclick="location.href='resident/create'"  > Add a resident  </button>
    </div>