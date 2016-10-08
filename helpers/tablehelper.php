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
?>