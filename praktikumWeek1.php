<?php
function merge(&$nums1, $m, $nums2, $n) {
    // first m elements of nums1
    $merged = array_slice($nums1, 0, $m);

    // combine with nums2
    $merged = array_merge($merged, $nums2);

    // sort the merged array
    sort($merged);

    // copy back to nums1
    for ($i = 0; $i < $m + $n; $i++) {
        $nums1[$i] = $merged[$i];
    }
}

/* ============================
             UNDERLINE
   ============================ */
function formatWithUnderline($array, $m) {
    $output = "[";
    foreach ($array as $i => $val) {
        if ($i < $m) {
            // elements originally from nums1
            $output .= "<u>$val</u>";
        } else {
            $output .= $val;
        }
        if ($i !== array_key_last($array)) {
            $output .= ", ";
        }
    }
    $output .= "]";
    return $output;
}

/* ============================
            EXAMPLES
   ============================ */

// Example 1
echo "<b>Example 1:</b><br>";
$nums1 = [1,2,3,0,0,0];
$m = 3;
$nums2 = [2,5,6];
$n = 3;

merge($nums1, $m, $nums2, $n);
echo "Input:<br> nums1 = [1,2,3,0,0,0], m = 3<br> nums2 = [2,5,6], n = 3<br>";
echo "<br>Output: " . formatWithUnderline($nums1, $m) . "<br><br>";

// Example 2
echo "<b>Example 2:</b><br>";
$nums1 = [1];
$m = 1;
$nums2 = [];
$n = 0;

merge($nums1, $m, $nums2, $n);
echo "Input:<br> nums1 = [1], m = 1<br> nums2 = [], n = 0<br>";
echo "<br>Output: " . formatWithUnderline($nums1, $m) . "<br><br>";

// Example 3
echo "<b>Example 3:</b><br>";
$nums1 = [0];
$m = 0;
$nums2 = [1];
$n = 1;

merge($nums1, $m, $nums2, $n);
echo "Input:<br> nums1 = [0], m = 0<br> nums2 = [1], n = 1<br>";
echo "<br>Output: " . formatWithUnderline($nums1, $m) . "<br><br>";
?>
