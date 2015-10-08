# BadassTube
Generating all links to a Youtube video. Extremely easy and fast, using the URL of the video.

## Composer autoloading
require_once __DIR__ . '/vendor/autoload.php';

## Instantiate the class
$data = new BadassTube('https://www.youtube.com/watch?v=RJDmph8ov0k&feature=youtu.be');

## Thumbnails
printf("// Thumbs".PHP_EOL."%s".PHP_EOL.PHP_EOL, print_r($data->thumbs(), true));
```
// Thumbs
Array
(
    [absPath] => https://www.youtube.com/watch?v=RJDmph8ov0k&feature=youtu.be
    [YoutubeID] => RJDmph8ov0k
    [thumbs] => Array
        (
            [0] => http://img.youtube.com/vi/RJDmph8ov0k/0.jpg
            [1] => http://img.youtube.com/vi/RJDmph8ov0k/1.jpg
            [2] => http://img.youtube.com/vi/RJDmph8ov0k/2.jpg
            [3] => http://img.youtube.com/vi/RJDmph8ov0k/3.jpg
        )

)
```

## Default Image
printf("// Default Image".PHP_EOL."%s".PHP_EOL.PHP_EOL, print_r($data->def(), true));
```
// Default Image
http://img.youtube.com/vi/RJDmph8ov0k/default.jpg
```
## High Quality Image
printf("// High Quality Image".PHP_EOL."%s".PHP_EOL.PHP_EOL, print_r($data->hq(), true));
```
// High Quality Image
http://img.youtube.com/vi/RJDmph8ov0k/hqdefault.jpg
```
## Medium Quality Image
printf("// Medium Quality Image".PHP_EOL."%s".PHP_EOL.PHP_EOL, print_r($data->mq(), true));
```
// Medium Quality Image
http://img.youtube.com/vi/RJDmph8ov0k/mqdefault.jpg
```
## Standard Quality Image
printf("// Standard Quality Image".PHP_EOL."%s".PHP_EOL.PHP_EOL, print_r($data->sd(), true));
```
// Standard Quality Image
http://img.youtube.com/vi/RJDmph8ov0k/sddefault.jpg
```
## Max Quality Image
printf("// Max Quality Image".PHP_EOL."%s".PHP_EOL.PHP_EOL, print_r($data->max(), true));
```
// Max Quality Image
http://img.youtube.com/vi/RJDmph8ov0k/maxresdefault.jpg
```

## Autoplay Video Link
printf("// Autoplay Video Link".PHP_EOL."%s".PHP_EOL.PHP_EOL, print_r($data->video(), true));
```
// Autoplay Video Link
https://www.youtube.com/embed/RJDmph8ov0k?autoplay=1&controls=0&showinfo=0
```
