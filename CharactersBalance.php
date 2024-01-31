<?php

class CharactersBalance
{
    public function isValid($s): bool
    {
        $st = new SplStack();

        $charactersLen = strlen($s);

        for ($i = 0; $i < $charactersLen; $i++) {
            $c = $s[$i];

            if ($c === '(') {
                $st->push(')');
            } elseif ($c === '[') {
                $st->push(']');
            } elseif ($c === '{') {
                $st->push('}');
            } else {
                if ($st->isEmpty()) {
                    return false;
                }
                if ($st->top() !== $c) {
                    return false;
                }
                $st->pop();
            }
        }

        return $st->isEmpty();
    }
}