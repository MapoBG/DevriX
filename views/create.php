<?php include_once "views/templates/header.php"; ?>
<h2>Create New Job Offer Form</h2>
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
                <input type="text" id="title" name="title" value="<?php echo $_POST['title'] ?? '' ?>" placeholder="Your job offer title...">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="company">Company</label>
            </div>
            <div class="col-75">
                <input type="text" id="company" name="company" value="<?php echo $_POST['company'] ?? '' ?>" placeholder="Your company name...">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="salary">Salary</label>
            </div>
            <div class="col-75">
                <input type="text" id="salary" name="salary" value="<?php echo $_POST['salary'] ?? '' ?>" placeholder="Your offered salary...">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="description">Description</label>
            </div>
            <div class="col-75">
                <textarea id="description" name="description" placeholder="Your offer description..." style="height:200px; width:560px"><?php echo $_POST['description'] ?? '' ?></textarea>
            </div>
        </div>
        <div class="row">
            <input type="submit" name="create" value="Create">
        </div>
    </form>
</div>

<?php include_once "views/templates/footer.php"; ?>