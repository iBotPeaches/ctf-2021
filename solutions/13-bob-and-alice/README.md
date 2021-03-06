# Challenge 13 (Bob & Alice) Solve

* Category - Cryptography
* Difficulty - Extreme

![](challenge-13.png)

---

 * So our first Extreme challenge has shown up and it appears based on the name Bob & Alice as well as having an encrypted RSA message probably means we should break it.
 * For those unaware with RSA. The short version is the public key is a large number that is the product of two large primes
 * So for this, we need to figure out which two numbers (prime) equal:
   * `78599264824825256413656134466699332704809299388067067091173870046982888945647102332971073850638310197539`
 * You can't exactly plug this into PHP to solve.
 * Thankfully, [rsacrack](https://github.com/b4den/rsacrack) exists and we can run that.

```
➜  time docker run -it b4den/rsacrack 78599264824825256413656134466699332704809299388067067091173870046982888945647102332971073850638310197539
[*] pubkey.e: 65537
[*] pubkey.n: 78599264824825256413656134466699332704809299388067067091173870046982888945647102332971073850638310197539
[*] Key looks like 346 bits
[*] Using cadonfs to compute primes
[*] results are: [u'8914282203164756816216326848781905427517623527553031', u'8817228693626153298732744489555474585986530556446469', 65537L]
[*] Key extraction done.
-----BEGIN RSA PRIVATE KEY-----
MIHcAgEAAiwCMXy/9nC4MuFYvjF5+0OBl/8q9T0IRCrdDxtxXWZxcU0KYCYyWCovBLZJIwIDAQAB
AiwApy1mloC/R17zJkXi9N4HovL1nmkak9z4J/vH7grbIuAhsvYrYezuwQtfWQIWF9NmPsd/kQ8d
hqHXauT4nB5BJDg4BwIWF5D+IOU0TZVu12EvRS4lM4wwcgMHBQIWAbFF8Et10k7k+nbXr3cw56o+
5PAvKQIWAQhPHROYLhzrTVDQ5mBfa/ZSfwxpDgIWCrDGxp4FkaPK1Gabo4M/vNOcE4VWKQ==
-----END RSA PRIVATE KEY-----

0.17user 0.08system 46:31.75elapsed 0%CPU (0avgtext+0avgdata 53336maxresident)k
```

 * It took 46 minutes on my own computer, but we found the two primes:
   * `8914282203164756816216326848781905427517623527553031`
   * `8817228693626153298732744489555474585986530556446469`
 * So now, how do we take that private key to decrypt that message?
 * We could try a bunch of online services, but I fear they will not work.
 * We can see this key uses the scheme - `Crypt::RSA::ES::OAEP`
   * If we Google that, we end up with some [cpan modules for perl](https://metacpan.org/pod/Crypt::RSA::ES::OAEP).
---
 * Perl is not a language I'm particular fluent in and writing something to decode a key will eat some time.
 * So time to buy the hints.
   * The first hint was `RSA-Crack`, which we already did :(
   * The second hint was `The Cicada 3301 Mystery (Puzzle 1 - 2nd Chance)`
     * So this is new. Time to google.
   * We stumble upon a [blog post](https://connortumbleson.com/2021/04/12/the-cicada-3301-mystery-puzzle-1-extra/)
     * This post after reading has an actual perl snippet for decoding a message.
---
```
use Crypt::RSA;

my $algo = new Crypt::RSA;
my $keychain = new Crypt::RSA::Key;

my ($public, $private) = $keychain->generate(
 'q' => '8914282203164756816216326848781905427517623527553031',
 'p' => '8817228693626153298732744489555474585986530556446469',
 'e' => '65537'
);

$encrypted = "
-----BEGIN COMPRESSED RSA ENCRYPTED MESSAGE-----
Version: 1.99
Scheme: Crypt::RSA::ES::OAEP

eJwB0QIu/TEwADcwNABDeXBoZXJ0ZXh0AL2gYBzajIymPQQX2lII44ZV+H/Kyhi0/2zvKEnErIH4
c/TSUobfrLDWE9kAeEO5mmFfyNpimpkAPGI0A1b0O1MsKTaXAjpKOFKsSd793iv5PeJvFgGFKgAo
VtNjkEPer2vEqMIg0T+TVnG871VfyFHxtSDKN7oMBNES8R7WlbMcPYpYAF3ZyWF3R9w2H7jugdmm
5kZdRlr6ojz03vbzB8EjfkAdgeEKM3wOPxetiPIAB0kaGjhf5t0/7zUR0y+ybYozo0zpj9HC1HGT
RCVkIPB2lVRlHj9SPETuWgCl/q55ozlqiQrFKIiffN3YdJXnUfQ1Id7N+lziAxjdmPzYg9kZ8ea5
i549AbU3alySzeFqSL5GTSJUrqeBamftzZtr34h7l688xQMUrWyplYUji9fj0z0Bes8I8bdv+5sd
Ycx7IBrpADCBDJix/NKVMxozjvgmGuASew4tHiH9x1Cp4gFKzDBuD8YptbwOZfABTZmRXW7g+s5m
kJklSleOBnZbhPLO/EyNAiqklmkOAczEBfOqiswEvvgJMzbQfYOy+Dy/UnFGLeT93lzF5uTZFl+6
Qv4AL4LaHoQBQunm2a0w6yLiFZJvI6vG8e5LDD1NCBgBy5IK44O0l6UwqtxHbmfCnQe+JwB55W6A
bJAdTv5VdCIqTufwt6H2Gl9FaMI1dDTOYva8Cy6+RED3xj6t22e6AV97/46blUIA6aULl3CPNeRi
2FBEhclp7LqOSV9zz4y5cgz70f1QQqJ2VN4BC5L+5nYgjmLKWxaWsfRe2goMcGS0V47X2AD+I7w8
CW4+gIvsauz7WR0LsQDcYFaVIM4UCGsjDauVv+mSS4OVdb8bT+PJeQdafrPYDmglzvyTmvwgzm+m
AQ1/oUctd8OfBu1DLkyp5tp5pT++xJymrU7N0eCv9Ru9RGT5TAmoJ3kkbv9ktmD9
=6rEf5vwjDDZYkBo1d9iO2A==
-----END COMPRESSED RSA ENCRYPTED MESSAGE-----
";

print $algo->decrypt(
 Cyphertext => $encrypted,
 Key        => $private,
 Armour     => 1,
);
```
 * So now all that is left is to run that script.

```
➜  perl solve.pl 
TOAD{8R34k1nG-rS4-1n-4-F3W-8172}
```

 * Finally. Our flag.
---
* You are left with the flag - `TOAD{8R34k1nG-rS4-1n-4-F3W-8172}`.