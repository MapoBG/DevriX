<?php require_once "views/templates/header.php"; ?>
    <div id="error">
        <h3 style="color: red"><?=$error;?></h3>
    </div>

    <div class="job-single">
        <main class="job-main">
            <div class="job-card">
                <div class="job-primary">
                    <header class="job-header">
                        <h2 class="job-title"><a href="details.php?id=<?php echo $id ?>"><?php echo $item->getTitle() ?></a></h2>
                        <div class="job-meta">
                            <a class="meta-company" href="details.php?id=<?php echo $id ?>"><?php echo $item->getCompany() ?></a>
                            <span class="meta-date">Posted <?php echo $item->getPostedOn() ?></span>
                        </div>
                        <div class="job-details">
<!--                            <span class="job-location">The Hague (The Netherlands)</span>-->
                            <span class="job-type">Salary: <?php echo $item->getSalary() ?>&euro;</span>
                        </div>
                    </header>

                    <div class="job-body">
                        <?php foreach ($lines as $line):?>
                            <p><?php echo $line ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </main>
        <aside class="job-secondary">
            <div class="job-logo">
                <div class="job-logo-box">
                    <img src="https://i.imgur.com/ZbILm3F.png" alt="">
                </div>
            </div>
            <a href="#" class="button button-wide">Apply now</a>
            <a href="#">apple.com</a>
        </aside>
    </div>

    <h2 class="section-heading">Other related jobs:</h2>
    <ul class="jobs-listing">
<?php foreach($filtered as $item): ?>
    <li class="job-card">
        <div class="job-primary">
            <h2 class="job-title"><a href="details.php?id=<?php echo $item['id'] ?>"><?php echo $item['title'] ?></a></h2>
            <div class="job-meta">
                <a class="meta-company" href="details.php?id=<?php echo $item['id'] ?>"><?php echo $item['company'] ?></a>
                <span class="meta-date">Posted <?php echo $item['posted_on'] ?></span>
            </div>
            <div class="job-details">
<!--                <span class="job-location">The Hague (The Netherlands)</span>-->
                <span class="job-type">Salary: <?php echo $item['salary'] ?>&euro;</span>
            </div>
        </div>
        <div class="job-logo">
            <div class="job-logo-box">
                <img src="https://i.imgur.com/ZbILm3F.png" alt="">
            </div>
        </div>
    </li>
<?php endforeach; ?>

<?php require_once "views/templates/footer.php"; ?>