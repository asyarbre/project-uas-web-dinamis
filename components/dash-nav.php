<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); 
$base_url="http://localhost/web-dinamis-uas/dashboard/";
$landing_url="http://localhost/web-dinamis-uas/landing-page/";
?>

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fa-solid fa-house"></i>
    <span>Home</span>
  </a>
  <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Section : </h6>
      <a class="collapse-item <?= ($activePage == '1') ? 'active':''; ?>" href="<?php echo $base_url?>home/section-one/1.php">1</a>
      <a class="collapse-item <?= ($activePage == '2') ? 'active':''; ?>" href="<?php echo $base_url?>home/section-two/2.php">2</a>
    </div>
  </div>
</li>
<li class="nav-item <?= ($activePage == 'about') ? 'active':''; ?>">
  <a class="nav-link" href="<?php echo $base_url?>about/about.php">
    <i class="fa-solid fa-info"></i>
    <span>About</span></a>
</li>
<li class="nav-item <?= ($activePage == 'bisnis') ? 'active':''; ?>">
  <a class="nav-link" href="<?php echo $base_url?>bisnis/bisnis.php">
    <i class="fa-solid fa-money-check"></i>
    <span>Bisnis</span></a>
</li>
<li class="nav-item <?= ($activePage == 'newsroom') ? 'active':''; ?>">
  <a class="nav-link" href="<?php echo $base_url?>newsroom/newsroom.php">
    <i class="fa-solid fa-newspaper"></i>
    <span>Newsroom</span></a>
</li>
<li class="nav-item <?= ($activePage == 'gabung') ? 'active':''; ?>">
  <a class="nav-link" href="<?php echo $base_url?>gabung/gabung.php">
    <i class="fa-solid fa-users"></i>
    <span>Gabung</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="<?php echo $landing_url?>home.php" target="_blank">
    <i class="fa-solid fa-globe"></i>
    <span>Go To Website</span></a>
</li>