<?php
include 'db.php';
include 'dbname.php';
@$uid=your_session::read();
if (isset($uid))
{
  $bokmarkProductList = $db->query('SELECT pid FROM bookmarkproduct WHERE uid=? && state=? ',$uid,"action")->fetchAll();
  $likeproductList = $db->query('SELECT pid FROM likeproduct WHERE uid=? ',$uid)->fetchAll();
}
else
{
	echo "<script>alert('لطفا به حساب خود وارد شوید')<script>";
	header('location:localhost//c12.2.0/index.php');
}
// if(isset($_GET['BasketBuy']) && $_GET['BasketBuy'] == 'none')
// {
//   echo "<script>alert('سبد خرید شما خالی است')</script>";
// }
?>
