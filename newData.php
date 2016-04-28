<?php
require_once('MRepository.php');

$taskreposit = new MRepository();

$categories = $taskreposit->getAll('category');
?>

<form method="post" id="saveData" action="#">
    <table class="table table-bordered">
        <tr>
            <td>Title</td>
            <td><input type="text" id="title" name="title" class="form-control" placeholder="ToDo z.B. Hausübung erledigen!" required /></td>
        </tr>
        <tr>
            <td>Deadline</td>
            <td><input type="datetime" name="deadline" class="form-control" placeholder="Datum z.B. 28.04.2016" required/></td>
        </tr>
        <tr>
            <td>Category</td>
            <td>
                <select class="form-control" id="category-list">
                    <?php foreach ($categories as $cat) {?>
                    <option><?php echo $cat->title ?></option>
                    <?php } ?>
                </select>
                <br>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-info" name="submit" id="btn-submit">
                    <span class="glyphicon glyphicon-save"></span> Save Data
                </button>
            </td>
        </tr>
    </table>
</form>
