<?php
namespace Video;
class BadassTube {
	public static $data = [];
	public $errors = [];
	public $imageBaseLink = 'http://img.youtube.com/vi/%s/%s.jpg';

	public function __construct($youtubeLink)
	{
		if(empty($youtubeLink)) $this->errors[] = 'You must pass a Youtube video url in the constructor.';
		if(!filter_var($youtubeLink, FILTER_VALIDATE_URL)) $this->errors[] = 'The Youtube video url not seem to be valid.';

		if(empty($this->errors)):
			$this->data['absPath'] = $youtubeLink;
			$this->parser();
		else:
			return $this->errors;
		endif;
	}

	/* Youtube ID parser */
	private function parser()
	{
		if(preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $this->data['absPath'], $match)):
            $this->data['YoutubeID'] = $match[1];
        endif;
	}

	/* Youtube images types */
	private function images($imageType = '')
	{
		$type = $imageType.'default';
		$this->data[$type] = sprintf($this->imageBaseLink, $this->data['YoutubeID'], $type);
	}

	/*Each YouTube video has 4 generated images. They are predictably formatted as follows:
	http://img.youtube.com/vi/<insert-youtube-video-id-here>/0.jpg
	http://img.youtube.com/vi/<insert-youtube-video-id-here>/1.jpg
	http://img.youtube.com/vi/<insert-youtube-video-id-here>/2.jpg
	http://img.youtube.com/vi/<insert-youtube-video-id-here>/3.jpg*/
	public function thumbs()
	{	
		for($c = 0; $c <= 3; $c++):
			$this->data['thumbs'][] = sprintf($this->imageBaseLink, $this->data['YoutubeID'], $c);
		endfor;

		return $this->data;
	}

	/*The first one in the list is a full size image and others are thumbnail images. The default thumbnail image (ie. one of 1.jpg, 2.jpg, 3.jpg) is:
	http://img.youtube.com/vi/<insert-youtube-video-id-here>/default.jpg*/
	public function def()
	{
		$this->images();

		return $this->data['default'];
	}

	/*For the high quality version of the thumbnail use a url similar to this:
	http://img.youtube.com/vi/<insert-youtube-video-id-here>/hqdefault.jpg*/
	public function hq()
	{
		$this->images(__FUNCTION__);
		
		return $this->data[__FUNCTION__.'default'];
	}

	/*There is also a medium quality version of the thumbnail, using a url similar to the HQ:
	http://img.youtube.com/vi/<insert-youtube-video-id-here>/mqdefault.jpg*/
	public function mq()
	{
		$this->images(__FUNCTION__);

		return $this->data[__FUNCTION__.'default'];
	}

	/*For the standard definition version of the thumbnail, use a url similar to this:
	http://img.youtube.com/vi/<insert-youtube-video-id-here>/sddefault.jpg*/
	public function sd()
	{
		$this->images(__FUNCTION__);

		return $this->data[__FUNCTION__.'default'];
	}

	/*For the maximum resolution version of the thumbnail use a url similar to this:
	http://img.youtube.com/vi/<insert-youtube-video-id-here>/maxresdefault.jpg*/
	public function max()
	{
		$this->images(__FUNCTION__.'res');

		return $this->data[__FUNCTION__.'resdefault'];
	}

	public function video()
	{
		$this->data[__FUNCTION__] = sprintf('https://www.youtube.com/embed/%s?autoplay=1&controls=0&showinfo=0', $this->data['YoutubeID']);

		return $this->data[__FUNCTION__];
	}
}
