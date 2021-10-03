# Challenge 10 (ICANN) Solve

* Category - Web
* Difficulty - Medium

![](challenge-10.png)

---

* This challenge was the first to really step out the page
* The hint from the text says "TXT". The challenge is also named ICANN.
  * So we have something about TXT and ICANN. My gut says DNS.

```
➜ dig txt +short challenges-a.[redacted].com
"TOAD{7H3-7x7-R3c0rd-h45-7h3-53cr375}"
```

* Sure enough, a TXT DNS record existed under the domain for the challenge.

---
* You are left with the flag - `TOAD{7H3-7x7-R3c0rd-h45-7h3-53cr375}`.