# Password Check Class
Check the format and usability of your passwords to improve your account security!

## How to use?

U just need to download the class file to your project!  
And called with code:
```PHP
include_once './checkPassword.class.php';
```  
  
If you want to encrypt the password:  
```PHP
encryption ( $_POST['password'] );
```  
  
Determine if a password is too simple:  
```PHP
if ( onlyNum ( $password ) ) $easy = true;
if ( onlyLowerCase ( $password ) ) $easy = true;
if ( onlyLowerCase ( $onlyUppercase ) ) $easy = true;
if ( onlyLowerCase ( $onlyLetter ) ) $easy = true;
if ( $easy == true ) exit ( 'YOUR PASSWORD IS TOO SIMPLE!' );
else // Code...
```
