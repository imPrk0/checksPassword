<?php
/**
 * Name: Password Check Class
 * Author: Prk
 * WebSite: https://www.cprk.cc/ & https://imprk.me/
 * Date: 2022-04-29 (GMT+8)
 * Location: Shanghai, People's Republic of China
 * GitHub: https://github.com/BiliPrk/checksPassword
 */

    class password_check {

        /* Encryption Password */
        public function encryption ( $password ) {
            return md5 (
                md5 ( $password ) . md5 ( '651605', '12h3u929eubc92e1qugfkegb2f' )
            );
        }

        /* Normal Password */
        public function normalPassword ( $password ) {
            if ( preg_match ( '/^[A-Za-z0-9]{8,16}$/', $password ) ) return true;
            else return false;
        }

        /* Only Numbers Password */
        public function onlyNum ( $password ) {
            if ( preg_match ( '/^[0-9]+$/', $password ) ) return true;
            else return false;
        }

        /* Lower Case Letters Password */
        public function onlyLowerCase ( $password ) {
            if ( preg_match ( '/^[a-z]+$/', $password ) ) return true;
            else return false;
        }

        /* Uppercase Letter Password */
        public function onlyUppercase ( $password ) {
            if ( preg_match ( '/^[A-Z]+$/', $password ) ) return true;
            else return false;
        }

        /* Only Letter Password */
        public function onlyLetter ( $password ) {
            if ( preg_match ( '/^[a-zA-Z]+$/', $password ) ) return true;
            else return false;
        }
    }