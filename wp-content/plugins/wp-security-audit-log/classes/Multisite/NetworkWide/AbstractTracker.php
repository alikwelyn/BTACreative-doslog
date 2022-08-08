<?php
/**
 * Abstract Class: AbstractTracker
 *
 * Abstract class that defines the basic items that I want to exist for network
 * wide data tracking of items that are expansive or require code to be
 * executed directly (CPTs or taxonomies for example).
 *
 * @since   3.5.2
 * @package wsal
 */

namespace WSAL\Multisite\NetworkWide;

/**
 * Defines a way of storing individual groups of network wide data and local
 * site data.
 *
 * You need to setup the condition and hook both an action for generating $data
 * as well as the save method you want in at an appropriate hook.
 *
 * NOTE: This class doesn't do any direct network or multisite checks. Check
 * those before using the class.
 *
 * NOTE: Aim to attach to late hooks in most castes as this class can be
 * instansiated late in certain conditions of the main plugin.
 *
 * @since 3.5.2
 */
abstract class AbstractTracker implements TrackerInterface {

	/**
	 * The key used to store data under.
	 *
	 * You should always redefine this in extended classes.
	 *
	 * @since 3.5.2
	 * @var   string
	 */
	const STORAGE_KEY = 'wsal_networkwide_tracker_suffix';

	/**
	 * The cache time to store data for. Default is 1 hour in seconds.
	 *
	 * @since 3.5.2
	 * @var   int
	 */
	public $ttl = 30;

	/**
	 * An instance of the main plugin class that can be used to get options or
	 * settings.
	 *
	 * @since 3.5.2
	 * @var   \WpSecurityAuditLog
	 */
	public $plugin;

	/**
	 * The data to be stored.
	 *
	 * @since 3.5.2
	 * @var   mixed
	 */
	public $data;

	/**
	 * Responsible for setting up the plugin instance in the class, extending
	 * this you can use any site data and setup addional properties.
	 *
	 * @method __construct
	 * @since  3.5.2
	 * @param  \WpSecurityAuditLog $plugin An istance of the main plugin class.
	 */
	public function __construct( \WpSecurityAuditLog $plugin ) {
		$this->plugin = $plugin;
		$this->data   = array();
	}

	/**
	 * This is the intended entrypoint for the class. This should be called
	 * only after confirming that this is running as part of a multisite
	 * instance.
	 *
	 * @method setup
	 * @since  3.5.2
	 * @return void
	 */
	public function setup() {
		/*
		 * To make sure we don't need to run every request we store CPTs in an
		 * option attached to each local site with a timestamp.
		 */
		if ( $this->conditions() ) {
			/*
			 * The option doesn't yet exist or it is not fresh so record CPTs
			 * and fire off a late storage method.
			 */
			$this->actions();
		}
	}

	/**
	 * Needs to return a boolean true if the actions are to be hooked in.
	 *
	 * You can use this for basic conditional testing but it's also useful for
	 * freshness/cache checking.
	 *
	 * @method conditions
	 * @since  3.5.2
	 * @return bool
	 */
	abstract public function conditions();

	/**
	 * Adds any actions that need registered to handle the gathering, storing
	 * or processing of the data and uptimately storing it in $this->data.
	 *
	 * @method actions
	 * @since  3.5.2
	 * @return void
	 */
	abstract public function actions();

	/**
	 * Should setup the $data property to hold it's data. In format of a
	 * single dimentional array.
	 *
	 * @method generate_data
	 * @since  3.5.2
	 * @return void
	 */
	abstract public function generate_data();

	/**
	 * Method to store this site data locally to the sites own options.
	 *
	 * Prefered data format:
	 *     array(
	 *         timestamp => (int) of the save time in seconds ( time(); )
	 *         data      => single dimentional (array) of (string)s
	 *     );
	 *
	 * @method update_storage_site
	 * @since  3.5.2
	 * @return bool
	 */
	abstract public function update_storage_site();

	/**
	 * Method to store this sites local data as part of the global network wide
	 * data store. This should merge the data rather than overwrite in most
	 * cases.
	 *
	 * NOTE: Data should be stored on network with an UPDATE.
	 *
	 * Prefered data format:
	 *     array(
	 *         site => (array) containing multiple: [ (int) $site_id ] => 1D (array) of stings.
	 *         list => (array) of (string)s generated by a compair of all site data stings
	 *     );
	 *
	 * @method update_storage_network
	 * @since  3.5.2
	 * @return bool
	 */
	abstract public function update_storage_network();

	/**
	 * Return a list of data about a specific requested site, or the network
	 * wide list of data otherwise. Empty array if neither exist.
	 *
	 * @method get_network_data_list
	 * @since  3.5.2
	 * @param  integer $site_id if a specific site is there. This is technically nullable type but for back compat isn't.
	 * @return array
	 */
	abstract public static function get_network_data_list( $site_id = 0 );

}
