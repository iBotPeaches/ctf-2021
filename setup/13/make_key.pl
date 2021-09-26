use Crypt::RSA;

my $rsa = new Crypt::RSA;

my ($public, $private) = $rsa->keygen(
	'Identity' => 'Toad Toader <info@sourcetoad.com>',
	'Size' => 346,
	'Filename' => 'key',
) or die $rsa->errstr();

my $secretText = $rsa->encrypt(
	'Message' => 'TOAD{8R34k1nG-rS4-1n-4-F3W-8172}',
	'Key' => $public,
	'Armour' => 1
) or die $rsa->errstr();

print $secretText;
