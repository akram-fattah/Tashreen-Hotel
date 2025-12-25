<?php

function basicHead($title, $meta, $linksCss, $fonts) {
    $m = <<<HTML
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>$title</title>
    HTML;

        foreach ($meta as $item) {
            $name = $item['name'];
            $content = $item['content'];
            $m .= "\n    <meta name=\"$name\" content=\"$content\">";
        }

        foreach ($linksCss as $link) {
            $m .= "\n    <link rel=\"stylesheet\" href=\"$link\">";
        }

        foreach ($fonts as $font) {
            $m .= "\n    <link href=\"$font\" rel=\"stylesheet\">";
        }

        $m .= "\n</head>";

        echo $m;
}