<?php

use Illuminate\Support\Facades\Route;

// General
Route::livewire('/', 'pages::landing');

#region /docs
Route::group(['prefix' => 'docs'], function () {
    Route::get('/', fn () => response()->redirectTo('/docs/install'));

    // Get started
    Route::livewire('/install', 'pages::docs.install');
    Route::livewire('/themes', 'pages::docs.themes');
    Route::livewire('/config', 'pages::docs.config');
    Route::livewire('/contributing', 'pages::docs.contributing');
});

#region /components
Route::group(['prefix' => 'components'], function () {
    Route::get('/', fn () => response()->redirectTo('/components/button'));

    // Actions
    Route::livewire('/button', 'pages::components.button');
    Route::livewire('/dropdown', 'pages::components.dropdown');
    Route::livewire('/modal', 'pages::components.modal');
    Route::livewire('/fab', 'pages::components.fab');
    Route::livewire('/swap', 'pages::components.swap');
    Route::livewire('/theme-toggle', 'pages::components.theme-toggle');

    // Data display
    Route::livewire('/accordion', 'pages::components.accordion');
    Route::livewire('/avatar', 'pages::components.avatar');
    Route::livewire('/badge', 'pages::components.badge');
    Route::livewire('/card', 'pages::components.card');
    Route::livewire('/carousel', 'pages::components.carousel');
    Route::livewire('/collapse', 'pages::components.collapse');
    Route::livewire('/icon', 'pages::components.icon');
    Route::livewire('/kbd', 'pages::components.kbd');
    Route::livewire('/list-item', 'pages::components.list-item');
    Route::livewire('/statistic', 'pages::components.statistic');
    Route::livewire('/steps', 'pages::components.steps');
    Route::livewire('/table', 'pages::components.table');
    Route::livewire('/timeline', 'pages::components.timeline');

    // Data input
    Route::livewire('/checkbox', 'pages::components.checkbox');
    Route::livewire('/choices', 'pages::components.choices');
    Route::livewire('/file-upload', 'pages::components.file-upload');
    Route::livewire('/form', 'pages::components.form');
    Route::livewire('/group', 'pages::components.group');
    Route::livewire('/image-library', 'pages::components.image-library');
    Route::livewire('/input-color', 'pages::components.input-color');
    Route::livewire('/input-date', 'pages::components.input-date');
    Route::livewire('/input-datetime', 'pages::components.input-datetime');
    Route::livewire('/input-email', 'pages::components.input-email');
    Route::livewire('/input-number', 'pages::components.input-number');
    Route::livewire('/input-password', 'pages::components.input-password');
    Route::livewire('/input-search', 'pages::components.input-search');
    Route::livewire('/input-tel', 'pages::components.input-tel');
    Route::livewire('/input-time', 'pages::components.input-time');
    Route::livewire('/input-url', 'pages::components.input-url');
    Route::livewire('/input', 'pages::components.input');
    Route::livewire('/pin', 'pages::components.pin');
    Route::livewire('/radio', 'pages::components.radio');
    Route::livewire('/rating', 'pages::components.rating');
    Route::livewire('/range-slider', 'pages::components.range-slider');
    Route::livewire('/select', 'pages::components.select');
    Route::livewire('/tags', 'pages::components.tags');
    Route::livewire('/textarea', 'pages::components.textarea');
    Route::livewire('/toggle', 'pages::components.toggle');

    // Feedback
    Route::livewire('/alert', 'pages::components.alert');
    Route::livewire('/popover', 'pages::components.popover');
    Route::livewire('/progress', 'pages::components.progress');
    Route::livewire('/toast', 'pages::components.toast');

    // Navigation & Layout
    Route::livewire('/breadcrumbs', 'pages::components.breadcrumbs');
    Route::livewire('/drawer', 'pages::components.drawer');
    Route::livewire('/dock', 'pages::components.dock');
    Route::livewire('/header', 'pages::components.header');
    Route::livewire('/layout', 'pages::components.layout');
    Route::livewire('/menu', 'pages::components.menu');
    Route::livewire('/sidebar', 'pages::components.sidebar');
    Route::livewire('/tabs', 'pages::components.tabs');

    // Third party
    Route::livewire('/calendar', 'pages::components.calendar');
    Route::livewire('/chart', 'pages::components.chart');
    Route::livewire('/code', 'pages::components.code');
    Route::livewire('/date-picker', 'pages::components.date-picker');
    Route::livewire('/diff', 'pages::components.diff');
    Route::livewire('/image-gallery', 'pages::components.image-gallery');
    Route::livewire('/markdown-editor', 'pages::components.markdown-editor');
    Route::livewire('/rich-text-editor', 'pages::components.rich-text-editor');
    Route::livewire('/signature', 'pages::components.signature');
    Route::livewire('/spotlight', 'pages::components.spotlight');
});
#endregion /components
#endregion /docs
