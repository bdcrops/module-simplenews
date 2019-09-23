## Magento 2 Certified Associate Developer


### Exam topics and the percentage covered in the test:
- [Magento Architecture & Customization Techniques 33%](#Architecture)
- [Request Flow Processing 7%](#RequestFlow)
- [Customizing the Magento UI 15%](#UI)
- [Working with Databases in Magento 18%](#Databases)
- [Developing with Adminhtml 11%](#Adminhtml)
- [Customizing Magento Business Logic 16%](#BusinessLogic)
***


## Topics and Objectives
***

### <a name="Architecture"> 1 Magento Architecture and Customization Techniques</a>

#### 1.1 Describe the Magento module-based architecture

-  Describe module architecture. [Step 2A.1 Notes](README.md#Step2A1)
-  What are the significant steps to add a new module? [Step 2A.2-3](README.md#Step2A2)
-  What are the different Composer package types? [Step 2A.3](README.md#Step2A3)
-  When would you place a module in the app/code folder versus another location? [Step 2A.3](README.md#Step2A3)

#### 1.2 Describe the Magento directory structure

-  Describe the Magento directory structure. [devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/build/module-file-structure.html)
[mageplaza](https://www.mageplaza.com/devdocs/file-structure-magento-2.html)

-  What are the naming conventions, and how are namespaces established?
[devdocs1](https://devdocs.magento.com/guides/v2.3/coding-standards/code-standard-php.html)
[devdocs2](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/build/create_component.html)
[devdocs3](https://devdocs.magento.com/guides/v2.3/ext-best-practices/extension-coding/common-programming-bp.html)
-  How can you identify the files responsible for some functionality? [Step 2A.1](README.md#Step2A1)


#### 1.3 Utilize configuration and configuration variables scope

- Determine how to use configuration files in Magento. [Step 2B.5](README.md#Step2B5)
- Which configuration files are important in the development cycle?[amastyBlog](https://amasty.com/blog/magento-2-certification-configuration-files-visibility-areas/),
[](https://github.com/magento-notes/magento2-exam-notes/blob/master/1.%20Magento%20Architecture%20and%20Customization%20Techniques/3.%20Utilize%20configuration%20XML%20and%20variables%20scope.md)
[belvg](https://belvg.com/blog/configuration-files-and-variables-scope-in-magento-2.html)
- Describe development in the context of website and store scopes.
[magestore](https://www.magestore.com/magento-2-tutorial/magento-2-configuration-scope-tutorial/) , [mage2-blog](https://mage2-blog.com/magento-2-write-and-get-config-values-by-scope/)
- How do you identify the configuration scope for a given variable?
[docs.magento](https://docs.magento.com/m2/ce/user_guide/configuration/scope.html)
- How do native Magento scopes (for example, price or inventory) affect development and decision-making processes? [magestandard](http://magestandard.com/configure-price-scope-magento-2/) ,
[bsscommerceBlog](https://bsscommerce.com/blog/how-to-set-up-different-prices-of-products-per-magento-2-store-view/)

- Demonstrate an ability to add different values for different scopes. [Step 2B.1](README.md#Step2B1)

- How can you fetch a system configuration value programmatically?[Step 2B.5](README.md#Step2B5)


- How can you override system configuration values for a given store using XML configuration?
[stackexchange](https://magento.stackexchange.com/questions/141077/how-to-override-system-xml-core-file-in-magento2), [webkulBlog](https://webkul.com/blog/set-default-configuration-values-magento-2/)

#### 1.4 Demonstrate how to use dependency injection (DI)

- Demonstrate the ability to use the dependency injection concept in Magento development.
[DIconfiguration](https://github.com/bdcrops/module-simplenews#PartG),
[amastyBlog](https://amasty.com/blog/magento-2-certification-dependency-injection-approach-and-architecture/)
- How are objects realized in code?
[amastyBlog](https://amasty.com/blog/magento-2-certification-dependency-injection-approach-and-architecture/)

- Why is it important to have a centralized object creation process?
[amasty](https://amasty.com/blog/magento-2-certification-dependency-injection-approach-and-architecture/)

- Identify how to use DI configuration files for customizing Magento.
[amasty](https://amasty.com/blog/magento-2-certification-configuration-files-visibility-areas/)
- How can you override a native class, inject your class into another object, and use other techniques available in di.xml (for example, virtualTypes)?
[yireo](https://www.yireo.com/blog/2018-05-06-magento-2-virtual-types-with-namespaces),
[mageplaza](https://www.mageplaza.com/devdocs/using-virtual-type-magento-2.html)

- Given a scenario, determine how to obtain an object using the ObjectManager object.
[mageplaza](https://www.mageplaza.com/devdocs/magento-2-dependency-injection.html) ,
[michiel](https://www.michiel-gerritsen.com/swapping-instances-in-the-object-manager/)

- How would you obtain a class instance from different places in the code?
[atwix](https://www.atwix.com/development/how-to-use-object-manager-in-unit-tests/)

#### 1.5 Demonstrate ability to use plugins

- Demonstrate an understanding of plugins.
[DI Plugins](https://github.com/bdcrops/module-simplenews#Step2G3)

- How are plugins used in core code?
[mageplaza](https://www.mageplaza.com/devdocs/how-use-plugin-preference-rewrite-block-model-controller-helper-magento-2.html),
[magecomp](https://magecomp.com/blog/override-core-code-using-custom-plugin-magento-2/)
[yireo](https://www.yireo.com/blog/2018-02-09-magent-2-observer-or-plugin)

- How can they be used for customizations?
[eglobeits](https://www.eglobeits.com/blog/how-to-customize-a-functionality-using-magento-2-plugins-interceptor/)


#### 1.6 Configure event observers and scheduled jobs

- Demonstrate how to create a customization using an event observer.
[DI Observer](https://github.com/bdcrops/module-simplenews#Step2G2)

- How are observers registered?

- How are they scoped for frontend or backend?

- How are automatic events created, and how should they be used?

- How are scheduled jobs configured? [PartE](README.md#PartE)

#### 1.7 Utilize the CLI

- Describe the usage of bin/magento commands in the development cycle.
[ConsoleCommand](https://github.com/bdcrops/module-simplenews#PartD), [BDC_Mycli](https://github.com/bdcrops/BDC_Mycli),[Step 2D.1](README.md#Step2D1)
- Which commands are available? ||
- How are commands used in the development cycle? ||

#### 1.8 Describe how extensions are installed and configured

- How would you install and verify an extension by a customer’s request? [belvg blog](https://belvg.com/blog/how-to-install-module-manually-on-magento-2.html),
[devdocs](https://devdocs.magento.com/guides/v2.3/comp-mgr/extens-man/extensman-main-pg.html)

### <a name="RequestFlow"> 2 Request Flow Processing</a>

#### 2.1 Describe how to use Magento modes

- Understand the pros and cons of using developer mode or production mode.[devdocs](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-mode.html)
[meetanshi blog](https://meetanshi.com/blog/magento-2-modes/)

- How do you enable/disable maintenance mode? [devdocs](https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-subcommands-maint.html)

```
magento maintenance:enable [--ip=<ip address> ... --ip=<ip address>] | [ip=none]
magento maintenance:disable [--ip=<ip address> ... --ip=<ip address>] | [ip=none]
magento maintenance:status
```


#### 2.2 Demonstrate the ability to

- create a frontend controller with different response types (HTML / JSON / redirect)
[SetupFrontendRoute](https://github.com/bdcrops/module-simplenews#step-2a11-setup-the-frontend-route), [Responses](README.md#Step2A12Note1)

- How do you identify which module/controller corresponds to a given URL? [Step2A12](README.md#Step2A12)

- What would you do to create a given URL? [Step2A11](README.md#Step2A11) [chapagain](http://blog.chapagain.com.np/magento-2-return-json-xml-html-raw-text-data-response-from-controller/)

#### 2.3 Demonstrate how to use URL rewrites for a catalog product view to a different URL

- How is the user-friendly URL of a product or category defined? [mageplaza](https://www.mageplaza.com/kb/how-to-create-product-url-rewrites-magento-2.html),

[firebearstudio](https://firebearstudio.com/blog/regenerate-url-rewrites-magento-2.html)

- How can you change it?
- How do you determine which page corresponds to a given user-friendly URL?
[fastcomet](https://www.fastcomet.com/tutorials/magento2/sef-urls)


### <a name="MagentoUI"> 3 Customizing the Magento UI</a>

#### 3.1 Demonstrate the ability to customize the Magento UI using themes

- Demonstrate the ability to customize the Magento UI using themes.
[devdocs](https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/css-topics/theme-ui-lib.html), [inchoo](https://inchoo.net/magento-2/not-start-using-magento2-ui-library-easy-fun/)
- When would you create a new theme?
[devdocs](https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/themes/theme-create.html)
[magestore](https://www.magestore.com/magento-2-tutorial/3171-2/)
- How do you define theme hierarchy for a project?
[mageplaza](https://www.mageplaza.com/devdocs/how-to-create-magento-2-theme.html)

#### 3.2 Demonstrate an ability to
- create UI customizations using a combination of a block and template
- How do you assign a template to a block?
- How do you assign a different template to a native block?

#### 3.3 Identify the uses of different types of blocks

- When would you use non-template block types?

#### 3.4 Describe the elements of the

- Magento layout XML schema, including the major XML directives

- How do you use layout XML directives in your customizations?

- How do you register a new layout file?

#### 3.5 Create and add code and markup to a given page

- How do you add new content to existing pages using layout XML?

### <a name="Databases">4 Working with Databases in Magento</a>

#### 4.1 Describe the basic concepts of [models](README.md#Step2A8Note3), resource models, and collections

- What are the responsibilities of each of the ORM object types? [Step2A9Note1](README.md#Step2A9Note1)
- How do they relate to one another?

#### 4.2 Describe how entity load and save occurs

- How do you use the native Magento save/load process in the development process?[save/load process](README.md#Step2A9Note2)

#### 4.3 Describe how to filter, sort, and specify the selected values for collections and repositories

- [How do you select a subset of records from the database?](README.md#Step2A10Note1)

#### 4.4 Demonstrate an ability to use declarative schema

- How do you add a column using declarative schema? [Step 2A.4 -5](README.md#Step2A5) [BDC_Declarative](https://github.com/bdcrops/BDC_Declarative)
- How do you modify a table added by another module? ||
- How do you delete a column?  ||
- How do you add an index or foreign key using declarative schema? ||
- How do you manipulate data using data patches?  [Step 2A.7](README.md#Step2A7)
- What is the purpose of schema patches? [Step 2A.7](README.md#Step2A7) [BDC_Declarative](https://github.com/bdcrops/BDC_Declarative)


### <a name="Adminhtml"> 5 Developing with Adminhtml</a>

#### 5.1 Create a controller for an admin router

- How would you create an admin controller?  [Step 2B.15-17](README.md#Step2B15)
- How do you ensure the right level of security for a new controller?
[andresa](https://andresa.dev/en/magento-2-how-to-create-an-admin-controller-and-a-new-acl/)

#### 5.2 Define basic
- terms and elements of system configuration, including scopes, website, store, store view? ||
- How would you add a new system configuration option?
[belvg](https://belvg.com/blog/magento-2-custom-system-configuration.html),
[inviqa](https://inviqa.com/blog/how-use-system-configuration-and-helpers-magento-2),
[magecomp](https://magecomp.com/blog/create-system-xml-configuration-magento-2/)

- What is the difference in this process for different option types (secret, file)?
Secret Field
```
<field id="custom_secret" type="obscure" translate="label" sortOrder="70" showInDefault="1" showInWebsite="1" showInStore="1">
   <label>Custom Secret Field</label>
<backend_model>Magento\Config\Model\Config\Backend\Encrypted</backend_model>
</field>
```

type=”obscure” hides the field value from the frontend, but in this case, the data will still be stored as plain text.

Setting Magento\Config\Model\Config\Backend\Encrypted as a backend model allows you to encrypt the data in the database.

Most of the source models are located in app/code/Magento/Config/Model/Config/Source and backend models are located in app/code/Magento/Config/Model/Config/Backend.

#### 5.3 Define / identify basic terms and elements of ACL

- How would you add a new ACL resource to a new entity? [Step 2B.3](README.md#Step2B3)
- How do you manage the existing ACL hierarchy? [Step 2B.8](README.md#Step2B8)



#### 5.4 Set up a menu item
- How do you add a new menu item to a given tab? [Step 2B.1](README.md#Step2B1)
- How do you add a new tab to the Admin menu?
[dckap](https://www.dckap.com/blog/tab-in-customer-admin-in-magento-2/),
[chapagain](http://blog.chapagain.com.np/magento-2-add-custom-link-tab-page-to-customer-account-sidebar/)

#### 5.5 Create appropriate permissions for users
- How are menu items related to ACL permissions? [mageplaza](https://www.mageplaza.com/magento-2-module-development/magento-2-acl-access-control-lists.html), [belvg blog](https://belvg.com/blog/magento-2-backend-menu-and-acl.html)
- How do you add a new user with given set of permissions?
[mageworx](https://www.mageworx.com/wiki/magento-2-permissions/),
[mageplaza](https://www.mageplaza.com/kb/how-to-create-new-admin-user-magento-2.html)


### <a name="BusinessLogic"> 6 Customizing Magento Business Logic</a>

#### 6.1 Identify/describe standard product types (simple, configurable, bundled, etc.)
- How would you obtain a product of a specific type, and what tools (in general) does a product type model provide?
[belvg](https://belvg.com/blog/using-products-and-standard-product-types-simple-configurable-bundled-etc-in-magento-2.html), [mageplaza](https://www.mageplaza.com/kb/6-types-product-types-magento-2.html)

#### 6.2 Describe category properties in Magento
- How do you create and manage categories?
[mageplaza](https://www.mageplaza.com/kb/how-to-create-a-new-category-in-magento-2.html),
[tigren](https://www.tigren.com/create-manage-categories-in-magento-2/)

#### 6.3 Define how products are related to the category
- How do you assign and unassign products to categories?
[magestore](https://www.magestore.com/magento-2-tutorial/add-and-remove-products-from-category-in-magento-2/),
[blogtreat](http://www.blogtreat.com/programmatically-assign-remove-products-from-category-in-magento-2/)

#### 6.4 Describe the difference in behavior of different product types in the cart
- How are configurable and bundle products rendered?
[belvg](https://belvg.com/blog/how-to-use-and-customize-magento-2-catalog-products-and-categories-price-and-price-rules.html)
- How can you create a custom shopping cart renderer?
[mage2](https://mage2.pro/t/topic/1312), [sherocommerce](https://sherocommerce.com/technical-overview-customize-magento-2-checkout/)

#### 6.5 Describe native shipment functionality in Magento
- How do you customize the shipment step of order management?
[devdocs](https://devdocs.magento.com/guides/v2.3/howdoi/checkout/checkout_overview.html),
[magestore](https://www.magestore.com/magento-2-tutorial/magento-2-checkout-customization/)
[mageworx](https://www.mageworx.com/wiki/cat/magento-order/)
#### 6.6 Describe and customize operations available in the customer account area
- How would you add another tab in the “My Account” section?
[magecomp](https://magecomp.com/blog/add-custom-tab-in-customer-account-section-magento-2/),[mageplaza](https://www.mageplaza.com/devdocs/add-custom-tab-customer-account-magento-2.html), [webkul](https://webkul.com/blog/account-navigation-link-magento2/)

- How do you customize the order history page?
[belvg](https://belvg.com/blog/customer-management-in-magento-2-customize-my-account-order-history-and-functionality.html)


#### 6.7 Add or modify customer attributes
- How do you add or modify customer attributes in a setup script?
[mageplaza](https://www.mageplaza.com/magento-2-module-development/magento-2-add-customer-attribute-programmatically.html), [coolblueweb](https://coolblueweb.com/blog/adding-a-customer-attribute-programmatically-in-magento-2/) [devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/attributes.html)

#### 6.8 Customize the customer address
- How do you add another field to the customer address entity using a setup script?
[webkul](https://webkul.com/blog/how-to-create-custom-customer-address-attribute-in-magento-2/), [web4pro](https://web4pro.net/blog-news/magento-2-add-custom-attribute-customers-address/),
[devdocs](https://devdocs.magento.com/guides/v2.3/howdoi/checkout/checkout_new_field.html)




End
***
