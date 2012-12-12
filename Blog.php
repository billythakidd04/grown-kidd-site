<?php
class Blog
{
	private $id;
	private $title;
	private $createdDate;
	private $editDate;
	private $bodyText;
	private $images;//array of blog images
	private $keywords;//array of describing keywords

	//contructor
	function __construct($_title, $_bodyText, $_images, $_keywords)
	{
		$this->setTitle($_title);
		$this->setBodyText($_bodyText);
		$this->setImages($_images);
		$this->setKeywords($_keywords);
		$this->createdDate = date('Y-m-d H:i:s');
	}

	private function Blog()
	{
		//construct a specified blog object
		/*use a default ctor? with no arguments?
		then use the setX functions to build up that object
		add that blog to the array and return...

		this is an attempt to return objects not some shit mysql array
		 */
	}

	//add to db
	public function createBlog(/*TODO*/)
	{
		//TODO make connection to db
		//TODO verify contents
		//TODO add to db
		//TODO return mysql insert id to this.id
	}

	public function editBlog($param)
	{
		$this->editDate = date('Y-m-d H:i:s');//update db with new verified info associated with blog id
	}

	//GETS
	/**
	 * Returns the array of keywords associated with this blog entry
	 * @return array $keywords
	 */
	public function getKeywords()
	{
		return $this->keywords;
	}

	public function getKeywordsStr($array)
	{
		$kStr = '';
		if(!empty($array))
		{
			$kStr = implode(',', $array);
		}
	}

	/**
	 * Returns the array of images associated with this blog entry
	 * @return array $images
	 */
	public function getImages()
	{
		return $this->images;
	}

	//SETS
	/**
	 * Set title of blog entry
	 * @param string $str
	 */
	public function setTitle($str)
	{
		//TODO some validation is needed
		$this->title = $str;
	}

	/**
	 * Set text for body of blog entry
	 * @param string $str
	 */
	public function setBodyText($str)
	{
		$this->bodyText = $str;
	}

	/**
	 * Set the array of keywords that describe the blog entry
	 * @param array $array
	 */
	public function setKeywords($array)
	{
		if(!empty($array))
		{
			$this->keywords = $array;
		}
	}

	/**
	 * Set array of image to be included in blog entry
	 * @param array $array
	 */
	public function setImages($array)
	{
		$this->images = $array;
	}

	/**
	 * Get all blogs and create an array of blogs
	 * @return array $blogs
	 */
	public static function getBlogList()
	{
		$dbCon = Database::getInstance();

		$blogs = array();
		$blogList = $dbCon->query("select * from blog");
		while($aBlog = $blogList->fetch_assoc())
		{
			$blogs[] = $aBlog;
		}

		return $blogs;
	}

	/**
	 * Returns the html body of the blog entry formatted and including images
	 * @return string
	 */
	//HTML functions
	private function formBody($imgArr,$bodyStr)
	{
		;//TODO add images and form html code accordingly
	}


}