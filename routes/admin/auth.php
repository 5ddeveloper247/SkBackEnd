<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnd\Auth\RegisterController;
use App\Http\Controllers\BackEnd\Auth\LoginController;
use App\Http\Controllers\BackEnd\Dashboard\DashboarController;
use App\Http\Controllers\BackEnd\Dashboard\AdminController;
use App\Http\Controllers\BackEnd\Dashboard\ContactUsController;
use App\Http\Controllers\BackEnd\Dashboard\MediaController;
use App\Http\Controllers\BackEnd\Dashboard\PropertyController;
use App\Http\Controllers\BackEnd\Dashboard\InquiryController;
use App\Http\Controllers\BackEnd\Dashboard\TestimonialsController;
use App\Http\Controllers\BackEnd\Dashboard\CityController;


//redirect if authenticated
Route::middleware(['admin.redirect'])->group(function () {
    Route::get('/admin/login', [LoginController::class, 'index'])->name('admin.login.view');
    Route::post('/admin/login', [LoginController::class, 'handleLogin'])->name('admin.login.submit');
});



//check role admin before access
Route::middleware(['admin', 'admin.status'])->group(function () {
    Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/admin/list', [AdminController::class, 'adminList'])->name('admin.list');
    Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

    Route::get('/admin/dashboard', [DashboarController::class, 'Dashboard'])->name('admin.dashboard');
    Route::get('/admin/chart/dashboard/ajax', [DashboarController::class, 'chartAjax'])->name('admin.dashboard.chart.ajax');
    Route::post('/admin/dashboard/create/admin', [DashboarController::class, 'createAdmins'])->name('admin.dashboard.create.admin');
    Route::get('/admin/admins', [AdminController::class, 'viewAdmins'])->name('admin.user.admins');
    Route::get('admin/users/admin/destroy/{id}', [AdminController::class, 'destroyAdmins'])->name('admin.user.destroy');


    // Add other admin routes here


    // Add admin user Routes here
    Route::post('/admin/dashboard/user/user', [DashboarController::class, 'createUsers'])->name('admin.dashboard.create.user');
    Route::get('admin/user/list', [AdminController::class, 'userList'])->name('user.list');
    Route::get('/admin/users/guest', [AdminController::class, 'viewUsers'])->name('admin.user.admins');
    Route::get('admin/users/user/destroy/{id}', [AdminController::class, 'destroyUsers'])->name('admin.user.guest.destroy');
    Route::post('admin/users/admin/update/{id}', [AdminController::class, 'updateAdmin'])->name('admin.user.update');
    Route::get('/admin/users', [AdminController::class, 'adminList'])->name('admin.admin.list')->middleware('superadmin');


    // Admin Media Routes here
    Route::post('/admin/dashboard/media/url', [MediaController::class, 'createMedia'])->name('admin.dashboard.create.media.url');
    Route::get('admin/media/list', [MediaController::class, 'mediaList'])->name('admin.media.list');
    Route::get('/admin/media/view', [MediaController::class, 'viewMedia'])->name('admin.media.view');
    Route::get('/admin/media/delete/mediaonly/{id}', [MediaController::class, 'mediaonlyDelete'])->name('admin.media.mediaonly.delete');
    Route::get('/admin/media/delete/mediaurl/{id}', [MediaController::class, 'mediaurlDelete'])->name('admin.media.mediaurl.delete');
    Route::get('admin/media/media/destroy/{id}', [MediaController::class, 'destroyMedia'])->name('admin.media.guest.destroy');
    Route::post('/admin/dashboard/media/upload', [MediaController::class, 'uploadMedia'])->name('admin.dashboard.media.upload');



    //admin property listing
    Route::get('admin/property/listing', [PropertyController::class, 'propertyListing'])->name('admin.property.listing');
    Route::get('admin/property/edit/show/{id}', [PropertyController::class, 'propertyEditShow'])->name('admin.property.edit.show');
    Route::post('admin/property/main/submission', [PropertyController::class, 'propertyMainSubmission'])->name('admin.property.main.submission');
    Route::post('admin/property/main/submission_edit', [PropertyController::class, 'propertyMainSubmission_edit'])->name('admin.property.main.submission.edit');
    Route::get('/admin/property/loadpropertyList', [PropertyController::class, 'loadpropertyList'])->name('admin.property.loadproperty');
    Route::post('/admin/property/status', [PropertyController::class, 'changePropertyStatus'])->name('admin.property.status');
    Route::post('/admin/property/status/pending', [PropertyController::class, 'changePendingPropertyStatus'])->name('admin.property.statu.pendings');
    Route::post('/admin/getpropertydata', [PropertyController::class, 'getPropertyData'])->name('admin.property.getData');
    Route::post('/admin/property/editProperty', [PropertyController::class, 'editPropertyData'])->name('admin.property.edit');
    Route::post('/admin/property/delete', [PropertyController::class, 'deletePropertyData'])->name('admin.property.delete');



    //admin inquiry
    Route::get('admin/inquiry/view', [InquiryController::class, 'viewInquiries'])->name('admin.inquiry.view');
    Route::post('admin/inquiry/update', [InquiryController::class, 'updateInquiries'])->name('admin.inquiry.update');
    Route::post('admin/inquiry/delete', [InquiryController::class, 'deleteInquiries'])->name('admin.inquiry.delete');
    Route::get('/admin/inquiry/view/ajax', [InquiryController::class, 'viewInquiriesAjax'])->name('admin.inquiry.view.ajax');
    Route::get('/admin/inquiry/view/replied/ajax', [InquiryController::class, 'viewRepliedInquiriesAjax'])->name('admin.inquiry.view.replied.ajax');


    //admin/contactus
    Route::get('admin/contact/view', [ContactUsController::class, 'viewContact'])->name('admin.contact.view');
    Route::post('admin/contact/update', [ContactUsController::class, 'updateContact'])->name('admin.contact.update');
    Route::post('admin/contact/delete', [ContactUsController::class, 'deleteContact'])->name('admin.contact.delete');
    Route::post('admin/contact/replied/delete', [ContactUsController::class, 'deleteRepliedContact'])->name('admin.contact.replied.delete');
    Route::get('/admin/contact/view/ajax', [ContactUsController::class, 'viewContactAjax'])->name('admin.contact.view.ajax');
    Route::get('/admin/contact/view/replied/ajax', [ContactUsController::class, 'viewRepliedContactAjax'])->name('admin.contact.view.replied.ajax');

    //testimonials
    Route::get('admin/testimonials/view', [TestimonialsController::class, 'viewTestimonials'])->name('admin.testimonials.view');
    Route::get('/admin/testimonials/view/ajax', [TestimonialsController::class, 'viewTestimonialAjax'])->name('admin.testimonial.view.ajax');
    Route::post('admin/testimonial/delete', [TestimonialsController::class, 'deleteTestimonial'])->name('admin.testimonial.delete');
    Route::post('admin/testimonial/add', [TestimonialsController::class, 'addTestimonial'])->name('admin.testimonial.add');
    Route::post('admin/testimonial/update', [TestimonialsController::class, 'updateTestimonial'])->name('admin.testimonial.update');


    //property update form routes
    Route::get('admin/city/citydata', [PropertyController::class, 'cityData'])->name('admin.city.citydata');
    Route::post('/admin/property/populateAreasLov', [PropertyController::class, 'populateAreasLov'])->name('admin.property.populateAreasLov');
    Route::post('/admin/property/populateLocationLov', [PropertyController::class, 'populateLocationLov'])->name('admin.property.populateLocationLov');
    Route::post('/admin/property/populateSectorLov', [PropertyController::class, 'populateSectorLov'])->name('admin.property.populateSectorLov');

    //city

    Route::get('admin/view/city', [CityController::class, 'index'])->name('admin.city.view');
    Route::post('admin/city/update', [CityController::class, 'updateCity'])->name('admin.city.update');
    Route::post('admin/city/add', [CityController::class, 'addCity'])->name('admin.city.add');
    Route::post('admin/area/add', [CityController::class, 'addArea'])->name('admin.area.add');
    Route::post('admin/location/add', [CityController::class, 'addLocation'])->name('admin.location.add');
    Route::post('admin/sector/add', [CityController::class, 'addSector'])->name('admin.sector.add');
    Route::post('admin/city/delete', [CityController::class, 'deleteCity'])->name('admin.city.delete');
    Route::get('/admin/city/view/ajax', [CityController::class, 'viewCityAjax'])->name('admin.inquiry.view.ajax');


    Route::post('admin/city/populateAreaLov', [CityController::class, 'populateAreaLov'])->name('admin.city.populateAreaLov');
    Route::post('admin/city/populateLocationLov', [CityController::class, 'populateLocationLov'])->name('admin.city.populateLocationLov');

    Route::post('admin/city/getcitydetails', [CityController::class, 'getCityDetails'])->name('admin.city.getcitydetails');
    Route::post('admin/city/update', [CityController::class, 'updateCity'])->name('admin.city.update');



    Route::post('admin/area/getareadetails', [CityController::class, 'getAreaDetails'])->name('admin.area.getareadetails');
    Route::post('admin/area/update', [CityController::class, 'updateArea'])->name('admin.area.update');
    Route::post('admin/area/delete', [CityController::class, 'deleteArea'])->name('admin.area.delete');


    Route::post('admin/location/getlocationdetails', [CityController::class, 'getLocationDetails'])->name('admin.location.getlocationdetails');
    Route::post('admin/location/update', [CityController::class, 'updateLocation'])->name('admin.location.update');
    Route::post('admin/location/delete', [CityController::class, 'deleteLocation'])->name('admin.location.delete');
    Route::post('admin/location/getcityareas', [CityController::class, 'getcityareas'])->name('admin.location.getcityareas');


    Route::post('admin/sector/getsectordetails', [CityController::class, 'getsectorDetails'])->name('admin.sector.getsectordetails');
    Route::post('admin/sector/getarealocations ', [CityController::class, 'getarealocations'])->name('admin.sector.getarealocations ');
    Route::post('admin/sector/update', [CityController::class, 'updatesector'])->name('admin.sector.update');
    Route::post('admin/sector/delete', [CityController::class, 'deleteSector'])->name('admin.sector.delete');
    Route::post('admin/location/getcityareas', [CityController::class, 'getcityareas'])->name('admin.location.getcityareas');
});
