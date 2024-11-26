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

if (!function_exists('uploadSingle')) {
    function uploadSingle($file, $slug, $folder)
    {
        if ($file && $file->isValid()) {
            $slug = "$slug";
            $array = ['jpg', 'jpeg', 'png', 'svg', 'pdf', 'docx'];
            if (!in_array($file->getClientOriginalExtension(), $array)) {
                return null;
            } else {
                $uniqueName = $slug . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/' . $folder), $uniqueName);
                return $uniqueName;
            }
            $uniqueName = $slug . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/' . $folder), $uniqueName);
            return $uniqueName;
        }
        return null;
    }
}

?>
