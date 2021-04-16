<?php include_once "views/templates/header.php"; ?>
<div id="error">
    <h3 style="color: red"><?=$error;?></h3>
</div>
    <ul class="jobs-listing">

<?php foreach($items as $item): ?>
       <li class="job-card">
            <div class="job-primary">
                <h2 class="job-title"><a href="details.php?id=<?php echo $item['id']?>"><?php echo $item['title']?></a></h2>
                <div class="job-meta">
                    <a class="meta-company" href="#"><?php echo $item['company']?></a>
                    <span class="meta-date">Posted <?php echo $item['posted_on']?></span>
                </div>
                <div class="job-details">
<!--                    <span class="job-location">The Hague (The Netherlands)</span>-->
                    <span class="job-type">Salary: <?php echo $item['salary']?>&euro;</span>
                </div>
            </div>
            <div class="job-logo">
                <div class="job-logo-box">
                    <img src="https://i.imgur.com/ZbILm3F.png" alt="">
                </div>
            </div>
       </li>
    <?php endforeach; ?>

<?php include_once "views/templates/footer.php"; ?>