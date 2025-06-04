<?php


if(!function_exists('bn_number'))
{
    function bn_number($number): array|string
    {
        // Numbers
        $bn_numbers = ["১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০","বছর","বছর","মাস","সপ্তাহ","দিন"];
        $en_numbers = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0","years","year","months","weeks","days"];

        return str_replace($en_numbers, $bn_numbers, $number);
    }
}


if(!function_exists('bn_date'))
{
    function bn_date($date): array|string
    {
        // Numbers
        $bn_numbers = ["১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০"];
        $en_numbers = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
        // Months
        $en_months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        $en_short_months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $bn_months = ['জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর'];
        // Days
        $en_days = ['Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
        $en_short_days = ['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri'];
        $bn_short_days = ['শনি', 'রবি', 'সোম', 'মঙ্গল', 'বুধ', 'বৃহঃ', 'শুক্র'];
        $bn_days = ['শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার'];


        // Convert Numbers
        $date = str_replace($en_numbers, $bn_numbers, $date);
        // Convert Months
        $date = str_replace($en_months, $bn_months, $date);
        $date = str_replace($en_short_months, $bn_months, $date);
        // Convert Days
        $date = str_replace($en_days, $bn_days, $date);
        $date = str_replace($en_short_days, $bn_short_days, $date);
        return str_replace($en_days, $bn_days, $date);
    }
}
