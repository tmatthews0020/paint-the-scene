FROM wordpress:4.9.8

COPY ./assets ./wp-content/paint-the-scene/assets
COPY ./*.php ./wp-content/paint-the-scene/
COPY style.css ./wp-content/paint-the-scene/

EXPOSE 80:80
