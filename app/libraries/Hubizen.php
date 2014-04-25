<?php

class Hubizen {

	static function word($user_ip) {
		$words = array('apple', 'arm', 'banana', 'bike', 'bird', 'book', 'chin', 'clam', 'clover', 'club', 'corn', 'crayon', 'crow', 'crown', 'crowd', 'crib', 'desk', 'dime', 'dirt', 'dress', 'fang', 'field', 'flag', 'flower', 'fog', 'game', 'heat', 'hill', 'home', 'horn', 'hose', 'joke', 'juice', 'kite', 'lake', 'maid', 'mask', 'mice', 'milk', 'mint', 'meal', 'meat', 'moon', 'mother', 'morning', 'name', 'nest', 'nose', 'pear', 'pen', 'pencil', 'plant', 'rain', 'river', 'road', 'rock', 'room', 'rose', 'seed', 'shape', 'shoe', 'shop', 'sink', 'snail', 'snake', 'snow', 'soda', 'sofa', 'star', 'step', 'stew', 'stove', 'straw', 'summer', 'swing', 'table', 'tank', 'tent', 'toes', 'tree', 'vest', 'water', 'wing', 'winter', 'woman', 'alarm', 'animal', 'aunt', 'bait', 'balloon', 'bath', 'bead', 'bean', 'bedroom', 'boot', 'bread', 'brick', 'camp', 'chicken', 'children', 'crook', 'deer', 'dock', 'doctor', 'downtown', 'drum', 'dust', 'eye', 'family', 'father', 'fight', 'flesh', 'food', 'frog', 'goose', 'grade', 'grandfather', 'grandmother', 'grape', 'grass', 'hook', 'horse', 'jail', 'jam', 'kiss', 'kitten', 'light', 'loaf', 'lock', 'lunch', 'lunchroom', 'meal', 'mother', 'notebook', 'owl', 'pail', 'park', 'rabbit', 'rake', 'robin', 'sack', 'sail', 'scale', 'sea', 'sister', 'soap', 'spark', 'space', 'spoon', 'spot', 'spy', 'summer', 'tiger', 'toad', 'town', 'trail', 'tramp', 'tray', 'trick', 'trip', 'uncle', 'vase', 'winter', 'water', 'week', 'wheel', 'wish', 'wool', 'yard', 'zebra', 'actor', 'airplane', 'airport', 'army', 'baseball', 'beef', 'birthday', 'boy', 'brush', 'bushes', 'butter' , 'cast', 'cave', 'cent', 'cherries', 'cherry', 'cobweb', 'coil', 'cracker', 'dinner', 'eggnog', 'elbow', 'face', 'fireman', 'flavor', 'gate', 'glove', 'glue', 'goldfish', 'goose', 'grain', 'hair', 'haircut', 'hobbies', 'holiday', 'hot', 'jellyfish', 'ladybug', 'mailbox', 'number', 'oatmeal', 'pail', 'pancake', 'pear', 'pest', 'popcorn', 'queen', 'quicksand', 'quiet', 'quilt', 'rainstorm', 'scarecrow', 'scarf', 'stream', 'street', 'sugar', 'throne', 'toothpaste', 'twig', 'volleyball', 'wood', 'wrench'
		);
		return $words[abs(crc32(ip2long($user_ip))) % count($words)];
	}

}