FROM alpine:3.8
RUN apk add sudo libcap tar curl
RUN adduser -S -h /jet -s /jet/login jet

RUN { wget --no-check-certificate -O - "http://jetware.io/appliances/jetware/wordpress4_lemp7_ssl_le-170713/file/container:docker/setup" || echo exit 1; } | sh

WORKDIR /jet

COPY ../changes/use/web_config/handler_config /jet/use/web_config/handler_config
RUN chown -R jet:nogroup /jet/use/web_config && chmod -R 755 /jet/use/web_config

COPY ../changes/own/packages /jet/own/packages
COPY ../changes/own/dependencies /jet/own/dependencies
COPY ../changes/own/requires /jet/own/requires
COPY ../changes/own/principal /jet/own/principal
COPY ../changes/own/sequence /jet/own/sequence

USER jet
VOLUME ["/jet/prs"]
ENTRYPOINT ["/jet/login"]
CMD ["main"]
