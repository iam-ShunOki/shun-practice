FROM nginx:1.20-alpine

FROM node:18-alpine as node

ENV TZ Asia/Tokyo

COPY ./docker/web/default.conf /etc/nginx/conf.d/default.conf

COPY --from=node /usr/local/bin usr/local/bin
COPY --from=node /usr/local/lib usr/local/lib
COPY --from=node /opt /opt