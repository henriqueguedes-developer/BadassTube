# BadassTube
Generating all links to a Youtube video. Extremely easy and fast, using the URL of the video.

## Composer autoloading
require_once __DIR__ . '/vendor/autoload.php';

## Instantiate the class
$data = new BadassTube('https://www.youtube.com/watch?v=RJDmph8ov0k&feature=youtu.be');

## Thumbnails
printf("// Thumbs".PHP_EOL."%s".PHP_EOL.PHP_EOL, print_r($data->thumbs(), true));

## Default Image
printf("// Default Image".PHP_EOL."%s".PHP_EOL.PHP_EOL, print_r($data->def(), true));

## High Quality Image
printf("// High Quality Image".PHP_EOL."%s".PHP_EOL.PHP_EOL, print_r($data->hq(), true));

## Medium Quality Image
printf("// Medium Quality Image".PHP_EOL."%s".PHP_EOL.PHP_EOL, print_r($data->mq(), true));

## Standard Quality Image
printf("// Standard Quality Image".PHP_EOL."%s".PHP_EOL.PHP_EOL, print_r($data->sd(), true));

## Max Quality Image
printf("// Max Quality Image".PHP_EOL."%s".PHP_EOL.PHP_EOL, print_r($data->max(), true));

## Autoplay Video Link
printf("// Autoplay Video Link".PHP_EOL."%s".PHP_EOL.PHP_EOL, print_r($data->video(), true));
