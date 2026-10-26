<?php

use Illuminate\Support\Facades\Route;

// General
Route::livewire('/', 'pages::landing');

#region /docs
Route::group(['prefix' => 'docs'], function () {
    // Get started
    Route::livewire('/install', 'pages::docs.install');
    Route::livewire('/themes', 'pages::docs.themes');
    Route::livewire('/config', 'pages::docs.config');
    Route::livewire('/contributing', 'pages::docs.contributing');

    #region /components
    Route::group(['prefix' => 'components'], function () {
        // Actions
        Route::livewire('/button', 'pages::docs.components.button');
        Route::livewire('/dropdown', 'pages::docs.components.dropdown');
        Route::livewire('/modal', 'pages::docs.components.modal');
        Route::livewire('/swap', 'pages::docs.components.swap');
        Route::livewire('/theme-toggle', 'pages::docs.components.theme-toggle');

        // Data display
        Route::livewire('/accordion', 'pages::docs.components.accordion');
        Route::livewire('/avatar', 'pages::docs.components.avatar');
        Route::livewire('/badge', 'pages::docs.components.badge');
        Route::livewire('/card', 'pages::docs.components.card');
        Route::livewire('/carousel', 'pages::docs.components.carousel');
        Route::livewire('/collapse', 'pages::docs.components.collapse');
        Route::livewire('/icon', 'pages::docs.components.icon');
        Route::livewire('/kbd', 'pages::docs.components.kbd');
        Route::livewire('/list-item', 'pages::docs.components.list-item');
        Route::livewire('/statistic', 'pages::docs.components.statistic');
        Route::livewire('/steps', 'pages::docs.components.steps');
        Route::livewire('/table', 'pages::docs.components.table');
        Route::livewire('/timeline', 'pages::docs.components.timeline');

        // Data input
        Route::livewire('/checkbox', 'pages::docs.components.checkbox');
        Route::livewire('/choices', 'pages::docs.components.choices');
        Route::livewire('/color-picker', 'pages::docs.components.color-picker');
        Route::livewire('/date-time', 'pages::docs.components.date-time');
        Route::livewire('/file-upload', 'pages::docs.components.file-upload');
        Route::livewire('/form', 'pages::docs.components.form');
        Route::livewire('/group', 'pages::docs.components.group');
        Route::livewire('/image-library', 'pages::docs.components.image-library');
        Route::livewire('/input', 'pages::docs.components.input');
        Route::livewire('/pin', 'pages::docs.components.pin');
        Route::livewire('/radio', 'pages::docs.components.radio');
        Route::livewire('/rating', 'pages::docs.components.rating');
        Route::livewire('/range-slider', 'pages::docs.components.range-slider');
        Route::livewire('/select', 'pages::docs.components.select');
        Route::livewire('/tags', 'pages::docs.components.tags');
        Route::livewire('/textarea', 'pages::docs.components.textarea');
        Route::livewire('/toggle', 'pages::docs.components.toggle');

        // Feedback
        Route::livewire('/alert', 'pages::docs.components.alert');
        Route::livewire('/popover', 'pages::docs.components.popover');
        Route::livewire('/progress', 'pages::docs.components.progress');
        Route::livewire('/toast', 'pages::docs.components.toast');

        // Navigation & Layout
        Route::livewire('/breadcrumbs', 'pages::docs.components.breadcrumbs');
        Route::livewire('/drawer', 'pages::docs.components.drawer');
        Route::livewire('/header', 'pages::docs.components.header');
        Route::livewire('/layout', 'pages::docs.components.layout');
        Route::livewire('/menu', 'pages::docs.components.menu');
        Route::livewire('/sidebar', 'pages::docs.components.sidebar');
        Route::livewire('/tabs', 'pages::docs.components.tabs');

        // Third party
        Route::livewire('/calendar', 'pages::docs.components.calendar');
        Route::livewire('/chart', 'pages::docs.components.chart');
        Route::livewire('/code', 'pages::docs.components.code');
        Route::livewire('/date-picker', 'pages::docs.components.date-picker');
        Route::livewire('/diff', 'pages::docs.components.diff');
        Route::livewire('/image-gallery', 'pages::docs.components.image-gallery');
        Route::livewire('/markdown-editor', 'pages::docs.components.markdown-editor');
        Route::livewire('/rich-text-editor', 'pages::docs.components.rich-text-editor');
        Route::livewire('/signature', 'pages::docs.components.signature');
        Route::livewire('/spotlight', 'pages::docs.components.spotlight');
    });
    #endregion /components
});
#endregion /docs
