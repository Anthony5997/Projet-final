<?php

namespace App\Traits;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Path;

trait CustomFiles{
    public function uploadFiles($file, $target_directory ,$slugger){
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        // this is needed to safely include the file name as part of the URL
        $safeFilename = $slugger->slug($originalFilename);
        $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();
        
        // Move the file to the directory where brochures are stored
        try {
            $file->move(
                $this->getParameter($target_directory),
                $newFilename
            );
        } catch (FileException $e) {
            // ... handle exception if something happens during file upload
        }
        return $newFilename;
        
    }

    public function deletePicture($profilePicture){

        $filesystem = new Filesystem();
        $filesystem->remove($profilePicture);
    }
}