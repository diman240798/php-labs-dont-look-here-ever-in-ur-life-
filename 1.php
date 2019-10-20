<?php

preg_match_all('/[a z]([a-z])[a-z]([a-z])[a-z]/i', 'aBcE fGHij', $matches);
print_r($matches);

preg_match_all('/[a z]([a-z])[a-z]([a-z])[a-z]/', 'aBcE fGHij', $matches);
print_r($matches);

preg_match_all('/[a z]([a-z])[a-z]([a-z])[a-z]/i', 'aBcE fGHij', $matches, PREG_PATTERN_ORDER);
print_r($matches);

preg_match_all('/[a z]([a-z])[a-z]([a-z])[a-z]/i', 'aBcE fGHij', $matches, PREG_SET_ORDER);
print_r($matches);