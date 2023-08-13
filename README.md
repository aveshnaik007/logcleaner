# **The Magento 2 Log cleaner**

In Magento 2 the log files are written by Magento every day and every time this at some point some files can reach more then 1 GB. Most of time the developer will log into the server can clean this file to make some space on the drive. Most site admin or the owner doesn’t have a knowledge to clear these files. So created this plugin to help the site admin to clear these files on the server.

To learn Magento development go to learningmagento.com [r2hc]: learningmagento.com

### **Installing**

- Download the package from git. Click Code -> Download Zip
- Create a directory and name it as “Friendsta”
- Unzip the downloaded file inside Friendsta directory
- Open Friendsta directory and there will be another directory name “logcleaner-main” rename this directory to “Logcleaner”
- Copy this Friendsta directory into Magento’s app/code directory
- Run

  ``` 
      php bin/magento setup:upgrade
      php bin/magento setup:di:compile
      php bin/magento setup:static-content:deploy
  ```

For any assistance or any customization contact me on aveshnaik007@hotmail.com

### **Feature**

1. Cleaning using button

   I have added a button to cleaning of log file

    a. Go to Stores
 
    b. Configuration

    c. Log cleaner -> Settings

![](https://i.imgur.com/TROiK1D.png)

Clicking on Clearn now Button will clear all the logs instantly

1. Cleaning using Cron

    I have added cron feature which will clear these log files depending on the time set by the admin. I have added most of the options to select. Feel free to email me on above address to make any modification to the plugin.

![](https://i.imgur.com/LqqUsJf.png)

