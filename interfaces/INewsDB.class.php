<?php
/**
*	inerface INewsDB
*		contains basic methods for working with news feed
*/
interface INewsDB{
	/**
	*	Add a new entry to the news feed
	*	
	*	@param string $title - headline
	*	@param string $category - category
	*	@param string $description - text of article
	*	@param string $source - source
	*	
	*/
	function saveNews($title, $category, $description, $source);
	/**
	*	Fetching all posts from the news feed
	*	
	*	@return result - the result set as an array
	*/
	function getNews();
	/**
	*	Remove an entry from a news feed
	*	
	*	@param integer $id - ID of the record to be deleted
	*	
	*/
	function deleteNews($id);
}
?>