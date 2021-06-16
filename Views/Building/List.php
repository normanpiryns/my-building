<?php if (!empty($building)): ?>


<div style="margin-left:300px;margin-right:300px">
    <h1 style="text-align:center;"> Building  list  </h1>
    <table class="table  table-striped table-hover table-bordered" id="data"  >
        <thead class="thead-dark">
        <tr>

            <th scope="col">Name </th>
            <th scope="col">street</th>
            <th scope="col">number</th>
            <th scope="col">city </th>
            <th scope="col">Cancel </th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($building as $build): ?>
            <tr>
                <td><?= $build->__get('name'); ?></td>
                <td><?= $build->__get('street'); ?></td>
                <td><?= $build->__get('number'); ?></td>
                <td><?= $build->__get('city'); ?></td>
                <td class="cell100 column2">
                    <a href="building/delete?id=<?= $build -> __get('id')?>">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>

            </tr>
        <?php endforeach; ?>


        </tbody>
    </table>
    <?php endif; ?>
    <div class="butt">
        <button onclick="location.href='building/insert'"  > Add a building  </button>
    </div>

