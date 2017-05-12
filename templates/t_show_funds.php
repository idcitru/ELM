<?php require(__DIR__ . "/header.php") ?>





    <table class="table table-hover">
        <thead>
        <tr>
            <th><div align="center">Название фонда</div></th>
            <th><div align="center">%</div></th>



        </tr>
        </thead>
        <tbody>

        <?php foreach ($funds as $fund): ?>
            <tr>
                <td> <div align="center"> <?= $fund[1];?> </div> </td>
                <td> <div align="center"> <?= $fund[2];?> </div> </td>


            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>




<?php require(__DIR__ . "/footer.php") ?>