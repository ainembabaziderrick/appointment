<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PediatricsController;
use App\Http\Controllers\DermatologyController;
use App\Http\Controllers\OncologyController;
use App\Http\Controllers\PsychiatryController;
use App\Http\Controllers\CardiologyController;
use App\Http\Controllers\GynaecologyController;
use App\Http\Controllers\RadiologyController;
use App\Http\Controllers\HospitalController;    


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.file');
});


Route::get('/register', [AuthController::class, 'Register'])->name('register');
Route::get('/login', [AuthController::class, 'Login'])->name('login');
Route::get('verify/{token}', [AuthController::class, 'verify'])->name('verify');

Route::post('register_post', [AuthController::class, 'register_post']);
Route::post('login_post', [AuthController::class, 'login_post']);


Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'Dashboard']);

    // Appointments
    Route::get('admin/appointments', [AppointmentController::class, 'appointments']);
    Route::get('admin/appointments/add', [AppointmentController::class, 'add_appointments']);
    Route::post('admin/appointments/add', [AppointmentController::class, 'insert_add_appointments']);
    Route::get('/admin/appointments/edit/{id}', [AppointmentController::class, 'Editappointments']);
    Route::post('/admin/appointments/update/{id}', [AppointmentController::class, 'Updateappointments']);
    Route::get('/admin/appointments/delete/{id}', [AppointmentController::class, 'Deleteappointments']);

    // Pediatrics
    Route::get('admin/pediatrics', [PediatricsController::class, 'pediatrics']);
    Route::get('admin/pediatrics/add', [PediatricsController::class, 'add_pediatrics']);
    Route::post('admin/pediatrics/add', [PediatricsController::class, 'insert_add_pediatrics']);
    Route::get('/admin/pediatrics/edit/{id}', [PediatricsController::class, 'Editpediatrics']);
    Route::post('/admin/pediatrics/update/{id}', [PediatricsController::class, 'Updatepediatrics']);
    Route::get('/admin/pediatrics/delete/{id}', [PediatricsController::class, 'Deletepediatrics']);

    // Dermatology
    Route::get('admin/dermatology', [DermatologyController::class, 'dermatology']);
    Route::get('admin/dermatology/add', [DermatologyController::class, 'add_dermatology']);
    Route::post('admin/dermatology/add', [DermatologyController::class, 'insert_add_dermatology']);
    Route::get('/admin/dermatology/edit/{id}', [DermatologyController::class, 'Editdermatology']);
    Route::post('/admin/dermatology/update/{id}', [DermatologyController::class, 'Updatedermatology']);
    Route::get('/admin/dermatology/delete/{id}', [DermatologyController::class, 'Deletedermatology']);

    // Oncology
    Route::get('admin/oncology', [OncologyController::class, 'oncology']);
    Route::get('admin/oncology/add', [OncologyController::class, 'add_oncology']);
    Route::post('admin/oncology/add', [OncologyController::class, 'insert_add_oncology']);
    Route::get('/admin/oncology/edit/{id}', [OncologyController::class, 'Editoncology']);
    Route::post('/admin/oncology/update/{id}', [OncologyController::class, 'Updateoncology']);
    Route::get('/admin/oncology/delete/{id}', [OncologyController::class, 'Deleteoncology']);

    // Psychiatry
    Route::get('admin/psychiatry', [PsychiatryController::class, 'psychiatry']);
    Route::get('admin/psychiatry/add', [PsychiatryController::class, 'add_psychiatry']);
    Route::post('admin/psychiatry/add', [PsychiatryController::class, 'insert_add_psychiatry']);
    Route::get('/admin/psychiatry/edit/{id}', [PsychiatryController::class, 'Editpsychiatry']);
    Route::post('/admin/psychiatry/update/{id}', [PsychiatryController::class, 'Updatepsychiatry']);
    Route::get('/admin/psychiatry/delete/{id}', [PsychiatryController::class, 'Deletepsychiatry']);

    // Cardiology
    Route::get('admin/cardiology', [CardiologyController::class, 'cardiology']);
    Route::get('admin/cardiology/add', [CardiologyController::class, 'add_cardiology']);
    Route::post('admin/cardiology/add', [CardiologyController::class, 'insert_add_cardiology']);
    Route::get('/admin/cardiology/edit/{id}', [CardiologyController::class, 'Editcardiology']);
    Route::post('/admin/cardiology/update/{id}', [CardiologyController::class, 'Updatecardiology']);
    Route::get('/admin/cardiology/delete/{id}', [CardiologyController::class, 'Deletecardiology']);

    // Hospital
    Route::get('admin/hospital', [HospitalController::class, 'hospital']);
    Route::get('admin/hospital/add', [HospitalController::class, 'add_hospital']);
    Route::post('admin/hospital/add', [HospitalController::class, 'insert_add_hospital']);
    Route::get('/admin/hospital/edit/{id}', [HospitalController::class, 'Edithospital']);
    Route::post('/admin/hospital/update/{id}', [HospitalController::class, 'Updatehospital']);
    Route::get('/admin/hospital/delete/{id}', [HospitalController::class, 'Deletehospital']);
    
    // Gynaecology
    Route::get('admin/gynaecology', [GynaecologyController::class, 'gynaecology']);
    Route::get('admin/gynaecology/add', [GynaecologyController::class, 'add_gynaecology']);
    Route::post('admin/gynaecology/add', [GynaecologyController::class, 'insert_add_gynaecology']);
    Route::get('/admin/gynaecology/edit/{id}', [GynaecologyController::class, 'Editgynaecology']);
    Route::post('/admin/gynaecology/update/{id}', [GynaecologyController::class, 'Updategynaecology']);
    Route::get('/admin/gynaecology/delete/{id}', [GynaecologyController::class, 'Deletegynaecology']);

    // Radiology
    Route::get('admin/radiology', [RadiologyController::class, 'radiology']);
    Route::get('admin/radiology/add', [RadiologyController::class, 'add_radiology']);
    Route::post('admin/radiology/add', [RadiologyController::class, 'insert_add_radiology']);
    Route::get('/admin/radiology/edit/{id}', [RadiologyController::class, 'Editradiology']);
    Route::post('/admin/radiology/update/{id}', [RadiologyController::class, 'Updateradiology']);
    Route::get('/admin/radiology/delete/{id}', [RadiologyController::class, 'Deleteradiology']);

    // users
    Route::get('admin/user', [UserController::class, 'users']);
    Route::get('admin/user/add', [UserController::class, 'add_user']);
    Route::post('admin/user/add', [UserController::class, 'insert_add_user']);
    Route::get('/admin/user/delete/{id}', [UserController::class, 'DeleteUser']);

});

