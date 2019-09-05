
# Magento 2 SimpleNews module  

**Magento 2 Module development** or **Magento 2 SimpleNews Module** trends is increase rapidly while Magento release official version. That why we - **BDCrops** - are wring about a topic that introduces how to create a  **SimpleNews module in Magento 2**.
As you know, the module is a  directory that contains `blocks, controllers, models, helper`, etc - that are related to a specific business feature. In Magento 2, modules will be live in `app/code` directory of a Magento installation, with this format: `app/code/<Vendor>/<ModuleName>`. Now we will follow this steps to create a SimpleNews module which work on Magento 2 and display `Simple News`.


`Create a full-fledged Module Step by Step. You could just follow my code to create this module from the scratch. Or you can directly download the compressed tar file and install it and play it. The Link to download is at the github of this  . `


## Goal:

- 1.1: Create Magento 2 Simple Module
- 1.2: Using Declarative Schema & Schema Patches
- 1.3: Using  Create Model, Resource Model and Collection
- 1.4: Get data from the database and display them at the frontend
- 1.5: Create configuration in Magento system configuration
- 1.6: Create a custom source model.
- 1.7: Create a role(ACL) for this configuration section.
- 1.8: Set default values for the configurations.
- 1.9:  Create menu ..
- 1.10: Create frontend & route .
- 1.11: Add role for each menu item
- 1.12: Create frontend layout
- 1.13: Create frontend block
- 1.14: Create  frontend controller
- 1.15: Create  Adminhtml layout
- 1.16: Create Adminhtml block
- 1.17: Create Adminhtml controller
- 1.18: create Helper file, it will contain functions for getting the configuration values
- 1.19: Create frontend template file
- 1.20: Create CSS file




## Magento 2 SimpleNews Module Step By Step (BDCrops)

## Part A : News Module for Basic
- Step 2A.1: Create a directory for the module like above format.
- Step 2A.2: Declare module by using configuration file module.xml
- Step 2A.3: Register module by registration.php
- Step 2A.4: Configure declarative schema (create table etc/db_schema.xml schema Installation file)
- Step 2A.5: Schema whitelist (etc/db_schema_whitelist.json)
- Step 2A.6: Enable the module
- Step 2A.7: Develop data and schema patches (Insert data Installing and upgrading data)
- Step 2A.8: Create Model News for business Logic
- Step 2A.9: Create Model's ResourceModel to handle real database transaction
- Step 2A.10: Create Model's collection class
- Step 2A.11: Setup the frontend route
- Step 2A.12: Create IndexController


### Part B: News Module for Back End
- Step 2B.1: Setup Module's backend configuration
- Step 2B.2:  Create a custom source model
- Step 2B.3:  Create a role for this config section
- Step 2B.4:  Set some default value for configuration options
- Step 2B.5:  Create a Helper Data class
- Step 2B.6:  Create the menu for Magento backend
- Step 2B.7:  Create backend route file
- Step 2B.8:  Update the acl.xml to add more roles
- Step 2B.9:  Create layout for grid
- Step 2B.10:  Create layout for Grid Container
- Step 2B.11:  Create layout for ajax load
- Step 2B.12:  Create news status option file
- Step 2B.13:  Create News Block for backend
- Step 2B.14:  Create Grid block file for Ajax load
- Step 2B.15:  Create a backend controller file for child action class to extend
- Step 2B.16:  Create Backend Action file Index.php
- Step 2B.17:  Create another Action for ajax
- Step 2B.18:  Create layout file simplenews_news_edit.xml for edit form
- Step 2B.19:  Create the layout for create form
- Step 2B.20:  Create a form container block
- Step 2B.21:  create a block for the left-side tabs
- Step 2B.22:  Create a block for Form information
- Step 2B.23:  Create a block to declare the fields for the edit form
- Step 2B.24:  Create a controller action for create a new News
- Step 2B.25:  Create Edit Action for the Edit form
- Step 2B.26:  A Save Action for the edit form
- Step 2B.27:  Delete Action for the edit Form
- Step 2B.28:  The mass delete action the grid list
- Step 2B.29:  Backend Menu and Grid List

## Part C : News Module for Front End
- Step 2C.1:  Create Layout file for page handle
- Step 2C.2:  Create another layout file by update the previous layout
- Step 2C.3:  Create Block NewList file
- Step 2C.4:  Create frontend template file list.phtml
- Step 2C.5:  Create an abstract class by extending Magento Core Action class
- Step 2C.6:  Update Index Controller by extends the abstract class 'New.php'
- Step 2C.7:  Create a layout file for news detail page
- Step 2C.8:  Create News view action
- Step 2C.9:  create view news block
- Step 2C.10:  Create news view template file
- Step 2C.11:  Create CSS file for styling the frontend Page
- Step 2C.12:  Create Latest New Block
- Step 2C.13:  Create a Block for positioning the latest news: Left or Right
- Step 2C.14:  Create the template file for Latest News
- Step 2C.15:  Frontend view for the module



## Part A : News Module for Basic

***

### Step 2A.1: Create a directory for the module like above format.

In this module, we will use `BDCrops` for Vendor name and `SimpleNews` for ModuleName. So we need to make this folder:
`app/code/BDC/SimpleNews`

### Step 2A.2: Declare module by using configuration file module.xml

Magento 2 looks for configuration information for each module in that module’s etc directory. We need to create folder etc and add module.xml:
 Create app/code/BDC/SimpleNews/etc/module.xml And the content for this file:

~~~ xml
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:Module/etc/module.xsd">
    <module name="BDC_SimpleNews" setup_version="1.0.0" />
</config>
~~~

In this file, we register a module with name `BDC_SimpleNews` and the version is `1.0.0`.

### Step 2A.3: Register module by registration.php

All Magento 2 module must be registered in the Magento system through the magento ComponentRegistrar class. This file will be placed in module root directory.
In this step, we need to create this file:
Create  app/code/BDC/SimpleNews/registration.php and insert this following code into it:

~~~
\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'BDC_SimpleNews',
    __DIR__
);
~~~


### Step 2A.4: Configure declarative schema (create table  schema Installation file)

Create  app/code/BDC/SimpleNews/etc/db_schema.xml &  insert this following code into it:

