<?php
function html_table($data = array())
{
    $rows = array();
    foreach ($data as $row) {
        $cells = array();
        foreach ($row as $cell) {
            $cells[] = "<li>{$cell}</li>";
        }
        $rows[] = "<ul>" . implode('', $cells) . "</ul>";
    }
    return "<h1>CTFs made by students,for students!</h1><body>" . implode('', $rows) . "</body>";
}
$data = array(
    array('1' => '1', '2' => '2'),
    array('1' => '111', '2' => '222'),
    array('1' => '111111', '2' => '222222'),
);

echo html_table($data);