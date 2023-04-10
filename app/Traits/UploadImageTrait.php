<?php


namespace App\Traits;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

trait UploadImageTrait
{
  public function uploadImage1 (Request $request , $folderName ) {
        $file = $request->file('id_card_photo');
        $imageName = $file->hashName();
        $imagePath = public_path('images/' . $folderName);

        // Create the directory if it doesn't exist
        if (!is_dir($imagePath)) {
            mkdir($imagePath, 0755, true);
        }

        // Save the uploaded image to the target folder
        $file->move($imagePath, $imageName);

       // Load and resize the uploaded image
        $image = Image::make($imagePath . '/' . $imageName);
        $image->resize($image->width() * 0.7, $image->height() * 0.7);
        $image->encode('jpg', 50);
        $image->save($imagePath . '/' . $imageName);

        // Return the path to the compressed image
        return '/images/' . $folderName . '/' . $imageName;
    }



    public function uploadImage2(Request $request, $folderName)
    {
        $file = $request->file('car_photo');
        $imageName = $file->hashName();
        $imagePath = public_path('images/' . $folderName);

        // Create the directory if it doesn't exist
        if (!is_dir($imagePath)) {
            mkdir($imagePath, 0755, true);
        }

        // Save the uploaded image to the target folder
        $file->move($imagePath, $imageName);

       // Load and resize the uploaded image
        $image = Image::make($imagePath . '/' . $imageName);
        $image->resize($image->width() * 0.7, $image->height() * 0.7);
        $image->encode('jpg', 50);
        $image->save($imagePath . '/' . $imageName);

        // Return the path to the compressed image
        return '/images/' . $folderName . '/' . $imageName;
    }

    public function uploadImage3 (Request $request , $folderName ) {
        $file = $request->file('resident_card_photo');
        $imageName = $file->hashName();
        $imagePath = public_path('images/' . $folderName);

        // Create the directory if it doesn't exist
        if (!is_dir($imagePath)) {
            mkdir($imagePath, 0755, true);
        }

        // Save the uploaded image to the target folder
        $file->move($imagePath, $imageName);

       // Load and resize the uploaded image
        $image = Image::make($imagePath . '/' . $imageName);
        $image->resize($image->width() * 0.7, $image->height() * 0.7);
        $image->encode('jpg', 50);
        $image->save($imagePath . '/' . $imageName);

        // Return the path to the compressed image
        return '/images/' . $folderName . '/' . $imageName;
    }
    public function uploadImage4 (Request $request , $folderName ) {
        $file = $request->file('document_front_photo');
        $imageName = $file->hashName();
        $imagePath = public_path('images/' . $folderName);

        // Create the directory if it doesn't exist
        if (!is_dir($imagePath)) {
            mkdir($imagePath, 0755, true);
        }

        // Save the uploaded image to the target folder
        $file->move($imagePath, $imageName);

       // Load and resize the uploaded image
        $image = Image::make($imagePath . '/' . $imageName);
        $image->resize($image->width() * 0.7, $image->height() * 0.7);
        $image->encode('jpg', 50);
        $image->save($imagePath . '/' . $imageName);

        // Return the path to the compressed image
        return '/images/' . $folderName . '/' . $imageName;
    }
    public function uploadImage5 (Request $request , $folderName ) {
        $file = $request->file('document_back_photo');
        $imageName = $file->hashName();
        $imagePath = public_path('images/' . $folderName);

        // Create the directory if it doesn't exist
        if (!is_dir($imagePath)) {
            mkdir($imagePath, 0755, true);
        }

        // Save the uploaded image to the target folder
        $file->move($imagePath, $imageName);

       // Load and resize the uploaded image
        $image = Image::make($imagePath . '/' . $imageName);
        $image->resize($image->width() * 0.7, $image->height() * 0.7);
        $image->encode('jpg', 50);
        $image->save($imagePath . '/' . $imageName);

        // Return the path to the compressed image
        return '/images/' . $folderName . '/' . $imageName;
    }
    public function uploadImage6 (Request $request , $folderName ) {
        $file = $request->file('resident_card_photo2');
        $imageName = $file->hashName();
        $imagePath = public_path('images/' . $folderName);

        // Create the directory if it doesn't exist
        if (!is_dir($imagePath)) {
            mkdir($imagePath, 0755, true);
        }

        // Save the uploaded image to the target folder
        $file->move($imagePath, $imageName);

       // Load and resize the uploaded image
        $image = Image::make($imagePath . '/' . $imageName);
        $image->resize($image->width() * 0.7, $image->height() * 0.7);
        $image->encode('jpg', 50);
        $image->save($imagePath . '/' . $imageName);

        // Return the path to the compressed image
        return '/images/' . $folderName . '/' . $imageName;
    }
    public function uploadImage7 (Request $request , $folderName ) {
        $file = $request->file('id_card_photo2');
        $imageName = $file->hashName();
        $imagePath = public_path('images/' . $folderName);

        // Create the directory if it doesn't exist
        if (!is_dir($imagePath)) {
            mkdir($imagePath, 0755, true);
        }

        // Save the uploaded image to the target folder
        $file->move($imagePath, $imageName);

       // Load and resize the uploaded image
        $image = Image::make($imagePath . '/' . $imageName);
        $image->resize($image->width() * 0.7, $image->height() * 0.7);
        $image->encode('jpg', 50);
        $image->save($imagePath . '/' . $imageName);

        // Return the path to the compressed image
        return '/images/' . $folderName . '/' . $imageName;
    }
}








