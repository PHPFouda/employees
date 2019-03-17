<!DOCTYPE html>
<html lang="en">
    <head>
        <title>اضافة عامل جديد</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
    </head>
    <body>
        <?php include('connectdb.php');?>

        <div class="container">
            <div class="employees-create">
                <h1>اضافة عامل جديد</h1>

                <?php 
                if(isset($_POST) && isset($_POST['Employees'])){
                    $name = $_POST['Employees']['name'];
                    $residency_number = $_POST['Employees']['residency_number'];
                    $residence_release_date = $_POST['Employees']['residence_release_date_year'] . '-'.
                        $_POST['Employees']['residence_release_date_month'] . '-' . $_POST['Employees']['residence_release_date_day'];
                    
                    $residence_expiration_date = $_POST['Employees']['residence_expiration_date_year'] . '-'.
                        $_POST['Employees']['residence_expiration_date_month'] . '-' . $_POST['Employees']['residence_expiration_date_day'];

                    $created = date('Y-m-d H:i:s', time());

                    $sql = "INSERT INTO employees (name, residency_number, residence_release_date, residence_expiration_date, created) VALUES(
                        '$name', '$residency_number', '$residence_release_date', '$residence_expiration_date', '$created'
                    )";
                    if($db->exec($sql)){
                        echo "Record has been created";
                        header( 'Location: index' ) ;
                    }else{
                        echo "An error has been occour while creatiing the record";
                    }

                }

                ?>
                <div class="employees-form">
                    <form id="w0" action="" method="post">
                        <div class="form-group field-employees-name required">
                            <label class="control-label" for="employees-name">الاسم</label>
                            <input type="text" id="employees-name" class="form-control" name="Employees[name]" maxlength="250" aria-required="true">
                            <div class="help-block"></div>
                        </div>
                        <div class="form-group field-employees-residency_number required">
                            <label class="control-label" for="employees-residency_number">رقم الاقامة</label>
                            <input type="text" id="employees-residency_number" class="form-control" name="Employees[residency_number]" aria-required="true">
                            <div class="help-block"></div>
                        </div>
                        <div class="form-group field-employees-residence_release_date required">
                            <label class="control-label" for="residence_release_date_day">تاريخ اصدار الاقامة</label>
                            <select name="Employees[residence_release_date_day]" id="residence_release_date_day" style="width:69px;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <select name="Employees[residence_release_date_month]" id="residence_release_date_month" style="width:62px;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <select name="Employees[residence_release_date_year]" id="residence_release_date_year" style="width:91px;">
                                <option value="1420">1420</option>
                                <option value="1421">1421</option>
                                <option value="1422">1422</option>
                                <option value="1423">1423</option>
                                <option value="1424">1424</option>
                                <option value="1425">1425</option>
                                <option value="1426">1426</option>
                                <option value="1427">1427</option>
                                <option value="1428">1428</option>
                                <option value="1429">1429</option>
                                <option value="1430">1430</option>
                                <option value="1431">1431</option>
                                <option value="1432">1432</option>
                                <option value="1433">1433</option>
                                <option value="1434">1434</option>
                                <option value="1435">1435</option>
                                <option value="1436">1436</option>
                                <option value="1437">1437</option>
                                <option value="1438">1438</option>
                                <option value="1439">1439</option>
                                <option value="1440">1440</option>
                                <option value="1441">1441</option>
                                <option value="1442">1442</option>
                                <option value="1443">1443</option>
                                <option value="1444">1444</option>
                                <option value="1445">1445</option>
                                <option value="1446">1446</option>
                                <option value="1447">1447</option>
                                <option value="1448">1448</option>
                                <option value="1449">1449</option>
                                <option value="1450">1450</option>
                            </select>
                        </div>

                        <div class="form-group field-employees-residence_expiration_date required">
                            <label class="control-label" for="residence_expiration_date_day">تاريخ انتهاء الاقامة</label>
                            <select name="Employees[residence_expiration_date_day]" id="residence_expiration_date_day" style="width:69px;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <select name="Employees[residence_expiration_date_month]" id="residence_expiration_date_month" style="width:62px;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <select name="Employees[residence_expiration_date_year]" id="residence_expiration_date_year" style="width:91px;">
                                <option value="1420">1420</option>
                                <option value="1421">1421</option>
                                <option value="1422">1422</option>
                                <option value="1423">1423</option>
                                <option value="1424">1424</option>
                                <option value="1425">1425</option>
                                <option value="1426">1426</option>
                                <option value="1427">1427</option>
                                <option value="1428">1428</option>
                                <option value="1429">1429</option>
                                <option value="1430">1430</option>
                                <option value="1431">1431</option>
                                <option value="1432">1432</option>
                                <option value="1433">1433</option>
                                <option value="1434">1434</option>
                                <option value="1435">1435</option>
                                <option value="1436">1436</option>
                                <option value="1437">1437</option>
                                <option value="1438">1438</option>
                                <option value="1439">1439</option>
                                <option value="1440">1440</option>
                                <option value="1441">1441</option>
                                <option value="1442">1442</option>
                                <option value="1443">1443</option>
                                <option value="1444">1444</option>
                                <option value="1445">1445</option>
                                <option value="1446">1446</option>
                                <option value="1447">1447</option>
                                <option value="1448">1448</option>
                                <option value="1449">1449</option>
                                <option value="1450">1450</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">حفظ</button>
                            <a class="btn btn-success" href="index.php">الرجوع للخلف</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>