# Setup Challenge 17

1. `CREATE USER 'challenge17'@'localhost' IDENTIFIED BY 'qwbfh5RHk3V7Lu6Rq0HK';`
2. `CREATE DATABASE challenge17;`
3. `GRANT SELECT ON challenge17.* TO 'challenge17'@'localhost';`
4. `mysql -u root -p challenge17 < dump.sql`
5. Edit `index.php` from challenge to inject proper db creds
