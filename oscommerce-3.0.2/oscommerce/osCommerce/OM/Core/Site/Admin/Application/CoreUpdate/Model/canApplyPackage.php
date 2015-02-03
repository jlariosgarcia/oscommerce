<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace osCommerce\OM\Core\Site\Admin\Application\CoreUpdate\Model;

  use osCommerce\OM\Core\Site\Admin\Application\CoreUpdate\CoreUpdate;

  class canApplyPackage {
    public static function execute() {
      $contents = CoreUpdate::getPackageContents();

      foreach ( $contents['entries'] as $file ) {
        if ( $file['writable'] === false ) {
          return false;
        }
      }

      return true;
    }
  }
?>
