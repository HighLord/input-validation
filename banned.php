<?php
//This contains a list of keywords enabling sql injections and xss attacks we dont want our user to use.
// When adding yours, remember to escape special characters
define('PROHIBITED_CHARACTERS', 'select|insert|update|delete|union|join|%|\||\/|\'|-|\*|=|<|>|\(|\)|,|"');
