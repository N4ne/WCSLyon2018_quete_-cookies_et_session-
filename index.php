<?php
require 'inc/head.php';


if (empty($_SESSION["login"] )) {
    header ("location: http://localhost:8000/login.php");
    die;
}


if (!empty($_GET['add_to_cart'])) {
  switch ($_GET['add_to_cart']) {
    case '46':
        if (empty($_COOKIE['panier']['Nuts'])){
            setCookie("panier[Nuts]", 1, strtotime("+10 days"));
            header ("location: index.php");
            break;
        }
        $_COOKIE['panier']["Nuts"]++;
        setCookie("panier[Nuts]",$_COOKIE["panier"]["Nuts"], strtotime("+10 days"));
        break;

        case '36':
            if (empty($_COOKIE['panier']['chips'])){
                setCookie("panier[chips]", 1, strtotime("+10 days"));
                header ("location: index.php");
                break;
            }
            $_COOKIE['panier']["chips"]++;
            setCookie("panier[chips]",$_COOKIE["panier"]["chips"], strtotime("+10 days"));
            break;

          case '58':
              if (empty($_COOKIE['panier']['cookie'])){
                  setCookie("panier[cookie]", 1, strtotime("+10 days"));
                  header ("location: index.php");
                  break;
            }
            $_COOKIE['panier']["cookie"]++;
            setCookie("panier[cookie]",$_COOKIE["panier"]["cookie"], strtotime("+10 days"));
            break;

            case '32':
                if (empty($_COOKIE['panier']['M&Ms'])){
                    setCookie("panier[M&Ms]", 1, strtotime("+10 days"));
                    header ("location: index.php");
                    break;
            }
            $_COOKIE['panier']["M&Ms"]++;
            setCookie("panier[M&Ms]",$_COOKIE["panier"]["M&Ms"], strtotime("+10 days"));
            break;
  }
  header("refresh:0.2;url=index.php");
}

?>



<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    <figure class="thumbnail text-center">
      <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
      <figcaption class="caption">
        <h3>Pecan nuts</h3>
        <h4><?= $_COOKIE['panier']['Nuts'] ?? '' ?></h4>
        <p>Cooked by Penny !</p>
          <form role="form" action="" method="GET">
              <input type="hidden" name="add_to_cart" value="46" />
              <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add to cart</button>
          </form>
      </figcaption>
    </figure>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    <figure class="thumbnail text-center">
      <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
      <figcaption class="caption">
        <h3>Chocolate chips</h3>
        <h4><?= $_COOKIE['panier']['chips'] ?? '' ?></h4>
        <p>Cooked by Bernadette !</p>
          <form role="form" action="" method="GET">
              <input type="hidden" name="add_to_cart" value="36" />
              <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add to cart</button>
          </form>
      </figcaption>
    </figure>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    <figure class="thumbnail text-center">
      <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
      <figcaption class="caption">
        <h3>Chocolate cookie</h3>
        <h4><?= $_COOKIE['panier']['cookie'] ?? '' ?></h4>
        <p>Cooked by Bernadette !</p>
          <form role="form" action="" method="GET">
              <input type="hidden" name="add_to_cart" value="58" />
              <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add to cart</button>
          </form>
      </figcaption>
    </figure>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    <figure class="thumbnail text-center">
      <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
      <figcaption class="caption">
        <h3>M&M's&copy; cookies</h3>
        <h4><?= $_COOKIE['panier']['M&Ms'] ?? '' ?></h4>
        <p>Cooked by Penny !</p>
          <form role="form" action="" method="GET">
              <input type="hidden" name="add_to_cart" value="32" />
              <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add to cart</button>
          </form>
      </figcaption>
    </figure>
  </div>

  </div>
</section>
<?php require 'inc/foot.php'; ?>
