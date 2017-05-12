<?php require(__DIR__ . "/header.php") ?>

    <table class="table table-hover">
        <thead>
        <tr>
            <th><div align="center">Название счета</div></th>
            <th><div align="center">Сумма</div></th>

        </tr>
        </thead>
        <tbody>

        <?php foreach ($counts as $count): ?>
            <tr>
                <td> <div align="center"> <?= $count[0];?> </div> </td>
                <td> <div align="center"> <?= $count[1];?> </div> </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>




<?php require(__DIR__ . "/footer.php") ?>