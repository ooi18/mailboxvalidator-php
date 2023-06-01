Usage
===========================

## Validate email

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use MailboxValidator\EmailValidation ;

$mbv = new EmailValidation ('PASTE_YOUR_API_KEY_HERE');

$results = $mbv->validateEmail('example@example.com');

if ($results === null) {
	echo "Error connecting to API.\n";
}
else if (trim($results->error_code) === '') {
	echo 'email_address = ' . $results->email_address . "\n";
	echo 'domain = ' . $results->domain . "\n";
	echo 'is_free = ' . $results->is_free . "\n";
	echo 'is_syntax = ' . $results->is_syntax . "\n";
	echo 'is_domain = ' . $results->is_domain . "\n";
	echo 'is_smtp = ' . $results->is_smtp . "\n";
	echo 'is_verified = ' . $results->is_verified . "\n";
	echo 'is_server_down = ' . $results->is_server_down . "\n";
	echo 'is_greylisted = ' . $results->is_greylisted . "\n";
	echo 'is_disposable = ' . $results->is_disposable . "\n";
	echo 'is_suppressed = ' . $results->is_suppressed . "\n";
	echo 'is_role = ' . $results->is_role . "\n";
	echo 'is_high_risk = ' . $results->is_high_risk . "\n";
	echo 'is_catchall = ' . $results->is_catchall . "\n";
	echo 'mailboxvalidator_score = ' . $results->mailboxvalidator_score . "\n";
	echo 'time_taken = ' . $results->time_taken . "\n";
	echo 'status = ' . $results->status . "\n";
	echo 'credits_available = ' . $results->credits_available . "\n";
}
else {
	echo 'error_code = ' . $results->error_code . "\n";
	echo 'error_message = ' . $results->error_message . "\n";
}
?>
```


## Check if an email is from a disposable email provider

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use MailboxValidator\EmailValidation;

$mbv = new EmailValidation('PASTE_YOUR_API_KEY_HERE');

$results = $mbv->isDisposableEmail('example@example.com');

if ($results === null) {
	echo "Error connecting to API.\n";
}
else if (trim($results->error_code) === '') {
	echo 'email_address = ' . $results->email_address . "\n";
	echo 'is_disposable = ' . $results->is_disposable . "\n";
	echo 'credits_available = ' . $results->credits_available . "\n";
}
else {
	echo 'error_code = ' . $results->error_code . "\n";
	echo 'error_message = ' . $results->error_message . "\n";
}
?>
```

## Check if an email is from a free email provider

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use MailboxValidator\EmailValidation;

$mbv = new EmailValidation('PASTE_YOUR_API_KEY_HERE');

$results = $mbv->isFreeEmail('example@example.com');

if ($results === null) {
	echo "Error connecting to API.\n";
}
else if (trim($results->error_code) === '') {
	echo 'email_address = ' . $results->email_address . "\n";
	echo 'is_free = ' . $results->is_free . "\n";
	echo 'credits_available = ' . $results->credits_available . "\n";
}
else {
	echo 'error_code = ' . $results->error_code . "\n";
	echo 'error_message = ' . $results->error_message . "\n";
}
?>
```