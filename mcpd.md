
## Magento 2 Certified Professional Developer exam Preparation

***

### Exam topics and the approximate percentage covered in the test:

- [Magento Architecture & Customization Techniques 18%](#Architecture)
- [Request Flow Processing 12%](#RequestFlow)
- [Customizing the Magento UI 10%](#MagentoUI)
- [Working with Databases in Magento 7%](#Databases)
- [Using the Entity-Attribute-Value (EAV) Model 8%](#EAV)
- [Developing with Adminhtml 10%](#Adminhtml)
- [Customizing the Catalog 12%](#Catalog)
- [Customizing the Checkout Process 13%](#Checkout)
- [Sales Operations 5%](#Sales)
- [Customer Management 5%](#Customer)

***


## Topics and Objectives
***

### <a name="Architecture">1. Magento Architecture and Customization Techniques</a>

#### 1.1 Describe Magento’s module-based architecture

- Describe module limitations?
[amasty](https://amasty.com/blog/magento-2-certification-module-based-architecture/),
[magento2-exam-notes](https://github.com/magento-notes/magento2-exam-notes/blob/master/1.%20Magento%20Architecture%20and%20Customization%20Techniques/1.%20Describe%20Magento’s%20module-based%20architecture.md)

- How do different modules interact with each other?
[belvg](https://belvg.com/blog/magento-2-module-based-architecture.html),
[exam-notes](https://github.com/magento-notes/magento2-exam-notes/blob/master/1.%20Magento%20Architecture%20and%20Customization%20Techniques/1.%20Describe%20Magento’s%20module-based%20architecture.md#how-do-different-modules-interact-with-each-other),
[devdocs](https://devdocs.magento.com/guides/v2.3/architecture/archi_perspectives/components/modules/mod_intro.html)

- What side effects can come from this interaction?
[belvg](https://belvg.com/blog/magento-2-module-based-architecture.html)


#### 1.2 Describe Magento’s directory structure

- Determine how to locate different types of files in Magento?
[exam-notes](https://github.com/magento-notes/magento2-exam-notes/blob/master/1.%20Magento%20Architecture%20and%20Customization%20Techniques/2.%20Describe%20Magento’s%20directory%20structure.md),
[sudhanshubajaj](https://www.sudhanshubajaj.com/determine-how-to-locate-different-types-of-files-in-magento-2/),

- Where are the files containing JavaScript, HTML, and PHP located?
[belvg](https://belvg.com/blog/directory-structure-and-locating-different-files-in-magento2.html), [amasty](https://amasty.com/knowledge-base/magento-2-file-and-folder-structure.html)

- How do you find the files responsible for certain functionality?
[amasty](https://amasty.com/blog/magento-2-certification-directory-structure/),[belvg](https://belvg.com/blog/magento-2-directory-module-theme-catalogue-structure.html),[devdocs](https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/themes/debug-theme.html)



#### 1.3 Utilize configuration XML and variables scope

- Determine how to use configuration files in Magento?
[devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/build/required-configuration-files.html), [amasty](https://amasty.com/blog/magento-2-certification-configuration-files-visibility-areas/), [belvg](https://belvg.com/blog/configuration-files-and-variables-scope-in-magento-2.html)

- Which configuration files correspond to different features and functionality?
[exam-notes](https://github.com/magento-notes/magento2-exam-notes/blob/master/1.%20Magento%20Architecture%20and%20Customization%20Techniques/3.%20Utilize%20configuration%20XML%20and%20variables%20scope.md), [devdocs](https://devdocs.magento.com/guides/v2.3/config-guide/config/config-files.html)

#### 1.4 Demonstrate how to use dependency injection

- Describe Magento’s dependency injection approach and architecture.
[amasty](https://amasty.com/blog/magento-2-certification-dependency-injection-approach-and-architecture/), [devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/depend-inj.html)

- How are objects realized in Magento 2?
[amasty](https://amasty.com/blog/magento-2-certification-dependency-injection-approach-and-architecture/), [bigbridge](https://www.bigbridge.nl/blog/development-english/the-beauty-dependency-injection-magento-2/)

- Why is it important to have a centralized process creating object instances?
[amasty](https://amasty.com/blog/magento-2-certification-dependency-injection-approach-and-architecture/)
- Identify how to use DI configuration files for customizing Magento.
[devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/depend-inj.html)

- How can you override a native class, inject your class into another object, and use other techniques available in di.xml (such as virtualTypes)?
[amasty](https://amasty.com/blog/magento-2-certification-dependency-injection-approach-and-architecture/), [mageplaza](https://www.mageplaza.com/devdocs/using-virtual-type-magento-2.html),
[sudhanshubajaj](https://www.sudhanshubajaj.com/virtual-type-in-magento-2/), [mage2.pro](https://mage2.pro/t/topic/154)


#### 1.5 Demonstrate ability to use plugins

- Demonstrate how to design complex solutions using the plugin’s life cycle?
[mageplaza](https://www.mageplaza.com/devdocs/how-use-plugin-preference-rewrite-block-model-controller-helper-magento-2.html), [](https://belvg.com/blog/designing-complex-solutions-using-plugins-in-magento-2.html)

- How do multiple plugins interact?
[devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/plugins.html),
[packtpub](https://subscription.packtpub.com/book/web_development/9781785886584/6/ch06lvl1sec41/the-plugin-sort-order)

- how can multiple plugins execution order be controlled?
[elightwalk](https://www.elightwalk.com/blog/ability-of-plugins-in-magento-2),
[inchoo](https://inchoo.net/magento-2/overriding-classes-magento-2/)

- How do you debug a plugin if it doesn’t work?
[stackexchange](https://magento.stackexchange.com/questions/179738/how-can-i-debug-variables-inside-plugin), [stackexchange](https://magento.stackexchange.com/questions/179738/how-can-i-debug-variables-inside-plugin)

- Identify strengths and weaknesses of plugins?
[devdocs](https://magento-devdocs.github.io/devdocs-for-tests/guides/v2.3/extension-dev-guide/plugins.html),[magestore](https://www.magestore.com/magento-2-tutorial/magento-2-product-price-change-with-plugin/)

- What are the limitations of using plugins for customization? [devdocs]
(), [stackexchange](https://magento.stackexchange.com/questions/153761/plugins-is-it-bad-habit-to-inherit-from-modified-class-in-order-to-use-protect)

- In which cases should plugins be avoided? [devdocs](https://magento-devdocs.github.io/devdocs-for-tests/guides/v2.3/extension-dev-guide/plugins.html),[dckap](https://www.dckap.com/blog/magento-2-plugin-and-preference/)

#### 1.6 Configure event observers and scheduled jobs

- Demonstrate how to configure observers? [exam-notes](https://github.com/magento-notes/magento2-exam-notes/blob/master/1.%20Magento%20Architecture%20and%20Customization%20Techniques/6.%20Configure%20event%20observers%20and%20scheduled%20jobs.md), [devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/events-and-observers.html)
,[cloudways](https://www.cloudways.com/blog/magento-2-events-observers/),[mageplaza](https://www.mageplaza.com/magento-2-module-development/magento-2-create-events.html),[magenticians](https://magenticians.com/magento-2-events-observers/) 

- How do you make your observer only be active on the frontend or backend? [magefoo](http://magefoo.com/creating-a-magento-2-observer/)

- Demonstrate how to configure a scheduled job?
[devdocs](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-cron.html)

- Which parameters are used in configuration scheduled job? [amasty](https://amasty.com/blog/magento-2-cron-job-starter-guide/),[magestore](https://www.magestore.com/magento-2-tutorial/how-to-setup-magento-2-cron-job/)

- how can configuration interact with server configuration scheduled job?
[devdocs](https://devdocs.magento.com/guides/v2.3/config-guide/cron/custom-cron-ref.html),[kiwicommerce](https://kiwicommerce.co.uk/docs/cron-scheduler/)

- Identify the function and proper use of automatically available events, for example _ load_after, etc? [atwix](https://www.atwix.com/magento-2/choose-your-perfect-event/),
[magenest](https://store.magenest.com/blog/write-magento-2-event-observers/)

#### 1.7 Utilize the CLI

- Describe the usage of bin/magento commands in the development cycle?
[devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/cli-cmds/cli-howto.html),[]

- Which commands are available magento 2?
(https://www.emiprotechnologies.com/technical_notes/magento-technical-notes-60/post/magento-2-useful-commands-list-391)

- How are commands used in the development cycle?

- Demonstrate an ability to create a deployment process?
[cloudways](https://www.cloudways.com/blog/custom-cli-command-magento-2/)

- How does the application behave in different deployment modes?[mageplaza](https://www.mageplaza.com/devdocs/magento-2-command-line-interface-cli.html),
[belvg](https://belvg.com/blog/magento-2-console-commands.html)
- how do these behaviors impact the deployment approach for PHP code, frontend assets, etc.?
[devdocs](https://devdocs.magento.com/guides/v2.3/cloud/reference/discover-deploy.html)

#### 1.8 Demonstrate the ability to manage the cache

- Describe cache types and the tools used to manage caches?
[devdocs](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-cache.html),[belvg](https://belvg.com/blog/how-to-manage-the-cache-types-in-magento-2.html)

- How do you add dynamic content to pages served from the full page cache?
[trellis](https://trellis.co/blog/magento2-fpc-hole-punching/),[magenticians](https://magenticians.com/amasty-magento-full-page-cache-extension-review/)

- Describe how to operate with cache clearing.
[fmeextensions](https://www.fmeextensions.com/blog/magento-clear-cache/),[](https://www.mageplaza.com/kb/how-flush-enable-disable-cache.html)

- How would you clean the cache? [amasty](https://amasty.com/knowledge-base/magento-2-clear-cache.html)

- In which case would you refresh cache/flash cache storage?
[exam-notes](https://github.com/magento-notes/magento2-exam-notes/blob/master/1.%20Magento%20Architecture%20and%20Customization%20Techniques/8.%20Demonstrate%20the%20ability%20to%20manage%20the%20cache.md)

- Describe how to clear the cache programmatically.
[mageplaza](https://www.mageplaza.com/devdocs/clear-cache-programmically-magento-2.html),
[magecomp](https://magecomp.com/blog/how-to-clean-and-flush-cache-programmatically-in-magento2/),[metagento](https://www.metagento.com/blog/magento-2-clear-flush-cache-programmatically)

- What mechanisms are available for clearing all or part of the cache?
[belvg](https://belvg.com/blog/how-to-manage-the-cache-types-in-magento-2.html)


### <a name="RequestFlow"> 2 Request Flow Processing</a>

#### 2.1 Utilize modes and application initialization

- How would you design a customization that should act on every request
and capture output data regardless of the controller?
[exam-notes](https://github.com/magento-notes/magento2-exam-notes/blob/master/2.%20Request%20Flow%20Processing/1.%20Utilize%20modes%20and%20application%20initialization.md),[belvg](https://belvg.com/blog/utilizing-modes-and-application-initialization-in-magento-2.html)

- Describe how to use Magento modes. [devdocs](https://devdocs.magento.com/guides/v2.3/config-guide/bootstrap/magento-modes.html)
[cloudways](https://www.cloudways.com/blog/magento-2-modes/)

- What are pros and cons of using developer mode/production mode? [customerparadigm](https://www.customerparadigm.com/difference-between-magento-2-modes/),

- When do you use default mode?
[meetanshi](https://meetanshi.com/blog/magento-2-modes/)

- How do you enable/disable maintenance mode? [simicart](https://www.simicart.com/blog/magento-maintenance-mode/),[magestore](https://www.magestore.com/magento-2-tutorial/run-enabledisable-maintenance-mode-magento-2/)

- Describe front controller responsibilities?
[belvg](https://belvg.com/blog/front-controller-in-magento-1-and-2-magento-developer-certification.html),[devlineagency](https://www.devlineagency.com/blog/creating-admin-and-frontend-controllers-in-magento-2.html)

- In which situations will the front controller be involved in execution?
[exam-notes](https://github.com/magento-notes/magento2-exam-notes/blob/master/2.%20Request%20Flow%20Processing/1.%20Utilize%20modes%20and%20application%20initialization.md)

- how can front controller be used in the scope of customizations?
[devdocs](https://devdocs.magento.com/guides/v2.3/architecture/archi_perspectives/components/modules/mod_and_areas.html)

### 2.2 Demonstrate ability to process URLs in Magento

- Describe how Magento processes a given URL.[belvg](https://belvg.com/blog/url-rewrites-in-magento-2-developer-certification.html),[exam-notes](https://github.com/magento-notes/magento2-exam-notes/blob/master/2.%20Request%20Flow%20Processing/2.%20Demonstrate%20ability%20to%20process%20URLs%20in%20Magento.md)

- How do you identify which module and controller corresponds to a given URL? [mageplaza](https://www.mageplaza.com/magento-2-module-development/magento-2-routing.html)

- What is necessary to create a custom URL structure?
[alanstorm](https://alanstorm.com/magento_2_advanced_routing/)

- Describe the URL rewrite process and its role in creating user-friendly URLs.[](https://bsscommerce.com/blog/an-easy-guide-to-configure-url-rewrites-in-magento-2/)

- How are user-friendly URLs established? [mageplaza](https://www.mageplaza.com/kb/how-to-configure-url-rewrite-magento-2.html)

- how are user-friendly URLs customized?
[meetanshi](https://meetanshi.com/blog/magento-2-url-rewrite/),[amasty](https://amasty.com/knowledge-base/magento-2-url-rewrite.html)

- Describe how action controllers and results function.[pierrefay](https://www.pierrefay.com/magento2-training/create-controller-action-magento2.html), [mage2-blog](https://mage2-blog.com/magento-2-frontend-controller/)

- How do controllers interact with another?
[amasty](https://amasty.com/blog/magento-2-certification-module-based-architecture/)

- How are different response types generated?
[belvg](https://belvg.com/blog/controllers-routers-and-responses-in-magento-2.html)
[notes](https://github.com/magento-notes/magento2-exam-notes/blob/master/2.%20Request%20Flow%20Processing/2.%20Demonstrate%20ability%20to%20process%20URLs%20in%20Magento.md)

### 2.3 Demonstrate ability to customize request routing

- Describe request routing and flow in Magento.[atwix](https://www.atwix.com/magento-2/request-flow-overview/),[belvg](https://belvg.com/blog/request-routing-flow-in-magento-2.html)

- When is it necessary to create a new router or to customize existing routers? [notes](https://github.com/magento-notes/magento2-exam-notes/blob/master/2.%20Request%20Flow%20Processing/3.%20Demonstrate%20ability%20to%20customize%20request%20routing.md)

- How do you handle custom 404 pages?
[mageplaza](https://www.mageplaza.com/kb/create-custom-404-page-in-magento-2.html)


### 2.4 Determine the layout initialization process

- Determine how layout is compiled.[exam-notes](https://github.com/magento-notes/magento2-exam-notes/blob/master/2.%20Request%20Flow%20Processing/4.%20Determine%20the%20layout%20initialization%20process.md),[devdocs](https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/layouts/layout-overview.html), [jamersan](https://jamersan.com/super-guide-theming-magento-2-part-2-3/),[belvg](https://belvg.com/blog/how-to-use-templates-and-layouts-in-magento-2-layout-overview.html), [webkul](https://webkul.com/blog/use-less-magento-2-template-modules/),[inviqa](https://inviqa.com/blog/magento-2-tutorial-how-use-new-front-end-templating-system)

- How would you debug your layout.xml files & verify that  right layout instructions are used?
[stackexchange](https://magento.stackexchange.com/questions/97343/how-can-i-debug-layout-file-processing-in-magento-2),[jamersan](https://jamersan.com/instantly-identify-magento-2-template-file-looking/)

- Determine how HTML output is rendered? [stackexchange](https://magento.stackexchange.com/questions/156218/how-to-render-html-with-ajax-in-magento-2),[alanstorm](https://alanstorm.com/magento_2_javascript_css_layout_woes/)

- How does Magento flush output & what mechanisms exist to access and customize output?
[belvg](https://belvg.com/blog/output-flushing-in-magento-2-magento-developer-certification.html),

- Determine module layout XML schema ? [belvg](https://belvg.com/blog/using-layout-and-xml-schema-in-magento-2.html),[coursehero](https://www.coursehero.com/file/p6rqf3t/Determine-module-layout-XML-schema-How-do-you-add-new-elements-to-the-pages/)

- How do you add new elements to the pages introduced by a given module?
[atwix](https://www.atwix.com/magento-2/how-to-add-custom-layout-handle-to-category-in-magento-2/), [notes](https://github.com/magento-notes/magento2-exam-notes/blob/master/2.%20Request%20Flow%20Processing/4.%20Determine%20the%20layout%20initialization%20process.md)

- Demonstrate the ability to use layout fallback for customizations & debugging?
[devdocs](https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/themes/debug-theme.html)

- How do you identify which exact layout.xml file is processed in a given scope?[exam-notes]

- How does Magento treat layout XML files with the same names in different modules? [inchoo](https://inchoo.net/magento-2/override-magento-2-layout-product-page-example/)

- Identify the differences between admin and frontend scopes.[devdocs](https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/layouts/xml-instructions.html)

- What differences exist for layout initialization for the admin scope?
[devdocs](https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/layouts/layout-practice.html),[emiprotechnologies](https://www.emiprotechnologies.com/technical_notes/magento-technical-notes-60/post/ui-component-using-layout-xml-in-magento-2-664)

### 2.5 Determine the structure of block templates

- Identify and understand root templates, empty.xml, and page_layout. [devdocs](https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/layouts/layout-types.html),
[belvg](https://belvg.com/blog/magento-2-certification-page-layouts-and-their-inheritance.html),

- How are page structures defined, including number of columns?[exam-notes](https://github.com/magento-notes/magento2-exam-notes/blob/master/2.%20Request%20Flow%20Processing/4.%20Determine%20the%20layout%20initialization%20process.md)

- which basic containers are present, etc.?[exam-notes](https://github.com/magento-notes/magento2-exam-notes/blob/master/2.%20Request%20Flow%20Processing/4.%20Determine%20the%20layout%20initialization%20process.md)

- Describe the role of blocks and templates in the request flow?[exam-notes](https://github.com/magento-notes/magento2-exam-notes/blob/master/2.%20Request%20Flow%20Processing/4.%20Determine%20the%20layout%20initialization%20process.md),[magenticians](https://magenticians.com/using-magento-2-layouts-blocks-templates/)

- In which situations would you create a new block or a new template? [exam-notes](https://github.com/magento-notes/magento2-exam-notes/blob/master/2.%20Request%20Flow%20Processing/4.%20Determine%20the%20layout%20initialization%20process.md),[belvg](https://belvg.com/blog/how-to-use-blocks-in-magento-2-development.html)


### <a name="MagentoUI"> 3 Customizing the Magento UI</a>

#### 3.1 Demonstrate ability to utilize themes and the template structure

- Demonstrate the ability to customize the Magento UI using themes.[mageplaza](https://www.mageplaza.com/devdocs/how-to-create-magento-2-theme.html)

- When would you create a new theme? [cloudways](https://www.cloudways.com/blog/create-custom-theme-magento-2-part-1/)

- How do you define theme hierarchy for your project? [devdocs](https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/themes/theme-structure.html)

- Demonstrate the ability to customize/debug templates using the template fallback process.[belvg](https://belvg.com/blog/utilizing-themes-and-the-template-structure-in-magento-2.html)

- How do you identify which exact theme file is used in different situations?
[exam-notes](https://github.com/magento-notes/magento2-exam-notes/blob/master/3.%20Customizing%20the%20Magento%20UI/1.%20Demonstrate%20ability%20to%20utilize%20themes%20and%20the%20template%20structure.md)

- How can you override native files? [classyllama](https://www.classyllama.com/blog/template-override-m2),


#### 3.2 Determine how to use blocks

- Demonstrate an understanding of block architecture and its use in development.[belvg](https://belvg.com/blog/how-to-use-blocks-in-magento-2-development.html),
[amasty](https://amasty.com/blog/magento-2-certification-module-based-architecture/),
[devdocs](https://devdocs.magento.com/guides/v2.3/mtf/mtf_entities/mtf_block.html),[belvg2](https://belvg.com/blog/understanding-containers-blocks-and-actions-in-magento-2-layout-structure.html)

- Which objects are accessible from the block? [alanstorm](https://alanstorm.com/magento-2-block-and-this-are-not/),[digitalsix](https://www.digitalsix.co.uk/taking-the-block-out-of-blocks-with-view-models/)

- What is the typical block’s role? [belvg](https://belvg.com/blog/how-to-use-blocks-in-magento-2-development.html),

- Identify the stages in the lifecycle of a block.[](https://fixes.co.za/magento2/magento-2-rendering/)

- In what cases would you put your code in the _ prepareLayout(), _ beforeToHtml(), and _ toHtml() methods? [belvg](https://belvg.com/blog/how-to-use-blocks-in-magento-2-development.html)

- How would you use events fired in the abstract block?
[belvg](https://belvg.com/blog/how-to-use-blocks-in-magento-2-development.html)


- Describe how blocks are rendered and cached.
[belvg](https://belvg.com/blog/how-to-use-blocks-in-magento-2-development.html)

- Identify the uses of different types of blocks.
[belvg](https://belvg.com/blog/how-to-use-blocks-in-magento-2-development.html)


- When would you use non-template block types?
[belvg](https://belvg.com/blog/how-to-use-blocks-in-magento-2-development.html)


- In what situation should you use a template block or other block types?
[belvg](https://belvg.com/blog/how-to-use-blocks-in-magento-2-development.html)



#### 3.3 Demonstrate ability to use layout and XML schema

- Describe the elements of the Magento layout XML schema, including the major XML directives.
[belvg](https://belvg.com/blog/using-layout-and-xml-schema-in-magento-2.html)

- How do you use layout XML directives in your customizations?
[belvg](https://belvg.com/blog/using-layout-and-xml-schema-in-magento-2.html)

- Describe how to create a new layout XML file.
[belvg](https://belvg.com/blog/using-layout-and-xml-schema-in-magento-2.html)


- Describe how to pass variables from layout to block.
[belvg](https://belvg.com/blog/using-layout-and-xml-schema-in-magento-2.html)


#### 3.4 Utilize JavaScript in Magento

- Describe different types and uses of JavaScript modules? [belvg](https://belvg.com/blog/utilizing-javascript-component-in-magento-2.html)

- Which JavaScript modules are suited for which tasks? [magestore](https://www.magestore.com/magento-2-tutorial/how-to-override-magento-js-core-in-magento-2/)

- Describe UI components. [devdocs](https://devdocs.magento.com/guides/v2.3/ui_comp_guide/bk-ui_comps.html), [magently](https://magently.com/blog/magento-ui-components-custom-grid/), [belvg](https://belvg.com/blog/magento-2-certification-ui-component-configuration.html)
[magento 2 ui components-pdf](http://uk.magetitans.com/wp-content/uploads/2017/06/Mage-Titans-Maria-Kerns.pdf)

- In which situation would you use UiComponent versus a regular JavaScript module?
[exam-notes](https://github.com/magento-notes/magento2-exam-notes/blob/master/3.%20Customizing%20the%20Magento%20UI/4.%20Utilize%20JavaScript%20in%20Magento.md), [alanstorm](https://alanstorm.com/magento_2_simplest_ui_knockout_component/),[inchoo](https://inchoo.net/magento-2/knockout-js-in-magento-2/),[belvg](https://belvg.com/blog/magento-2-certification-ui-component-configuration.html)

- Describe the use of requirejs-config.js, x-magento-init, and data-mage-init?[alanstorm](https://alanstorm.com/magento_2_javascript_init_scripts/),[toweringmedia](https://toweringmedia.com/blog/javascript-init-scripts-magento2/),
[firebearstudio](https://firebearstudio.com/blog/advanced-development-with-requirejs-magento-2-tutorial.html),



### <a name="Databases"> 4 Working with Databases in Magento</a>

#### 4.1 Demonstrate ability to use data-related classes

- Describe repositories and data API classes? [belvg](https://belvg.com/blog/how-to-use-data-related-classes-repositories-and-data-api-in-magento-2.html),[vinaikopp](http://vinaikopp.com/2017/02/18/magento2_repositories_interfaces_and_webapi/),[exam-notes](https://github.com/magento-notes/magento2-exam-notes/blob/master/4.%20Working%20with%20Databases%20in%20Magento/1.%20Demonstrate%20ability%20to%20use%20data-related%20classes.md), [black.bird](https://black.bird.eu/en/blog/recettem2.html)

- How do you obtain an object or set of objects from the database using a repository?
[alanstorm](https://alanstorm.com/magento_2_understanding_object_repositories/),[devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/searching-with-repositories.html)

- How do you configure and create a SearchCriteria instance using the builder? [vinaikopp](http://vinaikopp.com/2017/02/18/magento2_repositories_interfaces_and_webapi/),
[Magestudy](https://github.com/nans/Magestudy/tree/master/SearchCriteria),[packtpub](https://subscription.packtpub.com/book/web_development/9781785886584/9/ch09lvl1sec65/search-criteria-interface-for-list-filtering), [medium](https://medium.com/@dannynimmo/how-to-use-the-repository-pattern-in-magento-2-4914caa67eaa)

- How do you use Data/Api classes? [belvg](https://belvg.com/blog/how-to-use-data-related-classes-repositories-and-data-api-in-magento-2.html), [magestore](https://www.magestore.com/magento-2-tutorial/magento-2-api-how-to-implement/),[iperiusbackup](https://www.iperiusbackup.net/en/magento-2-data-load-through-rest-api-interface-and-c/)

- Describe how to create and register new entities.[mageplaza](https://www.mageplaza.com/devdocs/how-create-eav-attribute-magento-2.html),[techjeffyu](http://techjeffyu.com/blog/magento-2-creating-new-eav-entity-and-model),[excellencemagentoblog](http://excellencemagentoblog.com/blog/2018/04/17/add-customer-attributes-programmatically-in-magento-2/)

- How do you add a new table to the database? [devdocs](https://devdocs.magento.com/videos/fundamentals/add-a-new-table-to-database/),[bsscommerce](https://bsscommerce.com/confluence/how-to-create-insert-data-into-the-table-in-magento-2/)

- Describe the entity load and save process. [belvg](https://belvg.com/blog/eav-load-and-save-processes-in-magento-2.html)

- Describe how to extend existing entities.
[exam-notes](https://github.com/magento-notes/magento2-exam-notes/blob/master/5.%20Using%20the%20Entity-Attribute-Value%20-EAV-%20Model/2.%20Demonstrate%20ability%20to%20use%20EAV%20entity%20load%20and%20save.md) , [magestore](https://blog.magestore.com/entity-attribute-value-in-magento/)

-What mechanisms are available to extend existing classes, for example by
adding a new attribute, a new field in the database, or a new related entity? [devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/extension_attributes/adding-attributes.html),[devdocs2](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/attributes.html),[hellomagento2](https://www.hellomagento2.com/extension-attributes/)

- Describe how to filter, sort & specify the selected values for collections and repositories?
[devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/searching-with-repositories.html),[webkul](https://webkul.com/blog/how-to-use-search-criteria-in-custom-module/)

- How do you select a subset of records from the database? [belvg](https://belvg.com/blog/magento-2-database-group-operations.html),[stackexchange](https://magento.stackexchange.com/questions/109426/magento-2-how-to-select-fetch-data-from-database)

- Describe the database abstraction layer for Magento.
[devdocs](https://devdocs.magento.com/guides/v2.3/architecture/archi_perspectives/service_layer.html),[belvg](https://belvg.com/blog/database-in-magento-2-models-resource-models-and-collections.html), [medium](https://medium.com/@matthewhaworth1/understanding-data-persistence-in-magento-2-d3fefafc4f2e)

- What type of exceptions does the database layer throw? [belvg](https://belvg.com/blog/magento-2-architecture-how-is-it-used-in-magento-2-application.html),

- What additional functionality does Magento provide over Zend_Adapter?
[stackexchange](https://magento.stackexchange.com/questions/33981/magento-2-and-zend-framework-2), [mageplaza](https://www.mageplaza.com/kb/there-has-been-error-processing-your-request-magento-2.html)

#### 4.2 Demonstrate an ability to use declarative schema

- How to manipulate columns and keys using declarative schema? [declarative](https://github.com/bdcrops/module-declarative)

- What is the purpose of whitelisting?
[declarative](https://github.com/bdcrops/module-declarative)

- How to use Data and Schema patches?
[declarative](https://github.com/bdcrops/module-declarative)

- How to manage dependencies between patch files?
[declarative](https://github.com/bdcrops/module-declarative)


### <a name="EAV">5 Using the Entity-Attribute-Value (EAV) Model</a>

#### 5.1 Demonstrate ability to use EAV model concepts

- Describe the EAV hierarchy structure.
- What happens when a new attribute is added to the system?
- What is the role of attribute sets and attribute groups?
- How are attributes presented in the admin?
- Describe how EAV data storage works in Magento.
- Which additional options do you have when saving EAV entities?
- How do you create customizations based on changes to attribute values?
- Describe the key differences between EAV and flat table collections.
- In which situations would you use EAV for a new entity?
- What are the pros and cons of EAV architecture?

#### 5.2 Demonstrate ability to use EAV entity load and save

- Describe the EAV load and save process and differences from the flat table load and save process.
- What happens when an EAV entity has too many attributes?
- How does the number of websites/stores affect the EAV load/save process?
- How would you customize the load and save process for an EAV entity in the situations described here?

#### 5.3 Demonstrate ability to manage attributes

- Describe EAV attributes, including the frontend/source/backend structure.
- How would you add dropdown/multiselect attributes?
- What other possibilities do you have when adding an attribute (to a product, for example)?
- Describe how to implement the interface for attribute frontend models.
- What is the purpose of this interface?
- How can you render your attribute value on the frontend?
- Identify the purpose and describe how to implement the interface for attribute source models.
- For a given dropdown/multiselect attribute, how can you specify and manipulate its list of options?
- Identify the purpose and describe how to implement the interface for attribute backend models.
- How (and why) would you create a backend model for an attribute?
- Describe how to create and customize attributes.
- How would you add a new attribute to the product, category, or customer entities?
- What is the difference between adding a new attribute and modifying an existing one?


### <a name="Adminhtml">6 Developing with Adminhtml</a>

#### 6.1 Describe common structure/architecture

- Describe the difference between Adminhtml and frontend? [belvg](https://belvg.com/blog/magento-2-areas-adminhtml-base-and-frontend.html),[exam-notes](https://github.com/magento-notes/magento2-exam-notes/blob/master/6.%20Developing%20with%20Adminhtml/1.%20Describe%20common%20structure%20architecture.md),

- What additional tools and requirements exist in the admin? [mageplaza](https://www.mageplaza.com/magento-2-module-development/create-admin-menu-magento-2.html), [mageworx](https://www.mageworx.com/wiki/magento2-admin-panel/)

#### 6.2 Define form and grid widgets

- Define form structure, form templates, grids, grid containers & elements?
[bitsofco](https://bitsofco.de/understanding-the-difference-between-grid-template-and-grid-auto/), [mageplaza](https://www.mageplaza.com/magento-2-module-development/create-admin-grid-magento-2.html),

- What steps are needed to display a grid or form? [aionhill](https://aionhill.com/magento-2-module-development-part-2),[atwix](https://www.atwix.com/magento-2/how-to-add-a-simple-note-to-the-checkout-step/), [belvg](https://belvg.com/blog/ui-grid-component-on-the-front-end-in-magento-2.html)

- Describe the grid and form workflow?
 [magentodeveloper](https://magentodeveloper.in/magento-2-admin-grid.html),

- How is data provided to the grid or form? [magestore](https://www.magestore.com/magento-2-tutorial/how-to-show-listing-items-grid-on-the-form-in-magento-2/)

- How can this be process be customized or extended? [create-admin-grid](https://medium.com/@jhonkelly2016/how-to-create-admin-grid-in-magento-2-9f39d052322d)

- Describe how to create a simple form and grid for a custom entity? [techjeffyu](http://techjeffyu.com/blog/magento-2-create-uicomponent-list-and-uicomponent-form-by-example)

- Given a specific entity with different types of fields (text, dropdown, image, file, date, and so on)? [atwix](https://www.atwix.com/magento-2/joining-external-attributes-to-entity-in-magento-2/),

- how would you create a grid and a form? [webkul](https://webkul.com/blog/create-grid-edit-add-grid-row-and-installer-in-magento2/),
[mage-world](https://www.mage-world.com/blog/grid-and-form-in-magento-2-admin-panel-part-1.html), [meetanshi](https://meetanshi.com/blog/create-admin-grid-magento-2/)


#### 6.3 Define system configuration XML and configuration scope

- Define basic terms and elements of system configuration XML, including scopes.
[magestore](https://www.magestore.com/magento-2-tutorial/3169-2/),
[atwix](https://www.atwix.com/magento-2/system-configuration/)

- How would you add a new system configuration option?
[mageplaza](https://www.mageplaza.com/magento-2-module-development/create-system-xml-configuration-magento-2.html),

- What is the difference in this process for different option types (secret, file)?
[aureatelabs](https://aureatelabs.com/how-to/how-to-create-system-xml-configuration-in-magento-2/), [metagento](https://www.metagento.com/blog/magento-2-create-system-configuration-system-xml)

- Describe system configuration data retrieval?
[mage2](https://mage2-blog.com/magento-2-get-core-config-data-programmatically/)

- How do you access system configuration options programmatically? [blogtreat](http://www.blogtreat.com/get-store-system-configuration-value-in-magento-2/),
[](http://www.blogtreat.com/get-store-system-configuration-value-in-magento-2/)


#### 6.4 Utilize ACL to set menu items and permissions

- Describe how to set up a menu item and permissions.[firebearstudio](https://firebearstudio.com/blog/how-to-add-magento-2-system-configuration-fields-get-core-config-data-programmatically.html),[mageplaza](https://www.mageplaza.com/magento-2-module-development/magento-2-acl-access-control-lists.html)[magestore](https://www.magestore.com/magento-2-tutorial/how-to-create-admin-menu-in-magento-2/)

- How would you add a new menu item in a given tab? []()

- How would you add a new tab in the Admin menu?

- How do menu items relate to ACL permissions?[](https://www.magestore.com/magento-2-tutorial/3194-2/)

- Describe how to check for permissions in the permissions management tree structures.

- How would you add a new user with a given set of permissions?

- How can you do that programmatically?


### <a name="Catalog"> 7 Customizing the Catalog</a>

#### 7.1 Demonstrate ability to use products and product types

      Identify/describe standard product types (simple, configurable, bundled, etc.).
      How would you obtain a product of a specific type?
      What tools (in general) does a product type model provide?
      What additional functionality is available for each of the different product types?

#### 7.2 Describe price functionality

      Identify the basic concepts of price generation in Magento.
      How would you identify what is composing the final price
      of the product? How can you customize the price calculation process?
      Describe how price is rendered in Magento.
      How would you render price in a given place on the page, and
      how would you modify how the price is rendered?

#### 7.3 Demonstrate ability to use and customize categories

      Describe category properties and features.
      How do you create and manage categories?
      Describe the category hierarchy tree structure implementation (the internal structure inside the database).
      What is the meaning of parent_id 0? How are paths constructed?
      Which attribute values are required to display a new category in the store?
      What kind of strategies can you suggest for organizing products into categories?

#### 7.4 Determine and manage catalog rules

      Identify how to implement catalog price rules.
      When would you use catalog price rules?
      How do they impact performance?
      How would you debug problems with catalog price rules?

### <a name="Checkout"> 8 Customizing the Checkout Process</a>

#### 8.1 Demonstrate ability to use quote, quote item, address, and shopping cart rules in checkout

      Describe how to modify these models and effectively use them in customizations.
      Describe how to customize the process of adding a product to the cart.
      Which different scenarios should you take into account?

#### 8.2 Demonstrate ability to use totals models

      Describe how to modify the price calculation process in the shopping cart.
      How can you add a custom totals model or modify existing totals models?

#### 8.3 Demonstrate ability to customize the shopping cart

      Describe how to implement shopping cart rules.
      What is the difference between sales rules and catalog rules?
      How do sales rules affect performance?
      What are the limitations of the native sales rules engine?
      Describe add-to-cart logic in different scenarios.
      What is the difference in adding a product to the cart from the
      product page, from the wishlist, by clicking Reorder, and during quotes merge?
      Describe the difference in behavior of different product types in the shopping cart.
      How are configurable and bundle products rendered?
      How can you create a custom shopping cart renderer?
      Describe the available shopping cart operations.
      Which operations are available to the customer on the cart page?
      How can you customize cart edit functionality?
      How would you create an extension that deletes one item if another was deleted?
      How do you add a field to the shipping address?

#### 8.4 Demonstrate ability to customize shipping and payment methods

      Describe shipping methods architecture.
      How can you create a new shipping method? What is the relationship
      between carriers and rates?
      Describe how to troubleshoot shipping methods and rate results.
      Where do shipping rates come from? How can you
      debug the wrong shipping rate being returned?
      Describe how to troubleshoot payment methods.
      What types of payment methods exist?
      What are the different payment flows?

### <a name="Sales"> 9 Sales Operations</a>

#### 9.1 Demonstrate ability to customize sales operations

      Describe how to modify order processing and integrate it with a third-party ERP system.
      Describe how to modify order processing flow.
      How would you add new states and statuses for an order?
      How do you change the behavior of existing states and statuses?
      Described how to customize invoices.
      How would you customize invoice generation, capturing, and management?
      Describe refund functionality in Magento.
      Which refund types are available, and how are they used?


### <a name="Customer"> 10 Customer Management</a>

#### 10.1 Demonstrate ability to customize My Account

- Describe how to customize the “My Account” section.
- How do you add a menu item?
- How would you customize the “Order History” page?

#### 10.2 Demonstrate ability to customize customer functionality

-  Describe how to add or modify customer attributes.
-  Describe how to extend the customer entity.
-  How would you extend the customer entity using the extension attributes mechanism?
-  Describe how to customize the customer address.
-  How would you add another field into the customer address?
-  Describe customer groups and their role in different business processes.
-  What is the role of customer groups?
-  What functionality do they affect?
-  Describe Magento functionality related to VAT.
-  How do you customize VAT functionality?

***


### Tutorials Series
- [pierrefay](https://www.pierrefay.com/magento2-training/create-a-view.html)
- [mageplaza](https://www.mageplaza.com/magento-2-module-development/)
- [magestore](https://www.magestore.com/magento-2-tutorial/)