Route::group(['middleware' => 'doctor'], function () {
    Route::get('doctor/dashboard', [DashboardController::class, 'DoctorDashboard']);

    // Appointments
    Route::get('doctor/appointments', [AppointmentController::class, 'doctorappointments']);
    Route::get('doctor/appointments/add', [AppointmentController::class, 'doctoradd_appointments']);
    Route::post('doctor/appointments/add', [AppointmentController::class, 'doctorinsert_add_appointments']);
    Route::get('/doctor/appointments/edit/{id}', [AppointmentController::class, 'Editdoctor']);
    Route::post('/doctor/appointments/update/{id}', [AppointmentController::class, 'Updatedoctor']);
    Route::get('/doctor/appointments/delete/{id}', [AppointmentController::class, 'doctorDeleteappointments']);


});

Route::group(['middleware' => 'patient'], function () {
    Route::get('patient/dashboard', [DashboardController::class, 'patientDashboard']);

    // Appointments

    Route::get('patient/appointments/add', [AppointmentController::class, 'patient_add_appointments']);
    Route::post('patient/appointments/add', [AppointmentController::class, 'patient_insert_add_appointments']);

    // Pediatrics
    Route::get('patient/pediatrics', [PediatricsController::class, 'patient_pediatrics']);
    Route::get('patient/pediatrics/add', [PediatricsController::class, 'patient_add_pediatrics']);
    Route::post('patient/pediatrics/add', [AppointmentController::class, 'patient_insert_add_pediatrics']);
    Route::get('/patient/pediatrics/edit/{id}', [PediatricsController::class, 'patient_Editpediatrics']);
    Route::post('/patient/pediatrics/update/{id}', [PediatricsController::class, 'patient_Updatepediatrics']);
    Route::get('/patient/pediatrics/delete/{id}', [PediatricsController::class, 'Deletepediatrics']);

    // Dermatology
    Route::get('patient/dermatology', [DermatologyController::class, 'patient_dermatology']);
    Route::get('patient/dermatology/add', [DermatologyController::class, 'patient_add_dermatology']);
    Route::post('patient/dermatology/add', [AppointmentController::class, 'patient_insert_add_pediatrics']);
    Route::get('/patient/dermatology/edit/{id}', [DermatologyController::class, 'patient_Editdermatology']);
    Route::post('/patient/dermatology/update/{id}', [DermatologyController::class, 'patient_Updatedermatology']);
    Route::get('/patient/dermatology/delete/{id}', [DermatologyController::class, 'Deletedermatology']);

    // Oncology
    Route::get('patient/oncology', [OncologyController::class, 'patient_oncology']);
    Route::get('patient/oncology/add', [OncologyController::class, 'patient_add_oncology']);
    Route::post('patient/oncology/add', [AppointmentController::class, 'patient_insert_add_pediatrics']);
    Route::get('/patient/oncology/edit/{id}', [OncologyController::class, 'patient_Editoncology']);
    Route::post('/patient/oncology/update/{id}', [OncologyController::class, 'patient_Updateoncology']);
    Route::get('/patient/oncology/delete/{id}', [OncologyController::class, 'Deleteoncology']);

    // Psychiatry
    Route::get('patient/psychiatry', [PsychiatryController::class, 'patient_psychiatry']);
    Route::get('patient/psychiatry/add', [PsychiatryController::class, 'patient_add_psychiatry']);
    Route::post('patient/psychiatry/add', [AppointmentController::class, 'patient_insert_add_pediatrics']);
    Route::get('/patient/psychiatry/edit/{id}', [PsychiatryController::class, 'patient_Editpsychiatry']);
    Route::post('/patient/psychiatry/update/{id}', [PsychiatryController::class, 'patient_Updatepsychiatry']);
    Route::get('/patient/psychiatry/delete/{id}', [PsychiatryController::class, 'Deletepsychiatry']);

    // Cardiology
    Route::get('patient/cardiology', [CardiologyController::class, 'patient_cardiology']);
    Route::get('patient/cardiology/add', [CardiologyController::class, 'patient_add_cardiology']);
    Route::post('patient/cardiology/add', [AppointmentController::class, 'patient_insert_add_pediatrics']);
    Route::get('/patient/cardiology/edit/{id}', [CardiologyController::class, 'patient_Editcardiology']);
    Route::post('/patient/cardiology/update/{id}', [CardiologyController::class, 'patient_Updatecardiology']);
    Route::get('/patient/cardiology/delete/{id}', [CardiologyController::class, 'Deletecardiology']);

    // Gynaecology
    Route::get('patient/gynaecology', [GynaecologyController::class, 'patient_gynaecology']);
    Route::get('patient/gynaecology/add', [GynaecologyController::class, 'patient_add_gynaecology']);
    Route::post('patient/gynaecology/add', [AppointmentController::class, 'patient_insert_add_pediatrics']);
    Route::get('/patient/gynaecology/edit/{id}', [GynaecologyController::class, 'patient_Editgynaecology']);
    Route::post('/patient/gynaecology/update/{id}', [GynaecologyController::class, 'patient_Updategynaecology']);
    Route::get('/patient/gynaecology/delete/{id}', [GynaecologyController::class, 'Deletegynaecology']);

    // Radiology
    Route::get('patient/radiology', [RadiologyController::class, 'patient_radiology']);
    Route::get('patient/radiology/add', [RadiologyController::class, 'patient_add_radiology']);
    Route::post('patient/radiology/add', [AppointmentController::class, 'patient_insert_add_pediatrics']);
    Route::get('/patient/radiology/edit/{id}', [RadiologyController::class, 'patient_Editradiology']);
    Route::post('/patient/radiology/update/{id}', [RadiologyController::class, 'patient_Updateradiology']);
    Route::get('/patient/radiology/delete/{id}', [RadiologyController::class, 'Deleteradiology']);



});

Route::get('logout', [AuthController::class, 'logout']);