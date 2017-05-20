<?php require(__DIR__ . "/header.php") ?>


    <form action="index.php">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input type="hidden" name="route" value="!"№ />
                    <button type="submit" class="btn btn-primary">Добавить новый счет</button>
                </div>
            </div>
        </div>
    </form><a name="table"></a>


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




<?php require(__DIR__ . "/footer.php") ?>