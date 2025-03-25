<?php

$getID = $_GET["idProduct"];
$query = mysqli_query($conn, "SELECT * FROM produk WHERE id = '" . $getID . "' ");
$data  = mysqli_fetch_array($query);

if ($lang == "id") {
   $desc = $data['description_id'];
   $ingr = $data['ingredients_id'];
   $lazada = $data['link_lazada_id'];
   $shopee = $data['link_shopee_id'];
   $tokopedia = $data['link_tokopedia_id'];
   $blibli = $data['link_blibli_id'];
   $jd = $data['link_jd_id'];
} elseif ($lang == "en") {
   $desc = $data['description_en'];
   $ingr = $data['ingredients_en'];
   $lazada = $data['link_lazada_sg'];
   $shopee = $data['link_shopee_sg'];
   $tokopedia = $data['link_tokopedia_sg'];
   $blibli = $data['link_blibli_sg'];
   $jd = $data['link_jd_sg'];
}
