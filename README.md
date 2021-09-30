# Sourcetoad CTF 2021

 * `web/challenges` - each folder represents a challenge.
 * `web/common` - Styles used by all challenges.
 * `setup` - any non-public setup (mysql, etc) needed for a challenge.

---
# Flags

<details>
 <summary>See Flags</summary>

 1. `TOAD{ThisIsTheFirstFlag}` - Easy - Web
 2. `TOAD{This_Is_The_Flag}` - Easy - Steganography
 3. `TOAD{7h15157h3fl46y0u4r3l00k1n6f0r}` - Easy - File/Text
 4. `TOAD{SO_YOU_NOW_ROT_EHH_CONGRATS}` - Easy - Crypto
 5. `TOAD{5t394nO9r4PHy15cooOoOol}` - Medium - Steganography
 6. `TOAD{W3lcomeToTheOutGuessJ0urney}` - Medium - Steganography
 7. `TOAD{XXD_IS_LI3GG}` - Medium - File/Text
 8. `TOAD{5Ql-1Nj3c710n5-4r3-345Y}` - Medium - Web
 9. `TOAD{5o-YOu-knOW-How-7O-mOdIfy-CooKI3Z}` - Medium Hard - Web
 10. `TOAD{7H3-7x7-R3c0rd-h45-7h3-53cr375}` - Medium - Web
 11. `TOAD{51nc3-5P1d3r5-L1573n-70-7h323}` - Medium - Web
 12. `TOAD{R3V3r53-r3v3r23}` - Medium Hard - File/Text
 13. `TOAD{8R34k1nG-rS4-1n-4-F3W-8172}` - Extreme - Crypto
 14. `TOAD{XSS_IS_FUN}` - Medium Hard - Web
 15. `TOAD{xX3-15-c0mpL373-yAy}` - Hard - Web
 16. `TOAD{57R1n95-C0mM4ND-15-C00l}` - Hard - File/Text
 17. `TOAD{un10N_1Nj3c710N_1S_K3wL}` - Very Hard - Web
 18. `TOAD{BRAIN_DUCK}` - Easy - File/Text
 19. `TOAD{uRl_maNIpUlaTi0N_I5_R33l}` - Easy - Web
 20. `TOAD{1HdR_BL0CK}` - Very Hard - Steganography
 21. `TOAD{ov3Rfl0W_TH3_r1v3r}` - Very Hard - RE

</details>

---
# Points

 * Easy - 100
 * Medium - 250
 * Medium Hard - 400
 * Hard - 600
 * Very Hard - 1000
 * Extreme - 2000

---
# Hints
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

---
# Setup

 * All challenges should be in dynamic point mode, but never lose more than 15% of their score.
 * IE (A 1000 point question can only decay to 850)
 * All hints should cost 1.5% of the question
 * Categories are Web / Steganography / "File/Text" / Crypto