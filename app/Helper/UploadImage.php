<?php

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

/**
 * 
 */
function uploadImage(UploadedFile $file, ?string $oldFile, string $path): ?string
{

    try{

        if($oldFile){
            Storage::disk('public')->delete($oldFile);
        }

        $fileName = time(). '_'. $file->getClientOriginalName();
        
        $path = $file->storeAs($path, $fileName, 'public');

        return $path;
    }catch(Exception $e){
        return null;
    }

}