

<?php if (!empty($city)): ?>

<div style="margin-left:300px;margin-right:300px">
    <h1 style="text-align:center;"> city  list  </h1>
    <table class="table  table-striped table-hover table-bordered" id="data"  >
        <thead class="thead-dark">
        <tr>

            <th scope="col">Name </th>
            <th scope="col">Postcode</th>
            <th scope="col">Update </th>
            <th scope="col"> Cancel</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($city as $cit): ?>
            <tr>
                <td><?= $cit->__get('name'); ?></td>
                <td><?= $cit->__get('postcode'); ?></td>
                <td class="cell100 column2">
                    <a href="/city/edit/<?= $cit ->__get('id')?>">
                        <i class="fa fa-refresh" aria-hidden="true"></i>
                    </a>
                </td>

                <td class="cell100 column2">
                    <a href="/city/delete/<?=$cit ->__get('id')?>">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </td>

            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>
    <div class="butt">
        <button onclick="location.href='city/create'"  > Add a city  </button>
    </div>

