<?php
namespace ResonantCore\PHPFuture;

class Security
{
    /**
     * Prevent timing attack
     * @param  string $knownString
     * @param  string $userString
     * @return bool
     */
    public function hash_equals($knownString, $userString)
    {
        if (function_exists('\\hash_equals')) {
            return \hash_equals($knownString, $userString);
        }
        if (strlen($knownString) !== strlen($userString)) {
            return false;
        }
        $len = strlen($knownString);
        $result = 0;
        for ($i = 0; $i < $len; $i++) {
            $result |= (ord($knownString[$i]) ^ ord($userString[$i]));
        }
        // They are only identical strings if $result is exactly 0...
        return 0 === $result;
    }
}
