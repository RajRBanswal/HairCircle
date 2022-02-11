<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/*
*@Created by Swapna
*
*Uploads image to given path with given file name
*/

class Image_Upload extends Model
{
    use HasFactory;
    
    protected $fillable=[
        "*"
    ];
    
    /*
    * @$image file that is to be uploaded
    * @$destination_path destination path for image upload
    * @$image_name image name to upload image
    */
    public function upload_image($image_file,$destination_path,$image_name)
    {
        if($image_file->isValid()) {
            $image_file->move($destination_path, $image_name);
            return true;
        } else {
            return  false;
        }
    }
    
    /*
    * @$files file that is to be uploaded
    * @$dest_folder destination folder path for image upload
    * 
    * return $image_name uploaded image name;
    */
    public function uploadImage($files,$dest_folder) {
        $destinationPath = 'public/storage/'.$dest_folder; // upload path
        $image_name = date('YmdHis') . "." . $files->getClientOriginalExtension();
        if($files->isValid()) {
            $files->move($destinationPath, $image_name);
            return $image_name;
        } else {
            return "";
        }
        
    }
}

?>
