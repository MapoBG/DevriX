<?php include_once "views/templates/header.php"; ?>
<h2>Edit Job Offer Form</h2>
<div id="error">
    <h3 style="color: red"><?=$error;?></h3>
</div>

<div class="container">
    <form method="post">
        <div class="row">
            <div class="col-25">
                <label for="title">Title</label>
            </div>
            <div class="col-75">
                <input type="text" id="title" name="title" value="<?php echo $item->getTitle() ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="company">Company</label>
            </div>
            <div class="col-75">
                <input type="text" id="company" name="company" value="<?php echo $item->getCompany() ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="salary">Salary</label>
            </div>
            <div class="col-75">
                <input type="text" id="salary" name="salary" value="<?php echo $item->getSalary() ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="description">Description</label>
            </div>
            <div class="col-75">
                <textarea id="description" name="description" style="height:200px; width:560px"><?php echo $item->getDescription() ?></textarea>
            </div>
        </div>
        <div class="row">
            <input type="submit" name="edit" value="Edit">
        </div>
    </form>
</div>

<?php include_once "views/templates/footer.php"; ?>
