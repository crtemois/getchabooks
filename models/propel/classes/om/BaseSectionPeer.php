<?php


/**
 * Base static class for performing query and update operations on the 'section' table.
 *
 * 
 *
 * @package    propel.generator..om
 */
abstract class BaseSectionPeer {

	/** the default database name for this class */
	const DATABASE_NAME = GB_DATABASE;

	/** the table name for this class */
	const TABLE_NAME = 'section';

	/** the related Propel class for this table */
	const OM_CLASS = 'Section';

	/** the related TableMap class for this table */
	const TM_CLASS = 'SectionTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 19;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 19;

	/** the column name for the NUM field */
	const NUM = 'section.NUM';

	/** the column name for the REQUIRES_BOOKS field */
	const REQUIRES_BOOKS = 'section.REQUIRES_BOOKS';

	/** the column name for the NAME field */
	const NAME = 'section.NAME';

	/** the column name for the SLUG field */
	const SLUG = 'section.SLUG';

	/** the column name for the SCHOOL_SLUG field */
	const SCHOOL_SLUG = 'section.SCHOOL_SLUG';

	/** the column name for the CAMPUS_SLUG field */
	const CAMPUS_SLUG = 'section.CAMPUS_SLUG';

	/** the column name for the TERM_SLUG field */
	const TERM_SLUG = 'section.TERM_SLUG';

	/** the column name for the F_ID field */
	const F_ID = 'section.F_ID';

	/** the column name for the NB_ITEMS field */
	const NB_ITEMS = 'section.NB_ITEMS';

	/** the column name for the PROFESSOR field */
	const PROFESSOR = 'section.PROFESSOR';

	/** the column name for the COURSE_ID field */
	const COURSE_ID = 'section.COURSE_ID';

	/** the column name for the SPIDERED_AT field */
	const SPIDERED_AT = 'section.SPIDERED_AT';

	/** the column name for the SHALLOW_SPIDERED_AT field */
	const SHALLOW_SPIDERED_AT = 'section.SHALLOW_SPIDERED_AT';

	/** the column name for the TOUCHED field */
	const TOUCHED = 'section.TOUCHED';

	/** the column name for the B_ID field */
	const B_ID = 'section.B_ID';

	/** the column name for the BOOKSTORE_TYPE field */
	const BOOKSTORE_TYPE = 'section.BOOKSTORE_TYPE';

	/** the column name for the ID field */
	const ID = 'section.ID';

	/** the column name for the CREATED_AT field */
	const CREATED_AT = 'section.CREATED_AT';

