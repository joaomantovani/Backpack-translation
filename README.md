# Backpack\PT-BR Translation

Languages files to translate the [Laravel Backpack Admin Panel](https://backpackforlaravel.com/)


## Install

This extra field is just a collection of controlles/models/migrations and views, so, you just need to download and put in your laravel folder.

#### Installation type (A) - download


1) Download the last version of this repository.

2) Paste the 'app', 'migrations' and 'resources' folders over your projects (merge them). No file overwrite warnings should come up.

3) Put this in your Backpack Crud Controller

```
// ------ CRUD FIELDS
$this->crud->addField([
// Image manager
  'label' => "Upload images",
  'name' => "images",
  'type' => 'image_manager',
  'upload' => true,
], 'update');
```

4) Run the migration to have the database table we need:
```
php artisan migrate
```

5) Add upload to your routes file:

```
Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth'], 'namespace' => 'Admin'], function () {
    // Upload crud
    Route::post('server/upload/{id}/save', 'UploadController@save');
    Route::delete('server/upload/delete/{uuid}', 'UploadController@delete');
    Route::get('server/upload/recover/{id}', 'UploadController@recover');
});
```
## Package installation

/**
To do
**/

## Change log

/**
To do
**/

## Contributing

Any help with new features/upgrades/language would be appreciated
