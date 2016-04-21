<?php
require_once('TaskRepository.php');

$res = new ItemRepository();

$items = $res->getAll();

echo $items;
echo "0";
foreach ($items as $item) {
    echo $item->title;
    echo "1";
}

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
            <th>toFinish</th>
            <th>Category</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($items as $item)
    {
        ?>
        <tr>
            <?php
            ?>
            <td>
                <a data-id="<?php echo $row['id']; ?>" class="edit-link" href="#" title="Edit">
                    <span class="glyphicon glyphicon-pencil"></span>
                </a>
            </td>
            <td>
                <a data-id="<?php echo $row['id']; ?>" class="delete-link" href="#" title="Delete">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
