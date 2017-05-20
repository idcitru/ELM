<?php require(__DIR__ . "/header.php") ?>


    </form><a name="table"></a>
    <form action="index.php">

        <table class="table table-hover">
            <thead>
            <tr>
                <th><div align="center">Дата</div></th>
                <th><div align="center">Счет</div></th>
                <th><div align="center">Сумма</div></th>
                <th><div align="center">Описание</div></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td> <div align="center">
                        <input type="date" name="new_date" value="<?= date("Y-m-d")?>">
                    </div>
                </td>
                <td> <div align="center">
                        <select>
                            <?php foreach ($counts as $count) :?>
                                    <option name="new_count_id" value="<?= $count[0]?>"> <?= $count[1];?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </td>
                <td> <div align="center">
                        <input type="text" name="new_sum">
                    </div>
                </td>
                <td> <div align="center">
                        <input type="text" name="new_describe">
                    </div>
                </td>
            </tr>
        </table>

        <div class="row">
            <input type="hidden" name="route" value="c_add_arrival1" />
            <button type="submit" class="btn btn-default">Добавить</button>
        </div>
        </tbody>
    </form>




<?php require(__DIR__ . "/footer.php") ?>