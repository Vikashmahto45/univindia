<?php
$keywords = file('keyword.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$files = file('all_pages.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$files = array_filter($files, function($f) { return str_ends_with($f, '.php'); });
$files = array_map('trim', $files);

$out = "<?php\n\$link_map = [\n";
foreach ($keywords as $keyword) {
    $keyword = trim($keyword);
    $slug = strtolower(preg_replace('/[^a-z0-9]+/', '-', $keyword));
    $slug = trim($slug, '-');
    $match = "";
    foreach ($files as $file) {
        if ($file === $slug . '.php' || strpos($file, $slug) === 0 || strpos($file, $slug) !== false) {
            $match = $file;
            break;
        }
    }
    if ($match) {
        $out .= "    '" . addslashes($keyword) . "' => '$match',\n";
    }
}
$out .= "];\n";
file_put_contents('includes/link_map.php', $out);
echo "Mapping complete: includes/link_map.php updated.\n";

