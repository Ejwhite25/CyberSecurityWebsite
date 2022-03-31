<?php
function html_table($data = array())
{
    $rows = array();
    foreach ($data as $row) {
        $cells = array();
        foreach ($row as $cell) {
            $cells[] = "<li>{$cell}</li>";
            if ($cell == 3) {
                $cells[] = "<li><a href={$cell}>Link to CTF</li>";
            }

        }
        $rows[] = "<ul>" . implode('', $cells) . "</ul>";
    }
    return "<h1>CTFs made by students,for students!</h1><body>" . implode('', $rows) . "</body>";
}
$data = array(
    array('Author of CTF' => 'Profile on author', 'Date Submitted' => 'Link to CTF'),
);
echo '<link rel="stylesheet" id="main-css-css" href="https://western.edu/wp-content/themes/wcu/dist/css/style.css"
          media="all">';
echo html_table($data);
