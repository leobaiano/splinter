<?php
/**
 * Menu
 *
 * @author Ted k' <contato@tedk.com.br>
 */

class LB_Menu_Splinter {

	/**
	 * Name.
	 *
	 * @var String
	 */
	private $name;

	/**
	 * Slug.
	 *
	 * @var array
	 */
	private $slugs;

	public function __construct( $name, $slugs ) {
		$this->name = $name;
		$this->slugs = $slugs;
		$this->custom_menu();
	}

	public function custom_menu() {
		add_menu_page( $this->name, $this->name, 'edit_posts', $this->slugs[0]['slug'], 'MENU_CB' );

	    	foreach ($this->slugs as $key => $value) {
	    		add_submenu_page( $this->slugs[0]['slug'], $value['name'], $value['name'], 'edit_posts', $this->slugs[0]['slug'], 'MENU_CB' );
	    	}
	}
}
