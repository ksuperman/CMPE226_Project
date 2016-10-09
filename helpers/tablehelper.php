<?php 
	function createCatalogProductRow(CatalogProduct $p)
    {
        print "        <tr>\n";
        print "            <td>" . $p->getId()     . "</td>\n";
        print "            <td>" . $p->getCatalogid()  . "</td>\n";
        print "            <td>" . $p->getCategory()   . "</td>\n";
        print "            <td>" . $p->getName() . "</td>\n";
        print "            <td>" . $p->getPrice() . "</td>\n";
        print "            <td>" . $p->getDescription() . "</td>\n";
        print "        </tr>\n";
    }

    function createOrderStatus(OrderStatus $orderStatus) {
        print "        <tr>\n";
        print "            <td>" . $orderStatus->getId()     . "</td>\n";
        print "            <td>" . $orderStatus->getStatus()  . "</td>\n";
        print "            <td>" . $orderStatus->getName()   . "</td>\n";
        print "            <td>" . $orderStatus->getPrice() . "</td>\n";
        print "            <td>" . $orderStatus->getQuantity() . "</td>\n";
        print "        </tr>\n";
    }

	 function createProductSales(ProductSales $productSales) {
        print "        <tr>\n";
        print "            <td>" . $productSales->getId()     . "</td>\n";
        print "            <td>" . $productSales->getName()  . "</td>\n";
        print "            <td>" . $productSales->getPrice()   . "</td>\n";
        print "            <td>" . $productSales->getDescription() . "</td>\n";
		print "        </tr>\n";
    }
	
	function fetchAccountDetails(ModeAddressAccount $modeAddressAccount) {
        print "        <tr>\n";
        print "            <td>" . $modeAddressAccount->getEmail()  . "</td>\n";
        print "            <td>" . $modeAddressAccount->getCardNumber()   . "</td>\n";
        print "            <td>" . $modeAddressAccount->getAddress() . "</td>\n";
        print "            <td>" . $modeAddressAccount->getType() . "</td>\n";
        print "        </tr>\n";
    }
    
    function createShopingCartRow(ShoppingCartProduct $sc) {
        print "        <tr>\n";
        print "            <td>" . $sc->getId()     . "</td>\n";
        print "            <td>" . $sc->getName()   . "</td>\n";
        print "            <td>" . $sc->getPrice() . "</td>\n";
        print "        </tr>\n";
    }

    function createAccountAddressRow(AccountAddress $sc) {
        print "        <tr>\n";
        print "            <td>" . $sc->getId()     . "</td>\n";
        print "            <td>" . $sc->getUnitNumber()   . "</td>\n";
        print "            <td>" . $sc->getStreetName() . "</td>\n";
        print "            <td>" . $sc->getCity() . "</td>\n";
        print "            <td>" . $sc->getCountry() . "</td>\n";
        print "            <td>" . $sc->getZipcode() . "</td>\n";
        print "        </tr>\n";
    }

?>