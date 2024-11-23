<?php

function phone_number(){
   return '+91-9897627896';
}
function email(){
    return 'info@sisdindia.org';
}
if (!function_exists('success')) {
    function success($message)
    {
        return redirect()->back()->with([
            'success' => $message
        ]);
    }
}
if (!function_exists('error')) {
    function error($message)
    {
        return back()->withErrors($message);
    }
}

?>
