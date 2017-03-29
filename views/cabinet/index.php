<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>
        <div class="container">
            <div class="row">
                <h3>Кабинет пользователя</h3>
                <h4>Привет, <?php echo $user['name']; ?>!</h4>
                <ul>
                    <li><a href="/cabinet/edit">Редактировать данные</a></li>

                </ul>

            </div>
        </div>

        <?php if (User::isDirector()) { ?>
            <div class="container">
                <div class="row">
                <a href="/director/create_task" class="btn btn-default back"><i class="fa fa-plus"></i> Create task</a>
                <a href="/director/add_from_file" class="btn btn-default back"><i class="fa fa-plus"></i> Add tasks from file</a>
                </div>
            </div>
        <?php } ?>

        <div class="container">
            <table class="table table-bordered table-responsive">
                <thead>
                <tr>
                    <th>Task name</th>
                    <th>Description</th>
                    <th>Dev name</th>
                    <th>Deadline</th>
                    <th>Status</th>
                    <th>хз зачем</th>
                </tr>
                </thead>
                <tbody>
                <?php if (isset($tasks)): ?>
                    <?php foreach ($tasks as $task): ?>
                        <tr>
                            <th><?= $task['task_name'] ?></th>
                            <th><?= $task['description'] ?></th>
                            <th><?= $task['user_id'] ?></th>
                            <th><?= $task['deadline'] ?></th>
                            <th><?= $task['complete'] ?></th>
                            <th><?= $task['id_task'] ?></th>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
            </table>

        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>