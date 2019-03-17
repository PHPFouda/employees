<!DOCTYPE html>
<html lang="en">
<head>
    <title>العمال</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
</head>
<body>
    <a href="<?php echo $_SERVER["REQUEST_URI"];?>">Refresh</a>
    <?php 
        include('connectdb.php');
        $query = "SELECT * FROM employees";
        $result = $db->query($query);
    ?>
    <div class="container">
          <div class="media-index">

            <h1>العمال</h1>
            
            <p>
                <a class="btn btn-success" href="create.php">اضافة عامل جديد</a>
            </p>
            <p></p>

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th><a href="/sample/basic/web/employees/index?sort=id" data-sort="id">ID</a></th>
                        <th><a href="/sample/basic/web/employees/index?sort=residency_number" data-sort="residency_number">رقم الاقامة</a></th>
                        <th><a href="/sample/basic/web/employees/index?sort=name" data-sort="name">الاسم</a></th>
                        <th><a href="/sample/basic/web/employees/index?sort=residence_release_date" data-sort="residence_release_date">تاريخ اصدار الاقامة</a></th>
                        <th><a href="/sample/basic/web/employees/index?sort=residence_expiration_date" data-sort="residence_expiration_date">تاريخ انتهاء الاقامة</a></th>
                        <?php /*?><th class="action-column">&nbsp;</th><?php */?>
                    </tr>
                    <tr id="w0-filters" class="filters">
                        <td>&nbsp;</td>
                        <td><input type="text" class="form-control" name="EmployeesSearch[id]"></td>
                        <td><input type="text" class="form-control" name="EmployeesSearch[name]"></td>
                        <td><input type="text" class="form-control" name="EmployeesSearch[residency_number]"></td>
                        <td><input type="text" class="form-control" name="EmployeesSearch[residence_release_date]"></td>
                        <td><input type="text" class="form-control" name="EmployeesSearch[residence_expiration_date]"></td>
                        <?php /*?><td>&nbsp;</td><?php */?>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; while($row = $result->fetchArray()){?>
                        <tr data-key="<?=$row['id']?>">
                            <td><?=$i;?></td>
                            <td><?=$row['id']?></td>
                            <td><?=$row['residency_number']?></td>
                            <td><?=$row['name']?></td>
                            <td><?=$row['residence_release_date']?></td>
                            <td><?=$row['residence_expiration_date']?></td>
                            <?php /*?><td>
                                <a href="/sample/basic/web/employees/view?id=3" title="View" aria-label="View" data-pjax="0"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="/sample/basic/web/employees/update?id=3" title="Update" aria-label="Update" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a>
                                <a href="/sample/basic/web/employees/delete?id=3" title="Delete" aria-label="Delete" data-pjax="0" data-confirm="Are you sure you want to delete this item?" data-method="post"><span class="glyphicon glyphicon-trash"></span></a>
                            </td><?php */?>
                        </tr>
                    <?php $i++;} ?>
                </tbody>
            </table>
        </div>
    </div>

<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>