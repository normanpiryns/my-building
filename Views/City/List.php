

<?php if (!empty($city)): ?>

<div style="margin-left:300px;margin-right:300px">
    <h1 style="text-align:center;"> city  list  </h1>
    <table class="table  table-striped table-hover table-bordered" id="data"  >
        <thead class="thead-dark">
        <tr>

            <th scope="col">Name </th>
            <th scope="col">Postcode</th>
            <th scope="col">Cancel </th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($city as $cit): ?>
            <tr>
                <td><?= $cit->__get('name'); ?></td>
                <td><?= $cit->__get('postcode'); ?></td>
                <td class="cell100 column2">
                    <a href="building/delete?id=<?= $cit -> __get('id')?>">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>

            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>
    <div class="butt">
        <button onclick="location.href='city/insert'"  > Add a city  </button>
    </div>

