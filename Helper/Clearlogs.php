<?php

namespace Friendsta\Logcleaner\Helper;

class Clearlogs
{
    protected $directoryList;

    protected $logFiles;

    public function __construct(
        \Magento\Framework\Filesystem\DirectoryList $directoryList,
        \Magento\Framework\Filesystem\Driver\File $logFiles
    ) {
        $this->directoryList = $directoryList;
        $this->logFiles = $logFiles;
    }

    public function clearLogContent() {
        $files = $this->fetchLogClasses();
        foreach ($files as $filePath) {
            $filePices = explode(".",$filePath);
            if(end($filePices) == "log") {
                file_put_contents($filePath, "");
            }
        }
    }

    private function fetchLogClasses() {
        $path = $this->directoryList->getPath('var'). "/log/";
        $paths =  $this->logFiles->readDirectoryRecursively($path);
        return $paths;
    }
}
