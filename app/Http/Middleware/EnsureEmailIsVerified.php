<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class EnsureEmailIsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //dd($request->user(), $request->user()->hasVerifiedEmail(), $request->user() instanceof MustVerifyEmail);

        if (!$request->user() || ($request->user() instanceof MustVerifyEmail && !$request->user()->hasVerifiedEmail())) {
            admin_warning(__('admin.email_verify.email_is_not_verified'),
                '<br>' . __('admin.email_verify.if_you_did_not_receive_the_email') . ' <a href="' . route('verification.resend') . '">' . __('admin.email_verify.click_here_to_request_another') .'</a>'
            );
            //admin_warning(__('admin.company_has_empty_fields'), implode('<br>', $messages ));

            /*return $request->expectsJson()
                ? abort(403, 'Your email address is not verified.')
                : Redirect::route($redirectToRoute ?: 'verification.notice');*/
        }

        return $next($request);
    }
}
