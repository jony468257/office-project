<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

if (!function_exists('anyTypeFileUpload')) {
    /**
     * @param $inputFile
     * @param $folderName
     * @return string
     */
    function anyTypeFileUpload($inputFile, $folderName): string
    {
        $fileName = $folderName . '_' . time() . '.' . $inputFile->extension();
        $inputFile->move(storage_path('app/public/' . $folderName), $fileName);
        return $fileName;
    }
}

if (!function_exists('imageCustomization')) {
    /**
     * @param $file
     * @param $width
     * @param $height
     * @param $folderName
     * @param null $fileName
     * @param null $workStatus
     * @param int $quality
     * @return string
     */
    function imageCustomization($file, $width, $height, $folderName, $fileName = null, $workStatus = null, int $quality = 90): string
    {
        try {
            // Unique name generation
            $currentDate = Carbon::now()->toDateString();
            $imageName = $folderName . '_' . ($fileName ?? 'image') . '_' . time() . '.webp';

            // Ensure folder exists
            if (!Storage::disk('public')->exists($folderName)) {
                Storage::disk('public')->makeDirectory($folderName);
            }

            // Image processing
            $postImage = Image::make($file)->encode('webp', $quality);

            if ($workStatus === 'aspectWidth') {
                // Resize maintaining aspect ratio
                $postImage->resize($width, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            } else {
                // Custom height and width
                $postImage->resize($width, $height);
            }

            // Save the image to storage
            Storage::disk('public')->put($folderName . '/' . $imageName, $postImage->stream());

            return $imageName;
        } catch (\Exception $e) {
            Log::error('Image customization error: ' . $e->getMessage());
            throw new \RuntimeException('Failed to process and save the image.');
        }
    }

}

