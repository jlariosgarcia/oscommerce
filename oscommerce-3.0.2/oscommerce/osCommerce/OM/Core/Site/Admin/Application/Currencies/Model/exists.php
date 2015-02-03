<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace osCommerce\OM\Core\Site\Admin\Application\Currencies\Model;

  use osCommerce\OM\Core\Site\Admin\Application\Currencies\Currencies;

  class exists {
    public static function execute($id) {
      return ( Currencies::get($id) !== false );
    }
  }
?>
