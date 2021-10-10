# Attempting to exploit

_https://github.com/laravel/framework/pull/35865_

---

I was intentionally trying to exploit this for a CTF and this has been made more difficult or entirely patched in future versions of PHP (8).

I for example could not ever exploit this on pgsql or sqlite, as I first started wanting to exploit in as simple as possible (sqlite) then went down the list.

Take this example:
```
User::query()
    ->where('id', $request->input('id'));
    ->where('is_admin', 0)
    ->get();
```

I would expect with - `http://127.0.0.1:8002/users?id[]=1&id[]=1` to exploit this, but in fact I get

```
SQLSTATE[HY093]: Invalid parameter number (SQL: select * from `users` where `id` = 1 and `is_admin` = 1)
```

or if we emulate prepares.

```
SQLSTATE[HY093]: Invalid parameter number: number of bound variables does not match number of tokens (SQL: select * from `users` where `id` = 1 and `is_admin` = 1)
```

Tracked this down to a [php bug #72368](https://bugs.php.net/bug.php?id=72368), which was submitted way back in 2016 but resolved in Dec 2020. So if I back-traced back to php74