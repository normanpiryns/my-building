<?php if (!empty($appartment)): ?>


<div style="margin-left:300px;margin-right:300px">
    <h1 style="text-align:center;"> Appartments  list  </h1>
    <table class="table  table-striped table-hover table-bordered" id="data"  >
        <thead class="thead-dark">
        <tr>

            <th scope="col">Number </th>
            <th scope="col">Building</th>
            <th scope="col">owner</th>
            <th scope="col">rent status </th>
            <th scope="col">Update </th>
            <th scope="col"> Cancel</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($appartment as $appart): ?>
            <tr>
                <td><?= $appart->__get('number'); ?></td>
                <td><?= $building->getBuildingById($appart->__get('building'))->__get('name') ?></td>
                <td><?= $Owner->getOwnerById($appart->__get('owner'))->__get('firstName') ?></td>
                <td><?= $appart->__get('rented'); ?></td>
                <td class="cell100 column2">
                    <a href="/appartment/edit/<?= $appart ->__get('id')?>">
                        <i class="fa fa-refresh" aria-hidden="true"></i>
                    </a>
                </td>

                <td class="cell100 column2">
                    <a href="/appartment/delete/<?=$appart->__get('id')?>">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </td>

            </tr>
        <?php endforeach; ?>


        </tbody>
    </table>
    <?php endif; ?>
    <div class="butt">
        <button onclick="location.href='resident/insert'"  > Add a resident  </button>
    </div>
