<?php
require_once('MRepository.php');

$taskreposit = new MRepository();

$tasks = $taskreposit->getAll('task');
?>

<hr />
<button class="btn btn-info" type="button" id="btn-add">
    <span class="glyphicon glyphicon-plus"></span> &nbsp; Add Data
</button>
<hr />
<table cellspacing="0" width="100%" id="country_list" class="table table-responsive table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Deadline</th>
            <th>Category</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($tasks as $task)
    {
        ?>
        <tr>
            <td><?php echo $task->id ?></td>
            <td><?php echo $task->title ?></td>
            <td><?php echo $task->deadline ?></td>
            <td><?php echo $task->category_id ?></td>
            <td>
                <a data-id="<?php echo $row['id']; ?>" class="edit-link" href="#" title="Edit">
                    <span class="glyphicon glyphicon-pencil"></span>
                </a>
            </td>
            <td>
                <a data-id="<?php echo $row['id']; ?>" class="edit-link" href="#" title="Edit">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
