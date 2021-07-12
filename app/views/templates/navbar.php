<?php
$r = $_SERVER['REQUEST_URI'];
$r = explode('/', $r);
$r = array_filter($r);
$r = array_merge($r, array());

$endofurl = $r[2];
?>
<header class="mb-auto">
  <div>
    <h3 class="float-md-start mb-0">Bootapps</h3>
    <nav class="nav nav-masthead justify-content-center float-md-end">
      <a class="nav-link <?= ($endofurl == '')?'active':''; ?>" aria-current="page" href="<?= BASEURL; ?>">Wellcom</a>
    </nav>
  </div>
</header>
