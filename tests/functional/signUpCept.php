<?php 
$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('perform actions and see result');

$I->amOnPage('/');
$I->click('Sign Up');
$I->seeCurrentUrlEquals('/register');

$I->fillField('Username:', 'JaneDoe');
$I->fillField('Email:','jane@example.com');
$I->fillField('Password:','demo');
$I->fillField('Password Confirmation:','demo');
$I->click('Sign Up');

$I->seeCurrentUrlEquals('');

$I->see('Welcome to LaraBook!');

$I->seeRecord('users',[
    'username' =>'JaneDoe',
    'email' =>'jane@example.com'
]);

$I->assertTrue(Auth::check());
