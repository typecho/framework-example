Typecho Framework的示例
=================

直接在浏览器里输入`http://app-root/portal/index.php`即可, 其中`app-root`是你的程序目录

注意
====

因为程序使用submodule来引用framework项目，所以在`clone`的时候应该使用`--recursive`

```
git clone --recursive git://github.com/typecho/framework-example.git
```

数据库使用
=========

请将`example.sql`中的数据导入到`test`数据库中，如果你想导入到其它数据库中，请修改`config/injects.php`里关于`serviceDb`的相关选项。如果你的数据设置了密码，或者地址不是`localhost`，同样可以修改这里。
