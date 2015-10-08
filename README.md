# BadassTube
Generating all links to a Youtube video. Extremely easy and fast, using the URL of the video.

## How to use?
require_once __DIR__ . '/vendor/autoload.php';

$data = new Video\BadassTube('https://www.youtube.com/watch?v=RJDmph8ov0k&feature=youtu.be');

echo '======================================================'.PHP_EOL;
printf("// Thumbs".PHP_EOL."%s".PHP_EOL.PHP_EOL, print_r($data->thumbs(), true));
printf("// Default Image".PHP_EOL."%s".PHP_EOL.PHP_EOL, print_r($data->def(), true));
printf("// High Quality Image".PHP_EOL."%s".PHP_EOL.PHP_EOL, print_r($data->hq(), true));
printf("// Medium Quality Image".PHP_EOL."%s".PHP_EOL.PHP_EOL, print_r($data->mq(), true));
printf("// Standard Quality Image".PHP_EOL."%s".PHP_EOL.PHP_EOL, print_r($data->sd(), true));
printf("// Max Quality Image".PHP_EOL."%s".PHP_EOL.PHP_EOL, print_r($data->max(), true));
printf("// Autoplay Video Link".PHP_EOL."%s".PHP_EOL.PHP_EOL, print_r($data->video(), true));

exit();
