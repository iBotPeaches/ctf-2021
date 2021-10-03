# Setup Challenge 8

1. `CREATE USER 'challenge8'@'localhost' IDENTIFIED BY 'qwbfh5RH3KV7Lu6Rq0HK';`
2. `CREATE DATABASE challenge8;`
3. `GRANT SELECT ON challenge8.* TO 'challenge8'@'localhost';`
4. `mysql -u challenge8 -p challenge8 < dump.sql`
5. Edit `authenticate.php` from challenge to inject proper db creds
