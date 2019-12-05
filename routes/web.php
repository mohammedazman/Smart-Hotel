<?php

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

//customer routes

Route::get('/', function () {
    return view('SmartHotel.index');
});

//customer routes sign in

Route::get('/c_sign_in', function () {
    return view('SmartHotel.c_sign_in');
});

Route::get('/c_login', function () {
    return view('SmartHotel.c_login');
});

Route::get('/c_index', function () {
    return view('SmartHotel.index');
});


Route::get('c_booking_now/{type}', function () {
    return view('SmartHotel.c_booking_now');
});
Route::get('/c_booking_now', function () {
    return view('SmartHotel.c_booking_now');
});

Route::get('/c_control', function () {
    return view('SmartHotel.c_control');
});


//costumer routes for booking

Route::post('/c_booking_sub','C_BookingController@store');
Route::get('/c_account_statement','C_Account_StatementController@index');

Route::get('/c_service','C_ServiceController@index');

Route::get('/c_service/order/{id}','C_ServiceController@order');

Route::post('/contact_us','C_BoxController@store');









Route::get('/admin', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//admin routes
//admin routes for account
Route::get('/account', 'UserController@index');
Route::post('/account', 'UserController@store');
Route::get('/account/edit/{id}','UserController@edit');
Route::post('/account/edit/{id}','UserController@update');
Route::get('/account/delete/{id}','UserController@destroy');

//admin routes for room
Route::get('room','RoomController@index');
Route::post('room','RoomController@store');
Route::get('/room/edit/{id}','RoomController@edit');


//admin routes for booking
Route::get('booking','ReservationController@index');
Route::post('booking','ReservationController@store');
Route::get('/booking/edit/{id}','ReservationController@edit');
Route::post('/booking/edit/{id}','ReservationController@update');
Route::get('/booking/delete/{id}','ReservationController@destroy');


//admin routes for service
Route::get('service','ServiceController@index');
Route::post('service','ServiceController@store');
Route::get('/service/edit/{id}','ServiceController@edit');
Route::post('/service/edit/{id}','ServiceController@update');
Route::get('/service/delete/{id}','ServiceController@destroy');


//admin routes for order
Route::get('order','OrderController@index');
Route::post('order','OrderController@store');
Route::get('/order/edit/{id}','OrderController@edit');
Route::post('/order/edit/{id}','OrderController@update');
Route::get('/order/delete/{id}','OrderController@destroy');

//admin routes for bill
Route::get('bill','BillController@index');
Route::post('bill','BillController@store');
Route::get('/bill/edit/{id}','BillController@edit');
Route::post('/bill/edit/{id}','BillController@update');
Route::get('/bill/delete/{id}','BillController@destroy');

//admin routes for payment
Route::get('payment','PaymentController@index');
Route::post('payment','PaymentController@store');
Route::get('/payment/edit/{id}','PaymentController@edit');
Route::post('/payment/edit/{id}','PaymentController@update');
Route::get('/payment/delete/{id}','PaymentController@destroy');


//admin routes for message
Route::get('message','MessageController@index');
Route::post('message','MessageController@store');
Route::get('/message/edit/{id}','MessageController@edit');
Route::post('/message/edit/{id}','MessageController@update');
Route::get('/message/delete/{id}','MessageController@destroy');

//admin routes for message
Route::get('box','boxController@index');
Route::post('box','boxController@store');
Route::get('/box/edit/{id}','boxController@edit');
Route::post('/box/edit/{id}','boxController@update');
Route::get('/box/delete/{id}','boxController@destroy');









//Receptionist Routes

//Receptionist routes for manage_booking
Route::get('manage_booking','Manage_bookingController@index');
Route::post('manage_booking','Manage_bookingController@store');
Route::get('/manage_booking/edit/{id}','Manage_bookingController@edit');
Route::post('/manage_booking/edit/{id}','Manage_bookingController@update');
Route::get('/manage_booking/delete/{id}','Manage_bookingController@destroy');




//Receptionist routes for manage_booking
Route::get('add_booking','Add_bookingController@index');
Route::post('add_booking','Add_bookingController@store');
Route::get('/add_booking/edit/{id}','Add_bookingController@edit');
Route::post('/add_booking/edit/{id}','Add_bookingController@update');
Route::get('/add_booking/delete/{id}','Add_bookingController@destroy');

//Receptionist routes for room
Route::get('r_room','R_RoomController@index');
Route::post('r_room','R_RoomController@store');
Route::get('/r_room/edit/{id}','R_RoomController@edit');
Route::post('/r_room/edit/{id}','R_RoomController@update');
Route::get('/r_room/delete/{id}','R_RoomController@destroy');


//Receptionist routes for room_booking
Route::get('r_room_booking','R_Room_bookingController@index');
Route::post('r_room_booking','R_Room_bookingController@store');
Route::get('/r_room_booking/edit/{id}','R_Room_bookingController@edit');
Route::post('/r_room_booking/edit/{id}','R_Room_bookingController@update');
Route::get('/r_room_booking/delete/{id}','R_Room_bookingController@destroy');


//Receptionist routes for payment
Route::get('p_payment','P_PaymentController@index');
Route::post('p_payment','P_PaymentController@store');
Route::get('/p_payment/edit/{id}','P_PaymentController@edit');
Route::post('/p_payment/edit/{id}','P_PaymentController@update');
Route::get('/p_payment/delete/{id}','P_PaymentController@destroy');

//Receptionist routes for bill
Route::get('r_bill','R_BillController@index');
Route::post('r_bill','R_BillController@store');
Route::get('/r_bill/edit/{id}','R_BillController@edit');
Route::post('/r_bill/edit/{id}','R_BillController@update');
Route::get('/r_bill/delete/{id}','R_BillController@destroy');

//Receptionist routes for confirmed_booking
Route::get('confirmed_booking','Confirmed_bookingController@index');
Route::post('confirmed_booking','Confirmed_bookingController@store');
Route::get('/confirmed_booking/edit/{id}','Confirmed_bookingController@edit');
Route::post('/confirmed_booking/edit/{id}','Confirmed_bookingController@update');
Route::get('/confirmed_booking/delete/{id}','Confirmed_bookingController@destroy');


//Receptionist routes for canceled_booking
Route::get('canceled_booking','Canceled_bookingController@index');
Route::post('canceled_booking','Canceled_bookingController@store');
Route::get('/canceled_booking/edit/{id}','Canceled_bookingController@edit');
Route::post('/canceled_booking/edit/{id}','Canceled_bookingController@update');
Route::get('/canceled_booking/delete/{id}','Canceled_bookingController@destroy');


//Receptionist routes for order_booking

Route::get('order_booking','Order_bookingController@index');
Route::post('order_booking','Order_bookingController@store');
Route::get('/order_booking/edit/{id}','Order_bookingController@edit');
Route::get('/order_booking/confirm/{id}','Order_bookingController@confirm');
Route::get('/order_booking/cancel/{id}','Order_bookingController@cancel');
Route::post('/order_booking/edit/{id}','Order_bookingController@update');
Route::get('/order_booking/delete/{id}','Order_bookingController@destroy');

//Receptionist routes for statement_booking

Route::get('statement_booking','Statement_bookingController@index');
Route::get('/statement_booking/details/{id}','Statement_bookingController@show');


//Supervisor Routes



//Supervisor routes for service
Route::get('s_service','S_ServiceController@index');
Route::post('s_service','S_ServiceController@store');
Route::get('/s_service/edit/{id}','S_ServiceController@edit');
Route::post('/s_service/edit/{id}','S_ServiceController@update');
Route::get('/s_service/delete/{id}','S_ServiceController@destroy');


//Supervisor routes for add_order
Route::get('add_order','Add_orderController@index');
Route::post('add_order','Add_orderController@store');



//Supervisor routes for manage_order
Route::get('manage_order','Manage_orderController@index');
Route::post('manage_order','Manage_orderController@store');
Route::get('/manage_order/edit/{id}','Manage_orderController@edit');
Route::post('/manage_order/edit/{id}','Manage_orderController@update');
Route::get('/manage_order/delete/{id}','Manage_orderController@destroy');

//Supervisor routes for current_order
Route::get('current_order','Current_orderController@index');
Route::post('current_order','Current_orderController@store');
Route::get('/current_order/edit/{id}','Current_orderController@edit');
Route::post('/current_order/edit/{id}','Current_orderController@update');
Route::get('/current_order/delete/{id}','Current_orderController@destroy');
Route::get('/current_order/done/{id}','Current_orderController@done');
Route::get('/current_order/in/{id}','Current_orderController@in');
Route::get('/current_order/cancel/{id}','Current_orderController@cancel');

//Supervisor routes for old_order
Route::get('old_order','Old_orderController@index');
Route::post('old_order','Old_orderController@store');
Route::get('/old_order/edit/{id}','Old_orderController@edit');
Route::post('/old_order/edit/{id}','Old_orderController@update');
Route::get('/old_order/delete/{id}','Old_orderController@destroy');


//Supervisor routes for canceled_order
Route::get('canceled_order','Canceled_orderController@index');
Route::post('canceled_order','Canceled_orderController@store');
Route::get('/canceled_order/edit/{id}','Canceled_orderController@edit');
Route::post('/canceled_order/edit/{id}','Canceled_orderController@update');
Route::get('/canceled_order/delete/{id}','Canceled_orderController@destroy');


//Supervisor routes for s_message
Route::get('s_message','S_messageController@index');
Route::post('s_message','S_messageController@store');
Route::get('/s_message/edit/{id}','S_messageController@edit');
Route::post('/s_message/edit/{id}','S_messageController@update');
Route::get('/s_message/delete/{id}','S_messageController@destroy');

//Supervisor routes for box
Route::get('s_box','s_boxController@index');
Route::post('s_box','s_boxController@store');
Route::get('/s_box/edit/{id}','s_boxController@edit');
Route::post('/s_box/edit/{id}','s_boxController@update');
Route::get('/s_box/delete/{id}','s_boxController@destroy');


//Receptionist routes for room
Route::get('s_room','S_RoomController@index');
Route::post('s_room','S_RoomController@store');
Route::get('/s_room/edit/{id}','S_RoomController@edit');
Route::post('/s_room/edit/{id}','S_RoomController@update');
Route::get('/s_room/delete/{id}','S_RoomController@destroy');


//Receptionist routes for room_booking
Route::get('s_room_booking','S_Room_bookingController@index');
Route::post('s_room_booking','S_Room_bookingController@store');
Route::get('/s_room_booking/edit/{id}','S_Room_bookingController@edit');
Route::post('/s_room_booking/edit/{id}','S_Room_bookingController@update');
Route::get('/s_room_booking/delete/{id}','S_Room_bookingController@destroy');