```
<?xml version="1.0"?>
<schema xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:Setup/Declaration/Schema/etc/schema.xsd">

  <table name="bdc_simplenews" resource="default" engine="innodb" comment="SimpleNews Table">
        <column xsi:type="smallint" name="id" padding="6" unsigned="false" nullable="false" identity="true" comment="ID"/>
        <column xsi:type="varchar" name="title" nullable="false" length="255" comment="Title"/>
        <column xsi:type="varchar" name="summary" nullable="false" length="255" comment="Summary"/>
        <column xsi:type="varchar" name="description" nullable="false" length="255" comment="Descrition"/>
        <column xsi:type="timestamp" name="created_at" nullable="false" default="CURRENT_TIMESTAMP" on_update="false" comment="Created Datetime"/>
        <column xsi:type="timestamp" name="updated_at" nullable="false" default="CURRENT_TIMESTAMP" on_update="true" comment="Updated Datetime"/>
        <column xsi:type="smallint" name="status"  padding="2" unsigned="false" nullable="false" comment="Status"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">   <column name="id"/> </constraint>
    </table>
</schema>
```

### Step 2A.5: Schema whitelist (etc/db_schema_whitelist.json)

You will not be able to run a declarative mode without creating a schema whitelist.
Note: it is recommended to generate a new whitelist for every release for the double-check purposes.

Before running the upgrade command you need to add your schema to db_whitelist_schema.json file by running the following command.

For that, you need a /etc/db_schema_whitelist.json file that will store all the content added with declarative schema. To generate this file, run:


