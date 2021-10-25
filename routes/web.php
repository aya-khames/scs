<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// specify the url and the action => then go to the controller

Route::get('/', function () {
    return view('guest.landing');
});
Route::get('/home', function () {
    return view('guest.home');
});
Route::get('/sup', function () {
    return view('guest.supply');
});
Route::group(['middleware' => 'prevent'],function(){
    Auth::routes();
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/start', function () {
            return view('employee.start');
        })->middleware('isClient');

        Route::middleware(['isAccountant', 'isOperation', 'isClient'])->group(function (){
            Route::get('/unsafen', function () {
                return view('employee.unsafeNew');
            });
            Route::get('/unsafed', function () {
                return view('employee.unsafeDes');
            });
            Route::get('/unsafep', function () {
                return view('employee.unsafePrint');
            });
            Route::get('/unsafes', function () {
                return view('employee.unsafeSearch');
            });
            Route::get('/dpin', function () {
                return view('employee.DPINew');
            });
            Route::get('/dpip', function () {
                return view('employee.DPIPrint');
            });
            Route::get('/mpin', function () {
                return view('employee.MPINew');
            });
            Route::get('/mpip', function () {
                return view('employee.MPIPrint');
            });
            Route::get('/walln', function () {
                return view('employee.wallThickNew');
            });
            Route::get('/walld', function () {
                return view('employee.wallThickDes');
            });
            Route::get('/wallp', function () {
                return view('employee.wallThickPrint');
            });
            Route::get('/tvn', function () {
                return view('employee.TVNew');
            });
            Route::get('/tvd', function () {
                return view('employee.TVDes');
            });

            Route::get('/tvp', function () {
                return view('employee.TVPrint');
            });
            Route::get('/tmvmn', function () {
                return view('employee.TMVMNew');
            });
            Route::get('/tmvmd', function () {
                return view('employee.TMVMDes');
            });
            Route::get('/tmvmp', function () {
                return view('employee.TMVMPrint');
            });
            Route::get('/cranep', function () {
                return view('employee.cranePrint');
            });
            Route::get('/cranen', function () {
                return view('employee.craneNew');
            });
            Route::get('/cranes', function () {
                return view('employee.craneSearch');
            });
            Route::get('/crawler', function () {
                return view('employee.crawler');
            });
            Route::get('/mob', function () {
                return view('employee.mobile');
            });
            Route::get('/tower', function () {
                return view('employee.tower');
            });
            Route::get('/compn', function () {
                return view('employee.compNew');
            });
            Route::get('/compd', function () {
                return view('employee.compDes');
            });
            Route::get('/compp', function () {
                return view('employee.compPrint');
            });
            Route::get('/cdn', function () {
                return view('employee.CDN');
            });
        });
        Route::middleware(['isAccountant', 'isClient'])->group(function (){
            Route::get('/addcont', function () {
                return view('employee.addContactPerson');
            });
            Route::get('/dnoten', function () {
                return view('employee.dNoteNew');
            });
            Route::get('/dnoted', function () {
                return view('employee.dNoteDes');
            });
            Route::get('/dnotep', function () {
                return view('employee.dNotePrint');
            });
            Route::get('/hireofn', function () {
                return view('employee.hireOFNew');
            });
            Route::get('/hireofp', function () {
                return view('employee.hireOFPrint');
            });
            //client
            Route::get('/page', 'SCS\ClientController@create');
            Route::post('/store', 'SCS\ClientController@insertClient')-> name('createClient');
            Route::post('/edit', 'SCS\ClientController@editClient')-> name('edit');
            // Route::post('/edit', 'ClientController@searchClient')-> name('searchClient');

            Route::post('/insertcp', 'SCS\ClientController@insertCP')-> name('contactPerson');
            Route::post('/editcp', 'SCS\ClientController@editCP')-> name('editClient');
            Route::post('/deletecp', 'SCS\ClientController@deleteCP')-> name('deleteCont');

//        Route::get('/quoten', function () {
//            return view('employee.quotationNew');
//        });
            Route::get('/quoted', function () {
                return view('employee.quotationDes');
            });
            Route::get('/quotep', function () {
                return view('employee.quotationPrint');
            });

            //quotation
            Route::get('/quoten', 'SCS\QuoteController@showQuotPage')->name('show');
            Route::post('/storeQuote', 'SCS\QuoteController@insertQuote')-> name('insertQuote');
            Route::post('/editQuote', 'SCS\QuoteController@editQuote')-> name('editQuote');

            Route::post('/quotemm', 'SCS\QuoteController@deleteQD')->name('deleteQuoteDesc');
            Route::post('/editQuoteDes', 'SCS\QuoteController@editQD')-> name('editQuoteDesc');
            Route::post('/insertQuoteDes', 'SCS\QuoteController@insertQD')-> name('insertQuoteDesc');


        });
        Route::middleware(['isSecretary', 'isClient'])->group(function (){
            Route::get('/addcont', function () {
                return view('employee.addContactPerson');
            });
            Route::get('/workd', function () {
                return view('employee.workDes');
            });

            Route::get('/workp', function () {
                return view('employee.workPrint');
            });


            Route::get('/invp', function () {
                return view('employee.invoicePrint');
            });
            Route::get('/invc', function () {
                return view('employee.invoiceCollect');
            });
            Route::get('/dnoten', function () {
                return view('employee.dNoteNew');
            });
            Route::get('/dnoted', function () {
                return view('employee.dNoteDes');
            });
            Route::get('/dnotep', function () {
                return view('employee.dNotePrint');
            });
            Route::get('/hireofn', function () {
                return view('employee.hireOFNew');
            });
            Route::get('/hireofp', function () {
                return view('employee.hireOFPrint');
            });


            //client
            Route::get('/page', 'SCS\ClientController@create');
            Route::post('/store', 'SCS\ClientController@insertClient')-> name('createClient');
            Route::post('/edit', 'SCS\ClientController@editClient')-> name('edit');
            // Route::post('/edit', 'ClientController@searchClient')-> name('searchClient');

            Route::post('/insertcp', 'SCS\ClientController@insertCP')-> name('contactPerson');
            Route::post('/editcp', 'SCS\ClientController@editCP')-> name('editClient');
            Route::post('/deletecp', 'SCS\ClientController@deleteCP')-> name('deleteCont');

            ###############work###################################################

            Route::get('/workn', 'SCS\WorkController@showWorkNew')->name('showWorkNew');
            Route::post('/workedit', 'SCS\WorkController@editWN')->name('editWorkNew');
            Route::post('/workinsert', 'SCS\WorkController@insertWN')->name('insertWorkNew');

            //   Route::get('/workd', 'SCS\WorkController@showWorkDes');
            Route::post('/workdesdelete', 'SCS\WorkController@deleteWD')->name('deleteWorkDes');
            Route::post('/workdesedit', 'SCS\WorkController@editWD')->name('editWorkDes');
            Route::post('/workdesinsert', 'SCS\WorkController@insertWD')->name('insertWorkDes');

            ########################invoice######################################33

            Route::get('/invn', 'SCS\InvoiceController@index');
            Route::post('/ins-inv-new', 'SCS\InvoiceController@insertInvoce')->name('insertInvoiceN');
            Route::post('/edit-inv-new', 'SCS\InvoiceController@editInvoice')->name('editInvoiceN');
            Route::post('/del-inv-new', 'SCS\InvoiceController@deleteInvoice')->name('deleteInvoiceN');
            Route::get('/findAdd', 'SCS\InvoiceController@findAdd')->name('findAdd');

            Route::get('/invd', function () {
                return view('employee.invoiceDes');
            });
            Route::post('/ins-inv-des', 'SCS\InvoiceController@insertInvoceD')->name('insertInvoiceD');
            Route::post('/edit-inv-des', 'SCS\InvoiceController@editInvoiceD')->name('editInvoiceN');
            Route::post('/del-inv-des', 'SCS\InvoiceController@deleteInvoiceD')->name('deleteInvoiceN');

        });
        Route::middleware(['isAccountant', 'isOperation', 'isSecretary', 'isAdmin'])->group(function (){
            Route::get('/getcert', function () {
                return view('client.getCert');
            });
        });

//    Route::post('/workdesedit', 'SCS\WorkController@editWD')->name('editWorkDes');
//    Route::post('/workdesinsert', 'SCS\WorkController@insertWD')->name('insertWorkDes');
//    Route::post('/workdesedit', 'SCS\WorkController@deleteWD')->name('deleteWorkDes');

        // Route::get('/tvn', 'ClientController@getData');


    });


});


