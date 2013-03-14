<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catalog_Template extends ORM_MPTT {

	/**
	 * Table that store commentaries
	 *
	 * @var string
	 */
//	protected $_table_name = 'templates';

	/**
	 * We need no path in commentaries
	 *
	 * @var bool
	 */
	protected $_path_calculation_enabled = FALSE;

	/**
	 * Model rules
	 *
	 * @return array
	 */
	public function rules()
	{
		return array
		(
		
		);
	}

	/**
	 * Model filters
	 *
	 * @return array
	 */
	public function filter()
	{
		return array
		(
			
		);
	}


	
	public function save_node($parent, $values)
	{
		$filter =  array('parent_id', 'title', 'measure', 'type', 'use_short', 'param');
	
		if(!$this->pk())
		{
			$parent_node = new Model_Catalog_Template($parent);

			$node = new Model_Catalog_Template();
			$node->values($values, $filter);
		//	$node->created = time();
			$node->insert_as_last_child($parent_node);
			
		}else{

			$node = new Model_Catalog_Template($this->pk());
			
			if($node->parent_id != $parent)
			{
				$target = new Model_Catalog_Template($parent);
				$node->move_to_last_child($target);
			}
			
			$node->values($values, $filter);
		//	$node->modify = time();
			$node->save();
		}
		
		return $node;
	}
	

	/**
	 * New scope
	 * This also double as a new_root method allowing
	 * us to store multiple trees in the same table.
	 *
	 * @param   mixed    New scope to create
	 * @param   array    Additional fields
	 * @return  boolean
	 */
	public function new_scope($scope, array $fields = array())
	{
		return parent::new_scope($scope, $fields);
	}

	

}
