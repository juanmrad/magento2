<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Magento
 * @package     Mage_ImportExport
 * @subpackage  unit_tests
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Test class for behaviour source model Mage_ImportExport_Model_Source_Import_Customer_V2_Behavior
 */
class Mage_ImportExport_Model_Source_Import_Customer_V2_BehaviorTest
    extends Mage_ImportExport_Model_Source_TestCaseAbstract
{
    /**
     * Tested source model
     *
     * @var Mage_ImportExport_Model_Source_Import_Customer_V2_Behavior
     */
    public static $sourceModel;

    /**
     * Init source model
     *
     * @static
     */
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        self::$sourceModel = new Mage_ImportExport_Model_Source_Import_Customer_V2_Behavior();
    }

    /**
     * Is result variable an array
     */
    public function testToArray()
    {
        $this->_initHelper();

        $basicArray = self::$sourceModel->toArray();
        $this->assertInternalType('array', $basicArray, 'Result variable must be an array.');
    }

    /**
     * Is result variable an correct optional array
     */
    public function testToOptionArray()
    {
        $this->_initHelper();

        $optionalArray = self::$sourceModel->toOptionArray();
        $this->assertInternalType('array', $optionalArray, 'Result variable must be an array.');

        foreach ($optionalArray as $option) {
            $this->assertArrayHasKey('label', $option, 'Option must have label property.');
            $this->assertArrayHasKey('value', $option, 'Option must have value property.');
        }
    }
}
