<?php if (!empty($buildings)): ?>


<div style="margin-left:300px;margin-right:300px">
    <h1 style="text-align:center;"> Building  list  </h1>
    <table class="table  table-striped table-hover table-bordered" id="data"  >
        <thead class="thead-dark">
        <tr>

            <th scope="col">Name </th>
            <th scope="col">Street</th>
            <th scope="col">Number</th>
            <th scope="col">City</th>
            <th scope="col">Postal code</th>
            <th scope="col">Update </th>
            <th scope="col">Delete </th>
            

        </tr>
        </thead>
        <tbody>
        <?php foreach ($buildings as $building): ?>
            <tr>
                <td><?= $building->__get('name'); ?></td>
                <td><?= $building->__get('street'); ?></td>
                <td><?= $building->__get('number'); ?></td>
                <td><?= $cityDao->getCityById($building->__get('city'))->__get('name') ?></td>
                <td><?= $cityDao->getCityById($building->__get('city'))->__get('postcode'); ?></td>
                

                <td class="cell100 column2">
                    <a href="/building/edit/<?= $building ->__get('id')?>">
                        <i class="fa fa-refresh" aria-hidden="true"></i>
                    </a>
                </td>


                <td class="cell100 column2">
                    <a href="/building/delete/<?= $building ->__get('id')?>">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </td>

                
            </tr>
        <?php endforeach; ?>


        </tbody>
    </table>
    <?php endif; ?>
    <div class="butt">
        <button onclick="location.href='/building/create'"  > Add a building  </button>
    </div>

