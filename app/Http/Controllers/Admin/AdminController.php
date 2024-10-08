<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;

class AdminController extends Controller
{
    /**
     * Display the form for managing settings.
     */
    public function index()
    {
        return view('admin.dashboard', ['totalRoles'    => Role::count()]);
    }

    public function runBackup()
    {
        Artisan::call('backup:run');

        flash()
            ->success('Backup has been successfully executed.')
            ->flash();
        return redirect()->back();
    }

    public function clearOptimize()
    {
        Artisan::call('optimize:clear');
        flash()
            ->success('Optimize cache cleared.')
            ->flash();
        return redirect()->back();
    }

    public function installPassport()
    {
        // dd(Artisan::call('passport:install'));
        Artisan::call('passport:install');
        flash()
            ->success('Passport installed successfully.')
            ->flash();
        return redirect()->back();
    }

    public function downloadBackup()
    {
        Artisan::call('backup:run');

        $backupDirectory = storage_path('app/IMLI');

        $backupFiles = File::glob($backupDirectory . '/*.zip');

        rsort($backupFiles);

        if (!empty($backupFiles)) {
            $latestBackup = $backupFiles[0];

            return response()->download($latestBackup);
        } else {
            abort(404, 'No backups found.');
        }
    }
}
