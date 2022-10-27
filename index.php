 <?php
$text = "31.12.2020";
function get_m($number){
    switch ($number[2]) {
        case 1:
            $month = "January";
            break;
        case 2:
            $month = "February";
            break;
        case 3:
            $month = "March";
            break;
        case 4:
            $month = "April";
            break;
        case 5:
            $month = "May";
            break;
        case 6:
            $month = "June";
            break;
        case 7:
            $month = "July";
            break;
        case 8:
            $month = "August";
            break;
        case 9:
            $month = "September";
            break;
        case 10:
            $month = "October";
            break;
        case 11:
            $month ="November";
            break;
        case 12:
            $month = "December";
            break;
    }
    return $number = "$number[1] $month $number[3] ";
}
$n = 0;
$reg = "/(\d{2})\.(\d{2})\.(\d{4})/";
$result = preg_replace_callback($reg, 'get_m', $text);
echo $result;