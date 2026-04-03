<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;


Route::get('/', function () {

    
    return view('home');

});

// store a new job offer
Route::post('/jobs', function() { 

    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);
    
    return redirect('/jobs');
    
});

// list all job offers(index)
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->cursorPaginate(4);

    return view('jobs.index',['jobs' => $jobs]);

});

//create a new job offer(form)
Route::get('/jobs/create', function () {

    return view('jobs.create');

});
// show a single job offer(show)
Route::get('/jobs/{id}', function ($id)  {
  
            $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});
// edit a job offer(form)
Route::get('/jobs/{id}/edit', function ($id)  {
  
            $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]);
});

// Update a job offer(form)
Route::patch('/jobs/{id}', function ($id)  {

    request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
    ]);

    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    return redirect("/jobs/{$job->id}");
});

// destroy a job offer(form)
Route::delete('/jobs/{id}', function ($id)  {
  
    $job = Job::findOrFail($id)->delete();

    return redirect('/jobs');
});
Route::get('/contact', function () {
    return view('contact');
});