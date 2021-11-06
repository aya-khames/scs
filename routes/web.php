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
            Route::get('/unsafen', 'SCS\UnsafeController@showunsafe');
            Route::get('/generateRep', 'SCS\UnsafeController@generateRep')->name('generateRep');
            Route::post('/insertUS', 'SCS\UnsafeController@insertUS')->name('insertUS');
            Route::post('/insertUSD', 'SCS\UnsafeController@insertUSD')->name('insertUSD');
            Route::get('/unsafed', function () {
                return view('employee.unsafe.unsafeDes');
            });
            Route::get('/unsafep', function () {
                return view('employee.unsafe.unsafePrint');
            });
            Route::get('/unsafes', function () {
                return view('employee.unsafe.unsafeSearch');
            });

            Route::get('/dpin', 'SCS\NdtdpiController@showNewDpi');
            Route::get('/getCert', 'SCS\NdtdpiController@getCert')->name('getCert');
            Route::post('/insertDPINew', 'SCS\NdtdpiController@insertDPINew')->name('insertDPINew');
            Route::get('/dpip', function () {
                return view('employee.ndt.dpi.DPIPrint');
            });
            Route::get('/mpin', 'SCS\NdtmpiController@showNewMpi');
            Route::post('/insertMPINew', 'SCS\NdtmpiController@insertMPINew')->name('insertMPINew');


            Route::get('/walln', 'SCS\WallController@showNewWall');
            Route::post('/insertWallN', 'SCS\WallController@insertWallN')->name('insertWallN');
            Route::get('/walld', function () {
                return view('employee.wall.wallThickDes');
            });
            Route::get('/wallp', function () {
                return view('employee.wall.wallThickPrint');
            });
            Route::get('/tvn', 'SCS\TestvController@showTVN');
            Route::post('/insertTVNew', 'SCS\TestvController@insertTVNew')->name('insertTVNew');
            Route::get('/tvd', function () {
                return view('employee.test.testvisual.TVDes');
            });
            Route::get('/tvp', function () {
                return view('employee.test.testvisual.TVPrint');
            });
            Route::get('/tmvmn', 'SCS\TestmpiController@showTVM');
            Route::post('/insertTVMNew', 'SCS\TestmpiController@insertTVMNew')->name('insertTVMNew');
            Route::get('/tmvmd', function () {
                return view('employee.test.testmpi.TMVMDes');
            });
            Route::get('/tmvmp', function () {
                return view('employee.test.testmpi.TMVMPrint');
            });
            Route::get('/cranep', function () {
                return view('employee.crane.cranePrint');
            });
            Route::get('/cranen', function () {
                return view('employee.crane.craneNew');
            });
            Route::get('/cranes', function () {
                return view('employee.crane.craneSearch');
            });
            Route::get('/crawler', function () {
                return view('employee.crane.crawler');
            });
            Route::get('/mob', function () {
                return view('employee.crane.mobile');
            });
            Route::get('/tower', function () {
                return view('employee.crane.tower');
            });

            Route::get('/compn', 'SCS\CompressorController@showNewComp');
            Route::post('/insertComp', 'SCS\CompressorController@insertComp')->name('insertComp');

            Route::get('/compd', function () {
                return view('employee.compressor.compDes');
            });
            Route::get('/compp', function () {
                return view('employee.compressor.compPrint');
            });

            Route::get('/cdn', 'SCS\CdnController@showcdn');
            Route::get('/getCP', 'SCS\CdnController@getCP')->name('getCP');
        });
        Route::middleware(['isAccountant', 'isClient'])->group(function (){
            //quotation
            Route::get('/quoten', 'SCS\QuoteController@showQuotPage')->name('show');
            Route::post('/searchClientNew', 'SCS\ClientController@searchClientNew')->name('searchClientNew');

            Route::post('/storeQuote', 'SCS\QuoteController@insertQuote')-> name('insertQuote');
            Route::post('/editQuote', 'SCS\QuoteController@editQuote')-> name('editQuote');

            Route::get('/findCP', 'SCS\QuoteController@findCP')->name('findCP');

            Route::post('/quotemm', 'SCS\QuoteController@deleteQD')->name('deleteQuoteDesc');
            Route::post('/editQuoteDes', 'SCS\QuoteController@editQD')-> name('editQuoteDesc');
            Route::post('/insertQuoteDes', 'SCS\QuoteController@insertQD')-> name('insertQuoteDesc');

            Route::get('/quoted', function () {
                return view('employee.quotation.quotationDes');
            });
            Route::get('/quotep', function () {
                return view('employee.quotation.quotationPrint');
            });


        });
        Route::middleware(['isSecretary', 'isAccountant', 'isClient'])->group(function (){


            Route::get('/dnoten', 'SCS\DeliveryController@showDNote');
            Route::get('/dnoted', function () {
                return view('employee.delivery.dNoteDes');
            });
            Route::get('/dnotep', function () {
                return view('employee.delivery.dNotePrint');
            });
            Route::get('/dynamicDP', 'SCS\DeliveryController@dynamicDP')->name('dynamicDP');
            Route::get('/dnID', 'SCS\DeliveryController@dnID')->name('dnID');
            Route::post('/insertdnote', 'SCS\DeliveryController@insertDNote')->name('insertdnote');
##################hire#################################################
            Route::get('/hireofn', 'SCS\HireController@showHire');
            Route::post('/insertHire', 'SCS\HireController@insertHire')->name('insertHire');
            Route::get('/dynamicHire', 'SCS\HireController@dynamicHire')->name('dynamicHire');
            Route::get('/generateHire', 'SCS\HireController@generateHire')->name('generateHire');
//            Route::get('/hireofn', function () {
//                return view('employee.hire.hireOFNew');
//            });
            Route::get('/hireofp', function () {
                return view('employee.hire.hireOFPrint');
            });
            //client
            Route::get('/page', 'SCS\ClientController@create');
            Route::post('/store', 'SCS\ClientController@insertClient')-> name('createClient');
            Route::post('/edit', 'SCS\ClientController@editClient')-> name('edit');

            Route::get('/addcont', function () {
                return view('employee.client.addContactPerson');
            });

            Route::post('/insertcp', 'SCS\ClientController@insertCP')-> name('contactPerson');
            Route::post('/editcp', 'SCS\ClientController@editCP')-> name('editClient');
            Route::post('/deletecp', 'SCS\ClientController@deleteCP')-> name('deleteCont');

        });
        Route::middleware(['isSecretary', 'isClient'])->group(function (){

            ###############work###################################################

            Route::get('/workn', 'SCS\WorkController@showWorkNew')->name('showWorkNew');
            Route::get('/findQ', 'SCS\WorkController@findQ')->name('findQ');
            Route::get('/findCQ', 'SCS\WorkController@findCQ')->name('findCQ');
            Route::post('/workedit', 'SCS\WorkController@editWN')->name('editWorkNew');
            Route::post('/workinsert', 'SCS\WorkController@insertWN')->name('insertWorkNew');
            Route::post('/workdesdelete', 'SCS\WorkController@deleteWD')->name('deleteWorkDes');
            Route::post('/workdesedit', 'SCS\WorkController@editWD')->name('editWorkDes');
            Route::post('/workdesinsert', 'SCS\WorkController@insertWD')->name('insertWorkDes');

            Route::get('/workd', function () {
                return view('employee.work.workDes');
            });
            Route::get('/workp', function () {
                return view('employee.work.workPrint');
            });

            ########################invoice######################################33

            Route::get('/invn', 'SCS\InvoiceController@index');
            Route::post('/ins-inv-new', 'SCS\InvoiceController@insertInvoce')->name('insertInvoiceN');
            Route::post('/edit-inv-new', 'SCS\InvoiceController@editInvoice')->name('editInvoiceN');
            Route::post('/del-inv-new', 'SCS\InvoiceController@deleteInvoice')->name('deleteInvoiceN');
            Route::get('/findAdd', 'SCS\InvoiceController@findAdd')->name('findAdd');
            Route::get('/generateInvoice', 'SCS\InvoiceController@generateInvoice')->name('generateInvoice');

            Route::get('/invd', function () {
                return view('employee.invoice.invoiceDes');
            });
            Route::post('/ins-inv-des', 'SCS\InvoiceController@insertInvoceD')->name('insertInvoiceD');
            Route::post('/edit-inv-des', 'SCS\InvoiceController@editInvoiceD')->name('editInvoiceN');
            Route::post('/del-inv-des', 'SCS\InvoiceController@deleteInvoiceD')->name('deleteInvoiceN');

            Route::get('/invp', function () {
                return view('employee.invoice.invoicePrint');
            });
            Route::get('/invc', function () {
                return view('employee.invoice.invoiceCollect');
            });

        });
        Route::middleware(['isAccountant', 'isOperation', 'isSecretary', 'isAdmin'])->group(function (){
            Route::get('/getcert', function () {
                return view('client.getCert');
            });
        });
    });


});


