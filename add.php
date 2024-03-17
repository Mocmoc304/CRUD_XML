<?php
	session_start();
	if(isset($_POST['add'])){
		//open xml file
		$books = simplexml_load_file('files/books.xml');
		$book = $books->addChild('book');
		$book->addAttribute('category', $_POST['category']);
		$book->addAttribute('cover', $_POST['cover']);
		$title = $book->addChild('title', $_POST['title']);
		$title->addAttribute('lang', $_POST['lang']);
		$book->addChild('author', $_POST['author']);
		$book->addChild('year', $_POST['year']);
		$book->addChild('price', $_POST['price']);
		// Save to file
		// file_put_contents('files/members.xml', $users->asXML());
		// Prettify / Format XML and save
		$dom = new DomDocument();
		$dom->preserveWhiteSpace = false;
		$dom->formatOutput = true;
		$dom->loadXML($books->asXML());
		$dom->save('files/books.xml');
		// Prettify / Format XML and save
 
		$_SESSION['message'] = 'Member added successfully';
		header('location: index.php');
	}
	else{
		$_SESSION['message'] = 'Fill up add form first';
		header('location: index.php');
	}
?>