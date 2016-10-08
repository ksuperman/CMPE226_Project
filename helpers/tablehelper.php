<?php 
	function createTableRow(CatalogProduct $p)
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
?>