	/** the column name for the UPDATED_AT field */
	const UPDATED_AT = 'section.UPDATED_AT';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Section objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Section[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Num', 'RequiresBooks', 'Name', 'Slug', 'SchoolSlug', 'CampusSlug', 'TermSlug', 'FId', 'NbItems', 'Professor', 'CourseId', 'SpideredAt', 'ShallowSpideredAt', 'Touched', 'BId', 'BookstoreType', 'Id', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('num', 'requiresBooks', 'name', 'slug', 'schoolSlug', 'campusSlug', 'termSlug', 'fId', 'nbItems', 'professor', 'courseId', 'spideredAt', 'shallowSpideredAt', 'touched', 'bId', 'bookstoreType', 'id', 'createdAt', 'updatedAt', ),
		BasePeer::TYPE_COLNAME => array (self::NUM, self::REQUIRES_BOOKS, self::NAME, self::SLUG, self::SCHOOL_SLUG, self::CAMPUS_SLUG, self::TERM_SLUG, self::F_ID, self::NB_ITEMS, self::PROFESSOR, self::COURSE_ID, self::SPIDERED_AT, self::SHALLOW_SPIDERED_AT, self::TOUCHED, self::B_ID, self::BOOKSTORE_TYPE, self::ID, self::CREATED_AT, self::UPDATED_AT, ),
		BasePeer::TYPE_RAW_COLNAME => array ('NUM', 'REQUIRES_BOOKS', 'NAME', 'SLUG', 'SCHOOL_SLUG', 'CAMPUS_SLUG', 'TERM_SLUG', 'F_ID', 'NB_ITEMS', 'PROFESSOR', 'COURSE_ID', 'SPIDERED_AT', 'SHALLOW_SPIDERED_AT', 'TOUCHED', 'B_ID', 'BOOKSTORE_TYPE', 'ID', 'CREATED_AT', 'UPDATED_AT', ),
		BasePeer::TYPE_FIELDNAME => array ('num', 'requires_books', 'name', 'slug', 'school_slug', 'campus_slug', 'term_slug', 'f_id', 'nb_items', 'professor', 'course_id', 'spidered_at', 'shallow_spidered_at', 'touched', 'b_id', 'bookstore_type', 'id', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Num' => 0, 'RequiresBooks' => 1, 'Name' => 2, 'Slug' => 3, 'SchoolSlug' => 4, 'CampusSlug' => 5, 'TermSlug' => 6, 'FId' => 7, 'NbItems' => 8, 'Professor' => 9, 'CourseId' => 10, 'SpideredAt' => 11, 'ShallowSpideredAt' => 12, 'Touched' => 13, 'BId' => 14, 'BookstoreType' => 15, 'Id' => 16, 'CreatedAt' => 17, 'UpdatedAt' => 18, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('num' => 0, 'requiresBooks' => 1, 'name' => 2, 'slug' => 3, 'schoolSlug' => 4, 'campusSlug' => 5, 'termSlug' => 6, 'fId' => 7, 'nbItems' => 8, 'professor' => 9, 'courseId' => 10, 'spideredAt' => 11, 'shallowSpideredAt' => 12, 'touched' => 13, 'bId' => 14, 'bookstoreType' => 15, 'id' => 16, 'createdAt' => 17, 'updatedAt' => 18, ),
		BasePeer::TYPE_COLNAME => array (self::NUM => 0, self::REQUIRES_BOOKS => 1, self::NAME => 2, self::SLUG => 3, self::SCHOOL_SLUG => 4, self::CAMPUS_SLUG => 5, self::TERM_SLUG => 6, self::F_ID => 7, self::NB_ITEMS => 8, self::PROFESSOR => 9, self::COURSE_ID => 10, self::SPIDERED_AT => 11, self::SHALLOW_SPIDERED_AT => 12, self::TOUCHED => 13, self::B_ID => 14, self::BOOKSTORE_TYPE => 15, self::ID => 16, self::CREATED_AT => 17, self::UPDATED_AT => 18, ),
		BasePeer::TYPE_RAW_COLNAME => array ('NUM' => 0, 'REQUIRES_BOOKS' => 1, 'NAME' => 2, 'SLUG' => 3, 'SCHOOL_SLUG' => 4, 'CAMPUS_SLUG' => 5, 'TERM_SLUG' => 6, 'F_ID' => 7, 'NB_ITEMS' => 8, 'PROFESSOR' => 9, 'COURSE_ID' => 10, 'SPIDERED_AT' => 11, 'SHALLOW_SPIDERED_AT' => 12, 'TOUCHED' => 13, 'B_ID' => 14, 'BOOKSTORE_TYPE' => 15, 'ID' => 16, 'CREATED_AT' => 17, 'UPDATED_AT' => 18, ),
		BasePeer::TYPE_FIELDNAME => array ('num' => 0, 'requires_books' => 1, 'name' => 2, 'slug' => 3, 'school_slug' => 4, 'campus_slug' => 5, 'term_slug' => 6, 'f_id' => 7, 'nb_items' => 8, 'professor' => 9, 'course_id' => 10, 'spidered_at' => 11, 'shallow_spidered_at' => 12, 'touched' => 13, 'b_id' => 14, 'bookstore_type' => 15, 'id' => 16, 'created_at' => 17, 'updated_at' => 18, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. SectionPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(SectionPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      Criteria $criteria object containing the columns to add.
	 * @param      string   $alias    optional table alias
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria, $alias = null)
	{
		if (null === $alias) {
			$criteria->addSelectColumn(SectionPeer::NUM);
			$criteria->addSelectColumn(SectionPeer::REQUIRES_BOOKS);
			$criteria->addSelectColumn(SectionPeer::NAME);
			$criteria->addSelectColumn(SectionPeer::SLUG);
			$criteria->addSelectColumn(SectionPeer::SCHOOL_SLUG);
			$criteria->addSelectColumn(SectionPeer::CAMPUS_SLUG);
			$criteria->addSelectColumn(SectionPeer::TERM_SLUG);
			$criteria->addSelectColumn(SectionPeer::F_ID);
			$criteria->addSelectColumn(SectionPeer::NB_ITEMS);
			$criteria->addSelectColumn(SectionPeer::PROFESSOR);
			$criteria->addSelectColumn(SectionPeer::COURSE_ID);
			$criteria->addSelectColumn(SectionPeer::SPIDERED_AT);
			$criteria->addSelectColumn(SectionPeer::SHALLOW_SPIDERED_AT);
			$criteria->addSelectColumn(SectionPeer::TOUCHED);
			$criteria->addSelectColumn(SectionPeer::B_ID);
			$criteria->addSelectColumn(SectionPeer::BOOKSTORE_TYPE);
			$criteria->addSelectColumn(SectionPeer::ID);
			$criteria->addSelectColumn(SectionPeer::CREATED_AT);
			$criteria->addSelectColumn(SectionPeer::UPDATED_AT);
		} else {
			$criteria->addSelectColumn($alias . '.NUM');
			$criteria->addSelectColumn($alias . '.REQUIRES_BOOKS');
			$criteria->addSelectColumn($alias . '.NAME');
			$criteria->addSelectColumn($alias . '.SLUG');
			$criteria->addSelectColumn($alias . '.SCHOOL_SLUG');
			$criteria->addSelectColumn($alias . '.CAMPUS_SLUG');
			$criteria->addSelectColumn($alias . '.TERM_SLUG');
			$criteria->addSelectColumn($alias . '.F_ID');
			$criteria->addSelectColumn($alias . '.NB_ITEMS');
			$criteria->addSelectColumn($alias . '.PROFESSOR');
			$criteria->addSelectColumn($alias . '.COURSE_ID');
			$criteria->addSelectColumn($alias . '.SPIDERED_AT');
			$criteria->addSelectColumn($alias . '.SHALLOW_SPIDERED_AT');
			$criteria->addSelectColumn($alias . '.TOUCHED');
			$criteria->addSelectColumn($alias . '.B_ID');
			$criteria->addSelectColumn($alias . '.BOOKSTORE_TYPE');
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.CREATED_AT');
			$criteria->addSelectColumn($alias . '.UPDATED_AT');
		}
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(SectionPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			SectionPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(SectionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Selects one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     Section
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = SectionPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Selects several row from the DB.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return SectionPeer::populateObjects(SectionPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(SectionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			SectionPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      Section $value A Section object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getId();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A Section object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Section) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Section object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     Section Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to section
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
		// Invalidate objects in SectionHasItemPeer instance pool,
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		SectionHasItemPeer::clearInstancePool();
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol + 16] === null) {
			return null;
		}
		return (string) $row[$startcol + 16];
	}

	/**
	 * Retrieves the primary key from the DB resultset row
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, an array of the primary key columns will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     mixed The primary key of the row
	 */
	public static function getPrimaryKeyFromRow($row, $startcol = 0)
	{
		return (int) $row[$startcol + 16];
	}
	
	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = SectionPeer::getOMClass();
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = SectionPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = SectionPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				SectionPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Populates an object of the default type or an object that inherit from the default.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     array (Section object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = SectionPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = SectionPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + SectionPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = SectionPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			SectionPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Course table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinCourse(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(SectionPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			SectionPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(SectionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(SectionPeer::COURSE_ID, CoursePeer::ID, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Selects a collection of Section objects pre-filled with their Course objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Section objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinCourse(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		SectionPeer::addSelectColumns($criteria);
		$startcol = SectionPeer::NUM_HYDRATE_COLUMNS;
		CoursePeer::addSelectColumns($criteria);

		$criteria->addJoin(SectionPeer::COURSE_ID, CoursePeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = SectionPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = SectionPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = SectionPeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				SectionPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = CoursePeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = CoursePeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = CoursePeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					CoursePeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (Section) to $obj2 (Course)
				$obj2->addSection($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining all related tables
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(SectionPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			SectionPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(SectionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(SectionPeer::COURSE_ID, CoursePeer::ID, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}

	/**
	 * Selects a collection of Section objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Section objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		SectionPeer::addSelectColumns($criteria);
		$startcol2 = SectionPeer::NUM_HYDRATE_COLUMNS;

		CoursePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + CoursePeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(SectionPeer::COURSE_ID, CoursePeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = SectionPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = SectionPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = SectionPeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				SectionPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined Course rows

			$key2 = CoursePeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = CoursePeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = CoursePeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					CoursePeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (Section) to the collection in $obj2 (Course)
				$obj2->addSection($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}

	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BaseSectionPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseSectionPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new SectionTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 *
	 * @return     string ClassName
	 */
	public static function getOMClass()
	{
		return SectionPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Section or Criteria object.
	 *
	 * @param      mixed $values Criteria or Section object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(SectionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Section object
		}

		if ($criteria->containsKey(SectionPeer::ID) && $criteria->keyContainsValue(SectionPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.SectionPeer::ID.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Performs an UPDATE on the database, given a Section or Criteria object.
	 *
	 * @param      mixed $values Criteria or Section object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(SectionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(SectionPeer::ID);
			$value = $criteria->remove(SectionPeer::ID);
			if ($value) {
				$selectCriteria->add(SectionPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(SectionPeer::TABLE_NAME);
			}

		} else { // $values is Section object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the section table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(SectionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += SectionPeer::doOnDeleteCascade(new Criteria(SectionPeer::DATABASE_NAME), $con);
			$affectedRows += BasePeer::doDeleteAll(SectionPeer::TABLE_NAME, $con, SectionPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			SectionPeer::clearInstancePool();
			SectionPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Section or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Section object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(SectionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Section) { // it's a model object
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SectionPeer::ID, (array) $values, Criteria::IN);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			// cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
			$c = clone $criteria;
			$affectedRows += SectionPeer::doOnDeleteCascade($c, $con);
			
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			if ($values instanceof Criteria) {
				SectionPeer::clearInstancePool();
			} elseif ($values instanceof Section) { // it's a model object
				SectionPeer::removeInstanceFromPool($values);
			} else { // it's a primary key, or an array of pks
				foreach ((array) $values as $singleval) {
					SectionPeer::removeInstanceFromPool($singleval);
				}
			}
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			SectionPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
	 * feature (like MySQL or SQLite).
	 *
	 * This method is not very speedy because it must perform a query first to get
	 * the implicated records and then perform the deletes by calling those Peer classes.
	 *
	 * This method should be used within a transaction if possible.
	 *
	 * @param      Criteria $criteria
	 * @param      PropelPDO $con
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
	{
		// initialize var to track total num of affected rows
		$affectedRows = 0;

		// first find the objects that are implicated by the $criteria
		$objects = SectionPeer::doSelect($criteria, $con);
		foreach ($objects as $obj) {


			// delete related SectionHasItem objects
			$criteria = new Criteria(SectionHasItemPeer::DATABASE_NAME);
			
			$criteria->add(SectionHasItemPeer::SECTION_ID, $obj->getId());
			$affectedRows += SectionHasItemPeer::doDelete($criteria, $con);
		}
		return $affectedRows;
	}

	/**
	 * Validates all modified columns of given Section object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Section $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SectionPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SectionPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(SectionPeer::DATABASE_NAME, SectionPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Section
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = SectionPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(SectionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(SectionPeer::DATABASE_NAME);
		$criteria->add(SectionPeer::ID, $pk);

		$v = SectionPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(SectionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(SectionPeer::DATABASE_NAME);
			$criteria->add(SectionPeer::ID, $pks, Criteria::IN);
			$objs = SectionPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseSectionPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSectionPeer::buildTableMap();

