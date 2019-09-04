
# Magento 2 SimpleNews module

**Magento 2 Module development** or **Magento 2 SimpleNews Module** trends is increase rapidly while Magento release official version. That why we - **BDCrops** - are wring about a topic that introduces how to create a  **SimpleNews module in Magento 2**.
As you know, the module is a  directory that contains `blocks, controllers, models, helper`, etc - that are related to a specific business feature. In Magento 2, modules will be live in `app/code` directory of a Magento installation, with this format: `app/code/<Vendor>/<ModuleName>`. Now we will follow this steps to create a SimpleNews module which work on Magento 2 and display `Simple News`.


## Goal:

1.1-


## Magento 2 SimpleNews module by Bdcrops.com

- Step 1: Create a directory for the module like above format.
- Step 2: Declare module by using configuration file module.xml
- Step 3: Register module by registration.php
- Step 4: Configure declarative schema (create table etc/db_schema.xml schema Installation file)
- Step 5: Schema whitelist (etc/db_schema_whitelist.json)
- Step 6: Enable the module
- Step 7: Develop data and schema patches (Insert data Installing and upgrading data)
- Step 8:  
- Step 9:  
- Step 10:  




### Step 1. Create a directory for the module like above format.

In this module, we will use `BDCrops` for Vendor name and `SimpleNews` for ModuleName. So we need to make this folder:
`app/code/BDC/SimpleNews`

### Step 2. Declare module by using configuration file module.xml

Magento 2 looks for configuration information for each module in that module’s etc directory. We need to create folder etc and add module.xml:

~~~
app/code/BDC/SimpleNews/etc/module.xml
~~~

And the content for this file:

~~~ xml
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:Module/etc/module.xsd">
    <module name="BDC_SimpleNews" setup_version="1.0.0" />
</config>
~~~

In this file, we register a module with name `BDC_SimpleNews` and the version is `1.0.0`.

### Step 3. Register module by registration.php

All Magento 2 module must be registered in the Magento system through the magento ComponentRegistrar class. This file will be placed in module root directory.
In this step, we need to create this file:

~~~
app/code/BDC/SimpleNews/registration.php
~~~

And it’s content for our module is:

~~~
\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'BDC_SimpleNews',
    __DIR__
);
~~~


### Step 4. Configure declarative schema (create table etc/db_schema.xml schema Installation file)

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

### Step 5. Schema whitelist (etc/db_schema_whitelist.json)

You will not be able to run a declarative mode without creating a schema whitelist.
Note: it is recommended to generate a new whitelist for every release for the double-check purposes.

Before running the upgrade command you need to add your schema to db_whitelist_schema.json file by running the following command.

For that, you need a //etc/db_schema_whitelist.json file that will store all the content added with declarative schema. To generate this file, run:


![db_schema](https://github.com/bdcrops/BDC_Declarative/blob/master/view/adminhtml/web/images/whitelist.png)


php bin/magento setup:db-declaration:generate-whitelist [options]
php bin/magento setup:db-declaration:generate-whitelist --module-name=vendor_module

php bin/magento setup:db-declaration:generate-whitelist --module-name=BDC_SimpleNews


Now, there are db_whitelist_schema.json file will be create in /vendor/module/etc folder.


### Step 6. Enable the module



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

![Table db_schema](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/dbTableCreatedDeclarativeSchema.png)



### Step 7.  Develop data and schema patches (Insert data Installing and upgrading data)


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



### Step . Create a Routers for the module.

In the Magento system, a request URL has the following format:

~~~
http://example.com/<router_name>/<controller_name>/<action_name>
~~~

The Router is used to assign a URL to a corresponding controller and action. In this module, we need to create a route for frontend area. So we need to add this file:

~~~
app/code/BDC/SimpleNews/etc/frontend/routes.xml
~~~

And content for this file:

~~~
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:App/etc/routes.xsd">
    <router id="standard">
        <route id="simplenews" frontName="news">
            <module name="BDC_SimpleNews" />
        </route>
    </router>
</config>
~~~

After define the route, the URL path to our module will be: `http://example.com/helloworld/*`

### Step 6. Create controller and action.

In this step, we will create controller and action to display `Hello World`.
Now we will choose the url for this action. Let assume that the url will be:
`http://example.com/helloworld/index/display`

So the file we need to create is:

~~~
app/code/BDC/SimpleNews/Controller/Index/Display.php
~~~

And we will put this content:

~~~ php
<?php
namespace BDC\SimpleNews\Controller\Index;

class Display extends \Magento\Framework\App\Action\Action
{
  public function __construct(
\Magento\Framework\App\Action\Context $context)
  {
    return parent::__construct($context);
  }

  public function execute()
  {
    echo 'Hello SimpleNews!';
    exit;
  }
}
~~~




## Ref

https://devdocs.magento.com/guides/v2.3/extension-dev-guide/declarative-schema/

https://onilab.com/blog/declarative-schema-magento-2-3-and-higher/

https://www.mage-world.com/blog/create-a-module-with-custom-database-table-in-magento-2.html

http://techjeffyu.com/blog/magento-2-a-full-magento-2-module

https://github.com/codingarrow/M2/tree/master/Tutorial/SimpleNews
