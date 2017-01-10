<html>
  <body>
<?php
/**
 * Code to fetch Products in collection and useing SKU's and  display the products
 *
 */
$pCollection = Mage::getModel('catalog/product')
->getCollection()
->addAttributeToFilter(
	'sku',
	array('in' => array(
		18811601,51361203,51360601,18811602,51361201,83545603,18811603// Test Sku's
		//18807601,18807603,10264601,18792202,  83527701, 56821204// sku dev setup
	)
)
    )	
    ->addAttributeToSelect('price')
    ->addAttributeToSelect('name')
    ->addAttributeToSelect('image')
    ->addAttributeToSelect('special_price');

//Media model to fetch Image URL
$productMediaConfig = Mage::getModel('catalog/product_media_config');
?>
	  <div class="product-list owlCarousel">
<?php
if (count($pCollectionBolt)>0){
	foreach ( $pCollectionBolt as $_product) {
		//Mage::Helper('training')->getProductDetails($_product); You can use helper to display the product details as you Wish
		//I'm adding code here itself
		$_pSku = $_product->getSku();
		$_pName = $_product->getName();
		$_pUrl = $_product->getProductUrl();
		$_pImageUrl = Mage::helper('catalog/image')->init($_product, 'image');
		//$_pPrice = $_product->getPrice();
		$_pPrice = $_product->getFinalPrice();
		echo "<div><a href='".$_pUrl."'><img src='".$_pImageUrl."' alt='".$_pName."' /></a>
			<div class='productname-price'><a href='".$_pUrl."' style='min-height:0px;'>".$_pName."</a><span>&#8377;".$_pPrice."</span></div>
			</div>";
	}
}else{
	echo "<span style='text-align:center'>No products in the List</span>";
}
?>
		</div>
	</body>
</html>            
