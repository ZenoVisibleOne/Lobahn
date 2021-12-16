<?php


Route::group(['middleware' => ['auth']], function () { 
    Route::get('home', [App\Http\Controllers\Candidate\CandidateController::class, 'dashboard'])->name('candidate.dashboard');
    Route::get('opportunity/{id}', [App\Http\Controllers\Candidate\CandidateController::class, 'opportunity'])->name('candidate.opportunity');
    Route::get('opportunity/connect/{id}', [App\Http\Controllers\Candidate\CandidateController::class, 'connect'])->name('candidate.connect');
    Route::get('company/{id}', [App\Http\Controllers\Candidate\CandidateController::class, 'company'])->name('candidate.company');
    Route::get('profile', [App\Http\Controllers\Candidate\CandidateController::class, 'profile'])->name('candidate.profile');
    Route::get('account', [App\Http\Controllers\Candidate\CandidateController::class, 'account'])->name('candidate.account');
    Route::get('setting', [App\Http\Controllers\Candidate\CandidateController::class, 'setting'])->name('candidate.setting');
    Route::get('activity', [App\Http\Controllers\Candidate\CandidateController::class, 'activity'])->name('candidate.activity');
});
