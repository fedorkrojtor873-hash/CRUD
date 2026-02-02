<?php
global $result;
include 'foo.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
          integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <button class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#create"><i
                        class="fa fa-plus"></i></button>
            <table class="table table-striped table-hover">
                <thead class="th-dark">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
                </thead>
                <tbody>

                <?php foreach ($result as $results) {
                    ?>
                    <tr>
                        <td><?php echo $results['id'] ?></td>
                        <td><?php echo $results['name'] ?></td>
                        <td><?php echo $results['email'] ?></td>
                        <td>
                            <a href="?id=<?php echo $results['id']; ?>" class="btn btn-success" data-bs-toggle="modal"
                               data-bs-target="#edit<?php echo $results['id'] ?>"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger " data-bs-toggle="modal"
                               data-bs-target="#delete<?php echo $results['id'] ?>"><i class="fa fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <!-- Modal Edit -->
                    <div class="modal fade" id="edit<?php echo $results['id']; ?>" tabindex="-1"
                         aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Изменить запись</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post">
                                        <input type="hidden" name="id" value="<?php echo $results['id']; ?>">
                                        <small>Имя</small>
                                        <div class="form-group">
                                            <label>
                                                <input type="text" class="form-control" name="name"
                                                       value=' <?php echo $results['name'] ?>'>
                                            </label>
                                        </div>
                                        <small>Email</small>
                                        <div class="form-group">
                                            <label>
                                                <input type="text" class="form-control"
                                                       name="email" value=' <?php echo $results['email'] ?> '>
                                            </label>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Закрыть
                                            </button>
                                            <button type="submit" class="btn btn-primary" name="edit">Изменить</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Edit -->
                    <!-- Modal Delete -->
                    <div class="modal fade" id="delete<?php echo $results['id']; ?>" tabindex="-1"
                         aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Удалить запись
                                        № <?php echo $results['id']; ?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post">
                                        <input type="hidden" name="id" value="<?php echo $results['id']; ?>">
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Закрыть
                                            </button>
                                            <button type="submit" class="btn btn-primary" name="delete">Удалить</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Delete -->
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal Create -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Добавить запись</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <small>Имя</small>
                    <div class="form-group">
                        <label>
                            <input type="text" class="form-control" name="name">
                        </label>
                    </div>
                    <small>Email</small>
                    <div class="form-group">
                        <label>
                            <input type="text" class="form-control" name="email">
                        </label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary" name="add">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Create -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
        integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y"
        crossorigin="anonymous"></script>
</body>
</html>