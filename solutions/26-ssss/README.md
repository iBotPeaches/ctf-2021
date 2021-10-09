# Challenge 26 (Shamir) Solve

* Category - Cryptography
* Difficulty - Medium Hard

![](challenge-26.png)

 * This challenge appears to be another in the form of cryptography
 * The challenge is named Shamir, which you probably recognize as the S in RSA
 * So a bit of Googling finds [Shamir Secret Sharing](https://en.wikipedia.org/wiki/Shamir%27s_Secret_Sharing)
 * So then another Google to find an [online site](https://iancoleman.io/shamir/) for this.

![](challenge-26-shamir.png)

* So now the description of this webpage makes sense. We must need to find 4 parts.
* The first is given and the 2nd is binary. So 2 down.
* The HTML source has another, and references a `custom.css` file.

```css
.color-green {
    content: '806fb3fa908d2e500acce2ea5c5e99e1b095e49c36b22338a735cc0cc79823a452ea3bf10e007fdf50b8dc66281722312e965beaec62b6cac816a9df1b8534e7f1e4afd557257c01e5ef4b0505f4da604fd73057e8e0e80fb94f2a3ec554144dedba6d0d47c2c727f0213156ff408c0baea6a2cb5a48daf465e99611b018d3dec4d'
}
```

* Which of course has another part.
* So now we have 4 parts. Lets head back.

![](challenge-26-solve.png)

* There we got the flag!

---
* You are left with the flag - `TOAD{5H4M1R-53CR375-4R3-CL3V3r-L1k3-4-PUn}`.