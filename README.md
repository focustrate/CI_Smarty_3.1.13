CodeIgniter Smarty Library
================

These files will integrate Smarty v3 into your CodeIgniter v2 framework. The library is lightweight and does what it needs to do. You will have all Smarty functionality within CodeIgniter. 

## File list
```
REQUIRED
  application/config/sm.php - config settings (template/cache/etc directories)
  application/libraries/Sm.php - library
  application/third_party/Smarty-3.1.15 - latest version of Smarty 3, downloaded from: www.smarty.net/download
  application/third_party/smarty - symbolic link to the Smarty-3.1.15 directory

TEST FILES
  application/controllers/smartytest.php - controller that loads smarty, assigns a variable, and displays a template
  application/views/smarty.tpl - view template for smartytest controller
```

**Important** ensure that the symbolic link exists ($ln -s Smarty-3.1.15 smarty). The library references application/third_party/smarty so that you can easily upgrade by changing the link to the latest stable version. 

## Example Usage
```
  $this->load->library('sm');
  $this->sm->assign('hello', 'Hello World!');
  $this->sm->display('smarty.tpl');
```

## Testing the resposity 
  * Add all the files to your CI codebase
  * Go to /index.php/smartytest

