<?php
$char = mb_str_split("あいうえおかきくけこさしすせそたちつてとなにぬねのはひふへほまみむめもやゆよらりるれろわゐゑをん", 1, 'utf-8');
for($i=0; $i<300; $i++){
    shuffle($char);
    echo $char[0];
}