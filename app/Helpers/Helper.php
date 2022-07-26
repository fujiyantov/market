<?php

function productImageUrl($fileName)
{
    if (env('APP_ENV') == 'production') {
        return  env('STORAGE_URL_PROD') . '/products/images/' . $fileName;
    } else {
        // return env('APP_ENV');
        return  env('STORAGE_URL_LOCAL') . '/products/images/' . $fileName;
    }
}

function productImageGalleryUrl($fileName)
{
    if (env('APP_ENV') == 'production') {
        return  env('STORAGE_URL_PROD') . '/products/gallery/' . $fileName;
    } else {
        return  env('STORAGE_URL_LOCAL') . '/products/gallery/' . $fileName;
    }
}

function travelImageUrl($fileName)
{
    if (env('APP_ENV') == 'production') {
        return  env('STORAGE_URL_PROD') . '/trips/images/' . $fileName;
    } else {
        return  env('STORAGE_URL_LOCAL') . '/trips/images/' . $fileName;
    }
}

function travelImageGalleryUrl($fileName)
{
    if (env('APP_ENV') == 'production') {
        return  env('STORAGE_URL_PROD') . '/trips/gallery/' . $fileName;
    } else {
        return  env('STORAGE_URL_LOCAL') . '/trips/gallery/' . $fileName;
    }
}
