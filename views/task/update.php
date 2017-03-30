<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>


            <h4>Редактировать Задание #<?php echo $id; ?></h4>

            <br/>

            <div class="col-sm-8 col-sm-offset-2">
                <div class="login-form">
                    <form action="" method="post">
                        <div class="input-field">
                            <input type="text" class="form-control" id="task_name" name="task_name"
                                   value="<?= $task['task_name'] ?>">
                            <label for="task_name">Название</label>
                        </div>

                        <div class="input-field">
                            <textarea class="materialize-textarea" id="description" name="description"><?= $task['description'] ?></textarea>
                            <label for="description">Описание</label>
                        </div>

                        <label for="deadline">Дедлайн</label>
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" name="deadline" id="deadline"
                                   value="<?= $task['deadline'] ?>"/>
                            <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>

                        <div class="form-group">
                            <div class="textcenter">
                                <button type="submit" name="submit" class="btn btn-primary">Отправить</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>

