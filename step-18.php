<?php

class post{
	public $title;

	public $author;

	public $published;

	public function __construct($title,$author,$published)
	{
		$this->title=$title;
		$this->author=$author;
		$this->published = $published;

	}
}

$posts = [
new post('My first post','savi',true),
new post('My second post','nagarkar',true),
new post('My Third post','james',true),
new post('My fourth post', 'richrad',false)
];

// $unpublishedposts = array_filter($posts, function($post){
//         return $post->published;
// });

// $publishedposts = array_filter($posts, function($post){
//         return $post->published;
// });


// foreach ($posts as $post) {
// 	$post->published = true;
// }

// $modified = array_map(function ($post){
// 	return['title' => $post->title];
// }, $posts);

// $modified = array_map(function ($posts){

// 	$post->published = true;

// 	return $post;
// },$posts);


// $titles =array_map(function ($post){
// 	return  $post->title;
// }, $posts);

// $titles = array_column($posts, 'title');

// var_dump($titles);

// var_dump($modified);
// var_dump($posts);
// var_dump($unpublishedposts);
// var_dump($publishedposts);

// foreach ($posts as $index =>$post)

// {
// 	$posts[$index] = (array) $post;
// }

$posts  = array_map(function ($post){
	return (array) $post;
}, $posts);
// var_dump($posts);

// $titles =array_column($posts, 'title');

// var_dump($titles);

$authors =array_column($posts, 'author','title');

var_dump($authors);
?>