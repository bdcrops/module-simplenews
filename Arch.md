# Magento 2 Exam Architecture & Customization Techniques

- Magento 2 Certified Associate Developer-33%
- Magento 2 Certified Professional Developer-18%
- Magento 2 Certified Professional Developer Plus-6%


## Topics and Objectives

### Magento 2 Certified Associate Developer-33%

1.1 Describe the Magento module-based architecture
Describe module architecture. What are the significant steps to add a new module? What are the different Composer
package types? When would you place a module in the app/code folder versus another location?
1.2 Describe the Magento directory structure
Describe the Magento directory structure. What are the naming conventions, and how are namespaces established?
How can you identify the files responsible for some functionality?
1.3 Utilize configuration and configuration variables scope
Determine how to use configuration files in Magento. Which configuration files are important in the development
cycle?
Describe development in the context of website and store scopes. How do you identify the configuration scope for a
given variable? How do native Magento scopes (for example, price or inventory) affect development and decision-making
processes?
Demonstrate an ability to add different values for different scopes. How can you fetch a system configuration value
programmatically? How can you override system configuration values for a given store using XML configuration?
1.4 Demonstrate how to use dependency injection (DI)
Demonstrate the ability to use the dependency injection concept in Magento development. How are objects
realized in code? Why is it important to have a centralized object creation process?
Identify how to use DI configuration files for customizing Magento. How can you override a native class, inject your
class into another object, and use other techniques available in di.xml (for example, virtualTypes)?
Given a scenario, determine how to obtain an object using the ObjectManager object. How would you obtain a class
instance from different places in the code?
1.5 Demonstrate ability to use plugins
Demonstrate an understanding of plugins. How are plugins used in core code? How can they be used for
customizations?
1.6 Configure event observers and scheduled jobs
Demonstrate how to create a customization using an event observer. How are observers registered? How are they
scoped for frontend or backend? How are automatic events created, and how should they be used? How are scheduled
jobs configured?

1.7 Utilize the CLI
Describe the usage of bin/magento commands in the development cycle. Which commands are available? How
are commands used in the development cycle?
1.8 Describe how extensions are installed and configured
How would you install and verify an extension by a customer’s request?


***

### Magento 2 Certified Professional Developer-18%

#### 1 Magento Architecture and Customization Techniques

#### 1.1 Describe Magento’s module-based architecture
Describe module limitations. How do different modules interact with each other? What side effects can come from this
interaction?
#### 1.2 Describe Magento’s directory structure
Determine how to locate different types of files in Magento. Where are the files containing JavaScript, HTML, and
PHP located? How do you find the files responsible for certain functionality?
#### 1.3 Utilize configuration XML and variables scope
Determine how to use configuration files in Magento. Which configuration files correspond to different features and
functionality?
#### 1.4 Demonstrate how to use dependency injection
Describe Magento’s dependency injection approach and architecture. How are objects realized in Magento? Why is
it important to have a centralized process creating object instances?
Identify how to use DI configuration files for customizing Magento. How can you override a native class, inject your
class into another object, and use other techniques available in di.xml (such as virtualTypes)?
#### 1.5 Demonstrate ability to use plugins
Demonstrate how to design complex solutions using the plugin’s life cycle. How do multiple plugins interact, and
how can their execution order be controlled? How do you debug a plugin if it doesn’t work?
Identify strengths and weaknesses of plugins. What are the limitations of using plugins for customization? In which
cases should plugins be avoided?
#### 1.6 Configure event observers and scheduled jobs
Demonstrate how to configure observers. How do you make your observer only be active on the frontend or backend?
Demonstrate how to configure a scheduled job. Which parameters are used in configuration, and how can
configuration interact with server configuration?
Identify the function and proper use of automatically available events, for example * _ load_after, etc

#### 1.7 Utilize the CLI
Describe the usage of bin/magento commands in the development cycle. Which commands are available? How
are commands used in the development cycle?
Demonstrate an ability to create a deployment process. How does the application behave in different deployment
modes, and how do these behaviors impact the deployment approach for PHP code, frontend assets, etc.?
#### 1.8 Demonstrate the ability to manage the cache
Describe cache types and the tools used to manage caches. How do you add dynamic content to pages served from
the full page cache?
Describe how to operate with cache clearing. How would you clean the cache? In which case would you refresh
cache/flash cache storage?
Describe how to clear the cache programmatically. What mechanisms are available for clearing all or part of the
cache?


***

### Magento 2 Certified Professional Developer Plus-6%

#### 1.1 Determine advanced uses of the Magento configuration system
- Understand how to create a custom config file. Demonstrate an understanding of the Magento Configuration files
framework
- Understand how to create a custom config file with validation and a unique node that is overridden on merging
- Understand how to create a config file with a remote schema
#### 1.2 Demonstrate an ability to design complex customizations using plugins and
di.xml
- Plugins sort order, plugin on plugin scenario, plugin debugging techniques. Demonstrate an understanding of
virtual types, shared objects, object instantiation process, proxies, factories
- How does an around plugin modify the plugin execution order?
- How do you debug a plugin that is not executed?
- Demonstrate Plugin on Plugin examples
- Which classes are instantiated outside of the ObjectManager so they cannot be customizing using di.xml?
- Demonstrate a use case for a virtual type (different instances of a class with a different set of arguments)
#### 1.3 Demonstrate understanding of Magento events processing
- Demonstrate an understanding of the events processing flow. Influence of Staging on the event processing
- What is a modification of the event processing mechanism introduced by the staging module?
#### 1.4 Demonstrate an ability to use the Magento command-line interface
- Create a new CLI command, emulate different areas within it
- Create a new CLI-command, configure it in di.xml, add optional/required options/keys
- Environment specification using Area class
- Environment emulation for a section of code

***
