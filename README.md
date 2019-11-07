
# Magento 2 SimpleNews module  

**Magento 2 Module development** or **Magento 2 SimpleNews Module**  Create a full-fledged Module Step by Step. You could just follow my code to create this module from the scratch. Or you can directly download the compressed tar file and install it and play it.  

## PREREQUISITES
- No prerequisites
- May be More benefited Who are know Magento 2 Basic frontend , backend & install local/server .
- Fundamentals of Magento 2 Development or Module Development  as a first step.


## Goal:

- Develop Full-fledged Module Step by Step .
- Magento 2 Certified [Associate](mcad.md)/[Professional](mcpd.md) Developer exam Preparation hands-on practice.





## <a name="top"> Magento 2 SimpleNews Module Step By Step (BDCrops) </a>

###  [PartA: News Module Basic (Architecture & Customization)](#PartA)


- [Step 2A.1: Create a directory for the module like above format](#Step2A1)
- [Step 2A.2: Declare module by using configuration file module.xml](#Step2A2)
- [Step 2A.3: Register module by registration.php & composer.json](#Step2A3)
- [Step 2A.4: Configure declarative schema (create table etc/db_schema.xml)](#Step2A4)
- [Step 2A.5: Schema whitelist (etc/db_schema_whitelist.json) ](#Step2A15)
- [Step 2A.6: Enable the module](#Step2A6)
- [Step 2A.7: Develop data & schema patches(Installing & upgrading data)](#Step2A7)
- [Step 2A.8: Create Model News for business Logic](#Step2A8)
- [Step 2A.9: Create Model's ResourceModel to handle real database transaction](#Step2A9)
- [Step 2A.10: Create Model's collection class](#Step2A10)
- [Step 2A.11: Setup the frontend route](#Step2A11)
- [Step 2A.12: Create IndexController](#Step2A12)


### [Part B: News Module for Back End](#PartB)
- [Step 2B1: Setup Module's backend configuration](#Step2B1)
- [Step 2B2:  Create a custom source model](#Step2B2)
- [Step 2B3:  Create a role for this config section](#Step2B3)
- [Step 2B4:  Set some default value for configuration options](#Step2B4)
- [Step 2B5:  Create a Helper Data class](#Step2B5)
- [Step 2B6:  Create the menu for Magento backend](#Step2B6)
- [Step 2B7:  Create backend route file](#Step2B7)
- [Step 2B8:  Update the acl.xml to add more roles](#Step2B8)
- [Step 2B9:  Create layout for grid](#Step2B9)
- [Step 2B10:  Create layout for Grid Container](#Step2B10)
- [Step 2B11:  Create layout for ajax load](#Step2B11)
- [Step 2B12:  Create news status option file](#Step2B12)
- [Step 2B13:  Create News Block for backend](#Step2B13)
- [Step 2B14:  Create Grid block file for Ajax load](#Step2B14)
- [Step 2B15: Create backend controller for child action class to extend](#Step2B15)
- [Step 2B.16:  Create Backend Action file Index.php](#Step2B16)
- [Step 2B.17:  Create another Action for ajax](#Step2B17)
- [Step 2B.18:  Create layout file simplenews_news_edit.xml for edit form](#Step2B18)
- [Step 2B.19:  Create the layout for create form](#Step2B19)
- [Step 2B.20:  Create a form container block](#Step2B20)
- [Step 2B.21:  create a block for the left-side tabs](#Step2B21)
- [Step 2B.22:  Create a block for Form information](#Step2B22)
- [Step 2B.23:  Create a block to declare the fields for the edit form](#Step2B23)
- [Step 2B.24:  Create a controller action for create a new News](#Step2B24)
- [Step 2B.25:  Create Edit Action for the Edit form](#Step2B25)
- [Step 2B.26:  A Save Action for the edit form](#Step2B26)
- [Step 2B.27:  Delete Action for the edit Form](#Step2B27)
- [Step 2B.28:  The mass delete action the grid list](#Step2B28)
- [Step 2B.29:  Backend Menu and Grid List](#Step2B29)

### [Part C : News Module for Front End](#PartC)
- [Step 2C.1:  Create Layout file for page handle](#Step2C1)
- [Step 2C.2:  Create another layout file by update the previous layout](#Step2C2)
- [Step 2C.3:  Create Block NewList file](#Step2C3)
- [Step 2C.4:  Create frontend template file list.phtml](#Step2C4)
- [Step 2C.5:  Create an abstract class by extending Magento Core Action class](#Step2C5)
- [Step 2C.6:  Update Index Controller by extends the abstract class 'New.php'](#Step2C6)
- [Step 2C.7:  Create a layout file for news detail page](#Step2C7)
- [Step 2C.8:  Create News view action](#Step2C8)
- [Step 2C.9:  create view news block](#Step2C9)
- [Step 2C.10:  Create news view template file](#Step2C10)
- [Step 2C.11:  Create CSS file for styling the frontend Page](#Step2C11)
- [Step 2C.12:  Create Latest New Block](#Step2C12)
- [Step 2C.13:  Create a Block for positioning the latest news: Left or Right](#Step2C13)
- [Step 2C.14:  Create the template file for Latest News](#Step2C14)
- [Step 2C.15:  Frontend view for the module](#Step2C15)

### [Part D : News Console/Command](#PartD)
- [Step 2D1:  Adding a new command Dependency Injection](#Step2D1)
- [Step 2D2:  Adding a new command class](#Step2D3)
- [Step 2D3:  Adding a new command Helper class](#Step2D3)

### [Part E : Create/Set / Configure Custom Cron Jobs](#PartE)
- [Step 2E.1:  Create crontab.xml ](#Step2E1)
- [Step 2E.2:  defined to run the execute method of class](#Step2E3)
- [Step 2E.3:  Run all cron jobs ](#Step2E3)
- [Step 2E.4:  Create custom cron group ](#Step2E4)
- [Step 2E.5:  Run new cron group cron jobs ](#Step2E5)

### [Part F : Create  REST WEB API](#PartF)
- [Step2F.1: Web API Routes/Configuration](#Step2F1)
- [Step2F.2: Define Interface– etc/di.xml](#Step2F2)
- [Step2F.3: Declare API Interface](#Step2F3)
- [Step2F.4: Declare Data API Interface](#Step2F4)
- [Step2F.5: Create Model](#Step2F5)
- [Step2F.6: Communicating with new API call](#Step2F6)
- [Step2F.7: Adding ACL Web API](#Step2F7)

### [PartG: Dependency Injection configuration ](#PartG)
- [Step2G.1: DI Preference,Arguments & Virtual Types Implements](#Step2G1)
- [Step2G.2: DI Observer Implements](#Step2G2)
- [Step2G.3: DI Plugins (Interceptors)](#Step2G3)

### [PartH : Customization Layout Configuration & JavaScript ](#PartH)
- [Step2H.1: Layout Configuration](#Step2H1)
- [Step2H.2: Customization JavaScript Map & Mixin](#Step2H2)

### [PartI : UI Components Library](#PartI)
- [Step2I1: Rendering Grid(collections & listing component configuration)](#Step2I1)
- [Step2I.2: Rendering Form ()](#Step2I2)

### [PartJ : Entity-Attribute-Value (EAV)](#PartJ)
- [Step2J1: Rendering Grid(collections & listing component configuration)](#Step2J1)
- [Step2J2: ](#Step2J2)




##  <a name="PartA">Part A : News Module for Basic </a> [Go to Top](#top)

***

### <a name="Step2A1">Step 2A.1: Create a directory for the module like above format</a>

In this module, we will use `BDCrops` for Vendor name and `SimpleNews` for ModuleName. So we need to make this folder: `app/code/BDC/SimpleNews`

#### Notes[u can skip]:

##### Magento 2 Basic Directory Structure

- app – is used for additional elements; as a rule, app contains the following subdirectories:
    - code – contains the installed modules;
    - design – contains the installed themes. The frontend themes are located at the frontend folder; themes for admin panel – in the adminhtml folder;
    - etc – contains the Magento 2 configuration files;
    - i18n – contains the installed language packs.
- bin – contains Magento file responsible for the execution of CLI-commands in Magento 2.
- dev – contains Integration and Functional test files.
- generated – utilized for generated classes in Magento 2.
- lib – contains Magento 2 libraries and non-module based code.
- phpserver – contains Router.php file, implemented to realize the built-in PHP server.
- pub – used for static files storage:
    - errors – contains files responsible for displaying errors in the browser (this behavior is by default disabled);
    - media – contains all media-files from the website;
    - static – contains the generated theme and module files.
- var – contains temporary files, like:
    - cache – contains all the cached objects, except for pages;
    - composer_home – root directory of the installation wizard;
    - log – stores Magento 2 logs;
    - page_cache – contains pages cached with Full Page Cache;
    - view_preprocessed – contains minified templates and compiled LESS.
- vendor – contains core files of Magento 2. Moreover, this directory can contain the additionally installed modules. You should perform operations with components from this directory via Composer.


##### Magento 2  Model View ViewModel (MVVM) Architecture

![](doc/MVVMPattern.png)

- Model: Holds business logic of  application & depends on an associated class—the ResourceModel—for database access. Models rely on service contracts to expose their functionality to  other layers of  application.
- View: Structure & layout of what a user sees on a screen - the actual HTML. This is achieved in the PHTML files distributed with modules. PHTML files are associated to each ViewModel in the Layout XML files, which would be referred to as binders in the MVVM dialect. The layout files might also assign JavaScript files to be used in the final page.
- ViewModel: Interacts with  Model layer, exposing only  necessary information to  View layer handled by the module’s Block classes. Note that this was usually part of the Controller role of an MVC system. On MVVM, the controller is only responsible for handling the user flow, meaning that it receives requests and either tells the system to render a view or to redirect the user to another route.

#### Magento 2 architecture is split into 4 (PDSP)layers.

![](doc/archi_diagrams_layers_alt4.jpg)

- Persistence layer: describes resource model, which is responsible for extracting and modifying data in the database using CRUD requests.Additional business logic capabilities are also implemented here, for example, data validation and database functions implementation.
- Domain layer: responsible for the business logic, which does not contain resource-specific or database-specific information. Domain layer can also include service contracts.Each data model at the level of domain layer depends on the resource model, which is responsible for accessing the database.
- Service layer: interlayer between presentation layer and domain layer. It implements service contracts, which are defined using PHP interfaces. Service contracts allow to add or change business logic resource model using dependency injection file (di.xml). Service layer is also used for granting access to API (REST/SOAP or other modules).Service interface is declared in /Api namespace of the module.
Data (entity) interface is declared in /Api/Data. Data entities are data structures passed to and returned from service interfaces.

- Presentation Layer: upper layer. It contains all the View elements (including layouts, blocks, templates, css, js) and controllers.Presentation Layer usually calls service layer using service contracts. But, depending on the implementation, it may overlap with business logic.

##### Magento has 5 areas types:
- Magento Admin (adminhtml): entry point for this area is index.php or pub/index.php. The Admin panel area includes the code needed for store management. The /app/design/adminhtml directory contains all the code for components you’ll see while working in the Admin panel.
- Storefront (frontend): entry point for this area is index.php or pub/index.php. The storefront (or frontend) contains template and layout files that define the appearance of your storefront.
- Basic (base): used as a fallback for files absent in adminhtml and frontend areas.
- Cron (crontab): In cron.php, the \Magento\Framework\App\Cron class always loads the 'crontab' area.
You can also send requests to Magento using the SOAP and REST APIs. These two areas:
- Web API REST (webapi_rest): entry point for this area is index.php or pub/index.php. The REST area has a front controller that understands how to do URL lookups for REST-based URLs.
- Web API SOAP (webapi_soap): entry point for this area is index.php or pub/index.php.

##### Module  folder holds one part of the architecture, as follows:

- Api or Api/Data: Service contracts, defining service interfaces & data interfaces

- Adapter:Classes follow  adapter pattern & wrap around classes from third-party libraries allow  to use functionality from third-party libraries in  code by converting the third-party class interfaces into an interface that is expected by  native code.( module-search/Adapter/)
- Block:  ViewModels of our MVVM architecture
- Collector: module-deploy/Collector/Collector.php
- Command: directory is used for storing the PHP files that are responsible for console programs execution. In our case, Console/Command/ImagesResizeCommand.php processes commands for product images resizing.
- Controller: Responsible for handling the user’s flow while interacting with the system
- Config: module-deploy/Config/BundleConfig.php
- Cron: We use the directory to store the files, which are later executed on the Cron launching.
- CustomerData: directory contains PHP files responsible for processing information for sections. Magento 2 has a special functionality, which allows for processing, updating and transferring the information asynchronously.
- etc: Configuration XML files  module defines itself & its parts (routes, models, blocks, observers, and cron jobs) within this folder, also be used by non-core modules to override the functionality of core modules.
    - etc/acl.xml
    - etc/adminhtml/menu.xml
    - etc/adminhtml/system.xml
    - etc/{area}/routes.xml
    - etc/{area}/events.xml
    - etc/crontab/events.xml
    - etc/config.xml
    - etc/cron_groups.xml
    - etc/crontab.xml
    - etc/db_schema.xml
    - etc/di.xml
    - etc/events.xml
    - etc/module.xml
    - etc/setup/events.xml
    - etc/webapi.xml
    - etc/webapi_rest/di.xml
    - etc/webapi_rest/events.xml
    - etc/webapi_soap/events.xml
    [ReadDevDoc](https://devdocs.magento.com/guides/v2.3/config-guide/config/config-files.html)

- Exception: (module-sales/Exception/)
- Files: Sample file  (module-inventory-import-export/Files/)
- fixtures: Sample Data module (module-sales-sample-data/fixtures/orders.csv)
- Gateway: (module-paypal/Gateway)
- Helper: Classes that hold code used in more than one application layer. For example, in the Cms module, helper classes are responsible for preparing HTML for presentation to the browser.
- i18n: Holds internationalization CSV files, used for translation
- Indexer: IndexHandler  (module-inventory-indexer/Indexer)
- Model: For Models and ResourceModels
- Observer: Holds Observers, or Models which are “observing” system events. Usually, when such an event is fired, the observer instantiates a Model to handle the necessary business logic for such an event.
- Package: module-deploy/Package
- Pricing: Final price model  (module-msrp-grouped-product/Pricing)
- Process: module-deploy/Process
- Plugin: directory comprises plugin files  allow us to modify certain module’s functions if necessary described in the configuration file: vendor/magento/module-catalog/etc/di.xml
- SearchAdapter: module-elasticsearch/SearchAdapter
- ReportXml :vendor/magento/module-analytics/ReportXml
- Setup: Migration classes, responsible for schema & data creation
- Service: [exam] (module-media-storage/Service/ImageResize.php,module-deploy/ or module-catalog-url-rewrite/Service/V1/StoreViewService.php )
- src : vendor/magento/magento2-functional-testing-framework/src/Magento/
- Strategy: module-deploy/Strategy
- Source: module-deploy/Source
- Test: Unit tests
- Ui: Elements such as grids & forms used in  admin application
- view – Layout (XML) files & template (PHTML) files for  front-end & admin application contains template files, CSS and JS files, module media files. These files are located in subfolders depending on the area of use: adminhtml, frontend or base (common files for the administrative and frontal parts of the site). These subdirectories, in turn, including static view files, design templates, email templates, and layout files:
    - view/{area}/email – contains emails templates.
    - view/{area}/layout – contains files for layout modifications.
    - view/{area}/page_layout – contains files for page_layout modifications.
    - view/{area}/templates – contains files of the module templates (phtml).
    - view/{area}/ui_component – contains XML-files of the UI module components.
    - view/{area}/ui_component/templates
    - view/{area}/web – contains CSS, JS, static and media module files.
    - view/{area}/web/js – contains js
    - view/{area}/web/template – contains html
    - view/{area}/requirejs-config.js



- ViewModel: (module-sales/ViewModel)

### <a name="Step2A2">Step 2A.2: Declare module by using configuration file module.xml</a>

Magento 2 looks for configuration information for each module in that module’s etc directory. We need to create folder etc and add module.xml:
 - Create [etc/module.xml](/etc/module.xml) And the content for this file:

   <details><summary>Source</summary>

       ```
       <?xml version="1.0"?>
       <config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:Module/etc/module.xsd">
           <module name="BDC_SimpleNews" setup_version="1.0.0" />
       </config>
       ```
   </details>

In this file, we register a module with name `BDC_SimpleNews` and the version is `1.0.0`.

#### Notes[u can skip]:
- Magento 2 need  Two Mandatory File to  run/activate Module etc/module.xml & registration.php

### <a name="Step2A3"> Step 2A.3: Register module by registration.php</a>

All Magento 2 module must be registered in the Magento system through the magento ComponentRegistrar class. This file will be placed in module root directory.
In this step, we need to create this file:
- Create  [registration.php](registration.php) and insert this following code into it:
  <details><summary>Source</summary>
    ~~~
    \Magento\Framework\Component\ComponentRegistrar::register(
        \Magento\Framework\Component\ComponentRegistrar::MODULE,
        'BDC_SimpleNews', __DIR__
    );
    ~~~
  </details>

Modules in vendor folder would update using composer And all the modules in app/code would not be updated through composer That's why when you need to override any module you add it in app/code

- Create  [composer.json](composer.json)  and insert this following code into it:

  <details><summary>Source</summary>

      ```
      {
        "name": "bdc/module-simplenews",
        "description": "BDCrops SimpleNews module for Magento 2 extensions.",
        "type": "magento2-module",
        "version": "1.0.3",
        "license": [
            "OSL-3.0",
            "AFL-3.0"
        ],
      "authors": [{
                "name": "Abdul Matin",
                "email": "matinict@gmail.com",
      		      "company": "BDCrops Inc"
            }
        ],
      "homepage": "https://www.bdcrops.com",
        "autoload": {
            "files": [
                "registration.php"
            ],
            "psr-4": {
                "BDC\\SimpleNews\\": ""
            }
        }
      }

      ```
  </details>

### <a name="Step2A4">Step 2A.4: Configure declarative schema (create table  schema Installation file)</a>

- Create [etc/db_schema.xml](etc/db_schema.xml) &  insert this following code into it:

  <details><summary>Source</summary>

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
  </details>


#### Note:
[Tutarials module-declarative](https://github.com/bdcrops/module-declarative)

### <a name="Step2A5">Step 2A.5: Schema whitelist (etc/db_schema_whitelist.json) </a>

You will not be able to run a declarative mode without creating a schema whitelist.
Note: it is recommended to generate a new whitelist for every release for the double-check purposes.Before running the upgrade command you need to add your schema to db_whitelist_schema.json file by running the following command.
For that, you need a /etc/db_schema_whitelist.json file that will store all the content added with declarative schema. To generate this file, run:


![db_schema](https://github.com/bdcrops/BDC_Declarative/blob/master/view/adminhtml/web/images/whitelist.png)

```
php bin/magento setup:db-declaration:generate-whitelist [options]
php bin/magento setup:db-declaration:generate-whitelist --module-name=vendor_module
php bin/magento setup:db-declaration:generate-whitelist --module-name=BDC_SimpleNews
```

Now, there are db_whitelist_schema.json file will be create in /vendor/module/etc folder.
![db_whitelist_schema](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/db_schema_whitelist.png)



### <a name="Step2A6">Step 2A.6: Enable the module</a>


By finish above step, you have created an empty module. Now we will enable it in Magento environment.Before enable the module, we must check to make sure Magento has recognize our module or not by enter the following at the command line:

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



### <a name="Step2A7">Step 2A.7:  Develop data and schema patches (Insert data Installing and upgrading data)</a>


Since in the old method, we used to write scripts in Install Schema or Upgrade schema when a table was created, but now in the new version, this will be done through Patch system.A data patch is a class that contains data modification instructions. It is defined in a <Namespace>/<Module_Name> /Setup/Patch/Data/<Patch_Name>.php file and implements \Magento\Setup\Model\Patch\DataPatchInterface.
A schema patch contains custom schema modification instructions. These modifications can be complex.
It is defined in a<Vendor>/<Module_Name>/Setup/Patch/Schema/<Patch_Name>.php file and implements \Magento\Setup\Model\Patch\SchemaPatchInterface.
So to add data to the bdc_simplenews table create AddData.php file inside folder BDC/SimpleNews/Setup/Patch/Data and write the following code

- Create [Setup/Patch/Data/AddData.php](Setup/Patch/Data/AddData.php)

  <details><summary>Source</summary>

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
  <details>

### <a name="Step2A8"> Step 2A.8: Create Model News for business Logic</a>

We need to create these files to insert, update, delete and get data in the database.

- Create model file: [Model/News.php](Model/News.php):

  <details><summary>Source</summary>

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
              array $data = [] ) {
              parent::__construct($context, $registry, $resource, $resourceCollection, $data);
          }

         /**
          * (non-PHPdoc)
          * @see \Magento\Framework\Model\AbstractModel::_construct()
          */
          public function _construct(){
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

  <details>


#### <a name="Step2A8Note1"> Note: basic concepts of models, resource models, and collections</a>
CRUD Models in Magento 2 can manage data in database easily, you don’t need to write many line of code to create a CRUD. CRUD is stand for Create, Read, Update and Delete.
The Magento ORM is used by the Repository implementations that are part of the Magento 2 service contracts. This is an important variation from Magento 1, as a module should no longer rely on other modules using a specific ORM, and instead of it use only the entity repositories. The service contracts will be covered in more details in the second part of the article.The Magento ORM is built around models, resource models, and resource collections. The Magento ORM elements are following:

-  Models are data and behavior, representing entities.
- Resource Models are data mappers for the storage structure.
- Collections are encapsulating sets of models and related functionality, such as filtering, sorting, and paging.
- Resources include database connections via adapters.
#### <a name="Step2A8Note2">Note:native Magento save/load </a>
The ORM gives you a possibility to create, load, update, and delete data in a database. A collection in Magento is a class that implements both the IteratorAggregate and the Countable PHP5 SPL interfaces. Collections are widely used in Magento to store a set of objects of a specific type.

#### <a name="Step2A8Note3">Note: Models</a>
Models are like a black box which provides a layer of abstraction on top of the resource models. The fetching, extraction, and manipulation of data occur through models. As a rule of thumb, every entity we create (i.e. every table we create in our database) should have its own model class. Every model extends the Magento\Framework\Model\AbstractModelclass, which inherits the \Magento\Framework\DataObjectclass, hence, we can call the setDataand getData functions on our model, to get or set the data of a model respectively. class only has one method, _ construct(), when we call the _ init()method, and pass the resource model’s name as its paramete


### <a name="Step2A9">Step 2A.9: Create Model's ResourceModel to handle real database transaction</a>

- Create resource model [Model/Resource/News.php](Model/Resource/News.php):

  <details><summary>Source</summary>

      ```
      <?php

      namespace BDC\SimpleNews\Model\Resource;

      use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

      class News extends AbstractDb {
          /**
           * Define main table
           */
          protected function _construct() { $this->_init('bdc_simplenews', 'id'); }
      }

      ```
  </details>



#### <a name="Step2A9Note1">Note: Resource Model</a>
All of the actual database operations are executed by the resource model. Every model must have a resource model, since all of the methods of a resource model expects a model as its first parameter. All resource models must extend the Magento\Framework\Model\ResourceModel\Db\AbstractDbclass.
here also has one method, <__ construct>, where we call the <_ initmethod>, and pass two parameters to it. The name of the table in the database, and the name of the primary column in that table.
Resource Model. In Magento 2, the model class defines the methods an end-user-programmer will use to interact with a model’s data. A resource model class contains the methods that will actually fetch the information from the database. Each CRUD model in Magento 2 has a corresponding resource model class.

Every CRUD resource model class extends the Magento\Framework\Model\ResourceModel\Db\AbstractDb class. This base class contains the basic logic for fetching information from a single database table.
For a basic model like ours, the only thing a resource model must do is call the _ init method from _ construct. The _ init method for a resource model accepts two arguments. The first is the name of the database table (bdc_simplenews), and the second is the ID column for the model (id). While it’s beyond the scope of this article, Magento 2’s active record implementation contains no method for linking tables via primary keys. How to use multiple database tables is up to each individual module developer, and a resource model will typically contain the SQL generating methods needed to fetch information from related tables.


### <a name="Step2A10">Step 2A.10: Create Model's collection class</a>

- Create collection [Model/Resource/News/Collection.php](Model/Resource/News/Collection.php ):

  <details><summary>Source</summary>

      ```
      <?php
      namespace BDC\SimpleNews\Model\Resource\News;

      use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
      class Collection extends AbstractCollection {
          /**
           * Define model & resource model
           */
          protected function _construct(){
              $this->_init('BDC\SimpleNews\Model\News', 'BDC\SimpleNews\Model\Resource\News');
          }
      }

      ```

  </details>


#### <a name="Step2A10Note1">Note:  Collection </a>
Collections are used when we want to fetch multiple rows from our table. Meaning collections
- group of models. Collections can be used when we want to
- Fetch multiple rows from a table
- Join tables with our primary table
- Select specific columns
- Apply a WHERE clause to our query
- Use GROUP BY or ORDER BY in our query

With a model and resource model, you have everything you need to fetch and save individual models into the database. However, there are times where you’ll want to fetch multiple models of a particular type. To solve this problem, every CRUD model in Magento 2 has a corresponding resource model collection. A collection collects individual models. It’s considered a resource model since it builds the SQL code necessary to pull information from a database table.
All collections in Magento 2 extend the base \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection collection class. Like a model and resource model, a collection resource model must call the _ init method. A collection resource model’s _ init method accepts two arguments. The first is the model that this collection collects. The second is that collected model’s resource model.
We create a new Magento 2 block an inject \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory class. This is needed to get a collection from factory. A getProductCollection returns a new product collection. This method does the following:

- create a new collection from collection factory
- filter attributes (collumns)
- This time we want to load all data (* ), you can also add a comma seperated list of attribute names. Only this attributes get loaded – lazy loading optimizes your database select statement.
- filter by attribute values
It is possible to filter your collection by loaded attribute values. For example all products with price small than 1000 $. My example use setPageSize() to only load a given number of products.

### <a name="Step2A11">Step 2A.11: Setup the frontend route</a>

In the Magento system, a request URL has the following format:

~~~
http://example.com/<router_name>/<controller_name>/<action_name>
~~~

The Router is used to assign a URL to a corresponding controller and action. In this module, we need to create a route for frontend area. So we need to add this file:

- Create  [etc/frontend/routes.xml](etc/frontend/routes.xml):

  <details><summary>Source</summary>

      ~~~
      <?xml version="1.0"?>
      <config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:noNamespaceSchemaLocation="../../../../../../lib/internal/Magento/Framework/
      App/etc/routes.xsd">
          <router id="standard">
              <route id="news" frontName="news">
                  <module name="BDC_SimpleNews" />
              </route>
          </router>
      </config>
      ~~~

  </details>


After define the route, the URL path to our module will be: `http://example.com/news/`

#### <a name="Step2A11Note1">Note: Controllers, Routers and Responses</a>
- Routers: define name for a module which we can use in the url to find the module and execute the controller action.
- Controllers:Controllers in Magento 2 differ from typical controllers in MVC applications. Magento 2 controllers are responsible for only one specific URL and contain only one execute method. This method is responsible for returning result object and occasional processing of input POST data. All controllers inherit \Magento\Framework\App\Action\Action class. The required controller is searched in the Base Router, and then it’s called in the Front Controller.
- Responses: The controller in Magento 2 can return several response types depending on the purpose and the necessary result.

- Frontend route: Please look into the code, you will see it’s very simple to register a route. You must use the standard router for the frontend. This route will have a child which define the module for it and 2 attributes:
1. The id attribute is a unique string which will identify this route. You will use this string to declare the layout handle for the action of this module
2. The frontName attribute is also a unique string which will be shown on the url request. For example, if you declare a route like this: <route frontName="news" id="news"> The url to this module should be:
http://example.com/index.php/nwes/controller/action
And the layout handle for this action is: helloworld_controller_action.xml So with this example path, you must create the action class in this folder: {namespace}/{module}/Controller/{Controller}/{Action}.php



### <a name="Step2A12">Step 2A.12: Create IndexController</a>

- Factory Object
We are done with creating the database table, CRUD model, resource model and collection. So how to use them?

In this part, we will talk about Factory Object for model. As you know in OOP, a factory method will be used to instantiate an object. In Magento, the Factory Object do the same thing.

The Factory class name is the name of Model class and append with the ‘Factory’ word. So for our example, we will have PostFactory class. You must not create this class. Magento will create it for you. Whenever Magento’s object manager encounters a class name that ends in the word ‘Factory’, it will automatically generate the Factory class in the var/generation folder if the class does not already exist. You will see the factory class:

```
use BDC\SimpleNews\Model\NewsFactory;
var/generation/<vendor_name>/<module_name>/Model/ClassFactory.php
var/generation/BDC/SimpleNew/Model/NewsFactory.php
```
To instantiate a model object we will use automatic constructor dependency injection to inject a factory object, then use factory object to instantiate the model object.


- Create controller [Controller/Index/Index.php](Controller/Index/Index.php):

  <details><summary>Source</summary>

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
  </details>

After define the Controller, the URL path to our module will be: `http://example.com/news/` below data

![NewsDataFrontend](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/newsFrontendData.png)


#### Notes:
- Action class: extensions of the Action class that a router returns on matched requests. The execute() function in these classes contain the logic for dispatching requests.Each Action should implement one or more Magento\Framework\App\Action\HttpHTTP MethodActionInterface to declare which HTTP request methods it can process.Magento has a form key validation in place for all POST non-AJAX requests - if your Action doesn’t need that validation or you want to modify it you can implement CsrfAwareActionInterface.
If you need to forward a request to another action in your class, use the _ forward() function. Example:
```
$this->_forward('action', 'controller', 'Other_Module')
```

#### <a name="Step2A12Note1"> Responses: create a frontend controller with different response types</a>
- Page Result (\Magento\Framework\View\Result\Page) is the most common type of response. By returning this object, the controller starts the standard page rendering based on the corresponding XML layout handle.
```
public function __construct(
   $pageFactory Magento\Framework\View\Result\PageFactory
) {
   $this->pageResultFactory = $pageFactory
}
public function execute()
{
   return $this->pageResultFactory->create();
}
```
- Raw Result (\Magento\Framework\Controller\Result\Raw) is used if you want to return a string to the browser without using Magento layout and view rendering.
```
public function __construct(
   Magento\Framework\Controller\Result\Raw $rawResultFactory ,
) {
   $this->rawResultFactory = $rawResultFactory;
}
public function execute()
{
   $result = $this->rawResultFactory->create();
   $result->setHeader('Content-Type', 'text/xml');
   $result->setContents('<root><block></block></root>);
   return $result;
}
```

- Forward Result (\Magento\Framework\Controller\Result\Forward) allows to call another method/controller without changing the URL or redirecting.
```
public function __construct(
   Magento\Framework\Controller\Result\Forward\Factory $resultForwardFactory    
) {
   $this->resultForwardFactory = $resultForwardFactory;
}
public function execute()
{
   $result = $this->resultForwardFactory->create();
   $result->forward('noroute');    
   return $result;
}
```
- Redirect Result (\Magento\Framework\Controller\Result\Redirect) is used when a user needs to be redirected to a different URL.
```
public function __construct(
   Magento\Framework\Controller\Result\Redirect\Factory $resultRedirectFactory
) {
   $this->resultRedirectFactory = $resultRedirectFactory;
}
public function execute()
{
   $result = $this->resultRedirectFactory->create();
   $result->setPath('*/*/index');
   return $result;
}
```

***

### <a name="PartB">Part B: News Module for Back End </a>   [Go to Top](#top)



### <a name="Step2B1">Step 2B1: Setup Module's Backend /System  configuration</a>

- Create file[etc/adminhtml/system.xml](etc/adminhtml/system.xml)

  (Purpose: This file will declare your configurations in Stores > Settings > Configuration section) and insert this following code into it:

  <details><summary>Source</summary>

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
  </details>

#### Note: [System configuration](https://inviqa.com/blog/how-use-system-configuration-and-helpers-magento-2) :

System configuration values in Magento 2 are stored in the core_config_data database table, which is exactly the same as in Magento 1. But the xml config files differ.
The system.xml is a configuration file which is used to create configuration fields in Magento 2 System Configuration. the system config file is at etc/adminhtml/system.xml

The system.xml is a configuration file which is used to create configuration fields in Magento 2 System Configuration. You will need this if your module has some settings which the admin needs to set. You can go to Store -> Setting -> Configuration to check how it look like.


#### Note:- [MCAD: 5.4 Set up a menu item](https://belvg.com/blog/magento-2-custom-system-configuration.html)
- How do you add a new menu item to a given tab?
- How do you add a new tab to the Admin menu?


### <a name="Step2B2">Step 2B2:Create a custom source model</a>

- Create file [Model/System/Config/LastestNews/Position.php](Model/System/Config/LastestNews/Position.php):
  <details><summary>Source</summary>

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
  </details>

### <a name="Step2B3">Step 2B3:  Create a role for this config section</a>

- Create file [etc/acl.xml](etc/acl.xml)
  (Purpose: This file will create a role for your configuration section) and insert this following code into it:
  <details><summary>Source</summary>
  
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
  </details>

#### Note:- 5.3 Define / identify basic terms and elements of ACL

- How would you add a new ACL resource to a new entity?  
- How do you manage the existing ACL hierarchy?  

### <a name="Step2B4">Step 2B4:  Set some default value for configuration options</a>

- Create file[etc/config.xml](etc/config.xml) and insert this following code into it:
  <details><summary>Source</summary>

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
  </details>

### <a name="Step2B5">Step 2B.5:  Create a Helper Data class</a>

- Create file: app/code/BDC/SimpleNews/Helper/Data.php and insert this following code into it:

```
<?php

namespace BDC\SimpleNews\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper {
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
   public function isEnabledInFrontend($store = null){
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
   public function getHeadTitle() {
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
   public function getLastestNewsBlockPosition() {
      return $this->_scopeConfig->getValue(
         self::XML_PATH_LASTEST_NEWS,
         ScopeInterface::SCOPE_STORE
      );
   }
}

```

#### Note: What are Helpers?
Helpers are the classes that we can use throughout the Magento website to provide different features. Magento 2 Helpers can be used in Controllers, Blocks, Models, Views and even in other Helper classes.
Helpers are the elements that are global and always available. We can use the Helpers in any class through Dependency Injection.


### <a name="Step2B6">Step 2B.6:  Create the menu for Magento backend</a>

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

![MenuLinkAdmin](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/adminhtmlMenu.png)


### <a name="Step2B7">Step 2B.7:  Create backend route file</a>

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
#### Note:
- Admin Route: This route will be same as the frontend route but you must declare it in adminhtml folder with router id is admin. /etc/adminhtml/routes.xml
The url of the admin page is the same structure with frontend page, but the admin_area name will be added before route_frontName to recognize this is a admin router. For example, the url of admin cms page:
http://example.com/index.php/admin/simplenews/controller/action
The controller action for admin page will be added inside of the folder Controller/Adminhtml. For example for above url: {namespace}/{module}/Controller/Adminhtml/{Controller}/{Action}.php

### <a name="Step2B8">Step 2B.8:  Update the acl.xml to add more roles</a>

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

### <a name="Step2B9">Step 2B.9:  Create layout for grid</a>


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

### <a name="Step2B10">Step 2B.10:  Create layout for Grid Container</a>


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


### <a name="Step2B11">Step 2B.11:  Create layout for ajax load</a>

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


### <a name="Step2B12"> Step 2B.12:  Create news status option file</a>

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

### <a name="Step2B13"> Step 2B.13:  Create News Block for backend</a>
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



### <a name="Step2B14">Step 2B.14:  Create Status </a>
- Create file: app/code/BDC/SimpleNews/Model/System/Config/Status.php (Purpose: check) and insert this following code into it:
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

### <a name="Step2B15">Step 2B.15:  Create a backend controller file for child action class to extend</a>

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


### <a name="Step2B16">Step 2B.16:  Create Backend Action file Index.php</a>

- Create file: app/code/BDC/SimpleNews/Controller/Adminhtml/News/Index.php (Purpose: This is the index action) and insert this following code into it:

```
<?php

namespace BDC\SimpleNews\Controller\Adminhtml\News;

use BDC\SimpleNews\Controller\Adminhtml\News;

class Index extends News{
    /**
     * @return void
     */
   public function execute(){
      if ($this->getRequest()->getQuery('ajax')) {
            $this->_forward('grid');
            return;
        }
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->_resultPageFactory->create();
        $resultPage->setActiveMenu('BDC_SimpleNews::main_menu');
        $resultPage->getConfig()->getTitle()->prepend(__('Simple News'));

        return $resultPage;
   }
}

```


### <a name="Step2B17">Step 2B.17:  Create another Action for ajax</a>
- Create file: app/code/BDC/SimpleNews/Controller/Adminhtml/News/Grid.php (Purpose: This is the grid action which is used for loading grid by ajax) and insert this following code into it:
```
<?php

namespace BDC\SimpleNews\Controller\Adminhtml\News;

use BDC\SimpleNews\Controller\Adminhtml\News;

class Grid extends News {
   /**
     * @return void
     */
   public function execute() {
      return $this->_resultPageFactory->create();
   }
}

```

![allNews](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/allNews.png)


### <a name="Step2B8"> Step 2B.18:  Create layout file simplenews_news_edit.xml for edit form</a>
- Create file: app/code/BDC/SimpleNews/view/adminhtml/layout/simplenews_news_edit.xml (Purpose: This file is used to declare blocks which used on editing page) and insert this following code into it:
```
<?xml version="1.0"?>

<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
layout="admin-2columns-left" xsi:noNamespaceSchemaLocation="../../../../../../../lib/internal/Magento/Framework/View/Layout/etc/page_configuration.xsd">
    <body>
        <referenceContainer name="left">
            <block class="BDC\SimpleNews\Block\Adminhtml\News\Edit\Tabs"  name="bdc_simplenews_news.edit.tabs"/>
        </referenceContainer>
        <referenceContainer name="content">
            <block class="BDC\SimpleNews\Block\Adminhtml\News\Edit"
                name="bdc_simplenews_news.edit"/>
        </referenceContainer>
    </body>
</page>

```


### <a name="Step2B19">Step 2B.19:  Create the layout for create form</a>

- Create file: app/code/BDC/SimpleNews/view/adminhtml/layout/simplenews_news_create.xml and insert this following code into it:
```
<?xml version="1.0"?>

<layout xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:noNamespaceSchemaLocation="../../../../../Magento/Core/etc/layout_single.xsd">
    <update handle="simplenews_news_edit"/>
</layout>

```


### <a name="Step2B20"> Step 2B.20:  Create a form container block</a>

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


### <a name="Step2B21"> Step 2B.21:  create a block for the left-side tabs</a>

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

### <a name="Step2B22">Step 2B.22:  Create a block for Form information</a>

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

### <a name="Step2B23">Step 2B.23:  Create a block to declare the fields for the edit form</a>
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


### <a name="Step2B24">Step 2B.24:  Create a controller action for create a new News</a>
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

### <a name="Step2B25">Step 2B.25:  Create Edit Action for the Edit form</a>
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


### <a name="Step2B26">Step 2B.26:  A Save Action for the edit form</a>

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

### <a name="Step2B27">Step 2B.27:  Delete Action for the edit Form</a>

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

### <a name="Step2B28"> Step 2B.28:  The mass delete action the grid list</a>

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

![EditNews](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/EditNews.png)


### <a name="Step2B29">Step 2B.29:  Backend Menu and Grid List</a>

![allNews](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/allNews.png)

![addNews](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/addNews.png)







## <a name="PartC"> Part C : News Module for  Front End </a>  [Go to Top](#top)

***

### <a name="Step2C1">Step 2C.1:  Create Layout file for page handle</a>

- Create file: app/code/BDC/SimpleNews/view/frontend/layout/news_news.xml (we will use this layout file as default in our module) and insert this following code into it:
```
<?xml version="1.0" encoding="UTF-8"?>

<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" layout="3columns"
xsi:noNamespaceSchemaLocation="../../../../../../../lib/internal/Magento/Framework/View/Layout/etc/page_configuration.xsd">
   <head>
      <css src="BDC_SimpleNews::css/style.css" />
   </head>
    <body>
       <referenceContainer name="sidebar.main">
         <block class="BDC\SimpleNews\Block\Lastest\Left" name="lestest.news.left"
             before="-" />
       </referenceContainer>

       <referenceContainer name="sidebar.additional">
         <block class="BDC\SimpleNews\Block\Lastest\Right" name="lestest.news.right"
             before="-" />
       </referenceContainer>
    </body>
</page>

```

### <a name="Step2C2">Step 2C.2:  Create another layout file by update the previous layout</a>
- Create file: app/code/BDC/SimpleNews/view/frontend/layout/news_index_index.xml (this file will declare blocks for using in the news list page) and insert this following code into it:
```
<?xml version="1.0"?>
<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" layout="3columns" xsi:noNamespaceSchemaLocation="urn:magento:framework:View/Layout/etc/page_configuration.xsd">
    <update handle="news_news" />
    <body>
        <referenceBlock name="content">
            <block template="BDC_SimpleNews::list.phtml" class="BDC\SimpleNews\Block\NewsList" name="bdc_simplenews_block_news_list"/>
        </referenceBlock>
    </body>
</page>

```


### <a name="Step2C3">Step 2C.3:  Create Block News List file</a>

- Create file: app/code/BDC/SimpleNews/Block/NewsList.php (this file will set the news data collection and declare pagination for them) and insert this following code into it:
```
<?php

namespace BDC\SimpleNews\Block;

use Magento\Framework\View\Element\Template;
use BDC\SimpleNews\Model\NewsFactory;

class NewsList extends Template
{
   /**
    * @var \BDC\SimpleNews\Model\NewsFactory
    */
   protected $_newsFactory;

   /**
    * @param Template\Context $context
    * @param NewsFactory $newsFactory
    * @param array $data
    */
   public function __construct(
      Template\Context $context,
      NewsFactory $newsFactory,
      array $data = []
   ) {
        $this->_newsFactory = $newsFactory;
        parent::__construct($context, $data);
   }

   /**
     * Set news collection
     */
    protected  function _construct()
    {
        parent::_construct();
        $collection = $this->_newsFactory->create()->getCollection()
            ->setOrder('id', 'DESC');
        $this->setCollection($collection);
    }

   /**
     * @return $this
     */
    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        /** @var \Magento\Theme\Block\Html\Pager */
        $pager = $this->getLayout()->createBlock(
           'Magento\Theme\Block\Html\Pager','simplenews.news.list.pager'
        );
        $pager->setLimit(5)
            ->setShowAmounts(false)
            ->setCollection($this->getCollection());
        $this->setChild('pager', $pager);
        $this->getCollection()->load();

        return $this;
    }

   /**
     * @return string
     */
    public function getPagerHtml()
    {
        return $this->getChildHtml('pager');
    }
}

```

### <a name="Step2C4">Step 2C.4:  Create frontend template file list.phtml</a>

- Create file: app/code/BDC/SimpleNews/view/frontend/templates/list.phtml (this file will set the news data collection and declare pagination for them) and insert this following code into it:
```
<div class="simplenews">
   <?php
      $newsCollection = $block->getCollection();
      if ($newsCollection->getSize() > 0) :
   ?>
      <div class="toolbar top">
         <?php echo $block->getPagerHtml(); ?>
      </div>

      <ul>
         <?php foreach ($newsCollection as $news) : ?>
            <li>
               <div class="simplenews-list">
                  <a class="news-title" href="<?php echo $this->getUrl('news/index/view',
 ['id' => $news->getId()]) ?>"><?php echo $news->getTitle() ?></a>
                  <div class="simplenews-list-content">
                     <?php echo $news->getSummary() ?>
                  </div>
               </div>
            </li>
         <?php endforeach; ?>
      </ul>

      <div style="clear: both"></div>

      <div class="toolbar-bottom">
         <div class="toolbar bottom">
            <?php echo $block->getPagerHtml(); ?>
         </div>
      </div>
   <?php else : ?>
      <p><?php echo __('Have no article!') ?></p>
   <?php endif; ?>
</div>

```


### <a name="Step2C5">Step 2C.5:  Create an abstract class by extending Magento Core Action class</a>

- Create file: app/code/BDC/SimpleNews/Controller/News.php and insert this following code into it:
```
<div class="simplenews">
   <?php
      $newsCollection = $block->getCollection();
      if ($newsCollection->getSize() > 0) :
   ?>
      <div class="toolbar top">
         <?php echo $block->getPagerHtml(); ?>
      </div>

      <ul>
         <?php foreach ($newsCollection as $news) : ?>
            <li>
               <div class="simplenews-list">
                  <a class="news-title" href="<?php echo $this->getUrl('news/index/view',
 ['id' => $news->getId()]) ?>"><?php echo $news->getTitle() ?></a>
                  <div class="simplenews-list-content">
                     <?php echo $news->getSummary() ?>
                  </div>
               </div>
            </li>
         <?php endforeach; ?>
      </ul>

      <div style="clear: both"></div>

      <div class="toolbar-bottom">
         <div class="toolbar bottom">
            <?php echo $block->getPagerHtml(); ?>
         </div>
      </div>
   <?php else : ?>
      <p><?php echo __('Have no article!') ?></p>
   <?php endif; ?>
</div>

```


### <a name="Step2C6">Step 2C.6:  Update Index Controller by extends the abstract class 'New.php'</a>

- update/Edit file: app/code/BDC/SimpleNews/Controller/Index/Index.php and insert this following code into it:

```
<?php

namespace BDC\SimpleNews\Controller\Index;

use BDC\SimpleNews\Controller\News;

class Index extends News
{

    public function execute()
    {
        $pageFactory = $this->_pageFactory->create();

        $pageFactory->getConfig()->getTitle()->set($this->_dataHelper->getHeadTitle());

        //Add breadcrumb
        $breadcrumbs = $pageFactory->getLayout()->getBlock('breadcrumbs');
        $breadcrumbs->addCrumb('home', ['label'=>__('Home'), 'title'=>__('Home'), 'link'=>$this->_url->getUrl('')]);
        $breadcrumbs->addCrumb('simplenews', ['label'=>__('Simple News'), 'title'=>__('Simple News')]);

        return $pageFactory;
    }
}
```


### <a name="Step2C7"> Step 2C.7:  Create a layout file for news detail page</a>
- Create file: app/code/BDC/SimpleNews/view/frontend/web/css/style.css and insert this following code into it:
```
.simplenews > ul {
   list-style: none;
   padding: 0;
}
.simplenews > ul li {
   padding: 10px 5px;
   margin: 0;
   background-color: #fff;
   border-bottom: 1px #c4c1bc solid;
   display: inline-block;
   width: 100%;
}
.simplenews > ul li:last-child {
   border-bottom: none;
}
.simplenews-list {
   float: left;
   position: relative;
   margin-left: 10px;
   width: 100%;
}
.simplenews-list a.news-title {
   font-weight: bold;
}
.simplenews-list a.news-title:hover {
   text-decoration: none;
}
.block-simplenews .block-title {
   margin: 0px 0px 20px;
}
.block-simplenews-heading {
   font-size: 18px;
   font-weight: 300;
}

```

![frontEndNews](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/frontEndNews.png)


### <a name="Step2C8"> Step 2C.8:  Create News view action</a>

- Create file: app/code/BDC/SimpleNews/view/frontend/layout/news_index_view.xml and insert this following code into it:
```
<?xml version="1.0" encoding="UTF-8"?>

<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" layout="3columns"
xsi:noNamespaceSchemaLocation="../../../../../../../lib/internal/Magento/Framework/View/Layout/etc/page_configuration.xsd">
    <update handle="news_news" />
    <body>
        <referenceContainer name="content">
            <block class="BDC\SimpleNews\Block\View" name="bdc_simplenews_news_view"
                template="BDC_SimpleNews::view.phtml" />
        </referenceContainer>
    </body>
</page>

```


### <a name="Step2C9"> Step 2C.9:  create view news block</a>

- Create file: app/code/BDC/SimpleNews/Controller/Index/View.php and insert this following code into it:

```
<?php

namespace BDC\SimpleNews\Controller\Index;

use BDC\SimpleNews\Controller\News;

class View extends News
{
    public function execute()
    {
	// Get news ID
        $newsId = $this->getRequest()->getParam('id');
	// Get news data
        $news = $this->_newsFactory->create()->load($newsId);
	// Save news data into the registry
        $this->_objectManager->get('Magento\Framework\Registry')
            ->register('newsData', $news);

        $pageFactory = $this->_pageFactory->create();

        // Add title
        $pageFactory->getConfig()->getTitle()->set($news->getTitle());

        // Add breadcrumb
        /** @var \Magento\Theme\Block\Html\Breadcrumbs */
        $breadcrumbs = $pageFactory->getLayout()->getBlock('breadcrumbs');
        $breadcrumbs->addCrumb('home',
            [
                'label' => __('Home'),
                'title' => __('Home'),
                'link' => $this->_url->getUrl('')
            ]
        );
        $breadcrumbs->addCrumb('simplenews',
            [
                'label' => __('Simple News'),
                'title' => __('Simple News'),
                'link' => $this->_url->getUrl('news')
            ]
        );
        $breadcrumbs->addCrumb('news',
            [
                'label' => $news->getTitle(),
                'title' => $news->getTitle()
            ]
        );

        return $pageFactory;
    }
}

```


### <a name="Step2C10"> Step 2C.10:  Create news view template file</a>

- Create file: app/code/BDC/SimpleNews/Block/View.php (this file will get the news data) and insert this following code into it:
```
<?php

namespace BDC\SimpleNews\Controller\Index;

use BDC\SimpleNews\Controller\News;

class View extends News
{
    public function execute()
    {
	// Get news ID
        $newsId = $this->getRequest()->getParam('id');
	// Get news data
        $news = $this->_newsFactory->create()->load($newsId);
	// Save news data into the registry
        $this->_objectManager->get('Magento\Framework\Registry')
            ->register('newsData', $news);

        $pageFactory = $this->_pageFactory->create();

        // Add title
        $pageFactory->getConfig()->getTitle()->set($news->getTitle());

        // Add breadcrumb
        /** @var \Magento\Theme\Block\Html\Breadcrumbs */
        $breadcrumbs = $pageFactory->getLayout()->getBlock('breadcrumbs');
        $breadcrumbs->addCrumb('home',
            [
                'label' => __('Home'),
                'title' => __('Home'),
                'link' => $this->_url->getUrl('')
            ]
        );
        $breadcrumbs->addCrumb('simplenews',
            [
                'label' => __('Simple News'),
                'title' => __('Simple News'),
                'link' => $this->_url->getUrl('news')
            ]
        );
        $breadcrumbs->addCrumb('news',
            [
                'label' => $news->getTitle(),
                'title' => $news->getTitle()
            ]
        );

        return $pageFactory;
    }
}

```


### <a name="Step2C11">Step 2C.11:  Create View file for News details the frontend Page</a>

- Create file: app/code/BDC/SimpleNews/view/frontend/templates/view.phtml (this file will set the news data collection and declare pagination for them) and insert this following code into it
```
<?php
   $news = $block->getNewsInformation();
?>
<div class="mw-simplenews">
   <?php echo $news->getDescription() ?>
</div>

```

![FrontendNewsDetails](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/FrontendNewsDetails.png)


### <a name="Step2C12">Step 2C.12:  Create Latest New Block</a>

- Open file: app/code/BDC/SimpleNews/view/frontend/layout/news_news.xml (we will add 2 blocks to the page body) and insert this following code into it:
```
<?xml version="1.0" encoding="UTF-8"?>

<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" layout="3columns"
xsi:noNamespaceSchemaLocation="../../../../../../../lib/internal/Magento/Framework/View/Layout/etc/page_configuration.xsd">
   <head>
      <css src="BDC_SimpleNews::css/style.css" />
   </head>
    <body>
       <referenceContainer name="sidebar.main">
         <block class="BDC\SimpleNews\Block\Lastest\Left" name="lestest.news.left"
             before="-" />
       </referenceContainer>

       <referenceContainer name="sidebar.additional">
         <block class="BDC\SimpleNews\Block\Lastest\Right" name="lestest.news.right"
             before="-" />
       </referenceContainer>
    </body>
</page>

```


### <a name="Step2C13"> Step 2C.13:  Create a Block for positioning the latest news: Left or Right</a>
- Create file: app/code/BDC/SimpleNews/Block/Lastest.php (this file will get the news data) and insert this following code into it:

```
<?php

namespace BDC\SimpleNews\Block;

use Magento\Framework\View\Element\Template;
use BDC\SimpleNews\Helper\Data;
use BDC\SimpleNews\Model\NewsFactory;
use BDC\SimpleNews\Model\System\Config\Status;

class Lastest extends Template
{
   /**
    * @var \BDC\SimpleNews\Helper\Data
    */
   protected $_dataHelper;

   /**
    * @var \BDC\SimpleNews\Model\NewsFactory
    */
   protected $_newsFactory;

   /**
    * @param Template\Context $context
    * @param Data $dataHelper
    * @param NewsFactory $newsFactory
    */
   public function __construct(
      Template\Context $context,
      Data $dataHelper,
      NewsFactory $newsFactory
   ) {
      $this->_dataHelper = $dataHelper;
      $this->_newsFactory = $newsFactory;
      parent::__construct($context);
   }

   /**
    * Get five latest news
    *
    * @return \BDC\SimpleNews\Model\Resource\News\Collection
    */
   public function getLatestNews()
   {
      // Get news collection
      $collection = $this->_newsFactory->create()->getCollection();
      $collection->addFieldToFilter(
         'status',
         ['eq' => Status::ENABLED]
      );
      $collection->getSelect()
         ->order('id DESC')
         ->limit(5);

      return $collection;
   }
}


```


### <a name="Step2C14"> Step 2C.14:  Create the template file for Latest News</a>

- Create file: app/code/BDC/SimpleNews/Block/Lastest/Left.php (This file will check the left position and set template file) and insert this following code into it:

```
<?php

namespace BDC\SimpleNews\Block\Lastest;

use BDC\SimpleNews\Block\Lastest;
use BDC\SimpleNews\Model\System\Config\LastestNews\Position;

class Left extends Lastest
{
   public function _construct()
   {
      $position = $this->_dataHelper->getLastestNewsBlockPosition();
      // Check this position is applied or not
      if ($position == Position::LEFT) {
         $this->setTemplate('BDC_SimpleNews::lastest.phtml');
      }
   }
}

```

- Create file: app/code/BDC/SimpleNews/Block/Lastest/Right.php (This file will check the right position and set template file) and insert this following code into it:

```
<?php

namespace BDC\SimpleNews\Block\Lastest;

use BDC\SimpleNews\Block\Lastest;
use BDC\SimpleNews\Model\System\Config\LastestNews\Position;

class Right extends Lastest
{
   public function _construct()
   {
      $position = $this->_dataHelper->getLastestNewsBlockPosition();
      // Check this position is applied or not
      if ($position == Position::RIGHT) {
         $this->setTemplate('BDC_SimpleNews::lastest.phtml');
      }
   }
}

```


### <a name="Step2C15">Step 2C.15:  Frontend view for the module</a>

- Create file: app/code/BDC/SimpleNews/view/frontend/templates/lastest.phtml (This file will display 5 lastest news on the page) and insert this following code into it:
```
<?php
   $latestNews = $block->getLatestNews();
   if ($latestNews->getSize() > 0) :
?>
   <div class="block block-simplenews">
      <div class="block-title">
         <strong class="block-simplenews-heading"><?php echo __('Latest News') ?></strong>
      </div>

      <div class="block-content">
         <?php foreach ($latestNews as $news) : ?>
            <div>
               <span>+ </span>
               <a href="<?php echo $this->getUrl('news/index/view', ['id' => $news->getId()])
?>">
                  <span><?php echo $news->getTitle() ?></span>
               </a>
            </div>
         <?php endforeach; ?>
      </div>
   </div>
<?php endif; ?>

```

## <a name="PartD"> Part D : News Console Command </a>  [Go to Top](#top)


### <a name="Step2D1"> Step 2D1: Adding a new command  Dependency Injection</a>

Adding a new command to CLI is based on passing on the argument from the XML level to the class Magento\Framework\Console\CommandList. Dependency Injection comes in handy here. Let’s  

- Edit/Create [etc/di.xml](etc/di.xml):
  <details><summary>Source</summary>

    ```
    <?xml version="1.0"?>
    <config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:ObjectManager/etc/config.xsd">
       <type name="Magento\Framework\Console\CommandList">
           <arguments>
               <argument name="commands" xsi:type="array">
                 <item name="bdc_simplenews_create" xsi:type="object">BDC\SimpleNews\Console\Command\NewsCreate</item>
               </argument>
           </arguments>
       </type>
    </config>
    ```
  </details>
### <a name="Step2D2"> Step 2D2: Adding a new command  class</a>
We add the object responsible for executing the script to the class Magento\Framework\Console\CommandList. The constructor of this class is simply an array where class objects are passed on in a similar manner as in the above example.

Let’s proceed to the next step – creating a class for our new command and a helper responsible for adding a new user:

- Create  [Console/Command/NewsCreate.php](Console/Command/NewsCreate.php):
  <details><summary>Source</summary>

    ```
    <?php
    namespace BDC\SimpleNews\Console\Command;

    use Symfony\Component\Console\Command\Command;
    use Symfony\Component\Console\Input\InputOption;
    use Symfony\Component\Console\Input\InputInterface;
    use Symfony\Component\Console\Output\OutputInterface;
    use BDC\SimpleNews\Helper\News;

    class NewsCreate extends Command {
        protected $newsHelper;

        public function __construct(News $newsHelper)
        {
            $this->newsHelper = $newsHelper;
            parent::__construct();
        }

        protected function configure()
        {
            $this->setName('bdcrops:news:create')
                ->setDescription('Create New News')
                ->setDefinition($this->getOptionsList());
        }

        protected function execute(InputInterface $input, OutputInterface $output)
        {
            $output->writeln('<info>Creating new news...</info>');
            $this->newsHelper->setData($input);
            $this->newsHelper->execute();

            $output->writeln('');
            $output->writeln('<info>News created with the following data:</info>');
            $output->writeln('<comment>News ID: ' . $this->newsHelper->getNewsId());
            $output->writeln('<comment>Title: ' . $input->getOption(News::KEY_TITLE));
            $output->writeln('<comment>Summary: ' . $input->getOption(News::KEY_SUMMARY));
            $output->writeln('<comment>Description: ' . $input->getOption(News::KEY_DESC));

           }

        protected function getOptionsList(){
            return [
                new InputOption(News::KEY_TITLE, null, InputOption::VALUE_REQUIRED, '(Required) News Title'),
                new InputOption(News::KEY_SUMMARY, null, InputOption::VALUE_REQUIRED, '(Required) News Summary'),
                new InputOption(News::KEY_DESC, null, InputOption::VALUE_REQUIRED, '(Required) News Description'),

                ];
        }
    }
    ```
  </details>

### <a name="Step2D3"> Step 2D3: Helper  </a>


- Create  [Helper/News.php](Helper/News.php):

  <details><summary>Source</summary>

      ```
      <?php
      namespace BDC\SimpleNews\Helper;

      use \Magento\Framework\App\Helper\Context;
      use \Magento\Store\Model\StoreManagerInterface;
      use \Magento\Framework\App\State;
      use \BDC\SimpleNews\Model\NewsFactory;
      use \Symfony\Component\Console\Input\Input;
      use \Magento\Framework\App\Helper\AbstractHelper;

      class News extends AbstractHelper {
          const KEY_TITLE = 'news-title';
          const KEY_SUMMARY = 'news-summary';
          const KEY_DESC = 'news-description';
          protected $storeManager;
          protected $state;
          protected $newsFactory;
          protected $data;
          protected $newsId;

          public function __construct(
              Context $context,
              StoreManagerInterface $storeManager,
              State $state,
              NewsFactory $newsFactory ) {
              $this->storeManager = $storeManager;
              $this->state = $state;
              $this->newsFactory = $newsFactory;

              parent::__construct($context);
          }

          public function setData(Input $input) {
              $this->data = $input;
              return $this;
          }

          public function execute() {
              $this->state->setAreaCode('frontend');
              $news = $this->newsFactory->create();
              $news
                  ->setTitle($this->data->getOption(self::KEY_TITLE))
                  ->setSummary($this->data->getOption(self::KEY_SUMMARY))
                  ->setDescription($this->data->getOption(self::KEY_DESC))

                  ;
              $news->save();

              $this->newsId = $news->getId();

              // if($this->data->getOption(self::KEY_SENDEMAIL)) {
              //     $news->sendNewAccountEmail();
              // }
          }

          public function getNewsId() {
              return (int)$this->newsId;
          }
      }
      ```
  </details>

The execute() method adds a new user. If any data is incorrect at this stage (i.e. too short password), the script will stop and the console will show an Exception.

### <a name="Step2D4"> Step 2D4: Results  </a>

![](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/checkCliList.png)

```
php bin/magento bdcrops:news:create --news-title="Matin Cli News" --news-summary="summary 1" --news-description="News Description 1"
```
![](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/CliImgAddNews.png)


![](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/CliAddNewsDB.png)



## <a name="PartE">Part E : Set / Configure Custom Cron Jobs </a>  [Go to Top](#top)

### <a name="Step2E1">Step 2E1:Create crontab.xml </a>

Create a crontab.xml file in the following file path and set a time schedule to run the custom cron code which is defined  default.

- Create [etc/crontab.xml](etc/crontab.xml):

  <details><summary>Source</summary>

      ```
      <?xml version="1.0"?>
      <config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:module:Magento_Cron:etc/crontab.xsd">
          <group id="bdc_crongroup">
              <job name="bdcAddNews" instance="BDC\SimpleNews\Cron\AddNews" method="execute">
                  <!-- <config_path>bdc/general/cron_expression</config_path> -->
                  <schedule>* * * * *</schedule>
              </job>
          </group>
      </config>

      ```
  <details>

Here when defining the crontab for the module we need to define the group name too. Here group_name is the name of the cron group. The group name doesn’t have to be unique and we can run the cron for one group at a time.

Here,

group id: is a cron group name.
job name: is a Unique ID for this cron job.
instance: is a class to be instantiated (classpath).
method: is a method in job instance to call.
schedule: is a schedule in cron format.
```
* * * * * command to be executed
| | | | |
| | | | +----- Day of week (0 - 7) (Sunday=0 or 7)
| | | +------- Month (1 - 12)
| | +--------- Day of month (1 - 31)
| +----------- Hour (0 - 23)
+------------- Minute (0 - 59)
```


### <a name="Step2E2">Step 2E.2:Defined to run the execute method of class</a>

This file contains the custom cron code and which will be executed while the cron runs in Magento 2.
- Create  [Cron/AddNews.php](Cron/AddNews.php):

  <details><summary>Source</summary>

      ```
      <?php
      namespace BDC\SimpleNews\Cron;

      use BDC\SimpleNews\Model\NewsFactory;
      //use BDC\SimpleNews\Model\Config;
      class AddNews {
          private $newsFactory;
          public function __construct(NewsFactory $newsFactory) {
              $this->newsFactory = $newsFactory;
          }
          public function execute(){
              $this->newsFactory->create()
                  ->setTitle('Scheduled News')
                  ->setSummary('Scheduled News setSummary ' . date('Ymd'))
                  ->setDescription('Scheduled News setDescription ' . date('Ymd'))
                  ->save();
          }
      }

      ```
    </details>

### <a name="Step2E3">Step 2E.3: Run all cron jobs </a>
After completing the above steps run the below SSH command in your Magento 2 installed root directory to run the Magento 2 cron jobs

```
php bin/magento cache:flush
php bin/magento cron:run
```
To check whether the cron is working properly, go to db
```
SELECT * FROM `cron_schedule`
SELECT * FROM `cron_schedule` where `job_code` LIKE "%bdc%"
```

![](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/cron_cli.png)

### <a name="Step2E4">Step 2E.4:Create custom cron group  </a>
Declare a new group and specify its configuration options (all of which run in the store’s view scope) through the cron_groups.xml file, located at:
<your component base dir>/<vendorname>/module-<name>/etc/cron_groups.xml

- Create [etc/cron_groups.xml](etc/cron_groups.xml):
  <details><summary>Source</summary>

      ```
      <?xml version="1.0"?>
      <config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:module:BlogTreat_CustomCron:etc/cron_groups.xsd">
          <group id="bdc_crongroup">
              <schedule_generate_every>1</schedule_generate_every>
              <schedule_ahead_for>4</schedule_ahead_for>
              <schedule_lifetime>2</schedule_lifetime>
              <history_cleanup_every>10</history_cleanup_every>
              <history_success_lifetime>60</history_success_lifetime>
              <history_failure_lifetime>600</history_failure_lifetime>
          </group>
      </config>

      ```
  </details>
Where:

- group_name – Name of the custom group.
- schedule_generate_every – Frequency (in minutes) that schedules are written to the cron_schedule table.
- schedule_ahead_for – Time (in minutes) in advance that schedules are written to the cron_schedule table.
- schedule_lifetime – Window of time (in minutes) that cron job must start or will be considered missed (“too late” to run).
- history_cleanup_every – Time (in minutes) that cron history is kept in the database.
- history_success_lifetime – Time (in minutes) that the record of successfully completed cron jobs is kept in the database.
- history_failure_lifetime – Time (in minutes) that the record of failed cron jobs is kept in the database.
- use_separate_process – This feature is available only for Magento 2.1 and later.

You can check your new cron group in admin panel at:
Stores -> Configuration -> Advanced -> System -> Cron (Scheduled Tasks)

![](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/cronGroupAdmin.png)

### <a name="Step2E5">Step 2E.5:  Run new cron group cron jobs </a>

After completing the above steps run the below SSH command in your Magento 2 installed root directory to run the Magento 2 specific group of  cron jobs only.


```
php bin/magento cron:run --group="bdc_crongroup"
```
To check whether the cron is working properly, go to Database & run below query.
```
SELECT * FROM `cron_schedule` where `job_code` LIKE "%bdc%"

SELECT * FROM `bdc_simplenews` ORDER BY `id` DESC
```

![](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/cron_cli.png)

![](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/cron_sampleNews.png)


### <a name="Step2E6">Step 2E.6: Cron Job FAQ </a>

#### What is cron Job & Where use in magento 2x?
Cron job is a great feature which is used to do the specific task automatically in exact time and date without manual working. The cron job is the perfect choice to do the repeated action every date or every week.Magento 2 uses cron jobs for,
- Catalog price rules
- Newsletters
- Generating Google sitemaps
- Reindexing
- Automatic updating of currency rates
- All Magento emails (including order confirmation and transactional)
- Customer Alerts and Notifications.
- Private sales (Magento Enterprise Edition only) & more..
In Magento 2, we can create crons easily and it will be listed in the database table (table name: cron_schedule) to process our tasks in scheduled time.
#### Explain ``<schedule>* * * * * </schedule>`` ?

Schedule is the time the cron will run. In this example, it run in each minute.
```
* * * * * *
| | | | | |
| | | | | +-- Year              (range: 1900-3000)
| | | | +---- Day of the Week   (range: 1-7, 1 standing for Monday)
| | | +------ Month of the Year (range: 1-12)
| | +-------- Day of the Month  (range: 1-31)
| +---------- Hour              (range: 0-23)
+------------ Minute            (range: 0-59)
```
- * * * * * : it is the time the script autorun (each 1 minute)
- www-data: it is the user will run this cript
- php /home/eden/public_html/magento2/bin/magento cron:run : the command



## <a name="PartF">Part F : Create  REST WEB API </a>  [Go to Top](#top)

Magento 2 API framework allows developers to create new services for communicating with Magento 2 stores. It supports REST and SOAP web services and is based on CRUD operations (Create, Read, Update, Delete) and a Search Model.
#### What is Magento 2 REST API?
At the moment, Magento 2 uses the following three authentication methods as is described in Magento 2 REST API documentation.
- OAuth 1.0a authentication for third-party applications.
- Tokens to authenticate mobile applications.
- Admins and customers authentication with login credentials.
According to the Magento 2 API documentation, these authentication methods can only access the resources assigned to them. Magento 2 API framework first checks whether the call has appropriate authorization to perform the request. The API framework also supports field filtering of API responses to preserve cellular bandwidth.
Developers use Magento 2 APIs for a wide range of tasks. For instance, you can create a shopping app and integrate it with your Magento 2 store. You can also build a web app which your employee could use to help customers make purchases. With the help of APIs, you can integrate your Magento 2 store with CRMs, ERPs or POS systems.
#### How Using Magento 2 REST API?
Using REST API in Magento 2 is a piece of cake. But for that, you need to understand the flow to call APIs in PHP.
If you want to use token-based Magento 2 REST API, first you will need to authenticate and get the token from Magento 2. Then, you will have to pass it in the header of every request you perform.
To get started with the REST API in Magento 2 using token-based authentication, you will need to create a web service User Role and register that role to a new Magento 2 Admin User. Keep in mind that creating a new role and user is necessary because it’s not a good practice to use Magento Owner User in a web service.
#### Why SOAP for eCommerce?
When it comes to e-Commerce websites, APIs play the big role of reading and writing information from and to the server. Be it a customer’s name or his already saved credit card details, every piece of information shown to the end user has to either read from or written to the web server. This is taken care by REST and SOAP APIs. REST and SOAP are models for web services, however, one that’s most recommend for eCommerce websites. Though REST is fast, efficient and simple, SOAP is standardized, secure and apt for payments.  
#### How Create Web Service Role in Magento 2?
To create a web service role in Magento 2, follow these steps:
- Login to the Magento 2 Admin Panel.
- Go to System >> User Roles and tap the Add New Role
- Enter the Role Name.
- In Your Password field, enter the current password of your Magento 2 Admin.
- Now, on the left side, click Role Resources.
- In the Resource Access, select only those that are required for your web service.
- Once done, hit the Save Role
#### How Create Web Service User in Magento 2?
Now, create a new user for the newly created role through these steps:
- Go to System >> All Users and hit the Add New User
- Enter the required information including User Name, First and Last Name, Email, Password, etc.
- Now, on the left side, click User Role and select the newly created role.
- Once done, click the Save User
#### How Magento 2 REST API Authentication?
As I mentioned earlier, I will authenticate REST API through Token authentication. This means that I will pass a username and password in the initial connection and receive the token . This token will be saved in a variable, which will be passed in the header for further calls.
#### How Get Modules Using REST API in Magento 2?<?php
You can fetch almost everything using Magento 2 REST API. The List of REST APIs for Magento EE and CE is a good guide on this topic.To demonstrate the API, I am going to get all the installed modules on a Magento 2 store. Here is the script:

```
<?php
//API URL for authentication
$apiURL="http://www.magento.lan/rest/V1/news/admin/token";
//parameters passing with URL
$data = array("username" => "apiaccess", "password" => "api@123");
$data_string = json_encode($data);
$ch = curl_init($apiURL);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json","Content-Length: ".strlen($data_string)));
$token = curl_exec($ch);
//decoding generated token and saving it in a variable
$token=  json_decode($token);
//******************************************//
//Using above token into header
$headers = array("Authorization: Bearer ".$token);
//API URL to get all Magento 2 modules
$requestUrl='http://www.magento.lan/rest/V1/news';
$ch = curl_init($requestUrl);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
//decoding result
$result=  json_decode($result);
//printing result
print_r($result);

```

### <a name="Step2F1">Step2F.1: Web API Routes/Configuration – etc/webapi.xml </a>

#### What is Web API?
A Web API is an application programming interface for either a web server or a web browser. It is a web development concept, usually limited to a web application's client-side (including any web frameworks being used), and thus usually does not include web server or browser implementation details such as SAPIs or APIs unless publicly accessible by a remote web application.

#### What are the Magento 2 web APIs Framework?
Supports developers to use web services that communicate with the Magento system. For instance, a developer can create a customer account, product record through web service.  Key features include:
- M2 Support Both REST  & SOAP coverage same.
- 3 types of authentication:
  * 3rd-party applications authenticate with OAuth 1.0a.
  * Mobile applications authenticate using tokens.
  * Administrators & customers authenticated with login credentials.
- All accounts & integrations assigned resources access API framework checks any call authorization to perform request.
- Any Magento or third-party service can be configured as a web API with a few lines of xml. To configure a web API define XML elements & attributes in a webapi.xml.
- Based on CRUD & search model
- Supports field filtering of web API responses to conserve mobile bandwidth
- Integration style web APIs enable a single web API call to run multiple services at once for a more efficient integration.

#### What can I do with the Magento web APIs?

APIs can be used to perform a wide array of tasks ex:

- Create shopping app as traditional user downloads on a mobile device, also  employee uses on a showroom floor to help customers make purchases.
- Integrate with CRM/ERP  backend systems ex. Salesforce/Xero/NetSuite.
- Integrate with CMS
- Create JavaScript widgets in storefront/ Admin panel makes AJAX calls to access services.

#### How do I get started?
Register web service on Magento Admin following general steps to set up  to enable web services.
- If using token-based authentication, create a web services user on Admin by selecting System > Permission > All Users > Add New User. (If session-based or OAuth authentication do not need to create new user in  Admin.)
- To create an integration, click System > Extensions > Integration > Add New Integration**. Be sure to restrict which resources the integration can access.
- Use a REST or SOAP client to configure authentication.

#### Routes & Configuration?
routes are defined in etc/webapi.xml within a module, and although the structure of the definition xml is directed by the requirements of the REST API, the SOAP API uses the same definitions.

The following shows the route configuration for fetching a CMS block, as defined in BDC_SimpleNews::etc/webapi.xml:
```
<routes> <route url="/V1/news" method="GET">
        <service class="BDC\SimpleNews\Api\NewsRepositoryInterface" method="getList"/>
        <resources> <resource ref="anonymous"/> </resources>
    </route>
</routes>
```

#### Implementation News webapi.xml
- Create [app/code/BDC/SimpleNews/etc/webapi.xml](/etc/webapi.xml)  
```
<?xml version="1.0"?>
<routes>
    <route url="/V1/news" method="GET">
        <service class="BDC\SimpleNews\Api\NewsRepositoryInterface" method="getList"/>
        <resources> <resource ref="anonymous"/> </resources>
    </route>
</routes>
```
In the route tag the url attribute defines the route as /V1/cmsBlock/:blockId where the :blockId part represents an id parameter to be supplied. The method attribute defines the HTTP verb the route uses as ‘GET’ (other available verbs are PUT, POST and DELETE).

In the service tag the class attribute associates the service contract Magento\Cms\Api\BlockRepositoryInterface with the route, and the method attribute defines the method to call upon the object provided by the service contract.

### <a name="Step2F2">Step2F.2: Define Interface – etc/di.xml   </a>

#### What is repository?
Repositories give service requestors the ability to perform create, read, update, and delete (CRUD) operations on entities or a list of entities. A repository is an example of a service contract, and its implementation is part of the domain layer.

Repositories are service contracts which are interface classes & helps to hide business logic from controller,model & helper,  defined repository file which is an interface class & model file in which  define  methods declared in repository class.To create  module’s repository, firstly  have to define it in di.xml file at path:
app/code/BDC/SimpleNews/etc/di.xml




#### Implementation
Edit/Create [app/code/BDC/SimpleNews/etc/di.xml](etc/di.xml) and insert this following code into it:

```
<preference type="BDC\SimpleNews\Model\News" for="BDC\SimpleNews\Api\Data\NewsInterface"/>
<preference type="BDC\SimpleNews\Model\NewsRepository" for="BDC\SimpleNews\Api\NewsRepositoryInterface"/>

```
  Final file look like as below:

```
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:ObjectManager/etc/config.xsd">
   <type name="Magento\Framework\Console\CommandList">
       <arguments>
           <argument name="commands" xsi:type="array">
             <item name="bdc_simplenews_create" xsi:type="object">BDC\SimpleNews\Console\Command\NewsCreate</item>
           </argument>
       </arguments>
   </type>
  <preference type="BDC\SimpleNews\Model\News" for="BDC\SimpleNews\Api\Data\NewsInterface"/>
  <preference type="BDC\SimpleNews\Model\NewsRepository" for="BDC\SimpleNews\Api\NewsRepositoryInterface"/>

</config>

```

### <a name="Step2F3">Step2F.3:Declare API Interface – Api/NewsRepositoryInterface.php </a>

#### What is Repository Interface?
An interface defines the repository with all logical read and write operations for a specific entity. You can see an example of such a repository interface in the diagram. The interface gets implemented by one or more classes that provide data store specific implementations of each interface method
Now, we need to create an interface and model, please note that you need to take care of the comments as well.

#### What is Repository Interface magento 2?

Repositories are service contracts which are interface classes & helps to hide your business logic from controller,model and helper.

#### How many Interface types and locations?

A service contract must define data interfaces, which preserve data integrity, and service interfaces, which hide business logic from service requestors.

- Data interfaces: define functions that return information about data entities, return search results, and set validation rules and return validation results. You must define the data interfaces for a service contract in the Api/Data subdirectory for a module.

- Service interfaces: include management, repository, and metadata interfaces. You must define the service interfaces for a service contract in the Api subdirectory for a module.


#### Implementation
Create [app/code/BDC/SimpleNews/Api/NewsRepositoryInterface.php](Api/NewsRepositoryInterface.php)
```
<?php

namespace BDC\SimpleNews\Api;

interface NewsRepositoryInterface {
    /**
     * @return \BDC\SimpleNews\Api\Data\NewsInterface[]
     */
    public function getList();
}

```


### <a name="Step2F4">Step2F.4:Data Interface – Api/Data/NewsInterface.php    </a>

#### What is Interface class PHP?
An interface allows unrelated classes to implement the same set of methods, regardless of their positions in the class inheritance hierarchy. An interface enables you to model multiple inheritance because a class can implement more than one interface whereas it can extend only one class.

#### What is Data interfaces in Magento 2 ?

Define data interfaces in the Api/Data subdirectory for a module.Ex. data interfaces for the Customer module are in the /app/code/Magento/Customer/Api/Data subdirectory.

Now, we need to create an interface and model, please note that you need to take care of the comments as well.
Create [app/code/BDC/SimpleNews/Api/Data/NewsInterface.php](Api/Data/NewsInterface.php) & insert this following code into it:

```
<?php

namespace BDC\SimpleNews\Api\Data;

interface NewsInterface {
    /**
     * @return string
     */
    public function getTitle();

    /**
     * @return string|null
     */
    public function getSummary();

    /**
     * @return string|null
     */
    public function getDescription();
}

```
### <a name="Step2F5">Step2F.5: Create Model – Model/NewsRepository.php  </a>

#### What task done by Model NewsRepository?

Get Collection in  means showing the items in your store when  run the command. With the code snippet in this topic, request the specific number of the news as you need. Let’s start calling the news in  Magento 2  now!

#### Implementation
Create [app/code/BDC/SimpleNews/Model/NewsRepository.php](Model/NewsRepository.php) & insert this following code into it:
```
<?php
namespace BDC\SimpleNews\Model;

use BDC\SimpleNews\Api\NewsRepositoryInterface;
use BDC\SimpleNews\Model\Resource\News\CollectionFactory;

class NewsRepository implements NewsRepositoryInterface {
    private $collectionFactory;
    public function __construct(CollectionFactory $collectionFactory){
        $this->collectionFactory = $collectionFactory;
    }
    public function getList() {
        return $this->collectionFactory->create()->getItems();
    }
}

```

### <a name="Step2F6">Step2F.6: Communicating with new API call  </a>

#### Accessing routes
As mentioned above, the configuration is conveniently used by both the REST and SOAP APIs. However, the means of accessing resources differs quite a lot.The full REST resource URL is the easiest to determine as it just needs prefixing with ‘http://www.yourdomain.com/rest/’, so in the example above, assuming the news needed has an entity id of 1, the resource url would be ‘http://www.yourdomain.com/rest/V1/news/1’.

Testing as guest:
To test REST you can go to http://{domain_name}/rest/V1/{method}/{attribute}/{value}.

Example: http://magento2.loc/rest/V1/hello/name/Matin.

This is how response should look like for this example:

http://www.magento.lan/rest/V1/news


![](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/webapi_restV1News.png)


Here is small code that will test same API call but with SOAP(Not implements):
```
<?php
$proxy = new SoapClient('http://www.magento.lan/index.php/soap/default?wsdl&services=/V1/news');
$result = $proxy->bdcSimpleNewsV1();
var_dump($result);
```
Response for SOAP
```
object(stdClass)#2 (1) {
  ["result"]=>
  string(10) "..."
}
```



### <a name="Step2F7">Step2F.7: Adding ACL Web API  </a>


If we don’t set anonymous in resource of webapi.xml, we need to set existing Magento resource or create our own. We can do that by adding acl.xml to etc.

ACL – etc/acl.xml

```
<resource id="Magento_Backend::admin">
 <resource id="BDC_SimpleNews::news" title="News API" translate="title" sortOrder="110" />
</resource>
```
In this case we need to add BDC_SimpleNews::news to webapi.xml resource instead anonymous.



## <a name="PartG">PartG:Dependency Injection configuration </a> [Go to Top](#top)

#### What is Dependency injection Magento 2?

Magento 2 Dependency injection is used to replace the Magento 1.x Mage class when you convert to work with Magento 2. The Dependency injection design pattern creates an external environment where you can inject dependencies into an object. Thanks to that, there is no longer to create the objects manually. Namely, as when object A calls object or value B, this means B is a dependency of A.

#### What is Dependency Inversion Principle Magento 2?
If you are working with Magento 2 Dependency Injection, you should take look at Magento 2 Dependency Inversion Principle because this principle will restrict the direct working between the high level and low level classes. At that time, the interaction will implement via an interface of the low level classes as an abstract layer.

Specifically, the di.xml file takes responsibility for mapping an interface dependency to a preferred implementation class. It can be said that with Magento 2 Dependency Inversion Principle, the dependency of the coding will be reduced significantly due to the abstract layer.

- Object manager - Dependency Injection Container
Object Manager is called as Dependency Injection Container, Magento 2 service class which contains and handle the dependencies between the objects. During the class construction, the object manager injects the appropriate dependency as defined in the di.xml file.

- Constructor signature dependencies
In Magento 2, the class definition use constructor signature to get information (type and number of dependencies).

- Compiling dependencies
All information related to Magento 2 Dependency Injection are collected in a class and saved in files by a code complier tool. And then the ObjectManager will get this information to generate concrete objects in the application.

#### Explain  Injection types used in Magento 2?

Magento 2 Dependency Injection includes two types: Constructor Injection and Method Injection. You can see the following code snippet to learn more about both of them.

- Constructor injection
As the above example, $menuItemFactory and $menu are the dependencies that will be added to an object’s class through the constructor injection. Besides, remember that the constructor injection is required to declare all optional and required of an object.

- Method injection
About Method Injection, you will use it when an object makes clear a dependency in one of its methods. As if tracking in the referred instance, $command is the dependency passed into the class through the processCommand method.

- Groups of Object
In Magento 2, the object is divided into two groups: injectable and non-injectable (newable) objects. What are they?

- Injectable Objects
About the injectable Objects, you can call as services or objects which will show the dependencies in their constructors and are created by the object manager via the configuration in the di.xml file. And you can use these injectable objects to request other injectable services in the constructors.

- Non-injectable Objects
Non-injectable (Newable) Objects are a bit similar to the injectable objects when they also expose the dependencies in their constructors, however, the newables are allowed to request other newables objects like Entities, Value Objects. In addition, you cannot demand the newable objects for keeping a reference to an injectable object.

This is the detialed information related to Magento 2 Dependency Injection design pattern. Wish you have a great time with it!


#### How to Override core code  in Magento 2?
  By default, there are three different ways to override core functionalities.
  1. Using preference
  2. Using event\observer
  3. Using a plugin

#### Define Preference,Arguments, Virtual Types, Plugins ,Observers?

- Preference:  One class over another, which allows you to specify which class/type is selected by Magento’s object manager.This means that you can override which method you want from the class, along with the methods that this class extends.
- Arguments:
- Virtual Types: way to inject different dependencies into existing classes without affecting other classes.
- Plugins:
- Observers:

### <a name="Step2G1">Step2G1:DI Preference,Arguments & Virtual Types Implements  </a>

  We write  log after news item save .

- Edit [Helper/News.php](Helper/News.php) look like:

  <details><summary>Source</summary>

      ```
      <?php
      namespace BDC\SimpleNews\Helper;

      use \Magento\Framework\App\Helper\Context;
      use \Magento\Store\Model\StoreManagerInterface;
      use \Magento\Framework\App\State;
      use \BDC\SimpleNews\Model\NewsFactory;
      use \Symfony\Component\Console\Input\Input;
      use \Psr\Log\LoggerInterface;


      class News extends \Magento\Framework\App\Helper\AbstractHelper {
          const KEY_TITLE = 'news-title';
          const KEY_SUMMARY = 'news-summary';
          const KEY_DESC = 'news-description';

          protected $storeManager;
          protected $state;
          protected $newsFactory;
          protected $data;
          protected $newsId;
          protected $logger;


          public function __construct(
              Context $context,
              StoreManagerInterface $storeManager,
              State $state,
              NewsFactory $newsFactory,
              LoggerInterface $logger ) {
                  $this->storeManager = $storeManager;
                  $this->state = $state;
                  $this->logger = $logger;

                  $this->newsFactory = $newsFactory;

              parent::__construct($context);
          }

          public function setData(Input $input){
              $this->data = $input;
              return $this;
          }

          public function execute() {
              $this->state->setAreaCode('frontend');
              $news = $this->newsFactory->create();
              $news->setTitle($this->data->getOption(self::KEY_TITLE))
                  ->setSummary($this->data->getOption(self::KEY_SUMMARY))
                  ->setDescription($this->data->getOption(self::KEY_DESC));
              $news->save();
              $this->logger->debug('DI: '.$news->getTitle());

          }

          public function getNewsId(){
              return (int)$this->newsId;
          }
      }

      ```
  </details>

- Create [Helper/BdcDebug.php](Helper/BdcDebug.php) Insert :

  <details><summary>Source</summary>

      ```
      <?php
      namespace BDC\SimpleNews\Helper;

      use Monolog\Logger;
      use Magento\Framework\Logger\Handler\Base;

      class BdcDebug extends Base{
          /**
           * @var string
           */
          protected $fileName = '/var/log/bdc_debug.log';

          /**
           * @var int
           */
          protected $loggerType = Logger::DEBUG;
      }

      ```
  </details>

#### What is the difference between Preference and Plugin?

  Although both of them are used for overriding the core modules, the way to use them is completely different.

  With Preference, it must extend a core class. Preference can rewrite function. When you declare a Preference, your new class is expected to be a complete implementation of the class you want to override.

  While a plugin allows you to execute your functions before, after or around (before & after) the core function is executed. It's NOT really rewritten function like Preference.

  Since your plugin class doesn’t replace the core class, in case there are many plugins hooked onto a target class, Magento 2 just executes them sequentially based on the sortOrder parameter in your file di.xml.  

### <a name="Step2G1a">Step2G1a: Preference:  which override all DEBUG log</a>

#### Preference
Class preferences basically do the same thing in Magento 2 that rewrites did in Magento 1. It states a preference for one class over another, which allows you to specify which class/type is selected by Magento’s object manager.
This means that you can override which method you want from the class, along with the methods that this class extends.

#### Using class preference I am going to rewrite:
    - Model class
    - Block Class
    - Controller Class

app/code/BDC/SimpleNews/etc/di.xml add below code  :
```
<preference type="BDC\SimpleNews\Helper\BdcDebug" for="Magento\Framework\Logger\Handler\Debug"/>
```
### <a name="Step2G1b">Step2G1b: Arguments Preference: which override specific class Monolog </a>

#### Arguments Preference ?

Argument types:object
Node Formats: <argument xsi:type="object">{typeName}</argument>

<argument xsi:type="object" shared="{shared}">{typeName}</argument>


- Creates an instance of typeName type and passes it in as an argument. You can pass any class name, interface name, or virtual type as typeName.

```
<type name="Magento\Framework\Logger\Monolog">
    <arguments>
        <argument name="handlers"  xsi:type="array">
            <item name="debug" xsi:type="object">BDC\SimpleNews\Helper\BdcDebug</item>
        </argument>
    </arguments>
</type>
```

### <a name="Step2G1c">Step2G1c: VirtualType: which override specific class only work specific module </a>


#### What are Virtual Types?

Within Magento 2, classes can depend on each other using constructor-based Dependency Injection. And instead of only allowing static dependencies (class A injects class B), Magento offers a configuration system that allows one dependency to be replaced with another (class B is swapped out for class C). One of these configurations is Virtual Types.

Virtual Types are defined in a file di.xml which might be located in numerous places - for instance, the etc/ folder of your own module. Virtual Types are in essence new PHP classes (but actually they are not, they are just links), that extend upon their original class while overriding the original class its constructor arguments by adding those in the di.xml file.

#### What are Virtual Types?
Within Magento 2, classes can depend on each other using constructor-based Dependency Injection. And instead of only allowing static dependencies (class A injects class B), Magento offers a configuration system that allows one dependency to be replaced with another (class B is swapped out for class C). One of these configurations is Virtual Types.

Virtual Types are defined in a file di.xml which might be located in numerous places - for instance, the etc/ folder of your own module. Virtual Types are in essence new PHP classes (but actually they are not, they are just links), that extend upon their original class while overriding the original class its constructor arguments by adding those in the di.xml file.

#### Create a new PHP child class or a Virtual Type?
Once you realize that a Virtual Types is nothing more than a new PHP child object (as if there was an actual class generating it), it makes you wonder why you should do this through XML. Maybe it is easier to simply create a new PHP class in your module and modify things there? The end result is the same: There is a new object of a new type. (Note that this new class still needs to be used somewhere else to become useful. Typically this is done by using an XML Type to modify the constructor arguments of yet another class and inject this new virtual class in it.)

I personally favour new PHP classes over new Virtual Types. However, once the original class has a lengthy constructor, a new PHP class would require you to duplicate all parent dependencies in its own constructor and pass them on to its parent - and perhaps all of that trouble is only needed for replacing one of those dependencies. A Virtual Type is quicker: It requires some XML, yes, but it allows you to single out only that dependency that you actually need to be replaced. The more complex the original constructor, the better it is to use a Virtual Type. (That being said, the more complex the original constructor, the more this original constructor needs to be cleaned up - with references to SOLID.)

####  Virtual Types with namespaces?

Now let's go to the main point of this blog: Virtual Types are identical to PHP classes created on the fly by the Object Manager. And just like all PHP classes, we have specific rules to stick to and namespacing is one of them. So why not use namespaces?

Let's take a dummy example without namespaces:
```
<virtualType name="bdcVirtualSomeClass" type="BDC\Example\Some\Class">
</virtualType>
```

And now let's see a namespaced version:
```
<virtualType name="BDC\Example\Some\Class\Virtual" type="BDC\Example\Some\Class">
</virtualType>
```

To me, the namespaced version looks a lot cleaner. Remember that defining this Virtual Type is only half of the story - if you don't intend to use it elsewhere, it just as well can be removed again. It only becomes useful once it is applied elsewhere, for instance using a Type:

```
<type name="Magento\Framework\Some\Existing\Class">
    <arguments>
        <argument name="someDep" xsi:type="object">BDC\Example\Some\Class\Virtual</argument>
    </arguments>
</type>
```
Once others start debugging the class Magento\Framework\Some\Existing\Class, they might bump into the someDep argument and now, thanks to namespaces, the name of this Virtual Type identifies exactly who put that dependency there. This is why we have namespaces.

####  Namespace with Virtual in it?

However, this might also become confusing if the Virtual Type actually looks too similar to a PHP class. I always tend to click through my PhpStorm environment with the generated/ folder excluded from my project. Once in a while, I bump into a class that is not there. And if Magento does not die at that moment, I assume it is something that is generated. Once the class has the word Factory or Proxy in it, this confirms my assumption. Wouldn't it make sense to also include the word Virtual in the namespaced name of a Virtual Type?

This leads to the following classes that would suggest that the PHP class actually is a VirtualType:
```
BDC\Example\Some\Class\Virtual
BDC\Example\Virtual\Some\Class
BDC\Example\Some\ClassVirtual
BDC\Example\VirtualType\Some\Class
BDC\Example\Some\Class\VirtualType
```
Obviously, there are many more variations. But just make sure to add the word Virtual in there.

#### In this Module We Implemented as

```
<virtualType name="bdcLogger" type="Magento\Framework\Logger\Monolog">
    <arguments>
        <argument name="handlers"  xsi:type="array">
            <item name="debug" xsi:type="object">BDC\SimpleNews\Helper\BdcDebug</item>
        </argument>
    </arguments>
</virtualType>
<type name="BDC\SimpleNews\Helper\News">
     <arguments>  <argument name="logger" xsi:type="object">bdcLogger</argument> </arguments>
 </type>
```
- Finaly [etc/di.xml](etc/di.xml) look like ;
  <details><summary>Source</summary>

      ```
      <?xml version="1.0"?>
      <config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:ObjectManager/etc/config.xsd">
         <type name="Magento\Framework\Console\CommandList">
             <arguments>
                 <argument name="commands" xsi:type="array">
                   <item name="bdc_simplenews_create" xsi:type="object">BDC\SimpleNews\Console\Command\NewsCreate</item>
                 </argument>
             </arguments>
         </type>
        <preference type="BDC\SimpleNews\Model\News" for="BDC\SimpleNews\Api\Data\NewsInterface"/>
        <preference type="BDC\SimpleNews\Model\NewsRepository" for="BDC\SimpleNews\Api\NewsRepositoryInterface"/>
        <!-- <preference type="BDC\SimpleNews\Helper\BdcDebug" for="Magento\Framework\Logger\Handler\Debug"/> -->

        <!-- <type name="Magento\Framework\Logger\Monolog">
            <arguments>
                <argument name="handlers"  xsi:type="array">
                    <item name="debug" xsi:type="object">BDC\SimpleNews\Helper\BdcDebug</item>
                </argument>
            </arguments>
        </type> -->

        <virtualType name="bdcLogger" type="Magento\Framework\Logger\Monolog">
            <arguments>
                <argument name="handlers"  xsi:type="array">
                    <item name="debug" xsi:type="object">BDC\SimpleNews\Helper\BdcDebug</item>
                </argument>
            </arguments>
        </virtualType>
        <type name="BDC\SimpleNews\Helper\News">
             <arguments>  <argument name="logger" xsi:type="object">bdcLogger</argument> </arguments>
         </type>
      </config>
      ```
    </details>

- Run

```
php bin/magento cache:flush
php bin/magento bdcrops:news:create --news-title="News preference" --news-summary="summary preference 1" --news-description="News preference Description 1"

```
Now  check var/log/bdc_debug.log  all log are write there

![](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/bdc_debug.png)

### <a name="Step2G2">Step2G2:DI Events & Observer Implements</a>

[devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/events-and-observers.html)

#### Magento 2 Events
Events are dispatched by Magento modules on the trigger of a specific action. Not only that, Magento also allows you to also create your own custom event that can be dispatched in your code. When the action is triggered, it will pass data to the relevant observer configured for the dispatched event.
Magento 2 events can be dispatched using Magento\Framework\Event\Manager class and it can be obtained through the dependency injection by defining the dependency in your constructor.

#### Magento 2 Observers
Observers are used to catch the action which was triggered from events. In observers, you can set the required functionality or logic that is to be executed in response.

Magento 2 observers can be created by lacing your class file under the Module-Root/Observer directory. Your observer class should implement the following;

Magento\Framework\Event\ObserverInterface and define its execution function.

Now let’s start with the execution!

Let’s assume that you want to change the background color of your store if the customer is not logged in.

#### What is observers in Magento 2?

Working with Magento 2 observers is one of many different ways of extending the core functionality of a Magento 2 powered eCommerce store. Thanks to Observers, you can run your custom codes in response to a specific Magento event or even with a custom event.
You can choose other options such as extending and overriding the core modules, copying the core class to the local directory and put it in the same directory path it was in core directory and modify the core class directly. However, creating an observer is the number one choice

#### How observers work
Observers are used for catching the action which was triggered before or after events. In observers, you can set the required functionality or logic that is to be executed in response.

Magento 2 observers can be created by lacing your class file under the Module-Root/Observer directory. Your observer class should implement the following:
Magento\Framework\Event\ObserverInterface and define its execution function.

#### How to use observers
Make sure you have registered the new module to test it before, we will practice on this module.
I will use my module SampleEvent. And then, I will use an observer to customize the product name on the product view page.
#### Some practices when using observer Magento 2:

- Make your observer efficient: You should try to keep your observer small and efficient by avoiding complex computations if you can. Because having complex computations in your observer can slow down application processes.

- Don’t include business logic: Your observer should not contain logic other than what is needed for it to run. Business logic should be encapsulated in other classes that your observer uses.

- Declare observer in the appropriate scope:

+ For the frontend events, declare observers in etc/frontend/events.xml, this event will be only used in the frontend. You can't use this event in the backend.

+ For the backend events, declare observers in etc/adminhtml/events.xml, this event will be only used in the backend. This event can't be used in the frontend.

+ Use the global etc/events.xml file only when an event can occur on both the frontend and the backend.

+ You can put events.xml in etc > webapi_rest > events.xml while handling Rest API request.

+ You can put events.xml in etc > webapi_soap > events.xml while handling Soap API request.

+ You can put events.xml in etc > crontab > events.xml while handling scheduled jobs only.

+ You can put events.xml in etc > setup > events.xml while Magento or extensions are being installed or upgraded.

#### Some perfect events in Magento 2:

- Events in Magento controller:

+ controller_action_predispatch - executes before each controller dispatching.

+ controller_action_postdispatch_{full_action_name} - executes after a controller with specific  {full_action_name}.

+ controller_action_postdispatch_{route_name} - executes after each controller with specific {route_name}.

+ controller_action_postdispatch - executes after each controller dispatching.



- Edit [Helper/News.php](Helper/News.php):
  <details><summary>Source</summary>

    ```
    <?php
    namespace BDC\SimpleNews\Helper;

    use \Magento\Framework\App\Helper\Context;
    use \Magento\Store\Model\StoreManagerInterface;
    use \Magento\Framework\App\State;
    use \BDC\SimpleNews\Model\NewsFactory;
    use \Symfony\Component\Console\Input\Input;
    use \Psr\Log\LoggerInterface;
    use \Magento\Framework\Event\ManagerInterface;

    class News extends \Magento\Framework\App\Helper\AbstractHelper {
        const KEY_TITLE = 'news-title';
        const KEY_SUMMARY = 'news-summary';
        const KEY_DESC = 'news-description';

        protected $storeManager;
        protected $state;
        protected $newsFactory;
        protected $data;
        protected $newsId;
        protected $logger;
        protected $eventManager;
        // $eventManager


        public function __construct(
            Context $context,
            StoreManagerInterface $storeManager,
            State $state,
            NewsFactory $newsFactory,
            LoggerInterface $logger,
            ManagerInterface $eventManager) {
                $this->storeManager = $storeManager;
                $this->state = $state;
                $this->logger = $logger;
                $this->eventManager = $eventManager;
                $this->newsFactory = $newsFactory;

            parent::__construct($context);
        }

        public function setData(Input $input){
            $this->data = $input;
            return $this;
        }

        public function execute() {
            $this->state->setAreaCode('frontend');
            $news = $this->newsFactory->create();
            $news->setTitle($this->data->getOption(self::KEY_TITLE))
                ->setSummary($this->data->getOption(self::KEY_SUMMARY))
                ->setDescription($this->data->getOption(self::KEY_DESC));
            $news->save();
            $this->logger->debug('DI: '.$news->getTitle());
            // EventCode...
            $this->eventManager->dispatch('bdc_simplenews_save_after', ['object' => $news]);
            $this->newsId = $news->getId();

            // if($this->data->getOption(self::KEY_SENDEMAIL)) {
            //     $news->sendNewAccountEmail();
            // }
        }

        public function getNewsId(){
            return (int)$this->newsId;
        }
    }
    ```
  </details>

#### AbstractModel Event:

Usually, models extend the Magento\Framework\Model\AbstractModel class. It gives an ability to observe a predefined set of model events. And the model should have AbstractModel::_ eventPrefix attribute specified for observing events of a specific model. The attribute's value equals to "core_abstract" by default.

Also, in models we have AbstractModel::_ eventObject attribute that gives an ability to specify a name of the current model’s instance for different model-specific events.

A list of the global models events:

- model_load_before - executes before each model is loader. Here we can get an access to the following event’s data.

- $observer->getField() - gets currently processed model’s field name.

- $observer->getValue() - gets currently processed model’s field value.

- model_load_after - executes after each model loading.

- model_save_after - executes after each model saving.

- model_save_before - executes before each model saving.

- clean_cache_by_tags - executes after model related cache tags are cleaned.

- model_delete_before - executes before model is deleted.

- model_delete_after - executes after model is deleted.

- model_save_commit_after - executes after the models saving transaction is committed.

- model_delete_commit_after - executes after the models saving transaction commit is deleted.

In this mentioned events, we can get an access to the following data:

$observer->getObject()

List model-specific events:

- {event_prefix}_load_before – executes before model with {event_prefix} is loaded.

- {event_prefix}_load_after – executes after model with {event_prefix} is loaded.

- {event_prefix}_save_before – executes before model with {event_prefix} is saved.

- {event_prefix}_save_after – executes after model with {event_prefix} is saved.

- {event_prefix}_delete_before – executes before model with {event_prefix} is deleted.

- {event_prefix}_delete_after – executes after model with {event_prefix} is deleted.

- {event_prefix}_save_commit_after – executes after model’s data with {event_prefix} is committed.

- {event_prefix}_delete_commit_after – executes after model’s data commit with {event_prefix} is deleted.

- {event_prefix}_clear – executes when a model object is being prepared for correct deleting by the garbage collector.

Furthermore, we can get an access to the following event data from each of them:

- $observer->getDataObject() – gets the current model reference.

- $observer->get{event_object} – gets an event object for the current model.

If you want to find an event in code, you can do this.

Example: You need an event save_before or save after.

- Create an event observer to hook in the event [model prefix]_ save_before. In here we will have observer variable, this variable could get the Model of model which we need to save data on it.

- And then we can use setData(‘column_name’,[new value]) to adjust the data of a column before saving to the database.

So why can we do that?

What is Model Prefix: in object Model, we have a property, this is protected $_ eventPrefix; (You can see in the model, if you don’t have it, you can create it). It’s is a string type. Getting the value and join it with _ save_before, we will have an event name.

EG: protected $ _ eventPrefix = 'abc'; => Event Observer = 'abc_save_before'.

You can declare another event:

- [prefix]_ load_before

- [prefix]_ save_after

- [prefix]_ load_after

These events are default and always available with a model, If you want to use a custom event, you can use eventManager->dispatch(‘event_name’,$data);



- OR [Model/News.php](Model/News.php) just add protected $_ eventPrefix = 'bdc_simplenews';
  This event eventPrefix is used by abstract model to generate events automatically.Finaly script look like below:
  <details><summary>Source</summary>

      ```
      <?php

      // These files to insert, update, delete and get data in the database.

      namespace BDC\SimpleNews\Model;

      use Magento\Framework\Model\AbstractModel;

      class News extends AbstractModel{
        protected $_eventPrefix = 'bdc_simplenews';
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
          public function _construct() {
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
  </details>

- Create [Observer/Logger.php](Observer/Logger.php)
  <details><summary>Source</summary>

    ```
    <?php

    namespace BDC\SimpleNews\Observer;

    use Magento\Framework\Event\Observer;
    use Magento\Framework\Event\ObserverInterface;
    use Psr\Log\LoggerInterface;

    class Logger implements ObserverInterface {
        private $logger;

        public function __construct(LoggerInterface $logger){
            $this->logger = $logger;
        }
        public function execute(Observer $observer){
            $this->logger->debug("Observer:".
                $observer->getEvent()->getObject()->getTitle()
            );
        }
    }

    ```
  </details>

- create [etc/events.xml](etc/events.xml)
  <details><summary>Source</summary>

    ```
    <?xml version="1.0"?>
    <config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:Event/etc/events.xsd">
        <event name="bdc_simplenews_save_after">
            <observer name="bdcLogger" instance="BDC\SimpleNews\Observer\Logger" />
        </event>
    </config>
    ```
  </details>


#### Note: Explain observer  node defines the observer itself and its attributes?
    - name – the observer registration name (it is important that the names do not coincide);
    - instance – the class, which method will be executed when a specific even occurs;
    - method – the method being executed.


- add [etc/di.xml](etc/di.xml)
  <details><summary>Source</summary>

    ```
    <type name="BDC\SimpleNews\Observer\Logger">
         <arguments>  <argument name="logger" xsi:type="object">bdcLogger</argument> </arguments>
     </type>
    ```
  </details>
- Finally [etc/di.xml](etc/di.xml) look like:
  <details><summary>Source</summary>

    ```
    <?xml version="1.0"?>
    <config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:ObjectManager/etc/config.xsd">
       <type name="Magento\Framework\Console\CommandList">
           <arguments>
               <argument name="commands" xsi:type="array">
                 <item name="bdc_simplenews_create" xsi:type="object">BDC\SimpleNews\Console\Command\NewsCreate</item>
               </argument>
           </arguments>
       </type>
      <preference type="BDC\SimpleNews\Model\News" for="BDC\SimpleNews\Api\Data\NewsInterface"/>
      <preference type="BDC\SimpleNews\Model\NewsRepository" for="BDC\SimpleNews\Api\NewsRepositoryInterface"/>
      <!-- <preference type="BDC\SimpleNews\Helper\BdcDebug" for="Magento\Framework\Logger\Handler\Debug"/> -->

      <!-- <type name="Magento\Framework\Logger\Monolog">
          <arguments>
              <argument name="handlers"  xsi:type="array">
                  <item name="debug" xsi:type="object">BDC\SimpleNews\Helper\BdcDebug</item>
              </argument>
          </arguments>
      </type> -->

      <virtualType name="bdcLogger" type="Magento\Framework\Logger\Monolog">
          <arguments>
              <argument name="handlers"  xsi:type="array">
                  <item name="debug" xsi:type="object">BDC\SimpleNews\Helper\BdcDebug</item>
              </argument>
          </arguments>
      </virtualType>
      <type name="BDC\SimpleNews\Helper\News">
           <arguments>  <argument name="logger" xsi:type="object">bdcLogger</argument> </arguments>
       </type>

       <type name="BDC\SimpleNews\Observer\Logger">
            <arguments>  <argument name="logger" xsi:type="object">bdcLogger</argument> </arguments>
        </type>

    </config>
    ```
  </details>

- Run

```
php bin/magento cache:flush
php bin/magento bdcrops:news:create --news-title="News Observer" --news-summary="summary Observer 1" --news-description="News Observer Description 1"

```
Now  check var/log/bdc_debug.log  all log are write there

![](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/bdc_debug.png)

### <a name="Step2G3">Step2G3: DI Plugins (Interceptors) </a>


#### Whate is Plugins?
A plugin is a great way to expand or edit a public method’s behavior by using code before, after or around method. First of all, please get an object that provides permission to all public methods of the observed method’s class.
Interception is a software design pattern that is used when we want to insert code dynamically without necessarily changing the original class behavior. The interception pattern in Magento 2 is implemented via plugins.
Plugins are an amazing tool in Magento 2. They allow you to change the behavior of methods for classes without having to rewrite the classes as we did above.
There are 3 different ways to use a plugin to change method behavior. You may have heard them on Sesame Street:
    - Before
    - After
    - Around


#### Limitations: Plugins can not be used on following:
- Final methods
- Final classes
- Non-public methods
- Class methods (such as static methods)
- __ construct
- Virtual types
- Objects that are instantiated before Magento\Framework\Interception is bootstrapped

#### Declaring a plugin
 di.xml file in your module declares a plugin for a class object:
```
<config>
    <type name="{ObservedType}">
      <plugin name="{pluginName}" type="{PluginClassName}" sortOrder="1" disabled="false" />
    </type>
</config>
```

#### Explain Plugin element attributes assigned in declaration ?

- type name: A class or interface which the plugin observes.
- plugin name: An arbitrary plugin name that identifies a plugin. Also used to merge the configurations for the plugin.
- plugin type:  name of a plugin’s class or its virtual type. Use the following naming convention when you specify this element: \Vendor\Module\Plugin\<ClassName>.
Under the type element, we define one or more plugins using the plugin element.

More Details :
- name – Using this attribute, you can provide a unique and recognizable name value that is specific to the plugin.

- sortOrder – This attribute determines the order of execution when multiple plugins are observing the same method.

- disabled – The default value of this attribute is set to false, but if it is set to true, it will disable the current plugin, and it will not get executed.

- type – This attribute points to the class that we will be using to implement the before, after or around the listener.

Assuming we are writing a plugin for a specific method, let’s choose a random method under Customer.php class, the getName() method.
We define the before, after and around listeners for the getName() method by writing the naming conventions as follows.

Before + getName() => beforeGetName();
After + getName()  => afterGetName();
Around + getName() => aroundGetName();


#### The following elements are optional:

- plugin sortOrder: Plugins that call the same method run them using this order.
- plugin disabled:  To disable a plugin, set this element to true. The default value is false.

#### 3 methods in Plugin:
- 1. before - beforeDispatch()
- 2. around - aroundDispatch()
- 3. after - afterDispatch()

#### Plugin Implementation:

- create [Plugin/Logger.php](Plugin/Logger.php)
  <details><summary>Source</summary>

      ```
      <?php
      namespace BDC\SimpleNews\Plugin;
      use BDC\SimpleNews\Console\Command\NewsCreate;
      use Symfony\Component\Console\Input\InputInterface;
      use Symfony\Component\Console\Output\OutputInterface;

      class Logger{
          /**
           * @var OutputInterface
           */
          private $output;
          public function beforeRun(
              NewsCreate $command,
              InputInterface $input,
              OutputInterface $output) {
                  $output->writeln('beforeExecute');
          }
          public function aroundRun(
              NewsCreate $command,
              \Closure $proceed,
              InputInterface $input,
              OutputInterface $output) {
                  $output->writeln('aroundExecute before call');
                  $proceed->call($command, $input, $output);
                  $output->writeln('aroundExecute after call');
                  $this->output = $output;
          }

          //public function afterRun(NewsCreate $command){
              //$this->output->writeln('afterExecute');
          //}
      }

      ```
  <details>

- add code app/code/BDC/SimpleNews/etc/di.xml
```
<type name="BDC\SimpleNews\Console\Command\NewsCreate">
        <plugin name="bdcLoggerp" type="BDC\SimpleNews\Plugin\Logger"/>
    </type>
```
- Finally [etc/di.xml](etc/di.xml) look like:

  <details><summary>Source</summary>
      ```
      <?xml version="1.0"?>
      <config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:ObjectManager/etc/config.xsd">
         <type name="Magento\Framework\Console\CommandList">
             <arguments>
                 <argument name="commands" xsi:type="array">
                   <item name="bdc_simplenews_create" xsi:type="object">BDC\SimpleNews\Console\Command\NewsCreate</item>
                 </argument>
             </arguments>
         </type>
        <preference type="BDC\SimpleNews\Model\News" for="BDC\SimpleNews\Api\Data\NewsInterface"/>
        <preference type="BDC\SimpleNews\Model\NewsRepository" for="BDC\SimpleNews\Api\NewsRepositoryInterface"/>
        <!-- <preference type="BDC\SimpleNews\Helper\BdcDebug" for="Magento\Framework\Logger\Handler\Debug"/> -->

        <!-- <type name="Magento\Framework\Logger\Monolog">
            <arguments>
                <argument name="handlers"  xsi:type="array">
                    <item name="debug" xsi:type="object">BDC\SimpleNews\Helper\BdcDebug</item>
                </argument>
            </arguments>
        </type> -->

        <virtualType name="bdcLogger" type="Magento\Framework\Logger\Monolog">
            <arguments>
                <argument name="handlers"  xsi:type="array">
                    <item name="debug" xsi:type="object">BDC\SimpleNews\Helper\BdcDebug</item>
                </argument>
            </arguments>
        </virtualType>
        <type name="BDC\SimpleNews\Helper\News">
             <arguments>  <argument name="logger" xsi:type="object">bdcLogger</argument> </arguments>
         </type>

         <type name="BDC\SimpleNews\Observer\Logger">
              <arguments>  <argument name="logger" xsi:type="object">bdcLogger</argument> </arguments>
          </type>

          <type name="BDC\SimpleNews\Console\Command\NewsCreate">
                  <plugin name="bdcLoggerp" type="BDC\SimpleNews\Plugin\Logger"/>
              </type>

      </config>
      ```
  </details>

- Run

```
php bin/magento cache:flush
php bin/magento bdcrops:news:create --news-title="News Plugin" --news-summary="summary Plugin 1" --news-description="News Plugin Description 1"

```
Now  check var/log/bdc_debug.log  all log are write there

![](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/plugin_cli.png)

## <a name="PartH">PartH: Customization Layout Configuration & JavaScript  </a> [Go to Top](#top)


### <a name="Step2H1">Step2H1: Layout Configuration </a>
- edit [view/frontend/layout/news_index_index.xml](view/frontend/layout/news_index_index.xml)

```
<block template="BDC_SimpleNews::list.phtml" class="BDC\SimpleNews\Block\NewsList" name="bdc_simplenews_block_news_list"/>
```
Change as below:
```
<block template="BDC_SimpleNews::list.phtml" class="BDC\SimpleNews\Block\NewsList" name="bdc_simplenews_block_news_list">
  <arguments>
      <argument name="label" xsi:type="string">Head Line: </argument>
  </arguments>
</block>
```

- Edit [view/frontend/templates/list.phtml](view/frontend/templates/list.phtml)

```
<?php echo $block->getLabel(); ?>
```
- Output

![](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/custLayout.png)

### <a name="Step2H2">Step2H2:Customization JavaScript  </a>

####  What  is RequireJS?
RequireJS is a javascript module system. It implements the Asynchronous Module Definition (AMD) standard for javascript modules. In the terms of AMD, a javascript module provides a way to
Run a javascript program that doesn’t default to the global namespace
Share javascript code and data between named modules and programs
That’s all RequireJS does. You may use a RequireJS module that implements some special bit of functionality, but its not RequireJS that provides that functionality. RequireJS is the pneumatic tube that ensures the functionality is delivered to you.
#### Explain RequireJS term "map","shim","deps" ?
- Map: Replace a default JS component To use a custom implementation of an existing Magento JS component: Place the custom component source file in one of the following locations:
Your theme JS files: /web/js or /_ /web/js Your module view JS files: /view/frontend/web/js Create a RequireJS configuration file requirejs-config.js, having specified the following:
```
var config = {
  "map": {
    "*": { "<default_component>": "<custom_component>" }
  }
};
```
- Shim:To build a dependency on the third-party plugin, specify a [shim] in the following configuration files: requirejs-config.js
```
 var config = {
     "shim": {
     "3-rd-party-plugin": ["jquery"]
     }
 };
 ```

- Deps:Is used when your require js configurations depends upon some dependencies, i.e. you want to load some dependencies before your requires js define()’d is called. example:
```
var config = {
    "deps": [
        "jquery"
    ]
};
```
Here, It loads the [jquery] as soon as the require define()’d is called.
- baseUrl: Is used when we want to define the url to load the js files for all the modules used in require js.
baseUrl applied on all the files which defined with name starting with a slash”/”, have any url like “http://” or having .js extension.example:
```
var config = {
	"baseUrl": "webkul/test"
};

require( ["sample/sample1", "https://code.jquery.com/jquery-3.1.1.min.js", "sample2.js"],
    function(samplemodule) {
    }
);
```
Here, samplemodule is reffered to webkul/test/sample/sample1.js,
“https://code.jquery.com/jquery-3.1.1.min.js” is loaded from the url which is specified
and sample2.js is loaded from the same directory.

- paths: Paths is used when you want to relate your base url path the your module path.
Path have the same properties as the baseUrl.If the path is started from “/” or any url “http://” then it will not relate to the base url.example:

```
var config = {
	"baseUrl": "webkul/test",
	"paths": {
        "sample": "web/js"
    },
};

require( ["sample/sample1"],
    function(samplemodule) {
    }
);
```
Now, samplemodule is reffered to the file at path “webkul/test/web/js/sample1.js”

- config: Is used when you want to pass some configurations to all the modules.
These values are the common for all the modules.example:
```
var config = {
    "map": {
        '*': {
			'sample': 'sample1.js'
		}
    }
    config: {
        "testData":{
            "color":'red'
        }
    }
};
```
Now in your js file you can access this value by using :console.log(require.s.contexts._ .config.testData.color);It will gives you the “red” in output.

#### What is RequireJS “mixin”?
A Magento 2 RequireJS “mixin” allows you to programmatically listen for the initial instantiation of any RequireJS module and manipulate that module before returning it.

### overwriting  JS component using map

- requireJS configuration
create app/code/BDC/SimpleNews/view/frontend/requirejs-config.js

- copy validation lib to mododule
lib/web/mage/validation.js ==>app/code/BDC/SimpleNews/view/frontend/web/js/validation.js
 Change massages about 1684 line as
 ```
 $.validator.messages = $.extend($.validator.messages, {
     required: $.mage.__('This is a required field Custome.'),
 ```
- overwriting  JS component using map
app/code/BDC/SimpleNews/view/frontend/requirejs-config.js
```
var config = {
    'map': {
        '*': {
            'mage/validation': 'BDC_SimpleNews/js/validation'
        }
    }
};
```

- Clean cache try to login button  without fill filed

![](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/RequireJsValidationJS.png)
![](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/RequireJsLoginsms.png)

### overwriting  JS component using mixin

- app/code/BDC/SimpleNews/view/frontend/requirejs-config.js
```
var config = {
    'map': {
        '*': {
            'mage/validation': 'BDC_SimpleNews/js/validation'
        }
    },
    config: {
        mixins: {
            'BDC_SimpleNews/js/validation': {
                'BDC_SimpleNews/js/validation-mixin': true
            }
        }
    }
};
```
- app/code/BDC/SimpleNews/view/frontend/web/js/validation-mixin.js

```
define(function () {
    'use strict';

    var extension = {
        isValid: function () {
            return true;
        }
    };

    return function (target) {
        return target.extend(extension);
    };
});
```
- Check again login without fill value all validation gone


## <a name="PartI">PartI: UI Components Library </a> [Go to Top](#top)


### <a name="Step2I1">Step2I1: Rendering Grid(collections & listing component configuration) </a>

1.grid collections
2.listing component configuration
- Create app/code/BDC/SimpleNews/Controller/Adminhtml/Index/Index.php
```
<?php

namespace BDC\SimpleNews\Controller\Adminhtml\Index;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Backend\App\Action {
    public function execute() {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}

```
- Create app/code/BDC/SimpleNews/Model/Resource/News/Grid/Collection.php
```
<?php

namespace BDC\SimpleNews\Model\Resource\News\Grid;

use Magento\Framework\Data\Collection\Db\FetchStrategyInterface as FetchStrategy;
use Magento\Framework\Data\Collection\EntityFactoryInterface as EntityFactory;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Psr\Log\LoggerInterface as Logger;

class Collection extends \Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult
{
    public function __construct(
        EntityFactory $entityFactory,
        Logger $logger,
        FetchStrategy $fetchStrategy,
        EventManager $eventManager,
        $mainTable = 'bdc_simplenews',
        $resourceModel = 'BDC\SimpleNews\Model\Resource\News' ) {
        parent::__construct(
            $entityFactory,
            $logger,
            $fetchStrategy,
            $eventManager,
            $mainTable,
            $resourceModel
        );
    }
}

```
- Edit app/code/BDC/SimpleNews/etc/di.xml
add
```
<type name="Magento\Framework\View\Element\UiComponent\DataProvider\CollectionFactory">
    <arguments>
        <argument name="collections" xsi:type="array">
            <item name="bdc_news_grid_data_source" xsi:type="string">BDC\SimpleNews\Model\Resource\News\Grid\Collection</item>
        </argument>
    </arguments>
</type>
```
- Create app/code/BDC/SimpleNews/view/adminhtml/layout/simplenews_index_index.xml
```
<?xml version="1.0"?>
<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:View/Layout/etc/page_configuration.xsd">
    <body>
        <referenceContainer name="content">
            <uiComponent name="bdc_news_grid"/>
        </referenceContainer>
    </body>
</page>

```
- Create app/code/BDC/SimpleNews/view/adminhtml/ui_component/bdc_news_grid.xml
```
<?xml version="1.0" encoding="UTF-8"?>
<listing xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:module:Magento_Ui:etc/ui_configuration.xsd">
    <argument name="data" xsi:type="array">
        <item name="js_config" xsi:type="array">
            <item name="provider" xsi:type="string">bdc_news_grid.bdc_news_grid_data_source</item>
            <item name="deps" xsi:type="string">bdc_news_grid.bdc_news_grid_data_source</item>
        </item>
        <item name="spinner" xsi:type="string">bdc_news_columns</item>
        <item name="buttons" xsi:type="array">
            <item name="add" xsi:type="array">
                <item name="name" xsi:type="string">add</item>
                <item name="label" xsi:type="string" translate="true">Add News</item>
                <item name="class" xsi:type="string">primary</item>
                <item name="url" xsi:type="string">*/news/new</item>
            </item>
        </item>
    </argument>
    <dataSource name="bdc_news_grid_data_source">
        <argument name="dataProvider" xsi:type="configurableObject">
            <argument name="class" xsi:type="string">Magento\Framework\View\Element\UiComponent\DataProvider\DataProvider</argument>
            <argument name="name" xsi:type="string">bdc_news_grid_data_source</argument>
            <argument name="primaryFieldName" xsi:type="string">id</argument>
            <argument name="requestFieldName" xsi:type="string">id</argument>
            <argument name="data" xsi:type="array">
                <item name="config" xsi:type="array">
                    <item name="update_url" xsi:type="url" path="mui/index/render"/>
                    <item name="component" xsi:type="string">Magento_Ui/js/grid/provider</item>
                </item>
            </argument>
        </argument>
    </dataSource>
    <listingToolbar name="listing_top">
        <bookmark name="bookmarks"/>
        <columnsControls name="columns_controls"/>
        <exportButton name="export_button"/>
        <filterSearch name="fulltext"/>
        <filters name="listing_filters"/>
        <paging name="listing_paging"/>
        <!-- <frontendLink name="frontend_link"/> -->
    </listingToolbar>
    <columns name="bdc_news_columns">
        <argument name="data" xsi:type="array">
            <item name="config" xsi:type="array">
                <item name="childDefaults" xsi:type="array">
                    <item name="fieldAction" xsi:type="array">
                        <item name="provider" xsi:type="string">bdc_news_grid.bdc_news_grid.bdc_news_columns.actions</item>
                        <item name="target" xsi:type="string">applyAction</item>
                        <item name="params" xsi:type="array">
                            <item name="0" xsi:type="string">view</item>
                            <item name="1" xsi:type="string">${ $.$data.rowIndex }</item>
                        </item>
                    </item>
                </item>
            </item>
        </argument>
        <selectionsColumn name="ids">
            <argument name="data" xsi:type="array">
                <item name="config" xsi:type="array">
                    <item name="indexField" xsi:type="string">id</item>
                </item>
            </argument>
        </selectionsColumn>
        <column name="title">
            <argument name="data" xsi:type="array">
                <item name="config" xsi:type="array">
                    <item name="filter" xsi:type="string">text</item>
                    <item name="label" xsi:type="string" translate="true">Title</item>
                </item>
            </argument>
        </column>
        <column name="summary">
            <argument name="data" xsi:type="array">
                <item name="config" xsi:type="array">
                    <item name="filter" xsi:type="string">text</item>
                    <item name="label" xsi:type="string" translate="true">Summary</item>
                </item>
            </argument>
        </column>
    </columns>
</listing>

```
- Clean Cache & Run

http://www.magento.lan/cadmin/simplenews/

![](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/GridViewNewsListAdmin.png)

### <a name="Step2I2">Step2I2: Rendering Form  </a>

#### Goal
- New & save controllers

- UI data provider form

- Form ui component configuration

#### Implement Procedure:

- Create app/code/BDC/SimpleNews/Ui/DataProvider.php
```
<?php

namespace BDC\SimpleNews\Ui;

use Magento\Ui\DataProvider\AbstractDataProvider;

class DataProvider extends AbstractDataProvider{
    protected $collection;
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        $collectionFactory,
        array $meta = [],
        array $data = [] ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
    }

    public function getData() {
        $result = [];
        foreach ($this->collection->getItems() as $item) {
            $result[$item->getId()]['general'] = $item->getData();
        }
        return $result;
    }
}

```
- Create app/code/BDC/SimpleNews/Controller/Adminhtml/Index/Index.php
```
<?php

namespace BDC\SimpleNews\Controller\Adminhtml\Index;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Backend\App\Action {
    public function execute() {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}

```
- Create app/code/BDC/SimpleNews/Controller/Adminhtml/Index/NewAction.php
```
<?php

namespace BDC\SimpleNews\Controller\Adminhtml\Index;

use Magento\Framework\Controller\ResultFactory;

class NewAction extends \Magento\Backend\App\Action{
    public function execute() {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}

```
- Create app/code/BDC/SimpleNews/Controller/Adminhtml/Index/Save.php
```
<?php

namespace BDC\SimpleNews\Controller\Adminhtml\Index;

use BDC\SimpleNews\Model\NewsFactory;

class Save extends \Magento\Backend\App\Action {
    private $newsFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        NewsFactory $newsFactory
    ) {
        $this->newsFactory = $newsFactory;
        parent::__construct($context);
    }

    public function execute(){
        $this->newsFactory->create()
            ->setData($this->getRequest()->getPostValue()['general'])->save();
        return $this->resultRedirectFactory->create()->setPath('simplenews/index/index');
    }
}

```
- create app/code/BDC/SimpleNews/view/adminhtml/layout/simplenews_index_index.xml
```
<?xml version="1.0"?>
<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:View/Layout/etc/page_configuration.xsd">
    <body>
        <referenceContainer name="content">
            <uiComponent name="bdc_news_grid"/>
        </referenceContainer>
    </body>
</page>
```

- createapp/code/BDC/SimpleNews/view/adminhtml/ui_component/bdc_news_grid.xml
```
<?xml version="1.0" encoding="UTF-8"?>
<listing xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:module:Magento_Ui:etc/ui_configuration.xsd">
    <argument name="data" xsi:type="array">
        <item name="js_config" xsi:type="array">
            <item name="provider" xsi:type="string">bdc_news_grid.bdc_news_grid_data_source</item>
            <item name="deps" xsi:type="string">bdc_news_grid.bdc_news_grid_data_source</item>
        </item>
        <item name="spinner" xsi:type="string">bdc_news_columns</item>
        <item name="buttons" xsi:type="array">
            <item name="add" xsi:type="array">
                <item name="name" xsi:type="string">add</item>
                <item name="label" xsi:type="string" translate="true">Add News</item>
                <item name="class" xsi:type="string">primary</item>
                <item name="url" xsi:type="string">*/index/new</item>
            </item>
        </item>
    </argument>
    <dataSource name="bdc_news_grid_data_source">
        <argument name="dataProvider" xsi:type="configurableObject">
            <argument name="class" xsi:type="string">Magento\Framework\View\Element\UiComponent\DataProvider\DataProvider</argument>
            <argument name="name" xsi:type="string">bdc_news_grid_data_source</argument>
            <argument name="primaryFieldName" xsi:type="string">id</argument>
            <argument name="requestFieldName" xsi:type="string">id</argument>
            <argument name="data" xsi:type="array">
                <item name="config" xsi:type="array">
                    <item name="update_url" xsi:type="url" path="mui/index/render"/>
                    <item name="component" xsi:type="string">Magento_Ui/js/grid/provider</item>
                </item>
            </argument>
        </argument>
    </dataSource>
    <listingToolbar name="listing_top">
        <bookmark name="bookmarks"/>
        <columnsControls name="columns_controls"/>
        <exportButton name="export_button"/>
        <filterSearch name="fulltext"/>
        <filters name="listing_filters"/>
        <paging name="listing_paging"/>
        <!-- <frontendLink name="frontend_link"/> -->
    </listingToolbar>
    <columns name="bdc_news_columns">
        <argument name="data" xsi:type="array">
            <item name="config" xsi:type="array">
                <item name="childDefaults" xsi:type="array">
                    <item name="fieldAction" xsi:type="array">
                        <item name="provider" xsi:type="string">bdc_news_grid.bdc_news_grid.bdc_news_columns.actions</item>
                        <item name="target" xsi:type="string">applyAction</item>
                        <item name="params" xsi:type="array">
                            <item name="0" xsi:type="string">view</item>
                            <item name="1" xsi:type="string">${ $.$data.rowIndex }</item>
                        </item>
                    </item>
                </item>
            </item>
        </argument>
        <selectionsColumn name="ids">
            <argument name="data" xsi:type="array">
                <item name="config" xsi:type="array">
                    <item name="indexField" xsi:type="string">id</item>
                </item>
            </argument>
        </selectionsColumn>
        <column name="title">
            <argument name="data" xsi:type="array">
                <item name="config" xsi:type="array">
                    <item name="filter" xsi:type="string">text</item>
                    <item name="label" xsi:type="string" translate="true">Title</item>
                </item>
            </argument>
        </column>
        <column name="summary">
            <argument name="data" xsi:type="array">
                <item name="config" xsi:type="array">
                    <item name="filter" xsi:type="string">text</item>
                    <item name="label" xsi:type="string" translate="true">Summary</item>
                </item>
            </argument>
        </column>
    </columns>
</listing>

```
- check admin panel as
![](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/GridNewsList.png)

- create app/code/BDC/SimpleNews/view/adminhtml/layout/simplenews_index_new.xml
```
<?xml version="1.0"?>
<page layout="admin-2columns-left" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:View/Layout/etc/page_configuration.xsd">
    <body>
        <referenceContainer name="content">
            <uiComponent name="bdc_news_form"/>
        </referenceContainer>
    </body>
</page>
```
- createapp/code/BDC/SimpleNews/view/adminhtml/ui_component/bdc_news_form.xml
```
<?xml version="1.0" encoding="UTF-8"?>
<form xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:module:Magento_Ui:etc/ui_configuration.xsd">
    <argument name="data" xsi:type="array">
        <item name="js_config" xsi:type="array">
            <item name="provider" xsi:type="string">bdc_news_form.bdc_news_form_data_source</item>
            <item name="deps" xsi:type="string">bdc_news_form.bdc_news_form_data_source</item>
        </item>
        <item name="label" xsi:type="string" translate="true">General</item>
        <item name="layout" xsi:type="array">
            <item name="type" xsi:type="string">tabs</item>
            <item name="navContainerName" xsi:type="string">left</item>
        </item>
        <item name="buttons" xsi:type="array">
            <item name="save" xsi:type="array">
                <item name="name" xsi:type="string">save</item>
                <item name="label" xsi:type="string" translate="true">Save</item>
                <item name="class" xsi:type="string">primary</item>
                <item name="url" xsi:type="string">*/*/save</item>
            </item>
        </item>
    </argument>
    <dataSource name="bdc_news_form_data_source">
        <argument name="dataProvider" xsi:type="configurableObject">
            <argument name="class" xsi:type="string">BDC\SimpleNews\Ui\DataProvider</argument>
            <argument name="name" xsi:type="string">bdc_news_form_data_source</argument>
            <argument name="primaryFieldName" xsi:type="string">id</argument>
            <argument name="requestFieldName" xsi:type="string">id</argument>
            <argument name="collectionFactory" xsi:type="object">BDC\SimpleNews\Model\Resource\News\CollectionFactory</argument>
            <argument name="data" xsi:type="array">
                <item name="config" xsi:type="array">
                    <item name="submit_url" xsi:type="url" path="simplenews/index/save"/>
                </item>
            </argument>
        </argument>
        <argument name="data" xsi:type="array">
            <item name="js_config" xsi:type="array">
                <item name="component" xsi:type="string">Magento_Ui/js/form/provider</item>
            </item>
        </argument>
    </dataSource>
    <fieldset name="general">
        <argument name="data" xsi:type="array">
            <item name="config" xsi:type="array">
                <item name="label" xsi:type="string" translate="true">General</item>
            </item>
        </argument>
        <field name="title">
            <argument name="data" xsi:type="array">
                <item name="config" xsi:type="array">
                    <item name="label" xsi:type="string" translate="true">Title</item>
                    <item name="dataType" xsi:type="string">text</item>
                    <item name="formElement" xsi:type="string">input</item>
                    <item name="validation" xsi:type="array">
                        <item name="required-entry" xsi:type="boolean">true</item>
                    </item>
                </item>
            </argument>
        </field>
        <field name="summary">
            <argument name="data" xsi:type="array">
                <item name="config" xsi:type="array">
                    <item name="label" xsi:type="string" translate="true">Summary</item>
                    <item name="dataType" xsi:type="string">text</item>
                    <item name="formElement" xsi:type="string">input</item>
                </item>
            </argument>
        </field>
    </fieldset>
</form>

```


- edit app/code/BDC/SimpleNews/etc/adminhtml/menu.xml add below code

```
<add id="BDC_SimpleNews::manage_newsui" title="Manage News UI Grid"
    module="BDC_SimpleNews" sortOrder="3" parent="BDC_SimpleNews::main_menu"
    action="simplenews" resource="BDC_SimpleNews::manage_newsui" />
```

- Check Output on Admin as below
![](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/GridCollectionNew.png)
![](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/gridCollectionList.png)

### <a name="Step2I3">Step2I3: Extending UI Component</a>

#### Goal
- Extending XML Configuration [Magento_Sales]
- Adding New Column to Grid [Magento_Sales]
- Customizing Existing Column [Magento_Sales]

#### Implementation

-  Copy To app/code/BDC/SimpleNews/view/adminhtml/layout/sales_order_index.xml <==vendor/magento/module-sales/view/adminhtml/layout/sales_order_grid.xml

- Create app/code/BDC/SimpleNews/view/adminhtml/ui_component/sales_order_grid.xml
```
<?xml version="1.0" encoding="UTF-8"?>
<listing xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:module:Magento_Ui:etc/ui_configuration.xsd">
    <columns name="sales_order_columns">
        <column name="created_at">
            <argument name="data" xsi:type="array">
                <item name="config" xsi:type="array">
                    <item name="dateFormat" xsi:type="string">MMM dd, YYYY</item>
                </item>
            </argument>
        </column>
        <!-- <column name="base_tax_amount" class="Magento\Sales\Ui\Component\Listing\Column\Price">
            <argument name="data" xsi:type="array">
                <item name="config" xsi:type="array">
                    <item name="filter" xsi:type="string">textRange</item>
                    <item name="label" xsi:type="string" translate="true">Base Tax Amount</item>
                </item>
            </argument>
        </column> -->
    </columns>
</listing>

```
- Edit app/code/BDC/SimpleNews/etc/di.xml
```
<virtualType name="Magento\Sales\Model\ResourceModel\Order\Grid">
    <arguments>
        <argument name="columns" xsi:type="array">
            <item name="base_tax_amount" xsi:type="string">sales_order.base_tax_amount</item>
        </argument>
    </arguments>
</virtualType>
```

- Add new field 'base_tax_amount' on table sales_order_grid(add filed PhpMyAdmin)

![](https://github.com/bdcrops/BDC_SimpleNews/blob/master/doc/ExtendingXML.png)

***
## Ref   [Go to Top](#top)
***
https://devdocs.magento.com/guides/v2.3/extension-dev-guide/declarative-schema/

https://onilab.com/blog/declarative-schema-magento-2-3-and-higher/

https://www.mage-world.com/blog/create-a-module-with-custom-database-table-in-magento-2.html

http://techjeffyu.com/blog/magento-2-a-full-magento-2-module

https://github.com/codingarrow/M2/tree/master/BDC/SimpleNews
