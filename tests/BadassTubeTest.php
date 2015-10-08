<?php 
class BadassTubeTest extends PHPUnit_Framework_TestCase 
{
	private $instance;
	// private $regexUrl = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
	private $regexUrl = '#((https?|ftp)://(\S*?\.\S*?))([\s)\[\]{},;"\':<]|\.\s|$)#i';

	public function __construct()
	{
		$this->instance = new PauloSouza\BadassTube('https://www.youtube.com/watch?v=Z38itkVtEqI');
	}

	public function testBadassTubeThumbs()
	{
		$this->assertArrayHasKey('thumbs', $this->instance->thumbs());
	}

	public function testBadassTubeDef()
	{
		$this->assertRegExp($this->regexUrl, $this->instance->def());
	}

	public function testBadassTubeHq()
	{
		$this->assertRegExp($this->regexUrl, $this->instance->hq());
	}

	public function testBadassTubeMq()
	{
		$this->assertRegExp($this->regexUrl, $this->instance->mq());
	}

	public function testBadassTubeSd()
	{
		$this->assertRegExp($this->regexUrl, $this->instance->sd());
	}

	public function testBadassTubeMax()
	{
		$this->assertRegExp($this->regexUrl, $this->instance->max());
	}

	public function testBadassTubeVideo()
	{
		$this->assertRegExp($this->regexUrl, $this->instance->video());
	}
}