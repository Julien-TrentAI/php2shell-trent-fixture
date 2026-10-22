FROM php:8.3.20-cli
COPY public/ /srv/worker/
CMD ["php", "-S", "0.0.0.0:9000", "-t", "/srv/worker"]
