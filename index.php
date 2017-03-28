<?php include 'header.php'; ?>
<div class="c-cases">
  <div class="o-grid  o-grid--gutterless">
    <div class="o-grid__item  o-1/1@mobile  o-1/1@tablet  o-1/2@tablet-fluid  o-1/2@laptop  o-1/2@desktop">
      <a class="c-case" href="proposal-1.php" style="background-image:url('./assets/img/cover-1.png');">
        <div class="c-case__details">
          <h1 class="c-case__title"><?php echo $contentInfo [1][1]; ?></h1>
          <p class="c-case__excerpt"><?php echo $contentInfo [1][2]; ?></p>
          <h5 class="c-case__topic">Bachelor Proposal I</h5>
        </div>
      </a>
    </div>
    <div class="o-grid__item  o-1/1@mobile  o-1/1@tablet  o-1/2@tablet-fluid  o-1/2@laptop  o-1/2@desktop">
      <a class="c-case" href="proposal-2.php" style="background-image:url('./assets/img/cover-2.png');">
        <div class="c-case__details">
          <h1 class="c-case__title"><?php echo $contentInfo [2][1]; ?></h1>
          <p class="c-case__excerpt"><?php echo $contentInfo [2][2]; ?></p>
          <h5 class="c-case__topic">Bachelor Proposal II</h5>
        </div>
      </a>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