![db_schema](https://github.com/bdcrops/BDC_Declarative/blob/master/view/adminhtml/web/images/whitelist.png)


php bin/magento setup:db-declaration:generate-whitelist [options]
php bin/magento setup:db-declaration:generate-whitelist --module-name=vendor_module

php bin/magento setup:db-declaration:generate-whitelist --module-name=BDC_SimpleNews


Now, there are db_whitelist_schema.json file will be create in /vendor/module/etc folder.
![db_whitelist_schema](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/db_schema_whitelist.png)



### Step 2A.6: Enable the module


By finish above step, you have created an empty module. Now we will enable it in Magento environment.
Before enable the module, we must check to make sure Magento has recognize our module or not by enter the following at the command line:

~~~
php bin/magento module:status
~~~

If you follow above step, you will see this in the result:

~~~
List of disabled modules:
BDC_SimpleNews
~~~

This means the module has recognized by the system but it is still disabled. Run this command to enable it:

~~~
php bin/magento module:enable BDC_SimpleNews
~~~

The module has enabled successfully if you saw this result:

~~~
The following modules has been enabled:
- BDC_SimpleNews
~~~

This’s the first time you enable this module so Magento require to check and upgrade module database. We need to run this comment:

~~~
php bin/magento setup:upgrade
~~~

Now you can check under `Stores -> Configuration -> Advanced -> Advanced` that the module is present.

Also  you can check Database Table from PhpMyAdmin or Your Favorite tools:

![Table db_schema](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/dbTableCreatedDeclarativeSchema.png)



### Step 2A.7:  Develop data and schema patches (Insert data Installing and upgrading data)


Since in the old method, we used to write scripts in Install Schema or Upgrade schema when a table was created, but now in the new version, this will be done through Patch system.

A data patch is a class that contains data modification instructions. It is defined in a <Namespace>/<Module_Name>/Setup/Patch/Data/<Patch_Name>.php file and implements \Magento\Setup\Model\Patch\DataPatchInterface.

A schema patch contains custom schema modification instructions. These modifications can be complex.

It is defined in a<Vendor>/<Module_Name>/Setup/Patch/Schema/<Patch_Name>.php file and implements \Magento\Setup\Model\Patch\SchemaPatchInterface.


So to add data to the bdc_simplenews table create AddData.php file inside folder BDC/SimpleNews/Setup/Patch/Data and write the following code

app/code/BDC/SimpleNews/Setup/Patch/Data/AddData.php

```
<?php

namespace BDC\SimpleNews\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchVersionInterface;
use Magento\Framework\Module\Setup\Migration;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class AddData implements DataPatchInterface, PatchVersionInterface {
    private $news;
    public function __construct( \BDC\SimpleNews\Model\News $news ) {
        $this->news = $news;
    }
    public function apply(){
    	$newsData = [];
    	$newsData['title'] = "BDC News Head1";
    	$newsData['summary'] = "BDC News Summary";
    	$newsData['description'] = "BDCrops Inc description evulation of bangladesh";
    	//$newsData['status'] = 1;

    	$this->news->addData($newsData);
    	$this->news->getResource()->save($this->news);

    }
    public static function getDependencies() {   return []; }
    public static function getVersion() { return '2.0.0'; }
    public function getAliases() {   return []; }

}


```

### Step 2A.8: Create Model News for business Logic

We need to create these files to insert, update, delete and get data in the database.

- Create model file: app/code/BDC/SimpleNews/Model/News.php and insert this following code into it:
```
<?php
// These files to insert, update, delete and get data in the database.
namespace BDC\SimpleNews\Model;
use Magento\Framework\Model\AbstractModel;

class News extends AbstractModel{
    /**
     * News constructor.
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Model\ResourceModel\AbstractResource|null $resource
     * @param \Magento\Framework\Data\Collection\AbstractDb|null $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

   /**
    * (non-PHPdoc)
    * @see \Magento\Framework\Model\AbstractModel::_construct()
    */
    public function _construct()
    {
        $this->_init('BDC\SimpleNews\Model\Resource\News');
    }

    /**
     * Loading news data
     *
     * @param   mixed $key
     * @param   string $field
     * @return  $this
     */
    public function load($key, $field = null) {
    	if ($field === null) {
    		$this->_getResource()->load($this, $key, 'id');
    		return $this;
    	}
    	$this->_getResource()->load($this, $key, $field);
    	return $this;
    }
}

```


### Step 2A.9: Create Model's ResourceModel to handle real database transaction

- Create resource model file: app/code/BDC/SimpleNews/Model/Resource/News.php and insert this following code into it:
```
<?php

namespace BDC\SimpleNews\Model\Resource;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class News extends AbstractDb {
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('bdc_simplenews', 'id');
    }
}

```


### Step 2A.10: Create Model's collection class

- Create collection file: app/code/BDC/SimpleNews/Model/Resource/News/Collection.php and insert this following code into it:

```
<?php
namespace BDC\SimpleNews\Model\Resource\News;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
class Collection extends AbstractCollection {
    /**
     * Define model & resource model
     */
    protected function _construct(){
        $this->_init(
            'BDC\SimpleNews\Model\News',
            'BDC\SimpleNews\Model\Resource\News'
        );
    }
}

```


### Step 2A.11: Setup the frontend route

In the Magento system, a request URL has the following format:

~~~
http://example.com/<router_name>/<controller_name>/<action_name>
~~~

The Router is used to assign a URL to a corresponding controller and action. In this module, we need to create a route for frontend area. So we need to add this file:

Create  app/code/BDC/SimpleNews/etc/frontend/routes.xml and insert this following code into it:


~~~
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:noNamespaceSchemaLocation="../../../../../../lib/internal/Magento/Framework/
App/etc/routes.xsd">
    <router id="standard">
        <route id="bdcnews" frontName="news">
            <module name="BDC_SimpleNews" />
        </route>
    </router>
</config>
~~~

After define the route, the URL path to our module will be: `http://example.com/news/`


### Step 2A.12: Create IndexController


- Create controller file: app/code/BDC/SimpleNews/Controller/Index/Index.php and insert this following code into it:

```
<?php

namespace BDC\SimpleNews\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use BDC\SimpleNews\Model\NewsFactory;

class Index extends Action {
    /**
     * @var \BDC\SimpleNews\Model\NewsFactory
     */
    protected $_modelNewsFactory;
    /**
     * @param Context $context
     * @param NewsFactory $modelNewsFactory
     */
    public function __construct(
        Context $context,
        NewsFactory $modelNewsFactory ) {
        parent::__construct($context);
        $this->_modelNewsFactory = $modelNewsFactory;
    }
    public function execute(){
        /**
         * When Magento get your model, it will generate a Factory class
         * for your model at var/generaton folder and we can get your
         * model by this way
         */
        $newsModel = $this->_modelNewsFactory->create();

        // Load the item with ID is 1
        $item = $newsModel->load(1);
        var_dump($item->getData());

        // Get news collection
        $newsCollection = $newsModel->getCollection();
        // Load all data of collection
        var_dump($newsCollection->getData());
    }
}

```
After define the Controller, the URL path to our module will be: `http://example.com/news/` below data

![NewsDataFrontend](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/newsFrontendData.png)







### Part B: News Module for Back End
***


### Step 2B.1: Setup Module's backend configuration

- Create file: app/code/BDC/SimpleNews/etc/adminhtml/system.xml (Purpose: This file will declare your configurations in Stores > Settings > Configuration section) and insert this following code into it:

```
<?xml version="1.0"?>

<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="../../../Backend/etc/system_file.xsd">
    <system>
        <tab id="bdc" translate="label" sortOrder="1">
            <label>BDC</label>
        </tab>
        <section id="simplenews" translate="label" sortOrder="1" showInDefault="1" showInWebsite="1" showInStore="1">
            <label>Simple News</label>
            <tab>bdc</tab>
            <resource>BDC_SimpleNews::system_config</resource>
            <group id="general" translate="label" type="text" sortOrder="1" showInDefault="1" showInWebsite="1" showInStore="1">
                <label>General Settings</label>
                <field id="enable_in_frontend" translate="label" type="select" sortOrder="1" showInDefault="1" showInWebsite="1" showInStore="1">
                    <label>Enable in frontend</label>
                    <source_model>Magento\Config\Model\Config\Source\Yesno</source_model>
                </field>
                <field id="head_title" translate="label comment" type="text" sortOrder="2" showInDefault="1" showInWebsite="1" showInStore="1">
                    <label>Head title</label>
                    <comment>Fill head title of news list page at here</comment>
                    <validate>required-entry</validate>
                </field>
                <field id="lastest_news_block_position" translate="label" type="select" sortOrder="3" showInDefault="1" showInWebsite="1" showInStore="1">
                    <label>Lastest news block position</label>
                    <source_model>BDC\SimpleNews\Model\System\Config\LastestNews\Position</source_model>
                </field>
            </group>
        </section>
    </system>
</config>

```

### Step 2B.2:  Create a custom source model

- Create file: app/code/BDC/SimpleNews/Model/System/Config/LastestNews/Position.php and insert this following code into it:

```
<?php

namespace BDC\SimpleNews\Model\System\Config\LastestNews;

use Magento\Framework\Option\ArrayInterface;

class Position implements ArrayInterface{
    const LEFT      = 1;
    const RIGHT     = 2;
    const DISABLED  = 0;

    /**
     * Get positions of lastest news block
     *
     * @return array
     */
    public function toOptionArray(){
        return [
            self::LEFT => __('Left'),
            self::RIGHT => __('Right'),
            self::DISABLED => __('Disabled')
        ];
    }
}

```

### Step 2B.3:  Create a role for this config section

- Create file: app/code/BDC/SimpleNews/etc/acl.xml (Purpose: This file will create a role for your configuration section) and insert this following code into it:

```
<?xml version="1.0"?>

<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:noNamespaceSchemaLocation="../../../../../lib/internal/Magento/Framework/Acl/etc/acl.xsd">
    <acl>
        <resources>
            <resource id="Magento_Backend::admin">
                <resource id="Magento_Backend::stores">
                    <resource id="Magento_Backend::stores_settings">
                        <resource id="Magento_Config::config">
                            <resource id="BDC_SimpleNews::system_config" title="Simple News Section" />
                        </resource>
                    </resource>
                </resource>
            </resource>
        </resources>
    </acl>
</config>


```

### Step 2B.4:  Set some default value for configuration options

- Create file: app/code/BDC/SimpleNews/etc/config.xml and insert this following code into it:
```
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:noNamespaceSchemaLocation="../../Core/etc/config.xsd">
    <default>
        <simplenews>
            <general>
                <enable_in_frontend>1</enable_in_frontend>
                <head_title>BDC - Simple News</head_title>
                <lastest_news_position>1</lastest_news_position>
            </general>
        </simplenews>
    </default>
</config>

```


### Step 2B.5:  Create a Helper Data class

- Create file: app/code/BDC/SimpleNews/Helper/Data.php and insert this following code into it:

```
<?php

namespace BDC\SimpleNews\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
   const XML_PATH_ENABLED      = 'simplenews/general/enable_in_frontend';
   const XML_PATH_HEAD_TITLE   = 'simplenews/general/head_title';
   const XML_PATH_LASTEST_NEWS = 'simplenews/general/lastest_news_block_position';

   /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $_scopeConfig;

    /**
     * @param Context $context
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
       Context $context,
       ScopeConfigInterface $scopeConfig ) {
       parent::__construct($context);
       $this->_scopeConfig = $scopeConfig;
    }

   /**
     * Check for module is enabled in frontend
     *
     * @return bool
     */
   public function isEnabledInFrontend($store = null)
   {
      return $this->_scopeConfig->getValue(
         self::XML_PATH_ENABLED,
         ScopeInterface::SCOPE_STORE
      );
   }

   /**
     * Get head title for news list page
     *
     * @return string
     */
   public function getHeadTitle()
   {
      return $this->_scopeConfig->getValue(
         self::XML_PATH_HEAD_TITLE,
         ScopeInterface::SCOPE_STORE
      );
   }

   /**
     * Get lastest news block position (Left, Right, Disabled)
     *
     * @return int
     */
   public function getLastestNewsBlockPosition()
   {
      return $this->_scopeConfig->getValue(
         self::XML_PATH_LASTEST_NEWS,
         ScopeInterface::SCOPE_STORE
      );
   }
}

```



### Step 2B.6:  Create the menu for Magento backend

Create file: app/code/BDC/SimpleNews/etc/adminhtml/menu.xml (Purpose: The menu item of your module will be declared here) and insert this following code into it:

```
<?xml version="1.0"?>

<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:noNamespaceSchemaLocation="../../../Backend/etc/menu.xsd">
    <menu>
        <add id="BDC_SimpleNews::main_menu" title="Simple News"
            module="BDC_SimpleNews" sortOrder="20"
            resource="BDC_SimpleNews::simplenews" />
        <add id="BDC_SimpleNews::add_news" title="Add News"
            module="BDC_SimpleNews" sortOrder="1" parent="BDC_SimpleNews::main_menu"
            action="simplenews/news/new" resource="BDC_SimpleNews::manage_news" />
        <add id="BDC_SimpleNews::manage_news" title="Manage News"
            module="BDC_SimpleNews" sortOrder="2" parent="BDC_SimpleNews::main_menu"
            action="simplenews/news/index" resource="BDC_SimpleNews::manage_news" />
        <add id="BDC_SimpleNews::configuration" title="Configurations"
            module="BDC_SimpleNews" sortOrder="3" parent="BDC_SimpleNews::main_menu"
            action="adminhtml/system_config/edit/section/simplenews"
            resource="BDC_SimpleNews::configuration" />
    </menu>
</config>

```

### Step 2B.7:  Create backend route file

- Create file: app/code/BDC/SimpleNews/etc/adminhtml/routes.xml (Purpose: The router of your module for backend will be declared here) and insert this following code into it:

```
<?xml version="1.0"?>

<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:noNamespaceSchemaLocation="../../../../../../lib/internal/Magento/
Framework/App/etc/routes.xsd">
    <router id="admin">
        <route id="simplenews" frontName="simplenews">
            <module name="BDC_SimpleNews" />
        </route>
    </router>
</config>

```

### Step 2B.8:  Update the acl.xml to add more roles

- Open this file: app/code/BDC/SimpleNews/etc/acl.xml and modify the source code into here like this:
```
<?xml version="1.0"?>

<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="../../../../../lib/internal/Magento/
Framework/Acl/etc/acl.xsd">
    <acl>
        <resources>
            <resource id="Magento_Backend::admin">
                <resource id="BDC_SimpleNews::simplenews" title="Simple News" sortOrder="100">
                    <resource id="BDC_SimpleNews::add_news" title="Add News" sortOrder="1" />
                    <resource id="BDC_SimpleNews::manage_news" title="Manage News" sortOrder="2" />
                    <resource id="BDC_SimpleNews::configuration" title="Configurations" sortOrder="3" />
                </resource>
                <resource id="Magento_Backend::stores">
                    <resource id="Magento_Backend::stores_settings">
                        <resource id="Magento_Config::config">
                            <resource id="BDC_SimpleNews::system_config" title="Simple News Section" />
                        </resource>
                    </resource>
                </resource>
            </resource>
        </resources>
    </acl>
</config>

```

### Step 2B.9:  Create layout for grid


- Create file: app/code/BDC/SimpleNews/view/adminhtml/layout/simplenews_news_index.xml (Purpose: This file is used to declare grid container block) and insert this following code into it:

```
<?xml version="1.0"?>

<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="../../../../../../../lib/internal/Magento/Framework/View/Layout/etc/page_configuration.xsd">
   <update handle="formkey"/>
   <update handle="simplenews_news_grid_block"/>
   <body>
       <referenceContainer name="content">
           <block class="BDC\SimpleNews\Block\Adminhtml\News"
               name="bdc_simplenews_news.grid.container" />
       </referenceContainer>
   </body>
</page>

```

### Step 2B.10:  Create layout for Grid Container


- Create file: app/code/BDC/SimpleNews/view/adminhtml/layout/simplenews_news_grid_block.xml (Purpose: This file is used to declare the content of grid block) and insert this following code into it:

```
<?xml version="1.0"?>

<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="../../../../../../../lib/internal/Magento/Framework/View/Layout/etc/page_configuration.xsd">
    <body>
      <referenceBlock name="bdc_simplenews_news.grid.container">
         <block class="Magento\Backend\Block\Widget\Grid" name="bdc_simplenews_news.grid"
             as="grid">
             <arguments>
                 <argument name="id" xsi:type="string">newsGrid</argument>
                 <argument name="dataSource" xsi:type="object">BDC\SimpleNews\Model\Resource\News\Collection</argument>
                 <argument name="default_sort" xsi:type="string">id</argument>
                 <argument name="default_dir" xsi:type="string">desc</argument>
                 <argument name="save_parameters_in_session" xsi:type="boolean">true</argument>
                 <argument name="use_ajax" xsi:type="boolean">true</argument>
                 <argument name="grid_url" xsi:type="url" path="*/*/grid">
                     <param name="_current">1</param>
                 </argument>
             </arguments>
                <block class="Magento\Backend\Block\Widget\Grid\Massaction"
                    name="bdc_simplenews_news.grid.massaction" as="grid.massaction">
                    <arguments>
                        <argument name="massaction_id_field" xsi:type="string">id</argument>
                        <argument name="form_field_name" xsi:type="string">news</argument>
                        <argument name="options" xsi:type="array">
                            <item name="delete" xsi:type="array">
                                <item name="label" xsi:type="string" translate="true">Delete</item>
                                <item name="url" xsi:type="string">*/*/massDelete</item>
                                <item name="confirm" xsi:type="string" translate="true">Are you sure you want to delete?</item>
                            </item>
                        </argument>
                    </arguments>
                </block>
                <block class="Magento\Backend\Block\Widget\Grid\ColumnSet"
                    name="bdc_simplenews_news.grid.columnSet" as="grid.columnSet">
                    <arguments>
                        <argument name="rowUrl" xsi:type="array">
                            <item name="path" xsi:type="string">*/*/edit</item>
                            <item name="extraParamsTemplate" xsi:type="array">
                                <item name="id" xsi:type="string">getId</item>
                            </item>
                        </argument>
                    </arguments>
                    <block class="Magento\Backend\Block\Widget\Grid\Column" as="id">
                        <arguments>
                            <argument name="header" xsi:type="string" translate="true">ID</argument>
                            <argument name="type" xsi:type="string">number</argument>
                            <argument name="id" xsi:type="string">id</argument>
                            <argument name="index" xsi:type="string">id</argument>
                        </arguments>
                    </block>
                    <block class="Magento\Backend\Block\Widget\Grid\Column" as="title">
                        <arguments>
                            <argument name="header" xsi:type="string" translate="true">Title</argument>
                            <argument name="index" xsi:type="string">title</argument>
                        </arguments>
                    </block>
                    <block class="Magento\Backend\Block\Widget\Grid\Column" as="summary">
                        <arguments>
                            <argument name="header" xsi:type="string" translate="true">Summary</argument>
                            <argument name="index" xsi:type="string">summary</argument>
                        </arguments>
                    </block>
                    <block class="Magento\Backend\Block\Widget\Grid\Column" as="status">
                        <arguments>
                            <argument name="header" xsi:type="string" translate="true">Status</argument>
                            <argument name="index" xsi:type="string">status</argument>
                            <argument name="type" xsi:type="string">options</argument>
                            <argument name="options" xsi:type="options" model="BDC\SimpleNews\Model\System\Config\Status"/>
                        </arguments>
                    </block>
                    <block class="Magento\Backend\Block\Widget\Grid\Column" as="action" acl="BDC_SimpleNews::manage_news">
                        <arguments>
                            <argument name="id" xsi:type="string">action</argument>
                            <argument name="header" xsi:type="string" translate="true">Action</argument>
                            <argument name="type" xsi:type="string">action</argument>
                            <argument name="getter" xsi:type="string">getId</argument>
                            <argument name="filter" xsi:type="boolean">false</argument>
                            <argument name="sortable" xsi:type="boolean">false</argument>
                            <argument name="index" xsi:type="string">stores</argument>
                            <argument name="is_system" xsi:type="boolean">true</argument>
                            <argument name="actions" xsi:type="array">
                                <item name="view_action" xsi:type="array">
                                    <item name="caption" xsi:type="string" translate="true">Edit</item>
                                    <item name="url" xsi:type="array">
                                        <item name="base" xsi:type="string">*/*/edit</item>
                                    </item>
                                    <item name="field" xsi:type="string">id</item>
                                </item>
                            </argument>
                            <argument name="header_css_class" xsi:type="string">col-actions</argument>
                            <argument name="column_css_class" xsi:type="string">col-actions</argument>
                        </arguments>
                    </block>
                </block>
         </block>
      </referenceBlock>
    </body>
</page>

```


### Step 2B.11:  Create layout for ajax load

- Create file: app/code/BDC/SimpleNews/view/adminhtml/layout/simplenews_news_grid.xml (Purpose: This file is used to declare the content of grid when you use ajax to reload the grid) and insert this following code into it:
```
<?xml version="1.0"?>
<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="../../../../../../../lib/internal/Magento/Framework/View/Layout/etc/layout_generic.xsd">
    <update handle="formkey" />
    <update handle="simplenews_news_grid_block" />
    <container name="root">
        <block class="Magento\Backend\Block\Widget\Grid\Container" name="bdc_simplenews_news.grid.container" template="Magento_Backend::widget/grid/container/empty.phtml"/>
    </container>
</page>

```


### Step 2B.12:  Create news status option file

- Create file: app/code/BDC/SimpleNews/Model/System/Config/Status.php (Purpose: This file is used to get News status options) and insert this following code into it:
```
<?php

namespace BDC\SimpleNews\Model\System\Config;

use Magento\Framework\Option\ArrayInterface;

class Status implements ArrayInterface {
    const ENABLED  = 1;
    const DISABLED = 0;
    /**
     * @return array
     */
    public function toOptionArray(){
        $options = [
            self::ENABLED => __('Enabled'),
            self::DISABLED => __('Disabled')
        ];

        return $options;
    }
}


```

### Step 2B.13:  Create News Block for backend
- Create file: app/code/BDC/SimpleNews/Block/Adminhtml/News.php (Purpose: This is the block file of grid container) and insert this following code into it:

```
<?php

namespace BDC\SimpleNews\Model\System\Config;

use Magento\Framework\Option\ArrayInterface;

class Status implements ArrayInterface {
    const ENABLED  = 1;
    const DISABLED = 0;
    /**
     * @return array
     */
    public function toOptionArray(){
        $options = [
            self::ENABLED => __('Enabled'),
            self::DISABLED => __('Disabled')
        ];

        return $options;
    }
}

```



### Step 2B.14:  Create Grid block file for Ajax load
- Create file: app/code/BDC/SimpleNews/Block/Adminhtml/News/Grid.php (Purpose: This is the block file of grid) and insert this following code into it:
```
<?php

namespace BDC\SimpleNews\Model\System\Config;

use Magento\Framework\Option\ArrayInterface;

class Status implements ArrayInterface {
    const ENABLED  = 1;
    const DISABLED = 0;
    /**
     * @return array
     */
    public function toOptionArray(){
        $options = [
            self::ENABLED => __('Enabled'),
            self::DISABLED => __('Disabled')
        ];

        return $options;
    }
}

```

### Step 2B.15:  Create a backend controller file for child action class to extend

- Create file: app/code/BDC/SimpleNews/Controller/Adminhtml/News.php (Purpose: I use this file as a root controller and the action classes will be extended this controller) and insert this following code into it:

```
<?php

namespace BDC\SimpleNews\Block\Adminhtml;

use Magento\Backend\Block\Widget\Grid\Container;

class News extends Container{
   /**
     * Constructor
     *
     * @return void
     */
   protected function _construct(){
        $this->_controller = 'adminhtml_news';
        $this->_blockGroup = 'BDC_SimpleNews';
        $this->_headerText = __('Manage News');
        $this->_addButtonLabel = __('Add News');
        parent::_construct();
    }
}

```


### Step 2B.16:  Create Backend Action file Index.php

- Create file: app/code/BDC/SimpleNews/Controller/Adminhtml/News/Index.php (Purpose: This is the index action) and insert this following code into it:

```
<?php

namespace BDC\SimpleNews\Block\Adminhtml;

use Magento\Backend\Block\Widget\Grid\Container;

class News extends Container{
   /**
     * Constructor
     *
     * @return void
     */
   protected function _construct(){
        $this->_controller = 'adminhtml_news';
        $this->_blockGroup = 'BDC_SimpleNews';
        $this->_headerText = __('Manage News');
        $this->_addButtonLabel = __('Add News');
        parent::_construct();
    }
}

```


### Step 2B.17:  Create another Action for ajax
- Create file: app/code/BDC/SimpleNews/Controller/Adminhtml/News/Grid.php (Purpose: This is the grid action which is used for loading grid by ajax) and insert this following code into it:
```
<?php

namespace BDC\SimpleNews\Controller\Adminhtml\News;

use BDC\SimpleNews\Controller\Adminhtml\News;

class Grid extends News
{
   /**
     * @return void
     */
   public function execute()
   {
      return $this->_resultPageFactory->create();
   }
}

```

### Step 2B.18:  Create layout file simplenews_news_edit.xml for edit form
- Create file: app/code/BDC/SimpleNews/view/adminhtml/layout/simplenews_news_edit.xml (Purpose: This file is used to declare blocks which used on editing page) and insert this following code into it:
```
<?xml version="1.0"?>

<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
layout="admin-2columns-left" xsi:noNamespaceSchemaLocation="../../../../../../../lib/internal/Magento/Framework/View/Layout/etc/page_configuration.xsd">
    <body>
        <referenceContainer name="left">
            <block class="BDC\SimpleNews\Block\Adminhtml\News\Edit\Tabs"
                name="bdc_simplenews_news.edit.tabs"/>
        </referenceContainer>
        <referenceContainer name="content">
            <block class="BDC\SimpleNews\Block\Adminhtml\News\Edit"
                name="bdc_simplenews_news.edit"/>
        </referenceContainer>
    </body>
</page>

```

### Step 2B.19:  Create the layout for create form

- Create file: app/code/BDC/SimpleNews/view/adminhtml/layout/simplenews_news_create.xml and insert this following code into it:
```
<?xml version="1.0"?>

<layout xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:noNamespaceSchemaLocation="../../../../../Magento/Core/etc/layout_single.xsd">
    <update handle="simplenews_news_edit"/>
</layout>

```


### Step 2B.20:  Create a form container block

- Create file: app/code/BDC/SimpleNews/Block/Adminhtml/News/Edit.php (Purpose: This is the block file of form container) and insert this following code into it:
```
<?php

namespace BDC\SimpleNews\Block\Adminhtml\News;

use Magento\Backend\Block\Widget\Form\Container;
use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Registry;

class Edit extends Container
{
   /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry = null;

    /**
     * @param Context $context
     * @param Registry $registry
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        array $data = []
    ) {
        $this->_coreRegistry = $registry;
        parent::__construct($context, $data);
    }

    /**
     * Class constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_objectId = 'id';
        $this->_controller = 'adminhtml_news';
        $this->_blockGroup = 'BDC_SimpleNews';

        parent::_construct();

        $this->buttonList->update('save', 'label', __('Save'));
        $this->buttonList->add(
            'saveandcontinue',
            [
                'label' => __('Save and Continue Edit'),
                'class' => 'save',
                'data_attribute' => [
                    'mage-init' => [
                        'button' => [
                            'event' => 'saveAndContinueEdit',
                            'target' => '#edit_form'
                        ]
                    ]
                ]
            ],
            -100
        );
        $this->buttonList->update('delete', 'label', __('Delete'));
    }

    /**
     * Retrieve text for header element depending on loaded news
     *
     * @return string
     */
    public function getHeaderText()
    {
        $newsRegistry = $this->_coreRegistry->registry('simplenews_news');
        if ($newsRegistry->getId()) {
            $newsTitle = $this->escapeHtml($newsRegistry->getTitle());
            return __("Edit News '%1'", $newsTitle);
        } else {
            return __('Add News');
        }
    }

    /**
     * Prepare layout
     *
     * @return \Magento\Framework\View\Element\AbstractBlock
     */
    protected function _prepareLayout()
    {
        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('post_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'post_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'post_content');
                }
            };
        ";

        return parent::_prepareLayout();
    }
}

```


### Step 2B.21:  create a block for the left-side tabs

- Create file: app/code/BDC/SimpleNews/Block/Adminhtml/News/Edit/Tabs.php (Purpose: This file will declare tabs at left column of the editing page) and insert this following code into it:
```
<?php

namespace BDC\SimpleNews\Block\Adminhtml\News;

use Magento\Backend\Block\Widget\Form\Container;
use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Registry;

class Edit extends Container
{
   /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry = null;

    /**
     * @param Context $context
     * @param Registry $registry
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        array $data = []
    ) {
        $this->_coreRegistry = $registry;
        parent::__construct($context, $data);
    }

    /**
     * Class constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_objectId = 'id';
        $this->_controller = 'adminhtml_news';
        $this->_blockGroup = 'BDC_SimpleNews';

        parent::_construct();

        $this->buttonList->update('save', 'label', __('Save'));
        $this->buttonList->add(
            'saveandcontinue',
            [
                'label' => __('Save and Continue Edit'),
                'class' => 'save',
                'data_attribute' => [
                    'mage-init' => [
                        'button' => [
                            'event' => 'saveAndContinueEdit',
                            'target' => '#edit_form'
                        ]
                    ]
                ]
            ],
            -100
        );
        $this->buttonList->update('delete', 'label', __('Delete'));
    }

    /**
     * Retrieve text for header element depending on loaded news
     *
     * @return string
     */
    public function getHeaderText()
    {
        $newsRegistry = $this->_coreRegistry->registry('simplenews_news');
        if ($newsRegistry->getId()) {
            $newsTitle = $this->escapeHtml($newsRegistry->getTitle());
            return __("Edit News '%1'", $newsTitle);
        } else {
            return __('Add News');
        }
    }

    /**
     * Prepare layout
     *
     * @return \Magento\Framework\View\Element\AbstractBlock
     */
    protected function _prepareLayout()
    {
        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('post_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'post_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'post_content');
                }
            };
        ";

        return parent::_prepareLayout();
    }
}

```

### Step 2B.22:  Create a block for Form information

- Create file: app/code/BDC/SimpleNews/Block/Adminhtml/News/Edit/Form.php (Purpose: This file will declare form information) and insert this following code into it:
```
<?php

namespace BDC\SimpleNews\Block\Adminhtml\News;

use Magento\Backend\Block\Widget\Form\Container;
use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Registry;

class Edit extends Container
{
   /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry = null;

    /**
     * @param Context $context
     * @param Registry $registry
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        array $data = []
    ) {
        $this->_coreRegistry = $registry;
        parent::__construct($context, $data);
    }

    /**
     * Class constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_objectId = 'id';
        $this->_controller = 'adminhtml_news';
        $this->_blockGroup = 'BDC_SimpleNews';

        parent::_construct();

        $this->buttonList->update('save', 'label', __('Save'));
        $this->buttonList->add(
            'saveandcontinue',
            [
                'label' => __('Save and Continue Edit'),
                'class' => 'save',
                'data_attribute' => [
                    'mage-init' => [
                        'button' => [
                            'event' => 'saveAndContinueEdit',
                            'target' => '#edit_form'
                        ]
                    ]
                ]
            ],
            -100
        );
        $this->buttonList->update('delete', 'label', __('Delete'));
    }

    /**
     * Retrieve text for header element depending on loaded news
     *
     * @return string
     */
    public function getHeaderText()
    {
        $newsRegistry = $this->_coreRegistry->registry('simplenews_news');
        if ($newsRegistry->getId()) {
            $newsTitle = $this->escapeHtml($newsRegistry->getTitle());
            return __("Edit News '%1'", $newsTitle);
        } else {
            return __('Add News');
        }
    }

    /**
     * Prepare layout
     *
     * @return \Magento\Framework\View\Element\AbstractBlock
     */
    protected function _prepareLayout()
    {
        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('post_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'post_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'post_content');
                }
            };
        ";

        return parent::_prepareLayout();
    }
}

```

### Step 2B.23:  Create a block to declare the fields for the edit form
- Create file: app/code/BDC/SimpleNews/Block/Adminhtml/News/Edit/Tab/Info.php (Purpose: This file will declare fields in form) and insert this following code into it:

```
<?php

namespace BDC\SimpleNews\Block\Adminhtml\News;

use Magento\Backend\Block\Widget\Form\Container;
use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Registry;

class Edit extends Container
{
   /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry = null;

    /**
     * @param Context $context
     * @param Registry $registry
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        array $data = []
    ) {
        $this->_coreRegistry = $registry;
        parent::__construct($context, $data);
    }

    /**
     * Class constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_objectId = 'id';
        $this->_controller = 'adminhtml_news';
        $this->_blockGroup = 'BDC_SimpleNews';

        parent::_construct();

        $this->buttonList->update('save', 'label', __('Save'));
        $this->buttonList->add(
            'saveandcontinue',
            [
                'label' => __('Save and Continue Edit'),
                'class' => 'save',
                'data_attribute' => [
                    'mage-init' => [
                        'button' => [
                            'event' => 'saveAndContinueEdit',
                            'target' => '#edit_form'
                        ]
                    ]
                ]
            ],
            -100
        );
        $this->buttonList->update('delete', 'label', __('Delete'));
    }

    /**
     * Retrieve text for header element depending on loaded news
     *
     * @return string
     */
    public function getHeaderText()
    {
        $newsRegistry = $this->_coreRegistry->registry('simplenews_news');
        if ($newsRegistry->getId()) {
            $newsTitle = $this->escapeHtml($newsRegistry->getTitle());
            return __("Edit News '%1'", $newsTitle);
        } else {
            return __('Add News');
        }
    }

    /**
     * Prepare layout
     *
     * @return \Magento\Framework\View\Element\AbstractBlock
     */
    protected function _prepareLayout()
    {
        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('post_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'post_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'post_content');
                }
            };
        ";

        return parent::_prepareLayout();
    }
}

```


### Step 2B.24:  Create a controller action for create a new News
- Create file: app/code/BDC/SimpleNews/Controller/Adminhtml/News/NewAction.php (Purpose: This is the new action) and insert this following code into it:
```
<?php

namespace BDC\SimpleNews\Controller\Adminhtml\News;

use BDC\SimpleNews\Controller\Adminhtml\News;

class NewAction extends News
{
   /**
     * Create new news action
     *
     * @return void
     */
   public function execute()
   {
      $this->_forward('edit');
   }
}

```

### Step 2B.25:  Create Edit Action for the Edit form
  - Create file: app/code/BDC/SimpleNews/Controller/Adminhtml/News/Edit.php (Purpose: This is the edit action for editing news page) and insert this following code into it:

  ```
  <?php

  namespace BDC\SimpleNews\Controller\Adminhtml\News;

  use BDC\SimpleNews\Controller\Adminhtml\News;

  class Edit extends News
  {
     /**
       * @return void
       */
     public function execute()
     {
        $newsId = $this->getRequest()->getParam('id');
          /** @var \BDC\SimpleNews\Model\News $model */
          $model = $this->_newsFactory->create();

          if ($newsId) {
              $model->load($newsId);
              if (!$model->getId()) {
                  $this->messageManager->addError(__('This news no longer exists.'));
                  $this->_redirect('*/*/');
                  return;
              }
          }

          // Restore previously entered form data from session
          $data = $this->_session->getNewsData(true);
          if (!empty($data)) {
              $model->setData($data);
          }
          $this->_coreRegistry->register('simplenews_news', $model);

          /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
          $resultPage = $this->_resultPageFactory->create();
          $resultPage->setActiveMenu('BDC_SimpleNews::main_menu');
          $resultPage->getConfig()->getTitle()->prepend(__('Simple News'));

          return $resultPage;
     }
  }

  ```


### Step 2B.26:  A Save Action for the edit form

- Create file: app/code/BDC/SimpleNews/Controller/Adminhtml/News/Save.php (Purpose: This is the save action) and insert this following code into it:
```
<?php

namespace BDC\SimpleNews\Controller\Adminhtml\News;

use BDC\SimpleNews\Controller\Adminhtml\News;

class Edit extends News
{
   /**
     * @return void
     */
   public function execute()
   {
      $newsId = $this->getRequest()->getParam('id');
        /** @var \BDC\SimpleNews\Model\News $model */
        $model = $this->_newsFactory->create();

        if ($newsId) {
            $model->load($newsId);
            if (!$model->getId()) {
                $this->messageManager->addError(__('This news no longer exists.'));
                $this->_redirect('*/*/');
                return;
            }
        }

        // Restore previously entered form data from session
        $data = $this->_session->getNewsData(true);
        if (!empty($data)) {
            $model->setData($data);
        }
        $this->_coreRegistry->register('simplenews_news', $model);

        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->_resultPageFactory->create();
        $resultPage->setActiveMenu('BDC_SimpleNews::main_menu');
        $resultPage->getConfig()->getTitle()->prepend(__('Simple News'));

        return $resultPage;
   }
}

```

### Step 2B.27:  Delete Action for the edit Form

- Create file: app/code/BDC/SimpleNews/Controller/Adminhtml/News/Delete.php (Purpose: This is the delete action) and insert this following code into it:

```
<?php

namespace BDC\SimpleNews\Controller\Adminhtml\News;

use BDC\SimpleNews\Controller\Adminhtml\News;

class Delete extends News
{
   /**
    * @return void
    */
   public function execute()
   {
      $newsId = (int) $this->getRequest()->getParam('id');

      if ($newsId) {
         /** @var $newsModel \Mageworld\SimpleNews\Model\News */
         $newsModel = $this->_newsFactory->create();
         $newsModel->load($newsId);

         // Check this news exists or not
         if (!$newsModel->getId()) {
            $this->messageManager->addError(__('This news no longer exists.'));
         } else {
               try {
                  // Delete news
                  $newsModel->delete();
                  $this->messageManager->addSuccess(__('The news has been deleted.'));

                  // Redirect to grid page
                  $this->_redirect('*/*/');
                  return;
               } catch (\Exception $e) {
                   $this->messageManager->addError($e->getMessage());
                   $this->_redirect('*/*/edit', ['id' => $newsModel->getId()]);
               }
            }
      }
   }
}

```

### Step 2B.28:  The mass delete action the grid list

- Create file: app/code/BDC/SimpleNews/Controller/Adminhtml/News/MassDelete.php (Purpose: This file is used for deleting multi items on grid) and insert this following code into it:
```
<?php

namespace BDC\SimpleNews\Controller\Adminhtml\News;

use BDC\SimpleNews\Controller\Adminhtml\News;

class MassDelete extends News
{
   /**
    * @return void
    */
   public function execute()
   {
      // Get IDs of the selected news
      $newsIds = $this->getRequest()->getParam('news');

        foreach ($newsIds as $newsId) {
            try {
               /** @var $newsModel \Mageworld\SimpleNews\Model\News */
                $newsModel = $this->_newsFactory->create();
                $newsModel->load($newsId)->delete();
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
            }
        }

        if (count($newsIds)) {
            $this->messageManager->addSuccess(
                __('A total of %1 record(s) were deleted.', count($newsIds))
            );
        }

        $this->_redirect('*/*/index');
   }
}

```


### Step 2B.29:  Backend Menu and Grid List

```
```




## Part C : News Module for  Front End

***

### Step 2C.1:  Create Layout file for page handle

- Create file: app/code/BDC/SimpleNews/view/frontend/layout/news_news.xml (we will use this layout file as default in our module) and insert this following code into it:
```
```

### Step 2C.2:  Create another layout file by update the previous layout
- Create file: app/code/BDC/SimpleNews/view/frontend/layout/news_index_index.xml (this file will declare blocks for using in the news list page) and insert this following code into it:
```
```


### Step 2C.3:  Create Block NewList file

- Create file: app/code/BDC/SimpleNews/Block/NewsList.php (this file will set the news data collection and declare pagination for them) and insert this following code into it:
```
```

### Step 2C.4:  Create frontend template file list.phtml

- Create file: app/code/BDC/SimpleNews/view/frontend/templates/list.phtml (this file will set the news data collection and declare pagination for them) and insert this following code into it:
```
```


### Step 2C.5:  Create an abstract class by extending Magento Core Action class

- Create file: app/code/BDC/SimpleNews/Controller/News.php and insert this following code into it:
```

```


### Step 2C.6:  Update Index Controller by extends the abstract class 'New.php'

- Create/Edit file: app/code/BDC/SimpleNews/Controller/Index/Index.php and insert this following code into it:

```
```


### Step 2C.7:  Create a layout file for news detail page
- Create file: app/code/BDC/SimpleNews/view/frontend/web/css/style.css and insert this following code into it:
```
```

### Step 2C.8:  Create News view action

- Create file: app/code/BDC/SimpleNews/view/frontend/layout/news_index_view.xml and insert this following code into it:
```
```


### Step 2C.9:  create view news block

- Create file: app/code/BDC/SimpleNews/Controller/Index/View.php and insert this following code into it:

```
```


### Step 2C.10:  Create news view template file

- Create file: app/code/BDC/SimpleNews/Block/View.php (this file will get the news data) and insert this following code into it:
```
```


### Step 2C.11:  Create CSS file for styling the frontend Page

- Create file: app/code/BDC/SimpleNews/view/frontend/templates/view.phtml (this file will set the news data collection and declare pagination for them) and insert this following code into it


### Step 2C.12:  Create Latest New Block

- Open file: app/code/BDC/SimpleNews/view/frontend/layout/news_news.xml (we will add 2 blocks to the page body) and insert this following code into it:


### Step 2C.13:  Create a Block for positioning the latest news: Left or Right
- Create file: app/code/BDC/SimpleNews/Block/Lastest.php (this file will get the news data) and insert this following code into it:

### Step 2C.14:  Create the template file for Latest News

- Create file: app/code/BDC/SimpleNews/Block/Lastest/Left.php (This file will check the left position and set template file) and insert this following code into it:

```
```

- Create file: app/code/BDC/SimpleNews/Block/Lastest/Right.php (This file will check the right position and set template file) and insert this following code into it:

```
```


### Step 2C.15:  Frontend view for the module
- Create file: app/code/BDC/SimpleNews/view/frontend/templates/lastest.phtml (This file will display 5 lastest news on the page) and insert this following code into it:





## Ref

https://devdocs.magento.com/guides/v2.3/extension-dev-guide/declarative-schema/

https://onilab.com/blog/declarative-schema-magento-2-3-and-higher/

https://www.mage-world.com/blog/create-a-module-with-custom-database-table-in-magento-2.html

http://techjeffyu.com/blog/magento-2-a-full-magento-2-module

https://github.com/codingarrow/M2/tree/master/BDC/SimpleNews
