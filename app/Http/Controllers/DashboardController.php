<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Google\Cloud\Vision\V1\Client\ImageAnnotatorClient;
use Google\Cloud\Vision\V1\AnnotateImageRequest;

use Google\Cloud\Vision\V1\Feature;
use Google\Cloud\Vision\V1\Image;

class DashboardController extends Controller
{
    public function index(){
        // $client = new ImageAnnotatorClient([
        //     'credentials' => storage_path('app/google/vision-credentials.json'),
        // ]);
    
        // $imagePath = public_path('image/test.jpeg');
        // $imageData = file_get_contents($imagePath);
    
        // $image = new Image();
        // $image->setContent($imageData);
    
        // $feature = new Feature();
        // $feature->setType(Feature\Type::TEXT_DETECTION);
    
        // $request = new AnnotateImageRequest();
        // $request->setImage($image);
        // $request->setFeatures([$feature]);
    
        // $response = $client->batchAnnotateImages([$request]);
        // $annotations = $response->getResponses()[0]->getTextAnnotations();
    
        // foreach ($annotations as $annotation) {
        //     echo $annotation->getDescription() . "<br>";
        // }
    
        // $client->close();

        // Optionally return to a page:
        return Inertia::render('Dashboard');
    }
}
