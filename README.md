# Sourcetoad CTF 2021
_Produced by @iBotPeaches (Connor Tumbleson), for a Q4 2021 Engineer challenge._

 * Originally hosted on CTFd.io with a combination of some t3.nano instance on AWS
 * Most puzzles were simple `index.html` files leading to assets/images/files.
 * Complex puzzles leveraged the services feature of CTFd to deploy a docker image.

---

 * `web/challenges` - each folder represents a challenge.
 * `web/common` - Styles used by all challenges.
 * `setup` - any non-public setup (mysql, etc) needed for a challenge.
 * `notes` - any notes/partial solves for the challenge to help for the solution.
 * `solutions` - written guides for all puzzles (to help teach afterwards).
 * `ctf` - The `challenge.yml` [specification](https://github.com/CTFd/ctfcli/blob/master/ctfcli/spec/challenge-example.yml) built files for CTFd.

## Intro

 * This repo exists to make building the CTF easier. It has no real automation to spin up.
 * The real setup for this for our CTF required a few AWS servers and a mix of Apache/Nginx.
 * [CTFd](https://cloud.ctfd.io/) was used for this original event.
 * It may be open sourced afterwards, because all of these puzzles might be helpful to others to train/learn
   * They were all made from hints of others or just simply made up

---
## Flags

See [FLAGS.md](solutions/FLAGS.md), but I encourage first reading the [solutions](solutions) directory for explanations.

---
## Points

 * Easy - 100
 * Normal - 150
 * Medium - 250
 * Medium Hard - 400
 * Hard - 600
 * Very Hard - 1000
 * Extreme - 2000
 * Ultimate - 3000

---
## Hints
 1. N/A
 2. Alt Text
 3. JS Auth - Look up atob
 4. Caesar Cipher
 5. Exif Data
 6. Hex Editor -> OutGuess
 7. Hex -> Binary
 8. SQL Injection (OR)
 9. Cookies / Serialization
 10. DNS TXT Record
 11. robots.txt
 12. Hex (Reversed) -> Binary
 13. RSA-Crack
 14. XSS
 15. XXE
 16. Hex Editor / Strings Command
 17. SQL Injection (UNION)
 18. Brain F*ck
 19. URL Manipulation
 20. IHDR
 21. Stack Smashing
 22. Headers
 23. SSRF
 24. User-Agent
 25. CVE-2021-3129
 26. SSSS
 27. Mass Assignment
---
## CTFD Setup

 * All challenges should be in dynamic point mode, but never lose more than 15% of their score.
 * IE (A 1000 point question can only decay to 850)
 * All hints should cost a max of 15% of the question
 * Categories are Web / Steganography / "File/Text" / Cryptography / RE / Laravel