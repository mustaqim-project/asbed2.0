<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Detection\MobileDetect;
use App\Models\DailyEntry;
use Carbon\Carbon;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        $detect = new MobileDetect();

        if ($detect->isMobile()) {
            return view('mobile.auth.login');
        } elseif ($detect->isTablet()) {
            return view('mobile.auth.login');
        } else {
            return view('desktop.auth.login');
        }
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();

        $user = Auth::user();
        $today = Carbon::today();

        // Check if the user has a daily entry for today
        $hasDailyEntry = DailyEntry::where('user_id', $user->id)
                                    ->whereDate('date', $today)
                                    ->exists();

        if (!$hasDailyEntry) {
            return redirect()->intended(route('daily_entries.create'));
        }

        return redirect()->intended(route('dashboard'));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
