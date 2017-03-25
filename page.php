<?php 
class Page {
	// class page attributes
	public $content;
	public $title = "Jay Gervais Awesome Web Page";
	public $keywords = "web development, online marketing, graphic design, technical writing";
	public $buttons = array(
				"Home" => "home.php",
				"Contact" => "contact.php",
				"Services" => "services.php",
				"Site Map" => "map.php"
			);

	// class page operations
	public function __set($name, $value)
	{
		$this->$name = $value;
	}

	public function Display()
	{
		echo "<html>\n<head>\n";
		$this -> DisplayTitle();
		$this -> DisplayKeywords();
		$this -> DisplayStyles();
		echo "</head>\n<body>\n";
		$this -> DisplayHeader();
		$this -> DisplayMenu($this->buttons);
		echo $this->content;
		$this -> DisplayFooter();
		echo "</body>\n</html>\n";
	}

	public function DisplayTitle()
	{
		echo "<title>".$this->title."</title>";
	}
	
	public function DisplayKeywords()
	{
		echo "<meta name='keywords' content='".$this->keywords."'/>";
	}

	public function DisplayStyles()
	{
		?>
		<link href="styles.css" type="text/css" rel="stylesheet">
		<?php
	}

	public function DisplayHeader()
	{
		?>
		<!-- page header -->
		<header>
			<img src="headimage.jpg" alt="Jay Logo" height="" width="100%" />
			<h1>Jay Gervais</h1>
		</header>
		<?php
	}

	public function DisplayMenu($buttons) 
	{
		echo "<!-- menu -->
		<nav>";

		while (list($name, $url) = each($buttons)) {
			$this->DisplayButton($name, $url,
				!$this->IsURLCurrentPage($url));
		}
		echo "</nav>\n";
	}

	public function IsURLCurrentPage($url)
	{
		if(strpos($_SERVER['PHP_SELF'],$url)===false)
	 {
		return false;
		}
			else
		{ 
			return true;
		}
	}

	public function DisplayButton($name,$url,$active=true)
	{
		if ($active) { ?>
		<div class="menuitem">
			<a href="<?=$url?>">
				<img src="headimage.jpg" alt="" height="20" width="20" />
				<span class="menutext"><?=$name?></span>
				</a>
			</div>
			<?php
	} else { ?>
	<div class="menuitem">
		<img src="headimage.jpg" height="20" width="20">
		<span class="menutext"><?=$name?></span>
	</div>
	<?php
	}
  }

  	public function DisplayFooter()
  	{
  		?>
  		<!-- page footer -->
  		<footer>
  			<p>&copy; Jay Mother Fucking Gervais<br />
  			Please see our
  			<a href="legal.php">Legal information before signing your soul</a>.</p>
  			</footer>
  			<?php 
  	}
}
?>




