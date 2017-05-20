<?php require(__DIR__ . "/header.php") ?>

    <div class="row">
        <div class="col-md-8">
                <h1>Счета</h1>
        </div>

        <div class="col-md-4">  <h3 align="right">Итого на счетах: <?= $sum; ?></h3></div>
    </div>


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
                <td> <div align="left"> <?= $count[0];?> </div> </td>
                <td> <div align="right"> <?= (!$count[1] ? ("0") : $count[1]);  ?> </div> </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="page-header">
        <h1>Фонды</h1>
    </div>

    <div class="page-header">
        <h1>Цели</h1>
    </div>

<?php require(__DIR__ . "/footer.php") ?>