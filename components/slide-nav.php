<div class="mobile-nav-container">
  <div class="container-fluid">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
      <div class="nav-items-container row">
        <a href="products-clothes.php"><div class="mobile-nav-item">clothing</div></a>
        <a href="products-shoes.php"><div class="mobile-nav-item">footwear</div></a>
        <a href="#"><div class="mobile-nav-item">sale</div></a>
        <?php if(isset($_SESSION['logged_in'])) : ?>
          <a href="profile.php"><div class="mobile-nav-item">profile</div></a>
          <a href="cart.php"><div class="mobile-nav-item">cart</div></a>
          <a href="logout.php"><div class="mobile-nav-item">log out</div></a>
        <?php else : ?>
          <a href="register-user.php"><div class="mobile-nav-item">register</div></a>
          <a href="login.php"><div class="mobile-nav-item">log in</div></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
