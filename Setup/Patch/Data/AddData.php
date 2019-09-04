<?php
/**
* @category BDCrops
* @package BDC\SimpleNews
* @news Abdul Matin <matinict@gmail.com / info@bdcrops.com >
* @copyright Copyright (c) 2018 BDCrops, Ltd (http://www.bdcrops.com)
* @license http://opensource.org/licenses/afl-3.0.php Academic Free License (AFL 3.0)
*/
namespace BDC\SimpleNews\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchVersionInterface;
use Magento\Framework\Module\Setup\Migration;
use Magento\Framework\Setup\ModuleDataSetupInterface;
/**
 * Class AddData
 * @package BDC\SimpleNews\Setup\Patch\Data
 */
class AddData implements DataPatchInterface, PatchVersionInterface {
    /**
     * @var \BDC\SimpleNews\Model\News
     */
    private $news;
    /**
     * @param \BDC\SimpleNews\Model\News $news
     */
    public function __construct( \BDC\SimpleNews\Model\News $news ) {
        $this->news = $news;
    }
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function apply(){
    	$newsData = [];
    	$newsData['title'] = "BDC News Head1";
    	$newsData['summary'] = "BDC News Summary";
    	$newsData['description'] = "BDCrops Inc description evulation of bangladesh";
    	//$newsData['status'] = 1;

    	$this->news->addData($newsData);
    	$this->news->getResource()->save($this->news);

    }
    /**
     * {@inheritdoc}
     */
    public static function getDependencies() {   return []; }

    /**
     * {@inheritdoc}
     */
    public static function getVersion() { return '2.0.0'; }
    /**
     * {@inheritdoc}
     */
    public function getAliases() {   return []; }

}
