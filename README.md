# php2shell Trent fixture

A tiny PHP guestbook used to test that Trent flags PHP runtimes vulnerable to
php2shell (CVE-2026-109618, CVE-2026-109619). It pins vulnerable PHP versions on
purpose. Do not deploy it.

Expected findings: `Dockerfile` line 1, `docker-compose.yml` line 3,
`composer.json` line 5, `infra/main.tf` line 12. The `nginx` image and the
`php:8.3-fpm` worker are not vulnerable pins.
