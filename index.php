<?php

declare(strict_types=1);

require_once('autoload.php');

// Первое задание
echo "Первое задание";
echo "\n";
$user = new Person(35, 'Valera', 'Sokolov');
echo $user->name . "\n";

$userAsString = serialize($user);
echo $userAsString . "\n";

$userAsString = str_replace('Valera', "Andrey", $userAsString);
echo $userAsString . "\n";

$newUser = unserialize($userAsString);
echo $newUser->name . "\n" . "\n";

// Второе задание
$user2 = new Person(25, 'Ivan', 'Ivanov');
$user3 = new Person(20, 'Petr', 'Petrov');
echo "Второе задание" . "\n";

function printIterable(iterable $myIterable): void
{
    foreach ($myIterable as $item) {
        echo $item->name;
        echo "\n";
    }
}

$List = new PeopleList([$user, $user2, $user3]);
$List->rewind();
echo $List->key() . "\n";
$List->next();
$List->next();
echo $List->key() . "\n";
echo $List->current()->surname . "\n" . "\n";
printIterable($List);

